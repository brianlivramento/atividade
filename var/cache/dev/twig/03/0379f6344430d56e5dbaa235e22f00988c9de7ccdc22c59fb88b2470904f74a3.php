<?php

/* atividade/new.html.twig */
class __TwigTemplate_09ae5e48f1a95e3e579c9b896c816bd8cacc3c3e3bbd8530e51e969a2483ccba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "atividade/new.html.twig", 1);
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
        $__internal_898169fbb83f95248ff8818e4910a83f0c39565465de0853e94f950405732c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898169fbb83f95248ff8818e4910a83f0c39565465de0853e94f950405732c2b->enter($__internal_898169fbb83f95248ff8818e4910a83f0c39565465de0853e94f950405732c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "atividade/new.html.twig"));

        $__internal_e234ae1aaf5b8ebc785fcb6f3ffba38b88c574da5c9da93615eb691d0d3828ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e234ae1aaf5b8ebc785fcb6f3ffba38b88c574da5c9da93615eb691d0d3828ae->enter($__internal_e234ae1aaf5b8ebc785fcb6f3ffba38b88c574da5c9da93615eb691d0d3828ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "atividade/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_898169fbb83f95248ff8818e4910a83f0c39565465de0853e94f950405732c2b->leave($__internal_898169fbb83f95248ff8818e4910a83f0c39565465de0853e94f950405732c2b_prof);

        
        $__internal_e234ae1aaf5b8ebc785fcb6f3ffba38b88c574da5c9da93615eb691d0d3828ae->leave($__internal_e234ae1aaf5b8ebc785fcb6f3ffba38b88c574da5c9da93615eb691d0d3828ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be34623fae98571d43e045ff70d9dc90b48407786302b3b36f77847288c4eefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be34623fae98571d43e045ff70d9dc90b48407786302b3b36f77847288c4eefe->enter($__internal_be34623fae98571d43e045ff70d9dc90b48407786302b3b36f77847288c4eefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_604ae58c7637d4d01589c1d9c2d2a232a775f1c63cbc2e654ebebd7dcb034f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604ae58c7637d4d01589c1d9c2d2a232a775f1c63cbc2e654ebebd7dcb034f80->enter($__internal_604ae58c7637d4d01589c1d9c2d2a232a775f1c63cbc2e654ebebd7dcb034f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Atividade creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("atividade_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_604ae58c7637d4d01589c1d9c2d2a232a775f1c63cbc2e654ebebd7dcb034f80->leave($__internal_604ae58c7637d4d01589c1d9c2d2a232a775f1c63cbc2e654ebebd7dcb034f80_prof);

        
        $__internal_be34623fae98571d43e045ff70d9dc90b48407786302b3b36f77847288c4eefe->leave($__internal_be34623fae98571d43e045ff70d9dc90b48407786302b3b36f77847288c4eefe_prof);

    }

    public function getTemplateName()
    {
        return "atividade/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Atividade creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('atividade_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "atividade/new.html.twig", "/var/www/atividades/app/Resources/views/atividade/new.html.twig");
    }
}
