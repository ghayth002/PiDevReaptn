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

        yield "Product Detail - Fruitables";
        
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
        <h1 class=\"text-center text-white display-6\">Product Detail</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop");
        yield "\">Products</a></li>
            <li class=\"breadcrumb-item active text-white\">Product Detail</li>
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
                            <p class=\"mb-3\">Season: ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "type", [], "any", false, false, false, 32), "season", [], "any", false, false, false, 32), "html", null, true);
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
                                <input type=\"text\" id=\"quantity\" class=\"form-control form-control-sm text-center border-0\" value=\"1\" readonly>
                                <div class=\"input-group-btn\">
                                    <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                        <i class=\"fa fa-plus\"></i>
                                    </button>
                                </div>
                            </div>
                            <button class=\"btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart
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
                                        aria-controls=\"nav-mission\" aria-selected=\"false\">Reviews</button>
                                </div>
                            </nav>
                            <div class=\"tab-content mb-5\">
                                <div class=\"tab-pane active\" id=\"nav-about\" role=\"tabpanel\" aria-labelledby=\"nav-about-tab\">
                                    <p>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), "html", null, true);
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
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "type", [], "any", false, false, false, 81), "season", [], "any", false, false, false, 81), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                                <div class=\"row text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Production Method</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 89, $this->source); })()), "type", [], "any", false, false, false, 89), "productionMethod", [], "any", false, false, false, 89), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"nav-mission\" role=\"tabpanel\" aria-labelledby=\"nav-mission-tab\">
                                    <!-- Add this section after the product details and before the reviews -->
                                    <div class=\"col-lg-12 mt-5\">
                                        <div class=\"card shadow\">
                                            <div class=\"card-header bg-primary text-white\">
                                                <h4 class=\"mb-0\">
                                                    <i class=\"fas fa-robot me-2\"></i> AI-Powered Recommendations
                                                </h4>
                                            </div>
                                            <div class=\"card-body\">
                                                <!-- Seasonal Recommendations -->
                                                ";
        // line 107
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 107, $this->source); })()), "seasonal", [], "any", false, false, false, 107)) > 0)) {
            // line 108
            yield "                                                <div class=\"mb-4\">
                                                    <h5 class=\"text-success\">
                                                        <i class=\"fas fa-calendar-alt me-2\"></i> Seasonal Picks
                                                    </h5>
                                                    <div class=\"row g-4\">
                                                        ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 113, $this->source); })()), "seasonal", [], "any", false, false, false, 113));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 114
                yield "                                                            <div class=\"col-md-4\">
                                                                <div class=\"card h-100\">
                                                                    <img src=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 116)), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 116), "html", null, true);
                yield "\">
                                                                    <div class=\"card-body\">
                                                                        <h5 class=\"card-title\">";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 118), "html", null, true);
                yield "</h5>
                                                                        <p class=\"card-text text-success\">€";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 119), "html", null, true);
                yield " / kg</p>
                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <span class=\"badge bg-success\">";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 121), "season", [], "any", false, false, false, 121), "html", null, true);
                yield "</span>
                                                                            <a href=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 122)]), "html", null, true);
                yield "\" 
                                                                               class=\"btn btn-sm btn-outline-primary\">
                                                                                <i class=\"fas fa-eye\"></i> View
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "                                                    </div>
                                                </div>
                                                ";
        }
        // line 134
        yield "
                                                <!-- Similar Products -->
                                                ";
        // line 136
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 136, $this->source); })()), "similar", [], "any", false, false, false, 136)) > 0)) {
            // line 137
            yield "                                                <div class=\"mb-4\">
                                                    <h5 class=\"text-info\">
                                                        <i class=\"fas fa-layer-group me-2\"></i> Similar Products
                                                    </h5>
                                                    <div class=\"row g-4\">
                                                        ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 142, $this->source); })()), "similar", [], "any", false, false, false, 142));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 143
                yield "                                                            <div class=\"col-md-4\">
                                                                <div class=\"card h-100\">
                                                                    <img src=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 145)), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 145), "html", null, true);
                yield "\">
                                                                    <div class=\"card-body\">
                                                                        <h5 class=\"card-title\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 147), "html", null, true);
                yield "</h5>
                                                                        <p class=\"card-text text-success\">€";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 148), "html", null, true);
                yield " / kg</p>
                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <span class=\"badge bg-info\">";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 150), "productionMethod", [], "any", false, false, false, 150), "html", null, true);
                yield "</span>
                                                                            <a href=\"";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 151)]), "html", null, true);
                yield "\" 
                                                                               class=\"btn btn-sm btn-outline-primary\">
                                                                                <i class=\"fas fa-eye\"></i> View
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            yield "                                                    </div>
                                                </div>
                                                ";
        }
        // line 163
        yield "
                                                <!-- Complementary Products -->
                                                ";
        // line 165
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 165, $this->source); })()), "complementary", [], "any", false, false, false, 165)) > 0)) {
            // line 166
            yield "                                                <div>
                                                    <h5 class=\"text-warning\">
                                                        <i class=\"fas fa-puzzle-piece me-2\"></i> Perfect Pairings
                                                    </h5>
                                                    <div class=\"row g-4\">
                                                        ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 171, $this->source); })()), "complementary", [], "any", false, false, false, 171));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 172
                yield "                                                            <div class=\"col-md-4\">
                                                                <div class=\"card h-100\">
                                                                    <img src=\"";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 174)), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 174), "html", null, true);
                yield "\">
                                                                    <div class=\"card-body\">
                                                                        <h5 class=\"card-title\">";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 176), "html", null, true);
                yield "</h5>
                                                                        <p class=\"card-text text-success\">€";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 177), "html", null, true);
                yield " / kg</p>
                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <span class=\"badge bg-warning text-dark\">Complementary</span>
                                                                            <a href=\"";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 180)]), "html", null, true);
                yield "\" 
                                                                               class=\"btn btn-sm btn-outline-primary\">
                                                                                <i class=\"fas fa-eye\"></i> View
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            yield "                                                    </div>
                                                </div>
                                                ";
        }
        // line 192
        yield "                                            </div>
                                        </div>
                                    </div>
                                    ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 195, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 196
            yield "                                        <div class=\"d-flex mb-4\">
                                            <img src=\"";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatar.jpg"), "html", null, true);
            yield "\" class=\"img-fluid rounded-circle p-3\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                            <div class=\"\">
                                                <p class=\"mb-2\" style=\"font-size: 14px;\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "date", [], "any", false, false, false, 199), "html", null, true);
            yield "</p>
                                                <div class=\"d-flex justify-content-between\">
                                                    <h5>";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 201), "html", null, true);
            yield "</h5>
                                                    <div class=\"d-flex mb-3\">
                                                        ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 204
                yield "                                                            <i class=\"fa fa-star ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 204))) {
                    yield "text-secondary";
                }
                yield "\"></i>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            yield "                                                    </div>
                                                </div>
                                                <p>";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "comment", [], "any", false, false, false, 208), "html", null, true);
            yield "</p>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
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
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["relatedProducts"]) || array_key_exists("relatedProducts", $context) ? $context["relatedProducts"] : (function () { throw new RuntimeError('Variable "relatedProducts" does not exist.', 223, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["featured"]) {
            // line 224
            yield "                                        <div class=\"col-lg-12\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "image", [], "any", false, false, false, 227)), "html", null, true);
            yield "\" class=\"img-fluid w-100 rounded-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "category", [], "any", false, false, false, 227), "html", null, true);
            yield "\">
                                                </div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "category", [], "any", false, false, false, 230), "html", null, true);
            yield "</h4>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\$";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "price", [], "any", false, false, false, 232), "html", null, true);
            yield " / kg</p>
                                                        <a href=\"";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["featured"], "id", [], "any", false, false, false, 233)]), "html", null, true);
            yield "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                            <i class=\"fa fa-eye me-2 text-primary\"></i> View
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
        // line 241
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
        return array (  520 => 241,  506 => 233,  502 => 232,  497 => 230,  489 => 227,  484 => 224,  480 => 223,  467 => 212,  457 => 208,  453 => 206,  442 => 204,  438 => 203,  433 => 201,  428 => 199,  423 => 197,  420 => 196,  416 => 195,  411 => 192,  406 => 189,  391 => 180,  385 => 177,  381 => 176,  374 => 174,  370 => 172,  366 => 171,  359 => 166,  357 => 165,  353 => 163,  348 => 160,  333 => 151,  329 => 150,  324 => 148,  320 => 147,  313 => 145,  309 => 143,  305 => 142,  298 => 137,  296 => 136,  292 => 134,  287 => 131,  272 => 122,  268 => 121,  263 => 119,  259 => 118,  252 => 116,  248 => 114,  244 => 113,  237 => 108,  235 => 107,  214 => 89,  203 => 81,  191 => 72,  157 => 41,  146 => 33,  142 => 32,  138 => 31,  128 => 26,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}Product Detail - Fruitables{% endblock %}

