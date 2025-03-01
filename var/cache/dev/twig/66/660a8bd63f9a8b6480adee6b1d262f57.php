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

/* notification/subscribe.html.twig */
class __TwigTemplate_a3f08d4dedeb39a4adc9e13a1c160fbf extends Template
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
        return "temp/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/subscribe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/subscribe.html.twig"));

        $this->parent = $this->loadTemplate("temp/base.html.twig", "notification/subscribe.html.twig", 1);
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

        yield "Subscribe to Weather Notifications";
        
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
        yield "<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"card shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-bell me-2\"></i> Weather Notifications</h4>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 15
        if (((isset($context["submitted"]) || array_key_exists("submitted", $context) ? $context["submitted"] : (function () { throw new RuntimeError('Variable "submitted" does not exist.', 15, $this->source); })()) && (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "                            <div class=\"alert alert-success\">
                                <i class=\"fas fa-check-circle me-2\"></i> Thank you for subscribing! You will now receive weather alerts and seasonal product recommendations.
                            </div>
                            <p>You've subscribed with: <strong>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "</strong></p>
                            <div class=\"mt-4\">
                                <a href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_weather_alert", ["email" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 21, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-primary me-2\">
                                    <i class=\"fas fa-cloud-sun me-2\"></i> Send Weather Alert
                                </a>
                                <a href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_seasonal_products_alert", ["email" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 24, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-success\">
                                    <i class=\"fas fa-leaf me-2\"></i> Send Seasonal Products Alert
                                </a>
                            </div>
                        ";
        } else {
            // line 29
            yield "                            <p class=\"lead\">Subscribe to receive weather alerts and seasonal product recommendations for your agricultural needs.</p>
                            
                            <form action=\"";
            // line 31
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_subscribe");
            yield "\" method=\"get\" class=\"mt-4\">
                                <div class=\"mb-3\">
                                    <label for=\"email\" class=\"form-label\">Email address</label>
                                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required placeholder=\"your@email.com\">
                                    <div class=\"form-text\">We'll send you notifications about weather conditions and seasonal products.</div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    <label class=\"form-label\">Notification preferences</label>
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"weatherAlerts\" checked>
                                        <label class=\"form-check-label\" for=\"weatherAlerts\">
                                            Weather alerts (extreme temperatures, rain, etc.)
                                        </label>
                                    </div>
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"seasonalProducts\" checked>
                                        <label class=\"form-check-label\" for=\"seasonalProducts\">
                                            Seasonal product recommendations
                                        </label>
                                    </div>
                                </div>
                                
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-paper-plane me-2\"></i> Subscribe
                                </button>
                            </form>
                        ";
        }
        // line 59
        yield "                    </div>
                    <div class=\"card-footer bg-light\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <small class=\"text-muted\">You can unsubscribe at any time</small>
                            <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                <i class=\"fas fa-home me-1\"></i> Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
        return "notification/subscribe.html.twig";
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
        return array (  178 => 63,  172 => 59,  141 => 31,  137 => 29,  129 => 24,  123 => 21,  118 => 19,  113 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}Subscribe to Weather Notifications{% endblock %}

{% block content %}
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"card shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-bell me-2\"></i> Weather Notifications</h4>
                    </div>
                    <div class=\"card-body\">
                        {% if submitted and email %}
                            <div class=\"alert alert-success\">
                                <i class=\"fas fa-check-circle me-2\"></i> Thank you for subscribing! You will now receive weather alerts and seasonal product recommendations.
                            </div>
                            <p>You've subscribed with: <strong>{{ email }}</strong></p>
                            <div class=\"mt-4\">
                                <a href=\"{{ path('app_notifications_weather_alert', {'email': email}) }}\" class=\"btn btn-primary me-2\">
                                    <i class=\"fas fa-cloud-sun me-2\"></i> Send Weather Alert
                                </a>
                                <a href=\"{{ path('app_notifications_seasonal_products_alert', {'email': email}) }}\" class=\"btn btn-success\">
                                    <i class=\"fas fa-leaf me-2\"></i> Send Seasonal Products Alert
                                </a>
                            </div>
                        {% else %}
                            <p class=\"lead\">Subscribe to receive weather alerts and seasonal product recommendations for your agricultural needs.</p>
                            
                            <form action=\"{{ path('app_notifications_subscribe') }}\" method=\"get\" class=\"mt-4\">
                                <div class=\"mb-3\">
                                    <label for=\"email\" class=\"form-label\">Email address</label>
                                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required placeholder=\"your@email.com\">
                                    <div class=\"form-text\">We'll send you notifications about weather conditions and seasonal products.</div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    <label class=\"form-label\">Notification preferences</label>
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"weatherAlerts\" checked>
                                        <label class=\"form-check-label\" for=\"weatherAlerts\">
                                            Weather alerts (extreme temperatures, rain, etc.)
                                        </label>
                                    </div>
                                    <div class=\"form-check\">
                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"seasonalProducts\" checked>
                                        <label class=\"form-check-label\" for=\"seasonalProducts\">
                                            Seasonal product recommendations
                                        </label>
                                    </div>
                                </div>
                                
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-paper-plane me-2\"></i> Subscribe
                                </button>
                            </form>
                        {% endif %}
                    </div>
                    <div class=\"card-footer bg-light\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <small class=\"text-muted\">You can unsubscribe at any time</small>
                            <a href=\"{{ path('app_temp_index') }}\" class=\"btn btn-sm btn-outline-secondary\">
                                <i class=\"fas fa-home me-1\"></i> Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "notification/subscribe.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\notification\\subscribe.html.twig");
    }
}
