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
class __TwigTemplate_2ca0f1906b83607c815f672d3592ede2 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - Fruitables";
        
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
        <h1 class=\"text-center text-white display-6\">Shop Detail</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop");
        yield "\">Shop</a></li>
            <li class=\"breadcrumb-item active text-white\">Shop Detail</li>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        yield "\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <h4 class=\"fw-bold mb-3\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
        yield "</h4>
                            <p class=\"mb-3\">Season: ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "type", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
        yield "</p>
                            <h5 class=\"fw-bold mb-3\">\$";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "price", [], "any", false, false, false, 33), "html", null, true);
        yield " / kg</h5>
                            <div class=\"d-flex mb-4\">
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <p class=\"mb-4\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
        yield "</p>
                            <div class=\"input-group quantity mb-5\" style=\"width: 100px;\">
                                <div class=\"input-group-btn\">
                                    <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\">
                                        <i class=\"fa fa-minus\"></i>
                                    </button>
                                </div>
                                <input type=\"text\" id=\"quantity\" class=\"form-control form-control-sm text-center border-0\" value=\"1\">
                                <div class=\"input-group-btn\">
                                    <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                        <i class=\"fa fa-plus\"></i>
                                    </button>
                                </div>
                            </div>
                            <a href=\"#\" class=\"btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary add-to-cart\" 
                               data-product-id=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
        yield "\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart
                            </a>
                        </div>
                        <div class=\"col-lg-12\">
                            <nav>
                                <div class=\"nav nav-tabs mb-3\">
                                    <button class=\"nav-link active border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                        id=\"nav-about-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-about\"
                                        aria-controls=\"nav-about\" aria-selected=\"true\">Description</button>
                                    <button class=\"nav-link border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                        id=\"nav-mission-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-mission\"
                                        aria-controls=\"nav-mission\" aria-selected=\"false\">Reviews</button>
                                </div>
                            </nav>
                            <div class=\"tab-content mb-5\">
                                <div class=\"tab-pane active\" id=\"nav-about\" role=\"tabpanel\" aria-labelledby=\"nav-about-tab\">
                                    <p>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73), "html", null, true);
        yield "</p>
                                    <div class=\"px-2\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-6\">
                                                <div class=\"row bg-light align-items-center text-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Season</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 82, $this->source); })()), "type", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                                <div class=\"row text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Production Method</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 90, $this->source); })()), "type", [], "any", false, false, false, 90), "productionMethod", [], "any", false, false, false, 90), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"nav-mission\" role=\"tabpanel\" aria-labelledby=\"nav-mission-tab\">
                                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 99
            yield "                                        <div class=\"d-flex mb-4\">
                                            <img src=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatar.jpg"), "html", null, true);
            yield "\" class=\"img-fluid rounded-circle p-3\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                            <div class=\"\">
                                                <p class=\"mb-2\" style=\"font-size: 14px;\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 102), "html", null, true);
            yield "</p>
                                                <div class=\"d-flex justify-content-between\">
                                                    <h5>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 104), "html", null, true);
            yield "</h5>
                                                    <div class=\"d-flex mb-3\">
                                                        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 107
                yield "                                                            <i class=\"fa fa-star ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 107))) {
                    yield "text-secondary";
                }
                yield "\"></i>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            yield "                                                    </div>
                                                </div>
                                                <p>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 111), "html", null, true);
            yield "</p>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-xl-3\">
                    <div class=\"row g-4 fruite\">
                        <div class=\"col-lg-12\">
                            <div class=\"mb-4\">
                                <h4>Related products</h4>
                                <div class=\"row g-4\">
                                    ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["featured_products"]) || array_key_exists("featured_products", $context) ? $context["featured_products"] : (function () { throw new RuntimeError('Variable "featured_products" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["featured"]) {
            // line 127
            yield "                                        <div class=\"col-lg-12\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "image", [], "any", false, false, false, 130))), "html", null, true);
            yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "name", [], "any", false, false, false, 133), "html", null, true);
            yield "</h4>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "price", [], "any", false, false, false, 135), "html", null, true);
            yield " / kg</p>
                                                        <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                            <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> View
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
        // line 144
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

    // line 155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Quantity buttons
    const quantityInput = document.getElementById('quantity');
    
    document.querySelector('.btn-minus').addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        if (value > 1) {
            quantityInput.value = value - 1;
        }
    });
    
    document.querySelector('.btn-plus').addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        quantityInput.value = value + 1;
    });
    
    // Add to cart button
    document.querySelector('.add-to-cart').addEventListener('click', function(e) {
        e.preventDefault();
        const productId = this.dataset.productId;
        const quantity = document.getElementById('quantity').value;
        
        window.location.href = \"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179)]), "html", null, true);
        yield "\" + \"?quantity=\" + quantity;
    });
});
</script>
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
        return array (  391 => 179,  366 => 156,  353 => 155,  333 => 144,  319 => 136,  315 => 135,  310 => 133,  304 => 130,  299 => 127,  295 => 126,  282 => 115,  272 => 111,  268 => 109,  257 => 107,  253 => 106,  248 => 104,  243 => 102,  238 => 100,  235 => 99,  231 => 98,  220 => 90,  209 => 82,  197 => 73,  177 => 56,  159 => 41,  148 => 33,  144 => 32,  140 => 31,  130 => 26,  112 => 11,  108 => 10,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}{{ product.name }} - Fruitables{% endblock %}

