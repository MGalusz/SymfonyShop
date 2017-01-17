<?php

/* base.html.twig */
class __TwigTemplate_13def9b28ec9c2df6d9c84ccc6b7cc4eed72b9619e31c92c9d2b1d684089eaa4 extends Twig_Template
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
        $__internal_50290d9916ed59043c231e85acaa13c1e124e3cf5552b809898d295474bf3a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50290d9916ed59043c231e85acaa13c1e124e3cf5552b809898d295474bf3a92->enter($__internal_50290d9916ed59043c231e85acaa13c1e124e3cf5552b809898d295474bf3a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_50290d9916ed59043c231e85acaa13c1e124e3cf5552b809898d295474bf3a92->leave($__internal_50290d9916ed59043c231e85acaa13c1e124e3cf5552b809898d295474bf3a92_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_374c11f4e4b62fef62d1d15fdaa270cc3da2cffd544dcc2d02ac33bbc49906b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374c11f4e4b62fef62d1d15fdaa270cc3da2cffd544dcc2d02ac33bbc49906b5->enter($__internal_374c11f4e4b62fef62d1d15fdaa270cc3da2cffd544dcc2d02ac33bbc49906b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_374c11f4e4b62fef62d1d15fdaa270cc3da2cffd544dcc2d02ac33bbc49906b5->leave($__internal_374c11f4e4b62fef62d1d15fdaa270cc3da2cffd544dcc2d02ac33bbc49906b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_013dbc5f2e6dbacb3095a789155fadd09ceb521ab1134bede5237360b3671bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013dbc5f2e6dbacb3095a789155fadd09ceb521ab1134bede5237360b3671bd2->enter($__internal_013dbc5f2e6dbacb3095a789155fadd09ceb521ab1134bede5237360b3671bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_013dbc5f2e6dbacb3095a789155fadd09ceb521ab1134bede5237360b3671bd2->leave($__internal_013dbc5f2e6dbacb3095a789155fadd09ceb521ab1134bede5237360b3671bd2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffc815741eacefd86c461105eb51313a8bf6370284390faef655b3654fa3ab6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc815741eacefd86c461105eb51313a8bf6370284390faef655b3654fa3ab6f->enter($__internal_ffc815741eacefd86c461105eb51313a8bf6370284390faef655b3654fa3ab6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ffc815741eacefd86c461105eb51313a8bf6370284390faef655b3654fa3ab6f->leave($__internal_ffc815741eacefd86c461105eb51313a8bf6370284390faef655b3654fa3ab6f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56a5b84655228fa2dcee1b14b367c11683c078ea1a57723571379ea34470147f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a5b84655228fa2dcee1b14b367c11683c078ea1a57723571379ea34470147f->enter($__internal_56a5b84655228fa2dcee1b14b367c11683c078ea1a57723571379ea34470147f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_56a5b84655228fa2dcee1b14b367c11683c078ea1a57723571379ea34470147f->leave($__internal_56a5b84655228fa2dcee1b14b367c11683c078ea1a57723571379ea34470147f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/SymfonyShop/app/Resources/views/base.html.twig");
    }
}
