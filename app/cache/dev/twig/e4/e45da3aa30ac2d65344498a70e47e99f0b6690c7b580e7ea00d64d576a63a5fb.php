<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d78901fa38a1fa2155dd3cfa46ad7dc192166ba8b751c172aaa5961c5bd9faf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d09ca88691a4251f4353daaa1d6d707639330123f1c4fbdf2532d07845aa3f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09ca88691a4251f4353daaa1d6d707639330123f1c4fbdf2532d07845aa3f6c->enter($__internal_d09ca88691a4251f4353daaa1d6d707639330123f1c4fbdf2532d07845aa3f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d09ca88691a4251f4353daaa1d6d707639330123f1c4fbdf2532d07845aa3f6c->leave($__internal_d09ca88691a4251f4353daaa1d6d707639330123f1c4fbdf2532d07845aa3f6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cbc21546d805de440dd405c465d3732abec2c1d960a0a0b8f2a5d3b3080965c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc21546d805de440dd405c465d3732abec2c1d960a0a0b8f2a5d3b3080965c9->enter($__internal_cbc21546d805de440dd405c465d3732abec2c1d960a0a0b8f2a5d3b3080965c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_cbc21546d805de440dd405c465d3732abec2c1d960a0a0b8f2a5d3b3080965c9->leave($__internal_cbc21546d805de440dd405c465d3732abec2c1d960a0a0b8f2a5d3b3080965c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/Shop/Shop/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
