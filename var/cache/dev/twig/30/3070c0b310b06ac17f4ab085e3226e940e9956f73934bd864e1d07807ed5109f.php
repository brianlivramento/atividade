<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7ca8dfbbe728fd176031c48ed7e706e7315b8589df5ac36a7edee596af173624 extends Twig_Template
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
        $__internal_80ef85c283b39ce22be79526e5f82dfe9323237e9d2e695a69778bd5b34f9c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ef85c283b39ce22be79526e5f82dfe9323237e9d2e695a69778bd5b34f9c41->enter($__internal_80ef85c283b39ce22be79526e5f82dfe9323237e9d2e695a69778bd5b34f9c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1f7ff502b3bda5eced2b2e30a0cf91b5d651bdd252c6bcb9a00a08bf98fba903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7ff502b3bda5eced2b2e30a0cf91b5d651bdd252c6bcb9a00a08bf98fba903->enter($__internal_1f7ff502b3bda5eced2b2e30a0cf91b5d651bdd252c6bcb9a00a08bf98fba903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_80ef85c283b39ce22be79526e5f82dfe9323237e9d2e695a69778bd5b34f9c41->leave($__internal_80ef85c283b39ce22be79526e5f82dfe9323237e9d2e695a69778bd5b34f9c41_prof);

        
        $__internal_1f7ff502b3bda5eced2b2e30a0cf91b5d651bdd252c6bcb9a00a08bf98fba903->leave($__internal_1f7ff502b3bda5eced2b2e30a0cf91b5d651bdd252c6bcb9a00a08bf98fba903_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
