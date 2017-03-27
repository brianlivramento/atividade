<?php

/* base.html.twig */
class __TwigTemplate_fcffa5aebd625df35071cf0e2558e4a48d8b1ae903883d65b1ca0b6c803773ab extends Twig_Template
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
        $__internal_9251273955a86feb505bfde39ff4f20d95c502d47afc88d4130e56ada6c9b114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9251273955a86feb505bfde39ff4f20d95c502d47afc88d4130e56ada6c9b114->enter($__internal_9251273955a86feb505bfde39ff4f20d95c502d47afc88d4130e56ada6c9b114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a4137b27fb919438b521363667bc4d3965a909046f6046125b9f7bb4d40b3dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4137b27fb919438b521363667bc4d3965a909046f6046125b9f7bb4d40b3dda->enter($__internal_a4137b27fb919438b521363667bc4d3965a909046f6046125b9f7bb4d40b3dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9251273955a86feb505bfde39ff4f20d95c502d47afc88d4130e56ada6c9b114->leave($__internal_9251273955a86feb505bfde39ff4f20d95c502d47afc88d4130e56ada6c9b114_prof);

        
        $__internal_a4137b27fb919438b521363667bc4d3965a909046f6046125b9f7bb4d40b3dda->leave($__internal_a4137b27fb919438b521363667bc4d3965a909046f6046125b9f7bb4d40b3dda_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b433f3d3e2370dbbe995d207af1cfe88dd8bc0b099b5d422cbcc775654d764e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b433f3d3e2370dbbe995d207af1cfe88dd8bc0b099b5d422cbcc775654d764e->enter($__internal_0b433f3d3e2370dbbe995d207af1cfe88dd8bc0b099b5d422cbcc775654d764e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0bf4e1e26791ea027059c0f279ed23eefe0e812a6cd9360cce3702da23c1bc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf4e1e26791ea027059c0f279ed23eefe0e812a6cd9360cce3702da23c1bc55->enter($__internal_0bf4e1e26791ea027059c0f279ed23eefe0e812a6cd9360cce3702da23c1bc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0bf4e1e26791ea027059c0f279ed23eefe0e812a6cd9360cce3702da23c1bc55->leave($__internal_0bf4e1e26791ea027059c0f279ed23eefe0e812a6cd9360cce3702da23c1bc55_prof);

        
        $__internal_0b433f3d3e2370dbbe995d207af1cfe88dd8bc0b099b5d422cbcc775654d764e->leave($__internal_0b433f3d3e2370dbbe995d207af1cfe88dd8bc0b099b5d422cbcc775654d764e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_66d263ec88639f5328e93caa3077674ac6ee71caa7aadc87b5d022936e0daf0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d263ec88639f5328e93caa3077674ac6ee71caa7aadc87b5d022936e0daf0e->enter($__internal_66d263ec88639f5328e93caa3077674ac6ee71caa7aadc87b5d022936e0daf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ae3185a310b2c633f9d474bdcdf1e56ef0a966a0a5697b1730b83897cf073d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae3185a310b2c633f9d474bdcdf1e56ef0a966a0a5697b1730b83897cf073d5->enter($__internal_8ae3185a310b2c633f9d474bdcdf1e56ef0a966a0a5697b1730b83897cf073d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ae3185a310b2c633f9d474bdcdf1e56ef0a966a0a5697b1730b83897cf073d5->leave($__internal_8ae3185a310b2c633f9d474bdcdf1e56ef0a966a0a5697b1730b83897cf073d5_prof);

        
        $__internal_66d263ec88639f5328e93caa3077674ac6ee71caa7aadc87b5d022936e0daf0e->leave($__internal_66d263ec88639f5328e93caa3077674ac6ee71caa7aadc87b5d022936e0daf0e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61034050c298d81a441195b99850bdde1d719fb3ac3cfed2440ffdb786f7fd5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61034050c298d81a441195b99850bdde1d719fb3ac3cfed2440ffdb786f7fd5d->enter($__internal_61034050c298d81a441195b99850bdde1d719fb3ac3cfed2440ffdb786f7fd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d3196d27ca8fb65c18caab98686814bf005e9f7588ff64fbccba19036ad275b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3196d27ca8fb65c18caab98686814bf005e9f7588ff64fbccba19036ad275b4->enter($__internal_d3196d27ca8fb65c18caab98686814bf005e9f7588ff64fbccba19036ad275b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d3196d27ca8fb65c18caab98686814bf005e9f7588ff64fbccba19036ad275b4->leave($__internal_d3196d27ca8fb65c18caab98686814bf005e9f7588ff64fbccba19036ad275b4_prof);

        
        $__internal_61034050c298d81a441195b99850bdde1d719fb3ac3cfed2440ffdb786f7fd5d->leave($__internal_61034050c298d81a441195b99850bdde1d719fb3ac3cfed2440ffdb786f7fd5d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
</html>", "base.html.twig", "/var/www/atividade/app/Resources/views/base.html.twig");
    }
}
