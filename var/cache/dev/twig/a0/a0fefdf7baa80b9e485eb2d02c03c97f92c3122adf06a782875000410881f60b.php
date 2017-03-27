<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ebdbe9cd64ec8db08e2dd0e53213f72dab1de75d5aaf4bbf1145a48b6190709a extends Twig_Template
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
        $__internal_83b8ff1543d72f50dd93517dc12ac8756efc3500f1b6ded68e05de54cf01c040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b8ff1543d72f50dd93517dc12ac8756efc3500f1b6ded68e05de54cf01c040->enter($__internal_83b8ff1543d72f50dd93517dc12ac8756efc3500f1b6ded68e05de54cf01c040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_cc83325fe8e5b60db0c80303d93cf9aab88b4276cf8d38b5451a3d9d1d3c0d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc83325fe8e5b60db0c80303d93cf9aab88b4276cf8d38b5451a3d9d1d3c0d2c->enter($__internal_cc83325fe8e5b60db0c80303d93cf9aab88b4276cf8d38b5451a3d9d1d3c0d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_83b8ff1543d72f50dd93517dc12ac8756efc3500f1b6ded68e05de54cf01c040->leave($__internal_83b8ff1543d72f50dd93517dc12ac8756efc3500f1b6ded68e05de54cf01c040_prof);

        
        $__internal_cc83325fe8e5b60db0c80303d93cf9aab88b4276cf8d38b5451a3d9d1d3c0d2c->leave($__internal_cc83325fe8e5b60db0c80303d93cf9aab88b4276cf8d38b5451a3d9d1d3c0d2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
