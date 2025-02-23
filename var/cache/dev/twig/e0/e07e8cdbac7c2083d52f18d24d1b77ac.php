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

/* temp/shop.html.twig */
class __TwigTemplate_91cb474f30bdb3d2d8b177e2154fb004 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/shop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/shop.html.twig"));

        $this->parent = $this->loadTemplate("temp/base.html.twig", "temp/shop.html.twig", 1);
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

        yield "Products - Fruitables";
        
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
        yield "    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Products</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Products</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Products List Start-->
    <div class=\"container-fluid fruite py-5\">
        <div class=\"container py-5\">
            <h1 class=\"mb-4\">Fresh Products</h1>
            <div class=\"row g-4\">
                <div class=\"col-lg-12\">
                    <div class=\"row g-4\">
                        <div class=\"col-xl-3\">
                            <div class=\"input-group w-100 mx-auto d-flex\">
                                <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                                <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                            </div>
                        </div>
                        <div class=\"col-6\"></div>
                        <div class=\"col-xl-3\">
                            <div class=\"bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4\">
                                <label for=\"productType\">Filter by Type:</label>
                                <select id=\"productType\" name=\"productType\" class=\"border-0 form-select-sm bg-light me-3\" onchange=\"window.location.href=this.value\">
                                    <option value=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop");
        yield "\">All Types</option>
                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productTypes"]) || array_key_exists("productTypes", $context) ? $context["productTypes"] : (function () { throw new RuntimeError('Variable "productTypes" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 37
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop", ["type" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", ["type"], "method", false, false, false, 37)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", ["type"], "method", false, false, false, 37) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 37)))) {
                yield "selected";
            }
            yield ">
                                            ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "season", [], "any", false, false, false, 38), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "productionMethod", [], "any", false, false, false, 38), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row g-4\">
                        <div class=\"col-lg-3\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"mb-3\">
                                        <h4>Seasons</h4>
                                        <ul class=\"list-unstyled fruite-categorie\">
                                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 53
            yield "                                                <li>
                                                    <div class=\"d-flex justify-content-between fruite-name\">
                                                        <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop", ["type" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "types", [], "any", false, false, false, 55), 0, [], "array", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\">
                                                            <i class=\"fas ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 56), "html", null, true);
            yield " me-2\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 56), "html", null, true);
            yield "
                                                        </a>
                                                        <span>(";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "count", [], "any", false, false, false, 58), "html", null, true);
            yield ")</span>
                                                    </div>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-9\">
                            <div class=\"row g-4 justify-content-center\">
                                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 70
            yield "                                    <div class=\"col-md-6 col-lg-6 col-xl-4\">
                                        <div class=\"rounded position-relative fruite-item\">
                                            <div class=\"fruite-img\">
                                                <img src=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 73)), "html", null, true);
            yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                            </div>
                                            <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 75), "productionMethod", [], "any", false, false, false, 75), "html", null, true);
            yield "</div>
                                            <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                <h4>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 77), "html", null, true);
            yield "</h4>
                                                <p>Fresh from our suppliers</p>
                                                <div class=\"d-flex justify-content-between flex-lg-wrap mb-3\">
                                                    <p class=\"text-dark fs-5 fw-bold mb-0\">\$";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80), "html", null, true);
            yield " / kg</p>
                                                    <a href=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                        <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> View Details
                                                    </a>
                                                </div>
                                                <!-- QR Code Section -->
                                                <div class=\"text-center border-top pt-3 mt-2\">
                                                    <img src=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "qr_code_url", [], "any", false, false, false, 87), "html", null, true);
            yield "\" alt=\"Product QR Code\" class=\"img-fluid\" style=\"max-width: 100px;\">
                                                    <p class=\"small text-muted mt-2 mb-0\">Scan for details</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products List End-->
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
        return "temp/shop.html.twig";
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
        return array (  264 => 94,  251 => 87,  242 => 81,  238 => 80,  232 => 77,  227 => 75,  222 => 73,  217 => 70,  213 => 69,  204 => 62,  194 => 58,  187 => 56,  183 => 55,  179 => 53,  175 => 52,  162 => 41,  151 => 38,  142 => 37,  138 => 36,  134 => 35,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}Products - Fruitables{% endblock %}

{% block content %}
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Products</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_index') }}\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Products</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Products List Start-->
    <div class=\"container-fluid fruite py-5\">
        <div class=\"container py-5\">
            <h1 class=\"mb-4\">Fresh Products</h1>
            <div class=\"row g-4\">
                <div class=\"col-lg-12\">
                    <div class=\"row g-4\">
                        <div class=\"col-xl-3\">
                            <div class=\"input-group w-100 mx-auto d-flex\">
                                <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                                <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                            </div>
                        </div>
                        <div class=\"col-6\"></div>
                        <div class=\"col-xl-3\">
                            <div class=\"bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4\">
                                <label for=\"productType\">Filter by Type:</label>
                                <select id=\"productType\" name=\"productType\" class=\"border-0 form-select-sm bg-light me-3\" onchange=\"window.location.href=this.value\">
                                    <option value=\"{{ path('app_temp_shop') }}\">All Types</option>
                                    {% for type in productTypes %}
                                        <option value=\"{{ path('app_temp_shop', {'type': type.id}) }}\" {% if app.request.get('type') is not null and app.request.get('type') == type.id %}selected{% endif %}>
                                            {{ type.season }} - {{ type.productionMethod }}
                                        </option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row g-4\">
                        <div class=\"col-lg-3\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"mb-3\">
                                        <h4>Seasons</h4>
                                        <ul class=\"list-unstyled fruite-categorie\">
                                            {% for category in categories %}
                                                <li>
                                                    <div class=\"d-flex justify-content-between fruite-name\">
                                                        <a href=\"{{ path('app_temp_shop', {'type': category.types[0].id}) }}\">
                                                            <i class=\"fas {{ category.icon }} me-2\"></i>{{ category.name }}
                                                        </a>
                                                        <span>({{ category.count }})</span>
                                                    </div>
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-9\">
                            <div class=\"row g-4 justify-content-center\">
                                {% for product in products %}
                                    <div class=\"col-md-6 col-lg-6 col-xl-4\">
                                        <div class=\"rounded position-relative fruite-item\">
                                            <div class=\"fruite-img\">
                                                <img src=\"{{ asset(product.image) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                            </div>
                                            <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">{{ product.type.productionMethod }}</div>
                                            <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                <h4>{{ product.category }}</h4>
                                                <p>Fresh from our suppliers</p>
                                                <div class=\"d-flex justify-content-between flex-lg-wrap mb-3\">
                                                    <p class=\"text-dark fs-5 fw-bold mb-0\">\${{ product.price }} / kg</p>
                                                    <a href=\"{{ path('app_temp_shop_detail', {'id': product.id}) }}\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                        <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> View Details
                                                    </a>
                                                </div>
                                                <!-- QR Code Section -->
                                                <div class=\"text-center border-top pt-3 mt-2\">
                                                    <img src=\"{{ product.qr_code_url }}\" alt=\"Product QR Code\" class=\"img-fluid\" style=\"max-width: 100px;\">
                                                    <p class=\"small text-muted mt-2 mb-0\">Scan for details</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products List End-->
{% endblock %}
", "temp/shop.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\temp\\shop.html.twig");
    }
}
