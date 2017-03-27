<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d29aebd12c035a31cbf2ab55f99d88da7f375f76f62295319bb3c15e223025f7 extends Twig_Template
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
        $__internal_1cf9816eefeaa2c4f9c0d039b45bc89e676cd1859fe21b501c39ab638b68e631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf9816eefeaa2c4f9c0d039b45bc89e676cd1859fe21b501c39ab638b68e631->enter($__internal_1cf9816eefeaa2c4f9c0d039b45bc89e676cd1859fe21b501c39ab638b68e631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_cf2b432c5232477659210d405426656e8f169eef65780a8c58a78b6993f7db43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2b432c5232477659210d405426656e8f169eef65780a8c58a78b6993f7db43->enter($__internal_cf2b432c5232477659210d405426656e8f169eef65780a8c58a78b6993f7db43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1cf9816eefeaa2c4f9c0d039b45bc89e676cd1859fe21b501c39ab638b68e631->leave($__internal_1cf9816eefeaa2c4f9c0d039b45bc89e676cd1859fe21b501c39ab638b68e631_prof);

        
        $__internal_cf2b432c5232477659210d405426656e8f169eef65780a8c58a78b6993f7db43->leave($__internal_cf2b432c5232477659210d405426656e8f169eef65780a8c58a78b6993f7db43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
