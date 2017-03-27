<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_72ebf513eb9760eef7842b73f2815af11795bcfaa2919030a1f4fd47c00b4cb0 extends Twig_Template
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
        $__internal_0701e46c1816b8ead5a7336ad6fad79d23f8d3905532e37b0a57a2e9c6b71786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0701e46c1816b8ead5a7336ad6fad79d23f8d3905532e37b0a57a2e9c6b71786->enter($__internal_0701e46c1816b8ead5a7336ad6fad79d23f8d3905532e37b0a57a2e9c6b71786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_fe4fc19129bf28ddf7eb426dd9dc6580dcf34197605dd6e2b4a75df2910980fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4fc19129bf28ddf7eb426dd9dc6580dcf34197605dd6e2b4a75df2910980fa->enter($__internal_fe4fc19129bf28ddf7eb426dd9dc6580dcf34197605dd6e2b4a75df2910980fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_0701e46c1816b8ead5a7336ad6fad79d23f8d3905532e37b0a57a2e9c6b71786->leave($__internal_0701e46c1816b8ead5a7336ad6fad79d23f8d3905532e37b0a57a2e9c6b71786_prof);

        
        $__internal_fe4fc19129bf28ddf7eb426dd9dc6580dcf34197605dd6e2b4a75df2910980fa->leave($__internal_fe4fc19129bf28ddf7eb426dd9dc6580dcf34197605dd6e2b4a75df2910980fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
