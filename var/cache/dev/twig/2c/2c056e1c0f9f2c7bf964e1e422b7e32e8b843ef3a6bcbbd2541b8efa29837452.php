<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_38e037e47066014282d8f1c2202b8c84ee2349cdad23d29482e1aa51dfc9b85f extends Twig_Template
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
        $__internal_f5466ad938b93309931809ffa4dd59dcade558f1471e9c25f0aefabf8c41d78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5466ad938b93309931809ffa4dd59dcade558f1471e9c25f0aefabf8c41d78f->enter($__internal_f5466ad938b93309931809ffa4dd59dcade558f1471e9c25f0aefabf8c41d78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d346d43d8c710298c4375295982c3b70bce4adc4289ba1dd14cf623a5e56fca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d346d43d8c710298c4375295982c3b70bce4adc4289ba1dd14cf623a5e56fca8->enter($__internal_d346d43d8c710298c4375295982c3b70bce4adc4289ba1dd14cf623a5e56fca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f5466ad938b93309931809ffa4dd59dcade558f1471e9c25f0aefabf8c41d78f->leave($__internal_f5466ad938b93309931809ffa4dd59dcade558f1471e9c25f0aefabf8c41d78f_prof);

        
        $__internal_d346d43d8c710298c4375295982c3b70bce4adc4289ba1dd14cf623a5e56fca8->leave($__internal_d346d43d8c710298c4375295982c3b70bce4adc4289ba1dd14cf623a5e56fca8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
