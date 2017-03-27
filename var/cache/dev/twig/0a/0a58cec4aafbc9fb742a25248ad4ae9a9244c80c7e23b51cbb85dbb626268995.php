<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4f4c5c87f245675b203e5bd6969c583d3603b90f7416c4645f4b890601dee77c extends Twig_Template
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
        $__internal_b694beb928b7fa45d6fa153f539ff12a7daf9eb76b84325e1dfae32beba6459d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b694beb928b7fa45d6fa153f539ff12a7daf9eb76b84325e1dfae32beba6459d->enter($__internal_b694beb928b7fa45d6fa153f539ff12a7daf9eb76b84325e1dfae32beba6459d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6a87526bcba0d705d1d74b9d8d0dd430dead3817b333abb300f9a55cd66c68d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a87526bcba0d705d1d74b9d8d0dd430dead3817b333abb300f9a55cd66c68d9->enter($__internal_6a87526bcba0d705d1d74b9d8d0dd430dead3817b333abb300f9a55cd66c68d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b694beb928b7fa45d6fa153f539ff12a7daf9eb76b84325e1dfae32beba6459d->leave($__internal_b694beb928b7fa45d6fa153f539ff12a7daf9eb76b84325e1dfae32beba6459d_prof);

        
        $__internal_6a87526bcba0d705d1d74b9d8d0dd430dead3817b333abb300f9a55cd66c68d9->leave($__internal_6a87526bcba0d705d1d74b9d8d0dd430dead3817b333abb300f9a55cd66c68d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
