<?php

/* AtividadeCoreBundle:Default:index.html.twig */
class __TwigTemplate_a84dd34b2640202d939e939ec27e1aea2252c1a8c270e19a1b4df849387653de extends Twig_Template
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
        $__internal_88d5c19f707cc5600e946c1c7d2e805ff7430521a0136982903d6e589974db87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d5c19f707cc5600e946c1c7d2e805ff7430521a0136982903d6e589974db87->enter($__internal_88d5c19f707cc5600e946c1c7d2e805ff7430521a0136982903d6e589974db87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeCoreBundle:Default:index.html.twig"));

        $__internal_66317b1912207379637636ba23b8be5521c21d5d665979cc09d2c7dcb684255d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66317b1912207379637636ba23b8be5521c21d5d665979cc09d2c7dcb684255d->enter($__internal_66317b1912207379637636ba23b8be5521c21d5d665979cc09d2c7dcb684255d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeCoreBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_88d5c19f707cc5600e946c1c7d2e805ff7430521a0136982903d6e589974db87->leave($__internal_88d5c19f707cc5600e946c1c7d2e805ff7430521a0136982903d6e589974db87_prof);

        
        $__internal_66317b1912207379637636ba23b8be5521c21d5d665979cc09d2c7dcb684255d->leave($__internal_66317b1912207379637636ba23b8be5521c21d5d665979cc09d2c7dcb684255d_prof);

    }

    public function getTemplateName()
    {
        return "AtividadeCoreBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AtividadeCoreBundle:Default:index.html.twig", "/var/www/atividades/src/Atividade/CoreBundle/Resources/views/Default/index.html.twig");
    }
}
