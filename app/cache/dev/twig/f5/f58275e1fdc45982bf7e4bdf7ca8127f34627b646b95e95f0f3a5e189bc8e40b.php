<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_5ba63210ee17b31396525f7fc9eafefabf163266d0aaa121f2eb15c5a6543f64 extends Twig_Template
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
        $__internal_d55dc4bd19dbc3f7f92a059d1e6c3b4ff6cc7de48c3835519dba2795de283045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55dc4bd19dbc3f7f92a059d1e6c3b4ff6cc7de48c3835519dba2795de283045->enter($__internal_d55dc4bd19dbc3f7f92a059d1e6c3b4ff6cc7de48c3835519dba2795de283045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-md-offset-4 col-md-4 col-md-offset-4\"><br>
        <h2 class=\"form-signin-heading\">Podaj dane do logowania:</h2><br>
    </div>
    <div class=\"col-md-offset-4 col-md-4 col-md-offset-4\">
        <form class=\"form-signin\" action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 12
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 13
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 15
        echo "
            <label for=\"username\">Username:</label>
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /><br>

            <label for=\"inputPassword\" >Podaj swoje hasło:</label>
            <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"podaj hasło\"/><br>



            <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Login\"/>
        </form>
    </div>

</div>";
        
        $__internal_d55dc4bd19dbc3f7f92a059d1e6c3b4ff6cc7de48c3835519dba2795de283045->leave($__internal_d55dc4bd19dbc3f7f92a059d1e6c3b4ff6cc7de48c3835519dba2795de283045_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  52 => 15,  46 => 13,  44 => 12,  40 => 11,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"row\">
    <div class=\"col-md-offset-4 col-md-4 col-md-offset-4\"><br>
        <h2 class=\"form-signin-heading\">Podaj dane do logowania:</h2><br>
    </div>
    <div class=\"col-md-offset-4 col-md-4 col-md-offset-4\">
        <form class=\"form-signin\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}

            <label for=\"username\">Username:</label>
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" /><br>

            <label for=\"inputPassword\" >Podaj swoje hasło:</label>
            <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"podaj hasło\"/><br>



            <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Login\"/>
        </form>
    </div>

</div>", "@FOSUser/Security/login_content.html.twig", "/var/www/html/SymfonyShop/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
