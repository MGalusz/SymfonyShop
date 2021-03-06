<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2e5fbdcdd0487ad1547049faf21e756cfa4be5d569b25c2e04c7c53c90a2b104 extends Twig_Template
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
        $__internal_0a980699044a157e9bfaa5e7eb2a2ce3af552f9e0c01f4a4610db4ace6e5def1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a980699044a157e9bfaa5e7eb2a2ce3af552f9e0c01f4a4610db4ace6e5def1->enter($__internal_0a980699044a157e9bfaa5e7eb2a2ce3af552f9e0c01f4a4610db4ace6e5def1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a980699044a157e9bfaa5e7eb2a2ce3af552f9e0c01f4a4610db4ace6e5def1->leave($__internal_0a980699044a157e9bfaa5e7eb2a2ce3af552f9e0c01f4a4610db4ace6e5def1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc7535997fa92a725517123a08c777180c9538d668435de9a03d40f67fd1727d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7535997fa92a725517123a08c777180c9538d668435de9a03d40f67fd1727d->enter($__internal_fc7535997fa92a725517123a08c777180c9538d668435de9a03d40f67fd1727d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc7535997fa92a725517123a08c777180c9538d668435de9a03d40f67fd1727d->leave($__internal_fc7535997fa92a725517123a08c777180c9538d668435de9a03d40f67fd1727d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5d9bab7948efa1615eaa7d8d992d9ab4792e8ac468d2cca9d63d7adcbdf1851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d9bab7948efa1615eaa7d8d992d9ab4792e8ac468d2cca9d63d7adcbdf1851->enter($__internal_b5d9bab7948efa1615eaa7d8d992d9ab4792e8ac468d2cca9d63d7adcbdf1851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b5d9bab7948efa1615eaa7d8d992d9ab4792e8ac468d2cca9d63d7adcbdf1851->leave($__internal_b5d9bab7948efa1615eaa7d8d992d9ab4792e8ac468d2cca9d63d7adcbdf1851_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_79b6ceb905a4ff32abf1bb8331fafaafb66df2608a908182fbb171193b0b487a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b6ceb905a4ff32abf1bb8331fafaafb66df2608a908182fbb171193b0b487a->enter($__internal_79b6ceb905a4ff32abf1bb8331fafaafb66df2608a908182fbb171193b0b487a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_79b6ceb905a4ff32abf1bb8331fafaafb66df2608a908182fbb171193b0b487a->leave($__internal_79b6ceb905a4ff32abf1bb8331fafaafb66df2608a908182fbb171193b0b487a_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/SymfonyShop/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
