<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_293382333673354ed04c4c9397cf2e74c7a7b3b739a4e07d6d32d1fa06052a62 extends Twig_Template
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
        $__internal_b5dd26a07dc1b371b78ce9f009197095aa7d9a5b3944b92b4b2f51159bae67b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5dd26a07dc1b371b78ce9f009197095aa7d9a5b3944b92b4b2f51159bae67b0->enter($__internal_b5dd26a07dc1b371b78ce9f009197095aa7d9a5b3944b92b4b2f51159bae67b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a367e39fa2dab6c118d16e32687bc9b3a4a2af8923363ae1d482cd6c6ca709e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a367e39fa2dab6c118d16e32687bc9b3a4a2af8923363ae1d482cd6c6ca709e3->enter($__internal_a367e39fa2dab6c118d16e32687bc9b3a4a2af8923363ae1d482cd6c6ca709e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_b5dd26a07dc1b371b78ce9f009197095aa7d9a5b3944b92b4b2f51159bae67b0->leave($__internal_b5dd26a07dc1b371b78ce9f009197095aa7d9a5b3944b92b4b2f51159bae67b0_prof);

        
        $__internal_a367e39fa2dab6c118d16e32687bc9b3a4a2af8923363ae1d482cd6c6ca709e3->leave($__internal_a367e39fa2dab6c118d16e32687bc9b3a4a2af8923363ae1d482cd6c6ca709e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
