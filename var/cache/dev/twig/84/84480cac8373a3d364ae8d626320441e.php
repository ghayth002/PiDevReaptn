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

/* components/weather_widget.html.twig */
class __TwigTemplate_acc97511be34bb238962a5d5f4025035 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/weather_widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/weather_widget.html.twig"));

        // line 2
        yield "<div class=\"weather-widget card shadow-sm mb-4\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">
            <i class=\"fas fa-cloud-sun\"></i> Météo
            <div class=\"spinner-border spinner-border-sm text-primary d-none\" id=\"weather-loading\" role=\"status\">
                <span class=\"visually-hidden\">Chargement...</span>
            </div>
        </h5>
        <div id=\"weather-content\" class=\"d-none\">
            <div class=\"d-flex align-items-center mb-2\">
                <div id=\"weather-icon-container\" class=\"me-3\">
                    <img id=\"weather-icon\" src=\"\" alt=\"Icône météo\" class=\"weather-icon\">
                </div>
                <div>
                    <h6 id=\"weather-location\" class=\"mb-0\"></h6>
                    <div id=\"weather-description\" class=\"text-muted\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"weather-temp\">
                        <span id=\"weather-temp\"></span>°C
                    </div>
                    <div class=\"weather-feels-like small text-muted\">
                        Ressenti <span id=\"weather-feels-like\"></span>°C
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"weather-detail\">
                        <i class=\"fas fa-temperature-low\"></i> Min: <span id=\"weather-temp-min\"></span>°C
                    </div>
                    <div class=\"weather-detail\">
                        <i class=\"fas fa-temperature-high\"></i> Max: <span id=\"weather-temp-max\"></span>°C
                    </div>
                    <div class=\"weather-detail\">
                        <i class=\"fas fa-tint\"></i> Humidité: <span id=\"weather-humidity\"></span>%
                    </div>
                </div>
            </div>
            <div id=\"mock-data-notice\" class=\"alert alert-info mt-2 mb-0 py-1 small d-none\">
                <i class=\"fas fa-info-circle\"></i> Utilisation de données météo simulées. La clé API météo est en cours d'activation.
            </div>
            <div class=\"mt-2 text-end\">
                <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_subscribe");
        yield "\" class=\"btn btn-sm btn-outline-primary\">
                    <i class=\"fas fa-bell me-1\"></i> Recevoir les alertes météo
                </a>
            </div>
        </div>
        <div id=\"weather-error\" class=\"alert alert-warning d-none\">
            <i class=\"fas fa-exclamation-triangle\"></i> <span id=\"weather-error-message\"></span>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const weatherContent = document.getElementById('weather-content');
    const weatherError = document.getElementById('weather-error');
    const weatherErrorMessage = document.getElementById('weather-error-message');
    const weatherLoading = document.getElementById('weather-loading');
    const mockDataNotice = document.getElementById('mock-data-notice');
    
    // Show loading spinner
    weatherLoading.classList.remove('d-none');
    
    // Fetch weather data from our API
    fetch('/api/weather/current')
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erreur HTTP! Statut: \${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            // Hide loading spinner
            weatherLoading.classList.add('d-none');
            
            // Check if we're using mock data
            if (data.is_mock) {
                mockDataNotice.classList.remove('d-none');
            }
            
            // Update weather widget with data
            document.getElementById('weather-location').textContent = `\${data.location.city}, \${data.location.country.toUpperCase()}`;
            document.getElementById('weather-description').textContent = data.weather.description;
            document.getElementById('weather-icon').src = data.weather.icon_url;
            document.getElementById('weather-temp').textContent = Math.round(data.temperature.current);
            document.getElementById('weather-feels-like').textContent = Math.round(data.temperature.feels_like);
            document.getElementById('weather-temp-min').textContent = Math.round(data.temperature.min);
            document.getElementById('weather-temp-max').textContent = Math.round(data.temperature.max);
            document.getElementById('weather-humidity').textContent = data.humidity;
            
            // Show weather content
            weatherContent.classList.remove('d-none');
        })
        .catch(error => {
            // Hide loading spinner
            weatherLoading.classList.add('d-none');
            
            // Show error message
            weatherErrorMessage.textContent = `Could not load weather data. \${error.message}`;
            weatherError.classList.remove('d-none');
            
            console.error('Weather widget error:', error);
        });
});
</script>

