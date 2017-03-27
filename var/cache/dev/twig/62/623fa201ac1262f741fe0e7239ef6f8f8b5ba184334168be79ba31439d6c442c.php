<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_762a93268a56f27f40200fd7c3651e058eca5b9f7b583d66525805b15cc913af extends Twig_Template
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
        $__internal_11d0609683c7846adc5e3aa650845720aedd6ff69e127ea2f17d2ce941e79001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d0609683c7846adc5e3aa650845720aedd6ff69e127ea2f17d2ce941e79001->enter($__internal_11d0609683c7846adc5e3aa650845720aedd6ff69e127ea2f17d2ce941e79001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_02fe43758651722ea09ed2bd25b1d02ff10e46fd6b3f84c1dcaa9ef622441c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fe43758651722ea09ed2bd25b1d02ff10e46fd6b3f84c1dcaa9ef622441c4b->enter($__internal_02fe43758651722ea09ed2bd25b1d02ff10e46fd6b3f84c1dcaa9ef622441c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_11d0609683c7846adc5e3aa650845720aedd6ff69e127ea2f17d2ce941e79001->leave($__internal_11d0609683c7846adc5e3aa650845720aedd6ff69e127ea2f17d2ce941e79001_prof);

        
        $__internal_02fe43758651722ea09ed2bd25b1d02ff10e46fd6b3f84c1dcaa9ef622441c4b->leave($__internal_02fe43758651722ea09ed2bd25b1d02ff10e46fd6b3f84c1dcaa9ef622441c4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
