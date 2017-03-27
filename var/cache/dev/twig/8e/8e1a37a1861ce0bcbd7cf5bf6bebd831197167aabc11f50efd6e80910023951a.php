<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_279ecc404c752ab2fc4021ac71321b6e56c3b962c2568c8ac7c3a035275de6eb extends Twig_Template
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
        $__internal_127569272ee25a702fa84975120aa9734a5eb110baa6c7cdb650178524d29e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127569272ee25a702fa84975120aa9734a5eb110baa6c7cdb650178524d29e43->enter($__internal_127569272ee25a702fa84975120aa9734a5eb110baa6c7cdb650178524d29e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f305c9000e3143db74b78b3bf7b9e098b3c2bd8a7a3cfc1fdb9bd9c6c65d8315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f305c9000e3143db74b78b3bf7b9e098b3c2bd8a7a3cfc1fdb9bd9c6c65d8315->enter($__internal_f305c9000e3143db74b78b3bf7b9e098b3c2bd8a7a3cfc1fdb9bd9c6c65d8315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_127569272ee25a702fa84975120aa9734a5eb110baa6c7cdb650178524d29e43->leave($__internal_127569272ee25a702fa84975120aa9734a5eb110baa6c7cdb650178524d29e43_prof);

        
        $__internal_f305c9000e3143db74b78b3bf7b9e098b3c2bd8a7a3cfc1fdb9bd9c6c65d8315->leave($__internal_f305c9000e3143db74b78b3bf7b9e098b3c2bd8a7a3cfc1fdb9bd9c6c65d8315_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
