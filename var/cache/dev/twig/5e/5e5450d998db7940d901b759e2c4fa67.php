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

/* temp/admin/base.html.twig */
class __TwigTemplate_97f05a8d69e2ba8bfcc60770e85df6e7 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'admin_content' => [$this, 'block_admin_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/base.html.twig"));

        $this->parent = $this->loadTemplate("temp/base.html.twig", "temp/admin/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <style>
        .admin-layout {
            padding-top: 150px; /* Increased padding for admin pages */
        }
        .sidebar {
            min-height: calc(100vh - 150px); /* Adjusted for top padding */
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.05);
            position: fixed;
            top: 150px; /* Adjusted to match admin padding */
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 20px 0;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }
        .nav-link {
            color: #333;
            padding: .75rem 1.25rem;
            border-radius: 0;
            transition: all 0.3s ease;
        }
        .nav-link.active {
            color: #007bff;
            background-color: #e9ecef;
            border-left: 4px solid #007bff;
        }
        .nav-link:hover {
            color: #007bff;
            background-color: #f1f3f5;
        }
        .nav-link i {
            margin-right: 0.75rem;
            width: 20px;
        }
        .admin-content {
            margin-left: 16.666667%; /* col-md-2 width */
            padding: 2rem;
        }
        .admin-header {
            margin-bottom: 2rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
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

        // line 54
        yield "    <!-- Admin Start -->
    <div class=\"admin-layout\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <!-- Sidebar -->
                <nav class=\"col-md-2 d-none d-md-block sidebar\">
                    <div class=\"sidebar-sticky\">
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "get", ["_route"], "method", false, false, false, 63) == "admin_dashboard")) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
                                    <i class=\"fas fa-home\"></i> Tableau de bord
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
        // line 68
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "get", ["_route"], "method", false, false, false, 68)) && is_string($_v1 = "admin_products") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\">
                                    <i class=\"fas fa-box\"></i> Produits
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
        // line 73
        if ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "get", ["_route"], "method", false, false, false, 73)) && is_string($_v3 = "admin_product_types") && str_starts_with($_v2, $_v3))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_types");
        yield "\">
                                    <i class=\"fas fa-tags\"></i> Types de produits
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
        // line 78
        if ((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "get", ["_route"], "method", false, false, false, 78)) && is_string($_v5 = "admin_stocks") && str_starts_with($_v4, $_v5))) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stocks");
        yield "\">
                                    <i class=\"fas fa-warehouse\"></i> Gestion des stocks
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Main content -->
                <main role=\"main\" class=\"col-md-10 admin-content\">
                    <div class=\"admin-header\">
                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "flashes", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 90
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 91
                yield "                                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                                    ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                    </div>

                    ";
        // line 99
        yield from $this->unwrap()->yieldBlock('admin_content', $context, $blocks);
        // line 100
        yield "                </main>
            </div>
        </div>
    </div>
    <!-- Admin End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "temp/admin/base.html.twig";
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
        return array (  268 => 99,  252 => 100,  250 => 99,  246 => 97,  240 => 96,  230 => 92,  225 => 91,  220 => 90,  216 => 89,  198 => 78,  186 => 73,  174 => 68,  162 => 63,  151 => 54,  138 => 53,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <style>
        .admin-layout {
            padding-top: 150px; /* Increased padding for admin pages */
        }
        .sidebar {
            min-height: calc(100vh - 150px); /* Adjusted for top padding */
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.05);
            position: fixed;
            top: 150px; /* Adjusted to match admin padding */
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 20px 0;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }
        .nav-link {
            color: #333;
            padding: .75rem 1.25rem;
            border-radius: 0;
            transition: all 0.3s ease;
        }
        .nav-link.active {
            color: #007bff;
            background-color: #e9ecef;
            border-left: 4px solid #007bff;
        }
        .nav-link:hover {
            color: #007bff;
            background-color: #f1f3f5;
        }
        .nav-link i {
            margin-right: 0.75rem;
            width: 20px;
        }
        .admin-content {
            margin-left: 16.666667%; /* col-md-2 width */
            padding: 2rem;
        }
        .admin-header {
            margin-bottom: 2rem;
        }
    </style>
{% endblock %}

{% block content %}
    <!-- Admin Start -->
    <div class=\"admin-layout\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <!-- Sidebar -->
                <nav class=\"col-md-2 d-none d-md-block sidebar\">
                    <div class=\"sidebar-sticky\">
                        <ul class=\"nav flex-column\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link {% if app.request.get('_route') == 'admin_dashboard' %}active{% endif %}\" href=\"{{ path('admin_dashboard') }}\">
                                    <i class=\"fas fa-home\"></i> Tableau de bord
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link {% if app.request.get('_route') starts with 'admin_products' %}active{% endif %}\" href=\"{{ path('admin_products') }}\">
                                    <i class=\"fas fa-box\"></i> Produits
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link {% if app.request.get('_route') starts with 'admin_product_types' %}active{% endif %}\" href=\"{{ path('admin_product_types') }}\">
                                    <i class=\"fas fa-tags\"></i> Types de produits
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link {% if app.request.get('_route') starts with 'admin_stocks' %}active{% endif %}\" href=\"{{ path('admin_stocks') }}\">
                                    <i class=\"fas fa-warehouse\"></i> Gestion des stocks
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Main content -->
                <main role=\"main\" class=\"col-md-10 admin-content\">
                    <div class=\"admin-header\">
                        {% for label, messages in app.flashes %}
                            {% for message in messages %}
                                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                                    {{ message }}
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                                </div>
                            {% endfor %}
                        {% endfor %}
                    </div>

                    {% block admin_content %}{% endblock %}
                </main>
            </div>
        </div>
    </div>
    <!-- Admin End -->
{% endblock %}
", "temp/admin/base.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\temp\\admin\\base.html.twig");
    }
}
