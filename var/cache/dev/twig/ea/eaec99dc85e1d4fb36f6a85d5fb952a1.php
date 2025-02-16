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

/* temp/admin/order.html.twig */
class __TwigTemplate_7e338db526be718eaff153e44ea68528 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/order.html.twig"));

        $this->parent = $this->loadTemplate("temp/base.html.twig", "temp/admin/order.html.twig", 1);
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

        yield "Order Management - Fruitables";
        
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
        <h1 class=\"text-center text-white display-6\">Order Management</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\">Home</a></li>
            <li class=\"breadcrumb-item active text-white\">Orders</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Order Management Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "                <div class=\"alert alert-success\">
                    ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "            
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Email</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 40
            yield "                            <tr>
                                <td>#";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "firstName", [], "any", false, false, false, 42), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "lastName", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "email", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                <td>\$";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 44), 2, ".", ","), "html", null, true);
            yield "</td>
                                <td>
                                    <form action=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
                                        <select name=\"status\" class=\"form-select form-select-sm\" onchange=\"this.form.submit()\">
                                            <option value=\"pending\" ";
            // line 48
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 48) == "pending")) {
                yield "selected";
            }
            yield ">Pending</option>
                                            <option value=\"processing\" ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 49) == "processing")) {
                yield "selected";
            }
            yield ">Processing</option>
                                            <option value=\"shipped\" ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 50) == "shipped")) {
                yield "selected";
            }
            yield ">Shipped</option>
                                            <option value=\"delivered\" ";
            // line 51
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 51) == "delivered")) {
                yield "selected";
            }
            yield ">Delivered</option>
                                            <option value=\"cancelled\" ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 52) == "cancelled")) {
                yield "selected";
            }
            yield ">Cancelled</option>
                                        </select>
                                    </form>
                                </td>
                                <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 56), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_order_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 67
        if (!$context['_iterated']) {
            // line 64
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center\">No orders found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Order Management End -->
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
        return "temp/admin/order.html.twig";
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
        return array (  242 => 68,  233 => 64,  231 => 67,  221 => 58,  216 => 56,  207 => 52,  201 => 51,  195 => 50,  189 => 49,  183 => 48,  178 => 46,  173 => 44,  169 => 43,  163 => 42,  159 => 41,  156 => 40,  151 => 39,  134 => 24,  125 => 21,  122 => 20,  118 => 19,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}Order Management - Fruitables{% endblock %}

{% block content %}
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Order Management</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_index') }}\">Home</a></li>
            <li class=\"breadcrumb-item active text-white\">Orders</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Order Management Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}
            
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Email</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for order in orders %}
                            <tr>
                                <td>#{{ order.id }}</td>
                                <td>{{ order.firstName }} {{ order.lastName }}</td>
                                <td>{{ order.email }}</td>
                                <td>\${{ order.total|number_format(2, '.', ',') }}</td>
                                <td>
                                    <form action=\"{{ path('app_admin_order_status', {'id': order.id}) }}\" method=\"post\" class=\"d-inline\">
                                        <select name=\"status\" class=\"form-select form-select-sm\" onchange=\"this.form.submit()\">
                                            <option value=\"pending\" {% if order.status == 'pending' %}selected{% endif %}>Pending</option>
                                            <option value=\"processing\" {% if order.status == 'processing' %}selected{% endif %}>Processing</option>
                                            <option value=\"shipped\" {% if order.status == 'shipped' %}selected{% endif %}>Shipped</option>
                                            <option value=\"delivered\" {% if order.status == 'delivered' %}selected{% endif %}>Delivered</option>
                                            <option value=\"cancelled\" {% if order.status == 'cancelled' %}selected{% endif %}>Cancelled</option>
                                        </select>
                                    </form>
                                </td>
                                <td>{{ order.createdAt|date('Y-m-d H:i') }}</td>
                                <td>
                                    <a href=\"{{ path('app_admin_order_detail', {'id': order.id}) }}\" class=\"btn btn-sm btn-info\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center\">No orders found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Order Management End -->
{% endblock %}
", "temp/admin/order.html.twig", "C:\\Users\\ghayt\\PiDevReaptn\\templates\\temp\\admin\\order.html.twig");
    }
}
