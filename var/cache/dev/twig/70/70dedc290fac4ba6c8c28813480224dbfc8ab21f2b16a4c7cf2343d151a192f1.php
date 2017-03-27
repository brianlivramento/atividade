<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c376111ae31b56cd3f7b6ec128f883f91fa3e9a3fbd636276d22e7ed4072eba7 extends Twig_Template
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
        $__internal_ab5efb803f4a6eede2a29484246a8f8a9f20d07bbc1e20f48c6567888235cec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5efb803f4a6eede2a29484246a8f8a9f20d07bbc1e20f48c6567888235cec2->enter($__internal_ab5efb803f4a6eede2a29484246a8f8a9f20d07bbc1e20f48c6567888235cec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_58340fd6e903fa3387cf669736dda951130ef8ea6f0ea5b99f2656719c367f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58340fd6e903fa3387cf669736dda951130ef8ea6f0ea5b99f2656719c367f44->enter($__internal_58340fd6e903fa3387cf669736dda951130ef8ea6f0ea5b99f2656719c367f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ab5efb803f4a6eede2a29484246a8f8a9f20d07bbc1e20f48c6567888235cec2->leave($__internal_ab5efb803f4a6eede2a29484246a8f8a9f20d07bbc1e20f48c6567888235cec2_prof);

        
        $__internal_58340fd6e903fa3387cf669736dda951130ef8ea6f0ea5b99f2656719c367f44->leave($__internal_58340fd6e903fa3387cf669736dda951130ef8ea6f0ea5b99f2656719c367f44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
