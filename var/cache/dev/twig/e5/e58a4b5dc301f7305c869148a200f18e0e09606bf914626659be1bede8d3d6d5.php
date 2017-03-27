<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7cc0870a24199929c5327a483a7cb47707280eec64b9f2c2decebbf8fcf32121 extends Twig_Template
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
        $__internal_3ad873d54bae308264bf033e69bad7505ea3b3c158df3f3bac60791bdab2346a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad873d54bae308264bf033e69bad7505ea3b3c158df3f3bac60791bdab2346a->enter($__internal_3ad873d54bae308264bf033e69bad7505ea3b3c158df3f3bac60791bdab2346a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_087ddb59f9a1a5123aeca25b27992f480eb6031d4e32d2ea4a3132b7b51c7671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087ddb59f9a1a5123aeca25b27992f480eb6031d4e32d2ea4a3132b7b51c7671->enter($__internal_087ddb59f9a1a5123aeca25b27992f480eb6031d4e32d2ea4a3132b7b51c7671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3ad873d54bae308264bf033e69bad7505ea3b3c158df3f3bac60791bdab2346a->leave($__internal_3ad873d54bae308264bf033e69bad7505ea3b3c158df3f3bac60791bdab2346a_prof);

        
        $__internal_087ddb59f9a1a5123aeca25b27992f480eb6031d4e32d2ea4a3132b7b51c7671->leave($__internal_087ddb59f9a1a5123aeca25b27992f480eb6031d4e32d2ea4a3132b7b51c7671_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
