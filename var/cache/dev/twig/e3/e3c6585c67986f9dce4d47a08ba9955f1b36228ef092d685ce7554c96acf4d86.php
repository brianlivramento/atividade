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
        $__internal_f892fe85150171fbc9966726bca2f755a07910821d89d1ae446e356a7f8b7142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f892fe85150171fbc9966726bca2f755a07910821d89d1ae446e356a7f8b7142->enter($__internal_f892fe85150171fbc9966726bca2f755a07910821d89d1ae446e356a7f8b7142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_64cce4d054c5fa587e7edf4ffa25ab6057ab40081ba533b189103254e202e691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cce4d054c5fa587e7edf4ffa25ab6057ab40081ba533b189103254e202e691->enter($__internal_64cce4d054c5fa587e7edf4ffa25ab6057ab40081ba533b189103254e202e691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f892fe85150171fbc9966726bca2f755a07910821d89d1ae446e356a7f8b7142->leave($__internal_f892fe85150171fbc9966726bca2f755a07910821d89d1ae446e356a7f8b7142_prof);

        
        $__internal_64cce4d054c5fa587e7edf4ffa25ab6057ab40081ba533b189103254e202e691->leave($__internal_64cce4d054c5fa587e7edf4ffa25ab6057ab40081ba533b189103254e202e691_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc54f718e97d6dd0b29686386b1319e2ca34ba0cd9aafb50444eed94e3e28091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc54f718e97d6dd0b29686386b1319e2ca34ba0cd9aafb50444eed94e3e28091->enter($__internal_dc54f718e97d6dd0b29686386b1319e2ca34ba0cd9aafb50444eed94e3e28091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a0f4f578f1b96b3c195fa4cea5e91ab4deed80cfc58a369009a11838e8f8a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0f4f578f1b96b3c195fa4cea5e91ab4deed80cfc58a369009a11838e8f8a31->enter($__internal_8a0f4f578f1b96b3c195fa4cea5e91ab4deed80cfc58a369009a11838e8f8a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8a0f4f578f1b96b3c195fa4cea5e91ab4deed80cfc58a369009a11838e8f8a31->leave($__internal_8a0f4f578f1b96b3c195fa4cea5e91ab4deed80cfc58a369009a11838e8f8a31_prof);

        
        $__internal_dc54f718e97d6dd0b29686386b1319e2ca34ba0cd9aafb50444eed94e3e28091->leave($__internal_dc54f718e97d6dd0b29686386b1319e2ca34ba0cd9aafb50444eed94e3e28091_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fc6e30e76b7dbc7312529432b2a61834fbbdfa4aefd16743b047d97f11fa34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc6e30e76b7dbc7312529432b2a61834fbbdfa4aefd16743b047d97f11fa34e->enter($__internal_7fc6e30e76b7dbc7312529432b2a61834fbbdfa4aefd16743b047d97f11fa34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d366739a5e92a42127a8974f1d018c28490999bf8065311a1f821c8c26a9daf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d366739a5e92a42127a8974f1d018c28490999bf8065311a1f821c8c26a9daf4->enter($__internal_d366739a5e92a42127a8974f1d018c28490999bf8065311a1f821c8c26a9daf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d366739a5e92a42127a8974f1d018c28490999bf8065311a1f821c8c26a9daf4->leave($__internal_d366739a5e92a42127a8974f1d018c28490999bf8065311a1f821c8c26a9daf4_prof);

        
        $__internal_7fc6e30e76b7dbc7312529432b2a61834fbbdfa4aefd16743b047d97f11fa34e->leave($__internal_7fc6e30e76b7dbc7312529432b2a61834fbbdfa4aefd16743b047d97f11fa34e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e151ec2eaf62be9308b6c8879ffa499d145ef624d89bae2ddd74b544c02f0498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e151ec2eaf62be9308b6c8879ffa499d145ef624d89bae2ddd74b544c02f0498->enter($__internal_e151ec2eaf62be9308b6c8879ffa499d145ef624d89bae2ddd74b544c02f0498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc5edf5ca660077e0492b3679e4cdf7374bc4cd9d2830a97f2e6c06ae8d1a42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5edf5ca660077e0492b3679e4cdf7374bc4cd9d2830a97f2e6c06ae8d1a42f->enter($__internal_dc5edf5ca660077e0492b3679e4cdf7374bc4cd9d2830a97f2e6c06ae8d1a42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_dc5edf5ca660077e0492b3679e4cdf7374bc4cd9d2830a97f2e6c06ae8d1a42f->leave($__internal_dc5edf5ca660077e0492b3679e4cdf7374bc4cd9d2830a97f2e6c06ae8d1a42f_prof);

        
        $__internal_e151ec2eaf62be9308b6c8879ffa499d145ef624d89bae2ddd74b544c02f0498->leave($__internal_e151ec2eaf62be9308b6c8879ffa499d145ef624d89bae2ddd74b544c02f0498_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/atividades/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
