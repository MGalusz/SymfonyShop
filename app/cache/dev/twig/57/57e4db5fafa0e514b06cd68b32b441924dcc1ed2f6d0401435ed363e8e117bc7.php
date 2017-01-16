<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_58af2e43c1af4860397c4f2b08699c8a9edde866b576c4fb50ef77d713f521fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b02e420916fcd1d7cf137b4c839a273f1f6dc38f11166cedf2b99857f94808f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02e420916fcd1d7cf137b4c839a273f1f6dc38f11166cedf2b99857f94808f1->enter($__internal_b02e420916fcd1d7cf137b4c839a273f1f6dc38f11166cedf2b99857f94808f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b02e420916fcd1d7cf137b4c839a273f1f6dc38f11166cedf2b99857f94808f1->leave($__internal_b02e420916fcd1d7cf137b4c839a273f1f6dc38f11166cedf2b99857f94808f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90bc8ad92860df0a6a73bc7e2ea4e8b55c3cfe34335b7fdb43ebea5f1cef099e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90bc8ad92860df0a6a73bc7e2ea4e8b55c3cfe34335b7fdb43ebea5f1cef099e->enter($__internal_90bc8ad92860df0a6a73bc7e2ea4e8b55c3cfe34335b7fdb43ebea5f1cef099e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_90bc8ad92860df0a6a73bc7e2ea4e8b55c3cfe34335b7fdb43ebea5f1cef099e->leave($__internal_90bc8ad92860df0a6a73bc7e2ea4e8b55c3cfe34335b7fdb43ebea5f1cef099e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5330eb5b255d729cdd334e60982e74d71de9262f0511388e5a422dd6435f7b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5330eb5b255d729cdd334e60982e74d71de9262f0511388e5a422dd6435f7b51->enter($__internal_5330eb5b255d729cdd334e60982e74d71de9262f0511388e5a422dd6435f7b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5330eb5b255d729cdd334e60982e74d71de9262f0511388e5a422dd6435f7b51->leave($__internal_5330eb5b255d729cdd334e60982e74d71de9262f0511388e5a422dd6435f7b51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33168d64aaeab44ca4ad1f20eb825ff0d1bc2d567a2c6d8e5fddf675d73a096b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33168d64aaeab44ca4ad1f20eb825ff0d1bc2d567a2c6d8e5fddf675d73a096b->enter($__internal_33168d64aaeab44ca4ad1f20eb825ff0d1bc2d567a2c6d8e5fddf675d73a096b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_33168d64aaeab44ca4ad1f20eb825ff0d1bc2d567a2c6d8e5fddf675d73a096b->leave($__internal_33168d64aaeab44ca4ad1f20eb825ff0d1bc2d567a2c6d8e5fddf675d73a096b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Shop/Shop/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
