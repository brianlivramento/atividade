<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bb12a7c936cfc372dec231a14e1618d227bcd3ddbdc88564728b2d3e18af7ac5 extends Twig_Template
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
        $__internal_45773c9c5a9981c97487086594b9c96ca979b07d9ef4bb154b5f991ecddbf60b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45773c9c5a9981c97487086594b9c96ca979b07d9ef4bb154b5f991ecddbf60b->enter($__internal_45773c9c5a9981c97487086594b9c96ca979b07d9ef4bb154b5f991ecddbf60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2abb92f9f5b8b77c2532eb0cb2c1a4e0fda33fb99c26ad328b790c6bddd13108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abb92f9f5b8b77c2532eb0cb2c1a4e0fda33fb99c26ad328b790c6bddd13108->enter($__internal_2abb92f9f5b8b77c2532eb0cb2c1a4e0fda33fb99c26ad328b790c6bddd13108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_45773c9c5a9981c97487086594b9c96ca979b07d9ef4bb154b5f991ecddbf60b->leave($__internal_45773c9c5a9981c97487086594b9c96ca979b07d9ef4bb154b5f991ecddbf60b_prof);

        
        $__internal_2abb92f9f5b8b77c2532eb0cb2c1a4e0fda33fb99c26ad328b790c6bddd13108->leave($__internal_2abb92f9f5b8b77c2532eb0cb2c1a4e0fda33fb99c26ad328b790c6bddd13108_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
