<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5d3f0c8eec27eb6ec7c3a06069109b7bc85987b4c7915b2fdf4d4204ab30bc12 extends Twig_Template
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
        $__internal_c1e14991e1927b8c7d473fd8f2b706dda7ee706414b943ae1a19b8cc5bc39b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e14991e1927b8c7d473fd8f2b706dda7ee706414b943ae1a19b8cc5bc39b4e->enter($__internal_c1e14991e1927b8c7d473fd8f2b706dda7ee706414b943ae1a19b8cc5bc39b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_35bf66a7ee847125ed4406e4eee9064c1a21646f8ba2376d170535a445f5a1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bf66a7ee847125ed4406e4eee9064c1a21646f8ba2376d170535a445f5a1b7->enter($__internal_35bf66a7ee847125ed4406e4eee9064c1a21646f8ba2376d170535a445f5a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c1e14991e1927b8c7d473fd8f2b706dda7ee706414b943ae1a19b8cc5bc39b4e->leave($__internal_c1e14991e1927b8c7d473fd8f2b706dda7ee706414b943ae1a19b8cc5bc39b4e_prof);

        
        $__internal_35bf66a7ee847125ed4406e4eee9064c1a21646f8ba2376d170535a445f5a1b7->leave($__internal_35bf66a7ee847125ed4406e4eee9064c1a21646f8ba2376d170535a445f5a1b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
