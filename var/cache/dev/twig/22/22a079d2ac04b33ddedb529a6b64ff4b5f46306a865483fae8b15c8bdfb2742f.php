<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_adb526847cdf210a36c75ba1504e3e95fa45a85033a35d1d7a9d2bc2ae61ea5f extends Twig_Template
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
        $__internal_90ad5578d0f7d9188fca118f8abf81ecae79cd02c8a1de59875be435655fa1a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ad5578d0f7d9188fca118f8abf81ecae79cd02c8a1de59875be435655fa1a5->enter($__internal_90ad5578d0f7d9188fca118f8abf81ecae79cd02c8a1de59875be435655fa1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_41ff4ab25353e6c5b1c147a507b2bb09bce3a48cd5e664b96f3a235f731b4b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ff4ab25353e6c5b1c147a507b2bb09bce3a48cd5e664b96f3a235f731b4b1d->enter($__internal_41ff4ab25353e6c5b1c147a507b2bb09bce3a48cd5e664b96f3a235f731b4b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_90ad5578d0f7d9188fca118f8abf81ecae79cd02c8a1de59875be435655fa1a5->leave($__internal_90ad5578d0f7d9188fca118f8abf81ecae79cd02c8a1de59875be435655fa1a5_prof);

        
        $__internal_41ff4ab25353e6c5b1c147a507b2bb09bce3a48cd5e664b96f3a235f731b4b1d->leave($__internal_41ff4ab25353e6c5b1c147a507b2bb09bce3a48cd5e664b96f3a235f731b4b1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
