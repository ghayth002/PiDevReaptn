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

/* temp/admin/_sidebar.html.twig */
class __TwigTemplate_8d2619431ba693a0c26d34c150536249 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/_sidebar.html.twig"));

        // line 1
        yield "// ...existing code...
<div class=\"sidebar-heading\">
    Menu principal
</div>

<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\">
        <i class=\"fas fa-fw fa-tachometer-alt\"></i>
        <span>Tableau de bord</span>
    </a>
</li>

<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products");
        yield "\">
        <i class=\"fas fa-fw fa-box\"></i>
        <span>Produits</span>
    </a>
</li>

<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_types");
        yield "\">
        <i class=\"fas fa-fw fa-tags\"></i>
        <span>Types de produits</span>
    </a>
</li>

<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stocks");
        yield "\">
        <i class=\"fas fa-fw fa-warehouse\"></i>
        <span>Gestion des stocks</span>
    </a>
</li>
// ...existing code...
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "temp/admin/_sidebar.html.twig";
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
        return array (  86 => 28,  76 => 21,  66 => 14,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("// ...existing code...
<div class=\"sidebar-heading\">
    Menu principal
</div>

<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('admin_dashboard') }}\">
        <i class=\"fas fa-fw fa-tachometer-alt\"></i>
        <span>Tableau de bord</span>
    </a>
</li>

<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('admin_products') }}\">
        <i class=\"fas fa-fw fa-box\"></i>
        <span>Produits</span>
    </a>
</li>

<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('admin_product_types') }}\">
        <i class=\"fas fa-fw fa-tags\"></i>
        <span>Types de produits</span>
    </a>
</li>

<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('admin_stocks') }}\">
        <i class=\"fas fa-fw fa-warehouse\"></i>
        <span>Gestion des stocks</span>
    </a>
</li>
// ...existing code...
", "temp/admin/_sidebar.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\temp\\admin\\_sidebar.html.twig");
    }
}
