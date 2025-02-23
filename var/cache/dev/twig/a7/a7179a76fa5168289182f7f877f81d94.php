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

/* temp/contact.html.twig */
class __TwigTemplate_b8bdf1134e211345d2232c364d66ca88 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "temp/contact.html.twig", 1);
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

        yield "Contact - Fruitables";
        
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
        <h1 class=\"text-center text-white display-6\">Contact</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Contact</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Contact Start -->
    <div class=\"container-fluid contact py-5\">
        <div class=\"container py-5\">
            <div class=\"p-5 bg-light rounded\">
                <div class=\"row g-4\">
                    <div class=\"col-12\">
                        <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
                            <h1 class=\"text-primary\">Get in touch</h1>
                            <p class=\"mb-4\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["contact_description"]) || array_key_exists("contact_description", $context) ? $context["contact_description"] : (function () { throw new RuntimeError('Variable "contact_description" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"h-100 rounded\">
                            <iframe class=\"rounded w-100\" 
                            style=\"height: 400px;\" 
                            src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["google_maps_url"]) || array_key_exists("google_maps_url", $context) ? $context["google_maps_url"] : (function () { throw new RuntimeError('Variable "google_maps_url" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\"
                            loading=\"lazy\" 
                            referrerpolicy=\"no-referrer-when-downgrade\">
                            </iframe>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 39, $this->source); })()), 'form_start');
        yield "
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'row');
        yield "
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'row');
        yield "
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 42, $this->source); })()), "message", [], "any", false, false, false, 42), 'row');
        yield "
                            <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary\" type=\"submit\">
                                Submit
                            </button>
                        ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_form"]) || array_key_exists("contact_form", $context) ? $context["contact_form"] : (function () { throw new RuntimeError('Variable "contact_form" does not exist.', 46, $this->source); })()), 'form_end');
        yield "
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"d-flex p-4 rounded mb-4 bg-white\">
                            <i class=\"fas fa-map-marker-alt fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Address</h4>
                                <p class=\"mb-2\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["company_address"]) || array_key_exists("company_address", $context) ? $context["company_address"] : (function () { throw new RuntimeError('Variable "company_address" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"d-flex p-4 rounded mb-4 bg-white\">
                            <i class=\"fas fa-envelope fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Mail Us</h4>
                                <p class=\"mb-2\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["company_email"]) || array_key_exists("company_email", $context) ? $context["company_email"] : (function () { throw new RuntimeError('Variable "company_email" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"d-flex p-4 rounded bg-white\">
                            <i class=\"fa fa-phone-alt fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class=\"mb-2\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["company_phone"]) || array_key_exists("company_phone", $context) ? $context["company_phone"] : (function () { throw new RuntimeError('Variable "company_phone" does not exist.', 67, $this->source); })()), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
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
        return "temp/contact.html.twig";
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
        return array (  193 => 67,  183 => 60,  173 => 53,  163 => 46,  156 => 42,  152 => 41,  148 => 40,  144 => 39,  134 => 32,  124 => 25,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact - Fruitables{% endblock %}

{% block content %}
    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Contact</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home') }}\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Contact</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Contact Start -->
    <div class=\"container-fluid contact py-5\">
        <div class=\"container py-5\">
            <div class=\"p-5 bg-light rounded\">
                <div class=\"row g-4\">
                    <div class=\"col-12\">
                        <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
                            <h1 class=\"text-primary\">Get in touch</h1>
                            <p class=\"mb-4\">{{ contact_description }}</p>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"h-100 rounded\">
                            <iframe class=\"rounded w-100\" 
                            style=\"height: 400px;\" 
                            src=\"{{ google_maps_url }}\"
                            loading=\"lazy\" 
                            referrerpolicy=\"no-referrer-when-downgrade\">
                            </iframe>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        {{ form_start(contact_form) }}
                            {{ form_row(contact_form.name) }}
                            {{ form_row(contact_form.email) }}
                            {{ form_row(contact_form.message) }}
                            <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary\" type=\"submit\">
                                Submit
                            </button>
                        {{ form_end(contact_form) }}
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"d-flex p-4 rounded mb-4 bg-white\">
                            <i class=\"fas fa-map-marker-alt fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Address</h4>
                                <p class=\"mb-2\">{{ company_address }}</p>
                            </div>
                        </div>
                        <div class=\"d-flex p-4 rounded mb-4 bg-white\">
                            <i class=\"fas fa-envelope fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Mail Us</h4>
                                <p class=\"mb-2\">{{ company_email }}</p>
                            </div>
                        </div>
                        <div class=\"d-flex p-4 rounded bg-white\">
                            <i class=\"fa fa-phone-alt fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class=\"mb-2\">{{ company_phone }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
{% endblock %}
", "temp/contact.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\temp\\contact.html.twig");
    }
}
