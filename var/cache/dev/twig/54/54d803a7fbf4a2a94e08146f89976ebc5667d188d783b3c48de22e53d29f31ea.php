<?php

/* atividade/index.html.twig */
class __TwigTemplate_0224246839d8e3ce5fe8f64f8c2810da717f7a63d801c32cc3691bb053e4b00e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "atividade/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36043806fbfcacc5f1c9ac451fd793fcd6af903fbad8251155a0da636cf1f89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36043806fbfcacc5f1c9ac451fd793fcd6af903fbad8251155a0da636cf1f89c->enter($__internal_36043806fbfcacc5f1c9ac451fd793fcd6af903fbad8251155a0da636cf1f89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "atividade/index.html.twig"));

        $__internal_b549ee6ca430f769bce111f69a814480eac6abe8b5da5e2f94f39f0538239f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b549ee6ca430f769bce111f69a814480eac6abe8b5da5e2f94f39f0538239f6a->enter($__internal_b549ee6ca430f769bce111f69a814480eac6abe8b5da5e2f94f39f0538239f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "atividade/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36043806fbfcacc5f1c9ac451fd793fcd6af903fbad8251155a0da636cf1f89c->leave($__internal_36043806fbfcacc5f1c9ac451fd793fcd6af903fbad8251155a0da636cf1f89c_prof);

        
        $__internal_b549ee6ca430f769bce111f69a814480eac6abe8b5da5e2f94f39f0538239f6a->leave($__internal_b549ee6ca430f769bce111f69a814480eac6abe8b5da5e2f94f39f0538239f6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_26719907cc0962489842a7ad3df34937e2f16c5ea334d71ec7d75390a8d9d4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26719907cc0962489842a7ad3df34937e2f16c5ea334d71ec7d75390a8d9d4e8->enter($__internal_26719907cc0962489842a7ad3df34937e2f16c5ea334d71ec7d75390a8d9d4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_476b9062effbc0e3c91dd3c8c0766e894c3884a1db2194104ace7847760819e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476b9062effbc0e3c91dd3c8c0766e894c3884a1db2194104ace7847760819e9->enter($__internal_476b9062effbc0e3c91dd3c8c0766e894c3884a1db2194104ace7847760819e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Atividades list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Descricao</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["atividades"] ?? $this->getContext($context, "atividades")));
        foreach ($context['_seq'] as $context["_key"] => $context["atividade"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_show", array("id" => $this->getAttribute($context["atividade"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["atividade"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["atividade"], "descricao", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_show", array("id" => $this->getAttribute($context["atividade"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_edit", array("id" => $this->getAttribute($context["atividade"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['atividade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_new");
        echo "\">Create a new atividade</a>
        </li>
    </ul>
";
        
        $__internal_476b9062effbc0e3c91dd3c8c0766e894c3884a1db2194104ace7847760819e9->leave($__internal_476b9062effbc0e3c91dd3c8c0766e894c3884a1db2194104ace7847760819e9_prof);

        
        $__internal_26719907cc0962489842a7ad3df34937e2f16c5ea334d71ec7d75390a8d9d4e8->leave($__internal_26719907cc0962489842a7ad3df34937e2f16c5ea334d71ec7d75390a8d9d4e8_prof);

    }

    public function getTemplateName()
    {
        return "atividade/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Atividades list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Descricao</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for atividade in atividades %}
            <tr>
                <td><a href=\"{{ path('atividade_show', { 'id': atividade.id }) }}\">{{ atividade.id }}</a></td>
                <td>{{ atividade.descricao }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('atividade_show', { 'id': atividade.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('atividade_edit', { 'id': atividade.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('atividade_new') }}\">Create a new atividade</a>
        </li>
    </ul>
{% endblock %}
", "atividade/index.html.twig", "/var/www/atividades/app/Resources/views/atividade/index.html.twig");
    }
}
