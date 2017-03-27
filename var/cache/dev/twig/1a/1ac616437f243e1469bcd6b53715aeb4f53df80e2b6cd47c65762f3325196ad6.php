<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_70611e36ef8af73fbdfb2e9a4ba9b0c9a85964ec781a1189ec87c16cf8963b29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_39f8e72668b0edf8cd35bdce854c33f315494e5a81bbbacacc1710f1c208764e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f8e72668b0edf8cd35bdce854c33f315494e5a81bbbacacc1710f1c208764e->enter($__internal_39f8e72668b0edf8cd35bdce854c33f315494e5a81bbbacacc1710f1c208764e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3f7cfbbfab4964b386095b6010a098f044c991d8119fc9995a751827da73cc7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7cfbbfab4964b386095b6010a098f044c991d8119fc9995a751827da73cc7f->enter($__internal_3f7cfbbfab4964b386095b6010a098f044c991d8119fc9995a751827da73cc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39f8e72668b0edf8cd35bdce854c33f315494e5a81bbbacacc1710f1c208764e->leave($__internal_39f8e72668b0edf8cd35bdce854c33f315494e5a81bbbacacc1710f1c208764e_prof);

        
        $__internal_3f7cfbbfab4964b386095b6010a098f044c991d8119fc9995a751827da73cc7f->leave($__internal_3f7cfbbfab4964b386095b6010a098f044c991d8119fc9995a751827da73cc7f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c35fbe33c1bba58916902364fea28bdbbf7bf3fa3c0039c92456695670071e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c35fbe33c1bba58916902364fea28bdbbf7bf3fa3c0039c92456695670071e8->enter($__internal_1c35fbe33c1bba58916902364fea28bdbbf7bf3fa3c0039c92456695670071e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd6f071f13d6975d005cf200cc47a926d204dad6b1e78b27d8416942a52f233b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6f071f13d6975d005cf200cc47a926d204dad6b1e78b27d8416942a52f233b->enter($__internal_cd6f071f13d6975d005cf200cc47a926d204dad6b1e78b27d8416942a52f233b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cd6f071f13d6975d005cf200cc47a926d204dad6b1e78b27d8416942a52f233b->leave($__internal_cd6f071f13d6975d005cf200cc47a926d204dad6b1e78b27d8416942a52f233b_prof);

        
        $__internal_1c35fbe33c1bba58916902364fea28bdbbf7bf3fa3c0039c92456695670071e8->leave($__internal_1c35fbe33c1bba58916902364fea28bdbbf7bf3fa3c0039c92456695670071e8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e28d8eb6c7a080ee891325ce87f55d774bd5845094d5f1d70ce2d0d1a46542e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28d8eb6c7a080ee891325ce87f55d774bd5845094d5f1d70ce2d0d1a46542e0->enter($__internal_e28d8eb6c7a080ee891325ce87f55d774bd5845094d5f1d70ce2d0d1a46542e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_868794b7697d0a72b03a0582b589a076e7a25c87b2867654973c7f12b9a63c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868794b7697d0a72b03a0582b589a076e7a25c87b2867654973c7f12b9a63c86->enter($__internal_868794b7697d0a72b03a0582b589a076e7a25c87b2867654973c7f12b9a63c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_868794b7697d0a72b03a0582b589a076e7a25c87b2867654973c7f12b9a63c86->leave($__internal_868794b7697d0a72b03a0582b589a076e7a25c87b2867654973c7f12b9a63c86_prof);

        
        $__internal_e28d8eb6c7a080ee891325ce87f55d774bd5845094d5f1d70ce2d0d1a46542e0->leave($__internal_e28d8eb6c7a080ee891325ce87f55d774bd5845094d5f1d70ce2d0d1a46542e0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_63e59a989285c434a483943a46ca7fa0cf85d6ecaab940545fff19949b2060bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e59a989285c434a483943a46ca7fa0cf85d6ecaab940545fff19949b2060bb->enter($__internal_63e59a989285c434a483943a46ca7fa0cf85d6ecaab940545fff19949b2060bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ea0f450723be800cdf7b205a3737b1e33e1980548914efca025ac180a3a5d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea0f450723be800cdf7b205a3737b1e33e1980548914efca025ac180a3a5d9b->enter($__internal_6ea0f450723be800cdf7b205a3737b1e33e1980548914efca025ac180a3a5d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6ea0f450723be800cdf7b205a3737b1e33e1980548914efca025ac180a3a5d9b->leave($__internal_6ea0f450723be800cdf7b205a3737b1e33e1980548914efca025ac180a3a5d9b_prof);

        
        $__internal_63e59a989285c434a483943a46ca7fa0cf85d6ecaab940545fff19949b2060bb->leave($__internal_63e59a989285c434a483943a46ca7fa0cf85d6ecaab940545fff19949b2060bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
