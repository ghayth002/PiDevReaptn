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

/* temp/checkout.html.twig */
class __TwigTemplate_c59f3a2fde31b5ee2e2122a505cc6cf4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/checkout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/checkout.html.twig"));

        $this->parent = $this->loadTemplate("temp/base.html.twig", "temp/checkout.html.twig", 1);
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

        yield "Checkout - Fruitables";
        
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
        <h1 class=\"text-center text-white display-6\">Checkout</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_shop");
        yield "\">Shop</a></li>
            <li class=\"breadcrumb-item active text-white\">Checkout</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Checkout Page Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["error"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            yield "                <div class=\"alert alert-danger\">
                    ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["success"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            yield "                <div class=\"alert alert-success\">
                    ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
            <h1 class=\"mb-4\">Billing details</h1>
            ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
        yield "
                <div class=\"row g-5\">
                    <!-- Billing Form Section -->
                    <div class=\"col-md-12 col-lg-6 col-xl-7\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "firstName", [], "any", false, false, false, 39), 'label', ["label" => "First Name *"]);
        yield "
                                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "firstName", [], "any", false, false, false, 40), 'widget');
        yield "
                                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "firstName", [], "any", false, false, false, 41), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "lastName", [], "any", false, false, false, 46), 'label', ["label" => "Last Name *"]);
        yield "
                                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "lastName", [], "any", false, false, false, 47), 'widget');
        yield "
                                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "lastName", [], "any", false, false, false, 48), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-item\">
                                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'label', ["label" => "Email *"]);
        yield "
                                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), 'widget');
        yield "
                                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-item\">
                                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "phone", [], "any", false, false, false, 60), 'label', ["label" => "Phone *"]);
        yield "
                                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "phone", [], "any", false, false, false, 61), 'widget');
        yield "
                                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "phone", [], "any", false, false, false, 62), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-item\">
                                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "address", [], "any", false, false, false, 67), 'label', ["label" => "Address *"]);
        yield "
                                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "address", [], "any", false, false, false, 68), 'widget');
        yield "
                                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "address", [], "any", false, false, false, 69), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "city", [], "any", false, false, false, 74), 'label', ["label" => "City *"]);
        yield "
                                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "city", [], "any", false, false, false, 75), 'widget');
        yield "
                                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "city", [], "any", false, false, false, 76), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "state", [], "any", false, false, false, 81), 'label', ["label" => "State *"]);
        yield "
                                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "state", [], "any", false, false, false, 82), 'widget');
        yield "
                                    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "state", [], "any", false, false, false, 83), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "zipCode", [], "any", false, false, false, 88), 'label', ["label" => "Zip Code *"]);
        yield "
                                    ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "zipCode", [], "any", false, false, false, 89), 'widget');
        yield "
                                    ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "zipCode", [], "any", false, false, false, 90), 'errors');
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "country", [], "any", false, false, false, 95), 'label', ["label" => "Country *"]);
        yield "
                                    ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "country", [], "any", false, false, false, 96), 'widget');
        yield "
                                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "country", [], "any", false, false, false, 97), 'errors');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Order Summary Section -->
                    <div class=\"col-md-12 col-lg-6 col-xl-5\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 116
            yield "                                        <tr>
                                            <td>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 117), "category", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                                            <td>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                                            <td>\$";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 119), "price", [], "any", false, false, false, 119) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 119)), 2, ".", ","), "html", null, true);
            yield "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan=\"2\">Total</th>
                                        <th>\$";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 126, $this->source); })()), 2, ".", ","), "html", null, true);
        yield "</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <h3 class=\"mb-3\">Payment Method</h3>
                                <div class=\"row g-4 text-center align-items-center justify-content-center border-bottom py-3\">
                                    <div class=\"col-12\">
                                        ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "paymentMethod", [], "any", false, false, false, 137), 'widget');
        yield "
                                        ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "paymentMethod", [], "any", false, false, false, 138), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\">Place Order</button>
                        </div>
                    </div>
                </div>
            ";
        // line 149
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
    <!-- Checkout Page End -->
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
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
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
        return "temp/checkout.html.twig";
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
        return array (  423 => 157,  418 => 156,  405 => 155,  389 => 149,  375 => 138,  371 => 137,  357 => 126,  351 => 122,  342 => 119,  338 => 118,  334 => 117,  331 => 116,  327 => 115,  306 => 97,  302 => 96,  298 => 95,  290 => 90,  286 => 89,  282 => 88,  274 => 83,  270 => 82,  266 => 81,  258 => 76,  254 => 75,  250 => 74,  242 => 69,  238 => 68,  234 => 67,  226 => 62,  222 => 61,  218 => 60,  210 => 55,  206 => 54,  202 => 53,  194 => 48,  190 => 47,  186 => 46,  178 => 41,  174 => 40,  170 => 39,  160 => 32,  156 => 30,  147 => 27,  144 => 26,  139 => 25,  130 => 22,  127 => 21,  123 => 20,  111 => 11,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}Checkout - Fruitables{% endblock %}

