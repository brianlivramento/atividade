<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_71e2025d4b45bc729ac231c9a40ea83fad3901692e5de9fe928b0f55c91d0398 extends Twig_Template
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
        $__internal_ffe2af710ebce31b4a13a44d904df93797987177bd5f170a3a5387e573faed53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe2af710ebce31b4a13a44d904df93797987177bd5f170a3a5387e573faed53->enter($__internal_ffe2af710ebce31b4a13a44d904df93797987177bd5f170a3a5387e573faed53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_65150455782c76985e60a0cceab8e7d429159de5f6f8658061561b0299d5021c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65150455782c76985e60a0cceab8e7d429159de5f6f8658061561b0299d5021c->enter($__internal_65150455782c76985e60a0cceab8e7d429159de5f6f8658061561b0299d5021c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ffe2af710ebce31b4a13a44d904df93797987177bd5f170a3a5387e573faed53->leave($__internal_ffe2af710ebce31b4a13a44d904df93797987177bd5f170a3a5387e573faed53_prof);

        
        $__internal_65150455782c76985e60a0cceab8e7d429159de5f6f8658061561b0299d5021c->leave($__internal_65150455782c76985e60a0cceab8e7d429159de5f6f8658061561b0299d5021c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
