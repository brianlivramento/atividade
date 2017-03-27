<?php

/* atividade/show.html.twig */
class __TwigTemplate_ecae32fa06aad131af432a18de01581e8e0d816f191a642b4432a8d3e72778c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "atividade/show.html.twig", 1);
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
        $__internal_7691c5bd066236c21545fabf2cc720856b736563e96f4e097fdaa4d212f2f699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7691c5bd066236c21545fabf2cc720856b736563e96f4e097fdaa4d212f2f699->enter($__internal_7691c5bd066236c21545fabf2cc720856b736563e96f4e097fdaa4d212f2f699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "atividade/show.html.twig"));

        $__internal_eb8b47e42d662f1c249ccecf84062ada016feffb1dd2eb4ee8cc8218f4ee3610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8b47e42d662f1c249ccecf84062ada016feffb1dd2eb4ee8cc8218f4ee3610->enter($__internal_eb8b47e42d662f1c249ccecf84062ada016feffb1dd2eb4ee8cc8218f4ee3610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "atividade/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7691c5bd066236c21545fabf2cc720856b736563e96f4e097fdaa4d212f2f699->leave($__internal_7691c5bd066236c21545fabf2cc720856b736563e96f4e097fdaa4d212f2f699_prof);

        
        $__internal_eb8b47e42d662f1c249ccecf84062ada016feffb1dd2eb4ee8cc8218f4ee3610->leave($__internal_eb8b47e42d662f1c249ccecf84062ada016feffb1dd2eb4ee8cc8218f4ee3610_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eefd5d76d7620f02089b22ac136bd34016d6950840e2caf0c7e2147da4623bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eefd5d76d7620f02089b22ac136bd34016d6950840e2caf0c7e2147da4623bef->enter($__internal_eefd5d76d7620f02089b22ac136bd34016d6950840e2caf0c7e2147da4623bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d58cd994015f1b6ac77f177be6ceb8e66e9f95acddcc49754bf8b9e74fb356c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58cd994015f1b6ac77f177be6ceb8e66e9f95acddcc49754bf8b9e74fb356c7->enter($__internal_d58cd994015f1b6ac77f177be6ceb8e66e9f95acddcc49754bf8b9e74fb356c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Atividade</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividade"] ?? $this->getContext($context, "atividade")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descricao</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["atividade"] ?? $this->getContext($context, "atividade")), "descricao", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_edit", array("id" => $this->getAttribute(($context["atividade"] ?? $this->getContext($context, "atividade")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d58cd994015f1b6ac77f177be6ceb8e66e9f95acddcc49754bf8b9e74fb356c7->leave($__internal_d58cd994015f1b6ac77f177be6ceb8e66e9f95acddcc49754bf8b9e74fb356c7_prof);

        
        $__internal_eefd5d76d7620f02089b22ac136bd34016d6950840e2caf0c7e2147da4623bef->leave($__internal_eefd5d76d7620f02089b22ac136bd34016d6950840e2caf0c7e2147da4623bef_prof);

    }

    public function getTemplateName()
    {
        return "atividade/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Atividade</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ atividade.id }}</td>
            </tr>
            <tr>
                <th>Descricao</th>
                <td>{{ atividade.descricao }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('atividade_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('atividade_edit', { 'id': atividade.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "atividade/show.html.twig", "/var/www/atividades/app/Resources/views/atividade/show.html.twig");
    }
}