{% block content %}
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Product Detail</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_index') }}\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_shop') }}\">Products</a></li>
            <li class=\"breadcrumb-item active text-white\">Product Detail</li>
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
                            <p class=\"mb-3\">Season: {{ product.type.season }}</p>
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
                                <input type=\"text\" id=\"quantity\" class=\"form-control form-control-sm text-center border-0\" value=\"1\" readonly>
                                <div class=\"input-group-btn\">
                                    <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                        <i class=\"fa fa-plus\"></i>
                                    </button>
                                </div>
                            </div>
                            <button class=\"btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary\">
                                <i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart
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
                                                        <p class=\"mb-0\">{{ product.type.season }}</p>
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
                                    <!-- Add this section after the product details and before the reviews -->
                                    <div class=\"col-lg-12 mt-5\">
                                        <div class=\"card shadow\">
                                            <div class=\"card-header bg-primary text-white\">
                                                <h4 class=\"mb-0\">
                                                    <i class=\"fas fa-robot me-2\"></i> AI-Powered Recommendations
                                                </h4>
                                            </div>
                                            <div class=\"card-body\">
                                                <!-- Seasonal Recommendations -->
                                                {% if recommendations.seasonal|length > 0 %}
                                                <div class=\"mb-4\">
                                                    <h5 class=\"text-success\">
                                                        <i class=\"fas fa-calendar-alt me-2\"></i> Seasonal Picks
                                                    </h5>
                                                    <div class=\"row g-4\">
                                                        {% for product in recommendations.seasonal %}
                                                            <div class=\"col-md-4\">
                                                                <div class=\"card h-100\">
                                                                    <img src=\"{{ asset(product.image) }}\" class=\"card-img-top\" alt=\"{{ product.category }}\">
                                                                    <div class=\"card-body\">
                                                                        <h5 class=\"card-title\">{{ product.category }}</h5>
                                                                        <p class=\"card-text text-success\">€{{ product.price }} / kg</p>
                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <span class=\"badge bg-success\">{{ product.type.season }}</span>
                                                                            <a href=\"{{ path('app_temp_shop_detail', {'id': product.id}) }}\" 
                                                                               class=\"btn btn-sm btn-outline-primary\">
                                                                                <i class=\"fas fa-eye\"></i> View
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                                {% endif %}

                                                <!-- Similar Products -->
                                                {% if recommendations.similar|length > 0 %}
                                                <div class=\"mb-4\">
                                                    <h5 class=\"text-info\">
                                                        <i class=\"fas fa-layer-group me-2\"></i> Similar Products
                                                    </h5>
                                                    <div class=\"row g-4\">
                                                        {% for product in recommendations.similar %}
                                                            <div class=\"col-md-4\">
                                                                <div class=\"card h-100\">
                                                                    <img src=\"{{ asset(product.image) }}\" class=\"card-img-top\" alt=\"{{ product.category }}\">
                                                                    <div class=\"card-body\">
                                                                        <h5 class=\"card-title\">{{ product.category }}</h5>
                                                                        <p class=\"card-text text-success\">€{{ product.price }} / kg</p>
                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <span class=\"badge bg-info\">{{ product.type.productionMethod }}</span>
                                                                            <a href=\"{{ path('app_temp_shop_detail', {'id': product.id}) }}\" 
                                                                               class=\"btn btn-sm btn-outline-primary\">
                                                                                <i class=\"fas fa-eye\"></i> View
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                                {% endif %}

                                                <!-- Complementary Products -->
                                                {% if recommendations.complementary|length > 0 %}
                                                <div>
                                                    <h5 class=\"text-warning\">
                                                        <i class=\"fas fa-puzzle-piece me-2\"></i> Perfect Pairings
                                                    </h5>
                                                    <div class=\"row g-4\">
                                                        {% for product in recommendations.complementary %}
                                                            <div class=\"col-md-4\">
                                                                <div class=\"card h-100\">
                                                                    <img src=\"{{ asset(product.image) }}\" class=\"card-img-top\" alt=\"{{ product.category }}\">
                                                                    <div class=\"card-body\">
                                                                        <h5 class=\"card-title\">{{ product.category }}</h5>
                                                                        <p class=\"card-text text-success\">€{{ product.price }} / kg</p>
                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <span class=\"badge bg-warning text-dark\">Complementary</span>
                                                                            <a href=\"{{ path('app_temp_shop_detail', {'id': product.id}) }}\" 
                                                                               class=\"btn btn-sm btn-outline-primary\">
                                                                                <i class=\"fas fa-eye\"></i> View
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
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
                                    {% for featured in relatedProducts %}
                                        <div class=\"col-lg-12\">
                                            <div class=\"rounded position-relative fruite-item\">
                                                <div class=\"fruite-img\">
                                                    <img src=\"{{ asset(featured.image) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"{{ featured.category }}\">
                                                </div>
                                                <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                    <h4>{{ featured.category }}</h4>
                                                    <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                        <p class=\"text-dark fs-5 fw-bold mb-0\">\${{ featured.price }} / kg</p>
                                                        <a href=\"{{ path('app_temp_shop_detail', {'id': featured.id}) }}\" class=\"btn border border-secondary rounded-pill px-3 text-primary\">
                                                            <i class=\"fa fa-eye me-2 text-primary\"></i> View
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
