<?php

/* @App/base.html.twig */
class __TwigTemplate_5240b6013453d1173317dac5deef8546e5e8d76f03aa7e50d839a701955789bc extends Twig_Template
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
        $__internal_5109f5791db92ebb1a55140074f5721c5f9a990d145c29eb9f4fa8f43c52a7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5109f5791db92ebb1a55140074f5721c5f9a990d145c29eb9f4fa8f43c52a7d9->enter($__internal_5109f5791db92ebb1a55140074f5721c5f9a990d145c29eb9f4fa8f43c52a7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Koszyk</a></li>
                <li role=\"presentation\"><a href=\"index.php?link=order\">Zamówienie</a></li>
            </ul>

            <ul class=\"nav nav-pills\" style=\"float: right;\">
                <li role=\"presentation\" class=\"active blueButton\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Zaloguj się</a></li>
                <li role=\"presentation\" class=\"active blueButton\"><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Zajerestruj się</a></li>

            </ul>
    </nav>
    <main>
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "    </main>
    <footer>
    </footer>
    ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>
";
        
        $__internal_5109f5791db92ebb1a55140074f5721c5f9a990d145c29eb9f4fa8f43c52a7d9->leave($__internal_5109f5791db92ebb1a55140074f5721c5f9a990d145c29eb9f4fa8f43c52a7d9_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_2da288489e35ff95022c0ec9c267f3bdbe6382d94b030d68e486894c215ae422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da288489e35ff95022c0ec9c267f3bdbe6382d94b030d68e486894c215ae422->enter($__internal_2da288489e35ff95022c0ec9c267f3bdbe6382d94b030d68e486894c215ae422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sklep internetowy";
        
        $__internal_2da288489e35ff95022c0ec9c267f3bdbe6382d94b030d68e486894c215ae422->leave($__internal_2da288489e35ff95022c0ec9c267f3bdbe6382d94b030d68e486894c215ae422_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a854f8d467993f7e1435fc4759c527185d1c7db87463e4fa1f0d7ee525f446fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a854f8d467993f7e1435fc4759c527185d1c7db87463e4fa1f0d7ee525f446fc->enter($__internal_a854f8d467993f7e1435fc4759c527185d1c7db87463e4fa1f0d7ee525f446fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a854f8d467993f7e1435fc4759c527185d1c7db87463e4fa1f0d7ee525f446fc->leave($__internal_a854f8d467993f7e1435fc4759c527185d1c7db87463e4fa1f0d7ee525f446fc_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_1473bc2e03672c1ed7f18ec90ec60dc53ea890f133f08c38165a1137b19deda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1473bc2e03672c1ed7f18ec90ec60dc53ea890f133f08c38165a1137b19deda1->enter($__internal_1473bc2e03672c1ed7f18ec90ec60dc53ea890f133f08c38165a1137b19deda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "        ";
        
        $__internal_1473bc2e03672c1ed7f18ec90ec60dc53ea890f133f08c38165a1137b19deda1->leave($__internal_1473bc2e03672c1ed7f18ec90ec60dc53ea890f133f08c38165a1137b19deda1_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbf5fb82042b0ed1ce5b4526f446f45111e5d9eeaa14fd96e46eb399a530b06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf5fb82042b0ed1ce5b4526f446f45111e5d9eeaa14fd96e46eb399a530b06c->enter($__internal_bbf5fb82042b0ed1ce5b4526f446f45111e5d9eeaa14fd96e46eb399a530b06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bbf5fb82042b0ed1ce5b4526f446f45111e5d9eeaa14fd96e46eb399a530b06c->leave($__internal_bbf5fb82042b0ed1ce5b4526f446f45111e5d9eeaa14fd96e46eb399a530b06c_prof);

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
        return array (  152 => 43,  145 => 39,  139 => 38,  128 => 20,  116 => 19,  107 => 44,  105 => 43,  100 => 40,  98 => 38,  90 => 33,  86 => 32,  78 => 27,  74 => 26,  70 => 25,  64 => 21,  62 => 20,  58 => 19,  51 => 15,  47 => 14,  43 => 13,  36 => 9,  26 => 1,);
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
                <li role=\"presentation\"><a href=\"{{ path('homepage') }}\">Koszyk</a></li>
                <li role=\"presentation\"><a href=\"index.php?link=order\">Zamówienie</a></li>
            </ul>

            <ul class=\"nav nav-pills\" style=\"float: right;\">
                <li role=\"presentation\" class=\"active blueButton\"><a href=\"{{ path('fos_user_security_login') }}\">Zaloguj się</a></li>
                <li role=\"presentation\" class=\"active blueButton\"><a href=\"{{ path('fos_user_registration_register') }}\">Zajerestruj się</a></li>

            </ul>
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
", "@App/base.html.twig", "/var/www/html/Shop/Shop/src/AppBundle/Resources/views/base.html.twig");
    }
}
