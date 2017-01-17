<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ab6b866f46f93082a071f985ccc4cf4d6311df71823b82fcdf9485bf68884879 extends Twig_Template
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
        $__internal_5ecf19b40e3170225ba8d67ff1525d72a5c331de17891b4e10a43c54ce9a640b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecf19b40e3170225ba8d67ff1525d72a5c331de17891b4e10a43c54ce9a640b->enter($__internal_5ecf19b40e3170225ba8d67ff1525d72a5c331de17891b4e10a43c54ce9a640b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ecf19b40e3170225ba8d67ff1525d72a5c331de17891b4e10a43c54ce9a640b->leave($__internal_5ecf19b40e3170225ba8d67ff1525d72a5c331de17891b4e10a43c54ce9a640b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_901de10f5759ccbec36603f5c6cec7bf1cde4070b26c1714cc745b70e9129a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901de10f5759ccbec36603f5c6cec7bf1cde4070b26c1714cc745b70e9129a20->enter($__internal_901de10f5759ccbec36603f5c6cec7bf1cde4070b26c1714cc745b70e9129a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_901de10f5759ccbec36603f5c6cec7bf1cde4070b26c1714cc745b70e9129a20->leave($__internal_901de10f5759ccbec36603f5c6cec7bf1cde4070b26c1714cc745b70e9129a20_prof);

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
", "@FOSUser/Security/login.html.twig", "/var/www/html/SymfonyShop/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
