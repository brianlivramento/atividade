<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_ae9e20ab4219b89761e32ea05980796a9a6e7c91ace9ff3795a2dfca63e24522 extends Twig_Template
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
        $__internal_38b37c0429fc75767ef154415270ea884aa3f4225fbec3f35f0be5f0750cbabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b37c0429fc75767ef154415270ea884aa3f4225fbec3f35f0be5f0750cbabf->enter($__internal_38b37c0429fc75767ef154415270ea884aa3f4225fbec3f35f0be5f0750cbabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_fb6d0e2b180b6bab8010c53de8d5babf02e7f29c1aa0cededf4b7d1fa1e87ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6d0e2b180b6bab8010c53de8d5babf02e7f29c1aa0cededf4b7d1fa1e87ec7->enter($__internal_fb6d0e2b180b6bab8010c53de8d5babf02e7f29c1aa0cededf4b7d1fa1e87ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_38b37c0429fc75767ef154415270ea884aa3f4225fbec3f35f0be5f0750cbabf->leave($__internal_38b37c0429fc75767ef154415270ea884aa3f4225fbec3f35f0be5f0750cbabf_prof);

        
        $__internal_fb6d0e2b180b6bab8010c53de8d5babf02e7f29c1aa0cededf4b7d1fa1e87ec7->leave($__internal_fb6d0e2b180b6bab8010c53de8d5babf02e7f29c1aa0cededf4b7d1fa1e87ec7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
