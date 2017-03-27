<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_96c2ec46c11c02a7768ed9536cd1e5900e47430e64c419d39efdd5e9937d4617 extends Twig_Template
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
        $__internal_3e8b2ab40e8528b97817f0239ed30ce7a7900a35b65138c5ba76202323ce7656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8b2ab40e8528b97817f0239ed30ce7a7900a35b65138c5ba76202323ce7656->enter($__internal_3e8b2ab40e8528b97817f0239ed30ce7a7900a35b65138c5ba76202323ce7656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_02ba7041bbb94c9ef432d5674236bb34e897b78383ff82ecd27f18976409c95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ba7041bbb94c9ef432d5674236bb34e897b78383ff82ecd27f18976409c95a->enter($__internal_02ba7041bbb94c9ef432d5674236bb34e897b78383ff82ecd27f18976409c95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3e8b2ab40e8528b97817f0239ed30ce7a7900a35b65138c5ba76202323ce7656->leave($__internal_3e8b2ab40e8528b97817f0239ed30ce7a7900a35b65138c5ba76202323ce7656_prof);

        
        $__internal_02ba7041bbb94c9ef432d5674236bb34e897b78383ff82ecd27f18976409c95a->leave($__internal_02ba7041bbb94c9ef432d5674236bb34e897b78383ff82ecd27f18976409c95a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
