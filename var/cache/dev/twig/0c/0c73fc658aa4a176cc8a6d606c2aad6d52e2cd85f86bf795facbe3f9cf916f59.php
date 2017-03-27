<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_513ae33634307f8a29b4a4f106e3c804698093cce5c74ef4deaec207a244277d extends Twig_Template
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
        $__internal_1ae327b570f3d09ddd4d0557a794ee4f09e80bb11408eb780efc54f4d971924c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae327b570f3d09ddd4d0557a794ee4f09e80bb11408eb780efc54f4d971924c->enter($__internal_1ae327b570f3d09ddd4d0557a794ee4f09e80bb11408eb780efc54f4d971924c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c501a9db40d2ba76eefbfbf36944826e941e070694a1eeceb49799abafb9b87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c501a9db40d2ba76eefbfbf36944826e941e070694a1eeceb49799abafb9b87b->enter($__internal_c501a9db40d2ba76eefbfbf36944826e941e070694a1eeceb49799abafb9b87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_1ae327b570f3d09ddd4d0557a794ee4f09e80bb11408eb780efc54f4d971924c->leave($__internal_1ae327b570f3d09ddd4d0557a794ee4f09e80bb11408eb780efc54f4d971924c_prof);

        
        $__internal_c501a9db40d2ba76eefbfbf36944826e941e070694a1eeceb49799abafb9b87b->leave($__internal_c501a9db40d2ba76eefbfbf36944826e941e070694a1eeceb49799abafb9b87b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
