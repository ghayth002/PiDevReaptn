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
                <i class=\"fas fa-arrow-left\"></i> Back to Stock
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
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "product", [], "any", false, false, false, 27), 'label');
        yield "
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "product", [], "any", false, false, false, 28), 'widget');
        yield "
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "product", [], "any", false, false, false, 29), 'errors');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "availableQuantity", [], "any", false, false, false, 37), 'label');
        yield "
                                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "availableQuantity", [], "any", false, false, false, 38), 'widget');
        yield "
                                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "availableQuantity", [], "any", false, false, false, 39), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "stockMinimum", [], "any", false, false, false, 44), 'label');
        yield "
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "stockMinimum", [], "any", false, false, false, 45), 'widget');
        yield "
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "stockMinimum", [], "any", false, false, false, 46), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "stockMaximum", [], "any", false, false, false, 51), 'label');
        yield "
                                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "stockMaximum", [], "any", false, false, false, 52), 'widget');
        yield "
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "stockMaximum", [], "any", false, false, false, 53), 'errors');
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "entryDate", [], "any", false, false, false, 61), 'label');
        yield "
                                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "entryDate", [], "any", false, false, false, 62), 'widget');
        yield "
                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "entryDate", [], "any", false, false, false, 63), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "exitDate", [], "any", false, false, false, 68), 'label');
        yield "
                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "exitDate", [], "any", false, false, false, 69), 'widget');
        yield "
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "exitDate", [], "any", false, false, false, 70), 'errors');
        yield "
                                <small class=\"form-text text-muted\">Optional. Leave empty if the stock is still available.</small>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-right mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> ";
        // line 78
        yield (((isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 78, $this->source); })())) ? ("Update") : ("Create"));
        yield " Stock Entry
                        </button>
                    </div>
                ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
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
        return array (  245 => 81,  239 => 78,  228 => 70,  224 => 69,  220 => 68,  212 => 63,  208 => 62,  204 => 61,  193 => 53,  189 => 52,  185 => 51,  177 => 46,  173 => 45,  169 => 44,  161 => 39,  157 => 38,  153 => 37,  142 => 29,  138 => 28,  134 => 27,  127 => 23,  122 => 20,  116 => 19,  106 => 15,  101 => 14,  96 => 13,  92 => 12,  84 => 7,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/admin/base.html.twig' %}

{% block admin_content %}
    <div class=\"container-fluid\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h3\">{{ stock ? 'Edit Stock Entry' : 'New Stock Entry' }}</h1>
            <a href=\"{{ path('admin_stocks') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Back to Stock
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
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                {{ form_label(form.product) }}
                                {{ form_widget(form.product) }}
                                {{ form_errors(form.product) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                {{ form_label(form.availableQuantity) }}
                                {{ form_widget(form.availableQuantity) }}
                                {{ form_errors(form.availableQuantity) }}
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                {{ form_label(form.stockMinimum) }}
                                {{ form_widget(form.stockMinimum) }}
                                {{ form_errors(form.stockMinimum) }}
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                {{ form_label(form.stockMaximum) }}
                                {{ form_widget(form.stockMaximum) }}
                                {{ form_errors(form.stockMaximum) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(form.entryDate) }}
                                {{ form_widget(form.entryDate) }}
                                {{ form_errors(form.entryDate) }}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(form.exitDate) }}
                                {{ form_widget(form.exitDate) }}
                                {{ form_errors(form.exitDate) }}
                                <small class=\"form-text text-muted\">Optional. Leave empty if the stock is still available.</small>
                            </div>
                        </div>
                    </div>

                    <div class=\"text-right mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> {{ stock ? 'Update' : 'Create' }} Stock Entry
                        </button>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "temp/admin/stock_form.html.twig", "C:\\Users\\ghayt\\PiDevReaptn\\templates\\temp\\admin\\stock_form.html.twig");
    }
}
