<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_278ad2f69e54ceabdca392d33c4489a8ea6e2564bd5c686f5ac8d70a12df54b7 extends Twig_Template
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
        $__internal_f5f40e2ac30104f2b879f31eb7d22452e7c2f407e7696ff0b5abe4233c0a41bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f40e2ac30104f2b879f31eb7d22452e7c2f407e7696ff0b5abe4233c0a41bf->enter($__internal_f5f40e2ac30104f2b879f31eb7d22452e7c2f407e7696ff0b5abe4233c0a41bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_533d75aa2a8f7ebfc367c6dfb555baf70e90f12efdea42d22daa8995e6dfcc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533d75aa2a8f7ebfc367c6dfb555baf70e90f12efdea42d22daa8995e6dfcc48->enter($__internal_533d75aa2a8f7ebfc367c6dfb555baf70e90f12efdea42d22daa8995e6dfcc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f5f40e2ac30104f2b879f31eb7d22452e7c2f407e7696ff0b5abe4233c0a41bf->leave($__internal_f5f40e2ac30104f2b879f31eb7d22452e7c2f407e7696ff0b5abe4233c0a41bf_prof);

        
        $__internal_533d75aa2a8f7ebfc367c6dfb555baf70e90f12efdea42d22daa8995e6dfcc48->leave($__internal_533d75aa2a8f7ebfc367c6dfb555baf70e90f12efdea42d22daa8995e6dfcc48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
