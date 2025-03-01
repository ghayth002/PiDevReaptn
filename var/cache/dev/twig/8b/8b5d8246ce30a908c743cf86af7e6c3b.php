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
class __TwigTemplate_2457872f8507a1e7050ff846b3b1daa3 extends Template
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
        yield (((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 6, $this->source); })())) ? ("Mettre à jour le produit") : ("Nouveau produit"));
        yield "</h1>
            <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour aux produits
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "id" => "productForm"]]);
        yield "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "category", [], "any", false, false, false, 27), 'label', ["label" => "Catégorie *"]);
        yield "
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "category", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Veuillez entrer un nom de catégorie.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36), 'label', ["label" => "Type *"]);
        yield "
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Veuillez sélectionner un type de produit.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "quantity", [], "any", false, false, false, 48), 'label', ["label" => "Quantité *"]);
        yield "
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "quantity", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "min" => "1"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Veuillez entrer une quantité valide (minimum 1).
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "weight", [], "any", false, false, false, 57), 'label', ["label" => "Poids (kg) *"]);
        yield "
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "weight", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "min" => "0.1", "step" => "0.1"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Veuillez entrer un poids valide (minimum 0.1 kg).
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group mb-3\">
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "price", [], "any", false, false, false, 66), 'label', ["label" => "Prix (DT) *"]);
        yield "
                                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "price", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "min" => "0.01", "step" => "0.01"]]);
        yield "
                                <div class=\"invalid-feedback\">
                                    Veuillez entrer un prix valide (minimum 0.01).
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group mb-3\">
                        ";
        // line 76
        if (((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()), "image", [], "any", false, false, false, 76))) {
            // line 77
            yield "                            <div class=\"mb-3\">
                                <label class=\"form-label\">Image actuelle</label>
                                <div>
                                    <img src=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 80, $this->source); })()), "image", [], "any", false, false, false, 80)), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 80, $this->source); })()), "category", [], "any", false, false, false, 80), "html", null, true);
            yield "\" class=\"img-thumbnail\" style=\"max-height: 200px\">
                                </div>
                            </div>
                        ";
        }
        // line 84
        yield "                        
                        ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "imageFile", [], "any", false, false, false, 85), 'label', (CoreExtension::testEmpty($_label_ = ("Image du produit" . (((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 85, $this->source); })())) ? ("") : (" *")))) ? [] : ["label" => $_label_]));
        yield "
                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "imageFile", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control", "required" => (((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 86, $this->source); })())) ? (false) : (true))]]);
        yield "
                        <div class=\"invalid-feedback\">
                            Veuillez sélectionner une image de produit.
                        </div>
                        <small class=\"form-text text-muted\">
                            Téléchargez une image JPG, PNG ou WEBP (max 2 Mo)
                        </small>
                    </div>

                    <div class=\"text-end mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> ";
        // line 97
        yield (((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 97, $this->source); })())) ? ("Mettre à jour le produit") : ("Créer le produit"));
        yield "
                        </button>
                    </div>
                ";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
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

        // line 107
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('productForm');
            
            form.addEventListener('submit', function(event) {
                let isValid = true;
                const category = form.querySelector('#product_category');
                const type = form.querySelector('#product_type');
                const quantity = form.querySelector('#product_quantity');
                const weight = form.querySelector('#product_weight');
                const price = form.querySelector('#product_price');
                const imageFile = form.querySelector('#product_imageFile');
                
                // Reset previous validation states
                form.querySelectorAll('.is-invalid').forEach(field => field.classList.remove('is-invalid'));
                
                // Validate each field
                if (!category.value.trim()) {
                    category.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!type.value) {
                    type.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!quantity.value || quantity.value < 1) {
                    quantity.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!weight.value || weight.value < 0.1) {
                    weight.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!price.value || price.value < 0.01) {
                    price.classList.add('is-invalid');
                    isValid = false;
                }
                
                // Check image only for new products
                if (!document.querySelector('img.img-thumbnail') && !imageFile.files.length) {
                    imageFile.classList.add('is-invalid');
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
        return array (  286 => 107,  273 => 106,  257 => 100,  251 => 97,  237 => 86,  233 => 85,  230 => 84,  221 => 80,  216 => 77,  214 => 76,  202 => 67,  198 => 66,  187 => 58,  183 => 57,  172 => 49,  168 => 48,  154 => 37,  150 => 36,  139 => 28,  135 => 27,  128 => 23,  123 => 20,  117 => 19,  107 => 15,  102 => 14,  97 => 13,  93 => 12,  85 => 7,  81 => 6,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/admin/base.html.twig' %}

{% block admin_content %}
    <div class=\"container-fluid\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h3\">{{ product ? 'Mettre à jour le produit' : 'Nouveau produit' }}</h1>
            <a href=\"{{ path('admin_products') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour aux produits
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
                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'id': 'productForm'}}) }}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.category, 'Catégorie *') }}
                                {{ form_widget(form.category, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                <div class=\"invalid-feedback\">
                                    Veuillez entrer un nom de catégorie.
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.type, 'Type *') }}
                                {{ form_widget(form.type, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                <div class=\"invalid-feedback\">
                                    Veuillez sélectionner un type de produit.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.quantity, 'Quantité *') }}
                                {{ form_widget(form.quantity, {'attr': {'class': 'form-control', 'required': 'required', 'min': '1'}}) }}
                                <div class=\"invalid-feedback\">
                                    Veuillez entrer une quantité valide (minimum 1).
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.weight, 'Poids (kg) *') }}
                                {{ form_widget(form.weight, {'attr': {'class': 'form-control', 'required': 'required', 'min': '0.1', 'step': '0.1'}}) }}
                                <div class=\"invalid-feedback\">
                                    Veuillez entrer un poids valide (minimum 0.1 kg).
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group mb-3\">
                                {{ form_label(form.price, 'Prix (DT) *') }}
                                {{ form_widget(form.price, {'attr': {'class': 'form-control', 'required': 'required', 'min': '0.01', 'step': '0.01'}}) }}
                                <div class=\"invalid-feedback\">
                                    Veuillez entrer un prix valide (minimum 0.01).
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group mb-3\">
                        {% if product and product.image %}
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Image actuelle</label>
                                <div>
                                    <img src=\"{{ asset(product.image) }}\" alt=\"{{ product.category }}\" class=\"img-thumbnail\" style=\"max-height: 200px\">
                                </div>
                            </div>
                        {% endif %}
                        
                        {{ form_label(form.imageFile, 'Image du produit' ~ (product ? '' : ' *')) }}
                        {{ form_widget(form.imageFile, {'attr': {'class': 'form-control', 'required': product ? false : true}}) }}
                        <div class=\"invalid-feedback\">
                            Veuillez sélectionner une image de produit.
                        </div>
                        <small class=\"form-text text-muted\">
                            Téléchargez une image JPG, PNG ou WEBP (max 2 Mo)
                        </small>
                    </div>

                    <div class=\"text-end mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> {{ product ? 'Mettre à jour le produit' : 'Créer le produit' }}
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
            const form = document.getElementById('productForm');
            
            form.addEventListener('submit', function(event) {
                let isValid = true;
                const category = form.querySelector('#product_category');
                const type = form.querySelector('#product_type');
                const quantity = form.querySelector('#product_quantity');
                const weight = form.querySelector('#product_weight');
                const price = form.querySelector('#product_price');
                const imageFile = form.querySelector('#product_imageFile');
                
                // Reset previous validation states
                form.querySelectorAll('.is-invalid').forEach(field => field.classList.remove('is-invalid'));
                
                // Validate each field
                if (!category.value.trim()) {
                    category.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!type.value) {
                    type.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!quantity.value || quantity.value < 1) {
                    quantity.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!weight.value || weight.value < 0.1) {
                    weight.classList.add('is-invalid');
                    isValid = false;
                }
                
                if (!price.value || price.value < 0.01) {
                    price.classList.add('is-invalid');
                    isValid = false;
                }
                
                // Check image only for new products
                if (!document.querySelector('img.img-thumbnail') && !imageFile.files.length) {
                    imageFile.classList.add('is-invalid');
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
", "temp/admin/product_form.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\temp\\admin\\product_form.html.twig");
    }
}
