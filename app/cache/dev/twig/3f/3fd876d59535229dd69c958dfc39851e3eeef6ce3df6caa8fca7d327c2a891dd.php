<?php

/* @App/user/new.html.twig */
class __TwigTemplate_a78d2e9427982265443c52a0d6959a29e8bc0dd92f520eace129ad2d054d1ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/base.html.twig", "@App/user/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4be1b0244f20e14c9ab9c83df09623eed74af41b55d3215cce2472d6f233b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4be1b0244f20e14c9ab9c83df09623eed74af41b55d3215cce2472d6f233b48->enter($__internal_f4be1b0244f20e14c9ab9c83df09623eed74af41b55d3215cce2472d6f233b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4be1b0244f20e14c9ab9c83df09623eed74af41b55d3215cce2472d6f233b48->leave($__internal_f4be1b0244f20e14c9ab9c83df09623eed74af41b55d3215cce2472d6f233b48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e785febdfba5c9b35e5956a781d1052e5b0c3fb728085b3b1eae419a9b0021e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e785febdfba5c9b35e5956a781d1052e5b0c3fb728085b3b1eae419a9b0021e->enter($__internal_4e785febdfba5c9b35e5956a781d1052e5b0c3fb728085b3b1eae419a9b0021e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"'col-md-4 col-md-offset-4\"><br>
    <h1>Stworz nowego użytownika</h1>
</div>

<div class=\"'col-md-4 col-md-offset-4\"><br>
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_4e785febdfba5c9b35e5956a781d1052e5b0c3fb728085b3b1eae419a9b0021e->leave($__internal_4e785febdfba5c9b35e5956a781d1052e5b0c3fb728085b3b1eae419a9b0021e_prof);

    }

    public function getTemplateName()
    {
        return "@App/user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@App/base.html.twig' %}

{% block body %}
<div class=\"'col-md-4 col-md-offset-4\"><br>
    <h1>Stworz nowego użytownika</h1>
</div>

<div class=\"'col-md-4 col-md-offset-4\"><br>
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}
</div>
{% endblock %}
", "@App/user/new.html.twig", "/var/www/html/Shop/Shop/src/AppBundle/Resources/views/user/new.html.twig");
    }
}
