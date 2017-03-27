<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e3ca1d0e0ce71a37affe3741d2db354569881cae5850814e2d81f06fdcddc9f5 extends Twig_Template
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
        $__internal_26b6bd6e791c949dbbdf17dda1e52659ff9677af32de05d26ed32f061002fa7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b6bd6e791c949dbbdf17dda1e52659ff9677af32de05d26ed32f061002fa7f->enter($__internal_26b6bd6e791c949dbbdf17dda1e52659ff9677af32de05d26ed32f061002fa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2ece281131b2ffaf73e205e155ad6abffed9498ea135fb9a8c12b3aa52881277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ece281131b2ffaf73e205e155ad6abffed9498ea135fb9a8c12b3aa52881277->enter($__internal_2ece281131b2ffaf73e205e155ad6abffed9498ea135fb9a8c12b3aa52881277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_26b6bd6e791c949dbbdf17dda1e52659ff9677af32de05d26ed32f061002fa7f->leave($__internal_26b6bd6e791c949dbbdf17dda1e52659ff9677af32de05d26ed32f061002fa7f_prof);

        
        $__internal_2ece281131b2ffaf73e205e155ad6abffed9498ea135fb9a8c12b3aa52881277->leave($__internal_2ece281131b2ffaf73e205e155ad6abffed9498ea135fb9a8c12b3aa52881277_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
