<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7e133165ba015e31fd24e6927aaea5cc3cf91bf24d96b1baca66c5dd6255e128 extends Twig_Template
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
        $__internal_d8770340e903cdde1819de53242d42747212a602dca84360c1bbd5f6c2033bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8770340e903cdde1819de53242d42747212a602dca84360c1bbd5f6c2033bf7->enter($__internal_d8770340e903cdde1819de53242d42747212a602dca84360c1bbd5f6c2033bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_0ba131c9b63c6283f1786f8d5335bd866c7f30b2efaa80d893108878ffd33550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba131c9b63c6283f1786f8d5335bd866c7f30b2efaa80d893108878ffd33550->enter($__internal_0ba131c9b63c6283f1786f8d5335bd866c7f30b2efaa80d893108878ffd33550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d8770340e903cdde1819de53242d42747212a602dca84360c1bbd5f6c2033bf7->leave($__internal_d8770340e903cdde1819de53242d42747212a602dca84360c1bbd5f6c2033bf7_prof);

        
        $__internal_0ba131c9b63c6283f1786f8d5335bd866c7f30b2efaa80d893108878ffd33550->leave($__internal_0ba131c9b63c6283f1786f8d5335bd866c7f30b2efaa80d893108878ffd33550_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
