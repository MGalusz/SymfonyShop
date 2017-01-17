<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_af9e699341fa90aaf69cccff6d27770d7afde574128be70e81bc165d864713a4 extends Twig_Template
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
        $__internal_b6340228a9b1fad8e3b8dd6874cc9a954c7e6bad015697987196ed727d4064e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6340228a9b1fad8e3b8dd6874cc9a954c7e6bad015697987196ed727d4064e1->enter($__internal_b6340228a9b1fad8e3b8dd6874cc9a954c7e6bad015697987196ed727d4064e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6340228a9b1fad8e3b8dd6874cc9a954c7e6bad015697987196ed727d4064e1->leave($__internal_b6340228a9b1fad8e3b8dd6874cc9a954c7e6bad015697987196ed727d4064e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6c3bc34952f34bbf292f2b46bae6b2cc0f5a329ca215fbc501a115355d51889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c3bc34952f34bbf292f2b46bae6b2cc0f5a329ca215fbc501a115355d51889->enter($__internal_a6c3bc34952f34bbf292f2b46bae6b2cc0f5a329ca215fbc501a115355d51889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a6c3bc34952f34bbf292f2b46bae6b2cc0f5a329ca215fbc501a115355d51889->leave($__internal_a6c3bc34952f34bbf292f2b46bae6b2cc0f5a329ca215fbc501a115355d51889_prof);

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
", "@FOSUser/Registration/register.html.twig", "/var/www/html/SymfonyShop/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