{% block content %}
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Checkout</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_index') }}\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_temp_shop') }}\">Shop</a></li>
            <li class=\"breadcrumb-item active text-white\">Checkout</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Checkout Page Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}

            <h1 class=\"mb-4\">Billing details</h1>
            {{ form_start(form) }}
                <div class=\"row g-5\">
                    <!-- Billing Form Section -->
                    <div class=\"col-md-12 col-lg-6 col-xl-7\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    {{ form_label(form.firstName, 'First Name *') }}
                                    {{ form_widget(form.firstName) }}
                                    {{ form_errors(form.firstName) }}
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    {{ form_label(form.lastName, 'Last Name *') }}
                                    {{ form_widget(form.lastName) }}
                                    {{ form_errors(form.lastName) }}
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-item\">
                                    {{ form_label(form.email, 'Email *') }}
                                    {{ form_widget(form.email) }}
                                    {{ form_errors(form.email) }}
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-item\">
                                    {{ form_label(form.phone, 'Phone *') }}
                                    {{ form_widget(form.phone) }}
                                    {{ form_errors(form.phone) }}
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-item\">
                                    {{ form_label(form.address, 'Address *') }}
                                    {{ form_widget(form.address) }}
                                    {{ form_errors(form.address) }}
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    {{ form_label(form.city, 'City *') }}
                                    {{ form_widget(form.city) }}
                                    {{ form_errors(form.city) }}
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    {{ form_label(form.state, 'State *') }}
                                    {{ form_widget(form.state) }}
                                    {{ form_errors(form.state) }}
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    {{ form_label(form.zipCode, 'Zip Code *') }}
                                    {{ form_widget(form.zipCode) }}
                                    {{ form_errors(form.zipCode) }}
                                </div>
                            </div>
                            <div class=\"col-md-12 col-lg-6\">
                                <div class=\"form-item\">
                                    {{ form_label(form.country, 'Country *') }}
                                    {{ form_widget(form.country) }}
                                    {{ form_errors(form.country) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Order Summary Section -->
                    <div class=\"col-md-12 col-lg-6 col-xl-5\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for item in cartItems %}
                                        <tr>
                                            <td>{{ item.product.category }}</td>
                                            <td>{{ item.quantity }}</td>
                                            <td>\${{ (item.product.price * item.quantity)|number_format(2, '.', ',') }}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan=\"2\">Total</th>
                                        <th>\${{ total|number_format(2, '.', ',') }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <h3 class=\"mb-3\">Payment Method</h3>
                                <div class=\"row g-4 text-center align-items-center justify-content-center border-bottom py-3\">
                                    <div class=\"col-12\">
                                        {{ form_widget(form.paymentMethod) }}
                                        {{ form_errors(form.paymentMethod) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn border-secondary py-3 px-4 text-uppercase w-100 text-primary\">Place Order</button>
                        </div>
                    </div>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
    <!-- Checkout Page End -->
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}
", "temp/checkout.html.twig", "C:\\Users\\ghayt\\PiDevReaptn\\templates\\temp\\checkout.html.twig");
    }
}
