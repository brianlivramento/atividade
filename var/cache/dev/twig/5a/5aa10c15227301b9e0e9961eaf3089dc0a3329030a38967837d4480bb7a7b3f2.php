<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c297e43fac4a682c526ef34eab883ab2669f5a7c6cff364a060e8af62121635c extends Twig_Template
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
        $__internal_79170de51011410c3fd242ab5063229f2c4d1a6eddaeaa8b49398f9c20b1e933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79170de51011410c3fd242ab5063229f2c4d1a6eddaeaa8b49398f9c20b1e933->enter($__internal_79170de51011410c3fd242ab5063229f2c4d1a6eddaeaa8b49398f9c20b1e933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_09de08b9c8e23bf7cda30c5f7d752dbe6b162eab060325195eb1e76985227de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09de08b9c8e23bf7cda30c5f7d752dbe6b162eab060325195eb1e76985227de5->enter($__internal_09de08b9c8e23bf7cda30c5f7d752dbe6b162eab060325195eb1e76985227de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_79170de51011410c3fd242ab5063229f2c4d1a6eddaeaa8b49398f9c20b1e933->leave($__internal_79170de51011410c3fd242ab5063229f2c4d1a6eddaeaa8b49398f9c20b1e933_prof);

        
        $__internal_09de08b9c8e23bf7cda30c5f7d752dbe6b162eab060325195eb1e76985227de5->leave($__internal_09de08b9c8e23bf7cda30c5f7d752dbe6b162eab060325195eb1e76985227de5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
