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

/* temp/admin/dashboard.html.twig */
class __TwigTemplate_d104af0886fbddb142c70679e25bd235 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temp/admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("temp/admin/base.html.twig", "temp/admin/dashboard.html.twig", 1);
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
        <!-- Page Header -->
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h3\">Aperçu du tableau de bord</h1>
            <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_export_dashboard_report");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-file-pdf\"></i> Exporter le rapport complet
            </a>
        </div>

        <!-- Statistics Cards -->
        <div class=\"row mb-4\">
            <!-- Total Products Card -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-primary shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Total des produits</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 22, $this->source); })())), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-box fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Value Card -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-success shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Valeur totale</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">€";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_value"]) || array_key_exists("total_value", $context) ? $context["total_value"] : (function () { throw new RuntimeError('Variable "total_value" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-euro-sign fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stock Health Card -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Santé des stocks</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stock_health"]) || array_key_exists("stock_health", $context) ? $context["stock_health"] : (function () { throw new RuntimeError('Variable "stock_health" does not exist.', 56, $this->source); })()), "html", null, true);
        yield "%</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-clipboard-check fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Low Stock Alerts Card -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-warning shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">Alertes de faible stock</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["low_stock_count"]) || array_key_exists("low_stock_count", $context) ? $context["low_stock_count"] : (function () { throw new RuntimeError('Variable "low_stock_count" does not exist.', 73, $this->source); })()), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-exclamation-triangle fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class=\"row\">
            <!-- Product Categories Distribution -->
            <div class=\"col-xl-6 mb-4\">
                <div class=\"card shadow\">
                    <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Répartition des catégories de produits</h6>
                        <button class=\"btn btn-sm btn-outline-primary export-chart\" data-chart=\"categoryChart\">
                            <i class=\"fas fa-download\"></i>
                        </button>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"categoryChart\"></canvas>
                    </div>
                </div>
            </div>

            <!-- Stock Health Analysis -->
            <div class=\"col-xl-6 mb-4\">
                <div class=\"card shadow\">
                    <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"m-0 font-weight-bold text-success\">Analyse de la santé des stocks</h6>
                        <button class=\"btn btn-sm btn-outline-success export-chart\" data-chart=\"stockHealthChart\">
                            <i class=\"fas fa-download\"></i>
                        </button>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"stockHealthChart\"></canvas>
                    </div>
                </div>
            </div>

            <!-- Product Type Analysis -->
            <div class=\"col-xl-6 mb-4\">
                <div class=\"card shadow\">
                    <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"m-0 font-weight-bold text-info\">Analyse des types de produits</h6>
                        <button class=\"btn btn-sm btn-outline-info export-chart\" data-chart=\"productTypeChart\">
                            <i class=\"fas fa-download\"></i>
                        </button>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"productTypeChart\"></canvas>
                    </div>
                </div>
            </div>

            <!-- Stock Levels -->
            <div class=\"col-xl-6 mb-4\">
                <div class=\"card shadow\">
                    <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"m-0 font-weight-bold text-warning\">Analyse des niveaux de stock</h6>
                        <button class=\"btn btn-sm btn-outline-warning export-chart\" data-chart=\"stockLevelsChart\">
                            <i class=\"fas fa-download\"></i>
                        </button>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"stockLevelsChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Low Stock Alerts Table -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-danger\">Alertes de faible stock</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Stock actuel</th>
                                        <th>Minimum requis</th>
                                        <th>Statut</th>
                                        <th>Action requise</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["low_stock_alerts"]) || array_key_exists("low_stock_alerts", $context) ? $context["low_stock_alerts"] : (function () { throw new RuntimeError('Variable "low_stock_alerts" does not exist.', 167, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 168
            yield "                                    <tr>
                                        <td>";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "product", [], "any", false, false, false, 169), "html", null, true);
            yield "</td>
                                        <td>";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "current_stock", [], "any", false, false, false, 170), "html", null, true);
            yield "</td>
                                        <td>";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "minimum_stock", [], "any", false, false, false, 171), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge badge-";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "status_class", [], "any", false, false, false, 173), "html", null, true);
            yield "\">
                                                ";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "status", [], "any", false, false, false, 174), "html", null, true);
            yield "
                                            </span>
                                        </td>
                                        <td>";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "action", [], "any", false, false, false, 177), "html", null, true);
            yield "</td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['alert'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "                                </tbody>
                            </table>
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

    // line 190
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

        // line 191
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    // Chart colors
    const colors = {
        primary: '#4e73df',
        success: '#1cc88a',
        info: '#36b9cc',
        warning: '#f6c23e',
        danger: '#e74a3b',
        secondary: '#858796'
    };

    // Initialize all charts when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        initializeCategoryChart();
        initializeStockHealthChart();
        initializeProductTypeChart();
        initializeStockLevelsChart();
        setupChartExport();
    });

    function initializeCategoryChart() {
        const ctx = document.getElementById('categoryChart').getContext('2d');
        const categories = ";
        // line 214
        yield json_encode((isset($context["categories_data"]) || array_key_exists("categories_data", $context) ? $context["categories_data"] : (function () { throw new RuntimeError('Variable "categories_data" does not exist.', 214, $this->source); })()));
        yield ";
        
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: Object.keys(categories),
                datasets: [{
                    data: Object.values(categories),
                    backgroundColor: Object.values(colors),
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right'
                    },
                    title: {
                        display: true,
                        text: 'Distribution of Product Categories'
                    }
                }
            }
        });
    }

    function initializeStockHealthChart() {
        const ctx = document.getElementById('stockHealthChart').getContext('2d');
        const stockHealth = ";
        // line 243
        yield json_encode((isset($context["stock_health_data"]) || array_key_exists("stock_health_data", $context) ? $context["stock_health_data"] : (function () { throw new RuntimeError('Variable "stock_health_data" does not exist.', 243, $this->source); })()));
        yield ";

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: Object.keys(stockHealth),
                datasets: [{
                    data: Object.values(stockHealth),
                    backgroundColor: [colors.success, colors.warning, colors.danger],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right'
                    },
                    title: {
                        display: true,
                        text: 'Stock Health Distribution'
                    }
                }
            }
        });
    }

    function initializeProductTypeChart() {
        const ctx = document.getElementById('productTypeChart').getContext('2d');
        const productionMethods = ";
        // line 272
        yield json_encode((isset($context["production_methods_data"]) || array_key_exists("production_methods_data", $context) ? $context["production_methods_data"] : (function () { throw new RuntimeError('Variable "production_methods_data" does not exist.', 272, $this->source); })()));
        yield ";
        const seasonalData = ";
        // line 273
        yield json_encode((isset($context["seasonal_data"]) || array_key_exists("seasonal_data", $context) ? $context["seasonal_data"] : (function () { throw new RuntimeError('Variable "seasonal_data" does not exist.', 273, $this->source); })()));
        yield ";

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: Object.keys(productionMethods),
                datasets: [{
                    label: 'Number of Products',
                    data: Object.values(productionMethods),
                    backgroundColor: colors.info,
                    borderColor: colors.info,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Products'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Products by Production Method'
                    }
                }
            }
        });
    }

    function initializeStockLevelsChart() {
        const ctx = document.getElementById('stockLevelsChart').getContext('2d');
        const stockData = ";
        // line 313
        yield json_encode((isset($context["stock_levels_data"]) || array_key_exists("stock_levels_data", $context) ? $context["stock_levels_data"] : (function () { throw new RuntimeError('Variable "stock_levels_data" does not exist.', 313, $this->source); })()));
        yield ";

        // Sort by current quantity and get top 10
        stockData.sort((a, b) => b.current - a.current);
        const top10 = stockData.slice(0, 10);

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: top10.map(s => s.product),
                datasets: [
                    {
                        label: 'Current Stock',
                        data: top10.map(s => s.current),
                        backgroundColor: colors.primary,
                        borderColor: colors.primary,
                        borderWidth: 1
                    },
                    {
                        label: 'Minimum Stock',
                        data: top10.map(s => s.minimum),
                        type: 'line',
                        borderColor: colors.danger,
                        borderWidth: 2,
                        fill: false
                    },
                    {
                        label: 'Maximum Stock',
                        data: top10.map(s => s.maximum),
                        type: 'line',
                        borderColor: colors.success,
                        borderWidth: 2,
                        fill: false
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Stock Quantity'
                        }
                    },
                    x: {
                        ticks: {
                            maxRotation: 45,
                            minRotation: 45
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Top 10 Products Stock Levels'
                    }
                }
            }
        });
    }

    function setupChartExport() {
        document.querySelectorAll('.export-chart').forEach(button => {
            button.addEventListener('click', function() {
                const chartId = this.dataset.chart;
                const chart = document.getElementById(chartId);
                const chartImage = chart.toDataURL('image/png');
                
                const formData = new FormData();
                formData.append('chartImage', chartImage);
                formData.append('chartId', chartId);
                
                fetch('";
        // line 387
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_export_chart");
        yield "', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.blob())
                .then(blob => {
                    const url = window.URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = `\${chartId}.pdf`;
                    document.body.appendChild(a);
                    a.click();
                    window.URL.revokeObjectURL(url);
                    document.body.removeChild(a);
                })
                .catch(error => {
                    console.error('Error exporting chart:', error);
                    alert('Failed to export chart. Please try again.');
                });
            });
        });
    }

    // Full report export
    document.getElementById('exportFullReport').addEventListener('click', async function() {
        try {
            this.disabled = true;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Generating Report...';

            const charts = {
                category: document.getElementById('categoryChart'),
                stockHealth: document.getElementById('stockHealthChart'),
                productType: document.getElementById('productTypeChart'),
                stockLevels: document.getElementById('stockLevelsChart')
            };

            const chartImages = {};
            for (const [key, chart] of Object.entries(charts)) {
                const canvas = document.createElement('canvas');
                canvas.width = chart.width;
                canvas.height = chart.height;
                const ctx = canvas.getContext('2d');
                ctx.fillStyle = 'white';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(chart, 0, 0);
                chartImages[key] = canvas.toDataURL('image/png');
            }

            const formData = new FormData();
            formData.append('charts', JSON.stringify(chartImages));

            const response = await fetch('";
        // line 438
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_export_full_report");
        yield "', {
                method: 'POST',
                body: formData
            });

            if (!response.ok) throw new Error('Failed to generate report');

            const blob = await response.blob();
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'fruitables-report.pdf';
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
            document.body.removeChild(a);

        } catch (error) {
            console.error('Error generating report:', error);
            alert('Failed to generate report. Please try again.');
        } finally {
            this.disabled = false;
            this.innerHTML = '<i class=\"fas fa-file-pdf\"></i> Export Full Report';
        }
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
        return "temp/admin/dashboard.html.twig";
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
        return array (  596 => 438,  542 => 387,  465 => 313,  422 => 273,  418 => 272,  386 => 243,  354 => 214,  328 => 191,  315 => 190,  296 => 180,  287 => 177,  281 => 174,  277 => 173,  272 => 171,  268 => 170,  264 => 169,  261 => 168,  257 => 167,  160 => 73,  140 => 56,  120 => 39,  100 => 22,  83 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'temp/admin/base.html.twig' %}

{% block admin_content %}
    <div class=\"container-fluid\">
        <!-- Page Header -->
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"h3\">Aperçu du tableau de bord</h1>
            <a href=\"{{ path('admin_export_dashboard_report') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-file-pdf\"></i> Exporter le rapport complet
            </a>
        </div>

        <!-- Statistics Cards -->
        <div class=\"row mb-4\">
            <!-- Total Products Card -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-primary shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Total des produits</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ products|length }}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-box fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Value Card -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-success shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Valeur totale</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">€{{ total_value }}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-euro-sign fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stock Health Card -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-info shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Santé des stocks</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ stock_health }}%</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-clipboard-check fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Low Stock Alerts Card -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
                <div class=\"card border-left-warning shadow h-100 py-2\">
                    <div class=\"card-body\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col mr-2\">
                                <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">Alertes de faible stock</div>
                                <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ low_stock_count }}</div>
                            </div>
                            <div class=\"col-auto\">
                                <i class=\"fas fa-exclamation-triangle fa-2x text-gray-300\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class=\"row\">
            <!-- Product Categories Distribution -->
            <div class=\"col-xl-6 mb-4\">
                <div class=\"card shadow\">
                    <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Répartition des catégories de produits</h6>
                        <button class=\"btn btn-sm btn-outline-primary export-chart\" data-chart=\"categoryChart\">
                            <i class=\"fas fa-download\"></i>
                        </button>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"categoryChart\"></canvas>
                    </div>
                </div>
            </div>

            <!-- Stock Health Analysis -->
            <div class=\"col-xl-6 mb-4\">
                <div class=\"card shadow\">
                    <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"m-0 font-weight-bold text-success\">Analyse de la santé des stocks</h6>
                        <button class=\"btn btn-sm btn-outline-success export-chart\" data-chart=\"stockHealthChart\">
                            <i class=\"fas fa-download\"></i>
                        </button>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"stockHealthChart\"></canvas>
                    </div>
                </div>
            </div>

            <!-- Product Type Analysis -->
            <div class=\"col-xl-6 mb-4\">
                <div class=\"card shadow\">
                    <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"m-0 font-weight-bold text-info\">Analyse des types de produits</h6>
                        <button class=\"btn btn-sm btn-outline-info export-chart\" data-chart=\"productTypeChart\">
                            <i class=\"fas fa-download\"></i>
                        </button>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"productTypeChart\"></canvas>
                    </div>
                </div>
            </div>

            <!-- Stock Levels -->
            <div class=\"col-xl-6 mb-4\">
                <div class=\"card shadow\">
                    <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"m-0 font-weight-bold text-warning\">Analyse des niveaux de stock</h6>
                        <button class=\"btn btn-sm btn-outline-warning export-chart\" data-chart=\"stockLevelsChart\">
                            <i class=\"fas fa-download\"></i>
                        </button>
                    </div>
                    <div class=\"card-body\">
                        <canvas id=\"stockLevelsChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Low Stock Alerts Table -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card shadow mb-4\">
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-danger\">Alertes de faible stock</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Stock actuel</th>
                                        <th>Minimum requis</th>
                                        <th>Statut</th>
                                        <th>Action requise</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for alert in low_stock_alerts %}
                                    <tr>
                                        <td>{{ alert.product }}</td>
                                        <td>{{ alert.current_stock }}</td>
                                        <td>{{ alert.minimum_stock }}</td>
                                        <td>
                                            <span class=\"badge badge-{{ alert.status_class }}\">
                                                {{ alert.status }}
                                            </span>
                                        </td>
                                        <td>{{ alert.action }}</td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    // Chart colors
    const colors = {
        primary: '#4e73df',
        success: '#1cc88a',
        info: '#36b9cc',
        warning: '#f6c23e',
        danger: '#e74a3b',
        secondary: '#858796'
    };

    // Initialize all charts when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        initializeCategoryChart();
        initializeStockHealthChart();
        initializeProductTypeChart();
        initializeStockLevelsChart();
        setupChartExport();
    });

    function initializeCategoryChart() {
        const ctx = document.getElementById('categoryChart').getContext('2d');
        const categories = {{ categories_data|json_encode|raw }};
        
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: Object.keys(categories),
                datasets: [{
                    data: Object.values(categories),
                    backgroundColor: Object.values(colors),
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right'
                    },
                    title: {
                        display: true,
                        text: 'Distribution of Product Categories'
                    }
                }
            }
        });
    }

    function initializeStockHealthChart() {
        const ctx = document.getElementById('stockHealthChart').getContext('2d');
        const stockHealth = {{ stock_health_data|json_encode|raw }};

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: Object.keys(stockHealth),
                datasets: [{
                    data: Object.values(stockHealth),
                    backgroundColor: [colors.success, colors.warning, colors.danger],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right'
                    },
                    title: {
                        display: true,
                        text: 'Stock Health Distribution'
                    }
                }
            }
        });
    }

    function initializeProductTypeChart() {
        const ctx = document.getElementById('productTypeChart').getContext('2d');
        const productionMethods = {{ production_methods_data|json_encode|raw }};
        const seasonalData = {{ seasonal_data|json_encode|raw }};

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: Object.keys(productionMethods),
                datasets: [{
                    label: 'Number of Products',
                    data: Object.values(productionMethods),
                    backgroundColor: colors.info,
                    borderColor: colors.info,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Products'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Products by Production Method'
                    }
                }
            }
        });
    }

    function initializeStockLevelsChart() {
        const ctx = document.getElementById('stockLevelsChart').getContext('2d');
        const stockData = {{ stock_levels_data|json_encode|raw }};

        // Sort by current quantity and get top 10
        stockData.sort((a, b) => b.current - a.current);
        const top10 = stockData.slice(0, 10);

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: top10.map(s => s.product),
                datasets: [
                    {
                        label: 'Current Stock',
                        data: top10.map(s => s.current),
                        backgroundColor: colors.primary,
                        borderColor: colors.primary,
                        borderWidth: 1
                    },
                    {
                        label: 'Minimum Stock',
                        data: top10.map(s => s.minimum),
                        type: 'line',
                        borderColor: colors.danger,
                        borderWidth: 2,
                        fill: false
                    },
                    {
                        label: 'Maximum Stock',
                        data: top10.map(s => s.maximum),
                        type: 'line',
                        borderColor: colors.success,
                        borderWidth: 2,
                        fill: false
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Stock Quantity'
                        }
                    },
                    x: {
                        ticks: {
                            maxRotation: 45,
                            minRotation: 45
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Top 10 Products Stock Levels'
                    }
                }
            }
        });
    }

    function setupChartExport() {
        document.querySelectorAll('.export-chart').forEach(button => {
            button.addEventListener('click', function() {
                const chartId = this.dataset.chart;
                const chart = document.getElementById(chartId);
                const chartImage = chart.toDataURL('image/png');
                
                const formData = new FormData();
                formData.append('chartImage', chartImage);
                formData.append('chartId', chartId);
                
                fetch('{{ path('admin_export_chart') }}', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.blob())
                .then(blob => {
                    const url = window.URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = `\${chartId}.pdf`;
                    document.body.appendChild(a);
                    a.click();
                    window.URL.revokeObjectURL(url);
                    document.body.removeChild(a);
                })
                .catch(error => {
                    console.error('Error exporting chart:', error);
                    alert('Failed to export chart. Please try again.');
                });
            });
        });
    }

    // Full report export
    document.getElementById('exportFullReport').addEventListener('click', async function() {
        try {
            this.disabled = true;
            this.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Generating Report...';

            const charts = {
                category: document.getElementById('categoryChart'),
                stockHealth: document.getElementById('stockHealthChart'),
                productType: document.getElementById('productTypeChart'),
                stockLevels: document.getElementById('stockLevelsChart')
            };

            const chartImages = {};
            for (const [key, chart] of Object.entries(charts)) {
                const canvas = document.createElement('canvas');
                canvas.width = chart.width;
                canvas.height = chart.height;
                const ctx = canvas.getContext('2d');
                ctx.fillStyle = 'white';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(chart, 0, 0);
                chartImages[key] = canvas.toDataURL('image/png');
            }

            const formData = new FormData();
            formData.append('charts', JSON.stringify(chartImages));

            const response = await fetch('{{ path('admin_export_full_report') }}', {
                method: 'POST',
                body: formData
            });

            if (!response.ok) throw new Error('Failed to generate report');

            const blob = await response.blob();
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'fruitables-report.pdf';
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
            document.body.removeChild(a);

        } catch (error) {
            console.error('Error generating report:', error);
            alert('Failed to generate report. Please try again.');
        } finally {
            this.disabled = false;
            this.innerHTML = '<i class=\"fas fa-file-pdf\"></i> Export Full Report';
        }
    });
</script>
{% endblock %}
", "temp/admin/dashboard.html.twig", "C:\\Users\\ghayt\\Downloads\\PiDevReaptn-main (1)\\PiDevReaptn-main\\templates\\temp\\admin\\dashboard.html.twig");
    }
}
