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
/*global AdamShape, jCore, $, AdamActivityContainerBehavior, AdamActivityResizeBehavior,
 PMSE.Action, translate, AdamMarker, CommandDefaultFlow,
 AdamShapeMarkerCommand, AdamShapeLayerCommand, RestProxy, SUGAR_URL, PMSE.Window, PMSE_DESIGNER_FORM_TRANSLATIONS,
 PMSE.Form, ItemMatrixField, HiddenField, LabelField, TextField, ComboboxField, adamUID,
 CheckboxField, CommandAdam, ItemUpdaterField, PROJECT_MODULE, FieldOption, MessagePanel, RestClient,
 NumberField, CheckboxGroup
 */
// jscs:disable requireCamelCaseOrUpperCaseIdentifiers
var PMSE = PMSE || {};
/**
 * @class AdamActivity
 * Handle BPMN Activities (Tasks)
 * @extend AdamShape
 *
 * @constructor
 * Create a new Activity Object
 * @param {Object} options
 */
var AdamActivity = function (options) {
    AdamShape.call(this, options);
    /**
     * Activity Alphanumeric unique identifier
     * @type {String}
     */
    this.act_uid = null;
    /**
     * Activity Type
     * Values accepted for SugarCRM Module: TASK
     * @type {String}
     */
    this.act_type = null;
    /**
     * Define if the task is for compensation (BPMN)
     * @type {Boolean}
     */
    this.act_is_for_compensation = null;
    /**
     * Define the quantity needed to start the activity
     * @type {Number}
     */
    this.act_start_quantity = null;
    /**
     * Define the quantity needed to complete the activity
     * @type {Number}
     */
    this.act_completion_quantity = null;
    /**
     * Define the task type.
     * For SugarCRM module only support: USERTASK
     * @type {String}
     */
    this.act_task_type = null;
    /**
     * Define the activity implementation
     * @type {String}
     */
    this.act_implementation = null;
    /**
     * Define the instatiation status
     * @type {Boolean}
     */
    this.act_instantiate = null;
    /**
     * Define the script type supported
     * @type {String}
     */
    this.act_script_type = null;
    /**
     * Define the script
     * @type {String}
     */
    this.act_script = null;
    /**
     * Defines the loop type accepted
     * @type {String}
     */
    this.act_loop_type = null;
    /**
     * Define if the test to complete the loop would be executed before o later
     * @type {Boolean}
     */
    this.act_test_before = null;
    /**
     * Defines the maximum value of loops allowed
     * @type {Number}
     */
    this.act_loop_maximum = null;
    /**
     * Defines the loop condition
     * @type {String}
     */
    this.act_loop_condition = null;
    /**
     * Defines the loop cardinality
     * @type {String}
     */
    this.act_loop_cardinality = null;
    /**
     * Defines the loop behavior
     * @type {String}
     */
    this.act_loop_behavior = null;
    /**
     * Define if the activity has an adhoc behavior
     * @type {Boolean}
     */
    this.act_is_adhoc = null;
    /**
     * Defines if the activity is collapsed
     * @type {Boolean}
     */
    this.act_is_collapsed = null;
    /**
     * Defines the condition needed to complete the activity
     * @type {String}
     */
    this.act_completion_condition = null;
    /**
     * Define the order to be executed when exists several task in parallel mode
     * @type {Number}
     */
    this.act_ordering = 'PARALLEL';
    /**
     * Defines if into a loop all instances would be cancelled
     * @type {Boolean}
     */
    this.act_cancel_remaining_instances = null;
    /**
     * Defines the protocol used for the transaction activities
     * @type {String}
     */
    this.act_protocol = null;
    /**
     * Define the method to be used when activity consume/execute a web service
     * @type {String}
     */
    this.act_method = null;
    /**
     * Define the scope of the activity
     * @type {Boolean}
     */
    this.act_is_global = null;
    /**
     * Define the referer to another object (Process, Participant or Another Activity)
     * @type {String}
     */
    this.act_referer = null;
    /**
     * Defines the default flow when activity is related to two or more flows
     * @type {String}
     */
    this.act_default_flow = null;
    /**
     * Defines the diagram related when activity plays as subprocess
     * @type {String}
     */
    this.act_master_diagram = null;
    /**
     * Array of Boundary places created to receive boundary events
     * @type {Array}
     */
    this.boundaryPlaces = new jCore.ArrayList();
    /**
     * Array of Boundary events attached to this activity
     * @type {Array}
     */
    this.boundaryArray = new jCore.ArrayList();

    /**
     * App alert key for proxy errors.
     * @type {string}
     */
    this.proxyErrorKey = 'proxy_error';

    AdamActivity.prototype.initObject.call(this, options);
};

/**
 * Point the prototype to the AdamShape Object
 * @type {AdamShape}
 */
AdamActivity.prototype = new AdamShape();

/**
 * Define the Object Type
 * @type {String}
 */
AdamActivity.prototype.type = 'AdamActivity';
/**
 * Points to container behavior object
 * @type {Object}
 */
AdamActivity.prototype.activityContainerBehavior = null;
/**
 * Points to the resize behavior object
 * @type {Object}
 */
AdamActivity.prototype.activityResizeBehavior = null;

/**
 * Initialize object with default values
 * @param options
 */
AdamActivity.prototype.initObject = function (options) {
    var defaults = {
        act_type: 'TASK',
        act_loop_type: 'NONE',
        act_is_for_compensation: false,
        act_task_type: 'EMPTY',
        act_is_collapsed: false,
        act_is_global: false,
        act_loop_cardinality: 0,
        act_loop_maximum: 0,
        act_start_quantity: 1,
        act_is_adhoc: false,
        act_cancel_remaining_instances: true,
        act_instantiate: false,
        act_completion_quantity: 0,
        act_implementation: '',
        act_script: '',
        act_script_type: '',
        act_default_flow: 0,
        minHeight: 50,
        minWidth: 100,
        maxHeight: 500,
        maxWidth: 600
    };
    $.extend(true, defaults, options);
    this.setActivityUid(defaults.act_uid)
        .setActivityType(defaults.act_type)
        .setLoopType(defaults.act_loop_type)
        .setIsForCompensation(defaults.act_is_for_compensation)
        .setTaskType(defaults.act_task_type)
        .setIsCollapsed(defaults.act_is_collapsed)
        .setIsGlobal(defaults.act_is_global)
        .setLoopCardinality(defaults.act_loop_cardinality)
        .setLoopMaximun(defaults.act_loop_maximum)
        .setStartQuantity(defaults.act_start_quantity)
        .setIsAdhoc(defaults.act_is_adhoc)
        .setCancelRemainingInstances(defaults.act_cancel_remaining_instances)
        .setInstantiate(defaults.act_instantiate)
        .setImplementation(defaults.act_implementation)
        .setCompletionQuantity(defaults.act_completion_quantity)
        .setScript(defaults.act_script)
        .setScriptType(defaults.act_script_type)
        .setDefaultFlow(defaults.act_default_flow)
        .setMinHeight(defaults.minHeight)
        .setMinWidth(defaults.minWidth)
        .setMaxHeight(defaults.maxHeight)
        .setMaxWidth(defaults.maxWidth);
    if (defaults.act_name) {
        this.setName(defaults.act_name);
    }
    if (defaults.markers) {
        this.addMarkers(defaults.markers, this);
    }
};

/**
 * Returns the activity type property
 * @return {String}
 */
AdamActivity.prototype.getActivityType = function () {
    return this.act_type;
};

/**
 * Return the activity task type property
 * @returns {String}
 */
AdamActivity.prototype.getActivityTaskType = function () {
    return this.act_task_type;
};

/**
 * Returns the activity script property
 * @returns {null}
 */
AdamActivity.prototype.getActivityScript = function () {
    return this.act_script;
};

/**
 * Returns the activity script type property
 * @returns {null}
 */
AdamActivity.prototype.getActivityScriptType = function () {
    return this.act_script_type;
};

/**
 * Returns the is for compensation property
 * @return {Boolean}
 */
AdamActivity.prototype.getIsForCompensation = function () {
    return this.act_is_for_compensation;
};

/**
 * Returns if the activity cancel remaining instances when is cancelled
 * @return {Boolean}
 */
AdamActivity.prototype.getCancelRemainingInstances = function () {
    return this.act_cancel_remaining_instances;
};

/**
 * Returns the quantity needed to complete an activity
 * @return {Number}
 */
AdamActivity.prototype.getCompletionQuantity = function () {
    return this.act_completion_quantity;
};

/**
 * Set is the activity is global (scope)
 * @param {Boolean} value
 * @return {*}
 */
AdamActivity.prototype.getIsGlobal = function () {
    return this.act_is_global;
};

/**
 * Returns the start quantity needed to start an activity
 * @return  {Number}
 */
AdamActivity.prototype.getStartQuantity = function () {
    return this.act_start_quantity;
};

/**
 * Returns if the instance is active
 * @return {Boolean}
 */
AdamActivity.prototype.getInstantiate = function () {
    return this.act_instantiate;
};

/**
 * Returns the implementation property
 * @return {String}
 */
AdamActivity.prototype.getImplementation = function () {
    return this.act_implementation;
};

/**
 * Return the Script property
 * @param {Number} value
 * @return {*}
 */
AdamActivity.prototype.getScript = function () {
    return this.act_script;
};

/**
 * Return the Script Type property
 * @param {Number} value
 * @return {*}
 */
AdamActivity.prototype.getScriptType = function () {
    return this.act_script_type;
};

/**
 * Return the minimun height of an activity
 * @return {*}
 */
AdamActivity.prototype.getMinHeight = function () {
    return this.minHeight;
};

/**
 * Return the minimun width of an activity
 * @return {*}
 */
AdamActivity.prototype.getMinWidth = function () {
    return this.minWidth;
};
/**
 * Return the maximun height of an activity
 * @return {*}
 */
AdamActivity.prototype.getMaxHeight = function () {
    return this.maxHeight;
};

/**
 * Return the maximun width of an activity
 * @return {*}
 */
AdamActivity.prototype.getMaxWidth = function () {
    return this.maxWidth;
};
/**
 * Sets the act_uid property
 * @param {String} value
 * @return {*}
 */
AdamActivity.prototype.setActivityUid = function (value) {
    this.act_uid = value;
    return this;
};

/**
 * Sets the activity type property
 * @param {String} type
 * @return {*}
 */
AdamActivity.prototype.setActivityType = function (type) {
    this.act_type = type;
    return this;
};

/**
 * Sets the implementation property
 * @param {String} type
 * @return {*}
 */
AdamActivity.prototype.setImplementation = function (type) {
    this.act_implementation = type;
    return this;
};

/**
 * Set the loop type property
 * @param {String} type
 * @return {*}
 */
AdamActivity.prototype.setLoopType = function (type) {
    this.act_loop_type = type;
    return this;
};

/**
 * Sets the collapsed property
 * @param {Boolean} value
 * @return {*}
 */
AdamActivity.prototype.setIsCollapsed = function (value) {
    if (_.isBoolean(value)) {
        this.act_is_collapsed = value;
    }
    return this;
};

/**
 * Sets the is for compensation property
 * @param {Boolean} value
 * @return {*}
 */
AdamActivity.prototype.setIsForCompensation = function (value) {
    if (_.isBoolean(value)) {
        this.act_is_for_compensation = value;
    }
    return this;
};

/**
 * Sets the activity task type
 * @param {String} type
 * @return {*}
 */
AdamActivity.prototype.setTaskType = function (type) {
    this.act_task_type = type;
    return this;
};

/**
 * Set is the activity is global (scope)
 * @param {Boolean} value
 * @return {*}
 */
AdamActivity.prototype.setIsGlobal = function (value) {
    if (_.isBoolean(value)) {
        this.act_is_global = value;
    }
    return this;
};

/**
 * Set the loop cardinality of the activity
 * @param {String} value
 * @return {*}
 */
AdamActivity.prototype.setLoopCardinality = function (value) {
    this.act_loop_cardinality = value;
    return this;
};

/**
 * Sets the loop maximun value
 * @param {Number} value
 * @return {*}
 */
AdamActivity.prototype.setLoopMaximun = function (value) {
    this.act_loop_maximum = value;
    return this;
};

/**
 * Sets the start quantity needed to start an activity
 * @param  {Number} value
 * @return {*}
 */
AdamActivity.prototype.setStartQuantity = function (value) {
    this.act_start_quantity = value;
    return this;
};

/**
 * Sets if the activity has an adhoc behavior
 * @param {Boolean} value
 * @return {*}
 */
AdamActivity.prototype.setIsAdhoc = function (value) {
    if (_.isBoolean(value)) {
        this.act_is_adhoc = value;
    }
    return this;
};

/**
 * Sets if the activity cancel remaining instances when is cancelled
 * @param {Boolean} value
 * @return {*}
 */
AdamActivity.prototype.setCancelRemainingInstances = function (value) {
    if (_.isBoolean(value)) {
        this.act_cancel_remaining_instances = value;
    }
    return this;
};

/**
 * Sets if the instance is active
 * @param {Boolean} value
 * @return {*}
 */
AdamActivity.prototype.setInstantiate = function (value) {
    if (_.isBoolean(value)) {
        this.act_instantiate = value;
    }
    return this;
};

/**
 * Sets the quantity needed to complete an activity
 * @param {Number} value
 * @return {*}
 */
AdamActivity.prototype.setCompletionQuantity = function (value) {
    this.act_completion_quantity = value;
    return this;
};

/**
 * Sets the Script property
 * @param {Number} value
 * @return {*}
 */
AdamActivity.prototype.setScript = function (value) {
    this.act_script = value;
    return this;
};

/**
 * Sets the Script Type property
 * @param {Number} value
 * @return {*}
 */
AdamActivity.prototype.setScriptType = function (value) {
    this.act_script_type = value;

    return this;
};

/**
 * Sets te default_flow property
 * @param value
 * @return {*}
 */
AdamActivity.prototype.setDefaultFlow = function (value) {
    if (this.html) {
        AdamShape.prototype.setDefaultFlow.call(this, value);
        this.canvas.triggerCommandAdam(this, ['act_default_flow'], [this.act_default_flow], [value]);
    }
    this.act_default_flow = value;
    return this;
};
/**
 * Sets the minimun height
 * @param {Number} value
 * @return {*}
 */
AdamActivity.prototype.setMinHeight = function (value) {
    this.minHeight = value;
    return this;
};

/**
 * Sets the minimun with
 * @param {Number} value
 * @return {*}
 */
AdamActivity.prototype.setMinWidth = function (value) {
    this.minWidth = value;

    return this;
};
/**
 * Sets the maximun height
 * @param {Number} value
 * @return {*}
 */
AdamActivity.prototype.setMaxHeight = function (value) {
    this.maxHeight = value;
    return this;
};

