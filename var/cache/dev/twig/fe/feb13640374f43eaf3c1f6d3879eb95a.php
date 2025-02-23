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

/* temp/admin/product_type_form.html.twig */
class __TwigTemplate_f4f84dac52c4dcdae012c347868489fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/product_type_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/product_type_form.html.twig"));

        $this->parent = $this->loadTemplate("temp/admin/base.html.twig", "temp/admin/product_type_form.html.twig", 1);
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
        yield (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 6, $this->source); })())) ? ("Edit Product Type") : ("New Product Type"));
        yield "</h1>
            <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_types");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Back to Product Types
            </a>
        </div>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            yield "            <div class=\"alert alert-success\">
                ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
        <div class=\"card shadow mb-4\">
            <div class=\"card-body\">
                ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "id" => "productTypeForm"]]);
        yield "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "season", [], "any", false, false, false, 24), 'label', ["label" => "Season *"]);
        yield "
                                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "season", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Please select a season.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "productionMethod", [], "any", false, false, false, 33), 'label', ["label" => "Production Method *"]);
        yield "
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "productionMethod", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Please enter a production method.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "harvestDate", [], "any", false, false, false, 45), 'label', ["label" => "Harvest Date *"]);
        yield "
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "harvestDate", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Please select a harvest date.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "preservationDuration", [], "any", false, false, false, 54), 'label', ["label" => "Preservation Duration *"]);
        yield "
                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "preservationDuration", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Please enter a preservation duration.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-end mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> ";
        // line 65
        yield (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 65, $this->source); })())) ? ("Update") : ("Create"));
        yield " Product Type
                        </button>
                    </div>
                ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('productTypeForm');
    
    form.addEventListener('submit', function(event) {
        let isValid = true;
        const season = form.querySelector('#product_type_season');
        const productionMethod = form.querySelector('#product_type_productionMethod');
        const harvestDate = form.querySelector('#product_type_harvestDate');
        const preservationDuration = form.querySelector('#product_type_preservationDuration');
        
        // Reset previous validation states
        form.querySelectorAll('.is-invalid').forEach(field => field.classList.remove('is-invalid'));
        
        // Validate each field
        if (!season.value.trim()) {
            season.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!productionMethod.value.trim()) {
            productionMethod.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!harvestDate.value) {
            harvestDate.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!preservationDuration.value.trim()) {
            preservationDuration.classList.add('is-invalid');
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
        return "temp/admin/product_type_form.html.twig";
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
        return array (  221 => 75,  208 => 74,  192 => 68,  186 => 65,  173 => 55,  169 => 54,  158 => 46,  154 => 45,  140 => 34,  136 => 33,  125 => 25,  121 => 24,  114 => 20,  109 => 17,  100 => 14,  97 => 13,  93 => 12,  85 => 7,  81 => 6,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/admin/base.html.twig' %}

{% block admin_content %}
    <div class=\"container-fluid\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h3\">{{ type ? 'Edit Product Type' : 'New Product Type' }}</h1>
            <a href=\"{{ path('admin_product_types') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Back to Product Types
            </a>
        </div>

        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"card shadow mb-4\">
            <div class=\"card-body\">
                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'id': 'productTypeForm'}}) }}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.season, 'Season *') }}
                                {{ form_widget(form.season, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                <div class=\"invalid-feedback\">
                                    Please select a season.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.productionMethod, 'Production Method *') }}
                                {{ form_widget(form.productionMethod, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                <div class=\"invalid-feedback\">
                                    Please enter a production method.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.harvestDate, 'Harvest Date *') }}
                                {{ form_widget(form.harvestDate, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                <div class=\"invalid-feedback\">
                                    Please select a harvest date.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.preservationDuration, 'Preservation Duration *') }}
                                {{ form_widget(form.preservationDuration, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                <div class=\"invalid-feedback\">
                                    Please enter a preservation duration.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-end mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> {{ type ? 'Update' : 'Create' }} Product Type
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
    const form = document.getElementById('productTypeForm');
    
    form.addEventListener('submit', function(event) {
        let isValid = true;
        const season = form.querySelector('#product_type_season');
        const productionMethod = form.querySelector('#product_type_productionMethod');
        const harvestDate = form.querySelector('#product_type_harvestDate');
        const preservationDuration = form.querySelector('#product_type_preservationDuration');
        
        // Reset previous validation states
        form.querySelectorAll('.is-invalid').forEach(field => field.classList.remove('is-invalid'));
        
        // Validate each field
        if (!season.value.trim()) {
            season.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!productionMethod.value.trim()) {
            productionMethod.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!harvestDate.value) {
            harvestDate.classList.add('is-invalid');
            isValid = false;
        }
        
        if (!preservationDuration.value.trim()) {
            preservationDuration.classList.add('is-invalid');
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
", "temp/admin/product_type_form.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\temp\\admin\\product_type_form.html.twig");
    }
}
