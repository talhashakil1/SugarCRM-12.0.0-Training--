/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * Month Schedule View - extension of TimeLine View
 */
;(function() {

kendo = window.kendo;

//Dependencies start
var MS_PER_MINUTE = 60000, MS_PER_DAY = 86400000;
function levels(values, key) {
    var result = [];
    function collect(depth, values) {
        values = values[key];
        if (values) {
            var level = result[depth] = result[depth] || [];
            for (var idx = 0; idx < values.length; idx++) {
                level.push(values[idx]);
                collect(depth + 1, values[idx]);
            }
        }
    }
    collect(0, values);
    return result;
}
function cellspacing() {
    if (kendo.support.cssBorderSpacing) {
        return '';
    }
    return 'cellspacing="0"';
}
function table(tableRows, className) {
    if (!tableRows.length) {
        return '';
    }
    return '<table ' + cellspacing() + ' class="' + $.trim('k-scheduler-table ' + (className || '')) + '">' + '<tr>' + tableRows.join('</tr><tr>') + '</tr>' + '</table>';
}
function allDayTable(tableRows, className) {
    if (!tableRows.length) {
        return '';
    }
    return '<div style=\'position:relative\'>' + table(tableRows, className) + '</div>';
}
function getMilliseconds(date) {
    return toInvariantTime(date).getTime() - getDate(toInvariantTime(date));
}
function toInvariantTime(date) {
    var staticDate = new Date(1980, 1, 1, 0, 0, 0);
    if (date) {
        staticDate.setHours(date.getHours(), date.getMinutes(), date.getSeconds(), date.getMilliseconds());
    }
    return staticDate;
}
function getDate(date) {
    date = new Date(date.getFullYear(), date.getMonth(), date.getDate(), 0, 0, 0);
    adjustDST(date, 0);
    return date;
}
function adjustDST(date, hours) {
  if (hours === 0 && date.getHours() === 23) {
      date.setHours(date.getHours() + 2);
      return true;
  }
  return false;
}
//Dependencies end


function timesHeader(columnLevelCount, allDaySlot, rowCount) {
    var tableRows = [];
    tableRows.push('<th>&#8203;</th>'); // the new week column level - left
    columnLevelCount--; //remve column level for time

    if (rowCount > 0) {
        for (var idx = 0; idx < columnLevelCount; idx++) {
            tableRows.push('<th>&#8203;</th>');
        }
    }
    if (allDaySlot) {
        tableRows.push('<th class="k-scheduler-times-all-day">' + allDaySlot.text + '</th>');
    }
    if (rowCount < 1) {
        return $();
    }
    return $('<div class="k-scheduler-times">' + table(tableRows) + '</div>');
}
function datesHeader(columnLevels, columnCount, allDaySlot) {
    var dateTableRows = [];
    var columnIndex;

    //week row
    var level = columnLevels[0];
    var th = [];
    var colspan = columnCount / level.length;
    var smartColspan = 0;
    for (columnIndex = 0; columnIndex < level.length; columnIndex++) {
        var column = level[columnIndex];
        var dayInWeek = column.date.getDay();//it starts from 1
        var columnText = column.text;
        columnText = kendo.toString(column.date, "dd MMMM yyyy");

        if (smartColspan === 0) {
            smartColspan = 7 - dayInWeek + 1;// the colspan has to be at least 1
            if (columnIndex + smartColspan > level.length) {
                smartColspan = level.length - columnIndex;
            }
            th.push('<th colspan="' + smartColspan + '" class="' + (column.className || '') + '">' + columnText + '</th>');
        }
        smartColspan--;
    }
    dateTableRows.push(th.join(''));

    //remove times row
    columnLevels[1] = columnLevels[2];
    delete columnLevels[2];
    columnLevels.length = 2;

    for (var columnLevelIndex = 0; columnLevelIndex < columnLevels.length; columnLevelIndex++) {
        var level = columnLevels[columnLevelIndex];
        var th = [];
        var colspan = columnCount / level.length;
        for (columnIndex = 0; columnIndex < level.length; columnIndex++) {
            var column = level[columnIndex];
            th.push('<th colspan="' + (column.colspan || colspan) + '" class="' + (column.className || '') + '">' + column.text + '</th>');
        }
        dateTableRows.push(th.join(''));
    }
    var allDayTableRows = [];
    if (allDaySlot) {
        var lastLevel = columnLevels[columnLevels.length - 1];
        var td = [];
        var cellContent = allDaySlot.cellContent;
        for (columnIndex = 0; columnIndex < lastLevel.length; columnIndex++) {
            td.push('<td class="' + (lastLevel[columnIndex].className || '') + '">' + (cellContent ? cellContent(columnIndex) : '&nbsp;') + '</td>');
        }
        allDayTableRows.push(td.join(''));
    }
    return $('<div class="k-scheduler-header k-state-default">' + '<div class="k-scheduler-header-wrap">' + table(dateTableRows) + allDayTable(allDayTableRows, 'k-scheduler-header-all-day') + '</div>' + '</div>');
}

window.monthSchedule = kendo.ui.monthSchedule = kendo.ui.TimelineMonthView.extend({
  name: "monthSchedule",
  type: "monthSchedule",
  options: {
    dateHeaderTemplate: kendo.template('<span class=\'k-link k-nav-day\'>#=(kendo.format(\'{0:dddd}\', date)).substring(0,1)#</span>'),
    columnWidth: 50,
    name: "monthSchedule",
    type: "monthSchedule",
  },

  /**
    We have to use our custom methods for timesHeader and datesHeader
  */
  _topSection: function (columnLevels, allDaySlot, rowCount) {
      this.timesHeader = timesHeader(columnLevels.length, allDaySlot, rowCount);
      var columnCount = columnLevels[columnLevels.length - 1].length;
      this.datesHeader = datesHeader(columnLevels, columnCount, allDaySlot);

      return $('<tr>').append(
          this.timesHeader
              .add(this.datesHeader)
          .wrap('<td>').parent()
      );
  },

  /**
  	Added "date" on each column
  */
    _layout: function (dates) {
      var timeColumns = [];
      var columns = [];
      var that = this;
      var rows = [{ text: that.options.messages.defaultRowText }];
      var groupedView = that._groupedView;
      var minorTickSlots = [];
      for (var minorTickIndex = 0; minorTickIndex < that.options.minorTickCount; minorTickIndex++) {
          minorTickSlots.push({
              text: '&#8203;',
              className: 'k-last',
              minorTicks: true
          });
      }
      this._forTimeRange(that.startTime(), that.endTime(), function (date, majorTick, middleColumn, lastSlotColumn, minorSlotsCount) {
          var template = that.majorTimeHeaderTemplate;
          if (majorTick) {
              var timeColumn = {
                  text: template({ date: date }),
                  className: lastSlotColumn ? 'k-slot-cell' : '',
                  columns: minorTickSlots.slice(0, minorSlotsCount)
              };
              groupedView._setColspan(timeColumn);
              timeColumns.push(timeColumn);
          }
      });
      for (var idx = 0; idx < dates.length; idx++) {
          columns.push({
              text: that.dateHeaderTemplate({ date: dates[idx] }),
              className: 'k-slot-cell',
              columns: timeColumns.slice(0),
              date: dates[idx]
          });
      }
      var resources = this.groupedResources;
      if (resources.length) {
          if (this._groupOrientation() === 'vertical') {
              rows = groupedView._createRowsLayout(resources, null, this.groupHeaderTemplate, columns);
              columns = groupedView._createVerticalColumnsLayout(resources, null, this.groupHeaderTemplate, columns);
          } else {
              columns = groupedView._createColumnsLayout(resources, columns, this.groupHeaderTemplate, columns);
          }
      }
      return {
          columns: columns,
          rows: rows
      };
    },

    /**
      Set innerRect third parameter to "true" (snap) in order to show events on entire day
    */
    _positionEvent: function (eventObject) {
        var eventHeight = this.options.eventHeight + 2;
        var rect = eventObject.slotRange.innerRect(eventObject.start, eventObject.end, true);
        var left = this._adjustLeftPosition(rect.left);
        var width = rect.right - rect.left - 2;
        if (width < 0) {
          width = 0;
        }
        if (width < this.options.eventMinWidth) {
          var slotsCollection = eventObject.slotRange.collection;
          var lastSlot = slotsCollection._slots[slotsCollection._slots.length - 1];
          var offsetRight = lastSlot.offsetLeft + lastSlot.offsetWidth;
          width = this.options.eventMinWidth;
          if (offsetRight < left + width) {
              width = offsetRight - rect.left - 2;
          }
        }
        eventObject.element.css({
          top: eventObject.slotRange.start.offsetTop + eventObject.rowIndex * (eventHeight + 2) + 'px',
          left: left,
          width: width
        });
    },

    /**
     * We don't want to calculate colliding events.
     * Instead we treat all events as colliding, in order to render them on different rows (in the same cell)
     */
    _arrangeRows: function(eventObject, slotRange, eventGroup) {
        var startIndex = slotRange.start.index;
        var endIndex = slotRange.end.index;
        var rect = eventObject.slotRange.innerRect(eventObject.start, eventObject.end, false);
        var rectRight = rect.right + this.options.eventMinWidth;

        var events = [];
        var slotRangeEvents = slotRange.events();
        for (var slotEventIdx in slotRangeEvents) {
         	var slotEvent = slotRangeEvents[slotEventIdx];
            if (slotEvent.rectLeft && slotEvent.rectRight) {
               events.push(slotEvent);
            }
        }
        slotRange.addEvent({
            slotIndex: startIndex,
            start: startIndex,
            end: endIndex,
            rectLeft: rect.left,
            rectRight: rectRight,
            element: eventObject.element,
            uid: eventObject.uid
        });
        events.push({
            start: startIndex,
            end: endIndex,
            uid: eventObject.uid
        });
        var rows = kendo.ui.SchedulerView.createRows(events);
        if (eventGroup.maxRowCount < rows.length) {
            eventGroup.maxRowCount = rows.length;
        }
        for (var idx = 0, length = rows.length; idx < length; idx++) {
            var rowEvents = rows[idx].events;
            for (var j = 0, eventLength = rowEvents.length; j < eventLength; j++) {
                eventGroup.events[rowEvents[j].uid].rowIndex = idx;
            }
        }
    },
});

})();
