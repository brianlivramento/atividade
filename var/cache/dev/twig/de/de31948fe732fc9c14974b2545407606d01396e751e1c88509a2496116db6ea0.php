<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a79edb70d9f2980463380c5e39ce6bc21a352c15e3338d734fcb4c78d1e65b3c extends Twig_Template
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
        $__internal_3dfcfe01523ea7286be16fe37c74bc5cc35dab4572b48d19c38dce5fe466bdac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfcfe01523ea7286be16fe37c74bc5cc35dab4572b48d19c38dce5fe466bdac->enter($__internal_3dfcfe01523ea7286be16fe37c74bc5cc35dab4572b48d19c38dce5fe466bdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e6039e2a62137fce1a6dd8a6fb3d74249928fa3be8b43dae5d332c3b39bf68aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6039e2a62137fce1a6dd8a6fb3d74249928fa3be8b43dae5d332c3b39bf68aa->enter($__internal_e6039e2a62137fce1a6dd8a6fb3d74249928fa3be8b43dae5d332c3b39bf68aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3dfcfe01523ea7286be16fe37c74bc5cc35dab4572b48d19c38dce5fe466bdac->leave($__internal_3dfcfe01523ea7286be16fe37c74bc5cc35dab4572b48d19c38dce5fe466bdac_prof);

        
        $__internal_e6039e2a62137fce1a6dd8a6fb3d74249928fa3be8b43dae5d332c3b39bf68aa->leave($__internal_e6039e2a62137fce1a6dd8a6fb3d74249928fa3be8b43dae5d332c3b39bf68aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
