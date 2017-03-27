<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f05987d4b2d5765cf90d2f22f41e3d59f3b3e519f4170a2180c8ac7c9d616e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d950dd8baad167798c249b9296319d949493c91df9a480124205376520e5ec90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d950dd8baad167798c249b9296319d949493c91df9a480124205376520e5ec90->enter($__internal_d950dd8baad167798c249b9296319d949493c91df9a480124205376520e5ec90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_91a7382ae907eb8474952282b0513ccbb1f776effc7c2fd090606c677ce6c559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a7382ae907eb8474952282b0513ccbb1f776effc7c2fd090606c677ce6c559->enter($__internal_91a7382ae907eb8474952282b0513ccbb1f776effc7c2fd090606c677ce6c559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d950dd8baad167798c249b9296319d949493c91df9a480124205376520e5ec90->leave($__internal_d950dd8baad167798c249b9296319d949493c91df9a480124205376520e5ec90_prof);

        
        $__internal_91a7382ae907eb8474952282b0513ccbb1f776effc7c2fd090606c677ce6c559->leave($__internal_91a7382ae907eb8474952282b0513ccbb1f776effc7c2fd090606c677ce6c559_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b9a70d1cadc3ee03d9346d878c3bf323d65a04f9988501e2374b3578fe9a8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9a70d1cadc3ee03d9346d878c3bf323d65a04f9988501e2374b3578fe9a8c2->enter($__internal_0b9a70d1cadc3ee03d9346d878c3bf323d65a04f9988501e2374b3578fe9a8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eea6fab17a8310bfb62535090022aed8147734b297ada179e1e39738ee1d7c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea6fab17a8310bfb62535090022aed8147734b297ada179e1e39738ee1d7c56->enter($__internal_eea6fab17a8310bfb62535090022aed8147734b297ada179e1e39738ee1d7c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_eea6fab17a8310bfb62535090022aed8147734b297ada179e1e39738ee1d7c56->leave($__internal_eea6fab17a8310bfb62535090022aed8147734b297ada179e1e39738ee1d7c56_prof);

        
        $__internal_0b9a70d1cadc3ee03d9346d878c3bf323d65a04f9988501e2374b3578fe9a8c2->leave($__internal_0b9a70d1cadc3ee03d9346d878c3bf323d65a04f9988501e2374b3578fe9a8c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
