<?php
/* Smarty version 3.1.39, created on 2022-08-19 16:15:47
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarCharts/chartjs/tpls/chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff70e35eae71_12604409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9b76a748af476b1cde769b95d68dcd3952c7002' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarCharts/chartjs/tpls/chart.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff70e35eae71_12604409 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['error']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        SUGAR.util.doWhen(
            "((SUGAR && SUGAR.mySugar && SUGAR.mySugar.sugarCharts)   || (SUGAR.loadChart && typeof loadSugarChart == 'function')  || document.getElementById('showHideChartButton') != null) && typeof(loadSugarChart) != undefined",
            function() {
                let css = [];
                let chartConfig = {};
                let chartParams = {};

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    chartConfig['<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
';
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    chartParams['<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
'] = '<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
';
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                chartConfig['reportView'] = true;

                {
                if (chartConfig['chartType'] === 'barChart' && chartConfig['barType'] === 'grouped') {
                     chartConfig['stacked'] = false;
                }
                }

                chartConfig['direction'] = $('html', window.parent.document).hasClass('rtl') ? 'rtl' : 'ltr';

                loadCustomChartForReports = function() {
                    loadSugarChart('<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
', css, chartConfig, chartParams, chart => {
                        if (!chart) {
                            showNoData();
                        } else if (chart.wrapperProperties) {
                            updateChartWrapperCss(chart.wrapperProperties);
                        }
                    });
                };

                // bug51857: fixed issue on report running in a loop when clicking on hide chart then run report in IE8 only
                // When hide chart button is clicked, the value of element showHideChartButton is set to $showchart.
                // Don't need to call the loadCustomChartForReports() function when hiding the chart.
                <?php if (!(isset($_smarty_tpl->tpl_vars['showchart']->value))) {?>
                    loadCustomChartForReports();
                <?php } else { ?>
                    if ($('#showHideChartButton').attr('value') !== '<?php echo $_smarty_tpl->tpl_vars['showchart']->value;?>
') {
                        loadCustomChartForReports();
                    }
                <?php }?>
            }
        );

        /**
         * Shows a "No data" message instead for charts that have no data
         */
        function showNoData() {
            let reportChartContainer = document.getElementsByClassName('reportChartContainer') || [];
            for (let container of reportChartContainer) {
                container.classList.add('noData');
            }
        }

        /**
         * Given a set of key/value CSS properties, applies them to the wrapper
         * element around the chart canvas
         *
         * @param properties the key/value CSS property pairs to set
         */
        function updateChartWrapperCss(properties) {
            let chartWrapper = document.getElementById(`chart_<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
_wrapper`);
            if (chartWrapper) {
                Object.assign(chartWrapper.style, properties);
            }
        }
    <?php echo '</script'; ?>
>
    <div id="chart_<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
_container" class="chartContainer">
        <div id="chart_<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
_wrapper" class="chartWrapper" data-content="chart">
            <canvas id="chart_<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
" class="sc-chart"></canvas>
            <div id="chart_<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
_nodata" class="chartNoData"><?php ob_start();
echo $_smarty_tpl->tpl_vars['noDataString']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</div>
        </div>
        <div class="sc-print sc-<?php echo $_smarty_tpl->tpl_vars['config']->value['chartType'];?>
" style="width: 720px; height: 480px; top: 0;">
            <canvas id="chart_<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
_print" class="sc-chart" width="720" height="480"></canvas>
        </div>
    </div>
    <div class="clear"></div>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
