<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_dfeacb44124f2c101a20b91e3c3bbe751b9befc8cdd4c2427757b6f0087f1a58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_c005ff3b55f0c9efb63b54f5a137412fe1ed83eb9ea886a3cbd8f5ab9002c760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c005ff3b55f0c9efb63b54f5a137412fe1ed83eb9ea886a3cbd8f5ab9002c760->enter($__internal_c005ff3b55f0c9efb63b54f5a137412fe1ed83eb9ea886a3cbd8f5ab9002c760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c005ff3b55f0c9efb63b54f5a137412fe1ed83eb9ea886a3cbd8f5ab9002c760->leave($__internal_c005ff3b55f0c9efb63b54f5a137412fe1ed83eb9ea886a3cbd8f5ab9002c760_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d36fe3a4afe14feb579ffde153b2bede31037c58c6e2cc5c7406cef931e9c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d36fe3a4afe14feb579ffde153b2bede31037c58c6e2cc5c7406cef931e9c9e->enter($__internal_3d36fe3a4afe14feb579ffde153b2bede31037c58c6e2cc5c7406cef931e9c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_3d36fe3a4afe14feb579ffde153b2bede31037c58c6e2cc5c7406cef931e9c9e->leave($__internal_3d36fe3a4afe14feb579ffde153b2bede31037c58c6e2cc5c7406cef931e9c9e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/Shop/Shop/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
