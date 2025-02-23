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

/* temp/admin/stock_form.html.twig */
class __TwigTemplate_a23bff073fc01b592f39036fb09189f4 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/stock_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/stock_form.html.twig"));

        $this->parent = $this->loadTemplate("temp/admin/base.html.twig", "temp/admin/stock_form.html.twig", 1);
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
        yield (((isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 6, $this->source); })())) ? ("Edit Stock Entry") : ("New Stock Entry"));
        yield "</h1>
            <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stocks");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Back to Stocks
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "id" => "stockForm"]]);
        yield "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "product", [], "any", false, false, false, 27), 'label', ["label" => "Product *"]);
        yield "
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "product", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Please select a product.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "availableQuantity", [], "any", false, false, false, 36), 'label', ["label" => "Available Quantity *"]);
        yield "
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "availableQuantity", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "min" => "1"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Please enter a valid quantity (minimum 1).
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "stockMinimum", [], "any", false, false, false, 48), 'label', ["label" => "Minimum Stock *"]);
        yield "
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "stockMinimum", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "min" => "0"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Please enter a minimum stock level.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "stockMaximum", [], "any", false, false, false, 57), 'label', ["label" => "Maximum Stock *"]);
        yield "
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "stockMaximum", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "min" => "0"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Please enter a maximum stock level.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "entryDate", [], "any", false, false, false, 69), 'label', ["label" => "Entry Date *"]);
        yield "
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "entryDate", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Please select an entry date.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "exitDate", [], "any", false, false, false, 78), 'label', ["label" => "Exit Date"]);
        yield "
                                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "exitDate", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <small class=\"form-text text-muted\">Optional. Leave empty if the stock is still available.</small>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-end mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> ";
        // line 87
        yield (((isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 87, $this->source); })())) ? ("Update") : ("Create"));
        yield " Stock Entry
                        </button>
                    </div>
                ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
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

        // line 97
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('stockForm');
    
    form.addEventListener('submit', function(event) {
        let isValid = true;
        const product = form.querySelector('#stock_product');
        const availableQuantity = form.querySelector('#stock_availableQuantity');
        const stockMinimum = form.querySelector('#stock_stockMinimum');
        const stockMaximum = form.querySelector('#stock_stockMaximum');
        const entryDate = form.querySelector('#stock_entryDate');
        
        // Reset previous validation states
        form.querySelectorAll('.is-invalid').forEach(field => field.classList.remove('is-invalid'));
        
        // Validate each field
        if (!product.value) {
            product.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!availableQuantity.value || availableQuantity.value < 1) {
            availableQuantity.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!stockMinimum.value || stockMinimum.value < 0) {
            stockMinimum.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!stockMaximum.value || stockMaximum.value < 0) {
            stockMaximum.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!entryDate.value) {
            entryDate.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!isValid) {
            event.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Please check all required fields and correct any errors.',
                confirmButtonColor: '#3085d6'
            });
        }
    });
    
    // Real-time validation
    form.querySelectorAll('input, select').forEach(field => {
        field.addEventListener('change', function() {
            if (this.value) {
                this.classList.remove('is-invalid');
            }
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
        return "temp/admin/stock_form.html.twig";
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
        return array (  266 => 97,  253 => 96,  237 => 90,  231 => 87,  220 => 79,  216 => 78,  205 => 70,  201 => 69,  187 => 58,  183 => 57,  172 => 49,  168 => 48,  154 => 37,  150 => 36,  139 => 28,  135 => 27,  128 => 23,  123 => 20,  117 => 19,  107 => 15,  102 => 14,  97 => 13,  93 => 12,  85 => 7,  81 => 6,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/admin/base.html.twig' %}

{% block admin_content %}
    <div class=\"container-fluid\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h3\">{{ stock ? 'Edit Stock Entry' : 'New Stock Entry' }}</h1>
            <a href=\"{{ path('admin_stocks') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Back to Stocks
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
                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'id': 'stockForm'}}) }}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.product, 'Product *') }}
                                {{ form_widget(form.product, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                <div class=\"invalid-feedback\">
                                    Please select a product.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.availableQuantity, 'Available Quantity *') }}
                                {{ form_widget(form.availableQuantity, {'attr': {'class': 'form-control', 'required': 'required', 'min': '1'}}) }}
                                <div class=\"invalid-feedback\">
                                    Please enter a valid quantity (minimum 1).
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.stockMinimum, 'Minimum Stock *') }}
                                {{ form_widget(form.stockMinimum, {'attr': {'class': 'form-control', 'required': 'required', 'min': '0'}}) }}
                                <div class=\"invalid-feedback\">
                                    Please enter a minimum stock level.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.stockMaximum, 'Maximum Stock *') }}
                                {{ form_widget(form.stockMaximum, {'attr': {'class': 'form-control', 'required': 'required', 'min': '0'}}) }}
                                <div class=\"invalid-feedback\">
                                    Please enter a maximum stock level.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.entryDate, 'Entry Date *') }}
                                {{ form_widget(form.entryDate, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                <div class=\"invalid-feedback\">
                                    Please select an entry date.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.exitDate, 'Exit Date') }}
                                {{ form_widget(form.exitDate, {'attr': {'class': 'form-control'}}) }}
                                <small class=\"form-text text-muted\">Optional. Leave empty if the stock is still available.</small>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-end mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> {{ stock ? 'Update' : 'Create' }} Stock Entry
                        </button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('stockForm');
    
    form.addEventListener('submit', function(event) {
        let isValid = true;
        const product = form.querySelector('#stock_product');
        const availableQuantity = form.querySelector('#stock_availableQuantity');
        const stockMinimum = form.querySelector('#stock_stockMinimum');
        const stockMaximum = form.querySelector('#stock_stockMaximum');
        const entryDate = form.querySelector('#stock_entryDate');
        
        // Reset previous validation states
        form.querySelectorAll('.is-invalid').forEach(field => field.classList.remove('is-invalid'));
        
        // Validate each field
        if (!product.value) {
            product.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!availableQuantity.value || availableQuantity.value < 1) {
            availableQuantity.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!stockMinimum.value || stockMinimum.value < 0) {
            stockMinimum.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!stockMaximum.value || stockMaximum.value < 0) {
            stockMaximum.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!entryDate.value) {
            entryDate.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!isValid) {
            event.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Please check all required fields and correct any errors.',
                confirmButtonColor: '#3085d6'
            });
        }
    });
    
    // Real-time validation
    form.querySelectorAll('input, select').forEach(field => {
        field.addEventListener('change', function() {
            if (this.value) {
                this.classList.remove('is-invalid');
            }
        });
    });
});
</script>
{% endblock %}
", "temp/admin/stock_form.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\temp\\admin\\stock_form.html.twig");
    }
}
