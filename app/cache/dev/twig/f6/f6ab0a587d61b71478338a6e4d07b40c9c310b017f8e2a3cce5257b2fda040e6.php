<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_c9f99f7601ae37f2d22edf3571cb37b220f066ff922a0b31093f1be81d3b9b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7337102495b23dc0051739232de22e8ec90cc955a0cfee579d4339428bfd845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7337102495b23dc0051739232de22e8ec90cc955a0cfee579d4339428bfd845->enter($__internal_d7337102495b23dc0051739232de22e8ec90cc955a0cfee579d4339428bfd845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "<div class=\"row\">
    <div class=\"col-md-offset-4 col-md-4 col-md-offset-4\"><br>
        <div class=\"fos_user_user_show\">
            <table class=\"table table-hover\">
                <tr>
                    <td>Twoje imię i nazwisko: </td><td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Twój e-mail:</td><td> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>adres: </td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address", array()), "html", null, true);
        echo "</td>
                </tr>
            </table>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">zmień swoje dane</a><br>
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete_link", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">skasuj profil</a>
        </div>
    </div>
</div>";
        
        $__internal_d7337102495b23dc0051739232de22e8ec90cc955a0cfee579d4339428bfd845->leave($__internal_d7337102495b23dc0051739232de22e8ec90cc955a0cfee579d4339428bfd845_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  47 => 16,  41 => 13,  35 => 10,  29 => 7,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"row\">
    <div class=\"col-md-offset-4 col-md-4 col-md-offset-4\"><br>
        <div class=\"fos_user_user_show\">
            <table class=\"table table-hover\">
                <tr>
                    <td>Twoje imię i nazwisko: </td><td>{{ user.username }}</td>
                </tr>
                <tr>
                    <td>Twój e-mail:</td><td> {{ user.email }}</td>
                </tr>
                <tr>
                    <td>adres: </td><td>{{ user.address }}</td>
                </tr>
            </table>
            <a href=\"{{ path('fos_user_profile_edit') }}\">zmień swoje dane</a><br>
            <a href=\"{{ path('user_delete_link', { 'id': user.id }) }}\">skasuj profil</a>
        </div>
    </div>
</div>", "@FOSUser/Profile/show_content.html.twig", "/var/www/html/SymfonyShop/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
