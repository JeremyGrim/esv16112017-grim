<?php

/* OpcacheBundle:Default:index.html.twig */
class __TwigTemplate_c41be57d828c5349a7e9194cfecb426ac8eb41e0583cbf7c4ef1d584a5c1ee19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f939f0de7042006521f20b172174f7988691e8de719bd3f60af0bcd4f3cad1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f939f0de7042006521f20b172174f7988691e8de719bd3f60af0bcd4f3cad1e->enter($__internal_1f939f0de7042006521f20b172174f7988691e8de719bd3f60af0bcd4f3cad1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpcacheBundle:Default:index.html.twig"));

        $__internal_0d3a90487d492be4f6989372e0004df867567d12fc5f32a35fe2db3fc8552f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3a90487d492be4f6989372e0004df867567d12fc5f32a35fe2db3fc8552f61->enter($__internal_0d3a90487d492be4f6989372e0004df867567d12fc5f32a35fe2db3fc8552f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpcacheBundle:Default:index.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset/css/style.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        <a class=\"button\" onclick=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["reset"]) ? $context["reset"] : $this->getContext($context, "reset")), "html", null, true);
        echo "\" href=\"\">Vider le cache</a>
        <div id=\"container\">
            <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getPageTitle", array(), "method"), "html", null, true);
        echo "</h1>

                            <div class=\"tabs\">

                                    <div class=\"tab\">
                                        <input type=\"radio\" id=\"tab-status\" name=\"tab-group-1\" value=\"\" checked>
                                        <label for=\"tab-status\">Status</label>
                                        <div class=\"content\">
                                            <table>
                                                ";
        // line 22
        echo $this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getStatusDataRows", array(), "method");
        echo "
                                            </table>
                                        </div>
                                    </div>

                                    <div class=\"tab\">
                                        <input type=\"radio\" id=\"tab-config\" name=\"tab-group-1\">
                                        <label for=\"tab-config\">Configuration</label>
                                        <div class=\"content\">
                                            <table>
                                                ";
        // line 32
        echo $this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getConfigDataRows", array(), "method");
        echo "
                                            </table>
                                        </div>
                                    </div>

                                    <div class=\"tab\">
                                        <input type=\"radio\" id=\"tab-scripts\" name=\"tab-group-1\">
                                        <label for=\"tab-scripts\">Scripts (";
        // line 39
        echo $this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getScriptStatusCount", array());
        echo ")</label>
                                        <div class=\"content\">
                                            <table style=\"font-size:0.8em;\">
                                                <tr>
                                                    <th width=\"10%\">Hits</th>
                                                    <th width=\"20%\">Memory</th>
                                                    <th width=\"70%\">Path</th>
                                                </tr>
                                                ";
        // line 47
        echo $this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getScriptStatusRows", array(), "method");
        echo "
                                            </table>
                                        </div>
                                    </div>

                                    <div class=\"tab\">
                                        <input type=\"radio\" id=\"tab-visualise\" name=\"tab-group-1\">
                                        <label for=\"tab-visualise\">Visualise Partition</label>
                                        <div class=\"content\"></div>
                                    </div>

                                </div>




                             <div id=\"graph\">
                                <form>
                                    <label><input type=\"radio\" name=\"dataset\" value=\"memory\" checked> Memory</label>
                                    <label><input type=\"radio\" name=\"dataset\" value=\"keys\"> Keys</label>
                                    <label><input type=\"radio\" name=\"dataset\" value=\"hits\"> Hits</label>
                                    <label><input type=\"radio\" name=\"dataset\" value=\"restarts\"> Restarts</label>
                                </form>

                                <div id=\"stats\"></div>
                            </div>


                </div>
            </div>





        </div>

        <div id=\"close-partition\">&#10006; Close Visualisation</div>
        <div id=\"partition\"></div>

        <script src=\"//cdnjs.cloudflare.com/ajax/libs/d3/3.0.1/d3.v3.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>

        <script>
            var dataset = ";
        // line 91
        echo $this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getGraphDataSetJson", array(), "method");
        echo ";

            var width = 400,
            height = 400,
            radius = Math.min(width, height) / 2,
            colours = ['#B41F1F', '#1FB437', '#ff7f0e'];

            d3.scale.customColours = function() {
                return d3.scale.ordinal().range(colours);
            };

            var colour = d3.scale.customColours();
            var pie = d3.layout.pie().sort(null);

            var arc = d3.svg.arc().innerRadius(radius - 20).outerRadius(radius - 50);
            var svg = d3.select(\"#graph\").append(\"svg\")
            .attr(\"width\", width)
            .attr(\"height\", height)
            .append(\"g\")
            .attr(\"transform\", \"translate(\" + width / 2 + \",\" + height / 2 + \")\");

            var path = svg.selectAll(\"path\")
            .data(pie(dataset.memory))
            .enter().append(\"path\")
            .attr(\"fill\", function(d, i) { return colour(i); })
            .attr(\"d\", arc)
            .each(function(d) { this._current = d; }); // store the initial values

            d3.selectAll(\"input\").on(\"change\", change);
            set_text(\"memory\");

            function set_text(t) {
                if (t === \"memory\") {
                d3.select(\"#stats\").html(
                    \"<table><tr><th style='background:#B41F1F;'>Used</th><td>";
        // line 125
        echo $this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getHumanUsedMemory", array(), "method");
        echo "</td></tr>\"+
                    \"<tr><th style='background:#1FB437;'>Free</th><td>";
        // line 126
        echo $this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getHumanFreeMemory", array(), "method");
        echo "</td></tr>\"+
                    \"<tr><th style='background:#ff7f0e;' rowspan=\\\"2\\\">Wasted</th><td>";
        // line 127
        echo $this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getHumanWastedMemory", array(), "method");
        echo "</td></tr>\"+
                    \"<tr><td>";
        // line 128
        echo $this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getWastedMemoryPercentage", array(), "method");
        echo "%</td></tr></table>\"
                );
            } else if (t === \"keys\") {
                d3.select(\"#stats\").html(
                    \"<table><tr><th style='background:#B41F1F;'>Cached keys</th><td>\"+format_value(dataset[t][0])+\"</td></tr>\"+
                    \"<tr><th style='background:#1FB437;'>Free Keys</th><td>\"+format_value(dataset[t][1])+\"</td></tr></table>\"
                );
            } else if (t === \"hits\") {
                d3.select(\"#stats\").html(
                \"<table><tr><th style='background:#B41F1F;'>Misses</th><td>\"+format_value(dataset[t][0])+\"</td></tr>\"+
                \"<tr><th style='background:#1FB437;'>Cache Hits</th><td>\"+format_value(dataset[t][1])+\"</td></tr></table>\"
                );
            } else if (t === \"restarts\") {
                d3.select(\"#stats\").html(
                \"<table><tr><th style='background:#B41F1F;'>Memory</th><td>\"+dataset[t][0]+\"</td></tr>\"+
                \"<tr><th style='background:#1FB437;'>Manual</th><td>\"+dataset[t][1]+\"</td></tr>\"+
                \"<tr><th style='background:#ff7f0e;'>Keys</th><td>\"+dataset[t][2]+\"</td></tr></table>\"
                );
            }
            }

            function change() {
                // Filter out any zero values to see if there is anything left
                var remove_zero_values = dataset[this.value].filter(function(value) {
                return value > 0;
            });

                // Skip if the value is undefined for some reason
                if (typeof dataset[this.value] !== 'undefined' && remove_zero_values.length > 0) {
                \$('#graph').find('> svg').show();
                path = path.data(pie(dataset[this.value])); // update the data
                path.transition().duration(750).attrTween(\"d\", arcTween); // redraw the arcs
                // Hide the graph if we can't draw it correctly, not ideal but this works
            } else {
                \$('#graph').find('> svg').hide();
            }

                set_text(this.value);
            }

            function arcTween(a) {
                var i = d3.interpolate(this._current, a);
                this._current = i(0);
                return function(t) {
                return arc(i(t));
            };
            }

            function size_for_humans(bytes) {
                if (bytes > 1048576) {
                return (bytes/1048576).toFixed(2) + ' MB';
            } else if (bytes > 1024) {
                return (bytes/1024).toFixed(2) + ' KB';
            } else return bytes + ' bytes';
            }

            function format_value(value) {
                if (dataset[\"TSEP\"] == 1) {
                return value.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");
            } else {
                return value;
            }
            }

            var w = window.innerWidth,
            h = window.innerHeight,
            x = d3.scale.linear().range([0, w]),
            y = d3.scale.linear().range([0, h]);

            var vis = d3.select(\"#partition\")
            .style(\"width\", w + \"px\")
            .style(\"height\", h + \"px\")
            .append(\"svg:svg\")
            .attr(\"width\", w)
            .attr(\"height\", h);

            var partition = d3.layout.partition()
            .value(function(d) { return d.size; });

            root = ";
        // line 207
        echo twig_jsonencode_filter($this->getAttribute((isset($context["dataModel"]) ? $context["dataModel"] : $this->getContext($context, "dataModel")), "getD3Scripts", array(), "method"));
        echo ";

            var g = vis.selectAll(\"g\")
            .data(partition.nodes(root))
            .enter().append(\"svg:g\")
            .attr(\"transform\", function(d) { return \"translate(\" + x(d.y) + \",\" + y(d.x) + \")\"; })
            .on(\"click\", click);

            var kx = w / root.dx,
            ky = h / 1;

            g.append(\"svg:rect\")
            .attr(\"width\", root.dy * kx)
            .attr(\"height\", function(d) { return d.dx * ky; })
            .attr(\"class\", function(d) { return d.children ? \"parent\" : \"child\"; });

            g.append(\"svg:text\")
            .attr(\"transform\", transform)
            .attr(\"dy\", \".35em\")
            .style(\"opacity\", function(d) { return d.dx * ky > 12 ? 1 : 0; })
            .text(function(d) { return d.name; })

            d3.select(window)
            .on(\"click\", function() { click(root); })

            function click(d) {
                if (!d.children) return;

                kx = (d.y ? w - 40 : w) / (1 - d.y);
                ky = h / d.dx;
                x.domain([d.y, 1]).range([d.y ? 40 : 0, w]);
                y.domain([d.x, d.x + d.dx]);

                var t = g.transition()
                .duration(d3.event.altKey ? 7500 : 750)
                .attr(\"transform\", function(d) { return \"translate(\" + x(d.y) + \",\" + y(d.x) + \")\"; });

                t.select(\"rect\")
                .attr(\"width\", d.dy * kx)
                .attr(\"height\", function(d) { return d.dx * ky; });

                t.select(\"text\")
                .attr(\"transform\", transform)
                .style(\"opacity\", function(d) { return d.dx * ky > 12 ? 1 : 0; });

                d3.event.stopPropagation();
            }

            function transform(d) {
                return \"translate(8,\" + d.dx * ky / 2 + \")\";
            }

            \$(document).ready(function() {

                function handleVisualisationToggle(close) {

                    \$('#partition, #close-partition').fadeToggle();

                    // Is the visualisation being closed? If so show the status tab again
                    if (close) {

                        \$('#tab-visualise').removeAttr('checked');
                        \$('#tab-status').trigger('click');

                    }

                }

                \$('label[for=\"tab-visualise\"], #close-partition').on('click', function() {

                handleVisualisationToggle((\$(this).attr('id') === 'close-partition'));

            });

                \$(document).keyup(function(e) {

                if (e.keyCode == 27) handleVisualisationToggle(true);

            });

            });
        </script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_1f939f0de7042006521f20b172174f7988691e8de719bd3f60af0bcd4f3cad1e->leave($__internal_1f939f0de7042006521f20b172174f7988691e8de719bd3f60af0bcd4f3cad1e_prof);

        
        $__internal_0d3a90487d492be4f6989372e0004df867567d12fc5f32a35fe2db3fc8552f61->leave($__internal_0d3a90487d492be4f6989372e0004df867567d12fc5f32a35fe2db3fc8552f61_prof);

    }

    public function getTemplateName()
    {
        return "OpcacheBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 207,  190 => 128,  186 => 127,  182 => 126,  178 => 125,  141 => 91,  94 => 47,  83 => 39,  73 => 32,  60 => 22,  48 => 13,  43 => 11,  37 => 8,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{{ dataModel.getPageTitle() }}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('asset/css/style.css') }}\">
    </head>
    <body>
        <a class=\"button\" onclick=\"{{ reset }}\" href=\"\">Vider le cache</a>
        <div id=\"container\">
            <h1>{{ dataModel.getPageTitle() }}</h1>

                            <div class=\"tabs\">

                                    <div class=\"tab\">
                                        <input type=\"radio\" id=\"tab-status\" name=\"tab-group-1\" value=\"\" checked>
                                        <label for=\"tab-status\">Status</label>
                                        <div class=\"content\">
                                            <table>
                                                {{ dataModel.getStatusDataRows()|raw }}
                                            </table>
                                        </div>
                                    </div>

                                    <div class=\"tab\">
                                        <input type=\"radio\" id=\"tab-config\" name=\"tab-group-1\">
                                        <label for=\"tab-config\">Configuration</label>
                                        <div class=\"content\">
                                            <table>
                                                {{ dataModel.getConfigDataRows()|raw }}
                                            </table>
                                        </div>
                                    </div>

                                    <div class=\"tab\">
                                        <input type=\"radio\" id=\"tab-scripts\" name=\"tab-group-1\">
                                        <label for=\"tab-scripts\">Scripts ({{ dataModel.getScriptStatusCount|raw }})</label>
                                        <div class=\"content\">
                                            <table style=\"font-size:0.8em;\">
                                                <tr>
                                                    <th width=\"10%\">Hits</th>
                                                    <th width=\"20%\">Memory</th>
                                                    <th width=\"70%\">Path</th>
                                                </tr>
                                                {{ dataModel.getScriptStatusRows()|raw }}
                                            </table>
                                        </div>
                                    </div>

                                    <div class=\"tab\">
                                        <input type=\"radio\" id=\"tab-visualise\" name=\"tab-group-1\">
                                        <label for=\"tab-visualise\">Visualise Partition</label>
                                        <div class=\"content\"></div>
                                    </div>

                                </div>




                             <div id=\"graph\">
                                <form>
                                    <label><input type=\"radio\" name=\"dataset\" value=\"memory\" checked> Memory</label>
                                    <label><input type=\"radio\" name=\"dataset\" value=\"keys\"> Keys</label>
                                    <label><input type=\"radio\" name=\"dataset\" value=\"hits\"> Hits</label>
                                    <label><input type=\"radio\" name=\"dataset\" value=\"restarts\"> Restarts</label>
                                </form>

                                <div id=\"stats\"></div>
                            </div>


                </div>
            </div>





        </div>

        <div id=\"close-partition\">&#10006; Close Visualisation</div>
        <div id=\"partition\"></div>

        <script src=\"//cdnjs.cloudflare.com/ajax/libs/d3/3.0.1/d3.v3.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>

        <script>
            var dataset = {{ dataModel.getGraphDataSetJson()|raw }};

            var width = 400,
            height = 400,
            radius = Math.min(width, height) / 2,
            colours = ['#B41F1F', '#1FB437', '#ff7f0e'];

            d3.scale.customColours = function() {
                return d3.scale.ordinal().range(colours);
            };

            var colour = d3.scale.customColours();
            var pie = d3.layout.pie().sort(null);

            var arc = d3.svg.arc().innerRadius(radius - 20).outerRadius(radius - 50);
            var svg = d3.select(\"#graph\").append(\"svg\")
            .attr(\"width\", width)
            .attr(\"height\", height)
            .append(\"g\")
            .attr(\"transform\", \"translate(\" + width / 2 + \",\" + height / 2 + \")\");

            var path = svg.selectAll(\"path\")
            .data(pie(dataset.memory))
            .enter().append(\"path\")
            .attr(\"fill\", function(d, i) { return colour(i); })
            .attr(\"d\", arc)
            .each(function(d) { this._current = d; }); // store the initial values

            d3.selectAll(\"input\").on(\"change\", change);
            set_text(\"memory\");

            function set_text(t) {
                if (t === \"memory\") {
                d3.select(\"#stats\").html(
                    \"<table><tr><th style='background:#B41F1F;'>Used</th><td>{{ dataModel.getHumanUsedMemory()|raw }}</td></tr>\"+
                    \"<tr><th style='background:#1FB437;'>Free</th><td>{{ dataModel.getHumanFreeMemory()|raw }}</td></tr>\"+
                    \"<tr><th style='background:#ff7f0e;' rowspan=\\\"2\\\">Wasted</th><td>{{ dataModel.getHumanWastedMemory()|raw }}</td></tr>\"+
                    \"<tr><td>{{ dataModel.getWastedMemoryPercentage()|raw }}%</td></tr></table>\"
                );
            } else if (t === \"keys\") {
                d3.select(\"#stats\").html(
                    \"<table><tr><th style='background:#B41F1F;'>Cached keys</th><td>\"+format_value(dataset[t][0])+\"</td></tr>\"+
                    \"<tr><th style='background:#1FB437;'>Free Keys</th><td>\"+format_value(dataset[t][1])+\"</td></tr></table>\"
                );
            } else if (t === \"hits\") {
                d3.select(\"#stats\").html(
                \"<table><tr><th style='background:#B41F1F;'>Misses</th><td>\"+format_value(dataset[t][0])+\"</td></tr>\"+
                \"<tr><th style='background:#1FB437;'>Cache Hits</th><td>\"+format_value(dataset[t][1])+\"</td></tr></table>\"
                );
            } else if (t === \"restarts\") {
                d3.select(\"#stats\").html(
                \"<table><tr><th style='background:#B41F1F;'>Memory</th><td>\"+dataset[t][0]+\"</td></tr>\"+
                \"<tr><th style='background:#1FB437;'>Manual</th><td>\"+dataset[t][1]+\"</td></tr>\"+
                \"<tr><th style='background:#ff7f0e;'>Keys</th><td>\"+dataset[t][2]+\"</td></tr></table>\"
                );
            }
            }

            function change() {
                // Filter out any zero values to see if there is anything left
                var remove_zero_values = dataset[this.value].filter(function(value) {
                return value > 0;
            });

                // Skip if the value is undefined for some reason
                if (typeof dataset[this.value] !== 'undefined' && remove_zero_values.length > 0) {
                \$('#graph').find('> svg').show();
                path = path.data(pie(dataset[this.value])); // update the data
                path.transition().duration(750).attrTween(\"d\", arcTween); // redraw the arcs
                // Hide the graph if we can't draw it correctly, not ideal but this works
            } else {
                \$('#graph').find('> svg').hide();
            }

                set_text(this.value);
            }

            function arcTween(a) {
                var i = d3.interpolate(this._current, a);
                this._current = i(0);
                return function(t) {
                return arc(i(t));
            };
            }

            function size_for_humans(bytes) {
                if (bytes > 1048576) {
                return (bytes/1048576).toFixed(2) + ' MB';
            } else if (bytes > 1024) {
                return (bytes/1024).toFixed(2) + ' KB';
            } else return bytes + ' bytes';
            }

            function format_value(value) {
                if (dataset[\"TSEP\"] == 1) {
                return value.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");
            } else {
                return value;
            }
            }

            var w = window.innerWidth,
            h = window.innerHeight,
            x = d3.scale.linear().range([0, w]),
            y = d3.scale.linear().range([0, h]);

            var vis = d3.select(\"#partition\")
            .style(\"width\", w + \"px\")
            .style(\"height\", h + \"px\")
            .append(\"svg:svg\")
            .attr(\"width\", w)
            .attr(\"height\", h);

            var partition = d3.layout.partition()
            .value(function(d) { return d.size; });

            root = {{ dataModel.getD3Scripts()|json_encode()|raw }};

            var g = vis.selectAll(\"g\")
            .data(partition.nodes(root))
            .enter().append(\"svg:g\")
            .attr(\"transform\", function(d) { return \"translate(\" + x(d.y) + \",\" + y(d.x) + \")\"; })
            .on(\"click\", click);

            var kx = w / root.dx,
            ky = h / 1;

            g.append(\"svg:rect\")
            .attr(\"width\", root.dy * kx)
            .attr(\"height\", function(d) { return d.dx * ky; })
            .attr(\"class\", function(d) { return d.children ? \"parent\" : \"child\"; });

            g.append(\"svg:text\")
            .attr(\"transform\", transform)
            .attr(\"dy\", \".35em\")
            .style(\"opacity\", function(d) { return d.dx * ky > 12 ? 1 : 0; })
            .text(function(d) { return d.name; })

            d3.select(window)
            .on(\"click\", function() { click(root); })

            function click(d) {
                if (!d.children) return;

                kx = (d.y ? w - 40 : w) / (1 - d.y);
                ky = h / d.dx;
                x.domain([d.y, 1]).range([d.y ? 40 : 0, w]);
                y.domain([d.x, d.x + d.dx]);

                var t = g.transition()
                .duration(d3.event.altKey ? 7500 : 750)
                .attr(\"transform\", function(d) { return \"translate(\" + x(d.y) + \",\" + y(d.x) + \")\"; });

                t.select(\"rect\")
                .attr(\"width\", d.dy * kx)
                .attr(\"height\", function(d) { return d.dx * ky; });

                t.select(\"text\")
                .attr(\"transform\", transform)
                .style(\"opacity\", function(d) { return d.dx * ky > 12 ? 1 : 0; });

                d3.event.stopPropagation();
            }

            function transform(d) {
                return \"translate(8,\" + d.dx * ky / 2 + \")\";
            }

            \$(document).ready(function() {

                function handleVisualisationToggle(close) {

                    \$('#partition, #close-partition').fadeToggle();

                    // Is the visualisation being closed? If so show the status tab again
                    if (close) {

                        \$('#tab-visualise').removeAttr('checked');
                        \$('#tab-status').trigger('click');

                    }

                }

                \$('label[for=\"tab-visualise\"], #close-partition').on('click', function() {

                handleVisualisationToggle((\$(this).attr('id') === 'close-partition'));

            });

                \$(document).keyup(function(e) {

                if (e.keyCode == 27) handleVisualisationToggle(true);

            });

            });
        </script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "OpcacheBundle:Default:index.html.twig", "C:\\wamp64\\www\\esv\\src\\OpcacheBundle/Resources/views/Default/index.html.twig");
    }
}
