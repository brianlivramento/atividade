<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_18976dec639552ae196e4c6e02b171dd9a709e461c7da7d7270a7c23ddca9e59 extends Twig_Template
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
        $__internal_dbba0f3ca19e7910db16f9855bacbedf7639e2d636d73e868056a066af9fba59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbba0f3ca19e7910db16f9855bacbedf7639e2d636d73e868056a066af9fba59->enter($__internal_dbba0f3ca19e7910db16f9855bacbedf7639e2d636d73e868056a066af9fba59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b0c5718aa762d24afdbab10b01b426d576948ff801fd817727457c358a9eaacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c5718aa762d24afdbab10b01b426d576948ff801fd817727457c358a9eaacb->enter($__internal_b0c5718aa762d24afdbab10b01b426d576948ff801fd817727457c358a9eaacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_dbba0f3ca19e7910db16f9855bacbedf7639e2d636d73e868056a066af9fba59->leave($__internal_dbba0f3ca19e7910db16f9855bacbedf7639e2d636d73e868056a066af9fba59_prof);

        
        $__internal_b0c5718aa762d24afdbab10b01b426d576948ff801fd817727457c358a9eaacb->leave($__internal_b0c5718aa762d24afdbab10b01b426d576948ff801fd817727457c358a9eaacb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
