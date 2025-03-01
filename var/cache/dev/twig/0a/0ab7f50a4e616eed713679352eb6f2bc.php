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
class __TwigTemplate_6ef3f74d3e1e777251d011b35397e9fe extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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

        yield "Produits - Fruitables";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .btn-add-product {
            background-color: #82ae46;
            border-color: #82ae46;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }
        
        .btn-add-product:hover {
            background-color: #6f9339;
            border-color: #6f9339;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .btn-add-product i {
            transition: transform 0.3s ease;
        }
        
        .btn-add-product:hover i {
            transform: rotate(90deg);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
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

        // line 33
        yield "    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Produits</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Produits</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Products List Start-->
    <div class=\"container-fluid fruite py-5\">
        <div class=\"container py-5\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"mb-0\">Produits frais</h1>
                <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_new");
        yield "\" class=\"btn btn-primary btn-add-product\">
                    <i class=\"fas fa-plus me-2\"></i> Ajouter un nouveau produit
                </a>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-12\">
                    <div class=\"row g-4\">
                        <div class=\"col-xl-3\">
                            <div class=\"input-group w-100 mx-auto d-flex\">
                                <input type=\"search\" class=\"form-control p-3\" placeholder=\"mots-clés\" aria-describedby=\"search-icon-1\">
                                <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                            </div>
                        </div>
                        <div class=\"col-6\"></div>
                        <div class=\"col-xl-3\">
                            <div class=\"bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4\">
                                <label for=\"productType\">Filtrer par type:</label>
                                <select id=\"productType\" name=\"productType\" class=\"border-0 form-select-sm bg-light me-3\" onchange=\"window.location.href=this.value\">
                                    <option value=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop");
        yield "\">Tous les types</option>
                                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["productTypes"]) || array_key_exists("productTypes", $context) ? $context["productTypes"] : (function () { throw new RuntimeError('Variable "productTypes" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 69
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop", ["type" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" ";
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "get", ["type"], "method", false, false, false, 69)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "get", ["type"], "method", false, false, false, 69) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 69)))) {
                yield "selected";
            }
            yield ">
                                            ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "season", [], "any", false, false, false, 70), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "productionMethod", [], "any", false, false, false, 70), "html", null, true);
            yield "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row g-4\">
                        <div class=\"col-lg-3\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"mb-3\">
                                        <h4>Saisons</h4>
                                        <ul class=\"list-unstyled fruite-categorie\">
                                            <li><div class=\"d-flex justify-content-between fruite-name\"><a href=\"#\"><i class=\"fas fa-sun\"></i>Été</a><span>(3)</span></div></li>
                                            <li><div class=\"d-flex justify-content-between fruite-name\"><a href=\"#\"><i class=\"fas fa-leaf\"></i>Automne</a><span>(4)</span></div></li>
                                            <li><div class=\"d-flex justify-content-between fruite-name\"><a href=\"#\"><i class=\"fas fa-snowflake\"></i>Printemps</a><span>(0)</span></div></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Weather Widget -->
                                <div class=\"col-lg-12\">
                                    ";
        // line 93
        yield from $this->loadTemplate("components/weather_widget.html.twig", "temp/shop.html.twig", 93)->unwrap()->yield($context);
        // line 94
        yield "                                </div>
                                <!-- End Weather Widget -->
                            </div>
                        </div>
                        <div class=\"col-lg-9\">
                            <div class=\"row g-4 justify-content-center\">
                                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 101
            yield "                                    <div class=\"col-md-6 col-lg-6 col-xl-4\">
                                        <div class=\"rounded position-relative fruite-item\">
                                            <div class=\"fruite-img\">
                                                <img src=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 104)), "html", null, true);
            yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                            </div>
                                            <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 106), "productionMethod", [], "any", false, false, false, 106), "html", null, true);
            yield "</div>
                                            <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                <h4>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 108), "html", null, true);
            yield "</h4>
                                                <p>Frais de nos fournisseurs</p>
                                                <div class=\"d-flex justify-content-between flex-lg-wrap mb-3\">
                                                    <p class=\"text-dark fs-5 fw-bold mb-0\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 111), "html", null, true);
            yield " DT / kg</p>
                                                    <a href=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            yield "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                        <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Voir les détails
                                                    </a>
                                                </div>
                                                <!-- QR Code Section -->
                                                <div class=\"text-center border-top pt-3 mt-2\">
                                                    <img src=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "qr_code_url", [], "any", false, false, false, 118), "html", null, true);
            yield "\" alt=\"Code QR du produit\" class=\"img-fluid\" style=\"max-width: 100px;\">
                                                    <p class=\"small text-muted mt-2 mb-0\">Scanné: <span id=\"scanDate\"></span></p>
                                                    <p class=\"small text-muted mt-2 mb-0\">Source: <span id=\"source\"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
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
        return array (  305 => 126,  291 => 118,  282 => 112,  278 => 111,  272 => 108,  267 => 106,  262 => 104,  257 => 101,  253 => 100,  245 => 94,  243 => 93,  221 => 73,  210 => 70,  201 => 69,  197 => 68,  193 => 67,  172 => 49,  157 => 37,  151 => 33,  138 => 32,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}Produits - Fruitables{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .btn-add-product {
            background-color: #82ae46;
            border-color: #82ae46;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }
        
        .btn-add-product:hover {
            background-color: #6f9339;
            border-color: #6f9339;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .btn-add-product i {
            transition: transform 0.3s ease;
        }
        
        .btn-add-product:hover i {
            transform: rotate(90deg);
        }
    </style>
{% endblock %}

{% block content %}
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Produits</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_index') }}\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Produits</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Products List Start-->
    <div class=\"container-fluid fruite py-5\">
        <div class=\"container py-5\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"mb-0\">Produits frais</h1>
                <a href=\"{{ path('admin_product_new') }}\" class=\"btn btn-primary btn-add-product\">
                    <i class=\"fas fa-plus me-2\"></i> Ajouter un nouveau produit
                </a>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-lg-12\">
                    <div class=\"row g-4\">
                        <div class=\"col-xl-3\">
                            <div class=\"input-group w-100 mx-auto d-flex\">
                                <input type=\"search\" class=\"form-control p-3\" placeholder=\"mots-clés\" aria-describedby=\"search-icon-1\">
                                <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                            </div>
                        </div>
                        <div class=\"col-6\"></div>
                        <div class=\"col-xl-3\">
                            <div class=\"bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4\">
                                <label for=\"productType\">Filtrer par type:</label>
                                <select id=\"productType\" name=\"productType\" class=\"border-0 form-select-sm bg-light me-3\" onchange=\"window.location.href=this.value\">
                                    <option value=\"{{ path('app_temp_shop') }}\">Tous les types</option>
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
                                        <h4>Saisons</h4>
                                        <ul class=\"list-unstyled fruite-categorie\">
                                            <li><div class=\"d-flex justify-content-between fruite-name\"><a href=\"#\"><i class=\"fas fa-sun\"></i>Été</a><span>(3)</span></div></li>
                                            <li><div class=\"d-flex justify-content-between fruite-name\"><a href=\"#\"><i class=\"fas fa-leaf\"></i>Automne</a><span>(4)</span></div></li>
                                            <li><div class=\"d-flex justify-content-between fruite-name\"><a href=\"#\"><i class=\"fas fa-snowflake\"></i>Printemps</a><span>(0)</span></div></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Weather Widget -->
                                <div class=\"col-lg-12\">
                                    {% include 'components/weather_widget.html.twig' %}
                                </div>
                                <!-- End Weather Widget -->
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
                                                <p>Frais de nos fournisseurs</p>
                                                <div class=\"d-flex justify-content-between flex-lg-wrap mb-3\">
                                                    <p class=\"text-dark fs-5 fw-bold mb-0\">{{ product.price }} DT / kg</p>
                                                    <a href=\"{{ path('app_temp_shop_detail', {'id': product.id}) }}\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                        <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Voir les détails
                                                    </a>
                                                </div>
                                                <!-- QR Code Section -->
                                                <div class=\"text-center border-top pt-3 mt-2\">
                                                    <img src=\"{{ product.qr_code_url }}\" alt=\"Code QR du produit\" class=\"img-fluid\" style=\"max-width: 100px;\">
                                                    <p class=\"small text-muted mt-2 mb-0\">Scanné: <span id=\"scanDate\"></span></p>
                                                    <p class=\"small text-muted mt-2 mb-0\">Source: <span id=\"source\"></span></p>
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
", "temp/shop.html.twig", "C:\\Users\\ghayt\\OneDrive\\Desktop\\PiDevReaptn-main\\templates\\temp\\shop.html.twig");
    }
}
