<?php

/* @App/user/login.html.twig */
class __TwigTemplate_d6e307c1d0018d0fc5f45edc79e047e6e3f4074c32e25c75e9ce9872a39736a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/base.html.twig", "@App/user/login.html.twig", 1);
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
        $__internal_dd5efc64e4940c410a8cd5f257453631557915b955815771e6dbea1b1f5d4303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5efc64e4940c410a8cd5f257453631557915b955815771e6dbea1b1f5d4303->enter($__internal_dd5efc64e4940c410a8cd5f257453631557915b955815771e6dbea1b1f5d4303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd5efc64e4940c410a8cd5f257453631557915b955815771e6dbea1b1f5d4303->leave($__internal_dd5efc64e4940c410a8cd5f257453631557915b955815771e6dbea1b1f5d4303_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_982a05e9f722c68371ce0f7681a0cf4c2ec14e4f1b9fdd5cc7aa2646c44126b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982a05e9f722c68371ce0f7681a0cf4c2ec14e4f1b9fdd5cc7aa2646c44126b2->enter($__internal_982a05e9f722c68371ce0f7681a0cf4c2ec14e4f1b9fdd5cc7aa2646c44126b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"'col-md-4 col-md-offset-4\"><br>
        <h2 class=\"form-signin-heading\">Podaj dane do logowania:</h2><br>
    </div>
    <div class=\"col-md-4 col-md-offset-4\">
        <form class=\"form-signin\" method=\"post\" action=\"#\">
            <label for=\"inputEmail\" class=\"sr-only\">E-mail </label>
            <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"E-mail\" required autofocus><br>
            <label for=\"inputPassword\" class=\"sr-only\">Hasło</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Hasło\" required><br>
            <a id=\"loginButton\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show");
        echo "\"><button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Zaloguj się </button></a>

        </form>
        <a id=\"registerLinkButton\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\"><button id=\"registerButton\" class=\"btn btn-lg btn-success btn-block\">Zarejestruj sie </button></a>
    </div>
";
        
        $__internal_982a05e9f722c68371ce0f7681a0cf4c2ec14e4f1b9fdd5cc7aa2646c44126b2->leave($__internal_982a05e9f722c68371ce0f7681a0cf4c2ec14e4f1b9fdd5cc7aa2646c44126b2_prof);

    }

    public function getTemplateName()
    {
        return "@App/user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
        <h2 class=\"form-signin-heading\">Podaj dane do logowania:</h2><br>
    </div>
    <div class=\"col-md-4 col-md-offset-4\">
        <form class=\"form-signin\" method=\"post\" action=\"#\">
            <label for=\"inputEmail\" class=\"sr-only\">E-mail </label>
            <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"E-mail\" required autofocus><br>
            <label for=\"inputPassword\" class=\"sr-only\">Hasło</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Hasło\" required><br>
            <a id=\"loginButton\" href=\"{{ path('product_show') }}\"><button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Zaloguj się </button></a>

        </form>
        <a id=\"registerLinkButton\" href=\"{{ path('user_new') }}\"><button id=\"registerButton\" class=\"btn btn-lg btn-success btn-block\">Zarejestruj sie </button></a>
    </div>
{% endblock %}", "@App/user/login.html.twig", "/var/www/html/Shop/Shop/src/AppBundle/Resources/views/user/login.html.twig");
    }
}
