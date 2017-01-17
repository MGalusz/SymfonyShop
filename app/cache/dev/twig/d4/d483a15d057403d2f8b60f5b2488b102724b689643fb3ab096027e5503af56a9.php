<?php

/* @App/base.html.twig */
class __TwigTemplate_59c999d1aa2c28ec590b4477e17168ec58d5afd8e9294b04d20f546b63e1d846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e17bd8b7666aa0df0df0ac2cbb0aa10b7b4d5c2b2b525262f8632b8a642767b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e17bd8b7666aa0df0df0ac2cbb0aa10b7b4d5c2b2b525262f8632b8a642767b->enter($__internal_9e17bd8b7666aa0df0df0ac2cbb0aa10b7b4d5c2b2b525262f8632b8a642767b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <head>
            <title> Sklep Internetowy</title>
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
            <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
            <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        </head>
        <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    </head>
    <body>
        <nav id=\"nav\" class=\"navbar navbar-default navbar-fixed\">
            <ul class=\"nav nav-pills blueButton\" style='float: left;'>
                <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Strona Główna</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Produkty</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showCart");
        echo "\">Koszyk</a></li>
                <li role=\"presentation\"><a href=\"index.php?link=order\">Zamówienie</a></li>
            </ul>

            <ul class=\"nav nav-pills\" style=\"float: right;\">
                ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "                    <li role=\"presentation\">Witaj ! ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</li>
                    <li role=\"presentation\"><a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">wejdź na swój profil</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Wyloguj się</a></li>
                ";
        } else {
            // line 37
            echo "                    <li role=\"presentation\" class=\"activegit statu\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Zaloguj się</a></li>
                    <li role=\"presentation\" class=\"active blueButton\"><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Zajerestruj się</a></li>
                ";
        }
        // line 40
        echo "    </nav>
    <main>
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "    </main>
    <footer>
    </footer>
    ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "    </body>
</html>
";
        
        $__internal_9e17bd8b7666aa0df0df0ac2cbb0aa10b7b4d5c2b2b525262f8632b8a642767b->leave($__internal_9e17bd8b7666aa0df0df0ac2cbb0aa10b7b4d5c2b2b525262f8632b8a642767b_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_1babf45fd134ce90171883368461ca678dfe4ae49520943f4b2f0db52bab7412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1babf45fd134ce90171883368461ca678dfe4ae49520943f4b2f0db52bab7412->enter($__internal_1babf45fd134ce90171883368461ca678dfe4ae49520943f4b2f0db52bab7412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sklep internetowy";
        
        $__internal_1babf45fd134ce90171883368461ca678dfe4ae49520943f4b2f0db52bab7412->leave($__internal_1babf45fd134ce90171883368461ca678dfe4ae49520943f4b2f0db52bab7412_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c474018c93522c08e774c2762f4465079387a295a0ae2589276c98d8f6f1ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c474018c93522c08e774c2762f4465079387a295a0ae2589276c98d8f6f1ec1->enter($__internal_9c474018c93522c08e774c2762f4465079387a295a0ae2589276c98d8f6f1ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9c474018c93522c08e774c2762f4465079387a295a0ae2589276c98d8f6f1ec1->leave($__internal_9c474018c93522c08e774c2762f4465079387a295a0ae2589276c98d8f6f1ec1_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_f12dbbbb14cb7b428dc9455f796abc1ae61082afb7ec251c0aefe55f3cecc412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12dbbbb14cb7b428dc9455f796abc1ae61082afb7ec251c0aefe55f3cecc412->enter($__internal_f12dbbbb14cb7b428dc9455f796abc1ae61082afb7ec251c0aefe55f3cecc412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "        ";
        
        $__internal_f12dbbbb14cb7b428dc9455f796abc1ae61082afb7ec251c0aefe55f3cecc412->leave($__internal_f12dbbbb14cb7b428dc9455f796abc1ae61082afb7ec251c0aefe55f3cecc412_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e52654afa978ad3097ecbfe677c72448984997904175a12658ac51445d656045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52654afa978ad3097ecbfe677c72448984997904175a12658ac51445d656045->enter($__internal_e52654afa978ad3097ecbfe677c72448984997904175a12658ac51445d656045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e52654afa978ad3097ecbfe677c72448984997904175a12658ac51445d656045->leave($__internal_e52654afa978ad3097ecbfe677c72448984997904175a12658ac51445d656045_prof);

    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 47,  163 => 43,  157 => 42,  146 => 20,  134 => 19,  125 => 48,  123 => 47,  118 => 44,  116 => 42,  112 => 40,  107 => 38,  102 => 37,  97 => 35,  93 => 34,  88 => 33,  86 => 32,  78 => 27,  74 => 26,  70 => 25,  64 => 21,  62 => 20,  58 => 19,  51 => 15,  47 => 14,  43 => 13,  36 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <head>
            <title> Sklep Internetowy</title>
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
            <link href=\"https://fonts.googleapis.com/css?family=Lato\" rel=\"stylesheet\">
            <script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

        </head>
        <title>{% block title %}Sklep internetowy{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <nav id=\"nav\" class=\"navbar navbar-default navbar-fixed\">
            <ul class=\"nav nav-pills blueButton\" style='float: left;'>
                <li role=\"presentation\" class=\"active\"><a href=\"{{ path('homepage') }}\">Strona Główna</a></li>
                <li role=\"presentation\"><a href=\"{{ path('product_index') }}\">Produkty</a></li>
                <li role=\"presentation\"><a href=\"{{ path('showCart') }}\">Koszyk</a></li>
                <li role=\"presentation\"><a href=\"index.php?link=order\">Zamówienie</a></li>
            </ul>

            <ul class=\"nav nav-pills\" style=\"float: right;\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <li role=\"presentation\">Witaj ! {{ app.user.username }}</li>
                    <li role=\"presentation\"><a href=\"{{ path('fos_user_profile_show') }}\">wejdź na swój profil</a></li>
                    <li role=\"presentation\"><a href=\"{{ path('fos_user_security_logout') }}\">Wyloguj się</a></li>
                {% else %}
                    <li role=\"presentation\" class=\"activegit statu\"><a href=\"{{ path('fos_user_security_login') }}\">Zaloguj się</a></li>
                    <li role=\"presentation\" class=\"active blueButton\"><a href=\"{{ path('fos_user_registration_register') }}\">Zajerestruj się</a></li>
                {% endif %}
    </nav>
    <main>
        {% block body %}
        {% endblock %}
    </main>
    <footer>
    </footer>
    {% block javascripts %}{% endblock %}
    </body>
</html>
", "@App/base.html.twig", "/var/www/html/SymfonyShop/src/AppBundle/Resources/views/base.html.twig");
    }
}
