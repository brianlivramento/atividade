<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_35257767f5a8030d00b165b9d61374d99daa315600bb3ccedec2595b30197068 extends Twig_Template
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
        $__internal_9970d036c563f27f5ded81eeb9996dd12a9fe6e89c1594d862f1a332af940aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9970d036c563f27f5ded81eeb9996dd12a9fe6e89c1594d862f1a332af940aec->enter($__internal_9970d036c563f27f5ded81eeb9996dd12a9fe6e89c1594d862f1a332af940aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_04c5ec462b85a3a66c602d69adcad1aab79aac420039605a1abe46a6b3f926ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c5ec462b85a3a66c602d69adcad1aab79aac420039605a1abe46a6b3f926ca->enter($__internal_04c5ec462b85a3a66c602d69adcad1aab79aac420039605a1abe46a6b3f926ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9970d036c563f27f5ded81eeb9996dd12a9fe6e89c1594d862f1a332af940aec->leave($__internal_9970d036c563f27f5ded81eeb9996dd12a9fe6e89c1594d862f1a332af940aec_prof);

        
        $__internal_04c5ec462b85a3a66c602d69adcad1aab79aac420039605a1abe46a6b3f926ca->leave($__internal_04c5ec462b85a3a66c602d69adcad1aab79aac420039605a1abe46a6b3f926ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
