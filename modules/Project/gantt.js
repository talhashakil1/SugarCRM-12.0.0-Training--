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
SUGAR.gantt = function() {
	return {
		/* DATE FUNCTIONS */

		/**
	    /* calculates the number of days between date1 and date2
	     * @return number of days between dates
	     */
		daysBetween:function(date1,date2){
	    	var DSTAdjust = 0;

	    	oneMinute = 1000*60;
	    	var oneDay = oneMinute*60*24;

	    	date1.setHours(0);
	    	date1.setMinutes(0);
	    	date1.setSeconds(0);
	    	date2.setHours(0);
	    	date2.setMinutes(0);
	    	date2.setSeconds(0);

	    	if (date2 > date1){
	    		DSTAdjust = (date2.getTimezoneOffset() - date1.getTimezoneOffset()) * oneMinute;
	    	}
	    	else{
	    		DSTAdjust = (date1.getTimezoneOffset() - date2.getTimezoneOffset()) * oneMinute;
	    	}

	    	var diff = Math.abs(date2.getTime() - date1.getTime()) - DSTAdjust;

	    	return Math.ceil(diff/oneDay);
    	},

		compareToToday: function(date){
			var today = new Date();

			if ( (today.getMonth() == date.getMonth()) &&
				 (today.getDate() == date.getDate()) &&
				 (today.getFullYear() == date.getFullYear()) ){
				return true;
			}

			return false;
		},

	    fixDSTOffset: function(original_date, next_date){
	    	oneMinute = 1000*60;
	    	var oneDay = oneMinute*60*24;

	    	if ((original_date.getTimezoneOffset() - next_date.getTimezoneOffset()) < 0){
    			next_date.setTime(next_date.getTime() + oneDay);
    		}

   			return next_date;
	    },

		/* GANTT TABLE FUNCTIONS */

		getTaskRowMap: function(){
			var taskRows;
			var rowId;
			var rowMap = new Array();

			taskRows = document.getElementById('projectTable').getElementsByTagName("tr");

			// skip the header row, which doesn't include any data
			for(var i=1; i<taskRows.length; i++){
				rowId = taskRows[i].id.replace('project_task_row_', '');

				rowMap[i-1] = { id:SUGAR.grid.getActualRow(rowId) };
			}

			return rowMap;
		},

		createTable: function(view_type, calendar_start, bgcolor){
			var DSTAdjust = 0;

	    	var oneMinute = 1000*60;
	    	var oneDay = oneMinute*60*24;
	    	var oneWeek = oneDay*7;

	    	var rowData;

	        daysOfWeek = new Array('S','M','T','W','T','F','S');

			if (document.getElementById('gantt_chart_start_date').value.length != 0){
				calendar_start_date = SUGAR.grid.getJSDate(document.getElementById('gantt_chart_start_date').value);
				date = SUGAR.grid.getJSDate(document.getElementById('gantt_chart_start_date').value);
			}
			else{
				calendar_start_date = SUGAR.grid.getJSDate(document.getElementById('calendar_start').value);
				date = SUGAR.grid.getJSDate(document.getElementById('calendar_start').value);
			}

	        var ganttDiv = document.getElementById('gantt_space');

	        if (document.getElementById('gantt') != null){
	        	ganttDiv.removeChild(document.getElementById('gantt'));
	        }

	        ganttTable = document.createElement('table');
	        ganttTable.setAttribute('width', '100%');
	        ganttTable.setAttribute('border', '1');
	        ganttTable.setAttribute('cellpadding', '0');
	        ganttTable.setAttribute('cellspacing', '0');
	        ganttTable.setAttribute('id', 'gantt');

	        ganttTableBody = document.createElement('tbody');

	        /* Add Calendar Dates to Top Row of Gantt Chart */
	        ganttDates = document.createElement('tr');
	        ganttDates.setAttribute('bgcolor', bgcolor);
	        ganttDates.setAttribute('height', '35');
	        ganttDateEmptyFirstCell = document.createElement('td');
	        ganttDateEmptyFirstCell.setAttribute('align', 'middle');
	        ganttDateEmptyFirstCell.setAttribute('width', '5%');
	        ganttDateEmptyFirstCell.innerHTML = "<a href='#' onclick='SUGAR.gantt.moveChart(\"backward\", document.getElementById(\"gantt_chart_start_date\").value, \""+bgcolor+"\");'><img width='8' height='11' border='0' align='absmiddle' alt='Previous' src='index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=previous.gif'/></a>";
	        ganttDates.appendChild(ganttDateEmptyFirstCell);

			if (view_type == 'month'){
				for (var i=0; i<5; i++){
		            ganttDate = document.createElement('td');
		            ganttDate.setAttribute('colSpan', '7');

	        		nextDate = new Date(date.getTime() + i*oneWeek);
	        		if ((nextDate.getTimezoneOffset() - date.getTimezoneOffset()) != 0){
		        		DSTnextDate = new Date(nextDate.getTime() + 3600000);
		        		dateText = SUGAR.grid.getDisplayDate(DSTnextDate);
	        		}
	        		else{
	        			dateText = SUGAR.grid.getDisplayDate(nextDate);
	        		}

                    ganttDate.textContent = dateText;
	        		ganttDates.appendChild(ganttDate);
	        	}
	    	}
	    	else if (view_type == 'biweek'){
	    		for (var i=0; i<2; i++){
		            ganttDate = document.createElement('td');
		            ganttDate.setAttribute('colSpan', '7');

	        		nextDate = new Date(date.getTime() + i*oneWeek);
	        		if ((nextDate.getTimezoneOffset() - date.getTimezoneOffset()) != 0){
		        		DSTnextDate = new Date(nextDate.getTime() + 3600000);
			    		dateText = SUGAR.grid.getDisplayDate(DSTnextDate);
	        		}
	        		else{
			    		dateText = SUGAR.grid.getDisplayDate(nextDate);
	        		}
                    ganttDate.textContent = dateText;
	        		ganttDates.appendChild(ganttDate);
	        	}
	    	}
	    	else if (view_type == 'week'){
	            ganttDate = document.createElement('td');
	            ganttDate.setAttribute('colSpan', '7');

	    		nextDate = new Date(date.getTime());
	    		dateText = SUGAR.grid.getDisplayDate(nextDate);

                ganttDate.textContent = dateText;
	    		ganttDates.appendChild(ganttDate);
	    	}

	        ganttDateEmptyLastCell = document.createElement('td');
	        ganttDateEmptyLastCell.setAttribute('width', '5%');
	        ganttDateEmptyLastCell.setAttribute('align', 'middle');
	        ganttDateEmptyLastCell.innerHTML = "<a href='#' onclick='SUGAR.gantt.moveChart(\"forward\", document.getElementById(\"gantt_chart_start_date\").value, \""+bgcolor+"\");'><img width='8' height='11' border='0' align='absmiddle' alt='Next' src='index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=next.gif'/></a>";
	        ganttDates.appendChild(ganttDateEmptyLastCell)

			ganttTableBody.appendChild(ganttDates);
	    	ganttTable.appendChild(ganttTableBody);

	        /* Add Days of Week to Gantt Chart */
	        ganttRow = document.createElement('tr');
	        ganttRow.setAttribute('id', 'header_row');
	        ganttRow.setAttribute('bgcolor', bgcolor);
	        ganttRow.setAttribute('height', '15');
	        ganttEmptyFirstCell = document.createElement('td');
	        ganttEmptyFirstCell.setAttribute('width', '5%');
	        ganttEmptyFirstCell.innerHTML = '\u00a0';
	        ganttRow.appendChild(ganttEmptyFirstCell);

	        var offset = calendar_start_date.getDay();

               tempDate = SUGAR.grid.getJSDate(calendar_start);
               today = new Date;
	        /* VIEW TYPE is MONTH (5 weeks) */
	        if (view_type == 'month'){
	            for (var j=offset; j<(35+offset); j++){
	                ganttDate = document.createElement('td');
	                if (j%7 == 0){
	                    ganttDate.className = "sunday";
	                }
	                else if (j%7 == 6){
	                    ganttDate.className = "saturday";
	                }
	                else{
	                    ganttDate.className = "days";
	                }
	                ganttDate.setAttribute('width', '12');
	                ganttDate.innerHTML = daysOfWeek[j%7];

	                ganttDate.id = SUGAR.grid.getDisplayDate(tempDate);

	                if (SUGAR.gantt.compareToToday(tempDate)){
	                	ganttDate.setAttribute('bgcolor', '#FFFF00');
	                }

	                tempDate.setDate(tempDate.getDate() + 1);

	                ganttRow.appendChild(ganttDate);
	            }
	        }

	        /* VIEW TYPE is WEEK (7 days) */
	        else if (view_type == 'week'){
	            for (var j=offset; j<(7+offset); j++){
	                ganttDate = document.createElement('td');
	                if (j%7 == 0){
	                    ganttDate.className = "sunday";
	                }
	                else if (j%7 == 6){
	                    ganttDate.className = "saturday";
	                }
	                else{
	                    ganttDate.className = "days";
	                }
	                ganttDate.setAttribute('width', '60');
	                ganttDate.innerHTML = daysOfWeek[j%7];

	                ganttDate.id = SUGAR.grid.getDisplayDate(tempDate);

	                if (SUGAR.gantt.compareToToday(tempDate)){
	                	ganttDate.setAttribute('bgcolor', '#FFFF00');
	                }

	                tempDate.setDate(tempDate.getDate() + 1);

	                ganttRow.appendChild(ganttDate);
	            }
	        }

	        /* VIEW TYPE is 2-WEEKS (14 days) */
	        else if (view_type == 'biweek'){
	            for (var j=offset; j<(14+offset); j++){
	                ganttDate = document.createElement('td');
	                if (j%7 == 0){
	                    ganttDate.className = "sunday";
	                }
	                else if (j%7 == 6){
	                    ganttDate.className = "saturday";
	                }
	                else{
	                    ganttDate.className = "days";
	                }
	                ganttDate.setAttribute('width', '30');
	            	ganttDate.innerHTML = daysOfWeek[j%7];

	                ganttDate.id = SUGAR.grid.getDisplayDate(tempDate);

	                if (SUGAR.gantt.compareToToday(tempDate)){
	                	ganttDate.setAttribute('bgcolor', '#FFFF00');
	                }

	                tempDate.setDate(tempDate.getDate() + 1);

	                ganttRow.appendChild(ganttDate);
	            }
	        }

	        ganttEmptyLastCell = document.createElement('td');
	        ganttEmptyLastCell.innerHTML = '\u00a0';
	        ganttEmptyLastCell.setAttribute('width', '5%');
	        ganttRow.appendChild(ganttEmptyLastCell);

	        ganttTableBody.appendChild(ganttRow);
	        ganttTable.appendChild(ganttTableBody);

	        ganttDiv.appendChild(ganttTable);

	        document.getElementById('gantt').border = "1";
	        document.getElementById('gantt').cellPadding = "0";
	        document.getElementById('gantt').cellSpacing = "0";

	        /* Set Gantt Chart View */

	        document.getElementById('gantt_chart_view').value = view_type;

	        /* Add Gantt Rows */

	        rowMap = SUGAR.gantt.getTaskRowMap();

	        if (rowMap.length != 0){
	        	for (var i=0; i<rowMap.length; i++){
	        		SUGAR.gantt.addGanttRow(rowMap[i].id, true);
	        	}
	        }
	    },

	    moveChart: function(direction, current_gantt_start, bgcolor){
	    	oneMinute = 1000*60;
	    	var oneDay = oneMinute*60*24;
	    	var oneWeek = oneDay*7;

	    	var gantt_start_date = SUGAR.grid.getJSDate(current_gantt_start);
	    	var new_gantt_start = new Date();
	    	if (direction == 'forward'){
	    		new_gantt_start.setTime(gantt_start_date.getTime()+oneWeek);
	    	}
	    	else if (direction == 'backward'){
	    		new_gantt_start.setTime(gantt_start_date.getTime()-oneWeek);
	    	}

	    	new_gantt_start = SUGAR.gantt.fixDSTOffset(gantt_start_date, new_gantt_start);

	    	var return_gantt_date = SUGAR.grid.getDisplayDate(new_gantt_start);

	    	document.getElementById('gantt_chart_start_date').value = return_gantt_date;

	    	SUGAR.gantt.createTable(document.getElementById('gantt_chart_view').value, return_gantt_date, bgcolor);
	    },

	    getNumCols: function(){
	        headerRow = document.getElementById('header_row');
	        colArray = headerRow.getElementsByTagName("td");
	        return colArray.length;
	    },

	    isParent: function(task_num){
	    	if (document.getElementById('description_'+task_num+'_divlink').innerHTML.indexOf('.gif') != -1){
				return true;
			}
			return false;
	    },

	    animateBar: function(prefix, task_num, width){
	    	if (typeof width == 'undefined'){
	    		width = 100;
	    	}

	    	var barAnimation = new YAHOO.util.Anim(prefix+'_'+task_num);

	    	barAnimation.attributes.width = { from: 0, to: width, unit: '%' };
	    	barAnimation.duration = 1.0;
	    	barAnimation.method = YAHOO.util.Easing.easeOut;

	    	barAnimation.animate();
	    },

	    changeTask: function(task_num){
	    	if (!document.getElementById("gantt"))
	    		return;
	    	oneMinute = 1000*60;
	    	var oneDay = oneMinute*60*24;
	    	var oneWeek = oneDay*7;

	    	if (document.getElementById('gantt_chart_start_date').value != ''){
	    		calendar_start_date = SUGAR.grid.getJSDate(document.getElementById('gantt_chart_start_date').value);
	    	}
	    	else{
	    		calendar_start_date = SUGAR.grid.getJSDate(document.getElementById('calendar_start').value);
	    	}

	        var start_date = document.getElementById('date_start_'+task_num).value;
	        var end_date = document.getElementById('date_finish_'+task_num).value;
	        var duration;
	        var progress = document.getElementById('percent_complete_'+task_num).value;

			task_start_date = SUGAR.grid.getJSDate(start_date);
			task_end_date = SUGAR.grid.getJSDate(end_date);

	        if (SUGAR.gantt.daysBetween(task_start_date, task_end_date) > 0){
	        	duration = SUGAR.gantt.daysBetween(task_start_date, task_end_date) + 1;
	        }
	        else{
	        	duration = 1;
	        }

			calendar_end_date = new Date();
			calendar_end_date.setTime( calendar_start_date.getTime() + (SUGAR.gantt.getNumCols()-3)*oneDay );

			taskRow = document.getElementById('gantt_row_'+task_num);
			var emptyRow = false;

			var status = (SUGAR.gantt.isParent(task_num)) ? 'parent' : SUGAR.gantt.getStatus(progress);

			// check the range, make sure the task's start date doesn't fall before the calendar's start date
			if (task_start_date > calendar_start_date && task_start_date <= calendar_end_date){
				start = SUGAR.gantt.daysBetween(calendar_start_date, task_start_date);
				start++;
			}
			else{
				start = 1
				// check to see if the task duration overlaps with a date on the chart
				if (task_end_date < calendar_start_date){
					emptyRow = true;
				}
				// check to see if the task's end date overlaps with a date on the chart
				else if (task_start_date > calendar_end_date){
		    		emptyRow = true;
		    	}
		    	else if (duration == 0 || typeof duration == 'undefined' || duration == ''){
		    		emptyRow = true;
		    	}
		    	// the task end date and calendar's end date overlap, so compensate for that
				else if (task_end_date >= calendar_end_date){
					duration = duration - 1;
				}
				// the task's duration overlaps, so display the partial bar of the task
				else{
					duration = duration - SUGAR.gantt.daysBetween(calendar_start_date, task_start_date);
				}
			}

	        document.getElementById('task_'+task_num+'_id').colSpan = start;

	        var bar = document.getElementById('task_'+task_num+'_bar');

	        if (!emptyRow){
		        var maxMiddleCell = SUGAR.gantt.getNumCols() - document.getElementById('task_'+task_num+'_id').colSpan - 1;

		        duration = Math.min(maxMiddleCell, duration);
		        document.getElementById('task_'+task_num+'_bar').colSpan = duration;

		        document.getElementById('task_'+task_num).colSpan = SUGAR.gantt.getNumCols() - document.getElementById('task_'+task_num+'_id').colSpan - document.getElementById('task_'+task_num+'_bar').colSpan;
		        document.getElementById('task_'+task_num+'_bar').innerHTML = '<div style="width:0%" class="'+status+'" id="bar_'+task_num+'">\u00a0</div>';

		        if (status != 'inprogress'){
		        	SUGAR.gantt.animateBar('bar', task_num);
		        }
		        else{
		            SUGAR.gantt.setProgress(task_num, progress);
			    }

		        bar.onclick = function() {  SUGAR.gantt.taskOverLib(this,SUGAR.gantt.popupInfo(task_num),
						  						document.getElementById("description_"+task_num).value); }
	        }
	        else{
	        	/* remove middle and last cells for an empty row */
	        	document.getElementById('task_'+task_num+'_bar').colSpan = SUGAR.gantt.getNumCols() - 2;
		        document.getElementById('task_'+task_num+'_bar').innerHTML = '\u00a0';

		        bar.onmouseover = function() { }
		        bar.onmouseout = function() { }
	        }
	    },

	    hideGanttRow: function(row)
	    {
	    	if(document.getElementById("gantt_row_"+row))
            {
                document.getElementById("gantt_row_"+row).style.display = "none";
            }
	    },

	    showGanttRow: function(row)
	    {
            if(document.getElementById("gantt_row_"+row))
            {
	    	    document.getElementById("gantt_row_"+row).style.display = "";
            }
	    },

	    setProgress: function(task_num, progress){
	    	if(document.getElementById('percent_complete_'+task_num).value != '100' || document.getElementById('percent_complete_'+task_num).value != '0'){
	            var uncompleted = 100 - progress;

	    		if (progress == 0 || progress == null || progress == ""){
		    		document.getElementById('task_'+task_num+'_bar').innerHTML = '<div id="bar_'+task_num+'" class="inprogress" style="width: 0%">\u00a0</div>';
	    		}
	    		else{
		            document.getElementById('task_'+task_num+'_bar').innerHTML = '<div id="inprogress_bar_'+task_num+'" class="inprogress_bar" style="width: 0">\u00a0</div><div id="bar_'+task_num+'" class="inprogress" style="width: 0%">\u00a0</div>';
		        }
	        }

	        if (uncompleted != 0){
	        	SUGAR.gantt.animateBar('inprogress_bar', task_num, progress);
	        }
	        SUGAR.gantt.animateBar('bar', task_num, uncompleted);

	        return true;
	    },

	    getStatus: function(progress){
	    	if (progress == '0' || progress == "" || progress == null){
				return 'notstarted';
			}
			else if (progress == '100'){
				return 'completed';
			}
			else{
				return 'inprogress';
			}
	    },

	    addGanttRow: function(task_num, new_table){
	        var tbl = document.getElementById('gantt');

	        if (new_table){
	        	var rowIndex = tbl.rows.length;
	        }
	        else{
	        	var rowIndex = task_num;
	        	rowIndex++;
	        }

	        var row = tbl.insertRow(rowIndex);
            var mappedRowId = SUGAR.grid.getMappedRow(task_num);
	        var mappedRow = document.getElementById('project_task_row_' + task_num);
            var row_id = 'gantt_row_'+mappedRowId;
            row.setAttribute('id', row_id);
        	row.setAttribute('height', mappedRow ? mappedRow.offsetHeight : 28);

	        // insert Left Cell
	        var cellLeft = row.insertCell(0);
	        cellLeft.innerHTML = '<div class="tasknum">'+task_num+'</div>';
	        cellLeft.setAttribute('id', 'task_'+SUGAR.grid.getMappedRow(task_num)+'_id');

	        // insert Middle Cell
	        var cellMiddle = row.insertCell(1);
	        cellMiddle.setAttribute('id', 'task_'+SUGAR.grid.getMappedRow(task_num)+'_bar');

	        // insert Right Cell
	        var cellRight = row.insertCell(2);
	        cellRight.innerHTML = task_num;
	        cellRight.setAttribute('id', 'task_'+SUGAR.grid.getMappedRow(task_num));

	        if (document.getElementById('is_milestone_' + SUGAR.grid.getMappedRow(task_num)).value == 1){
	        	SUGAR.gantt.markAsMilestone(SUGAR.grid.getMappedRow(task_num));
	        }

	        SUGAR.gantt.changeTask(SUGAR.grid.getMappedRow(task_num));
	    },

	    deleteGanttRow: function(task_num){
	    	var tbl = document.getElementById('gantt');

	    	tbl.deleteRow(task_num+1);
	    },

	    updateGanttRowMappings: function(index, value){
			document.getElementById("task_" + index + "_id").innerHTML = value;
			document.getElementById("task_" + index).innerHTML = value;
	    },

	    parentTask: function(tasknum){
	    	var status = 'parent';

	    	if (document.getElementById('task_'+tasknum+'_bar') != null){
	    		var cellMiddle = document.getElementById('task_'+tasknum+'_bar');
	    		cellMiddle.innerHTML = '<div style="width:0%" class="'+status+'" id="bar_'+tasknum+'">\u00a0</div>';

	    		SUGAR.gantt.changeTask(tasknum);
	    	}
	    },

	    removeParentTask: function(tasknum){
	    	var progress = document.getElementById('percent_complete_'+tasknum).value
	    	var status = SUGAR.gantt.getStatus(progress);

	    	var cellMiddle = document.getElementById('task_'+tasknum+'_bar');
	    	cellMiddle.innerHTML = '<div style="width:100%" class="'+status+'" id="bar_'+tasknum+'">\u00a0</div>';

	        if (status != 'inprogress'){
	        	SUGAR.gantt.animateBar('bar', tasknum);
	        }
	        else{
	        	SUGAR.gantt.setProgress(tasknum, progress);
	        }

	    },

	    markAsMilestone: function(tasknum){
	    	document.getElementById('task_' + tasknum + '_id').innerHTML += "*";
			document.getElementById('task_' + tasknum).innerHTML += "*";
	    },

	    unMarkAsMilestone: function(tasknum) {
	    	document.getElementById('task_' + tasknum + '_id').innerHTML = SUGAR.grid.getActualRow(tasknum);
			document.getElementById('task_' + tasknum).innerHTML = SUGAR.grid.getActualRow(tasknum);
	    },

	    selectRow: function(tasknum){
	        document.getElementById('editing').value = tasknum;

	        var start = document.getElementById('task_'+tasknum+'_id').colSpan - 1;

	        document.getElementById('start_date').value = SUGAR.gantt.calculateDateByDifference(document.getElementById('calendar_start').value, start);
	        document.getElementById('duration').value = document.getElementById('task_'+tasknum+'_bar').colSpan;
	        document.getElementById('status').value = document.getElementById('task_'+tasknum+'_bar').className;
	    },

	    fadeRow: function(task){
	    	YAHOO.util.Dom.setStyle(task, 'opacity', 0.5);
	    },

	    focusRow: function(task){
	    	YAHOO.util.Dom.setStyle(task, 'opacity', 1.0);
	    },

	    gridOnly: function(){
	    	var gantt = document.getElementById('gantt_area');
	    	var grid = document.getElementById('grid_space');
	    	var resizer = document.getElementById('resizer');

	    	if (grid.style.visibility == "hidden"){
	    		grid.style.visibility = "visible";
	    	}
			gantt.style.visibility="hidden";
			resizer.style.visibility="hidden";
			grid.style.width="100%";
			Set_Cookie("project_management_view", "grid_only", 3000, false, false,false);
			SUGAR.grid.showProjectButtons("grid_only");
	    },

	    ganttOnly: function(){
	    	var grid = document.getElementById('grid_space');
	    	var gantt = document.getElementById('gantt_area');
	    	var resizer = document.getElementById('resizer');

	    	if (gantt.style.visibility == "hidden"){
	    		gantt.style.visibility = "visible";
	    	}
	    	grid.style.visibility="hidden";
	    	grid.style.width="0%";
			resizer.style.visibility="hidden";
			YAHOO.util.Dom.setStyle('gantt_area', 'margin-left', '0px');
			Set_Cookie("project_management_view", "gantt_only", 3000, false, false,false);
			SUGAR.grid.showProjectButtons("gantt_only");
	    },

	    gridGanttView: function(){
	    	var grid = document.getElementById('grid_space');
	    	var gantt = document.getElementById('gantt_area');
	    	var resizer = document.getElementById('resizer');

	    	if (grid.style.visibility == "hidden"){
	    		grid.style.visibility = "visible";
	    	}
	    	if (gantt.style.visibility == "hidden"){
	    		gantt.style.visibility = "visible";
	    	}
	    	if (resizer.style.visibility == "hidden"){
	    		resizer.style.visibility = "visible";
	    	}

	    	YAHOO.util.Dom.setStyle('grid_space', 'width', '700px');
	    	YAHOO.util.Dom.setStyle('gantt_area', 'margin-left', '704px');
	    	YAHOO.util.Dom.setStyle('gantt_area', 'margin-right', '0px');
			Set_Cookie("project_management_view", "grid_gantt", 3000, false, false,false);
			SUGAR.grid.showProjectButtons("grid_gantt");
	    	initUI();
	    },

		sliderInit: function() {
			horizontalSlider = YAHOO.widget.Slider.getHorizSlider("horizBGDiv","horizHandleDiv",100,100,25);
			horizontalSlider.animate = false;

			horizontalSlider.onChange = function(offsetFromStart) {
				if (offsetFromStart == 25)
					SUGAR.gantt.createTable('week', document.getElementById('calendar_start').value);
				else if (offsetFromStart == 50)
					SUGAR.gantt.createTable('biweek', document.getElementById('calendar_start').value);
				else if (offsetFromStart == 75)
					SUGAR.gantt.createTable('month', document.getElementById('calendar_start').value);

				document.getElementById("horizBGDiv").title = "Horizontal Slider, value = " + offsetFromStart;
			};
		},

		init: function() {
			SUGAR.gantt.sliderInit();
			SUGAR.gantt.resizerInit();
		},

		popupInfo: function(task_num){
			/* start date */
			var start_date = SUGAR.language.get('Project', 'LBL_POPUP_DATE_START') + document.getElementById('date_start_'+task_num).value + "<br />";

			/* end_date */
			var end_date = SUGAR.language.get('Project', 'LBL_POPUP_DATE_FINISH') + document.getElementById('date_finish_'+task_num).value + "<br />";

			/* percent_complete */
			var percent_complete = SUGAR.language.get('Project', 'LBL_POPUP_PERCENT_COMPLETE') + document.getElementById('percent_complete_'+task_num).value + "<br />";

			/* resources */
			if (document.getElementById('resource_full_name_'+task_num) && document.getElementById('resource_full_name_'+task_num).value != ''){
				var resource_full_name = SUGAR.language.get('Project', 'LBL_POPUP_RESOURCE_NAME') + document.getElementById('resource_full_name_'+task_num).value + "<br />";
			}
			else{
				var resource_full_name = '';
			}

			return start_date + end_date + percent_complete + resource_full_name;

		},

		taskOverLib: function(el,info, description){
			SUGAR.util.getStaticAdditionalDetails(el,info,description);
		},

		/* Calendar stuff */
		setupCalendar: function(dateformat, bgcolor) {
			calendar_dateformat = dateformat;
			bg_color = bgcolor;

			Calendar.setup ({
					inputField : "calendar_start", ifFormat : calendar_dateformat, showsTime : false, button : "calendar_start", singleClick : true, step : 1, weekNumbers:false
			});
		}
		/* end Calendar */

	};
}(); // end gantt
