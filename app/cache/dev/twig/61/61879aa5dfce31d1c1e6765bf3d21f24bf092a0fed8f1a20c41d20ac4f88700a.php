<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6db14989e6e6a92f05a806987f59daf54fa9a7b72090cbc9aa80f529b48275de extends Twig_Template
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
        $__internal_35682b545c2de756b82cae98abcec81a328e6b60b1a51a1c7fdb068c842031ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35682b545c2de756b82cae98abcec81a328e6b60b1a51a1c7fdb068c842031ee->enter($__internal_35682b545c2de756b82cae98abcec81a328e6b60b1a51a1c7fdb068c842031ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35682b545c2de756b82cae98abcec81a328e6b60b1a51a1c7fdb068c842031ee->leave($__internal_35682b545c2de756b82cae98abcec81a328e6b60b1a51a1c7fdb068c842031ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_86973df6fdcbf874650529842f9197ad49a8ead0fd9e56c60bc139dabb408d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86973df6fdcbf874650529842f9197ad49a8ead0fd9e56c60bc139dabb408d58->enter($__internal_86973df6fdcbf874650529842f9197ad49a8ead0fd9e56c60bc139dabb408d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_86973df6fdcbf874650529842f9197ad49a8ead0fd9e56c60bc139dabb408d58->leave($__internal_86973df6fdcbf874650529842f9197ad49a8ead0fd9e56c60bc139dabb408d58_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_09667ac0e650cc21da0774a2da39f0e166066dd5baae974dcdd017308828fdd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09667ac0e650cc21da0774a2da39f0e166066dd5baae974dcdd017308828fdd3->enter($__internal_09667ac0e650cc21da0774a2da39f0e166066dd5baae974dcdd017308828fdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_09667ac0e650cc21da0774a2da39f0e166066dd5baae974dcdd017308828fdd3->leave($__internal_09667ac0e650cc21da0774a2da39f0e166066dd5baae974dcdd017308828fdd3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4323d7d18f0b63bd1778b1eec5e86133023939595ea3f4e743f61036e255324b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4323d7d18f0b63bd1778b1eec5e86133023939595ea3f4e743f61036e255324b->enter($__internal_4323d7d18f0b63bd1778b1eec5e86133023939595ea3f4e743f61036e255324b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4323d7d18f0b63bd1778b1eec5e86133023939595ea3f4e743f61036e255324b->leave($__internal_4323d7d18f0b63bd1778b1eec5e86133023939595ea3f4e743f61036e255324b_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Shop/Shop/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
