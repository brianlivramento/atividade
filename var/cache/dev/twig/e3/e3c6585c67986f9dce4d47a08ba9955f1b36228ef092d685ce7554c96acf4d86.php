<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_dcf22dd1a355cdba0088913c9abbb78af886c63f1c81f1aa459e1bf2337c85dd extends Twig_Template
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
        $__internal_5b4acd40fd7e0a5f26104aa8c1b2c6e8e94d6fe524201cbdb9152aeba000df3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4acd40fd7e0a5f26104aa8c1b2c6e8e94d6fe524201cbdb9152aeba000df3c->enter($__internal_5b4acd40fd7e0a5f26104aa8c1b2c6e8e94d6fe524201cbdb9152aeba000df3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d7f394c1e6feca1a56a2ddb45f46bc8dda224de65ee9970b52465f27add09b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f394c1e6feca1a56a2ddb45f46bc8dda224de65ee9970b52465f27add09b3a->enter($__internal_d7f394c1e6feca1a56a2ddb45f46bc8dda224de65ee9970b52465f27add09b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b4acd40fd7e0a5f26104aa8c1b2c6e8e94d6fe524201cbdb9152aeba000df3c->leave($__internal_5b4acd40fd7e0a5f26104aa8c1b2c6e8e94d6fe524201cbdb9152aeba000df3c_prof);

        
        $__internal_d7f394c1e6feca1a56a2ddb45f46bc8dda224de65ee9970b52465f27add09b3a->leave($__internal_d7f394c1e6feca1a56a2ddb45f46bc8dda224de65ee9970b52465f27add09b3a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9f14dd95682f34ec107188b3c23b22ede356f4797554fd1fd4a215135d307e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f14dd95682f34ec107188b3c23b22ede356f4797554fd1fd4a215135d307e0->enter($__internal_e9f14dd95682f34ec107188b3c23b22ede356f4797554fd1fd4a215135d307e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3886bdd38c881d2226c1b114018db2580d936f445c40cadea6b83c942bbcf566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3886bdd38c881d2226c1b114018db2580d936f445c40cadea6b83c942bbcf566->enter($__internal_3886bdd38c881d2226c1b114018db2580d936f445c40cadea6b83c942bbcf566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3886bdd38c881d2226c1b114018db2580d936f445c40cadea6b83c942bbcf566->leave($__internal_3886bdd38c881d2226c1b114018db2580d936f445c40cadea6b83c942bbcf566_prof);

        
        $__internal_e9f14dd95682f34ec107188b3c23b22ede356f4797554fd1fd4a215135d307e0->leave($__internal_e9f14dd95682f34ec107188b3c23b22ede356f4797554fd1fd4a215135d307e0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49948bb0fc3c7d005740b82768b23b4915052c2136b1d6e7e507a09eeaa03ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49948bb0fc3c7d005740b82768b23b4915052c2136b1d6e7e507a09eeaa03ef1->enter($__internal_49948bb0fc3c7d005740b82768b23b4915052c2136b1d6e7e507a09eeaa03ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_55974faa07940391f9f75ba86e72a8f68dcd42abe029b08897fde13c055186be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55974faa07940391f9f75ba86e72a8f68dcd42abe029b08897fde13c055186be->enter($__internal_55974faa07940391f9f75ba86e72a8f68dcd42abe029b08897fde13c055186be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_55974faa07940391f9f75ba86e72a8f68dcd42abe029b08897fde13c055186be->leave($__internal_55974faa07940391f9f75ba86e72a8f68dcd42abe029b08897fde13c055186be_prof);

        
        $__internal_49948bb0fc3c7d005740b82768b23b4915052c2136b1d6e7e507a09eeaa03ef1->leave($__internal_49948bb0fc3c7d005740b82768b23b4915052c2136b1d6e7e507a09eeaa03ef1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6712333ada0462a3ac469900b5059608159dd00caab8fc2a98b25af1dc7876ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6712333ada0462a3ac469900b5059608159dd00caab8fc2a98b25af1dc7876ea->enter($__internal_6712333ada0462a3ac469900b5059608159dd00caab8fc2a98b25af1dc7876ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0618dcfba13b04a044162c3ec4b8b7790060fae10a843292abe1b4481b43894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0618dcfba13b04a044162c3ec4b8b7790060fae10a843292abe1b4481b43894->enter($__internal_d0618dcfba13b04a044162c3ec4b8b7790060fae10a843292abe1b4481b43894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d0618dcfba13b04a044162c3ec4b8b7790060fae10a843292abe1b4481b43894->leave($__internal_d0618dcfba13b04a044162c3ec4b8b7790060fae10a843292abe1b4481b43894_prof);

        
        $__internal_6712333ada0462a3ac469900b5059608159dd00caab8fc2a98b25af1dc7876ea->leave($__internal_6712333ada0462a3ac469900b5059608159dd00caab8fc2a98b25af1dc7876ea_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
