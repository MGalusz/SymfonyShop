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
        $__internal_dc097cbf328f7b960343fea3b40a59218411286991042ee3ec5e24b1a416d70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc097cbf328f7b960343fea3b40a59218411286991042ee3ec5e24b1a416d70b->enter($__internal_dc097cbf328f7b960343fea3b40a59218411286991042ee3ec5e24b1a416d70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

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
                ";
        // line 28
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 29
            echo "                <li role=\"presentation\"><a href=";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("purchase_new2");
            echo ">Zamówienie</a></li>
                ";
        }
        // line 31
        echo "            </ul>

            <ul class=\"nav nav-pills\" style=\"float: right;\">


                ";
        // line 36
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 37
            echo "                    ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 38
                echo "                        <li role=\"presentation\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_page");
                echo "\">PANEL ADMINA</a></li>
                    ";
            }
            // line 40
            echo "                    <li role=\"presentation\">Witaj  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "!</li>
                    <li role=\"presentation\"><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">wejdź na swój profil</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Wyloguj się</a></li>
                ";
        } else {
            // line 44
            echo "                    <li role=\"presentation\" class=\"activegit statu\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Zaloguj się</a></li>
                    <li role=\"presentation\" class=\"active blueButton\"><a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Zajerestruj się</a></li>
                ";
        }
        // line 47
        echo "    </nav>
    <main>
        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "        <div class=\"debug\">
            ";
        // line 52
        if (array_key_exists("session", $context)) {
            // line 53
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")));
            echo "
            ";
        }
        // line 55
        echo "        </div>
    </main>
    <footer>
    </footer>
    ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    </body>
</html>
";
        
        $__internal_dc097cbf328f7b960343fea3b40a59218411286991042ee3ec5e24b1a416d70b->leave($__internal_dc097cbf328f7b960343fea3b40a59218411286991042ee3ec5e24b1a416d70b_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1882438ce0ac720ab96846480d84f7c72b77d527df495646e57613fd97cd9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1882438ce0ac720ab96846480d84f7c72b77d527df495646e57613fd97cd9a4->enter($__internal_a1882438ce0ac720ab96846480d84f7c72b77d527df495646e57613fd97cd9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sklep internetowy";
        
        $__internal_a1882438ce0ac720ab96846480d84f7c72b77d527df495646e57613fd97cd9a4->leave($__internal_a1882438ce0ac720ab96846480d84f7c72b77d527df495646e57613fd97cd9a4_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_986cd5899896c6be40233465f8833277dcf398de717b337f6e0e61a14ff246d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986cd5899896c6be40233465f8833277dcf398de717b337f6e0e61a14ff246d4->enter($__internal_986cd5899896c6be40233465f8833277dcf398de717b337f6e0e61a14ff246d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_986cd5899896c6be40233465f8833277dcf398de717b337f6e0e61a14ff246d4->leave($__internal_986cd5899896c6be40233465f8833277dcf398de717b337f6e0e61a14ff246d4_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7927a0cf4161d8226a95a5c8659437a779402eed019e37d01e2bb7688511e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7927a0cf4161d8226a95a5c8659437a779402eed019e37d01e2bb7688511e96->enter($__internal_e7927a0cf4161d8226a95a5c8659437a779402eed019e37d01e2bb7688511e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "        ";
        
        $__internal_e7927a0cf4161d8226a95a5c8659437a779402eed019e37d01e2bb7688511e96->leave($__internal_e7927a0cf4161d8226a95a5c8659437a779402eed019e37d01e2bb7688511e96_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9ffe4fedda678c61fb8067dcbf4c5ef37f56daed9d5bf328f636ec2e5f1a622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ffe4fedda678c61fb8067dcbf4c5ef37f56daed9d5bf328f636ec2e5f1a622->enter($__internal_b9ffe4fedda678c61fb8067dcbf4c5ef37f56daed9d5bf328f636ec2e5f1a622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b9ffe4fedda678c61fb8067dcbf4c5ef37f56daed9d5bf328f636ec2e5f1a622->leave($__internal_b9ffe4fedda678c61fb8067dcbf4c5ef37f56daed9d5bf328f636ec2e5f1a622_prof);

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
        return array (  202 => 59,  195 => 50,  189 => 49,  178 => 20,  166 => 19,  157 => 60,  155 => 59,  149 => 55,  143 => 53,  141 => 52,  138 => 51,  136 => 49,  132 => 47,  127 => 45,  122 => 44,  117 => 42,  113 => 41,  108 => 40,  102 => 38,  99 => 37,  97 => 36,  90 => 31,  84 => 29,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  64 => 21,  62 => 20,  58 => 19,  51 => 15,  47 => 14,  43 => 13,  36 => 9,  26 => 1,);
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
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <li role=\"presentation\"><a href={{ path('purchase_new2') }}>Zamówienie</a></li>
                {% endif %}
            </ul>

            <ul class=\"nav nav-pills\" style=\"float: right;\">


                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    {% if is_granted(\"ROLE_ADMIN\") %}
                        <li role=\"presentation\"><a href=\"{{ path('admin_page') }}\">PANEL ADMINA</a></li>
                    {% endif %}
                    <li role=\"presentation\">Witaj  {{ app.user.username }}!</li>
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
        <div class=\"debug\">
            {% if session is defined %}
                {{ dump(session) }}
            {% endif %}
        </div>
    </main>
    <footer>
    </footer>
    {% block javascripts %}{% endblock %}
    </body>
</html>
", "@App/base.html.twig", "/var/www/html/SymfonyShop/src/AppBundle/Resources/views/base.html.twig");
    }
}
