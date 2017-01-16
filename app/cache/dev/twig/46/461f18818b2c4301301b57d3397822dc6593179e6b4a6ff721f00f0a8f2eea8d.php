<?php

/* base.html.twig */
class __TwigTemplate_f152a16aba8c7cdceb53c61bcb1bfdda645868ae4b278496507e019c514e2b71 extends Twig_Template
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
        $__internal_3f1e60a57862f068e1ccbfd6d9dc1d3ace85200ec8f199cf51769c50055fb5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1e60a57862f068e1ccbfd6d9dc1d3ace85200ec8f199cf51769c50055fb5a7->enter($__internal_3f1e60a57862f068e1ccbfd6d9dc1d3ace85200ec8f199cf51769c50055fb5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3f1e60a57862f068e1ccbfd6d9dc1d3ace85200ec8f199cf51769c50055fb5a7->leave($__internal_3f1e60a57862f068e1ccbfd6d9dc1d3ace85200ec8f199cf51769c50055fb5a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f140d809b2816c6183d9c9056d5bc4ab848d6ddd5563e4a9c1f51d3a3c6215be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f140d809b2816c6183d9c9056d5bc4ab848d6ddd5563e4a9c1f51d3a3c6215be->enter($__internal_f140d809b2816c6183d9c9056d5bc4ab848d6ddd5563e4a9c1f51d3a3c6215be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f140d809b2816c6183d9c9056d5bc4ab848d6ddd5563e4a9c1f51d3a3c6215be->leave($__internal_f140d809b2816c6183d9c9056d5bc4ab848d6ddd5563e4a9c1f51d3a3c6215be_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65cc61847cb3d6304778285cce24282ebb71e383b25ed0ea92711625a1a382a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65cc61847cb3d6304778285cce24282ebb71e383b25ed0ea92711625a1a382a2->enter($__internal_65cc61847cb3d6304778285cce24282ebb71e383b25ed0ea92711625a1a382a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_65cc61847cb3d6304778285cce24282ebb71e383b25ed0ea92711625a1a382a2->leave($__internal_65cc61847cb3d6304778285cce24282ebb71e383b25ed0ea92711625a1a382a2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b5fb9c299b34c3604edccfa26505eda206c13ef89386f92ec1b773dd67fb6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5fb9c299b34c3604edccfa26505eda206c13ef89386f92ec1b773dd67fb6d5->enter($__internal_5b5fb9c299b34c3604edccfa26505eda206c13ef89386f92ec1b773dd67fb6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b5fb9c299b34c3604edccfa26505eda206c13ef89386f92ec1b773dd67fb6d5->leave($__internal_5b5fb9c299b34c3604edccfa26505eda206c13ef89386f92ec1b773dd67fb6d5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4aa3fcd0f697588c95acd339f7ade484a463bda4556711587c95d38e3df66450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa3fcd0f697588c95acd339f7ade484a463bda4556711587c95d38e3df66450->enter($__internal_4aa3fcd0f697588c95acd339f7ade484a463bda4556711587c95d38e3df66450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4aa3fcd0f697588c95acd339f7ade484a463bda4556711587c95d38e3df66450->leave($__internal_4aa3fcd0f697588c95acd339f7ade484a463bda4556711587c95d38e3df66450_prof);

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
", "base.html.twig", "/var/www/html/Shop/Shop/app/Resources/views/base.html.twig");
    }
}