{% block content %}
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Shop Detail</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_index') }}\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_shop') }}\">Shop</a></li>
            <li class=\"breadcrumb-item active text-white\">Shop Detail</li>
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
                                    <img src=\"{{ asset(product.image) }}\" class=\"img-fluid rounded\" alt=\"{{ product.name }}\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <h4 class=\"fw-bold mb-3\">{{ product.name }}</h4>
                            <p class=\"mb-3\">Season: {{ product.type.name }}</p>
                            <h5 class=\"fw-bold mb-3\">\${{ product.price }} / kg</h5>
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
                                <input type=\"text\" id=\"quantity\" class=\"form-control form-control-sm text-center border-0\" value=\"1\">
                                <div class=\"input-group-btn\">
                                    <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                        <i class=\"fa fa-plus\"></i>
                                    </button>
                                </div>
                            </div>
                            <a href=\"#\" class=\"btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary add-to-cart\" 
                               data-product-id=\"{{ product.id }}\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart
                            </a>
                        </div>
                        <div class=\"col-lg-12\">
                            <nav>
                                <div class=\"nav nav-tabs mb-3\">
                                    <button class=\"nav-link active border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                        id=\"nav-about-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-about\"
                                        aria-controls=\"nav-about\" aria-selected=\"true\">Description</button>
                                    <button class=\"nav-link border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                        id=\"nav-mission-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-mission\"
                                        aria-controls=\"nav-mission\" aria-selected=\"false\">Reviews</button>
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
                                                        <p class=\"mb-0\">Season</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">{{ product.type.name }}</p>
                                                    </div>
                                                </div>
                                                <div class=\"row text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Production Method</p>
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
                                <h4>Related products</h4>
                                <div class=\"row g-4\">
                                    {% for featured in featured_products %}
                                        <div class=\"col-lg-12\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset('img/' ~ featured.image) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                                </div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>{{ featured.name }}</h4>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\${{ featured.price }} / kg</p>
                                                        <a href=\"{{ path('app_temp_shop_detail', {'id': featured.id}) }}\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                            <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> View
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

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Quantity buttons
    const quantityInput = document.getElementById('quantity');
    
    document.querySelector('.btn-minus').addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        if (value > 1) {
            quantityInput.value = value - 1;
        }
    });
    
    document.querySelector('.btn-plus').addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        quantityInput.value = value + 1;
    });
    
    // Add to cart button
    document.querySelector('.add-to-cart').addEventListener('click', function(e) {
        e.preventDefault();
        const productId = this.dataset.productId;
        const quantity = document.getElementById('quantity').value;
        
        window.location.href = \"{{ path('app_cart_add', {'id': product.id}) }}\" + \"?quantity=\" + quantity;
    });
});
</script>
{% endblock %}
", "temp/shop-detail.html.twig", "C:\\Users\\ghayt\\PiDevReaptn\\templates\\temp\\shop-detail.html.twig");
    }
}
