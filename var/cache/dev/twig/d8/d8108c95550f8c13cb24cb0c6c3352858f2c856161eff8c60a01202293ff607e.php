<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b29a285a91cc3c706e790891c543ae7f1f62d88fc843f54c8ae1c93070b8d365 extends Twig_Template
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
        $__internal_d0cfeed81e93f0b640a2750e43a0f3494beb8d28556f9c39687532b1a6061700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0cfeed81e93f0b640a2750e43a0f3494beb8d28556f9c39687532b1a6061700->enter($__internal_d0cfeed81e93f0b640a2750e43a0f3494beb8d28556f9c39687532b1a6061700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9a4da648ee6e97c85121b95dc8e6db492f674ff109a2d20723994be7fb9638b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4da648ee6e97c85121b95dc8e6db492f674ff109a2d20723994be7fb9638b1->enter($__internal_9a4da648ee6e97c85121b95dc8e6db492f674ff109a2d20723994be7fb9638b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d0cfeed81e93f0b640a2750e43a0f3494beb8d28556f9c39687532b1a6061700->leave($__internal_d0cfeed81e93f0b640a2750e43a0f3494beb8d28556f9c39687532b1a6061700_prof);

        
        $__internal_9a4da648ee6e97c85121b95dc8e6db492f674ff109a2d20723994be7fb9638b1->leave($__internal_9a4da648ee6e97c85121b95dc8e6db492f674ff109a2d20723994be7fb9638b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
