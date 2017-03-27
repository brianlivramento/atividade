<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_99d1858e2fc49d723712c037e7020326a777a5925900c289a2cdba320a5c9b92 extends Twig_Template
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
        $__internal_b1ad654e7999a24440cdd9c31401f42003d00fa2e5e3b199f016d71c7480d0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ad654e7999a24440cdd9c31401f42003d00fa2e5e3b199f016d71c7480d0b8->enter($__internal_b1ad654e7999a24440cdd9c31401f42003d00fa2e5e3b199f016d71c7480d0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_77cd350f21d32c14bec6a310d94daf8c12c46183347f27dcd98c8858adedcb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cd350f21d32c14bec6a310d94daf8c12c46183347f27dcd98c8858adedcb6a->enter($__internal_77cd350f21d32c14bec6a310d94daf8c12c46183347f27dcd98c8858adedcb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b1ad654e7999a24440cdd9c31401f42003d00fa2e5e3b199f016d71c7480d0b8->leave($__internal_b1ad654e7999a24440cdd9c31401f42003d00fa2e5e3b199f016d71c7480d0b8_prof);

        
        $__internal_77cd350f21d32c14bec6a310d94daf8c12c46183347f27dcd98c8858adedcb6a->leave($__internal_77cd350f21d32c14bec6a310d94daf8c12c46183347f27dcd98c8858adedcb6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
