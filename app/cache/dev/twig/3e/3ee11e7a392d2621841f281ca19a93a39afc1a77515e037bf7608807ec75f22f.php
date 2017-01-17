<?php

/* @App/product/index.html.twig */
class __TwigTemplate_5753d08b5c3d56b173838c930b95969d395f14a183be93f7fc96875e985090ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/base.html.twig", "@App/product/index.html.twig", 1);
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
        $__internal_0b181411aa7062aeb474fbafedc2eeff4c409a84bb3271d0ce7941994ead0d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b181411aa7062aeb474fbafedc2eeff4c409a84bb3271d0ce7941994ead0d07->enter($__internal_0b181411aa7062aeb474fbafedc2eeff4c409a84bb3271d0ce7941994ead0d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b181411aa7062aeb474fbafedc2eeff4c409a84bb3271d0ce7941994ead0d07->leave($__internal_0b181411aa7062aeb474fbafedc2eeff4c409a84bb3271d0ce7941994ead0d07_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c0ab467c23fe2e93be748060c47a3ab693af6406894d701f7416d979f411b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0ab467c23fe2e93be748060c47a3ab693af6406894d701f7416d979f411b1a->enter($__internal_7c0ab467c23fe2e93be748060c47a3ab693af6406894d701f7416d979f411b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Products list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "photo", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 25
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 26
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addToCart", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\">Dodaj do koszyka</a>
                    ";
            }
            // line 28
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>


";
        
        $__internal_7c0ab467c23fe2e93be748060c47a3ab693af6406894d701f7416d979f411b1a->leave($__internal_7c0ab467c23fe2e93be748060c47a3ab693af6406894d701f7416d979f411b1a_prof);

    }

    public function getTemplateName()
    {
        return "@App/product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  94 => 28,  88 => 26,  86 => 25,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  63 => 19,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
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
    <h1>Products list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for product in products %}
            <tr>
                <td><a href=\"{{ path('product_show', { 'id': product.id }) }}\">{{ product.id }}</a></td>
                <td>{{ product.name }}</td>
                <td>{{ product.description }}</td>
                <td>{{ product.price }}</td>
                <td>{{ product.photo }}</td>
                <td>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <td><a href=\"{{ path('addToCart', {'id': product.id}) }}\">Dodaj do koszyka</a>
                    {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "@App/product/index.html.twig", "/var/www/html/SymfonyShop/src/AppBundle/Resources/views/product/index.html.twig");
    }
}
