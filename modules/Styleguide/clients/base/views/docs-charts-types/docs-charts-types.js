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
({
    className: 'container-fluid',

    _renderHtml: function() {
        this._super('_renderHtml');

        var data = {
            'properties': {
                'title': 'Forecasting for Q1 2017',
                'groups': [
                    {'label': 'Mark Gibson'},
                    {'label': 'Terence Li'},
                    {'label': 'James Joplin'},
                    {'label': 'Amy McCray'},
                    {'label': 'My Opps'}
                ],
                'xDataType': 'ordinal',
                'yDataType': 'currency'
            },
            'data': [
                {
                    'key': 'Qualified',
                    'values': [
                        {'x': 1, 'y': 50},
                        {'x': 2, 'y': 80},
                        {'x': 3, 'y': 0},
                        {'x': 4, 'y': 100},
                        {'x': 5, 'y': 100}
                    ]
                },
                {
                    'key': 'Proposal',
                    'values': [
                        {'x': 1, 'y': 50},
                        {'x': 2, 'y': 80},
                        {'x': 3, 'y': 0},
                        {'x': 4, 'y': 100},
                        {'x': 5, 'y': 90}
                    ]
                },
                {
                    'key': 'Negotiation',
                    'values': [
                        {'x': 1, 'y': 10},
                        {'x': 2, 'y': 50},
                        {'x': 3, 'y': 0},
                        {'x': 4, 'y': 40},
                        {'x': 5, 'y': 40}
                    ]
                }
            ]
        };

        var chart = sucrose.charts.multibarChart().colorData('default');

        d3.select('#chart svg')
            .datum(data)
            .call(chart);
    }
})
