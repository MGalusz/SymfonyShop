<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3db52b776d1593f7fa1c68c396db43b4acea7e622b8222540d292395ce85116d extends Twig_Template
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
        $__internal_c96ce5ffc91f50cf6f1706473ffeb8745d7846e5aa22cf271f6cbead01f2a0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96ce5ffc91f50cf6f1706473ffeb8745d7846e5aa22cf271f6cbead01f2a0da->enter($__internal_c96ce5ffc91f50cf6f1706473ffeb8745d7846e5aa22cf271f6cbead01f2a0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96ce5ffc91f50cf6f1706473ffeb8745d7846e5aa22cf271f6cbead01f2a0da->leave($__internal_c96ce5ffc91f50cf6f1706473ffeb8745d7846e5aa22cf271f6cbead01f2a0da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_971d25247b23d2b469ccb79ef2d0c54d8eb061ee62704ffccc30e0ee45816f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971d25247b23d2b469ccb79ef2d0c54d8eb061ee62704ffccc30e0ee45816f09->enter($__internal_971d25247b23d2b469ccb79ef2d0c54d8eb061ee62704ffccc30e0ee45816f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_971d25247b23d2b469ccb79ef2d0c54d8eb061ee62704ffccc30e0ee45816f09->leave($__internal_971d25247b23d2b469ccb79ef2d0c54d8eb061ee62704ffccc30e0ee45816f09_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c0f58adcff251cbca95e51ad57039e79d27d863cffd5e36186adca6d2202e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0f58adcff251cbca95e51ad57039e79d27d863cffd5e36186adca6d2202e69->enter($__internal_2c0f58adcff251cbca95e51ad57039e79d27d863cffd5e36186adca6d2202e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c0f58adcff251cbca95e51ad57039e79d27d863cffd5e36186adca6d2202e69->leave($__internal_2c0f58adcff251cbca95e51ad57039e79d27d863cffd5e36186adca6d2202e69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a9abf2d84faa9b7e5d4cd9f273dcbfed3ffcb1e1167e48d612ed69e13833089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9abf2d84faa9b7e5d4cd9f273dcbfed3ffcb1e1167e48d612ed69e13833089->enter($__internal_9a9abf2d84faa9b7e5d4cd9f273dcbfed3ffcb1e1167e48d612ed69e13833089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a9abf2d84faa9b7e5d4cd9f273dcbfed3ffcb1e1167e48d612ed69e13833089->leave($__internal_9a9abf2d84faa9b7e5d4cd9f273dcbfed3ffcb1e1167e48d612ed69e13833089_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/SymfonyShop/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
