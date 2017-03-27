<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b390fd88ae5b2e7c2545545e6a46f5954eb0f4397f65c77bded42c013e54790a extends Twig_Template
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
        $__internal_94d440fb906c67e9e4556c672072d4057cbacbe8d880a32e145a06a29cf81cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d440fb906c67e9e4556c672072d4057cbacbe8d880a32e145a06a29cf81cf9->enter($__internal_94d440fb906c67e9e4556c672072d4057cbacbe8d880a32e145a06a29cf81cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3043dd7d53c01bd1a116cc0021540b7a50b27074dbfb0ed04a4356e027ca2df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3043dd7d53c01bd1a116cc0021540b7a50b27074dbfb0ed04a4356e027ca2df9->enter($__internal_3043dd7d53c01bd1a116cc0021540b7a50b27074dbfb0ed04a4356e027ca2df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94d440fb906c67e9e4556c672072d4057cbacbe8d880a32e145a06a29cf81cf9->leave($__internal_94d440fb906c67e9e4556c672072d4057cbacbe8d880a32e145a06a29cf81cf9_prof);

        
        $__internal_3043dd7d53c01bd1a116cc0021540b7a50b27074dbfb0ed04a4356e027ca2df9->leave($__internal_3043dd7d53c01bd1a116cc0021540b7a50b27074dbfb0ed04a4356e027ca2df9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b171e01ea934e865b250df6c8da057791a396881db4831687ac48582b33150f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b171e01ea934e865b250df6c8da057791a396881db4831687ac48582b33150f8->enter($__internal_b171e01ea934e865b250df6c8da057791a396881db4831687ac48582b33150f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_900ed1d8a35eed563e566d5bb238820411b018f8b5fc1fd987cacf445b5362f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900ed1d8a35eed563e566d5bb238820411b018f8b5fc1fd987cacf445b5362f7->enter($__internal_900ed1d8a35eed563e566d5bb238820411b018f8b5fc1fd987cacf445b5362f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_900ed1d8a35eed563e566d5bb238820411b018f8b5fc1fd987cacf445b5362f7->leave($__internal_900ed1d8a35eed563e566d5bb238820411b018f8b5fc1fd987cacf445b5362f7_prof);

        
        $__internal_b171e01ea934e865b250df6c8da057791a396881db4831687ac48582b33150f8->leave($__internal_b171e01ea934e865b250df6c8da057791a396881db4831687ac48582b33150f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5add579f209149e88287340703ed5132eb50a9a81ddaf3410e164d7f8c2aabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5add579f209149e88287340703ed5132eb50a9a81ddaf3410e164d7f8c2aabd->enter($__internal_c5add579f209149e88287340703ed5132eb50a9a81ddaf3410e164d7f8c2aabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_51ff9c2117a3de65473148d0ac264620b0b6124fdc36eeb5886c747db588109b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ff9c2117a3de65473148d0ac264620b0b6124fdc36eeb5886c747db588109b->enter($__internal_51ff9c2117a3de65473148d0ac264620b0b6124fdc36eeb5886c747db588109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51ff9c2117a3de65473148d0ac264620b0b6124fdc36eeb5886c747db588109b->leave($__internal_51ff9c2117a3de65473148d0ac264620b0b6124fdc36eeb5886c747db588109b_prof);

        
        $__internal_c5add579f209149e88287340703ed5132eb50a9a81ddaf3410e164d7f8c2aabd->leave($__internal_c5add579f209149e88287340703ed5132eb50a9a81ddaf3410e164d7f8c2aabd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6eda601226a85281dfdd1dcb893fa6d40fdcde073f8a17b4b718c0be30cc552c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eda601226a85281dfdd1dcb893fa6d40fdcde073f8a17b4b718c0be30cc552c->enter($__internal_6eda601226a85281dfdd1dcb893fa6d40fdcde073f8a17b4b718c0be30cc552c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9925fa0337520525f75a29c008b67badb7cddbd0be31535a2e1acf345e840d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9925fa0337520525f75a29c008b67badb7cddbd0be31535a2e1acf345e840d1->enter($__internal_a9925fa0337520525f75a29c008b67badb7cddbd0be31535a2e1acf345e840d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a9925fa0337520525f75a29c008b67badb7cddbd0be31535a2e1acf345e840d1->leave($__internal_a9925fa0337520525f75a29c008b67badb7cddbd0be31535a2e1acf345e840d1_prof);

        
        $__internal_6eda601226a85281dfdd1dcb893fa6d40fdcde073f8a17b4b718c0be30cc552c->leave($__internal_6eda601226a85281dfdd1dcb893fa6d40fdcde073f8a17b4b718c0be30cc552c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
