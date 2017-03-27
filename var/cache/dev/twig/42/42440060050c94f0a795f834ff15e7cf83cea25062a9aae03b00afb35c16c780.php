<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8b1291777c8ca9ef38a0e7c25b249115e16f0df4a95e24256122fb75a1a5c404 extends Twig_Template
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
        $__internal_9738754a84c959216f6ec827a1c4b0cc1c7e50142654e0d3a6135f4775f08694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9738754a84c959216f6ec827a1c4b0cc1c7e50142654e0d3a6135f4775f08694->enter($__internal_9738754a84c959216f6ec827a1c4b0cc1c7e50142654e0d3a6135f4775f08694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b461b236c26a4622ea27e63421b9927cb9f0d57696726773c90df5054ecda462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b461b236c26a4622ea27e63421b9927cb9f0d57696726773c90df5054ecda462->enter($__internal_b461b236c26a4622ea27e63421b9927cb9f0d57696726773c90df5054ecda462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9738754a84c959216f6ec827a1c4b0cc1c7e50142654e0d3a6135f4775f08694->leave($__internal_9738754a84c959216f6ec827a1c4b0cc1c7e50142654e0d3a6135f4775f08694_prof);

        
        $__internal_b461b236c26a4622ea27e63421b9927cb9f0d57696726773c90df5054ecda462->leave($__internal_b461b236c26a4622ea27e63421b9927cb9f0d57696726773c90df5054ecda462_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
