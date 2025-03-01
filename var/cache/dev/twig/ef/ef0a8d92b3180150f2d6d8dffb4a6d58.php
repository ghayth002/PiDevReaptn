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

/* notification/seasonal_products_alert.html.twig */
class __TwigTemplate_8c8771e00456fd3ab755de73948c2ffe extends Template
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
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "temp/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/seasonal_products_alert.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/seasonal_products_alert.html.twig"));

        $this->parent = $this->loadTemplate("temp/base.html.twig", "notification/seasonal_products_alert.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Seasonal Products Alert";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow\">
                    <div class=\"card-header bg-success text-white\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-leaf me-2\"></i> Seasonal Products Alert</h4>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 15
        if ((isset($context["notification_sent"]) || array_key_exists("notification_sent", $context) ? $context["notification_sent"] : (function () { throw new RuntimeError('Variable "notification_sent" does not exist.', 15, $this->source); })())) {
            // line 16
            yield "                            <div class=\"alert alert-success\">
                                <i class=\"fas fa-check-circle me-2\"></i> Seasonal products notification has been sent!
                                ";
            // line 18
            if ((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 18, $this->source); })())) {
                // line 19
                yield "                                    <p class=\"mb-0 small\">A notification has been sent to: <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 19, $this->source); })()), "html", null, true);
                yield "</strong></p>
                                ";
            }
            // line 21
            yield "                            </div>
                        ";
        }
        // line 23
        yield "                        
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center mb-3\">
                                    <div class=\"me-3\">
                                        <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 28, $this->source); })()), "weather", [], "any", false, false, false, 28), "icon_url", [], "any", false, false, false, 28), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 28, $this->source); })()), "weather", [], "any", false, false, false, 28), "description", [], "any", false, false, false, 28), "html", null, true);
        yield "\" class=\"img-fluid\" style=\"width: 60px;\">
                                    </div>
                                    <div>
                                        <h4 class=\"mb-0\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 31, $this->source); })()), "temperature", [], "any", false, false, false, 31), "current", [], "any", false, false, false, 31)), "html", null, true);
        yield "°C</h4>
                                        <p class=\"text-muted mb-0\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 32, $this->source); })()), "location", [], "any", false, false, false, 32), "city", [], "any", false, false, false, 32), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 32, $this->source); })()), "location", [], "any", false, false, false, 32), "country", [], "any", false, false, false, 32)), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                                
                                <div class=\"alert alert-info\">
                                    <h5 class=\"alert-heading\">
                                        ";
        // line 38
        if (((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 38, $this->source); })()) == "Summer")) {
            // line 39
            yield "                                            <i class=\"fas fa-sun me-2\"></i> Summer Season
                                        ";
        } elseif ((        // line 40
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 40, $this->source); })()) == "Fall")) {
            // line 41
            yield "                                            <i class=\"fas fa-leaf me-2\"></i> Fall Season
                                        ";
        } elseif ((        // line 42
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 42, $this->source); })()) == "Winter")) {
            // line 43
            yield "                                            <i class=\"fas fa-snowflake me-2\"></i> Winter Season
                                        ";
        } elseif ((        // line 44
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 44, $this->source); })()) == "Spring")) {
            // line 45
            yield "                                            <i class=\"fas fa-seedling me-2\"></i> Spring Season
                                        ";
        }
        // line 47
        yield "                                    </h5>
                                    <p>Based on the current temperature (";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 48, $this->source); })()), "temperature", [], "any", false, false, false, 48), "current", [], "any", false, false, false, 48)), "html", null, true);
        yield "°C), we've determined it's ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 48, $this->source); })()), "html", null, true);
        yield " season.</p>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"card h-100\">
                                    <div class=\"card-header bg-light\">
                                        <h5 class=\"mb-0\">
                                            ";
        // line 56
        if (((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 56, $this->source); })()) == "Summer")) {
            // line 57
            yield "                                                <i class=\"fas fa-sun me-2 text-warning\"></i>
                                            ";
        } elseif ((        // line 58
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 58, $this->source); })()) == "Fall")) {
            // line 59
            yield "                                                <i class=\"fas fa-leaf me-2 text-danger\"></i>
                                            ";
        } elseif ((        // line 60
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 60, $this->source); })()) == "Winter")) {
            // line 61
            yield "                                                <i class=\"fas fa-snowflake me-2 text-info\"></i>
                                            ";
        } elseif ((        // line 62
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 62, $this->source); })()) == "Spring")) {
            // line 63
            yield "                                                <i class=\"fas fa-seedling me-2 text-success\"></i>
                                            ";
        }
        // line 65
        yield "                                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 65, $this->source); })()), "html", null, true);
        yield " Season Tips
                                        </h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul class=\"mb-0\">
                                            ";
        // line 70
        if (((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 70, $this->source); })()) == "Summer")) {
            // line 71
            yield "                                                <li>Water plants regularly, preferably in the early morning</li>
                                                <li>Harvest summer fruits and vegetables at their peak</li>
                                                <li>Monitor for pests that thrive in warm weather</li>
                                            ";
        } elseif ((        // line 74
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 74, $this->source); })()) == "Fall")) {
            // line 75
            yield "                                                <li>Prepare soil for winter by adding compost</li>
                                                <li>Plant cool-season crops like lettuce and spinach</li>
                                                <li>Harvest root vegetables before frost</li>
                                            ";
        } elseif ((        // line 78
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 78, $this->source); })()) == "Winter")) {
            // line 79
            yield "                                                <li>Protect perennial plants from freezing</li>
                                                <li>Plan your spring garden and order seeds</li>
                                                <li>Maintain greenhouse crops with proper heating</li>
                                            ";
        } elseif ((        // line 82
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 82, $this->source); })()) == "Spring")) {
            // line 83
            yield "                                                <li>Start seedlings indoors for summer crops</li>
                                                <li>Prepare garden beds for planting</li>
                                                <li>Monitor for early season pests</li>
                                            ";
        }
        // line 87
        yield "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h5 class=\"border-bottom pb-2 mb-3\">
                            ";
        // line 94
        if (((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 94, $this->source); })()) == "Summer")) {
            // line 95
            yield "                                <i class=\"fas fa-sun me-2 text-warning\"></i>
                            ";
        } elseif ((        // line 96
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 96, $this->source); })()) == "Fall")) {
            // line 97
            yield "                                <i class=\"fas fa-leaf me-2 text-danger\"></i>
                            ";
        } elseif ((        // line 98
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 98, $this->source); })()) == "Winter")) {
            // line 99
            yield "                                <i class=\"fas fa-snowflake me-2 text-info\"></i>
                            ";
        } elseif ((        // line 100
(isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 100, $this->source); })()) == "Spring")) {
            // line 101
            yield "                                <i class=\"fas fa-seedling me-2 text-success\"></i>
                            ";
        }
        // line 103
        yield "                            Recommended ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 103, $this->source); })()), "html", null, true);
        yield " Season Products
                        </h5>
                        
                        <div class=\"row g-3\">
                            ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 108
            yield "                                <div class=\"col-md-4\">
                                    <div class=\"card h-100 product-card\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 111), "html", null, true);
            yield "</h5>
                                            <p class=\"card-text text-primary mb-0\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 112), "html", null, true);
            yield " DT</p>
                                            <p class=\"card-text\"><small class=\"text-muted\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["season"]) || array_key_exists("season", $context) ? $context["season"] : (function () { throw new RuntimeError('Variable "season" does not exist.', 113, $this->source); })()), "html", null, true);
            yield " Season</small></p>
                                        </div>
                                        <div class=\"card-footer bg-transparent\">
                                            <a href=\"#\" class=\"btn btn-sm btn-outline-primary w-100\">
                                                <i class=\"fas fa-shopping-cart me-1\"></i> Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                        </div>
                    </div>
                    <div class=\"card-footer bg-light\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_subscribe");
        yield "\" class=\"btn btn-sm btn-outline-primary\">
                                <i class=\"fas fa-bell me-1\"></i> Manage Notifications
                            </a>
                            <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop");
        yield "\" class=\"btn btn-sm btn-success\">
                                <i class=\"fas fa-shopping-basket me-1\"></i> Visit Shop
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.product-card {
    transition: transform 0.2s;
    border-radius: 8px;
    overflow: hidden;
}
.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
</style>
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
        return "notification/seasonal_products_alert.html.twig";
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
        return array (  338 => 130,  332 => 127,  326 => 123,  310 => 113,  306 => 112,  302 => 111,  297 => 108,  293 => 107,  285 => 103,  281 => 101,  279 => 100,  276 => 99,  274 => 98,  271 => 97,  269 => 96,  266 => 95,  264 => 94,  255 => 87,  249 => 83,  247 => 82,  242 => 79,  240 => 78,  235 => 75,  233 => 74,  228 => 71,  226 => 70,  217 => 65,  213 => 63,  211 => 62,  208 => 61,  206 => 60,  203 => 59,  201 => 58,  198 => 57,  196 => 56,  183 => 48,  180 => 47,  176 => 45,  174 => 44,  171 => 43,  169 => 42,  166 => 41,  164 => 40,  161 => 39,  159 => 38,  148 => 32,  144 => 31,  136 => 28,  129 => 23,  125 => 21,  119 => 19,  117 => 18,  113 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}Seasonal Products Alert{% endblock %}

