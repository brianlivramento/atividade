<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_23505947967f579d324f59c38fe756a3b9b2f388a217dd0c8da8d271a2a81011 extends Twig_Template
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
        $__internal_256b2d6da589faeedd166b89a170363103ad93ebed437ec6108955b01f559d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_256b2d6da589faeedd166b89a170363103ad93ebed437ec6108955b01f559d85->enter($__internal_256b2d6da589faeedd166b89a170363103ad93ebed437ec6108955b01f559d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_512590c35d271d01fd1385ec700370513888ab6af18adcdbef0ade1f423ad185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512590c35d271d01fd1385ec700370513888ab6af18adcdbef0ade1f423ad185->enter($__internal_512590c35d271d01fd1385ec700370513888ab6af18adcdbef0ade1f423ad185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_256b2d6da589faeedd166b89a170363103ad93ebed437ec6108955b01f559d85->leave($__internal_256b2d6da589faeedd166b89a170363103ad93ebed437ec6108955b01f559d85_prof);

        
        $__internal_512590c35d271d01fd1385ec700370513888ab6af18adcdbef0ade1f423ad185->leave($__internal_512590c35d271d01fd1385ec700370513888ab6af18adcdbef0ade1f423ad185_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
