<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* email/seasonal_products.html.twig */
class __TwigTemplate_e55d1a9c02458e306cc29e306c7b12e4 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'action' => [$this, 'block_action'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@email/default/notification/body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/seasonal_products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/seasonal_products.html.twig"));

        $this->parent = $this->loadTemplate("@email/default/notification/body.html.twig", "email/seasonal_products.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    <h2>Seasonal Products Alert: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 4, $this->source); })()), "html", null, true);
        yield " Season</h2>
    
    <spacer size=\"16\"></spacer>
    
    <p>Based on the current weather conditions, we've determined it's ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 8, $this->source); })()), "html", null, true);
        yield " season. Here are some recommended products for this season:</p>
    
    <spacer size=\"16\"></spacer>
    
    <container>
        <row>
            <columns>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                    </tr>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            yield "                        <tr>
                            <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                            <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23), "html", null, true);
            yield " DT</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "                </table>
            </columns>
        </row>
    </container>
    
    <spacer size=\"16\"></spacer>
    
    <callout class=\"primary\">
        <row>
            <columns>
                <h4>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 36, $this->source); })()), "html", null, true);
        yield " Season Tips</h4>
                <ul>
                    ";
        // line 38
        if (((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 38, $this->source); })()) == "Summer")) {
            // line 39
            yield "                        <li>Water plants regularly, preferably in the early morning</li>
                        <li>Harvest summer fruits and vegetables at their peak</li>
                        <li>Monitor for pests that thrive in warm weather</li>
                    ";
        } elseif ((        // line 42
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 42, $this->source); })()) == "Fall")) {
            // line 43
            yield "                        <li>Prepare soil for winter by adding compost</li>
                        <li>Plant cool-season crops like lettuce and spinach</li>
                        <li>Harvest root vegetables before frost</li>
                    ";
        } elseif ((        // line 46
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 46, $this->source); })()) == "Winter")) {
            // line 47
            yield "                        <li>Protect perennial plants from freezing</li>
                        <li>Plan your spring garden and order seeds</li>
                        <li>Maintain greenhouse crops with proper heating</li>
                    ";
        } elseif ((        // line 50
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 50, $this->source); })()) == "Spring")) {
            // line 51
            yield "                        <li>Start seedlings indoors for summer crops</li>
                        <li>Prepare garden beds for planting</li>
                        <li>Monitor for early season pests</li>
                    ";
        }
        // line 55
        yield "                </ul>
            </columns>
        </row>
    </callout>
    
    <spacer size=\"16\"></spacer>
    
    <p>Visit our shop to see all seasonal products and take advantage of these seasonal offerings!</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_action(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        // line 66
        yield "    <button href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_temp_shop");
        yield "\">Visit Shop</button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "email/seasonal_products.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  198 => 66,  185 => 65,  166 => 55,  160 => 51,  158 => 50,  153 => 47,  151 => 46,  146 => 43,  144 => 42,  139 => 39,  137 => 38,  132 => 36,  120 => 26,  111 => 23,  107 => 22,  104 => 21,  100 => 20,  85 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@email/default/notification/body.html.twig' %}

{% block content %}
    <h2>Seasonal Products Alert: {{ season }} Season</h2>
    
    <spacer size=\"16\"></spacer>
    
    <p>Based on the current weather conditions, we've determined it's {{ season }} season. Here are some recommended products for this season:</p>
    
    <spacer size=\"16\"></spacer>
    
    <container>
        <row>
            <columns>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                    </tr>
                    {% for product in products %}
                        <tr>
                            <td>{{ product.category }}</td>
                            <td>{{ product.price }} DT</td>
                        </tr>
                    {% endfor %}
                </table>
            </columns>
        </row>
    </container>
    
    <spacer size=\"16\"></spacer>
    
    <callout class=\"primary\">
        <row>
            <columns>
                <h4>{{ season }} Season Tips</h4>
                <ul>
                    {% if season == 'Summer' %}
                        <li>Water plants regularly, preferably in the early morning</li>
                        <li>Harvest summer fruits and vegetables at their peak</li>
                        <li>Monitor for pests that thrive in warm weather</li>
                    {% elseif season == 'Fall' %}
                        <li>Prepare soil for winter by adding compost</li>
                        <li>Plant cool-season crops like lettuce and spinach</li>
                        <li>Harvest root vegetables before frost</li>
                    {% elseif season == 'Winter' %}
                        <li>Protect perennial plants from freezing</li>
                        <li>Plan your spring garden and order seeds</li>
                        <li>Maintain greenhouse crops with proper heating</li>
                    {% elseif season == 'Spring' %}
                        <li>Start seedlings indoors for summer crops</li>
                        <li>Prepare garden beds for planting</li>
                        <li>Monitor for early season pests</li>
                    {% endif %}
                </ul>
            </columns>
        </row>
    </callout>
    
    <spacer size=\"16\"></spacer>
    
    <p>Visit our shop to see all seasonal products and take advantage of these seasonal offerings!</p>
{% endblock %}

{% block action %}
    <button href=\"{{ url('app_temp_shop') }}\">Visit Shop</button>
{% endblock %} ", "email/seasonal_products.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\email\\seasonal_products.html.twig");
    }
}
