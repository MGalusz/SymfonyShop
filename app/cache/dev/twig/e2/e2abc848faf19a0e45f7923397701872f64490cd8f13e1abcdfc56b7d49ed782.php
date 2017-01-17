<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_74b6f0673bdcda02f72f0445852b8fc06d6c2143326c4c22b6c1d43fb0a0824f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5ad018b61eb9b1912294fc327a00799774d0cb2db56f68c4fe5f3009ac4a43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ad018b61eb9b1912294fc327a00799774d0cb2db56f68c4fe5f3009ac4a43e->enter($__internal_e5ad018b61eb9b1912294fc327a00799774d0cb2db56f68c4fe5f3009ac4a43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5ad018b61eb9b1912294fc327a00799774d0cb2db56f68c4fe5f3009ac4a43e->leave($__internal_e5ad018b61eb9b1912294fc327a00799774d0cb2db56f68c4fe5f3009ac4a43e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b526bb25012345c2f2d204e71501c03d61282e3f488d9598bfa5da8e47c2a87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b526bb25012345c2f2d204e71501c03d61282e3f488d9598bfa5da8e47c2a87d->enter($__internal_b526bb25012345c2f2d204e71501c03d61282e3f488d9598bfa5da8e47c2a87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b526bb25012345c2f2d204e71501c03d61282e3f488d9598bfa5da8e47c2a87d->leave($__internal_b526bb25012345c2f2d204e71501c03d61282e3f488d9598bfa5da8e47c2a87d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/var/www/html/SymfonyShop/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
