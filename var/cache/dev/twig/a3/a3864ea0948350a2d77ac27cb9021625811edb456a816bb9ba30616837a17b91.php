<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2306b6cd3134615afe006532fa4a7d4af130e420a8cc45a2cb3f38eb643a9fa3 extends Twig_Template
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
        $__internal_8f678c6c955607feda8a226ee0e4cc2912cc82bf21616293e08c2cf3145860e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f678c6c955607feda8a226ee0e4cc2912cc82bf21616293e08c2cf3145860e6->enter($__internal_8f678c6c955607feda8a226ee0e4cc2912cc82bf21616293e08c2cf3145860e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d4ee4db2d58e7eca9b1e0e7b44094e20fbfa106bbae7404bade871983d71b39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ee4db2d58e7eca9b1e0e7b44094e20fbfa106bbae7404bade871983d71b39f->enter($__internal_d4ee4db2d58e7eca9b1e0e7b44094e20fbfa106bbae7404bade871983d71b39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8f678c6c955607feda8a226ee0e4cc2912cc82bf21616293e08c2cf3145860e6->leave($__internal_8f678c6c955607feda8a226ee0e4cc2912cc82bf21616293e08c2cf3145860e6_prof);

        
        $__internal_d4ee4db2d58e7eca9b1e0e7b44094e20fbfa106bbae7404bade871983d71b39f->leave($__internal_d4ee4db2d58e7eca9b1e0e7b44094e20fbfa106bbae7404bade871983d71b39f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