/**
 * Sets the maximun with
 * @param {Number} value
 * @return {*}
 */
AdamActivity.prototype.setMaxWidth = function (value) {
    this.maxWidth = value;

    return this;
};
/**
 * Returns the clean object to be sent to the backend
 * @return {Object}
 */
AdamActivity.prototype.getDBObject = function () {
    var name = this.getName();
    return {
        act_uid: this.act_uid,
        act_name: name,
        act_type: this.act_type,
        act_task_type: this.act_task_type,
        act_is_for_compensation: this.act_is_for_compensation,
        act_start_quantity: this.act_start_quantity,
        act_completion_quantity: this.act_completion_quantity,
        act_implementation: this.act_implementation,
        act_instantiate: this.act_instantiate,
        act_script_type: this.act_script_type,
        act_script: this.act_script,
        act_loop_type: this.act_loop_type,
        act_test_before: this.act_test_before,
        act_loop_maximum: this.act_loop_maximum,
        act_loop_condition: this.act_loop_condition,
        act_loop_cardinality: this.act_loop_cardinality,
        act_loop_behavior: this.act_loop_behavior,
        act_is_adhoc: this.act_is_adhoc,
        act_is_collapsed: this.act_is_collapsed,
        act_completion_condition: this.act_completion_condition,
        act_ordering: this.act_ordering,
        act_cancel_remaining_instances: this.act_cancel_remaining_instances,
        act_protocol: this.act_protocol,
        act_method: this.act_method,
        act_is_global: this.act_is_global,
        act_referer: this.act_referer,
        act_default_flow: this.act_default_flow,
        act_master_diagram: this.act_master_diagram,
        bou_x: this.x,
        bou_y: this.y,
        bou_width: this.width,
        bou_height: this.height,
        bou_container: 'bpmnDiagram',
        element_id: this.canvas.dia_id
    };
};

AdamActivity.prototype.getMarkers = function () {
    return this.markersArray;
};

/**
 * Factory function to handle several container behavior elements
 * @param {String} type
 * @return {*}
 */
AdamActivity.prototype.containerBehaviorFactory = function (type) {
    var out;
    if (type === 'activity') {
        if (!this.activityContainerBehavior) {
            this.activityContainerBehavior = new AdamActivityContainerBehavior();
        }
        out = this.activityContainerBehavior;
    } else {
        out = AdamShape.prototype.containerBehaviorFactory.call(this, type);
    }
    return out;
};

/**
 * Factory function to handle several resize behavior elements
 * @param {String} type
 * @return {*}
 */
AdamActivity.prototype.resizeBehaviorFactory = function (type) {
    var out;
    if (type === 'activityResize') {
        if (!this.activityResizeBehavior) {
            this.activityResizeBehavior = new AdamActivityResizeBehavior();
        }
        out = this.activityResizeBehavior;
    } else {
        out = AdamShape.prototype.resizeBehaviorFactory.call(this, type);
    }
    return out;
};

/**
 * Add adam custom css classes to the HTML
 * @return {*}
 */
AdamActivity.prototype.createHTML = function () {
    jCore.CustomShape.prototype.createHTML.call(this);
    this.style.addClasses(['adam_activity', "adam_droppable"]);
    return this.html;
};

/**
 * Create/Initialize the boundary places array
 * @return {*}
 */
AdamActivity.prototype.makeBoundaryPlaces = function () {
    var bouX,
        bouY,
        factor = 3,
        space,
        number = 0,
        shape = this.boundaryArray.getFirst(),
        numBottom = 0,
        numLeft = 0,
        numTop = 0,
        numRight = 0;

    //BOTTON
    bouY = shape.parent.getHeight() - shape.getHeight() / 2; // Y is Constant
    bouX = shape.parent.getWidth() - (numBottom + 1) * (shape.getWidth() + factor);
    while (bouX + shape.getWidth() / 2 > 0) {
        space = {};
        space.x = bouX;
        space.y = bouY;
        space.available = true;
        space.number = number;
        space.location = 'BOTTOM';
        shape.parent.boundaryPlaces.insert(space);
        number += 1;
        numBottom += 1;
        bouX = shape.parent.getWidth() - (numBottom + 1) * (shape.getWidth() + factor);
    }

    //LEFT
    bouY = shape.parent.getHeight() - (numLeft + 1) * (shape.getHeight() + factor);
    bouX = -shape.getHeight() / 2;   // X is Constant
    while (bouY + shape.getHeight() / 2 > 0) {
        space = {};
        space.x = bouX;
        space.y = bouY;
        space.available = true;
        space.number = number;
        space.location = 'LEFT';
        shape.parent.boundaryPlaces.insert(space);
        number += 1;
        numLeft += 1;
        bouY = shape.parent.getHeight() - (numLeft + 1) * (shape.getHeight() + factor);
    }

    //TOP
    bouY = -shape.getWidth() / 2; // X is Constant
    bouX = numTop * (shape.getWidth() + factor);
    while (bouX + shape.getWidth() / 2 < shape.parent.getWidth()) {
        space = {};
        space.x = bouX;
        space.y = bouY;
        space.available = true;
        space.number = number;
        space.location = 'TOP';
        shape.parent.boundaryPlaces.insert(space);
        number += 1;
        numTop += 1;
        bouX = numTop * (shape.getWidth() + factor);
    }

    //RIGHT
    bouY = numRight * (shape.getHeight() + factor);
    bouX = shape.parent.getWidth() - shape.getWidth() / 2; // Y is Constant
    while (bouY + shape.getHeight() / 2 < shape.parent.getHeight()) {
        space = {};
        space.x = bouX;
        space.y = bouY;
        space.available = true;
        space.number = number;
        space.location = 'RIGHT';
        shape.parent.boundaryPlaces.insert(space);
        number += 1;
        numRight += 1;
        bouY = numRight * (shape.getHeight() + factor);
    }
    return this;
};

/**
 * Sets the boundary element to a selected boundary place
 * @param {AdamEvent} shape
 * @param {Number} number
 * @return {*}
 */
AdamActivity.prototype.setBoundary = function (shape, number) {
    var bouPlace = this.boundaryPlaces.get(number);
    bouPlace.available = false;
    shape.setPosition(bouPlace.x, bouPlace.y);
    return this;
};

/**
 * Returns the current place available to attach boundary events.
 * Retuns false if there's not place available
 * @return {Number/Boolean}
 */
AdamActivity.prototype.getAvailableBoundaryPlace = function () {
    var place = 0,
        bouPlace,
        sw = true,
        i;
    for (i = 0; i < this.boundaryPlaces.getSize(); i += 1) {
        bouPlace = this.boundaryPlaces.get(i);
        if (bouPlace.available && sw) {
            place = bouPlace.number;
            sw = false;
        }
    }
    if (sw) {
        place = false;
    }
    return place;
};

/**
 * Update Boundary Places Array
 * @return {*}
 */
AdamActivity.prototype.updateBoundaryPlaces = function () {
    var i,
        aux,
        k = 0;
    aux =  new jCore.ArrayList();
    for (i = 0; i < this.boundaryPlaces.getSize(); i += 1) {
        aux.insert(this.boundaryPlaces.get(i));
    }

    this.boundaryPlaces.clear();
    this.makeBoundaryPlaces();

    for (i = 0; i < this.boundaryPlaces.getSize(); i += 1) {
        if (k < aux.getSize()) {
            this.boundaryPlaces.get(i).available = aux.get(k).available;
            k += 1;
        }
    }
    return this;
};

/**
 * Returns the number of boundary events attached to this activity
 * @return {Number}
 */
AdamActivity.prototype.getNumberOfBoundaries = function () {
    var child,
        i,
        bouNum = 0;

    for (i = 0; i < this.getChildren().getSize(); i += 1) {
        child = this.getChildren().get(i);
        if (child.getType() === 'AdamEvent' && child.evn_type === 'BOUNDARY') {
            bouNum = bouNum + 1;
        }
    }
    return bouNum;
};

/**
 * Update boundary positions when exists a change into the boundary array
 * @param {Boolean} createIntersections
 */
AdamActivity.prototype.updateBoundaryPositions = function (createIntersections) {
    var child,
        port,
        i,
        j;

    if (this.getNumberOfBoundaries() > 0) {

        this.updateBoundaryPlaces();
        for (i = 0; i < this.getChildren().getSize(); i += 1) {
            child = this.getChildren().get(i);
            if (child.getType() === 'AdamEvent'
                && child.evn_type === 'BOUNDARY') {
                child.setPosition(this.boundaryPlaces.get(child.numberRelativeToActivity).x,
                    this.boundaryPlaces.get(child.numberRelativeToActivity).y
                );
                for (j = 0; j < child.ports.getSize(); j += 1) {
                    port = child.ports.get(j);
                    port.setPosition(port.x, port.y);
                    port.connection.disconnect().connect();
                    if (createIntersections) {
                        port.connection.setSegmentMoveHandlers();
                        port.connection.checkAndCreateIntersectionsWithAll();
                    }
                }
            }
        }
    }
};

/**
 * Adds markers to the arrayMarker property
 * @param {Array} markers
 * @param {AdamShape} parent
 * @return {*}
 */
AdamActivity.prototype.addMarkers = function (markers, parent) {
    var newMarker, i, factoryMarker;
    if (_.isArray(markers)) {
        for (i = 0; i < markers.length; i += 1) {
            factoryMarker = markers[i];
            factoryMarker.parent = parent;
            factoryMarker.canvas = parent.canvas;
            newMarker = new AdamMarker(factoryMarker);
            this.markersArray.insert(newMarker);
        }
    }
    return this;
};

/**
 * Paint the shape
 */
AdamActivity.prototype.paint = function () {
    var m, marker;
    AdamShape.prototype.paint.call(this);
    for (m = 0; m < this.markersArray.getSize(); m += 1) {
        marker = this.markersArray.get(m);
        marker.paint();
    }
};


AdamActivity.prototype.getActivityType = function () {
    return this.act_type;
};

AdamActivity.prototype._getScriptTypeActionHandler = function (newScriptAction) {
    var self = this;
    return function () {
        if (self.act_script_type === 'NONE') {
            self.updateScriptType(newScriptAction);
            self.getCanvas().project.save();
        } else {
            App.alert.show(
                'change_script_type_confirmation',
                {
                    level: 'confirmation',
                    messages: translate('LBL_PMSE_CHANGE_ACTION_TYPE_CONFIRMATION'),
                    onConfirm: function () {
                        self.updateScriptType(newScriptAction);
                        self.getCanvas().project.save();
                    }
                }
            );
        }
    };
};

AdamActivity.prototype.getContextMenu = function () {
    var self = this,
        deleteAction,
        usertaskAction,
        scriptAction,
        configureAction,
        assignUsersAction,
        elements = this.getDestElements(),
        defaultflowActive = (elements.length > 1) ? false : true,
        defaultflownoneAction,
        defaultflowItems = [],
        name,
        items,
        i,
        shape,
        handle,
        port,
        connection,
        actionItems = [],
        noneAction,
        assignUserAction,
        assignTeamAction,
        changeFieldAction,
        addRelatedRecordAction,
        businessRuleAction,
        defaultflowAction;
    deleteAction = new PMSE.Action({
        text: translate('LBL_PMSE_CONTEXT_MENU_DELETE'),
        cssStyle: 'adam-menu-icon-delete',
        handler: function () {
            var shape;
            shape = self.canvas.customShapes.find('id', self.id);
            if (shape) {
                shape.canvas.emptyCurrentSelection();
                shape.canvas.addToSelection(shape);
                shape.canvas.removeElements();
            }
        }
    });

    noneAction = new PMSE.Action({
        text: translate('LBL_PMSE_CONTEXT_MENU_UNASSIGNED'),
        cssStyle: 'adam-menu-script-none',
        handler: self._getScriptTypeActionHandler('NONE'),
        selected: (this.act_script_type === 'NONE')
    });

    assignUserAction = new PMSE.Action({
        text: translate('LBL_PMSE_CONTEXT_MENU_ASSIGN_USER'),
        cssStyle: 'adam-menu-script-assign_user',
        handler: self._getScriptTypeActionHandler('ASSIGN_USER'),
        selected: (this.act_script_type === 'ASSIGN_USER')
    });

    assignTeamAction = new PMSE.Action({
        text: translate('LBL_PMSE_CONTEXT_MENU_ASSIGN_TEAM'),
        cssStyle: 'adam-menu-script-assign_team',
        handler: self._getScriptTypeActionHandler('ASSIGN_TEAM'),
        selected: (this.act_script_type === 'ASSIGN_TEAM')
    });

    changeFieldAction = new PMSE.Action({
        text: translate('LBL_PMSE_CONTEXT_MENU_CHANGE_FIELD'),
        cssStyle: 'adam-menu-script-change_field',
        handler: self._getScriptTypeActionHandler('CHANGE_FIELD'),
        selected: (this.act_script_type === 'CHANGE_FIELD')
    });

    addRelatedRecordAction = new PMSE.Action({
        text: translate('LBL_PMSE_CONTEXT_MENU_ADD_RELATED_RECORD'),
        cssStyle: 'adam-menu-script-add_related_record',
        toolTip: _.isEmpty(this.canvas.project.script_tasks.add_related_record) ? translate('LBL_PMSE_CANNOT_CONFIGURE_ADD_RELATED_RECORD') : null,
        disabled: _.isEmpty(this.canvas.project.script_tasks.add_related_record) ? true : false,
        handler: self._getScriptTypeActionHandler('ADD_RELATED_RECORD'),
        selected: (this.act_script_type === 'ADD_RELATED_RECORD')
    });

    businessRuleAction = new PMSE.Action({
        text: translate('LBL_PMSE_CONTEXT_MENU_BUSINESS_RULE'),
        cssStyle: 'adam-menu-script-business_rule',
        handler: self._getScriptTypeActionHandler('BUSINESS_RULE'),
        selected: (this.act_script_type === 'BUSINESS_RULE')
    });

    // Document Merge action
    documentMergeAction = new PMSE.Action({
        text: translate('LBL_PMSE_CONTEXT_MENU_DOCUMENT_MERGE'),
        cssStyle: 'adam-menu-script-document_merge',
        handler: self._getScriptTypeActionHandler('DOCUMENT_MERGE'),
        selected: (this.act_script_type === 'DOCUMENT_MERGE')
    });

    if (this.act_task_type === 'USERTASK') {
        configureAction = this.createConfigurateAction();
        assignUsersAction = this.createAssignUsersAction();
    } else {
        configureAction = this.actionFactory(this.act_script_type);
    }

    if (elements.length > 1) {
        handle  = function (id) {
            return function () {
                var cmd = new CommandDefaultFlow(self, id);
                cmd.execute();
                self.canvas.commandStack.add(cmd);
            };
        };
        defaultflownoneAction = new PMSE.Action({
            text: translate('LBL_PMSE_CONTEXT_MENU_NONE'),
            cssStyle : 'adam-menu-icon-none',
            handler: handle(""),
            selected: (self.act_default_flow !== 0) ? false : true
        });

        defaultflowItems.push(defaultflownoneAction);

        for (i = 0; i < this.getPorts().getSize(); i += 1) {
            port = this.getPorts().get(i);
            connection = port.connection;
            if (connection.srcPort.parent.getID() === this.getID()) {
                shape = connection.destPort.parent;

                switch (shape.getType()) {
                    case 'AdamActivity':
                        name = (shape.getName() !== '') ? shape.getName() : translate('LBL_PMSE_CONTEXT_MENU_DEFAULT_TASK');
                        break;
                    case 'AdamEvent':
                        name = (shape.getName() !== '') ? shape.getName() : translate('LBL_PMSE_CONTEXT_MENU_DEFAULT_EVENT');
                        break;
                    case 'AdamGateway':
                        name = (shape.getName() !== '') ? shape.getName() : translate('LBL_PMSE_CONTEXT_MENU_DEFAULT_GATEWAY');
                        break;
                }
                defaultflowItems.push(
                    new PMSE.Action({
                        text: name,
                        cssStyle : self.getCanvas().getTreeItem(shape).icon,
                        handler: handle(connection.getID()),
                        selected: (self.act_default_flow === connection.getID()) ? true : false
                    })
                );

            }
        }

        defaultflowAction = {
            label: translate('LBL_PMSE_CONTEXT_MENU_DEFAULT_FLOW'),
            icon: 'adam-menu-icon-default-flow',
            selected: defaultflowActive,
            menu: {
                items: defaultflowItems
            }
        };
    }

    items = [configureAction];
    if (this.act_task_type === 'USERTASK') {
        items.push({jtype: 'separator'}, assignUsersAction);
    }
    items.push({jtype: 'separator'});
    if (this.act_task_type === 'SCRIPTTASK') {
        actionItems.push(noneAction);
        actionItems.push(businessRuleAction);
        actionItems.push(assignUserAction, assignTeamAction, changeFieldAction, addRelatedRecordAction);

        // Handle docMerge as an action
        actionItems.push(documentMergeAction);

        // For custom actions to appear as PMSE.Action Types in the PMSE.Action menu,
        // create AdamActivity.prototype.customContextMenuActions and make it
        // return an array with objects defining the action's properties
        if (_.isFunction(AdamActivity.prototype.customContextMenuActions)) {
            _.each(this.customContextMenuActions(), function(action) {
                actionItems.push(new PMSE.Action({
                    text: action.text,
                    cssStyle: action.cssStyle,
                    handler: self._getScriptTypeActionHandler(action.name),
                    selected: (self.act_script_type === action.name)
                }));
            });
        }
        items.push(
            {
                label: translate('LBL_PMSE_CONTEXT_MENU_ACTION_TYPE'),
                icon : 'adam-menu-icon-convert',
                menu: {
                    items: actionItems
                }
            },
            {
                jtype: 'separator'
            }
        );
    }

    if (elements.length > 1  && this.act_task_type === 'USERTASK') {
        items.push(
            defaultflowAction,
            {
                jtype: 'separator'
            },
            deleteAction
        );
    } else {
        items.push(
            deleteAction
        );
    }

    return {
        items: items
    };
};

