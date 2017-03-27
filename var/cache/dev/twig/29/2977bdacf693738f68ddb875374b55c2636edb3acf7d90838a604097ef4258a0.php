<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ff27cc852a27d51d3bcef17830012c8f528d8f68fff0338326ac29cb170694e7 extends Twig_Template
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
        $__internal_3a90bdf9fbcded352a8d5ee5a6a8a53cfcfa3b7011327ee4016aff1ab90d99e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a90bdf9fbcded352a8d5ee5a6a8a53cfcfa3b7011327ee4016aff1ab90d99e5->enter($__internal_3a90bdf9fbcded352a8d5ee5a6a8a53cfcfa3b7011327ee4016aff1ab90d99e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_253da42ddd97b5a3af5791d19bd5b9d67d3d009a06708b630f3fd18836d9edce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253da42ddd97b5a3af5791d19bd5b9d67d3d009a06708b630f3fd18836d9edce->enter($__internal_253da42ddd97b5a3af5791d19bd5b9d67d3d009a06708b630f3fd18836d9edce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3a90bdf9fbcded352a8d5ee5a6a8a53cfcfa3b7011327ee4016aff1ab90d99e5->leave($__internal_3a90bdf9fbcded352a8d5ee5a6a8a53cfcfa3b7011327ee4016aff1ab90d99e5_prof);

        
        $__internal_253da42ddd97b5a3af5791d19bd5b9d67d3d009a06708b630f3fd18836d9edce->leave($__internal_253da42ddd97b5a3af5791d19bd5b9d67d3d009a06708b630f3fd18836d9edce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
