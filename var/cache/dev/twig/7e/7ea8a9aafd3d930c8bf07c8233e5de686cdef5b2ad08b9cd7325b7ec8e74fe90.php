<?php

/* AtividadeCoreBundle:Atividade:base.html.twig */
class __TwigTemplate_3c3163c8338604e8c79c27deffc6b58a9e6c2ec22a41c297918c701ca4ba2198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b16b3c4a3f39c1c99e23ced1a8acbc3bd0019aea2fe892d8668a238c351784dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16b3c4a3f39c1c99e23ced1a8acbc3bd0019aea2fe892d8668a238c351784dd->enter($__internal_b16b3c4a3f39c1c99e23ced1a8acbc3bd0019aea2fe892d8668a238c351784dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeCoreBundle:Atividade:base.html.twig"));

        $__internal_76ebfc3850c752277217233a80e3b722fdb30e6fb2c30311efc091a4abdc7001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ebfc3850c752277217233a80e3b722fdb30e6fb2c30311efc091a4abdc7001->enter($__internal_76ebfc3850c752277217233a80e3b722fdb30e6fb2c30311efc091a4abdc7001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AtividadeCoreBundle:Atividade:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
  </head>
  <body>
    <div class=\"container\">
      ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "      ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  </body>
</html>";
        
        $__internal_b16b3c4a3f39c1c99e23ced1a8acbc3bd0019aea2fe892d8668a238c351784dd->leave($__internal_b16b3c4a3f39c1c99e23ced1a8acbc3bd0019aea2fe892d8668a238c351784dd_prof);

        
        $__internal_76ebfc3850c752277217233a80e3b722fdb30e6fb2c30311efc091a4abdc7001->leave($__internal_76ebfc3850c752277217233a80e3b722fdb30e6fb2c30311efc091a4abdc7001_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_279ca025cdc4c5425c4de9b43e6b6dc343599c5584c522f5cd173fc1ba8c7a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279ca025cdc4c5425c4de9b43e6b6dc343599c5584c522f5cd173fc1ba8c7a4d->enter($__internal_279ca025cdc4c5425c4de9b43e6b6dc343599c5584c522f5cd173fc1ba8c7a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38e00dd0f31390bb492f0996c7e1545984257fe618590ff8e716b950a7a7a6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e00dd0f31390bb492f0996c7e1545984257fe618590ff8e716b950a7a7a6b4->enter($__internal_38e00dd0f31390bb492f0996c7e1545984257fe618590ff8e716b950a7a7a6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_38e00dd0f31390bb492f0996c7e1545984257fe618590ff8e716b950a7a7a6b4->leave($__internal_38e00dd0f31390bb492f0996c7e1545984257fe618590ff8e716b950a7a7a6b4_prof);

        
        $__internal_279ca025cdc4c5425c4de9b43e6b6dc343599c5584c522f5cd173fc1ba8c7a4d->leave($__internal_279ca025cdc4c5425c4de9b43e6b6dc343599c5584c522f5cd173fc1ba8c7a4d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_be70949d9c058939cd6e11f7cff76c4d70004a82ea2cb8e2f1ec1520b9228078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be70949d9c058939cd6e11f7cff76c4d70004a82ea2cb8e2f1ec1520b9228078->enter($__internal_be70949d9c058939cd6e11f7cff76c4d70004a82ea2cb8e2f1ec1520b9228078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46763eed9cafe1fb902530de74e0dc4acfdb8c55d39b3174e9bb7bc0524dfa78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46763eed9cafe1fb902530de74e0dc4acfdb8c55d39b3174e9bb7bc0524dfa78->enter($__internal_46763eed9cafe1fb902530de74e0dc4acfdb8c55d39b3174e9bb7bc0524dfa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_46763eed9cafe1fb902530de74e0dc4acfdb8c55d39b3174e9bb7bc0524dfa78->leave($__internal_46763eed9cafe1fb902530de74e0dc4acfdb8c55d39b3174e9bb7bc0524dfa78_prof);

        
        $__internal_be70949d9c058939cd6e11f7cff76c4d70004a82ea2cb8e2f1ec1520b9228078->leave($__internal_be70949d9c058939cd6e11f7cff76c4d70004a82ea2cb8e2f1ec1520b9228078_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e34d1fec9308fb83f56c70aa496a85ca31a66a09557d6385896c4e8453585f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34d1fec9308fb83f56c70aa496a85ca31a66a09557d6385896c4e8453585f4d->enter($__internal_e34d1fec9308fb83f56c70aa496a85ca31a66a09557d6385896c4e8453585f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3bcd699af3727e0e528aff98c390822fac16d7e552f5c9168c0f90aadf4739b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcd699af3727e0e528aff98c390822fac16d7e552f5c9168c0f90aadf4739b9->enter($__internal_3bcd699af3727e0e528aff98c390822fac16d7e552f5c9168c0f90aadf4739b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3bcd699af3727e0e528aff98c390822fac16d7e552f5c9168c0f90aadf4739b9->leave($__internal_3bcd699af3727e0e528aff98c390822fac16d7e552f5c9168c0f90aadf4739b9_prof);

        
        $__internal_e34d1fec9308fb83f56c70aa496a85ca31a66a09557d6385896c4e8453585f4d->leave($__internal_e34d1fec9308fb83f56c70aa496a85ca31a66a09557d6385896c4e8453585f4d_prof);

    }

    public function getTemplateName()
    {
        return "AtividadeCoreBundle:Atividade:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 13,  80 => 12,  63 => 7,  49 => 14,  46 => 13,  44 => 12,  36 => 7,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}{% endblock %}</title>
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
  </head>
  <body>
    <div class=\"container\">
      {% block body %}{% endblock %}
      {% block javascripts %}{% endblock %}
    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  </body>
</html>", "AtividadeCoreBundle:Atividade:base.html.twig", "/var/www/atividades/src/Atividade/CoreBundle/Resources/views/Atividade/base.html.twig");
    }
}
