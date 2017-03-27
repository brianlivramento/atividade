<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9794983738ed9abd12f8ab535214bd633a5b7ee5a95d97693ea1de0e621a6ca5 extends Twig_Template
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
        $__internal_e8ef3fd8015babf622c8b883dd2ccd90730796580d17e5f46aaa3ff894362dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ef3fd8015babf622c8b883dd2ccd90730796580d17e5f46aaa3ff894362dae->enter($__internal_e8ef3fd8015babf622c8b883dd2ccd90730796580d17e5f46aaa3ff894362dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b38908cfa664b1f59bdcdca2aa87b226dabf138e2741344a18e86201ee5535d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38908cfa664b1f59bdcdca2aa87b226dabf138e2741344a18e86201ee5535d8->enter($__internal_b38908cfa664b1f59bdcdca2aa87b226dabf138e2741344a18e86201ee5535d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e8ef3fd8015babf622c8b883dd2ccd90730796580d17e5f46aaa3ff894362dae->leave($__internal_e8ef3fd8015babf622c8b883dd2ccd90730796580d17e5f46aaa3ff894362dae_prof);

        
        $__internal_b38908cfa664b1f59bdcdca2aa87b226dabf138e2741344a18e86201ee5535d8->leave($__internal_b38908cfa664b1f59bdcdca2aa87b226dabf138e2741344a18e86201ee5535d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
