<?php

/* AtividadeCoreBundle:atividade:index.html.twig */
class __TwigTemplate_d4034e3b76169f5d0295a82571b80eaa187d18395c1ee1a5182da746eb1ff639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AtividadeCoreBundle:atividade:index.html.twig", 1);
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
        $__internal_7d3fe0ed4d9e89419a9ee939471399d03b3a1f78d439017088c588de8575d6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3fe0ed4d9e89419a9ee939471399d03b3a1f78d439017088c588de8575d6d3->enter($__internal_7d3fe0ed4d9e89419a9ee939471399d03b3a1f78d439017088c588de8575d6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeCoreBundle:atividade:index.html.twig"));

        $__internal_b6b4d22187b1ac842fd62c11887bd7915ebca70606499f11b7401215dcc97674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b4d22187b1ac842fd62c11887bd7915ebca70606499f11b7401215dcc97674->enter($__internal_b6b4d22187b1ac842fd62c11887bd7915ebca70606499f11b7401215dcc97674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeCoreBundle:atividade:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d3fe0ed4d9e89419a9ee939471399d03b3a1f78d439017088c588de8575d6d3->leave($__internal_7d3fe0ed4d9e89419a9ee939471399d03b3a1f78d439017088c588de8575d6d3_prof);

        
        $__internal_b6b4d22187b1ac842fd62c11887bd7915ebca70606499f11b7401215dcc97674->leave($__internal_b6b4d22187b1ac842fd62c11887bd7915ebca70606499f11b7401215dcc97674_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbc94d34f5a4c29a6e224e756f9b89478aa8a622d429814d02e108f9f45d0af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc94d34f5a4c29a6e224e756f9b89478aa8a622d429814d02e108f9f45d0af5->enter($__internal_bbc94d34f5a4c29a6e224e756f9b89478aa8a622d429814d02e108f9f45d0af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82ddc0918b4acc05d0adf117a0889b4da886ae40c14b69af69f0d53de5eb598f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ddc0918b4acc05d0adf117a0889b4da886ae40c14b69af69f0d53de5eb598f->enter($__internal_82ddc0918b4acc05d0adf117a0889b4da886ae40c14b69af69f0d53de5eb598f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Módulo - Atividades
";
        
        $__internal_82ddc0918b4acc05d0adf117a0889b4da886ae40c14b69af69f0d53de5eb598f->leave($__internal_82ddc0918b4acc05d0adf117a0889b4da886ae40c14b69af69f0d53de5eb598f_prof);

        
        $__internal_bbc94d34f5a4c29a6e224e756f9b89478aa8a622d429814d02e108f9f45d0af5->leave($__internal_bbc94d34f5a4c29a6e224e756f9b89478aa8a622d429814d02e108f9f45d0af5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bfda9bb086dd12a458b4dc0f19143532c87d4e6f4e5140f3fc2d42c0abe89c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfda9bb086dd12a458b4dc0f19143532c87d4e6f4e5140f3fc2d42c0abe89c4->enter($__internal_8bfda9bb086dd12a458b4dc0f19143532c87d4e6f4e5140f3fc2d42c0abe89c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_691ea3fb5f3371330b99f7217817ea4ca51128ebcaa80f845fb2447f2bfe1771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691ea3fb5f3371330b99f7217817ea4ca51128ebcaa80f845fb2447f2bfe1771->enter($__internal_691ea3fb5f3371330b99f7217817ea4ca51128ebcaa80f845fb2447f2bfe1771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"row\">
\t\t<div class=\"col-lg-12\" style=\"margin-top:80px;\">
    \t\t<h1>Tabela de atividades</h1>
    \t</div>
    \t<hr />
\t\t<div class=\"col-lg-12\">\t\t\t
\t\t    <table class=\"table table-bordered\">
\t\t\t    <thead>
\t\t\t      <tr>
\t\t\t      \t<th>Id</th>
\t\t\t        <th>Descrição</th>
\t\t\t        <th>Ações</th>
\t\t\t      </tr>
\t\t\t    </thead>
\t\t\t    <tbody>
\t\t\t\t";
        // line 23
        if ( !twig_test_empty(($context["atividades"] ?? $this->getContext($context, "atividades")))) {
            // line 24
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["atividades"] ?? $this->getContext($context, "atividades")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 25
                echo "\t\t\t\t      <tr>
\t\t\t\t      \t<td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "</td>
\t\t\t\t        <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "descricao", array()), "html", null, true);
                echo "</td>
\t\t\t\t        <td>
\t\t\t\t        \t<form method=\"get\" action=\"";
                // line 29
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("del");
                echo "\">
\t\t\t\t        \t\t<input type=\"hidden\" name=\"id\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "\" >
\t\t\t\t        \t\t<button type=\"submit\" class=\"btn btn-default btn-sm\">Apagar</button>
\t\t\t\t        \t</form>
\t\t\t\t        </td>
\t\t\t\t      </tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t\t";
        }
        // line 37
        echo "\t\t\t    </tbody>
\t\t\t</table>\t\t\t
\t\t</div>
\t\t<hr />
\t</div>\t
\t<div class=\"row\">\t
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"alert alert-info\">Clique para adicionar uma nova atividade.</div>
\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t<form class=\"form-control\" method=\"post\" style=\"padding:30px; height: auto; padding-bottom:100px;\" action=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add");
        echo "\">
\t\t\t\t<h3>Informe a descrição</h3>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control\" name=\"input-descricao\" type=\"text\" placeholder=\"Descrição da atividade\" required>
\t\t\t\t\t<hr />
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">Adicionar</a>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>\t
    </div>
";
        
        $__internal_691ea3fb5f3371330b99f7217817ea4ca51128ebcaa80f845fb2447f2bfe1771->leave($__internal_691ea3fb5f3371330b99f7217817ea4ca51128ebcaa80f845fb2447f2bfe1771_prof);

        
        $__internal_8bfda9bb086dd12a458b4dc0f19143532c87d4e6f4e5140f3fc2d42c0abe89c4->leave($__internal_8bfda9bb086dd12a458b4dc0f19143532c87d4e6f4e5140f3fc2d42c0abe89c4_prof);

    }

    public function getTemplateName()
    {
        return "AtividadeCoreBundle:atividade:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 47,  125 => 37,  122 => 36,  110 => 30,  106 => 29,  101 => 27,  97 => 26,  94 => 25,  89 => 24,  87 => 23,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t<div class=\"col-lg-12\">\t\t\t
\t\t    <table class=\"table table-bordered\">
\t\t\t    <thead>
\t\t\t      <tr>
\t\t\t      \t<th>Id</th>
\t\t\t        <th>Descrição</th>
\t\t\t        <th>Ações</th>
\t\t\t      </tr>
\t\t\t    </thead>
\t\t\t    <tbody>
\t\t\t\t{% if atividades is not empty %}
\t\t\t\t\t{% for a in atividades %}
\t\t\t\t      <tr>
\t\t\t\t      \t<td>{{ a.id }}</td>
\t\t\t\t        <td>{{ a.descricao }}</td>
\t\t\t\t        <td>
\t\t\t\t        \t<form method=\"get\" action=\"{{ path('del') }}\">
\t\t\t\t        \t\t<input type=\"hidden\" name=\"id\" value=\"{{ a.id }}\" >
\t\t\t\t        \t\t<button type=\"submit\" class=\"btn btn-default btn-sm\">Apagar</button>
\t\t\t\t        \t</form>
\t\t\t\t        </td>
\t\t\t\t      </tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t    </tbody>
\t\t\t</table>\t\t\t
\t\t</div>
\t\t<hr />
\t</div>\t
\t<div class=\"row\">\t
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"alert alert-info\">Clique para adicionar uma nova atividade.</div>
\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t<form class=\"form-control\" method=\"post\" style=\"padding:30px; height: auto; padding-bottom:100px;\" action=\"{{ path('add') }}\">
\t\t\t\t<h3>Informe a descrição</h3>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input class=\"form-control\" name=\"input-descricao\" type=\"text\" placeholder=\"Descrição da atividade\" required>
\t\t\t\t\t<hr />
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">Adicionar</a>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>\t
    </div>
{% endblock %}
", "AtividadeCoreBundle:atividade:index.html.twig", "/var/www/atividades/src/Atividade/CoreBundle/Resources/views/atividade/index.html.twig");
    }
}
