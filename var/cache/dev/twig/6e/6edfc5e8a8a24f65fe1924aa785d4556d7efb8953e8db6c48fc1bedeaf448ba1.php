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
        $__internal_5361edf118c917c97f6988b1a730ce5c11e374958a4649356a516a26733e1e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5361edf118c917c97f6988b1a730ce5c11e374958a4649356a516a26733e1e63->enter($__internal_5361edf118c917c97f6988b1a730ce5c11e374958a4649356a516a26733e1e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_eddb34ba3a0f491008af08e498b5ddf5867391585fbb817174fa61f7da1abbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eddb34ba3a0f491008af08e498b5ddf5867391585fbb817174fa61f7da1abbbd->enter($__internal_eddb34ba3a0f491008af08e498b5ddf5867391585fbb817174fa61f7da1abbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5361edf118c917c97f6988b1a730ce5c11e374958a4649356a516a26733e1e63->leave($__internal_5361edf118c917c97f6988b1a730ce5c11e374958a4649356a516a26733e1e63_prof);

        
        $__internal_eddb34ba3a0f491008af08e498b5ddf5867391585fbb817174fa61f7da1abbbd->leave($__internal_eddb34ba3a0f491008af08e498b5ddf5867391585fbb817174fa61f7da1abbbd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbee682071887c684229540d095bee56808a00695a09872dc0e3914afeab90ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbee682071887c684229540d095bee56808a00695a09872dc0e3914afeab90ce->enter($__internal_dbee682071887c684229540d095bee56808a00695a09872dc0e3914afeab90ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6207128957e68e35689f04152114cd4de1b7587a9a23e318d28d57a436b6a259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6207128957e68e35689f04152114cd4de1b7587a9a23e318d28d57a436b6a259->enter($__internal_6207128957e68e35689f04152114cd4de1b7587a9a23e318d28d57a436b6a259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6207128957e68e35689f04152114cd4de1b7587a9a23e318d28d57a436b6a259->leave($__internal_6207128957e68e35689f04152114cd4de1b7587a9a23e318d28d57a436b6a259_prof);

        
        $__internal_dbee682071887c684229540d095bee56808a00695a09872dc0e3914afeab90ce->leave($__internal_dbee682071887c684229540d095bee56808a00695a09872dc0e3914afeab90ce_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8298b2df2d24f08d2953befcb0875d27693c54c89930a3f6b81e05c14a231c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8298b2df2d24f08d2953befcb0875d27693c54c89930a3f6b81e05c14a231c57->enter($__internal_8298b2df2d24f08d2953befcb0875d27693c54c89930a3f6b81e05c14a231c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93fbff827cbd5bfb101cc664c647b09e3495f577e88575db263bed02201b9e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fbff827cbd5bfb101cc664c647b09e3495f577e88575db263bed02201b9e6b->enter($__internal_93fbff827cbd5bfb101cc664c647b09e3495f577e88575db263bed02201b9e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93fbff827cbd5bfb101cc664c647b09e3495f577e88575db263bed02201b9e6b->leave($__internal_93fbff827cbd5bfb101cc664c647b09e3495f577e88575db263bed02201b9e6b_prof);

        
        $__internal_8298b2df2d24f08d2953befcb0875d27693c54c89930a3f6b81e05c14a231c57->leave($__internal_8298b2df2d24f08d2953befcb0875d27693c54c89930a3f6b81e05c14a231c57_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3751b5524da89f38a1ea3a0eabdaf65d7b434dfe17115b0f14f93555d0e3659a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3751b5524da89f38a1ea3a0eabdaf65d7b434dfe17115b0f14f93555d0e3659a->enter($__internal_3751b5524da89f38a1ea3a0eabdaf65d7b434dfe17115b0f14f93555d0e3659a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fd1a7304c0dc7523482cbeec77d006ecd5ce4ba888eccdf8150d099a8fa32e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1a7304c0dc7523482cbeec77d006ecd5ce4ba888eccdf8150d099a8fa32e55->enter($__internal_fd1a7304c0dc7523482cbeec77d006ecd5ce4ba888eccdf8150d099a8fa32e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fd1a7304c0dc7523482cbeec77d006ecd5ce4ba888eccdf8150d099a8fa32e55->leave($__internal_fd1a7304c0dc7523482cbeec77d006ecd5ce4ba888eccdf8150d099a8fa32e55_prof);

        
        $__internal_3751b5524da89f38a1ea3a0eabdaf65d7b434dfe17115b0f14f93555d0e3659a->leave($__internal_3751b5524da89f38a1ea3a0eabdaf65d7b434dfe17115b0f14f93555d0e3659a_prof);

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
</html>", "base.html.twig", "/var/www/atividades/app/Resources/views/base.html.twig");
    }
}