AdamActivity.prototype.updateDefaultFlow = function (destID) {
    this.act_default_flow = destID;
    return this;
};

AdamActivity.prototype.updateTaskType = function (newType) {
    var updateCommand, marker;

    marker = this.getMarkers().get(0);

    updateCommand = new AdamShapeMarkerCommand(
        this,
        {
            markers: [marker],
            type: 'changeactivitymarker',
            changes: {
                taskType: newType
            }
        }
    );

    updateCommand.execute();

    this.canvas.commandStack.add(updateCommand);
    return this;
};

AdamActivity.prototype.updateScriptType = function (newType) {

    var layer,
        updateCommand;

    layer = this.getLayers().get(1);
    updateCommand = new AdamShapeLayerCommand(
        this,
        {
            layers: [layer],
            type: 'changescripttypeactivity',
            changes: newType
        }
    );
    updateCommand.execute();

    this.canvas.commandStack.add(updateCommand);
    return this;
};

/**
 *  Extend applyZoom of CustomShape for apply Zoom into Markers
 *  @return {*}
 */
AdamActivity.prototype.applyZoom = function () {
    var i, marker;
    AdamShape.prototype.applyZoom.call(this);
    for (i = 0; i < this.markersArray.getSize(); i += 1) {
        marker = this.markersArray.get(i);
        marker.applyZoom();
    }
    return this;
};

