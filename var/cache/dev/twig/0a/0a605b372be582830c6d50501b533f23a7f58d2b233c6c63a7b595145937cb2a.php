<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_14f86bde5cf92d4a090faec4392f30def772fd93a53c25c2ce9f8b9fecc32881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_448d6a3b200bfa648689df26942be4f3d914f9ba7e194f9cac75ea970f61e533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448d6a3b200bfa648689df26942be4f3d914f9ba7e194f9cac75ea970f61e533->enter($__internal_448d6a3b200bfa648689df26942be4f3d914f9ba7e194f9cac75ea970f61e533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_db289194b333b8314b5bf1362725b31ef5f7d51d212b91d0485d5004194c28d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db289194b333b8314b5bf1362725b31ef5f7d51d212b91d0485d5004194c28d9->enter($__internal_db289194b333b8314b5bf1362725b31ef5f7d51d212b91d0485d5004194c28d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_448d6a3b200bfa648689df26942be4f3d914f9ba7e194f9cac75ea970f61e533->leave($__internal_448d6a3b200bfa648689df26942be4f3d914f9ba7e194f9cac75ea970f61e533_prof);

        
        $__internal_db289194b333b8314b5bf1362725b31ef5f7d51d212b91d0485d5004194c28d9->leave($__internal_db289194b333b8314b5bf1362725b31ef5f7d51d212b91d0485d5004194c28d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b3d6ab31f423988c2b6d734767b26d11d9a3783945b2d7884ec3a6e1dc126130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d6ab31f423988c2b6d734767b26d11d9a3783945b2d7884ec3a6e1dc126130->enter($__internal_b3d6ab31f423988c2b6d734767b26d11d9a3783945b2d7884ec3a6e1dc126130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad6318b2c3528a48c3629b99ac45cd522e59a529431b52b592f08f5b6d42e158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6318b2c3528a48c3629b99ac45cd522e59a529431b52b592f08f5b6d42e158->enter($__internal_ad6318b2c3528a48c3629b99ac45cd522e59a529431b52b592f08f5b6d42e158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ad6318b2c3528a48c3629b99ac45cd522e59a529431b52b592f08f5b6d42e158->leave($__internal_ad6318b2c3528a48c3629b99ac45cd522e59a529431b52b592f08f5b6d42e158_prof);

        
        $__internal_b3d6ab31f423988c2b6d734767b26d11d9a3783945b2d7884ec3a6e1dc126130->leave($__internal_b3d6ab31f423988c2b6d734767b26d11d9a3783945b2d7884ec3a6e1dc126130_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8909dad3c126b0601d8df0a365cb93e2ea9bf293fe87ddfdc2498908eb249ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8909dad3c126b0601d8df0a365cb93e2ea9bf293fe87ddfdc2498908eb249ccf->enter($__internal_8909dad3c126b0601d8df0a365cb93e2ea9bf293fe87ddfdc2498908eb249ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_893d46531e399e5f7c7d7c090c360150cc370ec18b01d550446af480023002e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893d46531e399e5f7c7d7c090c360150cc370ec18b01d550446af480023002e7->enter($__internal_893d46531e399e5f7c7d7c090c360150cc370ec18b01d550446af480023002e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_893d46531e399e5f7c7d7c090c360150cc370ec18b01d550446af480023002e7->leave($__internal_893d46531e399e5f7c7d7c090c360150cc370ec18b01d550446af480023002e7_prof);

        
        $__internal_8909dad3c126b0601d8df0a365cb93e2ea9bf293fe87ddfdc2498908eb249ccf->leave($__internal_8909dad3c126b0601d8df0a365cb93e2ea9bf293fe87ddfdc2498908eb249ccf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
