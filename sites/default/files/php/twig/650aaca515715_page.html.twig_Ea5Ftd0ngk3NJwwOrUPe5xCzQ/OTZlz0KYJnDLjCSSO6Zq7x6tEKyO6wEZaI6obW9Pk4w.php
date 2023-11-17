<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/drupalet_mono/templates/pages/page.html.twig */
class __TwigTemplate_fdc9c1a6a34d6dc83db8ce0940d1aaa2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["temp_header_url"] = "";
        // line 2
        $context["temp_header_url_a"] = "";
        // line 3
        echo "
";
        // line 4
        $context["var_header_menu_style"] = "";
        echo " ";
        // line 5
        echo "
";
        // line 6
        $context["sidebar"] = "";
        // line 7
        echo "
";
        // line 8
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_node_layout", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8))) {
            // line 9
            echo "\t";
            $context["sidebar"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_node_layout", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9);
        }
        // line 11
        echo "

";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_breadcrumb", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13) == "enable")) {
            // line 14
            echo "\t";
            $context["var_header_menu_style"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_breadcrumb", [], "any", false, false, true, 14), 0, [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14);
            // line 15
            echo "\t
\t";
        } else {
            // line 21
            echo "\t";
            $context["var_header_menu_style"] = "";
        }
        // line 23
        echo "
";
        // line 24
        $context["temp_footer_url"] = "";
        // line 25
        echo "
<!-- HEADER START --> 
";
        // line 27
        if ((($context["var_header_menu_style"] ?? null) == "enable")) {
            echo " ";
            // line 28
            echo "\t";
            $this->loadTemplate(($context["header_skin"] ?? null), "themes/drupalet_mono/templates/pages/page.html.twig", 28)->display($context);
        } else {
            // line 29
            echo " ";
            // line 30
            echo "\t";
            $this->loadTemplate("@drupalet_mono/header_styles/header-menu-toggle.html.twig", "themes/drupalet_mono/templates/pages/page.html.twig", 30)->display($context);
        }
        // line 32
        echo "
<!-- HEADER END --> 


<!-- CONTENT --> 
";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 37)) {
            // line 38
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow_content", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
";
        }
        // line 39
        echo "\t

";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 41)) {
            // line 42
            echo "\t<div class=\"help drp-help-region section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 50)) {
            // line 51
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
";
        }
        // line 53
        echo "
";
        // line 54
        if ((($context["sidebar"] ?? null) == "right_sidebar")) {
            // line 55
            echo "\t\t<!-- Blog section  -->
\t\t<div class=\"section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row col-spacing-50\">
\t\t\t\t\t<!-- Blog Posts -->
\t\t\t\t\t<div class=\"col-12 col-lg-8\">
\t\t\t\t\t\t";
            // line 61
            $this->loadTemplate("@drupalet_mono/pages/main.html.twig", "themes/drupalet_mono/templates/pages/page.html.twig", 61)->display($context);
            // line 62
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- end Blog Posts -->
\t\t
\t\t\t\t\t<!-- Blog Sidebar -->
\t\t\t\t\t<div class=\"col-12 col-lg-4 sidebar-wrapper\">
\t\t\t\t\t\t";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end Blog Sidebar -->
\t\t\t\t</div><!-- end row -->
\t\t\t</div><!-- end container -->
\t\t</div>
\t\t<!-- end Blog section -->
\t";
        } elseif ((        // line 74
($context["sidebar"] ?? null) == "left_sidebar")) {
            // line 75
            echo "\t\t<!-- Blog section  -->
\t\t<div class=\"section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row col-spacing-50\">
\t\t\t\t\t
\t\t\t\t\t<!-- Blog Sidebar -->
\t\t\t\t\t<div class=\"col-12 col-lg-4 sidebar-wrapper\">
\t\t\t\t\t\t";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end Blog Sidebar -->
\t\t\t\t\t
\t\t\t\t\t<!-- Blog Posts -->
\t\t\t\t\t<div class=\"col-12 col-lg-8\">
\t\t\t\t\t\t";
            // line 88
            $this->loadTemplate("@drupalet_mono/pages/main.html.twig", "themes/drupalet_mono/templates/pages/page.html.twig", 88)->display($context);
            // line 89
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- end Blog Posts -->
\t\t
\t\t\t\t\t
\t\t\t\t</div><!-- end row -->
\t\t\t</div><!-- end container -->
\t\t</div>
\t\t<!-- end Blog section -->
\t\t
\t\t
\t";
        } else {
            // line 100
            echo "\t\t";
            $this->loadTemplate("@drupalet_mono/pages/main.html.twig", "themes/drupalet_mono/templates/pages/page.html.twig", 100)->display($context);
            // line 101
            echo "\t";
        }
        // line 102
        echo "
";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 103)) {
            // line 104
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
";
        }
        // line 106
        echo "
<!-- FOOTER START --> 
\t";
        // line 108
        $this->loadTemplate("@drupalet_mono/footer_styles/footer-classic.html.twig", "themes/drupalet_mono/templates/pages/page.html.twig", 108)->display($context);
        // line 109
        echo "<!-- FOOTER END --> ";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_mono/templates/pages/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 109,  232 => 108,  228 => 106,  222 => 104,  220 => 103,  217 => 102,  214 => 101,  211 => 100,  198 => 89,  196 => 88,  187 => 82,  178 => 75,  176 => 74,  166 => 67,  159 => 62,  157 => 61,  149 => 55,  147 => 54,  144 => 53,  138 => 51,  136 => 50,  128 => 45,  123 => 42,  121 => 41,  117 => 39,  111 => 38,  109 => 37,  102 => 32,  98 => 30,  96 => 29,  92 => 28,  89 => 27,  85 => 25,  83 => 24,  80 => 23,  76 => 21,  72 => 15,  69 => 14,  67 => 13,  63 => 11,  59 => 9,  57 => 8,  54 => 7,  52 => 6,  49 => 5,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupalet_mono/templates/pages/page.html.twig", "/home/admin/domains/mono10.drupalet.com/public_html/themes/drupalet_mono/templates/pages/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 8, "include" => 28);
        static $filters = array("escape" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
