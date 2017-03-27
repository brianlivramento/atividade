<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3e6f28310adbc4d7f52f7a2cf1fb81b621c3bb2a519c471c826228f40a56d0cf extends Twig_Template
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
        $__internal_ea5c067ccdfe859686f5468d709e1040154d1d3ec751d51f64e15a85f2eb992c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5c067ccdfe859686f5468d709e1040154d1d3ec751d51f64e15a85f2eb992c->enter($__internal_ea5c067ccdfe859686f5468d709e1040154d1d3ec751d51f64e15a85f2eb992c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b68b848791d56a5e2fa4bc2a72aaa97f7c553ac0fa7e6555d3b365636a7b6bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68b848791d56a5e2fa4bc2a72aaa97f7c553ac0fa7e6555d3b365636a7b6bfe->enter($__internal_b68b848791d56a5e2fa4bc2a72aaa97f7c553ac0fa7e6555d3b365636a7b6bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ea5c067ccdfe859686f5468d709e1040154d1d3ec751d51f64e15a85f2eb992c->leave($__internal_ea5c067ccdfe859686f5468d709e1040154d1d3ec751d51f64e15a85f2eb992c_prof);

        
        $__internal_b68b848791d56a5e2fa4bc2a72aaa97f7c553ac0fa7e6555d3b365636a7b6bfe->leave($__internal_b68b848791d56a5e2fa4bc2a72aaa97f7c553ac0fa7e6555d3b365636a7b6bfe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