AdamActivity.prototype.createConfigurateAction = function () {
    var action, disabled = false, w, f, f2, root = this, proxy, wWidth = 510, wHeight = 150, items,
        callback, self = this, actionName = translate('LBL_PMSE_CONTEXT_MENU_FORMS'), formsField, actionCSS, responseButtons,
        assignTypeField, assignTeamField, labelAssigment, radioNone, radioReassigment, radioAdhoc,
        combo_teams, combo_teams_1, combo_type, reassignCheck, adhocCheck, itemMatrix, requiredFields, requiredForm, relatedForm,
        updateExpectedTime,
        expectedTimeField,
        expTimeDuration,
        expTimeCombo,
        itemsF3,
        f3,
        reassignmentFn,
        forms,
        teams,
        emailProcessUser,
        emailProcessUserForm,
        emailTemplateList,
        cancelInformation;
    cancelInformation =  new MessagePanel({
        title: "Confirm",
        wtype: 'Confirm',
        message: translate('LBL_PMSE_MESSAGE_CANCEL_CONFIRM')
    });
    w = new PMSE.Window({
        width: wWidth,
        height: this.act_task_type === 'USERTASK' ? 340 : wHeight,
        modal: true,
        title: translate('LBL_PMSE_FORM_TITLE_ACTIVITY') + ': ' + this.getName()
    });

    if (this.act_task_type === 'USERTASK') {
        w.style.addClasses(['adam-usertask-window']);
        actionCSS = 'adam-menu-icon-form';
        proxy = new SugarProxy({
            url: 'pmse_Project/ActivityDefinition/' + this.id,
            uid: this.id,
            callback: null,
            data2: {'hola':'hola'}
        });

        itemMatrix = new ItemMatrixField({
            jtype: 'itemmatrix',
            label: translate('LBL_PMSE_FORM_LABEL_READ_ONLY_FIELDS'),
            name: 'act_readonly_fields',
            submit: true,
            fieldWidth: 350,
            fieldHeight: 200,
            visualStyle : 'table',
            nColumns: 2
        });

        f2 = new PMSE.Form({
            items: [ itemMatrix ],
            closeContainerOnSubmit: true,
            labelWidth: '16%',
            buttons: [
                {
                    jtype: 'submit',
                    caption: translate('LBL_PMSE_BUTTON_SAVE'),
                    cssClasses: ['btn', 'btn-primary']
                },
                {
                    jtype: 'normal',
                    caption: translate('LBL_PMSE_BUTTON_CANCEL'),
                    handler: function () {
                        if (f2.isDirty()) {
                            cancelInformation.setButtons([
                                {
                                    jtype: 'normal',
                                    caption: translate('LBL_PMSE_BUTTON_YES'),
                                    handler: function () {
                                        cancelInformation.hide();
                                        w.close();
                                    }
                                },
                                {
                                    jtype: 'normal',
                                    caption: translate('LBL_PMSE_BUTTON_NO'),
                                    handler: function () {
                                        cancelInformation.hide();
                                    }
                                }
                            ]);
                            cancelInformation.show();
                        } else {
                            w.close();
                        }
                    },
                    cssClasses: ['btn btn-invisible btn-link']
                }
            ],
            language: PMSE_DESIGNER_FORM_TRANSLATIONS
        });

        requiredFields = new ItemMatrixField({
            jtype: 'itemmatrix',
            label: translate('LBL_PMSE_FORM_LABEL_REQUIRED_FIELDS'),
            name: 'act_required_fields',
            submit: true,
            fieldWidth: 350,
            fieldHeight: 200,
            visualStyle : 'table',
            nColumns: 2
        });
        requiredForm = new PMSE.Form({
            items: [ requiredFields ],
            closeContainerOnSubmit: true,
            labelWidth: '16%',
            buttons: [
                {
                    jtype: 'submit',
                    caption: translate('LBL_PMSE_BUTTON_SAVE'),
                    cssClasses: ['btn btn-primary']
                },
                {
                    jtype: 'normal',
                    caption: translate('LBL_PMSE_BUTTON_CANCEL'),
                    handler: function () {
                        if (f2.isDirty()) {
                            cancelInformation.setButtons([
                                {
                                    jtype: 'normal',
                                    caption: translate('LBL_PMSE_BUTTON_YES'),
                                    handler: function () {
                                        cancelInformation.hide();
                                        w.close();
                                    }
                                },
                                {
                                    jtype: 'normal',
                                    caption: translate('LBL_PMSE_BUTTON_NO'),
                                    handler: function () {
                                        cancelInformation.hide();
                                    }
                                }
                            ]);
                            cancelInformation.show();
                        } else {
                            w.close();
                        }
                    },
                    cssClasses: ['btn btn-invisible btn-link']
                }
            ]
        });

        relatedForm = new PMSE.Form({
            closeContainerOnSubmit: true,
            labelWidth: '100%',
            buttons: [
                {
                    jtype: 'submit',
                    caption: translate('LBL_PMSE_BUTTON_SAVE'),
                    cssClasses: ['btn btn-primary']
                },
                {
                    jtype: 'normal',
                    caption: translate('LBL_PMSE_BUTTON_CANCEL'),
                    handler: function () {
                        if (f2.isDirty()) {
                            cancelInformation.setButtons([
                                {
                                    jtype: 'normal',
                                    caption: translate('LBL_PMSE_BUTTON_YES'),
                                    handler: function () {
                                        cancelInformation.hide();
                                        w.close();
                                    }
                                },
                                {
                                    jtype: 'normal',
                                    caption: translate('LBL_PMSE_BUTTON_NO'),
                                    handler: function () {
                                        cancelInformation.hide();
                                    }
                                }
                            ]);
                            cancelInformation.show();
                        } else {
                            w.close();
                        }
                    },
                    cssClasses: ['btn btn-invisible btn-link']
                }
            ]
        });

        expectedTimeField = new HiddenField({
            name: 'act_expected_time'
        });

        updateExpectedTime = function () {
            var out = {
                time: '',
                unit: ''
            };
            out.time = expTimeDuration.value;
            out.unit = expTimeCombo.value;
            expectedTimeField.setValue(out);
        };

        expTimeDuration = new NumberField(
            {
                name: 'evn_criteria',
                label: translate('LBL_PMSE_FORM_LABEL_DURATION'),
                helpTooltip: {
                    message: translate('LBL_PMSE_FORM_TOOLTIP_DURATION')
                },
                fieldWidth: '50px',
                submit: false,
                change: updateExpectedTime
            }
        );

        expTimeCombo = new ComboboxField({
            name: 'evn_params',
            label: translate('LBL_PMSE_FORM_LABEL_UNIT'),
            options: [
                { text: translate('LBL_PMSE_FORM_OPTION_DAYS'), value: 'day'},
                { text: translate('LBL_PMSE_FORM_OPTION_HOURS'), value: 'hour'},
                { text: translate('LBL_PMSE_FORM_OPTION_MINUTES'), value: 'minute'}
            ],
            initialValue: 'hour',
            submit: false,
            change: updateExpectedTime
        });

        itemsF3 = [
            expectedTimeField,
            expTimeDuration,
            expTimeCombo
        ];

        f3 = new PMSE.Form({
            items: itemsF3,
            closeContainerOnSubmit: true,
            buttons: [
                {
                    jtype: 'submit',
                    caption: translate('LBL_PMSE_BUTTON_SAVE'),
                    cssClasses: ['btn btn-primary']
                },
                {
                    jtype: 'normal',
                    caption: translate('LBL_PMSE_BUTTON_CANCEL'),
                    handler: function () {
                        if (f3.isDirty()) {
                            cancelInformation.setButtons([
                                {
                                    jtype: 'normal',
                                    caption: translate('LBL_PMSE_BUTTON_YES'),
                                    handler: function () {
                                        cancelInformation.hide();
                                        w.close();
                                    }
                                },
                                {
                                    jtype: 'normal',
                                    caption: translate('LBL_PMSE_BUTTON_NO'),
                                    handler: function () {
                                        cancelInformation.hide();
                                    }
                                }
                            ]);
                            cancelInformation.show();
                        } else {
                            w.close();
                        }
                    },
                    cssClasses: ['btn btn-invisible btn-link']
                }
            ],
            language: PMSE_DESIGNER_FORM_TRANSLATIONS
        });

        let changeEmailProcessUserfn = function() {
            const emailFlag = !!emailProcessUser.value;

            if (!emailFlag) {
                emailTemplateList.setValue(emailTemplateList.initialValue);
            }

            $(emailTemplateList.html).toggle(emailFlag);
            emailTemplateList.setRequired(emailFlag);

            $('.pmse-form-error')
                .removeClass('pmse-form-error-on')
                .addClass('pmse-form-error-off');
        };

        emailProcessUser = new CheckboxField({
            name: 'act_email_process_user',
            label: App.lang.getModString('LBL_PA_FORM_LABEL_EMAIL_PROCESS_USER', 'pmse_Project'),
            required: false,
            options: {
                labelAlign: 'right',
                marginLeft: 80,
            },
            change: changeEmailProcessUserfn
        });

        emailTemplateList = new ComboboxField({
            jtype: 'combobox',
            name: 'act_email_template_id',
            label: translate('LBL_PMSE_FORM_LABEL_EMAIL_TEMPLATE'),
            proxy: new SugarProxy({
                url: 'pmse_Project/CrmData/emailtemplates/' + PROJECT_MODULE,
                uid: PROJECT_MODULE,
                callback: null
            })
        });

        emailProcessUserForm = new PMSE.Form({
            items: [emailProcessUser, emailTemplateList],
            closeContainerOnSubmit: true,
            buttons: [
                {
                    jtype: 'submit',
                    caption: App.lang.getModString('LBL_PMSE_BUTTON_SAVE', 'pmse_Project'),
                    cssClasses: ['btn btn-primary']
                },
                {
                    jtype: 'normal',
                    caption: App.lang.getModString('LBL_PMSE_BUTTON_CANCEL', 'pmse_Project'),
                    handler: function() {
                        if (emailProcessUserForm.isDirty()) {
                            cancelInformation.setButtons([
                                {
                                    jtype: 'normal',
                                    caption: App.lang.getModString('LBL_PMSE_BUTTON_YES', 'pmse_Project'),
                                    handler: function() {
                                        cancelInformation.hide();
                                        w.close();
                                    }
                                },
                                {
                                    jtype: 'normal',
                                    caption: translate('LBL_PMSE_BUTTON_NO'),
                                    handler: function() {
                                        cancelInformation.hide();
                                    }
                                }
                            ]);
                            cancelInformation.show();
                        } else {
                            w.close();
                        }
                    },
                    cssClasses: ['btn btn-invisible btn-link']
                }
            ],
            labelWidth: '50%',
            language: PMSE_DESIGNER_FORM_TRANSLATIONS
        });

        reassignmentFn = function () {
            switch (this.name) {
                case 'combo_teams':
                    assignTeamField.setValue(combo_teams.value);
                    break;
                case 'combo_teams_1':
                    assignTeamField.setValue(combo_teams_1.value);
                    break;
            }
        };

        formsField = new ComboboxField({
            name: 'act_type',
            label: translate('LBL_PMSE_FORM_LABEL_FORM_TYPE'),
            required: false,
            proxy: new SugarProxy({
                url: 'pmse_Project/CrmData/dynaforms/' + adamUID,
                uid: adamUID,
                callback: null
            })
        });

        responseButtons = new ComboboxField({
            name: 'act_response_buttons',
            label: translate('LBL_PMSE_FORM_LABEL_RESPONSE_BUTTONS'),
            required : false
        });

        labelAssigment  = new LabelField({
            name: 'lblAssigment',
            label: translate('LBL_PMSE_FORM_LABEL_OTHER_DERIVATION_OPTIONS'),
            options: {
                marginLeft : 35
            }
        });

        reassignCheck = new CheckboxField({
            name: 'act_reassign',
            label: translate('LBL_PMSE_FORM_LABEL_RECORD_OWNERSHIP'),
            required: false,
            value: false,
            options: {
                labelAlign: 'right',
                marginLeft: 80
            },
            change : function () {
                if ($(reassignCheck.html).children('input').is(':checked')) {
                    combo_teams.setReadOnly(false);
                } else {
                    combo_teams.setReadOnly(true);
                }
            }
        });

        combo_teams = new ComboboxField({
            name: 'act_reassign_team',
            label: translate('LBL_PMSE_FORM_LABEL_TEAM'),
            required: false,
            readOnly: true,
            change: reassignmentFn,
            proxy: new SugarProxy({
                url: 'pmse_Project/CrmData/teams/reassign',
                uid: 'reassign',
                callback: null
            })
        });

        adhocCheck = new CheckboxField({
            name: 'act_adhoc',
            label: translate('LBL_PMSE_FORM_LABEL_REASSIGN'),
            required: false,
            value: false,
            options: {
                labelAlign: 'right',
                marginLeft: 80
            },
            change : function () {
                if ($(adhocCheck.html).children('input').is(':checked')) {
                    combo_teams_1.setReadOnly(false);
                } else {
                    combo_teams_1.setReadOnly(true);
                }
            }
        });

        combo_teams_1 = new ComboboxField({
            name: 'act_adhoc_team',
            label: translate('LBL_PMSE_FORM_LABEL_TEAM'),
            required: false,
            readOnly: true,
            change: reassignmentFn
        });

        combo_type = new ComboboxField({
            name: 'act_adhoc_behavior',
            label: translate('LBL_PMSE_FORM_LABEL_TYPE'),
            required: false,
            readOnly: true
        });

        assignTeamField = new HiddenField({
            name: 'act_adhoc_reassign_team'
        });

        assignTypeField = new HiddenField({
            name: 'act_reassignment_type'
        });

        actTypeField = new HiddenField({
            name: 'act_type'
        });

        items = [/*formsField,*/ responseButtons,
            labelAssigment,
            reassignCheck, combo_teams,
            adhocCheck, combo_teams_1,
            actTypeField
        ];

        callback = {
            'submit': function (data) {
                let f2Data = f2.getData();
                let f1Data = f.getData();
                let f3Data = f3.getData();
                let requiredData = requiredForm.getData();
                let relatedData = relatedForm.getData();
                let emailProcessUserData = emailProcessUserForm.getData();
                f2Data.act_readonly_fields = JSON.parse(f2Data.act_readonly_fields);
                requiredData.act_required_fields = JSON.parse(requiredData.act_required_fields);

                $.extend(true, f1Data, f2Data);
                $.extend(true, f1Data, f3Data);
                $.extend(true, f1Data, requiredData);
                $.extend(true, f1Data, emailProcessUserData);

                proxy.sendData(f1Data);
            },
            'loaded': function (data) {


                var aForms = [/*{text: translate('LBL_PMSE_FORM_OPTION_MODULE_ORIGINAL_DETAIL_VIEW'), value: 'DetailView'}, {text: translate('LBL_PMSE_FORM_OPTION_MODULE_ORIGINAL_EDIT_VIEW'), value: 'EditView'}*/],
                    rButtons = [{text: translate('LBL_PMSE_FORM_OPTION_APPROVE_REJECT'), value: 'APPROVE'}, {text: translate('LBL_PMSE_FORM_OPTION_ROUTE'), value: 'ROUTE'}],
                    aType = [{text: translate('LBL_PMSE_FORM_OPTION_ONE_WAY'), value: 'ONE_WAY'}, {text: translate('LBL_PMSE_FORM_OPTION_ROUND_TRIP'), value: 'ROUND_TRIP'}],
                    readOnlyFieldsMatrix = f2.items[0],
                    requiredFieldsMatrix = requiredForm.items[0],
                    i,
                    readOnlyFields = [],
                    requiredFields = [],
                    allTheFields = [],
                    allTheReqFields = [],
                    related,
                    item,
                    relatedItems;

                proxy.getData({'module': PROJECT_MODULE}, {
                    success: function(data) {
                        root.canvas.emptyCurrentSelection();
                        for (i = 0; i < data.act_readonly_fields.length; i += 1) {
                            allTheFields.push({
                                text: data.act_readonly_fields[i].label,
                                value: data.act_readonly_fields[i].name
                            });
                            if (data.act_readonly_fields[i].readonly) {
                                readOnlyFields.push(data.act_readonly_fields[i].name);
                            }
                        }
                        readOnlyFieldsMatrix.getHTML();
                        readOnlyFieldsMatrix.setList(allTheFields, readOnlyFields);
                        // set required fields to form as a list
                        for (i = 0; i < data.act_required_fields.length; i += 1) {
                            allTheReqFields.push({
                                text: data.act_required_fields[i].label,
                                value: data.act_required_fields[i].name
                            });
                            if (data.act_required_fields[i].required) {
                                //readOnlyFields.push(data.act_readonly_fields[i].name);
                                requiredFields.push(data.act_required_fields[i].name);
                            }
                        }
                        requiredFieldsMatrix.getHTML();
                        requiredFieldsMatrix.setList(allTheReqFields, requiredFields);

                        formsField.proxy.getData(null, {
                            success: function(forms) {
                                aForms = aForms.concat(forms.result);
                                formsField.setOptions(aForms);
                            }
                        });

                        combo_teams.proxy.getData(null, {
                            success: function(teams) {
                                combo_teams.setOptions(teams.result);
                                combo_teams_1.setOptions(teams.result);
                                App.alert.dismiss('upload');
                                w.html.style.display = 'inline';
                            }
                        });

                        responseButtons.setOptions(rButtons);
                        combo_type.setOptions(aType);

                        reassignCheck.setValue(false);
                        adhocCheck.setValue(false);
                        if (data) {
                            if (data.act_expected_time) {
                                expTimeDuration.setValue(data.act_expected_time.time);
                                expTimeCombo.setValue(data.act_expected_time.unit);
                                updateExpectedTime();
                            }

                            if (data.act_type) {
                                formsField.setValue(data.act_type);
                                actTypeField.setValue(data.act_type);
                            }
                            if (data.act_response_buttons) {
                                responseButtons.setValue(data.act_response_buttons);
                            }
                            if (data.act_reassign) {
                                if (App.utils.isTruthy(data.act_reassign)) {
                                    reassignCheck.setValue(true);
                                    $(reassignCheck.html).children('input').prop('checked', true);
                                    combo_teams.setReadOnly(false);
                                    if (data.act_reassign_team) {
                                        combo_teams.setValue(data.act_reassign_team);
                                        $(combo_teams.html).children('select').val(data.act_reassign_team);
                                    }

                                }
                            }
                            if (data.act_adhoc) {
                                if (App.utils.isTruthy(data.act_adhoc)) {
                                    adhocCheck.setValue(true);
                                    $(adhocCheck.html).children('input').prop('checked', true);
                                    combo_teams_1.setReadOnly(false);
                                    if (data.act_adhoc_team) {
                                        combo_teams_1.setValue(data.act_adhoc_team);
                                        $(combo_teams_1.html).children('select').val(data.act_adhoc_team);
                                    }
                                }
                            }

                            if (data.act_email_process_user) {
                                emailProcessUser.setValue(data.act_email_process_user);
                            }

                            emailTemplateList.proxy.getData(null, {
                                success: function(emailTemplates) {
                                    let options = [{'text': translate('LBL_PMSE_FORM_OPTION_SELECT'), 'value': ''}];
                                    options = options.concat(emailTemplates.result);
                                    emailTemplateList.setOptions(options);
                                    if (data.act_email_template_id) {
                                        emailTemplateList.setValue(data.act_email_template_id);
                                    }
                                }
                            });

                            f.proxy = null;
                        }
                    }
                })
            }
        };

        f2.setCallback({submit: callback.submit});
        f3.setCallback({submit: callback.submit});
        requiredForm.setCallback({submit: callback.submit});
        relatedForm.setCallback({submit: callback.submit});
        emailProcessUserForm.setCallback({
            submit: callback.submit,
            loaded: changeEmailProcessUserfn
        });
    } else {
        //TODO REVIEW THIS ELSE
        actionCSS = 'adam-menu-icon-configure';
        proxy = null;
        actionName = 'Configuration...';

        items = [
            {
                jtype: 'textarea',
                required: false,
                fieldWidth: '250px',
                fieldHeight: '100px',
                label: translate('LBL_PMSE_FORM_LABEL_SCRIPT'),
                name: 'act_script',
                helpTooltip: {
                    message: 'Enter the PHP code script'
                }
            }
        ];

        callback = {
            submit: function (data) {
                if (self.act_script !== data.act_script) {
                    self.updateScript(data.act_script);
                }
            },
            loaded: function () {
                root.canvas.emptyCurrentSelection();
                var data = {};
                data.act_script = self.act_script;
                f.data = data;
                f.applyData(true);
            }
        };

    }

    f = new PMSE.Form({
        items: items,
        closeContainerOnSubmit: true,
        buttons: [
            {
                jtype: 'submit',
                caption: translate('LBL_PMSE_BUTTON_SAVE'),
                cssClasses: ['btn btn-primary']
            },
            {
                jtype: 'normal',
                caption: translate('LBL_PMSE_BUTTON_CANCEL'),
                handler: function () {
                    if (f.isDirty()) {
                        cancelInformation.setButtons([
                            {
                                jtype: 'normal',
                                caption: translate('LBL_PMSE_BUTTON_YES'),
                                handler: function () {
                                    cancelInformation.hide();
                                    w.close();
                                }
                            },
                            {
                                jtype: 'normal',
                                caption: translate('LBL_PMSE_BUTTON_NO'),
                                handler: function () {
                                    cancelInformation.hide();
                                }
                            }
                        ]);
                        cancelInformation.show();
                    } else {
                        w.close();
                    }
                },
                cssClasses: ['btn btn-invisible btn-link']
            }
        ],
        callback: callback,
        language: PMSE_DESIGNER_FORM_TRANSLATIONS
    });

    w.addPanel({
        title: translate('LBL_PMSE_FORM_LABEL_GENERAL_SETTINGS'),
        panel: f
    });

    if (f2) {
        w.addPanel({
            title: translate('LBL_PMSE_FORM_LABEL_READ_ONLY_FIELDS'),
            panel: f2
        });
    }
    if (requiredForm) {
        w.addPanel({
            title: translate('LBL_PMSE_FORM_LABEL_REQUIRED_FIELDS'),
            panel: requiredForm
        });
    }

    if (f3) {
        w.addPanel({
            title: translate('LBL_PMSE_FORM_LABEL_EXPECTED_TIME'),
            panel: f3
        });
    }

    if (emailProcessUserForm) {
        w.addPanel({
            title: App.lang.getModString('LBL_PMSE_FORM_LABEL_EMAIL_PROCESS_USER', 'pmse_Project'),
            panel: emailProcessUserForm
        });
    }

    action = new PMSE.Action({
        text: actionName,
        cssStyle : actionCSS,
        handler: function () {
            root.canvas.showModal();
            App.alert.show('upload', {level: 'process', title: 'LBL_LOADING_NO_DOTS', autoClose: false});
            root.canvas.project.save({
                success: function () {
                    root.canvas.hideModal();
                    w.show();
                    w.html.style.display = 'none';
                }
            });
        },
        disabled: disabled
    });
    return action;
};

AdamActivity.prototype.updateScript = function (script) {
    var updateCommand;

    updateCommand = new CommandAdam(this, ['act_script'], [script]);
    updateCommand.execute();

    this.canvas.commandStack.add(updateCommand);
    return this;
};

