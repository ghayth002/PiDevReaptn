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

/* temp/index.html.twig */
class __TwigTemplate_1668a8119099a534c474baae1692e3c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/index.html.twig"));

        $this->parent = $this->loadTemplate("temp/base.html.twig", "temp/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <!-- Hero Start -->
    <div class=\"container-fluid py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-md-12 col-lg-7\">
                    <h4 class=\"mb-3 text-secondary\">Aliments 100% biologiques</h4>
                    <h1 class=\"mb-5 display-3 text-primary\">Aliments biologiques de légumes et de fruits</h1>
                    <div class=\"position-relative mx-auto\">
                        <input class=\"form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"Recherche\">
                        <button type=\"submit\" class=\"btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100\" style=\"top: 0; right: 25%;\">Soumettre maintenant</button>
                    </div>
                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruits</a>
                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Légumes</a>
                </div>
                <div class=\"col-md-12 col-lg-5\">
                    <div id=\"carouselId\" class=\"carousel slide position-relative\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"carousel-item active rounded\">
                                <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero-img-1.png"), "html", null, true);
        yield "\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                                <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruites</a>
                            </div>
                            <div class=\"carousel-item rounded\">
                                <img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero-img-2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100 h-100 rounded\" alt=\"Second slide\">
                                <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Vegetables</a>
                            </div>
                        </div>
                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Previous</span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Weather Section -->
    ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "temp/partials/_weather_section.html.twig");
        yield "
    <!-- Weather Section End -->

    ";
        // line 50
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "temp/sections/_featured-products.html.twig", [], true, true);
        yield "
    ";
        // line 51
        yield Twig\Extension\CoreExtension::include($this->env, $context, "temp/sections/_about.html.twig", [], true, true);
        yield "
    ";
        // line 52
        yield Twig\Extension\CoreExtension::include($this->env, $context, "temp/sections/_facts.html.twig", [], true, true);
        yield "
    ";
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "temp/sections/_features.html.twig", [], true, true);
        yield "
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
        return "temp/index.html.twig";
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
        return array (  145 => 53,  141 => 52,  137 => 51,  132 => 50,  126 => 46,  103 => 26,  96 => 22,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block content %}
    <!-- Hero Start -->
    <div class=\"container-fluid py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-md-12 col-lg-7\">
                    <h4 class=\"mb-3 text-secondary\">Aliments 100% biologiques</h4>
                    <h1 class=\"mb-5 display-3 text-primary\">Aliments biologiques de légumes et de fruits</h1>
                    <div class=\"position-relative mx-auto\">
                        <input class=\"form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"Recherche\">
                        <button type=\"submit\" class=\"btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100\" style=\"top: 0; right: 25%;\">Soumettre maintenant</button>
                    </div>
                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruits</a>
                    <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Légumes</a>
                </div>
                <div class=\"col-md-12 col-lg-5\">
                    <div id=\"carouselId\" class=\"carousel slide position-relative\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"carousel-item active rounded\">
                                <img src=\"{{ asset('img/hero-img-1.png') }}\" class=\"img-fluid w-100 h-100 bg-secondary rounded\" alt=\"First slide\">
                                <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Fruites</a>
                            </div>
                            <div class=\"carousel-item rounded\">
                                <img src=\"{{ asset('img/hero-img-2.jpg') }}\" class=\"img-fluid w-100 h-100 rounded\" alt=\"Second slide\">
                                <a href=\"#\" class=\"btn px-4 py-2 text-white rounded\">Vegetables</a>
                            </div>
                        </div>
                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Previous</span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselId\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Weather Section -->
    {{ include('temp/partials/_weather_section.html.twig') }}
    <!-- Weather Section End -->

    {# Include sections from temp directory #}
    {{ include('temp/sections/_featured-products.html.twig', ignore_missing = true) }}
    {{ include('temp/sections/_about.html.twig', ignore_missing = true) }}
    {{ include('temp/sections/_facts.html.twig', ignore_missing = true) }}
    {{ include('temp/sections/_features.html.twig', ignore_missing = true) }}
{% endblock %}
", "temp/index.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\temp\\index.html.twig");
    }
}
