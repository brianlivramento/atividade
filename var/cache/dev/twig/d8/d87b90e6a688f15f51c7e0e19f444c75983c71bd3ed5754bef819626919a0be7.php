<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7521c96b66526f39760d7d9e92acb032b8ec3e36e361be17569981914a489cdc extends Twig_Template
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
        $__internal_aa9e2345443ea8a0ac6c43bb00d167ea68af607f913bdb6a97ef2d1ceebc82ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9e2345443ea8a0ac6c43bb00d167ea68af607f913bdb6a97ef2d1ceebc82ab->enter($__internal_aa9e2345443ea8a0ac6c43bb00d167ea68af607f913bdb6a97ef2d1ceebc82ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_dd90be390d98fc8f4d294ee00b6decbd348fa3122b40fd0c854a1ac1d9acfdc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd90be390d98fc8f4d294ee00b6decbd348fa3122b40fd0c854a1ac1d9acfdc3->enter($__internal_dd90be390d98fc8f4d294ee00b6decbd348fa3122b40fd0c854a1ac1d9acfdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aa9e2345443ea8a0ac6c43bb00d167ea68af607f913bdb6a97ef2d1ceebc82ab->leave($__internal_aa9e2345443ea8a0ac6c43bb00d167ea68af607f913bdb6a97ef2d1ceebc82ab_prof);

        
        $__internal_dd90be390d98fc8f4d294ee00b6decbd348fa3122b40fd0c854a1ac1d9acfdc3->leave($__internal_dd90be390d98fc8f4d294ee00b6decbd348fa3122b40fd0c854a1ac1d9acfdc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