AdamActivity.prototype.createAssignUsersAction = function () {
    var action,
        root = this,
        w,
        f,
        items,
        assignUserField,
        assignTeamField,
        combo_users,
        combo_teams,
        combo_method,
        hiddenFn,
        hiddenUpdateFn,
        callback,
        proxy,
        teams,
        users,
        cancelInformation,
        self = this;
    cancelInformation =  new MessagePanel({
        title: "Confirm",
        wtype: 'Confirm',
        message: translate('LBL_PMSE_MESSAGE_CANCEL_CONFIRM')
    });
    proxy = new SugarProxy({
        url: 'pmse_Project/ActivityDefinition/' + this.id,
        uid: this.id,
        callback: null
    });



    hiddenFn = function () {
        if (combo_method.value === 'static') {
            combo_users.enable().setRequired(true);
            combo_teams.disable();
        } else {
            combo_users.disable().setValue('');
            combo_users.setValid(false);
            combo_teams.enable().setRequired(true);
        }
    };

    hiddenUpdateFn = function () {
        switch (this.name) {
            case 'combo_teams':
                assignTeamField.setValue(combo_teams.value);
                assignUserField.setValue(null);
                break;
            case 'combo_users':
                assignTeamField.setValue(null);
                assignUserField.setValue(combo_users.value);
                combo_users.setValid(true);
                break;
        }
    };

    assignTeamField = new HiddenField({
        name: 'act_assign_team'
    });

    assignUserField = new HiddenField({
        name: 'act_assign_user'
    });

    combo_users = new SearchableCombobox({
        label: translate('LBL_PA_FORM_LABEL_ASSIGN_TO_USER'),
        name: 'combo_users',
        submit: false,
        change: hiddenUpdateFn,
        disabled: true,
        required: true,
        searchURL: 'Users?filter[0][$and][0][status][$not_equals]=Inactive&filter[0][$and][1][$or][0][first_name][$starts]={%TERM%}&filter[0][$and][1][$or][1][last_name][$starts]={%TERM%}&fields=id,full_name&max_num={%PAGESIZE%}&offset={%OFFSET%}',
        searchValue: 'id',
        searchLabel: 'full_name',
        placeholder: translate('LBL_PA_FORM_COMBO_ASSIGN_TO_USER_HELP_TEXT'),
        searchMore: {
            module: "Users",
            fields: ["id", "full_name"],
            filterOptions: null
        },
        options: [
            {'text': translate('LBL_PMSE_FORM_OPTION_CURRENT_USER'), 'value': 'currentuser'},
            {'text': translate('LBL_PMSE_FORM_OPTION_RECORD_OWNER'), 'value': 'owner'},
            {'text': translate('LBL_PMSE_FORM_OPTION_SUPERVISOR'), 'value': 'supervisor'}
        ]
    });

    combo_teams = new ComboboxField({
        jtype: 'combobox',
        label: translate('LBL_PA_FORM_LABEL_ASSIGN_TO_TEAM'),
        name: 'combo_teams',
        submit: false,
        change: hiddenUpdateFn,
        required: true,
        proxy: new SugarProxy({
            url: 'pmse_Project/CrmData/teams/public',
            uid: 'public',
            callback: null
        })
    });

    combo_method = new ComboboxField({
        jtype: 'combobox',
        name: 'act_assignment_method',
        label: translate('LBL_PMSE_FORM_LABEL_ASSIGNMENT_METHOD'),
        change: hiddenFn,
        options: [
            {text: translate('LBL_PMSE_FORM_OPTION_ROUND_ROBIN'), value: 'balanced'},
            {text: translate('LBL_PMSE_FORM_OPTION_SELF_SERVICE'), value: 'selfservice'},
            {text: translate('LBL_PMSE_FORM_OPTION_STATIC_ASSIGNMENT'), value: 'static'}

        ],
        initialValue: 'balanced',
        required: true
    });

    callback = {

        'submit': function (data) {
            fData = f.getData();
            proxy.sendData(fData);
        },
        'loaded' : function (data) {

            proxy.getData({'module': PROJECT_MODULE}, {
                success: function(data) {
                    var aUsers = [
                        {'text': translate('LBL_PMSE_FORM_OPTION_CURRENT_USER'), 'value': 'currentuser'},
                        {'text': translate('LBL_PMSE_FORM_OPTION_RECORD_OWNER'), 'value': 'owner'},
                        {'text': translate('LBL_PMSE_FORM_OPTION_SUPERVISOR'), 'value': 'supervisor'}
                    ], usersProxy = new SugarProxy();

                    root.canvas.emptyCurrentSelection();
                    combo_teams.proxy.getData(null,{
                        success: function(teams) {
                            combo_teams.setOptions(teams.result);
                            assignTeamField.setValue(data.act_assign_team || teams.result[0].value);
                        }
                    });

                    usersProxy.url = 'pmse_Project/CrmData/users';
                    usersProxy.getData(null, {
                        success: function(users) {
                            var i, theMatch;
                            users = users.result || [];
                            users = _.union(users, aUsers);
                            for (i = 0; i < users.length; i++) {
                                if (users[i].value === data.act_assign_user) {
                                    theMatch = {
                                        text: users[i].text,
                                        value: users[i].value
                                    };
                                    break;
                                }
                            }
                            combo_users.setValid(theMatch);
                            if (!theMatch) {
                                theMatch = {
                                    text: data.act_assign_user,
                                    value: data.act_assign_user
                                };
                            }
                            combo_users.setValue(theMatch);
                            App.alert.dismiss('upload');
                            w.html.style.display = 'inline';
                        }
                    });

                    assignUserField.setValue(data.act_assign_user);

                    if (data) {
                        combo_method.setValue(data.act_assignment_method);

                        if (data.act_assignment_method === 'static') {
                            combo_users.setValue(data.act_assign_user);
                            combo_users.enable();
                            combo_teams.disable();
                        } else {
                            combo_teams.setValue(data.act_assign_team);
                            combo_users.disable();
                            combo_teams.enable();
                        }
                    }
                    f.proxy = null;
                }
            });
        }
    };

    f = new PMSE.Form({
        items: [combo_method, combo_teams, combo_users, assignUserField, assignTeamField],
        closeContainerOnSubmit: true,
        buttons: [
            {
                jtype: 'submit',
                caption: translate('LBL_PMSE_BUTTON_SAVE'),
                cssClasses: ['btn btn-primary']
            },
            {
                jtype: 'normal',
                caption: translate('LBL_PMSE_BUTTON_CANCEL'),
                handler: function () {
                    if (f.isDirty()) {
                        cancelInformation.setButtons([
                            {
                                jtype: 'normal',
                                caption: translate('LBL_PMSE_BUTTON_YES'),
                                handler: function () {
                                    cancelInformation.hide();
                                    w.close();
                                }
                            },
                            {
                                jtype: 'normal',
                                caption: translate('LBL_PMSE_BUTTON_NO'),
                                handler: function () {
                                    cancelInformation.hide();
                                }
                            }
                        ]);
                        cancelInformation.show();
                    } else {
                        w.close();
                    }
                },
                cssClasses: ['btn btn-invisible btn-link']
            }
        ],
        callback: callback,
        language: PMSE_DESIGNER_FORM_TRANSLATIONS
    });
    w = new PMSE.Window({
        width: 500,
        height: 350,
        title: translate('LBL_PMSE_FORM_TITLE_USER_DEFINITION') + ': ' + this.getName(),
        modal: true
    });
    w.addPanel(f);

    action = new PMSE.Action({
        text: translate('LBL_PMSE_CONTEXT_MENU_USERS'),
        cssStyle : 'adam-menu-icon-user',
        handler: function () {
            root.saveProject(root, App, w);
        },
        disabled: false
    });

    return action;
};
/**
 * Creates the action's modal
 * @param {string} type The name of the action
 * @return {AdamAction} The action object
 */
AdamActivity.prototype.actionFactory = function(type) {
    var self = this;
    var fieldsUpdater;

    var cancelInformation =  new MessagePanel({
        title: "Confirm",
        wtype: 'Confirm',
        message: translate('LBL_PMSE_MESSAGE_CANCEL_CONFIRM')
    });

    var windowDef = this.getWindowDef(type);

    var w = new PMSE.Window({
        width: windowDef.wWidth || 0,
        height: windowDef.wHeight || 0,
        title: windowDef.wTitle || '',
        modal: true
    });

    if (type === 'ASSIGN_TEAM') {
        w.style.addClasses(['adam-decor']);
    }

    var actionDef = this.getAction(type, w);

    var f = new PMSE.Form({
        type: 'action',
        proxy: actionDef.proxy,
        items: actionDef.items || [],
        closeContainerOnSubmit: true,
        footerAlign: 'left',
        buttons: [
            {
                jtype: 'normal',
                caption: translate('LBL_PMSE_BUTTON_SAVE'),
                handler: function() {
                    if (fieldsUpdater && fieldsUpdater.multiplePanel) {
                        fieldsUpdater.multiplePanel.close();
                    }
                    f.submit();
                },
                cssClasses: ['btn btn-primary']

            },
            {
                jtype: 'normal',
                caption: translate('LBL_PMSE_BUTTON_CANCEL'),
                handler: function() {
                    if (fieldsUpdater && fieldsUpdater.multiplePanel) {
                        fieldsUpdater.multiplePanel.close();
                    }

                    if (f.isDirty()) {
                        cancelInformation.setButtons(
                            [
                                {
                                    jtype: 'normal',
                                    caption: translate('LBL_PMSE_BUTTON_YES'),
                                    handler: function() {
                                        cancelInformation.hide();
                                        w.close();
                                    }
                                },
                                {
                                    jtype: 'normal',
                                    caption: translate('LBL_PMSE_BUTTON_NO'),
                                    handler: function() {
                                        cancelInformation.hide();
                                    }
                                }
                            ]
                        );
                        cancelInformation.show();
                    } else {
                        w.close();
                    }
                },
                cssClasses: ['btn btn-invisible btn-link']

            }
        ],
        labelWidth: actionDef.labelWidth || '30%',
        callback: actionDef.callback || {},
        language: PMSE_DESIGNER_FORM_TRANSLATIONS
    });

    w.addPanel(f);

    var action = new PMSE.Action({
        text: actionDef.actionText || '',
        cssStyle: actionDef.actionCSS || '',
        handler: function() {
            self.canvas.project.save();
            w.show();
            w.html.style.display = 'none';
            App.alert.show('upload', {level: 'process', title: 'LBL_LOADING_NO_DOTS', autoclose: false});
        },
        disabled: !_.isUndefined(actionDef.disabled) ? actionDef.disabled : false
    });

    return action;
};

/**
 * Gets an action's properties. Also checks for custom action properties defined by the end user
 *
 * @param {string} type The name of the action
 * @param {AdamWindow} w The PMSE.Window object that will eventually become the modal (not to be confused
 * with the javascript window)
 * @return {Object} Object containing an action's properties
 */
