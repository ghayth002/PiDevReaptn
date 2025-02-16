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

/* temp/admin/order_detail.html.twig */
class __TwigTemplate_92ef9535a0bf13da01dd3fda6f717281 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/order_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/order_detail.html.twig"));

        $this->parent = $this->loadTemplate("temp/base.html.twig", "temp/admin/order_detail.html.twig", 1);
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

        yield "Order Details - Fruitables";
        
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
        <h1 class=\"text-center text-white display-6\">Order Details</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_orders");
        yield "\">Orders</a></li>
            <li class=\"breadcrumb-item active text-white\">Order #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Order Details Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Order Items</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 38, $this->source); })()), "items", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            yield "                                            <tr>
                                                <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 40), "category", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                                                <td>\$";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 42), 2, ".", ","), "html", null, true);
            yield "</td>
                                                <td>\$";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 43) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 43)), 2, ".", ","), "html", null, true);
            yield "</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan=\"3\" class=\"text-end\"><strong>Total:</strong></td>
                                            <td><strong>\$";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 50, $this->source); })()), "total", [], "any", false, false, false, 50), 2, ".", ","), "html", null, true);
        yield "</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Customer Details</h5>
                        </div>
                        <div class=\"card-body\">
                            <p><strong>Name:</strong> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 64, $this->source); })()), "firstName", [], "any", false, false, false, 64), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 64, $this->source); })()), "lastName", [], "any", false, false, false, 64), "html", null, true);
        yield "</p>
                            <p><strong>Email:</strong> ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), "html", null, true);
        yield "</p>
                            <p><strong>Phone:</strong> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 66, $this->source); })()), "phone", [], "any", false, false, false, 66), "html", null, true);
        yield "</p>
                            <p><strong>Address:</strong> ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 67, $this->source); })()), "address", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
                            <p><strong>City:</strong> ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()), "city", [], "any", false, false, false, 68), "html", null, true);
        yield "</p>
                            <p><strong>State:</strong> ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()), "state", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
                            <p><strong>Zip Code:</strong> ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 70, $this->source); })()), "zipCode", [], "any", false, false, false, 70), "html", null, true);
        yield "</p>
                            <p><strong>Country:</strong> ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 71, $this->source); })()), "country", [], "any", false, false, false, 71), "html", null, true);
        yield "</p>
                            <p><strong>Payment Method:</strong> ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 72, $this->source); })()), "paymentMethod", [], "any", false, false, false, 72)), ["_" => " "]), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Order Status</h5>
                        </div>
                        <div class=\"card-body\">
                            <form action=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
        yield "\" method=\"post\">
                                <div class=\"mb-3\">
                                    <select name=\"status\" class=\"form-select\">
                                        <option value=\"pending\" ";
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 83, $this->source); })()), "status", [], "any", false, false, false, 83) == "pending")) {
            yield "selected";
        }
        yield ">Pending</option>
                                        <option value=\"processing\" ";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 84, $this->source); })()), "status", [], "any", false, false, false, 84) == "processing")) {
            yield "selected";
        }
        yield ">Processing</option>
                                        <option value=\"shipped\" ";
        // line 85
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 85, $this->source); })()), "status", [], "any", false, false, false, 85) == "shipped")) {
            yield "selected";
        }
        yield ">Shipped</option>
                                        <option value=\"delivered\" ";
        // line 86
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 86, $this->source); })()), "status", [], "any", false, false, false, 86) == "delivered")) {
            yield "selected";
        }
        yield ">Delivered</option>
                                        <option value=\"cancelled\" ";
        // line 87
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 87, $this->source); })()), "status", [], "any", false, false, false, 87) == "cancelled")) {
            yield "selected";
        }
        yield ">Cancelled</option>
                                    </select>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary w-100\">Update Status</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Order Details End -->
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
        return "temp/admin/order_detail.html.twig";
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
        return array (  269 => 87,  263 => 86,  257 => 85,  251 => 84,  245 => 83,  239 => 80,  228 => 72,  224 => 71,  220 => 70,  216 => 69,  212 => 68,  208 => 67,  204 => 66,  200 => 65,  194 => 64,  177 => 50,  171 => 46,  162 => 43,  158 => 42,  154 => 41,  150 => 40,  147 => 39,  143 => 38,  114 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}Order Details - Fruitables{% endblock %}

{% block content %}
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Order Details</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_index') }}\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_orders') }}\">Orders</a></li>
            <li class=\"breadcrumb-item active text-white\">Order #{{ order.id }}</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Order Details Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Order Items</h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for item in order.items %}
                                            <tr>
                                                <td>{{ item.product.category }}</td>
                                                <td>{{ item.quantity }}</td>
                                                <td>\${{ item.price|number_format(2, '.', ',') }}</td>
                                                <td>\${{ (item.price * item.quantity)|number_format(2, '.', ',') }}</td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan=\"3\" class=\"text-end\"><strong>Total:</strong></td>
                                            <td><strong>\${{ order.total|number_format(2, '.', ',') }}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Customer Details</h5>
                        </div>
                        <div class=\"card-body\">
                            <p><strong>Name:</strong> {{ order.firstName }} {{ order.lastName }}</p>
                            <p><strong>Email:</strong> {{ order.email }}</p>
                            <p><strong>Phone:</strong> {{ order.phone }}</p>
                            <p><strong>Address:</strong> {{ order.address }}</p>
                            <p><strong>City:</strong> {{ order.city }}</p>
                            <p><strong>State:</strong> {{ order.state }}</p>
                            <p><strong>Zip Code:</strong> {{ order.zipCode }}</p>
                            <p><strong>Country:</strong> {{ order.country }}</p>
                            <p><strong>Payment Method:</strong> {{ order.paymentMethod|title|replace({'_': ' '}) }}</p>
                        </div>
                    </div>
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">Order Status</h5>
                        </div>
                        <div class=\"card-body\">
                            <form action=\"{{ path('app_admin_order_status', {'id': order.id}) }}\" method=\"post\">
                                <div class=\"mb-3\">
                                    <select name=\"status\" class=\"form-select\">
                                        <option value=\"pending\" {% if order.status == 'pending' %}selected{% endif %}>Pending</option>
                                        <option value=\"processing\" {% if order.status == 'processing' %}selected{% endif %}>Processing</option>
                                        <option value=\"shipped\" {% if order.status == 'shipped' %}selected{% endif %}>Shipped</option>
                                        <option value=\"delivered\" {% if order.status == 'delivered' %}selected{% endif %}>Delivered</option>
                                        <option value=\"cancelled\" {% if order.status == 'cancelled' %}selected{% endif %}>Cancelled</option>
                                    </select>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary w-100\">Update Status</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Order Details End -->
{% endblock %}
", "temp/admin/order_detail.html.twig", "C:\\Users\\ghayt\\PiDevReaptn\\templates\\temp\\admin\\order_detail.html.twig");
    }
}
