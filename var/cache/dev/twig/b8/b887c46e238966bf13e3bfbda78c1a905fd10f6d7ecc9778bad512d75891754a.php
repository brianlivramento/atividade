<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3625f97c24411b9a7e21ea46121c0df632b11585270e7999303f7e12c0ac42b1 extends Twig_Template
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
        $__internal_6fd16c5911df69b71ca5504896ee7b375b26445ab226093fb96c4c1e226628f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd16c5911df69b71ca5504896ee7b375b26445ab226093fb96c4c1e226628f8->enter($__internal_6fd16c5911df69b71ca5504896ee7b375b26445ab226093fb96c4c1e226628f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a613ddde1fcaba7aaf964e175c364d4591dd5364d732cd9b5544a872f8d80bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a613ddde1fcaba7aaf964e175c364d4591dd5364d732cd9b5544a872f8d80bc6->enter($__internal_a613ddde1fcaba7aaf964e175c364d4591dd5364d732cd9b5544a872f8d80bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_6fd16c5911df69b71ca5504896ee7b375b26445ab226093fb96c4c1e226628f8->leave($__internal_6fd16c5911df69b71ca5504896ee7b375b26445ab226093fb96c4c1e226628f8_prof);

        
        $__internal_a613ddde1fcaba7aaf964e175c364d4591dd5364d732cd9b5544a872f8d80bc6->leave($__internal_a613ddde1fcaba7aaf964e175c364d4591dd5364d732cd9b5544a872f8d80bc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