AdamActivity.prototype.getAction = function(type, w) {
    var self = this;
    var action = {};

    switch (type) {
        case 'NONE':
            var actionText = translate('LBL_PMSE_CONTEXT_MENU_SETTINGS');
            var disabled = true;
            var actionCSS = 'adam-menu-icon-configure';
            action = {actionText: actionText, disabled: disabled, actionCSS: actionCSS};
            break;

        case 'ASSIGN_USER':
            var combo_users = new SearchableCombobox({
                label: translate('LBL_PA_FORM_LABEL_ASSIGN_TO_USER'),
                name: 'act_assign_user',
                submit: true,
                searchURL: 'Users?filter[0][$and][0][status][$not_equals]=Inactive&filter[0][$and][1][$or][0][first_name][$starts]={%TERM%}&filter[0][$and][1][$or][1][last_name][$starts]={%TERM%}&fields=id,full_name&max_num={%PAGESIZE%}&offset={%OFFSET%}',
                searchValue: 'id',
                searchLabel: 'full_name',
                required: true,
                placeholder: translate('LBL_PA_FORM_COMBO_ASSIGN_TO_USER_HELP_TEXT')
            });
            //here add checkbox
            var updateRecordOwner = new CheckboxField({
                name: 'act_update_record_owner',
                label: translate('LBL_PA_FORM_LABEL_UPDATE_RECORD_OWNER'),
                required: false,
                value: false,
                options: {
                    labelAlign: 'right',
                    marginLeft: 80
                }
            });
            var proxy = new SugarProxy({
                url: 'pmse_Project/ActivityDefinition/' + this.id,
                uid: this.id,
                callback: null
            });
            var items = [combo_users, updateRecordOwner];
            var labelWidth = '40%';
            var actionText = translate('LBL_PMSE_CONTEXT_MENU_SETTINGS');
            var actionCSS = 'adam-menu-icon-configure';
            var callback = {
                'loaded': function(data) {
                    var users,
                        nValue = false,
                        usersProxy = new SugarProxy(),
                        aUsers = [{'text': 'Select...', 'value': ''}];
                    self.canvas.emptyCurrentSelection();
                    usersProxy.url = 'pmse_Project/CrmData/users';

                    if (data && data.act_assign_user) {
                        usersProxy.getData(null, {
                            success: function(users) {
                                var theMatch, i;

                                users = users.result || [];

                                for (i = 0; i < users.length; i += 1) {
                                    if (users[i].value === data.act_assign_user) {
                                        theMatch = {
                                            text: users[i].text,
                                            value: users[i].value
                                        };
                                        break;
                                    }
                                }

                                if (!theMatch) {
                                    theMatch = {
                                        text: data.act_assign_user,
                                        value: data.act_assign_user
                                    };
                                }

                                combo_users.setValue(theMatch);
                                App.alert.dismiss('upload');
                                w.html.style.display = 'inline';
                            }
                        });
                    } else {
                        App.alert.dismiss('upload');
                        w.html.style.display = 'inline';
                    }

                    if (data && data.act_update_record_owner && data.act_update_record_owner == 1) {
                        nValue = true;
                    }
                    updateRecordOwner.setValue(nValue);
                    $(updateRecordOwner.html).children('input').prop('checked', nValue);
                }
            };
            action = {
                proxy: proxy,
                items: items,
                labelWidth: labelWidth,
                actionText: actionText,
                actionCSS: actionCSS,
                callback: callback
            };
            break;

        case 'ASSIGN_TEAM':
            var combo_teams = new ComboboxField({
                jtype: 'combobox',
                label: translate('LBL_PA_FORM_LABEL_ASSIGN_TO_TEAM'),
                name: 'act_assign_team',
                submit: true,
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/teams/public',
                    uid: 'public',
                    callback: null

                })
            });

            let changeRecordOwnerFn = function() {
                if (!updateRecordOwner.value) {
                    setByAvl.update(false);
                }
                $(setByAvl.html).toggle(updateRecordOwner.value);
            };

            //here add checkbox
            var updateRecordOwner = new CheckboxField({
                name: 'act_update_record_owner',
                label: translate('LBL_PA_FORM_LABEL_UPDATE_RECORD_OWNER'),
                change: changeRecordOwnerFn,
                required: false,
                value: false,
                options: {
                    labelAlign: 'right',
                    marginLeft: 200
                }
            });

            let changeSetByAvlFn = function() {
                const avlFlag = !!setByAvl.value;

                if (!avlFlag) {
                    $.each([availableCount, availableType, beforeType, reserveUser], function(key, item) {
                        item.setValue(item.initialValue);
                    });
                }

                $(avlSettings.html).toggle(avlFlag);
                $(reserveUser.html).toggle(avlFlag);
                reserveUser.setRequired(avlFlag);

                if (!avlFlag) {
                    beforeType.setRequired(false);
                }

                $('.pmse-form-error')
                    .removeClass('pmse-form-error-on')
                    .addClass('pmse-form-error-off');
            };

            let setByAvl = new CheckboxField({
                name: 'act_set_by_avl',
                label: App.lang.getModString('LBL_PA_FORM_LABEL_SET_BY_AVAILABILITY', 'pmse_Project'),
                required: false,
                value: false,
                change: changeSetByAvlFn,
                options: {
                    labelAlign: 'right',
                    marginLeft: 80,
                }
            });

            // Set the required attribute of "before" field when the "count" field was changed
            const keyupAvailableCountFn = function() {
                const required = !!parseInt(availableCount.value);

                avlSettings.setRequired(required);
                beforeType.setRequired(required);

                if (!required) {
                    beforeType.markFieldError(false);
                    avlSettings.parent.validate();
                }
            };

            let availableCount = new NumberField({
                name: 'act_avl_count',
                initialValue: '0',
                fieldWidth: '20px',
                minValue: 0,
                keyup: keyupAvailableCountFn,
            });

            let availableType = new ComboboxField({
                jtype: 'combobox',
                name: 'act_avl_type',
                label: App.lang.getModString('LBL_PMSE_FORM_LABEL_ASSIGNMENT_METHOD', 'pmse_Project'),
                options: [
                    {text: App.lang.getModString('LBL_PMSE_FORM_OPTION_MINUTES', 'pmse_Project'), value: 'minutes'},
                    {text: App.lang.getModString('LBL_PMSE_FORM_OPTION_HOURS', 'pmse_Project'), value: 'hours'},
                ],
                initialValue: 'minutes',
                fieldWidth: '92px',
            });

            // Re-validate form when "before" field was changed.
            // It's necessary to hide/show errors dynamically
            const changeBeforeTypeFn = function() {
                avlSettings.parent.validate();
            };

            let beforeType = new ComboboxField({
                jtype: 'combobox',
                name: 'act_avl_before_type',
                label: App.lang.getModString('LBL_PMSE_FORM_LABEL_ASSIGNMENT_METHOD', 'pmse_Project'),
                options: [
                    {text: App.lang.getModString('LBL_PMSE_FORM_OPTION_SELECT', 'pmse_Project'), value: ''},
                ],
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/dateFieldsOfModule/' + PROJECT_MODULE,
                    uid: null,
                    callback: null,
                }),
                initialValue: '',
                fieldWidth: '125px',
                change: changeBeforeTypeFn,
            });

            let avlSettings = new FieldsGroup({
                label: App.lang.getModString('LBL_PMSE_FORM_REQUIRED_SHIFT_AVAILABILITY', 'pmse_Project'),
                required: false,
                items: [
                    {
                        field: availableCount,
                    },
                    {
                        field: availableType,
                    },
                    {
                        field: beforeType,
                        textBefore: App.lang.getModString('LBL_PMSE_FORM_LABEL_BEFORE', 'pmse_Project'),
                    },
                ],
            });

            // Re-validate form when "If no users are available" field was changed.
            // It's necessary to hide/show errors dynamically
            const changeReserveUserFn = function() {
                avlSettings.parent.validate();
            };

            let reserveUser = new SearchableCombobox({
                label: App.lang.getModString('LBL_PMSE_FORM_LABEL_IF_NO_AVAILABLE', 'pmse_Project'),
                name: 'act_reserve_user',
                submit: false,
                searchURL: 'Users?filter[0][$and][0][status][$not_equals]=Inactive' +
                    '&filter[0][$and][1][$or][0][first_name][$starts]={%TERM%}' +
                    '&filter[0][$and][1][$or][1][last_name][$starts]={%TERM%}' +
                    '&fields=id,full_name&max_num={%PAGESIZE%}&offset={%OFFSET%}',
                searchValue: 'id',
                searchLabel: 'full_name',
                initialValue: '',
                placeholder: App.lang.getModString('LBL_PA_FORM_COMBO_ASSIGN_TO_USER_HELP_TEXT', 'pmse_Project'),
                fieldWidth: '220px',
                searchMore: {
                    module: 'Users',
                    fields: ['id', 'full_name'],
                    filterOptions: null,
                },
                change: changeReserveUserFn,
            });

            var combo_method = new ComboboxField({
                jtype: 'combobox',
                name: 'act_assignment_method',
                label: translate('LBL_PMSE_FORM_LABEL_ASSIGNMENT_METHOD'),
                options: [
                    {text: translate('LBL_PMSE_FORM_OPTION_ROUND_ROBIN'), value: 'balanced'},
                    {text: translate('LBL_PMSE_FORM_OPTION_SELF_SERVICE'), value: 'selfservice'}
                ],
                initialValue: 'balanced',
                editable: false,
                readOnly: true
            });
            var hiddenMethod = new HiddenField({
                name: 'act_assignment_method',
                initialValue: 'balanced'
            });
            var proxy = new SugarProxy({
                url: 'pmse_Project/ActivityDefinition/' + this.id,
                uid: this.id,
                callback: null
            });

            var items = [combo_teams, updateRecordOwner, hiddenMethod, setByAvl, avlSettings, reserveUser];
            var labelWidth = '40%';
            var actionText = translate('LBL_PMSE_CONTEXT_MENU_SETTINGS');
            var actionCSS = 'adam-menu-icon-configure';
            var callback = {
                'loaded': function(data) {
                    self.canvas.emptyCurrentSelection();
                    var teams = combo_teams.proxy.getData(null, {
                        success: function(teams) {
                            combo_teams.setOptions(teams.result);
                            if (data) {
                                combo_teams.setValue(data.act_assign_team || teams.result[0].value);
                            }
                            App.alert.dismiss('upload');
                            w.html.style.display = 'inline';
                        }
                    });

                    $.each([setByAvl, avlSettings, reserveUser], function(key, item) {
                        $(item.html).hide();
                    });

                    let isUpdateOwner = parseInt(data.act_update_record_owner || 0) === 1;
                    updateRecordOwner.update(isUpdateOwner);

                    let isSetByAvl = parseInt(data.act_set_by_avl || 0) === 1;
                    setByAvl.update(isSetByAvl);

                    availableCount.setValue(data.act_avl_count || availableCount.initialValue);
                    availableType.setValue(data.act_avl_type || availableType.initialValue);
                    beforeType.setValue(data.act_avl_before_type || beforeType.initialValue);

                    reserveUser.setValue(data.act_reserve_user || '');

                    keyupAvailableCountFn();

                    beforeType.proxy.getData({}, {
                        success: function(data) {
                            if (data) {
                                beforeType.setOptions(data.result, true);
                            }
                        }
                    });

                    this.userActionById(data.act_reserve_user, function(data) {
                        reserveUser.setValue(data);
                    });
                }.bind(this)
            };
            action = {
                proxy: proxy,
                items: items,
                labelWidth: labelWidth,
                actionText: actionText,
                actionCSS: actionCSS,
                callback: callback
            };
            break;

        case 'CHANGE_FIELD':
            var labelWidth = '20%';
            var changeFieldsFn = function() {
                $(".pmse-form-error")
                    .removeClass('pmse-form-error-on')
                    .addClass('pmse-form-error-off');
                App.alert.show('upload', {level: 'process', title: 'LBL_LOADING_NO_DOTS', autoclose: false});
                var optionType = filterModules.selectedFieldOption(this.html, this.options);
                filterRelated.setFilterFieldDisable(filterRelated, true);
                if (!optionType || optionType === 'one') {
                    filterModules.setFilterFieldDisable(filterModules, true);
                } else {
                    filterModules.setFilterFieldDisable(filterModules, false);
                }
                filterModules.setObjectValue(null);
                filterModules.setModule(comboModules.value, PROJECT_MODULE);
                if (!optionType) {
                    comboRelated.disable();
                } else {
                    comboRelated.enable();
                }
                comboRelated.removeOptions();
                comboRelated.value = '';
                comboRelated.proxy.url = 'pmse_Project/CrmData/related/' +
                    comboModules.getSelectedData().module_name;
                comboRelated.proxy.getData({removeTarget: true}, {
                    success: function(data) {
                        App.alert.dismiss('upload');
                        if (data) {
                            data.result.unshift({value: '', text: 'Select...'});
                            comboRelated.setOptions(data.result);
                            filterRelated.setObjectValue(null);
                            filterRelated.setModule(null, null);
                        }
                    }
                });

                updater_field.proxy.url = 'pmse_Project/CrmData/relatedfields/' + comboModules.value;
                // Call type set to CF to distinguish from Add Related Record
                updater_field.proxy.getData({call_type: 'CF', base_module: PROJECT_MODULE}, {
                    success: function(data) {
                        App.alert.dismiss('upload');
                        if (data) {
                            data.result = setDatetimeFieldsBCOptions({
                                targetModule: PROJECT_MODULE,
                                selectedModule: data.name,
                                fields: data.result,
                                showTargetModuleOption: true,
                                showSelectedModuleOption: PROJECT_MODULE !== data.name
                            });
                            updater_field.setOptions(data.result, true);
                        }

                    }
                });

            };
            var changeRelatedFn = function() {
                $('.pmse-form-error')
                    .removeClass('pmse-form-error-on')
                    .addClass('pmse-form-error-off');
                App.alert.show('upload', {level: 'process', title: 'LBL_LOADING_NO_DOTS', autoclose: false});
                var optionType = filterModules.selectedFieldOption(this.html, this.options);
                if (!optionType || optionType === 'one') {
                    filterRelated.setFilterFieldDisable(filterRelated, true);
                } else {
                    filterRelated.setFilterFieldDisable(filterRelated, false);
                }
                filterRelated.setObjectValue(null);
                filterRelated.setModule(null, null);
                if (comboRelated.value) {
                    if (filterRelated.selectField.disabled === false) {
                        filterRelated.setModule(comboRelated.value, comboModules.getSelectedData().module_name);
                    }
                    updater_field.proxy.url = 'pmse_Project/CrmData/relatedfields/' + comboRelated.value;
                    updater_field.proxy.getData({
                        call_type: 'CF',
                        base_module: comboModules.getSelectedData().module_name
                    }, {
                        success: function(data) {
                            App.alert.dismiss('upload');
                            if (data) {
                                data.result = setDatetimeFieldsBCOptions({
                                    targetModule: PROJECT_MODULE,
                                    selectedModule: data.name,
                                    fields: data.result,
                                    showTargetModuleOption: true,
                                    showSelectedModuleOption: PROJECT_MODULE !== data.name
                                });
                                updater_field.setOptions(data.result);
                            }

                        }
                    });
                } else {
                    updater_field.proxy.url = 'pmse_Project/CrmData/relatedfields/' + comboModules.value;
                    updater_field.proxy.getData({call_type: 'CF', base_module: PROJECT_MODULE}, {
                        success: function(data) {
                            App.alert.dismiss('upload');
                            if (data) {
                                data.result = setDatetimeFieldsBCOptions({
                                    targetModule: PROJECT_MODULE,
                                    selectedModule: data.name,
                                    fields: data.result,
                                    showTargetModuleOption: true,
                                    showSelectedModuleOption: PROJECT_MODULE !== data.name
                                });
                                updater_field.setOptions(data.result);
                            }

                        }
                    });
                }
            };
            var comboModules = new ComboboxField({
                label: translate('LBL_PMSE_FORM_LABEL_MODULE'),
                name: 'act_field_module',
                submit: true,
                change: changeFieldsFn,
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/related/' + PROJECT_MODULE,
                    uid: PROJECT_MODULE,
                    callback: null
                })
            });
            var filterModules = new FilterField({
                label: translate('LBL_PMSE_FORM_LABEL_FILTER'),
                name: 'act_field_filter',
                submit: true,
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/related/' + PROJECT_MODULE,
                    uid: PROJECT_MODULE,
                    callback: null
                })
            });
            var comboRelated = new ComboboxField({
                label: translate('LBL_PMSE_FORM_LABEL_RELATED'),
                name: 'act_field_related',
                submit: true,
                change: changeRelatedFn,
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/related/' + PROJECT_MODULE,
                    uid: PROJECT_MODULE,
                    callback: null
                })
            });
            var filterRelated = new FilterField({
                label: translate('LBL_PMSE_FORM_LABEL_FILTER'),
                name: 'act_field_filter_related',
                submit: true,
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/related/' + PROJECT_MODULE,
                    uid: PROJECT_MODULE,
                    callback: null
                })
            });
            var updater_field = new UpdaterField({
                label: translate('LBL_PMSE_FORM_LABEL_FIELDS'),
                name: 'act_fields',
                submit: true,
                decimalSeparator: App.config.defaultDecimalSeparator,
                numberGroupingSeparator: App.config.defaultNumberGroupingSeparator,
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/fields/' + PROJECT_MODULE,
                    uid: null,
                    callback: null
                }),
                fieldWidth: 470,
                fieldHeight: 260,
                hasCheckbox: true,
                actionType: 'changeField'
            });

            var actionText = translate('LBL_PMSE_CONTEXT_MENU_SETTINGS');
            var actionCSS = 'adam-menu-icon-configure';
            var items = [comboModules, filterModules, comboRelated, filterRelated, updater_field];
            var proxy = new SugarProxy({
                url: 'pmse_Project/ActivityDefinition/' + this.id,
                uid: this.id,
                callback: null
            });
            var callback = {
                'loaded': function(data) {
                    var params = data.act_params ? JSON.parse(data.act_params) : {};

                    self.canvas.emptyCurrentSelection();

                    comboModules.proxy.getData({
                        cardinality: 'all'
                    }, {
                        success: function(modules) {
                            if (modules && modules.success) {
                                comboModules.setOptions(modules.result);
                                var initialModule = data.act_field_module || modules.result[0].value;
                                project.addMetadata('projectModuleFields', {
                                    dataURL: 'pmse_Project/CrmData/fields/' + PROJECT_MODULE,
                                    dataRoot: 'result',
                                    success: function(data) {
                                        updater_field.setVariables(data);
                                    }
                                });
                                var optionType = filterModules.selectedFieldOption(comboModules.html, modules.result);
                                if (!optionType) {
                                    filterModules.setFilterFieldDisable(filterModules, true);
                                    filterRelated.setFilterFieldDisable(filterRelated, true);
                                } else if (optionType === 'one') {
                                    filterModules.setFilterFieldDisable(filterModules, true);
                                } else {
                                    filterModules.setFilterFieldDisable(filterModules, false);
                                }
                                if (filterModules.valueElements[0].disabled === false) {
                                    if (params.filter) {
                                        filterModules.setObjectValue(params.filter);
                                    }
                                    filterModules.setModule(comboModules.value, PROJECT_MODULE);
                                }
                                if (!optionType) {
                                    comboRelated.disable();
                                } else {
                                    comboRelated.enable();
                                }
                                if (params.chainedRelationship) {
                                    comboRelated.setValue(params.chainedRelationship.module);
                                }
                                comboRelated.proxy.url = 'pmse_Project/CrmData/related/' +
                                    comboModules.getSelectedData().module_name;
                                comboRelated.proxy.getData({removeTarget: true}, {
                                    success: function(data) {
                                        if (data) {
                                            data.result.unshift({value: '', text: 'Select...'});
                                            comboRelated.setOptions(data.result);
                                            var optionType = filterModules.selectedFieldOption(
                                                comboRelated.html,
                                                data.result
                                            );
                                            if (!optionType || optionType === 'one') {
                                                filterRelated.setFilterFieldDisable(filterRelated, true);
                                            } else {
                                                filterRelated.setFilterFieldDisable(filterRelated, false);
                                            }
                                            if (filterRelated.valueElements[0].disabled === false) {
                                                if (params.chainedRelationship) {
                                                    if (params.chainedRelationship.filter) {
                                                        filterRelated.setObjectValue(params.chainedRelationship.filter);
                                                    }
                                                    filterRelated.setModule(
                                                        comboRelated.value,
                                                        comboModules.getSelectedData().module_name
                                                    );
                                                } else {
                                                    filterRelated.setModule(null, null);
                                                }
                                            }
                                        }
                                    }
                                });
                                if (params.chainedRelationship) {
                                    updater_field.proxy.uid = comboModules.getSelectedData().module_name;
                                    updater_field.proxy.url = 'pmse_Project/CrmData/relatedfields/' +
                                        params.chainedRelationship.module;
                                } else {
                                    updater_field.proxy.uid = PROJECT_MODULE;
                                    updater_field.proxy.url = 'pmse_Project/CrmData/relatedfields/' + initialModule;
                                }
                                // Call type set to CF to distinguish from Add Related Record
                                updater_field.proxy.getData({call_type: 'CF', base_module: updater_field.proxy.uid}, {
                                    success: function(fields) {
                                        if (fields) {
                                            fields.result = setDatetimeFieldsBCOptions({
                                                targetModule: PROJECT_MODULE,
                                                selectedModule: fields.name,
                                                fields: fields.result,
                                                showTargetModuleOption: true,
                                                showSelectedModuleOption: PROJECT_MODULE !== fields.name
                                            });
                                            updater_field.setOptions(fields.result);
                                            updater_field.setValue(data.act_fields || null);
                                            updater_field.isValid();
                                            App.alert.dismiss('upload');
                                            w.html.style.display = 'inline';
                                        }

                                    }
                                });
                            }
                        }
                    });
                }
            };
            action = {
                proxy: proxy,
                items: items,
                labelWidth: labelWidth,
                actionText: actionText,
                actionCSS: actionCSS,
                callback: callback
            };
            break;

        case 'ADD_RELATED_RECORD':
            var labelWidth = '20%';
            var changeFieldsFn = function() {
                $(".pmse-form-error")
                    .removeClass('pmse-form-error-on')
                    .addClass('pmse-form-error-off');
                App.alert.show('upload', {level: 'process', title: 'LBL_LOADING_NO_DOTS', autoClose: false});
                var optionType = filterModules.selectedFieldOption(this.html, this.options);
                if (!optionType) {
                    filterModules.setFilterFieldDisable(filterModules, true);
                } else if (optionType === 'one') {
                    filterModules.setFilterFieldDisable(filterModules, true);
                } else {
                    filterModules.setFilterFieldDisable(filterModules, false);
                }
                filterModules.setObjectValue(null);
                filterModules.setModule(comboModules.value, PROJECT_MODULE);
                if (!optionType) {
                    comboRelated.disable();
                } else {
                    comboRelated.enable();
                    comboRelated.removeOptions();
                    comboRelated.value = '';
                    comboRelated.proxy.url = 'pmse_Project/CrmData/related/' +
                        comboModules.getSelectedData().module_name;
                    comboRelated.proxy.getData({removeTarget: true, cardinality: 'many', call_type: 'AC'}, {
                        success: function(data) {
                            App.alert.dismiss('upload');
                            if (data) {
                                data.result.unshift({value: '', text: 'Select...'});
                                comboRelated.setOptions(data.result);
                            }
                        }
                    });
                }
                updater_field.proxy.uid = comboModules.value;
                updater_field.proxy.url = 'pmse_Project/CrmData/addRelatedRecord/' + comboModules.value;
                updater_field.proxy.getData({base_module: PROJECT_MODULE}, {
                    success: function(data) {
                        App.alert.dismiss('upload');
                        if (data) {
                            data.result = setDatetimeFieldsBCOptions({
                                targetModule: PROJECT_MODULE,
                                selectedModule: data.name,
                                fields: data.result,
                                showTargetModuleOption: true,
                                showSelectedModuleOption: false
                            });
                            updater_field.setOptions(data.result, true);
                        }
                    }
                });

            };
            var changeRelatedFn = function() {
                $('.pmse-form-error')
                    .removeClass('pmse-form-error-on')
                    .addClass('pmse-form-error-off');
                App.alert.show('upload', {level: 'process', title: 'LBL_LOADING_NO_DOTS', autoclose: false});
                if (comboRelated.value) {
                    updater_field.proxy.uid = comboRelated.value;
                    updater_field.proxy.url = 'pmse_Project/CrmData/addRelatedRecord/' + comboRelated.value;
                    updater_field.proxy.getData({
                        base_module: comboModules.getSelectedData().module_name
                    }, {
                        success: function(data) {
                            App.alert.dismiss('upload');
                            if (data) {
                                data.result = setDatetimeFieldsBCOptions({
                                    targetModule: PROJECT_MODULE,
                                    selectedModule: data.name,
                                    fields: data.result,
                                    showTargetModuleOption: true,
                                    showSelectedModuleOption: false
                                });
                                updater_field.setOptions(data.result);
                            }

                        }
                    });
                } else {
                    updater_field.proxy.uid = comboModules.value;
                    updater_field.proxy.url = 'pmse_Project/CrmData/addRelatedRecord/' + comboModules.value;
                    updater_field.proxy.getData({base_module: PROJECT_MODULE}, {
                        success: function(data) {
                            App.alert.dismiss('upload');
                            if (data) {
                                data.result = setDatetimeFieldsBCOptions({
                                    targetModule: PROJECT_MODULE,
                                    selectedModule: data.name,
                                    fields: data.result,
                                    showTargetModuleOption: true,
                                    showSelectedModuleOption: false
                                });
                                updater_field.setOptions(data.result);
                            }

                        }
                    });
                }
            };
            var comboModules = new ComboboxField({
                jtype: 'combobox',
                label: translate('LBL_PMSE_FORM_LABEL_RELATED_MODULE'),
                name: 'act_field_module',
                submit: true,
                change: changeFieldsFn,
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/related/' + PROJECT_MODULE,
                    uid: PROJECT_MODULE,
                    callback: null
                })
            });
            var filterModules = new FilterField({
                label: translate('LBL_PMSE_FORM_LABEL_FILTER'),
                name: 'act_field_filter',
                submit: true,
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/related/' + PROJECT_MODULE,
                    uid: PROJECT_MODULE,
                    callback: null
                })
            });
            var comboRelated = new ComboboxField({
                label: translate('LBL_PMSE_FORM_LABEL_RELATED'),
                name: 'act_field_related',
                submit: true,
                change: changeRelatedFn,
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/related/' + PROJECT_MODULE,
                    uid: PROJECT_MODULE,
                    callback: null
                })
            });
            var updater_field = new UpdaterField({
                label: translate('LBL_PMSE_FORM_LABEL_FIELDS'),
                name: 'act_fields',
                submit: true,
                decimalSeparator: App.config.defaultDecimalSeparator,
                numberGroupingSeparator: App.config.defaultNumberGroupingSeparator,
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/addRelatedRecord/' + PROJECT_MODULE,
                    uid: null,
                    callback: null
                }),
                fieldWidth: 470,
                fieldHeight: 260,
                actionType: 'addRelatedRecord'
            });
            var actionText = translate('LBL_PMSE_CONTEXT_MENU_SETTINGS');
            var actionCSS = 'adam-menu-icon-configure';
            var items = [comboModules, filterModules, comboRelated, updater_field];
            var proxy = new SugarProxy({
                url: 'pmse_Project/ActivityDefinition/' + this.id,
                uid: this.id,
                callback: null
            });
            var callback = {
                'loaded': function(data) {
                    var params = data.act_params ? JSON.parse(data.act_params) : {};
                    self.canvas.emptyCurrentSelection();
                    comboModules.proxy.getData({cardinality: 'all', call_type: 'AC'}, {
                        success: function(modules) {
                            if (modules && modules.success && modules.result && modules.result.length > 1) {
                                modules.result = modules.result.splice(1);
                                comboModules.setOptions(modules.result);
                                // If the stored value of related module does not exist in the list of options
                                // (maybe the related module got deactivated or deleted) then add the missing option
                                // back to the list of options and set it as invalid so that an error will be
                                // flagged to the user
                                if (comboModules.value != comboModules.controlObject.value) {
                                    comboModules.addOption({value: comboModules.value, text: comboModules.value});
                                    comboModules.setValid(false);
                                }
                                var initialModule = data.act_field_module || modules.result[0].value;
                                project.addMetadata('projectModuleFieldsRelated', {
                                    dataURL: 'pmse_Project/CrmData/fields/' + PROJECT_MODULE +
                                        '?base_module=' + PROJECT_MODULE + '&call_type=PD',
                                    dataRoot: 'result',
                                    success: function(data) {
                                        updater_field.setVariables(data);
                                    }
                                });
                                var optionType = filterModules.selectedFieldOption(comboModules.html, modules.result);
                                if (!optionType) {
                                    filterModules.setFilterFieldDisable(filterModules, true);
                                } else if (optionType === 'one') {
                                    filterModules.setFilterFieldDisable(filterModules, true);
                                } else {
                                    filterModules.setFilterFieldDisable(filterModules, false);
                                }
                                if (filterModules.valueElements[0].disabled === false) {
                                    if (params.filter) {
                                        filterModules.setObjectValue(params.filter);
                                    }
                                    filterModules.setModule(comboModules.value, PROJECT_MODULE);
                                }
                                if (!optionType) {
                                    comboRelated.disable();
                                } else {
                                    comboRelated.enable();
                                }
                                comboModules.setValue(params.module || initialModule);
                                if (params.chainedRelationship) {
                                    comboRelated.setValue(params.chainedRelationship.module);
                                }
                                comboRelated.proxy.url = 'pmse_Project/CrmData/related/' +
                                    comboModules.getSelectedData().module_name;
                                comboRelated.proxy.getData({removeTarget: true, cardinality: 'many', call_type: 'AC'}, {
                                    success: function(data) {
                                        if (data) {
                                            data.result.unshift({value: '', text: 'Select...'});
                                            comboRelated.setOptions(data.result);
                                        }
                                    }
                                });
                                if (params.chainedRelationship) {
                                    updater_field.proxy.uid = comboModules.getSelectedData().module_name;
                                    updater_field.proxy.url = 'pmse_Project/CrmData/addRelatedRecord/' +
                                        params.chainedRelationship.module;
                                } else {
                                    updater_field.proxy.uid = PROJECT_MODULE;
                                    updater_field.proxy.url = 'pmse_Project/CrmData/addRelatedRecord/' +
                                        comboModules.getSelectedData().module_name;
                                }
                                updater_field.proxy.getData({base_module: updater_field.proxy.uid}, {
                                    success: function(fields) {
                                        fields.result = setDatetimeFieldsBCOptions({
                                            targetModule: PROJECT_MODULE,
                                            selectedModule: fields.name,
                                            fields: fields.result,
                                            showTargetModuleOption: true,
                                            showSelectedModuleOption: false
                                        });
                                        updater_field.setOptions(fields.result);
                                        updater_field.setValue(data.act_fields || null);
                                        updater_field.isValid();
                                        App.alert.dismiss('upload');
                                        w.html.style.display = 'inline';
                                    },
                                    error: function(sugarHttpError) {
                                        App.alert.dismiss('upload');
                                        App.alert.show(this.proxyErrorKey, {
                                            level: 'error',
                                            messages: sugarHttpError.errorThrown + ': ' + sugarHttpError.message
                                        });
                                        w.close();
                                    }
                                });
                            } else {
                                App.alert.dismiss('upload');
                                w.hide();
                                App.alert.show('upload', {
                                    level: 'warning',
                                    messages: SUGAR.App.lang.get(
                                        'LBL_PMSE_CANNOT_CONFIGURE_ADD_RELATED_RECORD',
                                        'pmse_Project'
                                    ),
                                    autoClose: false
                                });
                            }
                        }
                    });

                }
            };
            action = {
                proxy: proxy,
                items: items,
                labelWidth: labelWidth,
                actionText: actionText,
                actionCSS: actionCSS,
                callback: callback
            };
            break;

        case 'BUSINESS_RULE':
            var comboBusiness = new SearchableCombobox({
                label: translate('LBL_PMSE_LABEL_RULE'),
                name: 'act_fields',
                submit: true,
                placeholder: translate('LBL_PMSE_FORM_OPTION_SELECT'),
                change: function() {
                    comboBusiness.setValid(true);
                },
                proxy: new SugarProxy({
                    url: 'pmse_Project/CrmData/rulesets/' + adamUID + '?order_by=name',
                    uid: adamUID,
                    callback: null
                })
            });
            var hiddenModule = new HiddenField({
                name: 'act_field_module',
                initialValue: PROJECT_MODULE
            });
            var actionText = translate('LBL_PMSE_CONTEXT_MENU_SETTINGS');
            var actionCSS = 'adam-menu-icon-configure';
            var items = [comboBusiness, hiddenModule];
            var proxy = new SugarProxy({
                url: 'pmse_Project/ActivityDefinition/' + this.id,
                uid: this.id,
                callback: null
            });
            var callback = {
                'loaded': function(data) {
                    self.canvas.emptyCurrentSelection();
                    comboBusiness.proxy.getData(null, {
                        success: function(rules) {
                            if (rules && rules.success) {
                                comboBusiness.setOptions(rules.result);
                                if (data && data.act_fields) {
                                    var isValid = false;
                                    for (var i = 0; i < rules.result.length; i++) {
                                        if (rules.result[i].value == data.act_fields) {
                                            isValid = true;
                                            break;
                                        }
                                    }
                                    comboBusiness.setValue(data.act_fields);
                                    comboBusiness.setValid(isValid);
                                }
                            }
                            App.alert.dismiss('upload');
                            w.html.style.display = 'inline';

                        }
                    });

                }
            };
            action = {
                proxy: proxy,
                items: items,
                actionText: actionText,
                actionCSS: actionCSS,
                callback: callback
            };
            break;

        case 'DOCUMENT_MERGE':
            var searchUrl = 'DocumentTemplates?filter[0][name][$starts]=' +
            '{%TERM%}&filter[0][template_module][$equals]=' +
            PROJECT_MODULE + '&fields=id,name&max_num={%PAGESIZE%}&offset={%OFFSET%}';
            var comboDocumentTemplates = new SearchableCombobox({
                label: translate('LBL_PMSE_FORM_LABEL_DOCUMENT_MERGE'),
                name: 'act_document_template',
                submit: true,
                searchURL: searchUrl,
                searchValue: 'id',
                searchLabel: 'name',
                required: true,
                placeholder: translate('LBL_PMSE_FORM_LABEL_DOCUMENT_MERGE_HELP_TEXT')
            });

            var convertToPdfCheckbox = new CheckboxField({
                name: 'act_convert_to_pdf',
                label: translate('LBL_PMSE_FORM_LABEL_CONVERT_TO_PDF'),
                required: false,
                value: false,
                options: {
                    labelAlign: 'right',
                    marginLeft: 80
                }
            });

            var hiddenModule = new HiddenField({
                name: 'act_field_module',
                initialValue: PROJECT_MODULE
            });

            var actionText = translate('LBL_PMSE_CONTEXT_MENU_SETTINGS');
            var actionCSS = 'adam-menu-icon-configure';

            // items displayed in action config
            var items = [comboDocumentTemplates, convertToPdfCheckbox, hiddenModule,];

            var proxy = new SugarProxy({
                url: 'pmse_Project/ActivityDefinition/' + this.id,
                uid: this.id,
                callback: null
            });
            var callback = {
                'loaded': function(data) {
                    if (data.act_fields) {
                        try {
                            var fieldData = JSON.parse(data.act_fields);
                        } catch (e) {}
                    }

                    // intialize checkbox value
                    let nValue = false;
                    self.canvas.emptyCurrentSelection();

                    // set value for document template
                    if (fieldData && fieldData.act_document_template) {
                        comboDocumentTemplates.setValue(fieldData.act_document_template);
                    }

                    //set value for the checkbox
                    if (fieldData && fieldData.act_convert_to_pdf && fieldData.act_convert_to_pdf == 1) {
                        nValue = true;
                    }

                    convertToPdfCheckbox.setValue(nValue);
                    $(convertToPdfCheckbox.html).children('input').prop('checked', nValue);
                    App.alert.dismiss('upload');
                    w.html.style.display = 'inline';

                    this.submit = function() {
                        var convert = convertToPdfCheckbox.value;

                        var templateId = comboDocumentTemplates.value;
                        var templateName = comboDocumentTemplates.getSelectedText();

                        var params = {
                            act_convert_to_pdf: convert,
                            act_document_template: {
                                text: templateName,
                                value: templateId,
                            },
                        };

                        var data = {
                            act_fields: JSON.stringify(params),
                        };

                        this.proxy.sendData(data);
                        this.parent.close();
                    };
                },
            };
            action = {
                proxy: proxy,
                items: items,
                actionText: actionText,
                actionCSS: actionCSS,
                callback: callback,
            };
            break;
        default:
            // For custom actions, create a function called AdamActivity.prototype.customGetAction
            // and make it return the properties for the action that is passed in
            if (_.isFunction(AdamActivity.prototype.customGetAction)) {
                action = this.customGetAction(type, w) || {};
            }
    }

    return action;
};

