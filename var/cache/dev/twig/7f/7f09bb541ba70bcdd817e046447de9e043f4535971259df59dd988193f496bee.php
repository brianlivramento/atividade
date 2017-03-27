<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3727925fe25ad85e355d269386936e62c33e54e041b0f38e4dfe9235c1e03e34 extends Twig_Template
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
        $__internal_60ab706f02b03344251412267c2296ed3b2ffeae0de8d8bc2f83a95ed7d31476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ab706f02b03344251412267c2296ed3b2ffeae0de8d8bc2f83a95ed7d31476->enter($__internal_60ab706f02b03344251412267c2296ed3b2ffeae0de8d8bc2f83a95ed7d31476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_61e403b9e63521ebc65e45e84281d060b501c06e2e4deb263a72b00156bb6db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e403b9e63521ebc65e45e84281d060b501c06e2e4deb263a72b00156bb6db3->enter($__internal_61e403b9e63521ebc65e45e84281d060b501c06e2e4deb263a72b00156bb6db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_60ab706f02b03344251412267c2296ed3b2ffeae0de8d8bc2f83a95ed7d31476->leave($__internal_60ab706f02b03344251412267c2296ed3b2ffeae0de8d8bc2f83a95ed7d31476_prof);

        
        $__internal_61e403b9e63521ebc65e45e84281d060b501c06e2e4deb263a72b00156bb6db3->leave($__internal_61e403b9e63521ebc65e45e84281d060b501c06e2e4deb263a72b00156bb6db3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
