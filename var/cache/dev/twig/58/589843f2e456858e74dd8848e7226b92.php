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

/* notification/weather_alert.html.twig */
class __TwigTemplate_50193814a7f5b44dd0b6b29c9c3d1ce9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/weather_alert.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/weather_alert.html.twig"));

        $this->parent = $this->loadTemplate("temp/base.html.twig", "notification/weather_alert.html.twig", 1);
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

        yield "Alerte Météo";
        
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
            <div class=\"col-lg-8\">
                <div class=\"card shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Alerte Météo</h4>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 15
        if ((isset($context["notification_sent"]) || array_key_exists("notification_sent", $context) ? $context["notification_sent"] : (function () { throw new RuntimeError('Variable "notification_sent" does not exist.', 15, $this->source); })())) {
            // line 16
            yield "                            <div class=\"alert alert-success\">
                                <i class=\"fas fa-check-circle me-2\"></i> La notification d'alerte météo a été envoyée !
                                ";
            // line 18
            if ((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 18, $this->source); })())) {
                // line 19
                yield "                                    <p class=\"mb-0 small\">Une notification a été envoyée à : <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 19, $this->source); })()), "html", null, true);
                yield "</strong></p>
                                ";
            }
            // line 21
            yield "                            </div>
                        ";
        }
        // line 23
        yield "                        
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center mb-4\">
                                    <div class=\"me-3\">
                                        <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 28, $this->source); })()), "weather", [], "any", false, false, false, 28), "icon_url", [], "any", false, false, false, 28), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 28, $this->source); })()), "weather", [], "any", false, false, false, 28), "description", [], "any", false, false, false, 28), "html", null, true);
        yield "\" class=\"img-fluid\" style=\"width: 80px;\">
                                    </div>
                                    <div>
                                        <h3 class=\"mb-0\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 31, $this->source); })()), "temperature", [], "any", false, false, false, 31), "current", [], "any", false, false, false, 31)), "html", null, true);
        yield "°C</h3>
                                        <p class=\"text-capitalize mb-0\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 32, $this->source); })()), "weather", [], "any", false, false, false, 32), "description", [], "any", false, false, false, 32), "html", null, true);
        yield "</p>
                                        <p class=\"text-muted small mb-0\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 33, $this->source); })()), "location", [], "any", false, false, false, 33), "city", [], "any", false, false, false, 33), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 33, $this->source); })()), "location", [], "any", false, false, false, 33), "country", [], "any", false, false, false, 33)), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                                
                                <div class=\"row text-center small mb-4\">
                                    <div class=\"col-4\">
                                        <i class=\"fas fa-temperature-low text-info\"></i>
                                        <p class=\"mb-0\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 40, $this->source); })()), "temperature", [], "any", false, false, false, 40), "min", [], "any", false, false, false, 40)), "html", null, true);
        yield "°C</p>
                                        <p class=\"text-muted\">Min</p>
                                    </div>
                                    <div class=\"col-4\">
                                        <i class=\"fas fa-temperature-high text-danger\"></i>
                                        <p class=\"mb-0\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 45, $this->source); })()), "temperature", [], "any", false, false, false, 45), "max", [], "any", false, false, false, 45)), "html", null, true);
        yield "°C</p>
                                        <p class=\"text-muted\">Max</p>
                                    </div>
                                    <div class=\"col-4\">
                                        <i class=\"fas fa-tint text-primary\"></i>
                                        <p class=\"mb-0\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 50, $this->source); })()), "humidity", [], "any", false, false, false, 50), "html", null, true);
        yield "%</p>
                                        <p class=\"text-muted\">Humidité</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"alert 
                                    ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 58, $this->source); })()), "temperature", [], "any", false, false, false, 58), "current", [], "any", false, false, false, 58) > 30)) {
            // line 59
            yield "                                        alert-danger
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 60
(isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 60, $this->source); })()), "temperature", [], "any", false, false, false, 60), "current", [], "any", false, false, false, 60) < 5)) {
            // line 61
            yield "                                        alert-info
                                    ";
        } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 62
(isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 62, $this->source); })()), "weather", [], "any", false, false, false, 62), "main", [], "any", false, false, false, 62), ["Rain", "Thunderstorm"])) {
            // line 63
            yield "                                        alert-warning
                                    ";
        } else {
            // line 65
            yield "                                        alert-success
                                    ";
        }
        // line 67
        yield "                                \">
                                    <h5 class=\"alert-heading\">
                                        ";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 69, $this->source); })()), "temperature", [], "any", false, false, false, 69), "current", [], "any", false, false, false, 69) > 30)) {
            // line 70
            yield "                                            <i class=\"fas fa-thermometer-full me-2\"></i> Alerte de température élevée !
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 71
(isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 71, $this->source); })()), "temperature", [], "any", false, false, false, 71), "current", [], "any", false, false, false, 71) < 5)) {
            // line 72
            yield "                                            <i class=\"fas fa-thermometer-empty me-2\"></i> Alerte de température basse !
                                        ";
        } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 73
(isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 73, $this->source); })()), "weather", [], "any", false, false, false, 73), "main", [], "any", false, false, false, 73), ["Rain", "Thunderstorm"])) {
            // line 74
            yield "                                            <i class=\"fas fa-cloud-rain me-2\"></i> Alerte de précipitations !
                                        ";
        } else {
            // line 76
            yield "                                            <i class=\"fas fa-check-circle me-2\"></i> Conditions météorologiques normales
                                        ";
        }
        // line 78
        yield "                                    </h5>
                                    
                                    <p>
                                        ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 81, $this->source); })()), "temperature", [], "any", false, false, false, 81), "current", [], "any", false, false, false, 81) > 30)) {
            // line 82
            yield "                                            La température actuelle est élevée (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 82, $this->source); })()), "temperature", [], "any", false, false, false, 82), "current", [], "any", false, false, false, 82)), "html", null, true);
            yield "°C). Restez hydraté et protégez vos cultures du stress thermique.
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 83
(isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 83, $this->source); })()), "temperature", [], "any", false, false, false, 83), "current", [], "any", false, false, false, 83) < 5)) {
            // line 84
            yield "                                            La température actuelle est basse (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 84, $this->source); })()), "temperature", [], "any", false, false, false, 84), "current", [], "any", false, false, false, 84)), "html", null, true);
            yield "°C). Protégez les cultures sensibles du gel.
                                        ";
        } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 85
(isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 85, $this->source); })()), "weather", [], "any", false, false, false, 85), "main", [], "any", false, false, false, 85), ["Rain", "Thunderstorm"])) {
            // line 86
            yield "                                            Précipitations détectées (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 86, $this->source); })()), "weather", [], "any", false, false, false, 86), "description", [], "any", false, false, false, 86), "html", null, true);
            yield "). Envisagez de reporter les activités agricoles en extérieur.
                                        ";
        } else {
            // line 88
            yield "                                            Les conditions météorologiques actuelles sont favorables aux activités agricoles.
                                        ";
        }
        // line 90
        yield "                                    </p>
                                </div>
                                
                                <div class=\"card mt-3\">
                                    <div class=\"card-header bg-light\">
                                        <h5 class=\"mb-0\"><i class=\"fas fa-leaf me-2\"></i> Recommandations agricoles</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul class=\"mb-0\">
                                            ";
        // line 99
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 99, $this->source); })()), "temperature", [], "any", false, false, false, 99), "current", [], "any", false, false, false, 99) > 30)) {
            // line 100
            yield "                                                <li>Arrosez les plantes tôt le matin ou tard le soir</li>
                                                <li>Utilisez du paillis pour retenir l'humidité du sol</li>
                                                <li>Fournissez de l'ombre aux cultures sensibles</li>
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 103
(isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 103, $this->source); })()), "temperature", [], "any", false, false, false, 103), "current", [], "any", false, false, false, 103) < 5)) {
            // line 104
            yield "                                                <li>Couvrez les plantes sensibles avec un voile d'hivernage</li>
                                                <li>Rentrez les plantes en pot à l'intérieur si possible</li>
                                                <li>Évitez d'arroser les plantes par températures négatives</li>
                                            ";
        } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 107
(isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 107, $this->source); })()), "weather", [], "any", false, false, false, 107), "main", [], "any", false, false, false, 107), ["Rain", "Thunderstorm"])) {
            // line 108
            yield "                                                <li>Assurez un bon drainage dans les champs</li>
                                                <li>Reportez l'application d'engrais</li>
                                                <li>Surveillez le développement des maladies en conditions humides</li>
                                            ";
        } else {
            // line 112
            yield "                                                <li>Conditions idéales pour la plupart des activités agricoles</li>
                                                <li>Bon moment pour planter et récolter</li>
                                                <li>Surveillance régulière de l'humidité du sol recommandée</li>
                                            ";
        }
        // line 116
        yield "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_subscribe");
        yield "\" class=\"btn btn-sm btn-outline-primary\">
                                <i class=\"fas fa-bell me-1\"></i> Gérer les notifications
                            </a>
                            <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_temp_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                <i class=\"fas fa-home me-1\"></i> Retour à l'accueil
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
        return "notification/weather_alert.html.twig";
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
        return array (  321 => 127,  315 => 124,  305 => 116,  299 => 112,  293 => 108,  291 => 107,  286 => 104,  284 => 103,  279 => 100,  277 => 99,  266 => 90,  262 => 88,  256 => 86,  254 => 85,  249 => 84,  247 => 83,  242 => 82,  240 => 81,  235 => 78,  231 => 76,  227 => 74,  225 => 73,  222 => 72,  220 => 71,  217 => 70,  215 => 69,  211 => 67,  207 => 65,  203 => 63,  201 => 62,  198 => 61,  196 => 60,  193 => 59,  191 => 58,  180 => 50,  172 => 45,  164 => 40,  152 => 33,  148 => 32,  144 => 31,  136 => 28,  129 => 23,  125 => 21,  119 => 19,  117 => 18,  113 => 16,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/base.html.twig' %}

{% block title %}Alerte Météo{% endblock %}

{% block content %}
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow\">
                    <div class=\"card-header bg-primary text-white\">
                        <h4 class=\"mb-0\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Alerte Météo</h4>
                    </div>
                    <div class=\"card-body\">
                        {% if notification_sent %}
                            <div class=\"alert alert-success\">
                                <i class=\"fas fa-check-circle me-2\"></i> La notification d'alerte météo a été envoyée !
                                {% if email %}
                                    <p class=\"mb-0 small\">Une notification a été envoyée à : <strong>{{ email }}</strong></p>
                                {% endif %}
                            </div>
                        {% endif %}
                        
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"d-flex align-items-center mb-4\">
                                    <div class=\"me-3\">
                                        <img src=\"{{ weather.weather.icon_url }}\" alt=\"{{ weather.weather.description }}\" class=\"img-fluid\" style=\"width: 80px;\">
                                    </div>
                                    <div>
                                        <h3 class=\"mb-0\">{{ weather.temperature.current|round }}°C</h3>
                                        <p class=\"text-capitalize mb-0\">{{ weather.weather.description }}</p>
                                        <p class=\"text-muted small mb-0\">{{ weather.location.city }}, {{ weather.location.country|upper }}</p>
                                    </div>
                                </div>
                                
                                <div class=\"row text-center small mb-4\">
                                    <div class=\"col-4\">
                                        <i class=\"fas fa-temperature-low text-info\"></i>
                                        <p class=\"mb-0\">{{ weather.temperature.min|round }}°C</p>
                                        <p class=\"text-muted\">Min</p>
                                    </div>
                                    <div class=\"col-4\">
                                        <i class=\"fas fa-temperature-high text-danger\"></i>
                                        <p class=\"mb-0\">{{ weather.temperature.max|round }}°C</p>
                                        <p class=\"text-muted\">Max</p>
                                    </div>
                                    <div class=\"col-4\">
                                        <i class=\"fas fa-tint text-primary\"></i>
                                        <p class=\"mb-0\">{{ weather.humidity }}%</p>
                                        <p class=\"text-muted\">Humidité</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"alert 
                                    {% if weather.temperature.current > 30 %}
                                        alert-danger
                                    {% elseif weather.temperature.current < 5 %}
                                        alert-info
                                    {% elseif weather.weather.main in ['Rain', 'Thunderstorm'] %}
                                        alert-warning
                                    {% else %}
                                        alert-success
                                    {% endif %}
                                \">
                                    <h5 class=\"alert-heading\">
                                        {% if weather.temperature.current > 30 %}
                                            <i class=\"fas fa-thermometer-full me-2\"></i> Alerte de température élevée !
                                        {% elseif weather.temperature.current < 5 %}
                                            <i class=\"fas fa-thermometer-empty me-2\"></i> Alerte de température basse !
                                        {% elseif weather.weather.main in ['Rain', 'Thunderstorm'] %}
                                            <i class=\"fas fa-cloud-rain me-2\"></i> Alerte de précipitations !
                                        {% else %}
                                            <i class=\"fas fa-check-circle me-2\"></i> Conditions météorologiques normales
                                        {% endif %}
                                    </h5>
                                    
                                    <p>
                                        {% if weather.temperature.current > 30 %}
                                            La température actuelle est élevée ({{ weather.temperature.current|round }}°C). Restez hydraté et protégez vos cultures du stress thermique.
                                        {% elseif weather.temperature.current < 5 %}
                                            La température actuelle est basse ({{ weather.temperature.current|round }}°C). Protégez les cultures sensibles du gel.
                                        {% elseif weather.weather.main in ['Rain', 'Thunderstorm'] %}
                                            Précipitations détectées ({{ weather.weather.description }}). Envisagez de reporter les activités agricoles en extérieur.
                                        {% else %}
                                            Les conditions météorologiques actuelles sont favorables aux activités agricoles.
                                        {% endif %}
                                    </p>
                                </div>
                                
                                <div class=\"card mt-3\">
                                    <div class=\"card-header bg-light\">
                                        <h5 class=\"mb-0\"><i class=\"fas fa-leaf me-2\"></i> Recommandations agricoles</h5>
                                    </div>
                                    <div class=\"card-body\">
                                        <ul class=\"mb-0\">
                                            {% if weather.temperature.current > 30 %}
                                                <li>Arrosez les plantes tôt le matin ou tard le soir</li>
                                                <li>Utilisez du paillis pour retenir l'humidité du sol</li>
                                                <li>Fournissez de l'ombre aux cultures sensibles</li>
                                            {% elseif weather.temperature.current < 5 %}
                                                <li>Couvrez les plantes sensibles avec un voile d'hivernage</li>
                                                <li>Rentrez les plantes en pot à l'intérieur si possible</li>
                                                <li>Évitez d'arroser les plantes par températures négatives</li>
                                            {% elseif weather.weather.main in ['Rain', 'Thunderstorm'] %}
                                                <li>Assurez un bon drainage dans les champs</li>
                                                <li>Reportez l'application d'engrais</li>
                                                <li>Surveillez le développement des maladies en conditions humides</li>
                                            {% else %}
                                                <li>Conditions idéales pour la plupart des activités agricoles</li>
                                                <li>Bon moment pour planter et récolter</li>
                                                <li>Surveillance régulière de l'humidité du sol recommandée</li>
                                            {% endif %}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-light\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <a href=\"{{ path('app_notifications_subscribe') }}\" class=\"btn btn-sm btn-outline-primary\">
                                <i class=\"fas fa-bell me-1\"></i> Gérer les notifications
                            </a>
                            <a href=\"{{ path('app_temp_index') }}\" class=\"btn btn-sm btn-outline-secondary\">
                                <i class=\"fas fa-home me-1\"></i> Retour à l'accueil
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "notification/weather_alert.html.twig", "C:\\Users\\ghayt\\OneDrive\\Desktop\\PiDevReaptn-main\\templates\\notification\\weather_alert.html.twig");
    }
}
