<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_13d02a4d034894dbd000025ac1763fd690e96c831029426ecd0806d4e6ee13e4 extends Twig_Template
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
        $__internal_0c81fbffe0354aad21320f9e5dc0703d8c0ddff9e3268e54aa401f770c36a7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c81fbffe0354aad21320f9e5dc0703d8c0ddff9e3268e54aa401f770c36a7eb->enter($__internal_0c81fbffe0354aad21320f9e5dc0703d8c0ddff9e3268e54aa401f770c36a7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_25fc3bbb9611c682d7ca62f173f4880f66e37fe0851778ae8909fd1b35866757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fc3bbb9611c682d7ca62f173f4880f66e37fe0851778ae8909fd1b35866757->enter($__internal_25fc3bbb9611c682d7ca62f173f4880f66e37fe0851778ae8909fd1b35866757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0c81fbffe0354aad21320f9e5dc0703d8c0ddff9e3268e54aa401f770c36a7eb->leave($__internal_0c81fbffe0354aad21320f9e5dc0703d8c0ddff9e3268e54aa401f770c36a7eb_prof);

        
        $__internal_25fc3bbb9611c682d7ca62f173f4880f66e37fe0851778ae8909fd1b35866757->leave($__internal_25fc3bbb9611c682d7ca62f173f4880f66e37fe0851778ae8909fd1b35866757_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
