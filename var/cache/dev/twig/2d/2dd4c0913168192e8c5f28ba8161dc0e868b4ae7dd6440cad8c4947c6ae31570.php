<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b6d56098bc91a629e8a0ec271b83420f6bc7b332c679e3c6c1a274634ee90af5 extends Twig_Template
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
        $__internal_41b4d639449113dcfc660d6f48e854aedd21360c28f62a780011af045f7ae13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b4d639449113dcfc660d6f48e854aedd21360c28f62a780011af045f7ae13b->enter($__internal_41b4d639449113dcfc660d6f48e854aedd21360c28f62a780011af045f7ae13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_f6083739d3325ffdef1a639b8218beb79498ee5567cd20bd7c7c2cbc3e069f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6083739d3325ffdef1a639b8218beb79498ee5567cd20bd7c7c2cbc3e069f17->enter($__internal_f6083739d3325ffdef1a639b8218beb79498ee5567cd20bd7c7c2cbc3e069f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_41b4d639449113dcfc660d6f48e854aedd21360c28f62a780011af045f7ae13b->leave($__internal_41b4d639449113dcfc660d6f48e854aedd21360c28f62a780011af045f7ae13b_prof);

        
        $__internal_f6083739d3325ffdef1a639b8218beb79498ee5567cd20bd7c7c2cbc3e069f17->leave($__internal_f6083739d3325ffdef1a639b8218beb79498ee5567cd20bd7c7c2cbc3e069f17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
