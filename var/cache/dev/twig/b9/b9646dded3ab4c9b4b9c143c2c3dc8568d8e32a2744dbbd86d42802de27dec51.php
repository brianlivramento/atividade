<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_55f5598e44180353eb6404e850f26acce07faa4c887b21e4feb7cb081b322a8f extends Twig_Template
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
        $__internal_1d7320c0081d0ca5b25dfc4c8c70c432f2f83b24f0dadbc96945b625c587135e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7320c0081d0ca5b25dfc4c8c70c432f2f83b24f0dadbc96945b625c587135e->enter($__internal_1d7320c0081d0ca5b25dfc4c8c70c432f2f83b24f0dadbc96945b625c587135e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d595bea9ae30bc96fd9f826580fac861eb78aba38cdcdb422339b35d3ac98592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d595bea9ae30bc96fd9f826580fac861eb78aba38cdcdb422339b35d3ac98592->enter($__internal_d595bea9ae30bc96fd9f826580fac861eb78aba38cdcdb422339b35d3ac98592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1d7320c0081d0ca5b25dfc4c8c70c432f2f83b24f0dadbc96945b625c587135e->leave($__internal_1d7320c0081d0ca5b25dfc4c8c70c432f2f83b24f0dadbc96945b625c587135e_prof);

        
        $__internal_d595bea9ae30bc96fd9f826580fac861eb78aba38cdcdb422339b35d3ac98592->leave($__internal_d595bea9ae30bc96fd9f826580fac861eb78aba38cdcdb422339b35d3ac98592_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
