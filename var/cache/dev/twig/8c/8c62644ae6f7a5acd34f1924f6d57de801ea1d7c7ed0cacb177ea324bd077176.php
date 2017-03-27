<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_55de452d8b0179e832f487fd94f505ddb8c3005b997e0964d83add24b52ffcc9 extends Twig_Template
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
        $__internal_42b43c5e0fc108d0e1e5d268689690ed9cf33b89d77182da3f39706200c5c782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b43c5e0fc108d0e1e5d268689690ed9cf33b89d77182da3f39706200c5c782->enter($__internal_42b43c5e0fc108d0e1e5d268689690ed9cf33b89d77182da3f39706200c5c782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_80d50a989d47ee241d2e5b666620fa3405ddeda47aebf59de1aa119ea7b2c7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d50a989d47ee241d2e5b666620fa3405ddeda47aebf59de1aa119ea7b2c7e8->enter($__internal_80d50a989d47ee241d2e5b666620fa3405ddeda47aebf59de1aa119ea7b2c7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_42b43c5e0fc108d0e1e5d268689690ed9cf33b89d77182da3f39706200c5c782->leave($__internal_42b43c5e0fc108d0e1e5d268689690ed9cf33b89d77182da3f39706200c5c782_prof);

        
        $__internal_80d50a989d47ee241d2e5b666620fa3405ddeda47aebf59de1aa119ea7b2c7e8->leave($__internal_80d50a989d47ee241d2e5b666620fa3405ddeda47aebf59de1aa119ea7b2c7e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
