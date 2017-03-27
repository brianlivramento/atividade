<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1dc24dabedba78fe92a2c5900a99430792c008ba777cc5401563b246ed0149f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0866e6c200124840fcb63248387b88f03e0a36481d4b5d4a15647041fd575f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0866e6c200124840fcb63248387b88f03e0a36481d4b5d4a15647041fd575f5d->enter($__internal_0866e6c200124840fcb63248387b88f03e0a36481d4b5d4a15647041fd575f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2a332965f57f4854374369dbd683961fbf511ba69173b9ebc531c7885b6ce873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a332965f57f4854374369dbd683961fbf511ba69173b9ebc531c7885b6ce873->enter($__internal_2a332965f57f4854374369dbd683961fbf511ba69173b9ebc531c7885b6ce873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0866e6c200124840fcb63248387b88f03e0a36481d4b5d4a15647041fd575f5d->leave($__internal_0866e6c200124840fcb63248387b88f03e0a36481d4b5d4a15647041fd575f5d_prof);

        
        $__internal_2a332965f57f4854374369dbd683961fbf511ba69173b9ebc531c7885b6ce873->leave($__internal_2a332965f57f4854374369dbd683961fbf511ba69173b9ebc531c7885b6ce873_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_786c459d2e7917fddaae79b2e05e1ef751513d43c2e120bc03558e7ce36b367e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786c459d2e7917fddaae79b2e05e1ef751513d43c2e120bc03558e7ce36b367e->enter($__internal_786c459d2e7917fddaae79b2e05e1ef751513d43c2e120bc03558e7ce36b367e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_24c3feac8c31dd3517ad1122bc1d74b4681490843da4789640fbdf4bd69740b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c3feac8c31dd3517ad1122bc1d74b4681490843da4789640fbdf4bd69740b9->enter($__internal_24c3feac8c31dd3517ad1122bc1d74b4681490843da4789640fbdf4bd69740b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_24c3feac8c31dd3517ad1122bc1d74b4681490843da4789640fbdf4bd69740b9->leave($__internal_24c3feac8c31dd3517ad1122bc1d74b4681490843da4789640fbdf4bd69740b9_prof);

        
        $__internal_786c459d2e7917fddaae79b2e05e1ef751513d43c2e120bc03558e7ce36b367e->leave($__internal_786c459d2e7917fddaae79b2e05e1ef751513d43c2e120bc03558e7ce36b367e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
