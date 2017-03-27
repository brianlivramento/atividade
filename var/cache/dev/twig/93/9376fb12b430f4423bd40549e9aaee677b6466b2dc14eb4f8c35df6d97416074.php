<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_97984f7cbd307ecd492bc706ee8a20d316cd77b4d7ddb8bd657bb2a9f5e08be9 extends Twig_Template
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
        $__internal_f62b08b62b0f75291977e1fe827a9fc04ade9b95a627992bd08e728a8c438a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62b08b62b0f75291977e1fe827a9fc04ade9b95a627992bd08e728a8c438a1b->enter($__internal_f62b08b62b0f75291977e1fe827a9fc04ade9b95a627992bd08e728a8c438a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d4aa1df3db2a7b75a0a87d3532ff4f2708e88154826fdb95ce5b2eaf237dd348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4aa1df3db2a7b75a0a87d3532ff4f2708e88154826fdb95ce5b2eaf237dd348->enter($__internal_d4aa1df3db2a7b75a0a87d3532ff4f2708e88154826fdb95ce5b2eaf237dd348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f62b08b62b0f75291977e1fe827a9fc04ade9b95a627992bd08e728a8c438a1b->leave($__internal_f62b08b62b0f75291977e1fe827a9fc04ade9b95a627992bd08e728a8c438a1b_prof);

        
        $__internal_d4aa1df3db2a7b75a0a87d3532ff4f2708e88154826fdb95ce5b2eaf237dd348->leave($__internal_d4aa1df3db2a7b75a0a87d3532ff4f2708e88154826fdb95ce5b2eaf237dd348_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