<style>
.weather-widget {
    background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);
    border-radius: 10px;
}
.weather-icon {
    width: 50px;
    height: 50px;
}
.weather-temp {
    font-size: 1.5rem;
    font-weight: bold;
}
.weather-detail {
    font-size: 0.9rem;
}
</style> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/weather_widget.html.twig";
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
        return array (  93 => 45,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Weather Widget Component #}
<div class=\"weather-widget card shadow-sm mb-4\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">
            <i class=\"fas fa-cloud-sun\"></i> Météo
            <div class=\"spinner-border spinner-border-sm text-primary d-none\" id=\"weather-loading\" role=\"status\">
                <span class=\"visually-hidden\">Chargement...</span>
            </div>
        </h5>
        <div id=\"weather-content\" class=\"d-none\">
            <div class=\"d-flex align-items-center mb-2\">
                <div id=\"weather-icon-container\" class=\"me-3\">
                    <img id=\"weather-icon\" src=\"\" alt=\"Icône météo\" class=\"weather-icon\">
                </div>
                <div>
                    <h6 id=\"weather-location\" class=\"mb-0\"></h6>
                    <div id=\"weather-description\" class=\"text-muted\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"weather-temp\">
                        <span id=\"weather-temp\"></span>°C
                    </div>
                    <div class=\"weather-feels-like small text-muted\">
                        Ressenti <span id=\"weather-feels-like\"></span>°C
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"weather-detail\">
                        <i class=\"fas fa-temperature-low\"></i> Min: <span id=\"weather-temp-min\"></span>°C
                    </div>
                    <div class=\"weather-detail\">
                        <i class=\"fas fa-temperature-high\"></i> Max: <span id=\"weather-temp-max\"></span>°C
                    </div>
                    <div class=\"weather-detail\">
                        <i class=\"fas fa-tint\"></i> Humidité: <span id=\"weather-humidity\"></span>%
                    </div>
                </div>
            </div>
            <div id=\"mock-data-notice\" class=\"alert alert-info mt-2 mb-0 py-1 small d-none\">
                <i class=\"fas fa-info-circle\"></i> Utilisation de données météo simulées. La clé API météo est en cours d'activation.
            </div>
            <div class=\"mt-2 text-end\">
                <a href=\"{{ path('app_notifications_subscribe') }}\" class=\"btn btn-sm btn-outline-primary\">
                    <i class=\"fas fa-bell me-1\"></i> Recevoir les alertes météo
                </a>
            </div>
        </div>
        <div id=\"weather-error\" class=\"alert alert-warning d-none\">
            <i class=\"fas fa-exclamation-triangle\"></i> <span id=\"weather-error-message\"></span>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const weatherContent = document.getElementById('weather-content');
    const weatherError = document.getElementById('weather-error');
    const weatherErrorMessage = document.getElementById('weather-error-message');
    const weatherLoading = document.getElementById('weather-loading');
    const mockDataNotice = document.getElementById('mock-data-notice');
    
    // Show loading spinner
    weatherLoading.classList.remove('d-none');
    
    // Fetch weather data from our API
    fetch('/api/weather/current')
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erreur HTTP! Statut: \${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            // Hide loading spinner
            weatherLoading.classList.add('d-none');
            
            // Check if we're using mock data
            if (data.is_mock) {
                mockDataNotice.classList.remove('d-none');
            }
            
            // Update weather widget with data
            document.getElementById('weather-location').textContent = `\${data.location.city}, \${data.location.country.toUpperCase()}`;
            document.getElementById('weather-description').textContent = data.weather.description;
            document.getElementById('weather-icon').src = data.weather.icon_url;
            document.getElementById('weather-temp').textContent = Math.round(data.temperature.current);
            document.getElementById('weather-feels-like').textContent = Math.round(data.temperature.feels_like);
            document.getElementById('weather-temp-min').textContent = Math.round(data.temperature.min);
            document.getElementById('weather-temp-max').textContent = Math.round(data.temperature.max);
            document.getElementById('weather-humidity').textContent = data.humidity;
            
            // Show weather content
            weatherContent.classList.remove('d-none');
        })
        .catch(error => {
            // Hide loading spinner
            weatherLoading.classList.add('d-none');
            
            // Show error message
            weatherErrorMessage.textContent = `Could not load weather data. \${error.message}`;
            weatherError.classList.remove('d-none');
            
            console.error('Weather widget error:', error);
        });
});
</script>

<style>
.weather-widget {
    background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);
    border-radius: 10px;
}
.weather-icon {
    width: 50px;
    height: 50px;
}
.weather-temp {
    font-size: 1.5rem;
    font-weight: bold;
}
.weather-detail {
    font-size: 0.9rem;
}
</style> ", "components/weather_widget.html.twig", "C:\\Users\\ghayt\\OneDrive\\Desktop\\PiDevReaptn-main\\templates\\components\\weather_widget.html.twig");
    }
}
