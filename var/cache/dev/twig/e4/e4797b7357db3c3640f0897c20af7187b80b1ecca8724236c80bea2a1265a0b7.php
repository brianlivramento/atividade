<?php

/* AtividadeCoreBundle:Atividade:index.html.twig */
class __TwigTemplate_9d77a2c952c1174bebc7f4dd180311a6f0b8cc8543e4b1b078d462872b3dc7b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AtividadeCoreBundle:Atividade:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a7a4a12d212e28ec735a40e64701870bd01a0abbf04e7a1588185d805da6c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7a4a12d212e28ec735a40e64701870bd01a0abbf04e7a1588185d805da6c9b->enter($__internal_9a7a4a12d212e28ec735a40e64701870bd01a0abbf04e7a1588185d805da6c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeCoreBundle:Atividade:index.html.twig"));

        $__internal_bfc972e46259d23847cc0735d60f11e9cf526d9508e16c43cffa57ef9a2d63cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc972e46259d23847cc0735d60f11e9cf526d9508e16c43cffa57ef9a2d63cc->enter($__internal_bfc972e46259d23847cc0735d60f11e9cf526d9508e16c43cffa57ef9a2d63cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeCoreBundle:Atividade:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a7a4a12d212e28ec735a40e64701870bd01a0abbf04e7a1588185d805da6c9b->leave($__internal_9a7a4a12d212e28ec735a40e64701870bd01a0abbf04e7a1588185d805da6c9b_prof);

        
        $__internal_bfc972e46259d23847cc0735d60f11e9cf526d9508e16c43cffa57ef9a2d63cc->leave($__internal_bfc972e46259d23847cc0735d60f11e9cf526d9508e16c43cffa57ef9a2d63cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e44529bba3b445eee480efb0ff9597fc9df4e5b2856753ea39f3ae19ba997d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e44529bba3b445eee480efb0ff9597fc9df4e5b2856753ea39f3ae19ba997d1->enter($__internal_1e44529bba3b445eee480efb0ff9597fc9df4e5b2856753ea39f3ae19ba997d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca7baa93c89dec15e283043495c97c65686d2050f408e4a57cc6b72fa691c926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7baa93c89dec15e283043495c97c65686d2050f408e4a57cc6b72fa691c926->enter($__internal_ca7baa93c89dec15e283043495c97c65686d2050f408e4a57cc6b72fa691c926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Módulo - Atividades
";
        
        $__internal_ca7baa93c89dec15e283043495c97c65686d2050f408e4a57cc6b72fa691c926->leave($__internal_ca7baa93c89dec15e283043495c97c65686d2050f408e4a57cc6b72fa691c926_prof);

        
        $__internal_1e44529bba3b445eee480efb0ff9597fc9df4e5b2856753ea39f3ae19ba997d1->leave($__internal_1e44529bba3b445eee480efb0ff9597fc9df4e5b2856753ea39f3ae19ba997d1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc05087064482069db420b6c46b63280d8de73d262d64b51334678b0034f9e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc05087064482069db420b6c46b63280d8de73d262d64b51334678b0034f9e1->enter($__internal_cbc05087064482069db420b6c46b63280d8de73d262d64b51334678b0034f9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b223661cafa35f2c71d6696da925ffd8db0f50b0fe3a000d8d37f59c80093b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b223661cafa35f2c71d6696da925ffd8db0f50b0fe3a000d8d37f59c80093b1->enter($__internal_6b223661cafa35f2c71d6696da925ffd8db0f50b0fe3a000d8d37f59c80093b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"row\">
\t\t<div class=\"col-lg-12\" style=\"margin-top:80px;\">
    \t\t<h1>Tabela de atividades</h1>
    \t</div>
    \t<hr />
\t\t<div class=\"col-lg-12\">
\t\t    <table class=\"table table-bordered\">
\t\t\t    <thead>
\t\t\t      <tr>
\t\t\t        <th>Descrição</th>
\t\t\t        <th>Ações</th>
\t\t\t      </tr>
\t\t\t    </thead>
\t\t\t    <tbody>
\t\t\t      <tr>
\t\t\t        <td>Jogar Futebol</td>
\t\t\t        <td><a href=\"/del\" class=\"btn btn-default btn-sm\">Apagar</a></td>
\t\t\t      </tr>
\t\t\t    </tbody>
\t\t\t</table>
\t\t</div>
\t\t<hr />
\t</div>\t
\t<div class=\"row\">\t
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"alert alert-info\">Clique para adicionar uma nova atividade.</div>
\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t<a href=\"/add\" class=\"btn btn-primary btn-lg pull-right\">Adicionar</a>
\t\t</div>\t
    </div>
";
        
        $__internal_6b223661cafa35f2c71d6696da925ffd8db0f50b0fe3a000d8d37f59c80093b1->leave($__internal_6b223661cafa35f2c71d6696da925ffd8db0f50b0fe3a000d8d37f59c80093b1_prof);

        
        $__internal_cbc05087064482069db420b6c46b63280d8de73d262d64b51334678b0034f9e1->leave($__internal_cbc05087064482069db420b6c46b63280d8de73d262d64b51334678b0034f9e1_prof);

    }

    public function getTemplateName()
    {
        return "AtividadeCoreBundle:Atividade:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
    Módulo - Atividades
{% endblock %}

{% block body %}
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\" style=\"margin-top:80px;\">
    \t\t<h1>Tabela de atividades</h1>
    \t</div>
    \t<hr />
\t\t<div class=\"col-lg-12\">
\t\t    <table class=\"table table-bordered\">
\t\t\t    <thead>
\t\t\t      <tr>
\t\t\t        <th>Descrição</th>
\t\t\t        <th>Ações</th>
\t\t\t      </tr>
\t\t\t    </thead>
\t\t\t    <tbody>
\t\t\t      <tr>
\t\t\t        <td>Jogar Futebol</td>
\t\t\t        <td><a href=\"/del\" class=\"btn btn-default btn-sm\">Apagar</a></td>
\t\t\t      </tr>
\t\t\t    </tbody>
\t\t\t</table>
\t\t</div>
\t\t<hr />
\t</div>\t
\t<div class=\"row\">\t
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"alert alert-info\">Clique para adicionar uma nova atividade.</div>
\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t<a href=\"/add\" class=\"btn btn-primary btn-lg pull-right\">Adicionar</a>
\t\t</div>\t
    </div>
{% endblock %}
", "AtividadeCoreBundle:Atividade:index.html.twig", "/var/www/atividades/src/Atividade/CoreBundle/Resources/views/Atividade/index.html.twig");
    }
}