/**
 * Gets the properties for the modal for each action
 *
 * @param {string} type The name of the action
 * @return {Object} An object with the modal's properties
 */
AdamActivity.prototype.getWindowDef = function(type) {
    var wWidth;
    var wHeight;
    var wTitle;

    switch (type) {
        case 'NONE':
            break;

        case 'ASSIGN_USER':
            wWidth = 550;
            wHeight = 160;
            wTitle = 'LBL_PMSE_FORM_TITLE_ASSIGN_USER';
            break;

        case 'ASSIGN_TEAM':
            wWidth = 550;
            wHeight = 302;
            wTitle = 'LBL_PMSE_FORM_TITLE_ASSIGN_TEAM';
            break;

        case 'CHANGE_FIELD':
            wWidth = 670;
            wHeight = 400;
            wTitle = 'LBL_PMSE_FORM_TITLE_CHANGE_FIELDS';
            break;

        case 'ADD_RELATED_RECORD':
            wWidth = 680;
            wHeight = 420;
            wTitle = 'LBL_PMSE_FORM_TITLE_ADD_RELATED_RECORD';
            break;

        case 'BUSINESS_RULE':
            wWidth = 500;
            wHeight = 140;
            wTitle = 'LBL_PMSE_FORM_TITLE_BUSINESS_RULE';
            break;

        case 'DOCUMENT_MERGE':
            wWidth = 500;
            wHeight = 160;
            wTitle = 'LBL_PMSE_FORM_TITLE_DOCUMENT_MERGE';
            break;

        default:
            // For custom actions, create a function called AdamActivity.prototype.customGetWindowDef
            // and make it return the properties for the modal for the action
            if (_.isFunction(AdamActivity.prototype.customGetWindowDef)) {
                return this.customGetWindowDef(type) || {};
            }
            break;
    }

    return {
        wWidth: wWidth,
        wHeight: wHeight,
        wTitle: translate(wTitle) + ': ' + this.getName()
    };
};

