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

/* temp/cart.html.twig */
class __TwigTemplate_0f41fe41cfbe15ac38e155c2b626cc9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/cart.html.twig"));

        $this->parent = $this->loadTemplate("temp/base.html.twig", "temp/cart.html.twig", 1);
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

        yield "Cart - Fruitables";
        
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
        <h1 class=\"text-center text-white display-6\">Cart</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Cart</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Cart Page Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Products</th>
                        <th scope=\"col\">Name</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Quantity</th>
                        <th scope=\"col\">Total</th>
                        <th scope=\"col\">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                        ";
        // line 33
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 33, $this->source); })())) > 0)) {
            // line 34
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                yield "                                <tr>
                                    <th scope=\"row\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 38), "image", [], "any", false, false, false, 38)), "html", null, true);
                yield "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 38), "category", [], "any", false, false, false, 38), "html", null, true);
                yield "\">
                                        </div>
                                    </th>
                                    <td>
                                        <p class=\"mb-0 mt-4\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 42), "category", [], "any", false, false, false, 42), "html", null, true);
                yield "</p>
                                    </td>
                                    <td>
                                        <p class=\"mb-0 mt-4\">\$";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 45), "price", [], "any", false, false, false, 45), "html", null, true);
                yield "</p>
                                    </td>
                                    <td>
                                        <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                                            <div class=\"input-group-btn\">
                                                <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" 
                                                        data-url=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\">
                                                    <i class=\"fa fa-minus\"></i>
                                                </button>
                                            </div>
                                            <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 55), "html", null, true);
                yield "\">
                                            <div class=\"input-group-btn\">
                                                <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\"
                                                        data-url=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
                yield "\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class=\"mb-0 mt-4\">\$";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 65), "price", [], "any", false, false, false, 65) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 65)), "html", null, true);
                yield "</p>
                                    </td>
                                    <td>
                                        <a href=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-md rounded-circle bg-light border mt-4\">
                                            <i class=\"fa fa-times text-danger\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "                            <tr>
                                <td colspan=\"4\" class=\"text-end\">
                                    <strong>Total:</strong>
                                </td>
                                <td>
                                    <strong>\$";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "</strong>
                                </td>
                                <td></td>
                            </tr>
                        ";
        } else {
            // line 85
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-4\">
                                    Your cart is empty
                                </td>
                            </tr>
                        ";
        }
        // line 91
        yield "                    </tbody>
                </table>
            </div>
            ";
        // line 94
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 94, $this->source); })())) > 0)) {
            // line 95
            yield "                <div class=\"row g-4 justify-content-end\">
                    <div class=\"col-8 text-end\">
                        <a href=\"";
            // line 97
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop");
            yield "\" class=\"btn border border-secondary rounded-pill px-4 py-3 text-primary\">Continue Shopping</a>
                        <a href=\"";
            // line 98
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_checkout");
            yield "\" class=\"btn border border-secondary rounded-pill px-4 py-3 text-primary\">Proceed to Checkout</a>
                    </div>
                </div>
            ";
        }
        // line 102
        yield "        </div>
    </div>
    <!-- Cart Page End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
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

        // line 108
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.btn-plus, .btn-minus').forEach(button => {
        button.addEventListener('click', function() {
            const url = this.dataset.url;
            const input = this.closest('.quantity').querySelector('input');
            const currentValue = parseInt(input.value);
            const isPlus = this.classList.contains('btn-plus');
            
            const newValue = isPlus ? currentValue + 1 : Math.max(1, currentValue - 1);
            
            fetch(url + '?quantity=' + newValue, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.reload();
                }
            });
        });
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
        return "temp/cart.html.twig";
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
        return array (  283 => 108,  270 => 107,  256 => 102,  249 => 98,  245 => 97,  241 => 95,  239 => 94,  234 => 91,  226 => 85,  218 => 80,  211 => 75,  198 => 68,  192 => 65,  182 => 58,  176 => 55,  169 => 51,  160 => 45,  154 => 42,  145 => 38,  140 => 35,  135 => 34,  133 => 33,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}Cart - Fruitables{% endblock %}

{% block content %}
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Cart</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_index') }}\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Cart</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Cart Page Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Products</th>
                        <th scope=\"col\">Name</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Quantity</th>
                        <th scope=\"col\">Total</th>
                        <th scope=\"col\">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                        {% if items|length > 0 %}
                            {% for item in items %}
                                <tr>
                                    <th scope=\"row\">
                                        <div class=\"d-flex align-items-center\">
                                            <img src=\"{{ asset(item.product.image) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"{{ item.product.category }}\">
                                        </div>
                                    </th>
                                    <td>
                                        <p class=\"mb-0 mt-4\">{{ item.product.category }}</p>
                                    </td>
                                    <td>
                                        <p class=\"mb-0 mt-4\">\${{ item.product.price }}</p>
                                    </td>
                                    <td>
                                        <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                                            <div class=\"input-group-btn\">
                                                <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" 
                                                        data-url=\"{{ path('app_cart_update', {'id': item.product.id}) }}\">
                                                    <i class=\"fa fa-minus\"></i>
                                                </button>
                                            </div>
                                            <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"{{ item.quantity }}\">
                                            <div class=\"input-group-btn\">
                                                <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\"
                                                        data-url=\"{{ path('app_cart_update', {'id': item.product.id}) }}\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class=\"mb-0 mt-4\">\${{ item.product.price * item.quantity }}</p>
                                    </td>
                                    <td>
                                        <a href=\"{{ path('app_cart_remove', {'id': item.product.id}) }}\" 
                                           class=\"btn btn-md rounded-circle bg-light border mt-4\">
                                            <i class=\"fa fa-times text-danger\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            <tr>
                                <td colspan=\"4\" class=\"text-end\">
                                    <strong>Total:</strong>
                                </td>
                                <td>
                                    <strong>\${{ total }}</strong>
                                </td>
                                <td></td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-4\">
                                    Your cart is empty
                                </td>
                            </tr>
                        {% endif %}
                    </tbody>
                </table>
            </div>
            {% if items|length > 0 %}
                <div class=\"row g-4 justify-content-end\">
                    <div class=\"col-8 text-end\">
                        <a href=\"{{ path('app_temp_shop') }}\" class=\"btn border border-secondary rounded-pill px-4 py-3 text-primary\">Continue Shopping</a>
                        <a href=\"{{ path('app_temp_checkout') }}\" class=\"btn border border-secondary rounded-pill px-4 py-3 text-primary\">Proceed to Checkout</a>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
    <!-- Cart Page End -->
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.btn-plus, .btn-minus').forEach(button => {
        button.addEventListener('click', function() {
            const url = this.dataset.url;
            const input = this.closest('.quantity').querySelector('input');
            const currentValue = parseInt(input.value);
            const isPlus = this.classList.contains('btn-plus');
            
            const newValue = isPlus ? currentValue + 1 : Math.max(1, currentValue - 1);
            
            fetch(url + '?quantity=' + newValue, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.reload();
                }
            });
        });
    });
});
</script>
{% endblock %}
", "temp/cart.html.twig", "C:\\Users\\ghayt\\PiDevReaptn\\templates\\temp\\cart.html.twig");
    }
}
