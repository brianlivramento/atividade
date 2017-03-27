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
        $__internal_00d6e9a62f97237639cf73b01dd06a2283d60a523571795c62df7de4983fc3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d6e9a62f97237639cf73b01dd06a2283d60a523571795c62df7de4983fc3b6->enter($__internal_00d6e9a62f97237639cf73b01dd06a2283d60a523571795c62df7de4983fc3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_865ae90dfa5497c2dda519cb481486ad8b33786901b5fd8a74bb1ec002ac2eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865ae90dfa5497c2dda519cb481486ad8b33786901b5fd8a74bb1ec002ac2eca->enter($__internal_865ae90dfa5497c2dda519cb481486ad8b33786901b5fd8a74bb1ec002ac2eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00d6e9a62f97237639cf73b01dd06a2283d60a523571795c62df7de4983fc3b6->leave($__internal_00d6e9a62f97237639cf73b01dd06a2283d60a523571795c62df7de4983fc3b6_prof);

        
        $__internal_865ae90dfa5497c2dda519cb481486ad8b33786901b5fd8a74bb1ec002ac2eca->leave($__internal_865ae90dfa5497c2dda519cb481486ad8b33786901b5fd8a74bb1ec002ac2eca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3df95ec708eafe71155ae5c19de8fbac09ce2eefedb3ac4d99d9e1b7bc8e27ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df95ec708eafe71155ae5c19de8fbac09ce2eefedb3ac4d99d9e1b7bc8e27ab->enter($__internal_3df95ec708eafe71155ae5c19de8fbac09ce2eefedb3ac4d99d9e1b7bc8e27ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7475993e0479122db6c85434bb5545b17666ecb7482542d6182f4f9628d0cdc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7475993e0479122db6c85434bb5545b17666ecb7482542d6182f4f9628d0cdc4->enter($__internal_7475993e0479122db6c85434bb5545b17666ecb7482542d6182f4f9628d0cdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7475993e0479122db6c85434bb5545b17666ecb7482542d6182f4f9628d0cdc4->leave($__internal_7475993e0479122db6c85434bb5545b17666ecb7482542d6182f4f9628d0cdc4_prof);

        
        $__internal_3df95ec708eafe71155ae5c19de8fbac09ce2eefedb3ac4d99d9e1b7bc8e27ab->leave($__internal_3df95ec708eafe71155ae5c19de8fbac09ce2eefedb3ac4d99d9e1b7bc8e27ab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4efb4da4aa5e24566b52eb57caf430047e246e2438de77f45afafede2cdce86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efb4da4aa5e24566b52eb57caf430047e246e2438de77f45afafede2cdce86f->enter($__internal_4efb4da4aa5e24566b52eb57caf430047e246e2438de77f45afafede2cdce86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_444d01d15d133f4119aa55daa80606e08b0547e4611c099ab90192e776002c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444d01d15d133f4119aa55daa80606e08b0547e4611c099ab90192e776002c4a->enter($__internal_444d01d15d133f4119aa55daa80606e08b0547e4611c099ab90192e776002c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_444d01d15d133f4119aa55daa80606e08b0547e4611c099ab90192e776002c4a->leave($__internal_444d01d15d133f4119aa55daa80606e08b0547e4611c099ab90192e776002c4a_prof);

        
        $__internal_4efb4da4aa5e24566b52eb57caf430047e246e2438de77f45afafede2cdce86f->leave($__internal_4efb4da4aa5e24566b52eb57caf430047e246e2438de77f45afafede2cdce86f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7aa978b0bf837ff6626268e9fc487f6c12a2eb67de4549b5c3ff4e42a93e898e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa978b0bf837ff6626268e9fc487f6c12a2eb67de4549b5c3ff4e42a93e898e->enter($__internal_7aa978b0bf837ff6626268e9fc487f6c12a2eb67de4549b5c3ff4e42a93e898e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef6de232ec3a7658789287ac95db4d424aa40aead8efaf87602b9a50ebdc2c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6de232ec3a7658789287ac95db4d424aa40aead8efaf87602b9a50ebdc2c30->enter($__internal_ef6de232ec3a7658789287ac95db4d424aa40aead8efaf87602b9a50ebdc2c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ef6de232ec3a7658789287ac95db4d424aa40aead8efaf87602b9a50ebdc2c30->leave($__internal_ef6de232ec3a7658789287ac95db4d424aa40aead8efaf87602b9a50ebdc2c30_prof);

        
        $__internal_7aa978b0bf837ff6626268e9fc487f6c12a2eb67de4549b5c3ff4e42a93e898e->leave($__internal_7aa978b0bf837ff6626268e9fc487f6c12a2eb67de4549b5c3ff4e42a93e898e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/atividades/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