{% block content %}
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow\">
                    <div class=\"card-header bg-success text-white\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-leaf me-2\"></i> Seasonal Products Alert</h4>
                    </div>
                    <div class=\"card-body\">
                        {% if notification_sent %}
                            <div class=\"alert alert-success\">
                                <i class=\"fas fa-check-circle me-2\"></i> Seasonal products notification has been sent!
                                {% if email %}
                                    <p class=\"mb-0 small\">A notification has been sent to: <strong>{{ email }}</strong></p>
                                {% endif %}
                            </div>
                        {% endif %}
                        
                        <div class=\"row mb-4\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center mb-3\">
                                    <div class=\"me-3\">
                                        <img src=\"{{ weather.weather.icon_url }}\" alt=\"{{ weather.weather.description }}\" class=\"img-fluid\" style=\"width: 60px;\">
                                    </div>
                                    <div>
                                        <h4 class=\"mb-0\">{{ weather.temperature.current|round }}°C</h4>
                                        <p class=\"text-muted mb-0\">{{ weather.location.city }}, {{ weather.location.country|upper }}</p>
                                    </div>
                                </div>
                                
                                <div class=\"alert alert-info\">
                                    <h5 class=\"alert-heading\">
                                        {% if season == 'Summer' %}
                                            <i class=\"fas fa-sun me-2\"></i> Summer Season
                                        {% elseif season == 'Fall' %}
                                            <i class=\"fas fa-leaf me-2\"></i> Fall Season
                                        {% elseif season == 'Winter' %}
                                            <i class=\"fas fa-snowflake me-2\"></i> Winter Season
                                        {% elseif season == 'Spring' %}
                                            <i class=\"fas fa-seedling me-2\"></i> Spring Season
                                        {% endif %}
                                    </h5>
                                    <p>Based on the current temperature ({{ weather.temperature.current|round }}°C), we've determined it's {{ season }} season.</p>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"card h-100\">
                                    <div class=\"card-header bg-light\">
                                        <h5 class=\"mb-0\">
                                            {% if season == 'Summer' %}
                                                <i class=\"fas fa-sun me-2 text-warning\"></i>
                                            {% elseif season == 'Fall' %}
                                                <i class=\"fas fa-leaf me-2 text-danger\"></i>
                                            {% elseif season == 'Winter' %}
                                                <i class=\"fas fa-snowflake me-2 text-info\"></i>
                                            {% elseif season == 'Spring' %}
                                                <i class=\"fas fa-seedling me-2 text-success\"></i>
                                            {% endif %}
                                            {{ season }} Season Tips
                                        </h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul class=\"mb-0\">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h5 class=\"border-bottom pb-2 mb-3\">
                            {% if season == 'Summer' %}
                                <i class=\"fas fa-sun me-2 text-warning\"></i>
                            {% elseif season == 'Fall' %}
                                <i class=\"fas fa-leaf me-2 text-danger\"></i>
                            {% elseif season == 'Winter' %}
                                <i class=\"fas fa-snowflake me-2 text-info\"></i>
                            {% elseif season == 'Spring' %}
                                <i class=\"fas fa-seedling me-2 text-success\"></i>
                            {% endif %}
                            Recommended {{ season }} Season Products
                        </h5>
                        
                        <div class=\"row g-3\">
                            {% for product in products %}
                                <div class=\"col-md-4\">
                                    <div class=\"card h-100 product-card\">
                                        <div class=\"card-body\">
                                            <h5 class=\"card-title\">{{ product.category }}</h5>
                                            <p class=\"card-text text-primary mb-0\">{{ product.price }} DT</p>
                                            <p class=\"card-text\"><small class=\"text-muted\">{{ season }} Season</small></p>
                                        </div>
                                        <div class=\"card-footer bg-transparent\">
                                            <a href=\"#\" class=\"btn btn-sm btn-outline-primary w-100\">
                                                <i class=\"fas fa-shopping-cart me-1\"></i> Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"card-footer bg-light\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"{{ path('app_notifications_subscribe') }}\" class=\"btn btn-sm btn-outline-primary\">
                                <i class=\"fas fa-bell me-1\"></i> Manage Notifications
                            </a>
                            <a href=\"{{ path('app_temp_shop') }}\" class=\"btn btn-sm btn-success\">
                                <i class=\"fas fa-shopping-basket me-1\"></i> Visit Shop
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.product-card {
    transition: transform 0.2s;
    border-radius: 8px;
    overflow: hidden;
}
.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
</style>
{% endblock %} ", "notification/seasonal_products_alert.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\notification\\seasonal_products_alert.html.twig");
    }
}
