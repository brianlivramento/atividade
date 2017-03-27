<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c0f4eb0aa1f57f9b5c201a58718dfe29da11a80e4eff179f9560942617f82b39 extends Twig_Template
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
        $__internal_27b78bae2f43193cbff199f8e327ef3dc688a7fed5db64cf2dc6ebedd2e79138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b78bae2f43193cbff199f8e327ef3dc688a7fed5db64cf2dc6ebedd2e79138->enter($__internal_27b78bae2f43193cbff199f8e327ef3dc688a7fed5db64cf2dc6ebedd2e79138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_28e8d03526998a07ad6bdaf5932a824a02d73567c5f4ae0720862075192fa80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e8d03526998a07ad6bdaf5932a824a02d73567c5f4ae0720862075192fa80c->enter($__internal_28e8d03526998a07ad6bdaf5932a824a02d73567c5f4ae0720862075192fa80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_27b78bae2f43193cbff199f8e327ef3dc688a7fed5db64cf2dc6ebedd2e79138->leave($__internal_27b78bae2f43193cbff199f8e327ef3dc688a7fed5db64cf2dc6ebedd2e79138_prof);

        
        $__internal_28e8d03526998a07ad6bdaf5932a824a02d73567c5f4ae0720862075192fa80c->leave($__internal_28e8d03526998a07ad6bdaf5932a824a02d73567c5f4ae0720862075192fa80c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
