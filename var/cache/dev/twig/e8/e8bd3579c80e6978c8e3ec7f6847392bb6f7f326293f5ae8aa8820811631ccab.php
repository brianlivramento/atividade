<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_37df66717470cf83f3cdf5917c3c28f3a9e3f57be5e4a119f13386c488ea5993 extends Twig_Template
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
        $__internal_12ffb9feba1c19e6683a7a3bfdac49e0add6f9a1b24bf907f33c81ba8189def5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ffb9feba1c19e6683a7a3bfdac49e0add6f9a1b24bf907f33c81ba8189def5->enter($__internal_12ffb9feba1c19e6683a7a3bfdac49e0add6f9a1b24bf907f33c81ba8189def5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_dd8066d3429555d3f004a8485dc2e08a979e17666a730c9e370804e43906eef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8066d3429555d3f004a8485dc2e08a979e17666a730c9e370804e43906eef5->enter($__internal_dd8066d3429555d3f004a8485dc2e08a979e17666a730c9e370804e43906eef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_12ffb9feba1c19e6683a7a3bfdac49e0add6f9a1b24bf907f33c81ba8189def5->leave($__internal_12ffb9feba1c19e6683a7a3bfdac49e0add6f9a1b24bf907f33c81ba8189def5_prof);

        
        $__internal_dd8066d3429555d3f004a8485dc2e08a979e17666a730c9e370804e43906eef5->leave($__internal_dd8066d3429555d3f004a8485dc2e08a979e17666a730c9e370804e43906eef5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/atividade/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
