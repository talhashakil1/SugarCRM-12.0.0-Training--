var fiscalSummary = {"fiscalYear":"Fiscal Year","fiscalQuarter":"Fiscal Quarter"};
// Add the fiscal group by defs to all modules with date type fields
for (module_name in module_defs) {
    for (field_name in module_defs[module_name].field_defs) {
        var field_def = module_defs[module_name].field_defs[field_name];
        var field_type = field_def.type;

        if (field_type == 'date' || field_type == 'datetime' || field_type == 'datetimecombo') {
            // Just loop over the fiscal group bys
            for (stype in fiscalSummary) {
                module_defs[module_name].group_by_field_defs[field_def.name + ':' + stype] = {
                    name : field_def.name + ':' + stype,
                    field_def_name : field_def.name,
                    vname : fiscalSummary[stype] + ': ' + field_def.vname,
                    column_function : stype,
                    summary_type : 'column',
                    field_type : field_type
                };
            }
        }
    }
}

var fiscalGroupings = [{"name":"fiscalYear","value":"By Fiscal Year"},{"name":"fiscalQuarter","value":"By Fiscal Quarter"}];
date_group_defs = date_group_defs.concat(fiscalGroupings);

var fiscalFilters = [{"name":"tp_previous_fiscal_year","value":"Previous Fiscal Year"},{"name":"tp_previous_fiscal_quarter","value":"Previous Fiscal Quarter"},{"name":"tp_current_fiscal_year","value":"Current Fiscal Year"},{"name":"tp_current_fiscal_quarter","value":"Current Fiscal Quarter"},{"name":"tp_next_fiscal_year","value":"Next Fiscal Year"},{"name":"tp_next_fiscal_quarter","value":"Next Fiscal Quarter"}];
filter_defs['date'] = filter_defs['date'].concat(fiscalFilters);
filter_defs['datetime'] = filter_defs['datetime'].concat(fiscalFilters);
filter_defs['datetimecombo'] = filter_defs['datetimecombo'].concat(fiscalFilters);