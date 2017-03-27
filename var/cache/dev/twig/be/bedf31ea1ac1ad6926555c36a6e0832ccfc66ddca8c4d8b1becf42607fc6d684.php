<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2fda6349c19790506d3e6aacc1acc415a64924b0d17de84d657dec2a8bb6abe6 extends Twig_Template
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
        $__internal_033de66880032a144cca680aaecb3e78e02e1da9af494ed894013e584fdf16fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033de66880032a144cca680aaecb3e78e02e1da9af494ed894013e584fdf16fe->enter($__internal_033de66880032a144cca680aaecb3e78e02e1da9af494ed894013e584fdf16fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c67144ba33035bca7432b7e31bfce7d7c65b33ec9bfd65e0c68952dc4a9fcb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67144ba33035bca7432b7e31bfce7d7c65b33ec9bfd65e0c68952dc4a9fcb09->enter($__internal_c67144ba33035bca7432b7e31bfce7d7c65b33ec9bfd65e0c68952dc4a9fcb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_033de66880032a144cca680aaecb3e78e02e1da9af494ed894013e584fdf16fe->leave($__internal_033de66880032a144cca680aaecb3e78e02e1da9af494ed894013e584fdf16fe_prof);

        
        $__internal_c67144ba33035bca7432b7e31bfce7d7c65b33ec9bfd65e0c68952dc4a9fcb09->leave($__internal_c67144ba33035bca7432b7e31bfce7d7c65b33ec9bfd65e0c68952dc4a9fcb09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
