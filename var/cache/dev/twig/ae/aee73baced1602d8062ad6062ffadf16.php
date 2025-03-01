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

/* email/weather_alert.html.twig */
class __TwigTemplate_ff4cc99e33e379cc5166c522a3837b69 extends Template
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
            'action' => [$this, 'block_action'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@email/default/notification/body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/weather_alert.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/weather_alert.html.twig"));

        $this->parent = $this->loadTemplate("@email/default/notification/body.html.twig", "email/weather_alert.html.twig", 1);
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
        yield "    <h2>Weather Alert for ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 4, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 4, $this->source); })())), "html", null, true);
        yield "</h2>
    
    <spacer size=\"16\"></spacer>
    
    <container>
        <row>
            <columns>
                <callout class=\"secondary\">
                    <row>
                        <columns small=\"3\">
                            <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon_url"]) || array_key_exists("icon_url", $context) ? $context["icon_url"] : (function () { throw new RuntimeError('Variable "icon_url" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" width=\"80\" height=\"80\">
                        </columns>
                        <columns small=\"9\">
                            <h3>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 17, $this->source); })())), "html", null, true);
        yield "°C</h3>
                            <p>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 18, $this->source); })()), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</p>
                        </columns>
                    </row>
                </callout>
            </columns>
        </row>
    </container>
    
    <spacer size=\"16\"></spacer>
    
    ";
        // line 28
        if (((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 28, $this->source); })()) > 30)) {
            // line 29
            yield "        <callout class=\"alert\">
            <row>
                <columns>
                    <p><strong>⚠️ High Temperature Alert!</strong></p>
                    <p>Current temperature is high (";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 33, $this->source); })())), "html", null, true);
            yield "°C). Stay hydrated and protect your crops from heat stress.</p>
                    <ul>
                        <li>Water plants early in the morning or late in the evening</li>
                        <li>Use mulch to retain soil moisture</li>
                        <li>Provide shade for sensitive crops</li>
                    </ul>
                </columns>
            </row>
        </callout>
    ";
        } elseif ((        // line 42
(isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 42, $this->source); })()) < 5)) {
            // line 43
            yield "        <callout class=\"alert\">
            <row>
                <columns>
                    <p><strong>❄️ Low Temperature Alert!</strong></p>
                    <p>Current temperature is low (";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 47, $this->source); })())), "html", null, true);
            yield "°C). Protect sensitive crops from frost.</p>
                    <ul>
                        <li>Cover sensitive plants with frost cloth</li>
                        <li>Move potted plants indoors if possible</li>
                        <li>Avoid watering plants in freezing temperatures</li>
                    </ul>
                </columns>
            </row>
        </callout>
    ";
        }
        // line 57
        yield "    
    ";
        // line 58
        if ((((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 58, $this->source); })()) == "Rain") || ((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 58, $this->source); })()) == "Thunderstorm"))) {
            // line 59
            yield "        <callout class=\"warning\">
            <row>
                <columns>
                    <p><strong>☔ Precipitation Alert!</strong></p>
                    <p>Precipitation detected (";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "). Consider postponing outdoor agricultural activities.</p>
                    <ul>
                        <li>Ensure proper drainage in fields</li>
                        <li>Postpone fertilizer application</li>
                        <li>Monitor for disease development in wet conditions</li>
                    </ul>
                </columns>
            </row>
        </callout>
    ";
        }
        // line 73
        yield "    
    <spacer size=\"16\"></spacer>
    
    <p>Stay safe and take appropriate measures for your agricultural activities.</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_action(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "action"));

        // line 80
        yield "    <button href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_notifications_weather_alert");
        yield "\">View Detailed Weather</button>
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
        return "email/weather_alert.html.twig";
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
        return array (  213 => 80,  200 => 79,  185 => 73,  172 => 63,  166 => 59,  164 => 58,  161 => 57,  148 => 47,  142 => 43,  140 => 42,  128 => 33,  122 => 29,  120 => 28,  105 => 18,  101 => 17,  93 => 14,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@email/default/notification/body.html.twig' %}

{% block content %}
    <h2>Weather Alert for {{ city }}, {{ country|upper }}</h2>
    
    <spacer size=\"16\"></spacer>
    
    <container>
        <row>
            <columns>
                <callout class=\"secondary\">
                    <row>
                        <columns small=\"3\">
                            <img src=\"{{ icon_url }}\" alt=\"{{ description }}\" width=\"80\" height=\"80\">
                        </columns>
                        <columns small=\"9\">
                            <h3>{{ temperature|round }}°C</h3>
                            <p>{{ condition }} - {{ description }}</p>
                        </columns>
                    </row>
                </callout>
            </columns>
        </row>
    </container>
    
    <spacer size=\"16\"></spacer>
    
    {% if temperature > 30 %}
        <callout class=\"alert\">
            <row>
                <columns>
                    <p><strong>⚠️ High Temperature Alert!</strong></p>
                    <p>Current temperature is high ({{ temperature|round }}°C). Stay hydrated and protect your crops from heat stress.</p>
                    <ul>
                        <li>Water plants early in the morning or late in the evening</li>
                        <li>Use mulch to retain soil moisture</li>
                        <li>Provide shade for sensitive crops</li>
                    </ul>
                </columns>
            </row>
        </callout>
    {% elseif temperature < 5 %}
        <callout class=\"alert\">
            <row>
                <columns>
                    <p><strong>❄️ Low Temperature Alert!</strong></p>
                    <p>Current temperature is low ({{ temperature|round }}°C). Protect sensitive crops from frost.</p>
                    <ul>
                        <li>Cover sensitive plants with frost cloth</li>
                        <li>Move potted plants indoors if possible</li>
                        <li>Avoid watering plants in freezing temperatures</li>
                    </ul>
                </columns>
            </row>
        </callout>
    {% endif %}
    
    {% if condition == 'Rain' or condition == 'Thunderstorm' %}
        <callout class=\"warning\">
            <row>
                <columns>
                    <p><strong>☔ Precipitation Alert!</strong></p>
                    <p>Precipitation detected ({{ description }}). Consider postponing outdoor agricultural activities.</p>
                    <ul>
                        <li>Ensure proper drainage in fields</li>
                        <li>Postpone fertilizer application</li>
                        <li>Monitor for disease development in wet conditions</li>
                    </ul>
                </columns>
            </row>
        </callout>
    {% endif %}
    
    <spacer size=\"16\"></spacer>
    
    <p>Stay safe and take appropriate measures for your agricultural activities.</p>
{% endblock %}

{% block action %}
    <button href=\"{{ url('app_notifications_weather_alert') }}\">View Detailed Weather</button>
{% endblock %} ", "email/weather_alert.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\email\\weather_alert.html.twig");
    }
}
