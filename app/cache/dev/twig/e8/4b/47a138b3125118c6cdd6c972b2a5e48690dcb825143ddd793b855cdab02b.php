<?php

/* TeamBuilderCovoiturageBundle:Adherent:StatAge.html.twig */
class __TwigTemplate_e84b47a138b3125118c6cdd6c972b2a5e48690dcb825143ddd793b855cdab02b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TeamBuilderCovoiturageBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Erasebody' => array($this, 'block_Erasebody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TeamBuilderCovoiturageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Statistiques Age";
    }

    // line 4
    public function block_Erasebody($context, array $blocks = array())
    {
        // line 5
        echo " 
<script type=\"text/javascript\">
\$(function () {

    Highcharts.data({
        csv: document.getElementById('tsv').innerHTML,
        itemDelimiter: '\\t',
        parsed: function (columns) {

            var brands = {},
                brandsData = [],
                versions = {},
                drilldownSeries = [];
            
            // Parse percentage strings
            columns[1] = \$.map(columns[1], function (value) {
                if (value.indexOf('%') === value.length - 1) {
                    value = parseFloat(value);
                }
                return value;
            });

            \$.each(columns[0], function (i, name) {
                var brand,
                    version;

                if (i > 0) {

                    // Remove special edition notes
                    //name = name.split(' -')[0];

                    // Split into brand and version
                    version = name.match(/([0-9]+[\\.0-9x]*)/);
                    if (version) {
                        version = version[0];
                    }
                    brand = name.replace(version, '');

                    // Create the main data
                    if (!brands[brand]) {
                        brands[brand] = columns[1][i];
                    } else {
                        brands[brand] += columns[1][i];
                    }

                    // Create the version data
                    if (version !== null) {
                        if (!versions[brand]) {
                            versions[brand] = [];
                        }
                        versions[brand].push([version, columns[1][i]]);
                    }
                }
                
            });

            \$.each(brands, function (name, y) {
                brandsData.push({ 
                    name: name, 
                    y: y,
                    drilldown: versions[name] ? name : null
                });
            });
            \$.each(versions, function (key, value) {
                drilldownSeries.push({
                    name: key,
                    id: key,
                    data: value
                });
            });
            
            console.log(brandsData);
            console.log(drilldownSeries);
            
\t\t\tdrilldownSeries = new Array();
            // Create the chart
            \$('#container').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Statistiques ages'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Total percent'
                    }
                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}%'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style=\"font-size:11px\">{series.name}</span><br>',
                    pointFormat: '<span style=\"color:{point.color}\">{point.name}</span>: <b>{point.y:.2f}%</b><br/>'
                }, 

                series: [{
                    name: \"Tranche d'age: \",
                    colorByPoint: true,
                    data: brandsData
                }],
                drilldown: {
                    series: drilldownSeries
                }
            })

        }
    });
});
    

</script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("highcharts/js/highcharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("highcharts/js/modules/data.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("highcharts/js/modules/drilldown.js"), "html", null, true);
        echo "\"></script>

<div id=\"container\" style=\"min-width: 310px;width: 1200px; height: 400px; margin: 0 auto\"></div>


<pre id=\"tsv\" style=\"display:none\">tranche age\tpourcentage
1825 18-25 ans\t";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["a1"]) ? $context["a1"] : $this->getContext($context, "a1")), "html", null, true);
        echo "%
2530 26-30 ans\t";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["a2"]) ? $context["a2"] : $this->getContext($context, "a2")), "html", null, true);
        echo "%
3040 31-40 ans\t";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["a3"]) ? $context["a3"] : $this->getContext($context, "a3")), "html", null, true);
        echo "%
4150 41-50 ans\t";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["a4"]) ? $context["a4"] : $this->getContext($context, "a4")), "html", null, true);
        echo "%</pre>
<button onclick=\"history.back()\" class=\"back_button\">Retour</button>
";
    }

    public function getTemplateName()
    {
        return "TeamBuilderCovoiturageBundle:Adherent:StatAge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 144,  193 => 143,  189 => 142,  185 => 141,  176 => 135,  172 => 134,  168 => 133,  38 => 5,  35 => 4,  29 => 3,);
    }
}
