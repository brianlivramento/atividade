<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b0e5da753aa1cdffcb94211a859eaaa328c0d426f6af727a6f7e69857a03f794 extends Twig_Template
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
        $__internal_5a5e4cf96af5afecaacdaf17b4b110fb9e001309727c75483f0f91cc0da594bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5e4cf96af5afecaacdaf17b4b110fb9e001309727c75483f0f91cc0da594bf->enter($__internal_5a5e4cf96af5afecaacdaf17b4b110fb9e001309727c75483f0f91cc0da594bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2c2df81992b1fbad4162f71cddd5d5e7c68f2dacd8b11f13743e962e1a99d1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2df81992b1fbad4162f71cddd5d5e7c68f2dacd8b11f13743e962e1a99d1a9->enter($__internal_2c2df81992b1fbad4162f71cddd5d5e7c68f2dacd8b11f13743e962e1a99d1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5a5e4cf96af5afecaacdaf17b4b110fb9e001309727c75483f0f91cc0da594bf->leave($__internal_5a5e4cf96af5afecaacdaf17b4b110fb9e001309727c75483f0f91cc0da594bf_prof);

        
        $__internal_2c2df81992b1fbad4162f71cddd5d5e7c68f2dacd8b11f13743e962e1a99d1a9->leave($__internal_2c2df81992b1fbad4162f71cddd5d5e7c68f2dacd8b11f13743e962e1a99d1a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
