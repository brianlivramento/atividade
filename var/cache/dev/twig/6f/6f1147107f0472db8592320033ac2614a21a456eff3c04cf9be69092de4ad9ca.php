<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_681238283f81bad1081c8bf6f2cfe6f4b88996d7cdd14e050bd04f753872c941 extends Twig_Template
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
        $__internal_ea45e2e66779cb67b244bd048d2964306d6fd11efde9f547c11cc97f5049b82d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea45e2e66779cb67b244bd048d2964306d6fd11efde9f547c11cc97f5049b82d->enter($__internal_ea45e2e66779cb67b244bd048d2964306d6fd11efde9f547c11cc97f5049b82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_1d488242e379fc3c3d2960121a199f9b6bd11f684bc32ff99c3a5c63b6a2e6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d488242e379fc3c3d2960121a199f9b6bd11f684bc32ff99c3a5c63b6a2e6f2->enter($__internal_1d488242e379fc3c3d2960121a199f9b6bd11f684bc32ff99c3a5c63b6a2e6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ea45e2e66779cb67b244bd048d2964306d6fd11efde9f547c11cc97f5049b82d->leave($__internal_ea45e2e66779cb67b244bd048d2964306d6fd11efde9f547c11cc97f5049b82d_prof);

        
        $__internal_1d488242e379fc3c3d2960121a199f9b6bd11f684bc32ff99c3a5c63b6a2e6f2->leave($__internal_1d488242e379fc3c3d2960121a199f9b6bd11f684bc32ff99c3a5c63b6a2e6f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
