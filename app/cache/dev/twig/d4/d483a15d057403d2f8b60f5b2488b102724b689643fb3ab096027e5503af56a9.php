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
        $__internal_22ddb2df5ae50fd838ee22d3969db5c3df4bbd94cd10ec31423b6813d62af017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ddb2df5ae50fd838ee22d3969db5c3df4bbd94cd10ec31423b6813d62af017->enter($__internal_22ddb2df5ae50fd838ee22d3969db5c3df4bbd94cd10ec31423b6813d62af017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

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
            echo "                <li role=\"presentation\"><a href=\"index.php?link=order\">Zamówienie</a></li>
                ";
        }
        // line 31
        echo "            </ul>

            <ul class=\"nav nav-pills\" style=\"float: right;\">
                ";
        // line 34
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 35
            echo "                    <li role=\"presentation\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_page");
            echo "\">PANEL ADMINA</a></li>
                ";
        }
        // line 37
        echo "                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "                    <li role=\"presentation\">Witaj ! ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</li>
                    <li role=\"presentation\"><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">wejdź na swój profil</a></li>
                    <li role=\"presentation\"><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Wyloguj się</a></li>
                ";
        } else {
            // line 42
            echo "                    <li role=\"presentation\" class=\"activegit statu\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Zaloguj się</a></li>
                    <li role=\"presentation\" class=\"active blueButton\"><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Zajerestruj się</a></li>
                ";
        }
        // line 45
        echo "    </nav>
    <main>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        <div class=\"debug\">
            ";
        // line 50
        if (array_key_exists("session", $context)) {
            // line 51
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")));
            echo "
            ";
        }
        // line 53
        echo "        </div>
    </main>
    <footer>
    </footer>
    ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    </body>
</html>
";
        
        $__internal_22ddb2df5ae50fd838ee22d3969db5c3df4bbd94cd10ec31423b6813d62af017->leave($__internal_22ddb2df5ae50fd838ee22d3969db5c3df4bbd94cd10ec31423b6813d62af017_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_d93755cade10b2e2ebb2515977ee773faa1b43772690436a58f6a81d00c733e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93755cade10b2e2ebb2515977ee773faa1b43772690436a58f6a81d00c733e4->enter($__internal_d93755cade10b2e2ebb2515977ee773faa1b43772690436a58f6a81d00c733e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sklep internetowy";
        
        $__internal_d93755cade10b2e2ebb2515977ee773faa1b43772690436a58f6a81d00c733e4->leave($__internal_d93755cade10b2e2ebb2515977ee773faa1b43772690436a58f6a81d00c733e4_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a79083556e5c27681e4d1c5bc1d8c2083c45811131f2aa106aca6c089a97b6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79083556e5c27681e4d1c5bc1d8c2083c45811131f2aa106aca6c089a97b6e9->enter($__internal_a79083556e5c27681e4d1c5bc1d8c2083c45811131f2aa106aca6c089a97b6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a79083556e5c27681e4d1c5bc1d8c2083c45811131f2aa106aca6c089a97b6e9->leave($__internal_a79083556e5c27681e4d1c5bc1d8c2083c45811131f2aa106aca6c089a97b6e9_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dc6aaf338ae0b61a4ed124b6a2cad9a16bfd8299b83c4b005d12c3af12a0baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc6aaf338ae0b61a4ed124b6a2cad9a16bfd8299b83c4b005d12c3af12a0baa->enter($__internal_9dc6aaf338ae0b61a4ed124b6a2cad9a16bfd8299b83c4b005d12c3af12a0baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "        ";
        
        $__internal_9dc6aaf338ae0b61a4ed124b6a2cad9a16bfd8299b83c4b005d12c3af12a0baa->leave($__internal_9dc6aaf338ae0b61a4ed124b6a2cad9a16bfd8299b83c4b005d12c3af12a0baa_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06e3382978bb203a153d2770e40e016e442225bc1f44f4af898e4d1a5a487099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e3382978bb203a153d2770e40e016e442225bc1f44f4af898e4d1a5a487099->enter($__internal_06e3382978bb203a153d2770e40e016e442225bc1f44f4af898e4d1a5a487099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06e3382978bb203a153d2770e40e016e442225bc1f44f4af898e4d1a5a487099->leave($__internal_06e3382978bb203a153d2770e40e016e442225bc1f44f4af898e4d1a5a487099_prof);

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
        return array (  198 => 57,  191 => 48,  185 => 47,  174 => 20,  162 => 19,  153 => 58,  151 => 57,  145 => 53,  139 => 51,  137 => 50,  134 => 49,  132 => 47,  128 => 45,  123 => 43,  118 => 42,  113 => 40,  109 => 39,  104 => 38,  101 => 37,  95 => 35,  93 => 34,  88 => 31,  84 => 29,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  64 => 21,  62 => 20,  58 => 19,  51 => 15,  47 => 14,  43 => 13,  36 => 9,  26 => 1,);
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
                <li role=\"presentation\"><a href=\"index.php?link=order\">Zamówienie</a></li>
                {% endif %}
            </ul>

            <ul class=\"nav nav-pills\" style=\"float: right;\">
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <li role=\"presentation\"><a href=\"{{ path('admin_page') }}\">PANEL ADMINA</a></li>
                {% endif %}
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
