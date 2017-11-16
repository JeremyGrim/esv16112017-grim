<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_57f0fe9e82f9df80022ccd9891730a1d51613bd6e1b6cba0785b208ae2661e74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1355095a0ea2b77911a8f180dab3b0a317b88dd007fb5b704d733e4875ede0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1355095a0ea2b77911a8f180dab3b0a317b88dd007fb5b704d733e4875ede0f0->enter($__internal_1355095a0ea2b77911a8f180dab3b0a317b88dd007fb5b704d733e4875ede0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fb97cf3631f8c8a42db31e69a02caed89a01ad373a51a2d5a8dcfca63cd47e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb97cf3631f8c8a42db31e69a02caed89a01ad373a51a2d5a8dcfca63cd47e4f->enter($__internal_fb97cf3631f8c8a42db31e69a02caed89a01ad373a51a2d5a8dcfca63cd47e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1355095a0ea2b77911a8f180dab3b0a317b88dd007fb5b704d733e4875ede0f0->leave($__internal_1355095a0ea2b77911a8f180dab3b0a317b88dd007fb5b704d733e4875ede0f0_prof);

        
        $__internal_fb97cf3631f8c8a42db31e69a02caed89a01ad373a51a2d5a8dcfca63cd47e4f->leave($__internal_fb97cf3631f8c8a42db31e69a02caed89a01ad373a51a2d5a8dcfca63cd47e4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4dc947bb9b187a16d5c7c2a2779705a25a25f00f107a8b786772495bb2fbce00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc947bb9b187a16d5c7c2a2779705a25a25f00f107a8b786772495bb2fbce00->enter($__internal_4dc947bb9b187a16d5c7c2a2779705a25a25f00f107a8b786772495bb2fbce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2c259d6ba58857507d8bfe7ea6d52ba72bacdebad4b2d1ba1ab0f7641777bf72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c259d6ba58857507d8bfe7ea6d52ba72bacdebad4b2d1ba1ab0f7641777bf72->enter($__internal_2c259d6ba58857507d8bfe7ea6d52ba72bacdebad4b2d1ba1ab0f7641777bf72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2c259d6ba58857507d8bfe7ea6d52ba72bacdebad4b2d1ba1ab0f7641777bf72->leave($__internal_2c259d6ba58857507d8bfe7ea6d52ba72bacdebad4b2d1ba1ab0f7641777bf72_prof);

        
        $__internal_4dc947bb9b187a16d5c7c2a2779705a25a25f00f107a8b786772495bb2fbce00->leave($__internal_4dc947bb9b187a16d5c7c2a2779705a25a25f00f107a8b786772495bb2fbce00_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00b5a7f86bba66f24cb56dc6324fdb72dc6cd94f60ca77ba192f39f65369a8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b5a7f86bba66f24cb56dc6324fdb72dc6cd94f60ca77ba192f39f65369a8de->enter($__internal_00b5a7f86bba66f24cb56dc6324fdb72dc6cd94f60ca77ba192f39f65369a8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63178a145f52a2a81219ea41ee431456b0038bc625e0dd2a4a81e4273139d44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63178a145f52a2a81219ea41ee431456b0038bc625e0dd2a4a81e4273139d44b->enter($__internal_63178a145f52a2a81219ea41ee431456b0038bc625e0dd2a4a81e4273139d44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_63178a145f52a2a81219ea41ee431456b0038bc625e0dd2a4a81e4273139d44b->leave($__internal_63178a145f52a2a81219ea41ee431456b0038bc625e0dd2a4a81e4273139d44b_prof);

        
        $__internal_00b5a7f86bba66f24cb56dc6324fdb72dc6cd94f60ca77ba192f39f65369a8de->leave($__internal_00b5a7f86bba66f24cb56dc6324fdb72dc6cd94f60ca77ba192f39f65369a8de_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_112e9005b05313ee2a345b9fe264ce4e03cfa132db800e2c83c1c949a71b4b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112e9005b05313ee2a345b9fe264ce4e03cfa132db800e2c83c1c949a71b4b18->enter($__internal_112e9005b05313ee2a345b9fe264ce4e03cfa132db800e2c83c1c949a71b4b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7eaf9eeeeca93eae47d345f0ca76928b1286454da51ad9e37463f0569ca6705c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eaf9eeeeca93eae47d345f0ca76928b1286454da51ad9e37463f0569ca6705c->enter($__internal_7eaf9eeeeca93eae47d345f0ca76928b1286454da51ad9e37463f0569ca6705c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7eaf9eeeeca93eae47d345f0ca76928b1286454da51ad9e37463f0569ca6705c->leave($__internal_7eaf9eeeeca93eae47d345f0ca76928b1286454da51ad9e37463f0569ca6705c_prof);

        
        $__internal_112e9005b05313ee2a345b9fe264ce4e03cfa132db800e2c83c1c949a71b4b18->leave($__internal_112e9005b05313ee2a345b9fe264ce4e03cfa132db800e2c83c1c949a71b4b18_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\esv\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
