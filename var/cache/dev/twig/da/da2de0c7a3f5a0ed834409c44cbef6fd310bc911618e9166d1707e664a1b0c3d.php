<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d872a3466c96359f7cd0df564b780be741be7df4252b62eb827fd25e7443c994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11382ddbe32fe1cd66cee4e71dc204f86fc71e0158f336418b1fc8fe1adfd538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11382ddbe32fe1cd66cee4e71dc204f86fc71e0158f336418b1fc8fe1adfd538->enter($__internal_11382ddbe32fe1cd66cee4e71dc204f86fc71e0158f336418b1fc8fe1adfd538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b72fb3f3268e1f264750a99fa16eb5aba60621013919421caeca29be4faffad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72fb3f3268e1f264750a99fa16eb5aba60621013919421caeca29be4faffad7->enter($__internal_b72fb3f3268e1f264750a99fa16eb5aba60621013919421caeca29be4faffad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11382ddbe32fe1cd66cee4e71dc204f86fc71e0158f336418b1fc8fe1adfd538->leave($__internal_11382ddbe32fe1cd66cee4e71dc204f86fc71e0158f336418b1fc8fe1adfd538_prof);

        
        $__internal_b72fb3f3268e1f264750a99fa16eb5aba60621013919421caeca29be4faffad7->leave($__internal_b72fb3f3268e1f264750a99fa16eb5aba60621013919421caeca29be4faffad7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_402e36aa7779588b66690575ba80d6199e9aa339cd0f5b035cf10f1b098f7f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402e36aa7779588b66690575ba80d6199e9aa339cd0f5b035cf10f1b098f7f03->enter($__internal_402e36aa7779588b66690575ba80d6199e9aa339cd0f5b035cf10f1b098f7f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c04cbf81ad0eb1e4d02ed6819c25be311f852c0965cd6fd859a9f4416cfc6af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04cbf81ad0eb1e4d02ed6819c25be311f852c0965cd6fd859a9f4416cfc6af3->enter($__internal_c04cbf81ad0eb1e4d02ed6819c25be311f852c0965cd6fd859a9f4416cfc6af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c04cbf81ad0eb1e4d02ed6819c25be311f852c0965cd6fd859a9f4416cfc6af3->leave($__internal_c04cbf81ad0eb1e4d02ed6819c25be311f852c0965cd6fd859a9f4416cfc6af3_prof);

        
        $__internal_402e36aa7779588b66690575ba80d6199e9aa339cd0f5b035cf10f1b098f7f03->leave($__internal_402e36aa7779588b66690575ba80d6199e9aa339cd0f5b035cf10f1b098f7f03_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b242dd3b05d1044214ddfa8bc1f6a122e87fa16263e8a258f78c4ba59df31a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b242dd3b05d1044214ddfa8bc1f6a122e87fa16263e8a258f78c4ba59df31a83->enter($__internal_b242dd3b05d1044214ddfa8bc1f6a122e87fa16263e8a258f78c4ba59df31a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_253f4e86fbb0a30677da273b7acc9975abe7f3ce4f8587c26852e9e599d2a166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253f4e86fbb0a30677da273b7acc9975abe7f3ce4f8587c26852e9e599d2a166->enter($__internal_253f4e86fbb0a30677da273b7acc9975abe7f3ce4f8587c26852e9e599d2a166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_253f4e86fbb0a30677da273b7acc9975abe7f3ce4f8587c26852e9e599d2a166->leave($__internal_253f4e86fbb0a30677da273b7acc9975abe7f3ce4f8587c26852e9e599d2a166_prof);

        
        $__internal_b242dd3b05d1044214ddfa8bc1f6a122e87fa16263e8a258f78c4ba59df31a83->leave($__internal_b242dd3b05d1044214ddfa8bc1f6a122e87fa16263e8a258f78c4ba59df31a83_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bad5ff10ce660385c049f5f0f8ec48a856d275c9d7c692867819e8c1dfa98630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad5ff10ce660385c049f5f0f8ec48a856d275c9d7c692867819e8c1dfa98630->enter($__internal_bad5ff10ce660385c049f5f0f8ec48a856d275c9d7c692867819e8c1dfa98630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8efd8c633a9d9f4b9057d657c03d7916e4e6e35abf2cc25a4cd097b41989917a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efd8c633a9d9f4b9057d657c03d7916e4e6e35abf2cc25a4cd097b41989917a->enter($__internal_8efd8c633a9d9f4b9057d657c03d7916e4e6e35abf2cc25a4cd097b41989917a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8efd8c633a9d9f4b9057d657c03d7916e4e6e35abf2cc25a4cd097b41989917a->leave($__internal_8efd8c633a9d9f4b9057d657c03d7916e4e6e35abf2cc25a4cd097b41989917a_prof);

        
        $__internal_bad5ff10ce660385c049f5f0f8ec48a856d275c9d7c692867819e8c1dfa98630->leave($__internal_bad5ff10ce660385c049f5f0f8ec48a856d275c9d7c692867819e8c1dfa98630_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\esv\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
