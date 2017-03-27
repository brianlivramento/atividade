<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e45fecf8a55de68004bbee1cdc147ba94016a8c7a2a9b83d3492ccd8c5bcce5a extends Twig_Template
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
        $__internal_6401111dead0bed6177e951db146406d03cad313cbd53dc00c454f89fbdbc4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6401111dead0bed6177e951db146406d03cad313cbd53dc00c454f89fbdbc4d8->enter($__internal_6401111dead0bed6177e951db146406d03cad313cbd53dc00c454f89fbdbc4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_120fb74936a39b6ce62ee570e9071b2c314c13baa563dbc8829a7a06d87c00ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120fb74936a39b6ce62ee570e9071b2c314c13baa563dbc8829a7a06d87c00ae->enter($__internal_120fb74936a39b6ce62ee570e9071b2c314c13baa563dbc8829a7a06d87c00ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6401111dead0bed6177e951db146406d03cad313cbd53dc00c454f89fbdbc4d8->leave($__internal_6401111dead0bed6177e951db146406d03cad313cbd53dc00c454f89fbdbc4d8_prof);

        
        $__internal_120fb74936a39b6ce62ee570e9071b2c314c13baa563dbc8829a7a06d87c00ae->leave($__internal_120fb74936a39b6ce62ee570e9071b2c314c13baa563dbc8829a7a06d87c00ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
