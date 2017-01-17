<?php

/* @App/index.html.twig */
class __TwigTemplate_8166a470abe1ab187a808cde2f878816b3178a7693b1b388442819b9b8596dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/base.html.twig", "@App/index.html.twig", 1);
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
        $__internal_c050ab8036b52eabb5c4a12c8172fb28f12799c5fde3c7acffa648d32cd2a4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c050ab8036b52eabb5c4a12c8172fb28f12799c5fde3c7acffa648d32cd2a4c6->enter($__internal_c050ab8036b52eabb5c4a12c8172fb28f12799c5fde3c7acffa648d32cd2a4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c050ab8036b52eabb5c4a12c8172fb28f12799c5fde3c7acffa648d32cd2a4c6->leave($__internal_c050ab8036b52eabb5c4a12c8172fb28f12799c5fde3c7acffa648d32cd2a4c6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f313b8563d659db3e6bd72e5311982f4ab10a533cc198f3846f76f72c6c17d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f313b8563d659db3e6bd72e5311982f4ab10a533cc198f3846f76f72c6c17d11->enter($__internal_f313b8563d659db3e6bd72e5311982f4ab10a533cc198f3846f76f72c6c17d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h3 class=\"center-text\">Witaj w naszym sklepie internetowym!</h3>

    <div id = \"carouselOfProducts\" class = \"carousel slide\" data-ride = \"carousel\">
        <ol class = \"carousel-indicators\">
            <li data-target = \"#carouselOfProducts\" data-slide-to = \"0\" class = \"active\"></li>
            <li data-target = \"#carouselOfProducts\" data-slide-to = \"1\" ></li>
            <li data-target = \"#carouselOfProducts\" data-slide-to = \"2\" ></li>
            <li data-target = \"#carouselOfProducts\" data-slide-to = \"3\" ></li>
            <li data-target = \"#carouselOfProducts\" data-slide-to = \"4\" ></li>
        </ol>

        <div class = \"carousel-inner\" role = \"listbox\">
            <div class = \"item active\">
                <img src = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/paganKot.jpg"), "html", null, true);
        echo "\" alt = \"koteł\" class = \"img-circle\">
            </div>

            <div class = \"item\">
                <img src = \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/piesel.jpg"), "html", null, true);
        echo "\" alt = \"kicikici\" class = \"img-circle\">
            </div>
            <div class = \"item\">
                <img src = \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/pentagram.jpg"), "html", null, true);
        echo "\" alt = \"pentagram\" class = \"img-circle\">

            </div>
            <div class = \"item\">
                <img src = \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/lol.jpg"), "html", null, true);
        echo "\" alt = \"zonk\" class = \"img-circle\">

            </div>
            <div class = \"item\">
                <img src =\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/paganowcy.jpg"), "html", null, true);
        echo "\" alt = \"pagani\" class = \"img-circle\">
            </div>
        </div>

        <a class = \"left carousel-control\" href = \"#carouselOfProducts\" role = \"button\" data-slide = \"prev\">
            <span class = \"glyphicon glyphicon-chevron-left\" aria-hidden = \"true\"></span>
            <span class = \"sr-only\">Previous</span>
        </a>
        <a class = \"right carousel-control\" href = \"#carouselOfProducts\" role = \"button\" data-slide = \"next\">
            <span class = \"glyphicon glyphicon-chevron-right\" aria-hidden = \"true\"></span>
            <span class = \"sr-only\">Next</span>
        </a>
    </div>
";
        
        $__internal_f313b8563d659db3e6bd72e5311982f4ab10a533cc198f3846f76f72c6c17d11->leave($__internal_f313b8563d659db3e6bd72e5311982f4ab10a533cc198f3846f76f72c6c17d11_prof);

    }

    public function getTemplateName()
    {
        return "@App/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  75 => 27,  68 => 23,  62 => 20,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
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
    <h3 class=\"center-text\">Witaj w naszym sklepie internetowym!</h3>

    <div id = \"carouselOfProducts\" class = \"carousel slide\" data-ride = \"carousel\">
        <ol class = \"carousel-indicators\">
            <li data-target = \"#carouselOfProducts\" data-slide-to = \"0\" class = \"active\"></li>
            <li data-target = \"#carouselOfProducts\" data-slide-to = \"1\" ></li>
            <li data-target = \"#carouselOfProducts\" data-slide-to = \"2\" ></li>
            <li data-target = \"#carouselOfProducts\" data-slide-to = \"3\" ></li>
            <li data-target = \"#carouselOfProducts\" data-slide-to = \"4\" ></li>
        </ol>

        <div class = \"carousel-inner\" role = \"listbox\">
            <div class = \"item active\">
                <img src = \"{{ asset('images/paganKot.jpg') }}\" alt = \"koteł\" class = \"img-circle\">
            </div>

            <div class = \"item\">
                <img src = \"{{ asset('images/piesel.jpg') }}\" alt = \"kicikici\" class = \"img-circle\">
            </div>
            <div class = \"item\">
                <img src = \"{{ asset('images/pentagram.jpg') }}\" alt = \"pentagram\" class = \"img-circle\">

            </div>
            <div class = \"item\">
                <img src = \"{{ asset('images/lol.jpg') }}\" alt = \"zonk\" class = \"img-circle\">

            </div>
            <div class = \"item\">
                <img src =\"{{ asset('images/paganowcy.jpg') }}\" alt = \"pagani\" class = \"img-circle\">
            </div>
        </div>

        <a class = \"left carousel-control\" href = \"#carouselOfProducts\" role = \"button\" data-slide = \"prev\">
            <span class = \"glyphicon glyphicon-chevron-left\" aria-hidden = \"true\"></span>
            <span class = \"sr-only\">Previous</span>
        </a>
        <a class = \"right carousel-control\" href = \"#carouselOfProducts\" role = \"button\" data-slide = \"next\">
            <span class = \"glyphicon glyphicon-chevron-right\" aria-hidden = \"true\"></span>
            <span class = \"sr-only\">Next</span>
        </a>
    </div>
{% endblock %}
", "@App/index.html.twig", "/var/www/html/SymfonyShop/src/AppBundle/Resources/views/index.html.twig");
    }
}
