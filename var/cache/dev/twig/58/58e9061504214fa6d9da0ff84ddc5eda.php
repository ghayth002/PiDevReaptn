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

/* temp/admin/dashboard.html.twig */
class __TwigTemplate_b6f3b57d4ab267318071b9979cf7cfa8 extends Template
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
            'admin_content' => [$this, 'block_admin_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "temp/admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("temp/admin/base.html.twig", "temp/admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        // line 4
        yield "    <div class=\"container-fluid\">
        <h1 class=\"h3 mb-4\">Dashboard</h1>
        
        <div class=\"row\">
            <div class=\"col-xl-4 col-md-6 mb-4\">
                <div class=\"card border-left-primary shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                    Products</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 15, $this->source); })())), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-box fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4 col-md-6 mb-4\">
                <div class=\"card border-left-success shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                    Product Types</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["productTypes"]) || array_key_exists("productTypes", $context) ? $context["productTypes"] : (function () { throw new RuntimeError('Variable "productTypes" does not exist.', 32, $this->source); })())), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-tags fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4 col-md-6 mb-4\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                    Stock Items</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 49, $this->source); })())), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-warehouse fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4 col-md-6 mb-4\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                    Orders</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 66, $this->source); })())), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-shopping-cart fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Recent Products</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Type</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 95, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 96
            yield "                                        <tr>
                                            <td>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                                            <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 98), "productionMethod", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                                            <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                                            <td>€";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "temp/admin/dashboard.html.twig";
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
        return array (  209 => 103,  200 => 100,  196 => 99,  192 => 98,  188 => 97,  185 => 96,  181 => 95,  149 => 66,  129 => 49,  109 => 32,  89 => 15,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/admin/base.html.twig' %}

{% block admin_content %}
    <div class=\"container-fluid\">
        <h1 class=\"h3 mb-4\">Dashboard</h1>
        
        <div class=\"row\">
            <div class=\"col-xl-4 col-md-6 mb-4\">
                <div class=\"card border-left-primary shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                    Products</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ products|length }}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-box fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4 col-md-6 mb-4\">
                <div class=\"card border-left-success shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                    Product Types</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ productTypes|length }}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-tags fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4 col-md-6 mb-4\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                    Stock Items</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ stocks|length }}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-warehouse fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-4 col-md-6 mb-4\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                    Orders</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ orders|length }}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-shopping-cart fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Recent Products</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Type</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for product in products|slice(0, 5) %}
                                        <tr>
                                            <td>{{ product.category }}</td>
                                            <td>{{ product.type.productionMethod }}</td>
                                            <td>{{ product.quantity }}</td>
                                            <td>€{{ product.price }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "temp/admin/dashboard.html.twig", "C:\\Users\\ghayt\\PiDevReaptn\\templates\\temp\\admin\\dashboard.html.twig");
    }
}
