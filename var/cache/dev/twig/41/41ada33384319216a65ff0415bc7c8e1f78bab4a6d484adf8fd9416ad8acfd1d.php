<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3992c0d06b1f3c27c0e930f39b2ab63feeb74dda7e73c314d7a6ca19a194889f extends Twig_Template
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
        $__internal_062f16eb48ad5910b048e3d8b8203146ddcd1651b1f17e3dc61b4409d12f1139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062f16eb48ad5910b048e3d8b8203146ddcd1651b1f17e3dc61b4409d12f1139->enter($__internal_062f16eb48ad5910b048e3d8b8203146ddcd1651b1f17e3dc61b4409d12f1139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_08d31fdb5765134b7653b728aa0d75cdc2afe68ea736aaf7097fe1ba505882c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d31fdb5765134b7653b728aa0d75cdc2afe68ea736aaf7097fe1ba505882c8->enter($__internal_08d31fdb5765134b7653b728aa0d75cdc2afe68ea736aaf7097fe1ba505882c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_062f16eb48ad5910b048e3d8b8203146ddcd1651b1f17e3dc61b4409d12f1139->leave($__internal_062f16eb48ad5910b048e3d8b8203146ddcd1651b1f17e3dc61b4409d12f1139_prof);

        
        $__internal_08d31fdb5765134b7653b728aa0d75cdc2afe68ea736aaf7097fe1ba505882c8->leave($__internal_08d31fdb5765134b7653b728aa0d75cdc2afe68ea736aaf7097fe1ba505882c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
