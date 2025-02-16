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

/* temp/admin/product_form.html.twig */
class __TwigTemplate_f50866c2c29cfc2cc21055612349ad56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/product_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/product_form.html.twig"));

        $this->parent = $this->loadTemplate("temp/admin/base.html.twig", "temp/admin/product_form.html.twig", 1);
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
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h3\">";
        // line 6
        yield (((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })())) ? ("Edit Product") : ("New Product"));
        yield "</h1>
            <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Back to Products
            </a>
        </div>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 13
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
        <div class=\"card shadow mb-4\">
            <div class=\"card-body\">
                ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "category", [], "any", false, false, false, 27), 'label');
        yield "
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "category", [], "any", false, false, false, 28), 'widget');
        yield "
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "category", [], "any", false, false, false, 29), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34), 'label');
        yield "
                                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35), 'widget');
        yield "
                                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36), 'errors');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "quantity", [], "any", false, false, false, 44), 'label');
        yield "
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "quantity", [], "any", false, false, false, 45), 'widget');
        yield "
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "quantity", [], "any", false, false, false, 46), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "weight", [], "any", false, false, false, 51), 'label');
        yield "
                                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "weight", [], "any", false, false, false, 52), 'widget');
        yield "
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "weight", [], "any", false, false, false, 53), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "price", [], "any", false, false, false, 58), 'label');
        yield "
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "price", [], "any", false, false, false, 59), 'widget');
        yield "
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "price", [], "any", false, false, false, 60), 'errors');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 66
        if (((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 66, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 66, $this->source); })()), "image", [], "any", false, false, false, 66))) {
            // line 67
            yield "                            <div class=\"mb-3\">
                                <label class=\"form-label\">Current Image</label>
                                <div>
                                    <img src=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 70, $this->source); })()), "image", [], "any", false, false, false, 70)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 70, $this->source); })()), "category", [], "any", false, false, false, 70), "html", null, true);
            yield "\" class=\"img-thumbnail\" style=\"max-height: 200px\">
                                </div>
                            </div>
                        ";
        }
        // line 74
        yield "                        
                        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "imageFile", [], "any", false, false, false, 75), 'label');
        yield "
                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "imageFile", [], "any", false, false, false, 76), 'widget');
        yield "
                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "imageFile", [], "any", false, false, false, 77), 'errors');
        yield "
                        <small class=\"form-text text-muted\">
                            Upload a JPG, PNG, or WEBP image (max 2MB)
                        </small>
                    </div>

                    <div class=\"text-right mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> ";
        // line 85
        yield (((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 85, $this->source); })())) ? ("Update") : ("Create"));
        yield " Product
                        </button>
                    </div>
                ";
        // line 88
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        yield "
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
        return "temp/admin/product_form.html.twig";
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
        return array (  262 => 88,  256 => 85,  245 => 77,  241 => 76,  237 => 75,  234 => 74,  225 => 70,  220 => 67,  218 => 66,  209 => 60,  205 => 59,  201 => 58,  193 => 53,  189 => 52,  185 => 51,  177 => 46,  173 => 45,  169 => 44,  158 => 36,  154 => 35,  150 => 34,  142 => 29,  138 => 28,  134 => 27,  127 => 23,  122 => 20,  116 => 19,  106 => 15,  101 => 14,  96 => 13,  92 => 12,  84 => 7,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/admin/base.html.twig' %}

{% block admin_content %}
    <div class=\"container-fluid\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h3\">{{ product ? 'Edit Product' : 'New Product' }}</h1>
            <a href=\"{{ path('admin_products') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Back to Products
            </a>
        </div>

        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        <div class=\"card shadow mb-4\">
            <div class=\"card-body\">
                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(form.category) }}
                                {{ form_widget(form.category) }}
                                {{ form_errors(form.category) }}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(form.type) }}
                                {{ form_widget(form.type) }}
                                {{ form_errors(form.type) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                {{ form_label(form.quantity) }}
                                {{ form_widget(form.quantity) }}
                                {{ form_errors(form.quantity) }}
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                {{ form_label(form.weight) }}
                                {{ form_widget(form.weight) }}
                                {{ form_errors(form.weight) }}
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                {{ form_label(form.price) }}
                                {{ form_widget(form.price) }}
                                {{ form_errors(form.price) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        {% if product and product.image %}
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Current Image</label>
                                <div>
                                    <img src=\"{{ asset(product.image) }}\" alt=\"{{ product.category }}\" class=\"img-thumbnail\" style=\"max-height: 200px\">
                                </div>
                            </div>
                        {% endif %}
                        
                        {{ form_label(form.imageFile) }}
                        {{ form_widget(form.imageFile) }}
                        {{ form_errors(form.imageFile) }}
                        <small class=\"form-text text-muted\">
                            Upload a JPG, PNG, or WEBP image (max 2MB)
                        </small>
                    </div>

                    <div class=\"text-right mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> {{ product ? 'Update' : 'Create' }} Product
                        </button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "temp/admin/product_form.html.twig", "C:\\Users\\ghayt\\PiDevReaptn\\templates\\temp\\admin\\product_form.html.twig");
    }
}