/**
 * Retrieves the URL base endpoint for activity element settings data
 * @return {string} the correct URL base endpoint
 */
AdamActivity.prototype.getBaseURL = function() {
    return 'pmse_Project/ActivityDefinition/';
};

/**
 * Returns the proper validation callback function for this activity element
 * @return {Object} the correct callback function
 */
AdamActivity.prototype.getValidationFunction = function() {
    switch (this.getActivityTaskType()) {
        case 'USERTASK':
            return this.callbackFunctionForActivity;
        case 'SCRIPTTASK':
            switch (this.getActivityScriptType()) {
                case 'NONE':
                    return this.callbackFunctionForUnassignedAction;
                case 'BUSINESS_RULE':
                    return this.callbackFunctionForBusinessRuleAction;
                case 'ASSIGN_USER':
                    return this.callbackFunctionForAssignUserAction;
                case 'ASSIGN_TEAM':
                    return this.callbackFunctionForRoundRobinAction;
                case 'CHANGE_FIELD':
                    return this.callbackFunctionForChangeFieldAction;
                case 'ADD_RELATED_RECORD':
                    return this.callbackFunctionForAddRelatedRecordAction;
            }
    }
};

/**
 * Validates an activity's settings
 * @param {Object} data contains the element settings information received from the API call
 * @param {Object} element is the element on the canvas that is currently being examined/validated
 * @param {Object} validationTools is a collection of utility functions for validating element data
 */
AdamActivity.prototype.callbackFunctionForActivity = function(data, element, validationTools) {
    var user;

    // Validate the number of incoming and outgoing edges
    validationTools.validateNumberOfEdges(1, null, 1, null, element);

    // Under 'Forms' settings, check that expected time is > 0 (if it is entered)
    if (data.act_expected_time.time && data.act_expected_time.time < 0) {
        validationTools.createError(element, 'LBL_PMSE_ERROR_ACTIVITY_EXPECTED_TIME');
    }

    // Under 'Users' settings, if 'Assignment Method' is set to 'Static Assignment', and a
    // specific user is selected, check that the user exists
    if (data.act_assignment_method === 'static') {
        user = data.act_assign_user;
        if (user !== 'currentuser' && user !== 'owner' && user !== 'supervisor') {
            let criteriaComponents = {
                type: 'USER_IDENTITY',
                value: user
            };
            validationTools.validateAtom(criteriaComponents, element, validationTools);
        }
    }
};

/**
 * Validates an unassigned action's settings
 * @param {Object} data contains the element settings information received from the API call
 * @param {Object} element is the element on the canvas that is currently being examined/validated
 * @param {Object} validationTools is a collection of utility functions for validating element data
 */
AdamActivity.prototype.callbackFunctionForUnassignedAction = function(data, element, validationTools) {

    // Validate the number of incoming and outgoing edges
    validationTools.validateNumberOfEdges(1, null, 1, null, element);

    // Action is unassigned, which is an error in itself
    validationTools.createWarning(element, 'LBL_PMSE_ERROR_ACTION_UNASSIGNED');
};

/**
 * Validates a business rule action's settings
 * @param  {Object} data contains the element settings information received from the API call
 * @param  {Object} element is the element on the canvas that is currently being examined/validated
 * @param {Object} validationTools is a collection of utility functions for validating element data
 */
AdamActivity.prototype.callbackFunctionForBusinessRuleAction = function(data, element, validationTools) {

    // Validate the number of incoming and outgoing edges
    validationTools.validateNumberOfEdges(1, null, 1, null, element);

    let criteriaComponents = {
        type: 'ALL_BUSINESS_RULES',
        value: data.act_fields
    };
    // Validate the selected business rule
    validationTools.validateAtom(criteriaComponents, element, validationTools);
};

/**
 * Validates an assign user action's settings
 * @param  {Object} data contains the element settings information received from the API call
 * @param  {Object} element is the element on the canvas that is currently being examined/validated
 * @param {Object} validationTools is a collection of utility functions for validating element data
 */
AdamActivity.prototype.callbackFunctionForAssignUserAction = function(data, element, validationTools) {

    // Validate the number of incoming and outgoing edges
    validationTools.validateNumberOfEdges(1, null, 1, null, element);

    let criteriaComponents = {
        type: 'USER_IDENTITY',
        value: data.act_assign_user
    };
    // Validate the selected process user
    validationTools.validateAtom(criteriaComponents, element, validationTools);
};

/**
 * Validates a round robin action's settings
 * @param  {Object} data contains the element settings information received from the API call
 * @param  {Object} element is the element on the canvas that is currently being examined/validated
 * @param {Object} validationTools is a collection of utility functions for validating element data
 */
AdamActivity.prototype.callbackFunctionForRoundRobinAction = function(data, element, validationTools) {

    // Validate the number of incoming and outgoing edges
    validationTools.validateNumberOfEdges(1, null, 1, null, element);

    let criteriaComponents = {
        type: 'TEAM',
        value: data.act_assign_team
    };
    // Validate the selected team
    validationTools.validateAtom(criteriaComponents, element, validationTools);
};

/**
 * Validates a change field action's settings
 * @param  {Object} data contains the element settings information received from the API call
 * @param  {Object} element is the element on the canvas that is currently being examined/validated
 * @param {Object} validationTools is a collection of utility functions for validating element data
 */
AdamActivity.prototype.callbackFunctionForChangeFieldAction = function(data, element, validationTools) {
    var criteria = [];
    var actModule = data.act_field_module;
    var actParams = data.act_params ? JSON.parse(data.act_params) : null;
    if (actParams && actParams.chainedRelationship) {
        actModule = actParams.chainedRelationship.module;
    }

    // Validate the number of incoming and outgoing edges
    validationTools.validateNumberOfEdges(1, null, 1, null, element);

    // For any selected related fields, ensure that they exist in the current instance of Sugar
    if (data.act_fields) {
        criteria = JSON.parse(data.act_fields);
    }
    for (var i = 0; i < criteria.length; i++) {
        let criteriaComponents = {
            type: actModule,
            module: criteria[i].field
        };
        validationTools.validateAtom(criteriaComponents, element, validationTools);
    }
};

/**
 * Validates an add related record action's settings
 * @param  {Object} data contains the element settings information received from the API call
 * @param  {Object} element is the element on the canvas that is currently being examined/validated
 * @param {Object} validationTools is a collection of utility functions for validating element data
 */
AdamActivity.prototype.callbackFunctionForAddRelatedRecordAction = function(data, element, validationTools) {
    var actModule = data.act_field_module;
    var actParams = data.act_params ? JSON.parse(data.act_params) : null;
    if (actParams && actParams.chainedRelationship) {
        actModule = actParams.chainedRelationship.module;
    }
    var url = App.api.buildURL('pmse_Project/CrmData/addRelatedRecord/' +
        actModule + '?base_module=' + validationTools.getTargetModule());
    var options = {
        'bulk': 'validate_element_settings'
    };

    // Validate the number of incoming and outgoing edges
    validationTools.validateNumberOfEdges(1, null, 1, null, element);

    // Validate the module field settings against the current instance
    validationTools.progressTracker.incrementTotalValidations();
    App.api.call('read', url, null, {
        success: function(form) {
            element.validateAddRelatedRecordForm(form, data, element, validationTools);
        },
        error: function(data) {
            validationTools.createWarning(element, 'LBL_PMSE_ERROR_DATA_NOT_FOUND', 'Module relationship');
        },
        complete: function(data) {
            validationTools.progressTracker.incrementValidated();
        }
    }, options);
};

/**
 * Validates the field settings in an add related record action
 * @param  {Object} form is the API response data from the addRelatedRecord endpoint (provides information on
 *                  required fields for the given module relationship in the current instance)
 * @param  {Object} data contains the element settings information received from the API call
 * @param  {Object} element is the element on the canvas that is currently being examined/validated
 * @param {Object} validationTools is a collection of utility functions for validating element data
 */
AdamActivity.prototype.validateAddRelatedRecordForm = function(form, data, element, validationTools) {
    var i;
    var requiredFields;
    var critera = [];

    // Parse the list of field settings for the new record
    if (data.act_fields) {
        criteria = JSON.parse(data.act_fields);
    }

    // Get a list of the required fields of the related module in this instance of Sugar
    requiredFields = form.result.filter(function(field) {
        return field.required;
    });

    // For each required field, check if that field is set in the field settings of the new record
    for (i = 0; i < requiredFields.length; i++) {
        element.checkIfRequiredFieldIsSet(requiredFields[i], criteria, element, validationTools);
    }
};

/**
 * Checks an add related record's field settings to ensure a given required field is set
 * @param  {Object} field is a specific field object obtained from the API response from the
 *                  addRelatedRecord endpoint, and is a required field in the element settings
 * @param  {Object} criteria is the set of field settings obtained from the element settings
 *                  API response
 * @param  {Object} element is the element on the canvas that is currently being examined/validated
 * @param {Object} validationTools is a collection of utility functions for validating element data
 */
AdamActivity.prototype.checkIfRequiredFieldIsSet = function(field, criteria, element, validationTools) {
    var i;
    var requiredFieldIsSet = false;

    // Check if the required field has been set in the new record
    for (i = 0; i < criteria.length; i++) {
        if (criteria[i].field === field.value && criteria[i].value) {
            requiredFieldIsSet = true;
            break;
        }
    }

    if (!requiredFieldIsSet) {
        validationTools.createWarning(element, 'LBL_PMSE_ERROR_FIELD_REQUIRED', field.text);
    }
};

AdamActivity.prototype.userActionById = function(userId, callback) {
    let usersProxy = new SugarProxy();
    usersProxy.url = 'pmse_Project/CrmData/users';
    usersProxy.getData(null, {
        success: function(users) {
            users = users.result || [];

            let user = users.find(function(item) {
                return item.value === userId;
            });

            callback.call(this, {
                text: user ? user.text : userId,
                value: user ? user.value : userId,
            });
        }
    });
};
