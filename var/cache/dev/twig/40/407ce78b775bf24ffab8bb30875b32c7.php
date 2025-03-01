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

/* temp/shop-detail.html.twig */
class __TwigTemplate_2733c3cfdf942d5bed2e826c239250da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/shop-detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/shop-detail.html.twig"));

        $this->parent = $this->loadTemplate("temp/base.html.twig", "temp/shop-detail.html.twig", 1);
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

        yield "Détails du produit - Fruitables";
        
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
        <h1 class=\"text-center text-white display-6\">Détails du produit</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop");
        yield "\">Produits</a></li>
            <li class=\"breadcrumb-item active text-white\">Détails du produit</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Single Product Start -->
    <div class=\"container-fluid py-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"row g-4 mb-5\">
                <div class=\"col-lg-8 col-xl-9\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-6\">
                            <div class=\"border rounded\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26)), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "category", [], "any", false, false, false, 26), "html", null, true);
        yield "\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <h4 class=\"fw-bold mb-3\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "category", [], "any", false, false, false, 31), "html", null, true);
        yield "</h4>
                            <p class=\"mb-3\">Prix: ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "price", [], "any", false, false, false, 32), "html", null, true);
        yield " €</p>
                            <p class=\"mb-3\">Méthode de production: ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), "productionMethod", [], "any", false, false, false, 33), "html", null, true);
        yield "</p>
                            <p class=\"mb-3\">Saison: ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34), "season", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
                            <p class=\"small text-muted mt-2 mb-0\">Scanné: <span id=\"scanDate\"></span></p>
                            <p class=\"small text-muted mt-2 mb-0\">Source: <span id=\"source\"></span></p>
                            <h5 class=\"fw-bold mb-3\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 37, $this->source); })()), "price", [], "any", false, false, false, 37), "html", null, true);
        yield " DT / kg</h5>
                            <div class=\"d-flex mb-4\">
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <p class=\"mb-4\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), "html", null, true);
        yield "</p>
                            <div class=\"input-group quantity mb-5\" style=\"width: 100px;\">
                                <div class=\"input-group-btn\">
                                    <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\">
                                        <i class=\"fa fa-minus\"></i>
                                    </button>
                                </div>
                                <input type=\"text\" id=\"quantity\" class=\"form-control form-control-sm text-center border-0\" value=\"1\" readonly>
                                <div class=\"input-group-btn\">
                                    <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                        <i class=\"fa fa-plus\"></i>
                                    </button>
                                </div>
                            </div>
                            <button class=\"btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier
                            </button>
                        </div>
                        <div class=\"col-lg-12\">
                            <nav>
                                <div class=\"nav nav-tabs mb-3\">
                                    <button class=\"nav-link active border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                        id=\"nav-about-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-about\"
                                        aria-controls=\"nav-about\" aria-selected=\"true\">Description</button>
                                    <button class=\"nav-link border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                        id=\"nav-mission-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-mission\"
                                        aria-controls=\"nav-mission\" aria-selected=\"false\">Avis</button>
                                </div>
                            </nav>
                            <div class=\"tab-content mb-5\">
                                <div class=\"tab-pane active\" id=\"nav-about\" role=\"tabpanel\" aria-labelledby=\"nav-about-tab\">
                                    <p>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), "html", null, true);
        yield "</p>
                                    <div class=\"px-2\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-6\">
                                                <div class=\"row bg-light align-items-center text-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Saison</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 85, $this->source); })()), "type", [], "any", false, false, false, 85), "season", [], "any", false, false, false, 85), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                                <div class=\"row text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Méthode de production</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "type", [], "any", false, false, false, 93), "productionMethod", [], "any", false, false, false, 93), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"nav-mission\" role=\"tabpanel\" aria-labelledby=\"nav-mission-tab\">
                                    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 102
            yield "                                        <div class=\"d-flex mb-4\">
                                            <img src=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatar.jpg"), "html", null, true);
            yield "\" class=\"img-fluid rounded-circle p-3\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                            <div class=\"\">
                                                <p class=\"mb-2\" style=\"font-size: 14px;\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 105), "html", null, true);
            yield "</p>
                                                <div class=\"d-flex justify-content-between\">
                                                    <h5>";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 107), "html", null, true);
            yield "</h5>
                                                    <div class=\"d-flex mb-3\">
                                                        ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 110
                yield "                                                            <i class=\"fa fa-star ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 110))) {
                    yield "text-secondary";
                }
                yield "\"></i>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "                                                    </div>
                                                </div>
                                                <p>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 114), "html", null, true);
            yield "</p>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-xl-3\">
                    <div class=\"row g-4 fruite\">
                        <div class=\"col-lg-12\">
                            <div class=\"mb-4\">
                                <h4>Produits associés</h4>
                                <div class=\"row g-4\">
                                    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["relatedProducts"]) || array_key_exists("relatedProducts", $context) ? $context["relatedProducts"] : (function () { throw new RuntimeError('Variable "relatedProducts" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["featured"]) {
            // line 130
            yield "                                        <div class=\"col-lg-12\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "image", [], "any", false, false, false, 133)), "html", null, true);
            yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "category", [], "any", false, false, false, 133), "html", null, true);
            yield "\">
                                                </div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "category", [], "any", false, false, false, 136), "html", null, true);
            yield "</h4>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "price", [], "any", false, false, false, 138), "html", null, true);
            yield " / kg</p>
                                                        <a href=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "id", [], "any", false, false, false, 139)]), "html", null, true);
            yield "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                            <i class=\"fa fa-eye me-2 text-primary\"></i> Voir
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['featured'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product End -->
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
        return "temp/shop-detail.html.twig";
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
        return array (  339 => 147,  325 => 139,  321 => 138,  316 => 136,  308 => 133,  303 => 130,  299 => 129,  286 => 118,  276 => 114,  272 => 112,  261 => 110,  257 => 109,  252 => 107,  247 => 105,  242 => 103,  239 => 102,  235 => 101,  224 => 93,  213 => 85,  201 => 76,  167 => 45,  156 => 37,  150 => 34,  146 => 33,  142 => 32,  138 => 31,  128 => 26,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}Détails du produit - Fruitables{% endblock %}

{% block content %}
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Détails du produit</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_index') }}\">Accueil</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_shop') }}\">Produits</a></li>
            <li class=\"breadcrumb-item active text-white\">Détails du produit</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Single Product Start -->
    <div class=\"container-fluid py-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"row g-4 mb-5\">
                <div class=\"col-lg-8 col-xl-9\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-6\">
                            <div class=\"border rounded\">
                                <a href=\"#\">
                                    <img src=\"{{ asset(product.image) }}\" class=\"img-fluid rounded\" alt=\"{{ product.category }}\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <h4 class=\"fw-bold mb-3\">{{ product.category }}</h4>
                            <p class=\"mb-3\">Prix: {{ product.price }} €</p>
                            <p class=\"mb-3\">Méthode de production: {{ product.type.productionMethod }}</p>
                            <p class=\"mb-3\">Saison: {{ product.type.season }}</p>
                            <p class=\"small text-muted mt-2 mb-0\">Scanné: <span id=\"scanDate\"></span></p>
                            <p class=\"small text-muted mt-2 mb-0\">Source: <span id=\"source\"></span></p>
                            <h5 class=\"fw-bold mb-3\">{{ product.price }} DT / kg</h5>
                            <div class=\"d-flex mb-4\">
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <p class=\"mb-4\">{{ product.description }}</p>
                            <div class=\"input-group quantity mb-5\" style=\"width: 100px;\">
                                <div class=\"input-group-btn\">
                                    <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\">
                                        <i class=\"fa fa-minus\"></i>
                                    </button>
                                </div>
                                <input type=\"text\" id=\"quantity\" class=\"form-control form-control-sm text-center border-0\" value=\"1\" readonly>
                                <div class=\"input-group-btn\">
                                    <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                        <i class=\"fa fa-plus\"></i>
                                    </button>
                                </div>
                            </div>
                            <button class=\"btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Ajouter au panier
                            </button>
                        </div>
                        <div class=\"col-lg-12\">
                            <nav>
                                <div class=\"nav nav-tabs mb-3\">
                                    <button class=\"nav-link active border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                        id=\"nav-about-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-about\"
                                        aria-controls=\"nav-about\" aria-selected=\"true\">Description</button>
                                    <button class=\"nav-link border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                        id=\"nav-mission-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-mission\"
                                        aria-controls=\"nav-mission\" aria-selected=\"false\">Avis</button>
                                </div>
                            </nav>
                            <div class=\"tab-content mb-5\">
                                <div class=\"tab-pane active\" id=\"nav-about\" role=\"tabpanel\" aria-labelledby=\"nav-about-tab\">
                                    <p>{{ product.description }}</p>
                                    <div class=\"px-2\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-6\">
                                                <div class=\"row bg-light align-items-center text-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Saison</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">{{ product.type.season }}</p>
                                                    </div>
                                                </div>
                                                <div class=\"row text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Méthode de production</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">{{ product.type.productionMethod }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"nav-mission\" role=\"tabpanel\" aria-labelledby=\"nav-mission-tab\">
                                    {% for review in reviews %}
                                        <div class=\"d-flex mb-4\">
                                            <img src=\"{{ asset('img/avatar.jpg') }}\" class=\"img-fluid rounded-circle p-3\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                            <div class=\"\">
                                                <p class=\"mb-2\" style=\"font-size: 14px;\">{{ review.date }}</p>
                                                <div class=\"d-flex justify-content-between\">
                                                    <h5>{{ review.author }}</h5>
                                                    <div class=\"d-flex mb-3\">
                                                        {% for i in 1..5 %}
                                                            <i class=\"fa fa-star {% if i <= review.rating %}text-secondary{% endif %}\"></i>
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                                <p>{{ review.comment }}</p>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-xl-3\">
                    <div class=\"row g-4 fruite\">
                        <div class=\"col-lg-12\">
                            <div class=\"mb-4\">
                                <h4>Produits associés</h4>
                                <div class=\"row g-4\">
                                    {% for featured in relatedProducts %}
                                        <div class=\"col-lg-12\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset(featured.image) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"{{ featured.category }}\">
                                                </div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>{{ featured.category }}</h4>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">€{{ featured.price }} / kg</p>
                                                        <a href=\"{{ path('app_temp_shop_detail', {'id': featured.id}) }}\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                            <i class=\"fa fa-eye me-2 text-primary\"></i> Voir
                                                        </a>
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
    </div>
    <!-- Single Product End -->
{% endblock %}
", "temp/shop-detail.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\temp\\shop-detail.html.twig");
    }
}
