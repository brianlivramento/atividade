<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_042f9d521d9aaa435ed89e2ede737a06e10959b040bc487f0bb605490acce6d6 extends Twig_Template
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
        $__internal_b6c6fc55ece7bd77380aa94eb899b3f09eac10244c72bcc4bf4caf241d80e34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c6fc55ece7bd77380aa94eb899b3f09eac10244c72bcc4bf4caf241d80e34d->enter($__internal_b6c6fc55ece7bd77380aa94eb899b3f09eac10244c72bcc4bf4caf241d80e34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_88f2e8f089c38cc205ed162914da50b3fdb1a12de9d716cdc2a0da0c0a519599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f2e8f089c38cc205ed162914da50b3fdb1a12de9d716cdc2a0da0c0a519599->enter($__internal_88f2e8f089c38cc205ed162914da50b3fdb1a12de9d716cdc2a0da0c0a519599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b6c6fc55ece7bd77380aa94eb899b3f09eac10244c72bcc4bf4caf241d80e34d->leave($__internal_b6c6fc55ece7bd77380aa94eb899b3f09eac10244c72bcc4bf4caf241d80e34d_prof);

        
        $__internal_88f2e8f089c38cc205ed162914da50b3fdb1a12de9d716cdc2a0da0c0a519599->leave($__internal_88f2e8f089c38cc205ed162914da50b3fdb1a12de9d716cdc2a0da0c0a519599_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
