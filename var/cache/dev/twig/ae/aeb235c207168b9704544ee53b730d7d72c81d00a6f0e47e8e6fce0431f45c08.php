<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_859f0b22e3e28305968376c3b9dbda370c2c0f707db15510c90bf548c4cb049e extends Twig_Template
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
        $__internal_ff68c7f178b92f91da63548cc543e05a3394b527792dbbf33c6e0776d81f6b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff68c7f178b92f91da63548cc543e05a3394b527792dbbf33c6e0776d81f6b07->enter($__internal_ff68c7f178b92f91da63548cc543e05a3394b527792dbbf33c6e0776d81f6b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_388c3db69c31bca30b34ce4e45ccb41fabadcb7c98cff7c84016972de2546025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388c3db69c31bca30b34ce4e45ccb41fabadcb7c98cff7c84016972de2546025->enter($__internal_388c3db69c31bca30b34ce4e45ccb41fabadcb7c98cff7c84016972de2546025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ff68c7f178b92f91da63548cc543e05a3394b527792dbbf33c6e0776d81f6b07->leave($__internal_ff68c7f178b92f91da63548cc543e05a3394b527792dbbf33c6e0776d81f6b07_prof);

        
        $__internal_388c3db69c31bca30b34ce4e45ccb41fabadcb7c98cff7c84016972de2546025->leave($__internal_388c3db69c31bca30b34ce4e45ccb41fabadcb7c98cff7c84016972de2546025_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
