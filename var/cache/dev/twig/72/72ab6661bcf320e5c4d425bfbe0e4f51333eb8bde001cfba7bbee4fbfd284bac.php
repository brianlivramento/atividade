<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_14a6ae2f5811878dfde77c13333aeec9f7ef72165018b1d182beb24ac36b0ff1 extends Twig_Template
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
        $__internal_e3237c3d36ccd555a7e44187c76f40a5eebfbcf48d40f2cecb8b59a2efec6b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3237c3d36ccd555a7e44187c76f40a5eebfbcf48d40f2cecb8b59a2efec6b53->enter($__internal_e3237c3d36ccd555a7e44187c76f40a5eebfbcf48d40f2cecb8b59a2efec6b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1e53cf004fbbb94d22283e4bf4672cd3c5ebbcf05dbb26e2e1a35a1a25809d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e53cf004fbbb94d22283e4bf4672cd3c5ebbcf05dbb26e2e1a35a1a25809d11->enter($__internal_1e53cf004fbbb94d22283e4bf4672cd3c5ebbcf05dbb26e2e1a35a1a25809d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e3237c3d36ccd555a7e44187c76f40a5eebfbcf48d40f2cecb8b59a2efec6b53->leave($__internal_e3237c3d36ccd555a7e44187c76f40a5eebfbcf48d40f2cecb8b59a2efec6b53_prof);

        
        $__internal_1e53cf004fbbb94d22283e4bf4672cd3c5ebbcf05dbb26e2e1a35a1a25809d11->leave($__internal_1e53cf004fbbb94d22283e4bf4672cd3c5ebbcf05dbb26e2e1a35a1a25809d11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
