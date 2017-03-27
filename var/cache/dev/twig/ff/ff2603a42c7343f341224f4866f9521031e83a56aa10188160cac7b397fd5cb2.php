<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b03481cb9dd7e7237be076eb647ee577030a397ea305f277cc5f0e3ce43a874f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0443327c03f5bc06266f2568550e1ae16bc1bef2fa375147b9870b063a848ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0443327c03f5bc06266f2568550e1ae16bc1bef2fa375147b9870b063a848ba->enter($__internal_e0443327c03f5bc06266f2568550e1ae16bc1bef2fa375147b9870b063a848ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_16c33e42d8d8a52cede438f49a1048dbfb388b3c0f1fe94187185a9c0419bb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c33e42d8d8a52cede438f49a1048dbfb388b3c0f1fe94187185a9c0419bb32->enter($__internal_16c33e42d8d8a52cede438f49a1048dbfb388b3c0f1fe94187185a9c0419bb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0443327c03f5bc06266f2568550e1ae16bc1bef2fa375147b9870b063a848ba->leave($__internal_e0443327c03f5bc06266f2568550e1ae16bc1bef2fa375147b9870b063a848ba_prof);

        
        $__internal_16c33e42d8d8a52cede438f49a1048dbfb388b3c0f1fe94187185a9c0419bb32->leave($__internal_16c33e42d8d8a52cede438f49a1048dbfb388b3c0f1fe94187185a9c0419bb32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42dd52993c969eb708713bd56eb8936c9296249e7c276aabd60ce014f93d5222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42dd52993c969eb708713bd56eb8936c9296249e7c276aabd60ce014f93d5222->enter($__internal_42dd52993c969eb708713bd56eb8936c9296249e7c276aabd60ce014f93d5222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a518118361d0ae36f97c10a462da04978e091d920784f0375a97953436e774c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a518118361d0ae36f97c10a462da04978e091d920784f0375a97953436e774c->enter($__internal_7a518118361d0ae36f97c10a462da04978e091d920784f0375a97953436e774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7a518118361d0ae36f97c10a462da04978e091d920784f0375a97953436e774c->leave($__internal_7a518118361d0ae36f97c10a462da04978e091d920784f0375a97953436e774c_prof);

        
        $__internal_42dd52993c969eb708713bd56eb8936c9296249e7c276aabd60ce014f93d5222->leave($__internal_42dd52993c969eb708713bd56eb8936c9296249e7c276aabd60ce014f93d5222_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d305d3cbdf42189abe48cf28796a5e52fc318f8a52ccb94af69443eb0a640d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d305d3cbdf42189abe48cf28796a5e52fc318f8a52ccb94af69443eb0a640d9d->enter($__internal_d305d3cbdf42189abe48cf28796a5e52fc318f8a52ccb94af69443eb0a640d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_695cf00396069ad06d9d183de7d02db2b679902b440cc3f1b511c96943364dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695cf00396069ad06d9d183de7d02db2b679902b440cc3f1b511c96943364dad->enter($__internal_695cf00396069ad06d9d183de7d02db2b679902b440cc3f1b511c96943364dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_695cf00396069ad06d9d183de7d02db2b679902b440cc3f1b511c96943364dad->leave($__internal_695cf00396069ad06d9d183de7d02db2b679902b440cc3f1b511c96943364dad_prof);

        
        $__internal_d305d3cbdf42189abe48cf28796a5e52fc318f8a52ccb94af69443eb0a640d9d->leave($__internal_d305d3cbdf42189abe48cf28796a5e52fc318f8a52ccb94af69443eb0a640d9d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
