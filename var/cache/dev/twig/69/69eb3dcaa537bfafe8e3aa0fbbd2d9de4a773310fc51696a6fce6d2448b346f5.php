<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b9db324348e65c76a61d8d2e261cd0ed574b6a9ceff962bf293a1ad701d37e77 extends Twig_Template
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
        $__internal_59a002feb444645fd8a8998f0dc3c466a39dbc3378e99347dcb8f0491dafef47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a002feb444645fd8a8998f0dc3c466a39dbc3378e99347dcb8f0491dafef47->enter($__internal_59a002feb444645fd8a8998f0dc3c466a39dbc3378e99347dcb8f0491dafef47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_08350dab6a655b9173b9243e09917d65fd83c04cd1a736c3838d8551ccf14fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08350dab6a655b9173b9243e09917d65fd83c04cd1a736c3838d8551ccf14fa7->enter($__internal_08350dab6a655b9173b9243e09917d65fd83c04cd1a736c3838d8551ccf14fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_59a002feb444645fd8a8998f0dc3c466a39dbc3378e99347dcb8f0491dafef47->leave($__internal_59a002feb444645fd8a8998f0dc3c466a39dbc3378e99347dcb8f0491dafef47_prof);

        
        $__internal_08350dab6a655b9173b9243e09917d65fd83c04cd1a736c3838d8551ccf14fa7->leave($__internal_08350dab6a655b9173b9243e09917d65fd83c04cd1a736c3838d8551ccf14fa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
