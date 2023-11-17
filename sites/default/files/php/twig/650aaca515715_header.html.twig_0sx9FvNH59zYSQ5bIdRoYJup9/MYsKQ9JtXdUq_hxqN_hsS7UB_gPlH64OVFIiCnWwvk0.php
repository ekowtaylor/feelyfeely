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

/* themes/drupalet_mono/templates/header_styles/header.html.twig */
class __TwigTemplate_682c70d3e82b66ecb39b324e6b001e7d extends Template
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
        $context["var_header_sticky"] = "";
        // line 2
        $context["var_header_menu_align"] = "";
        // line 3
        $context["var_default_header_dark_black"] = "";
        // line 4
        $context["var_default_header_absolute"] = "";
        // line 5
        echo "
";
        // line 6
        $context["var_header_sticky"] = (" " . $this->sandbox->ensureToStringAllowed(($context["header_sticky"] ?? null), 6, $this->source));
        // line 7
        $context["var_header_menu_align"] = (" " . $this->sandbox->ensureToStringAllowed(($context["header_menu_align"] ?? null), 7, $this->source));
        // line 8
        $context["var_default_header_dark_black"] = (" " . $this->sandbox->ensureToStringAllowed(($context["default_header_dark_black"] ?? null), 8, $this->source));
        // line 9
        $context["var_default_header_absolute"] = (" " . $this->sandbox->ensureToStringAllowed(($context["default_header_absolute"] ?? null), 9, $this->source));
        // line 10
        echo "

";
        // line 12
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_header_sticky", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12))) {
            // line 13
            echo "\t";
            $context["var_header_sticky"] = (" " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_header_sticky", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13), 13, $this->source));
        } else {
            // line 15
            echo "\t";
            $context["var_header_sticky"] = "";
        }
        // line 17
        echo "
";
        // line 18
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_header_menu_align", [], "any", false, false, true, 18), 0, [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18))) {
            // line 19
            echo "\t";
            $context["var_header_menu_align"] = (" " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_header_menu_align", [], "any", false, false, true, 19), 0, [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source));
        } else {
            // line 21
            echo "\t";
            $context["var_header_menu_align"] = "";
        }
        // line 23
        echo "
";
        // line 24
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_default_header_dark_black", [], "any", false, false, true, 24), 0, [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24))) {
            // line 25
            echo "\t";
            $context["var_default_header_dark_black"] = (" " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_default_header_dark_black", [], "any", false, false, true, 25), 0, [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source));
        } else {
            // line 27
            echo "\t";
            $context["var_default_header_dark_black"] = "";
        }
        // line 29
        echo "
";
        // line 30
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_default_header_absolute", [], "any", false, false, true, 30), 0, [], "any", false, false, true, 30), "value", [], "any", false, false, true, 30))) {
            // line 31
            echo "\t";
            $context["var_default_header_absolute"] = (" " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "drpn_default_header_absolute", [], "any", false, false, true, 31), 0, [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source));
        } else {
            // line 33
            echo "\t";
            $context["var_default_header_absolute"] = "";
        }
        // line 35
        echo "

";
        // line 37
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_background_header_de", [], "any", false, false, true, 37), "entity", [], "any", false, false, true, 37), "uri", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37))) {
            // line 38
            echo "\t";
            $context["img_uri"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_background_header_de", [], "any", false, false, true, 38), "entity", [], "any", false, false, true, 38), "uri", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38);
        } else {
            // line 40
            echo "\t";
            $context["img_uri"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_background_header_default_", [], "any", false, false, true, 40), "entity", [], "any", false, false, true, 40), "uri", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40);
        }
        // line 42
        echo "



<div class=\"header ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((($this->sandbox->ensureToStringAllowed(($context["var_header_sticky"] ?? null), 46, $this->source) . $this->sandbox->ensureToStringAllowed(($context["var_header_menu_align"] ?? null), 46, $this->source)) . $this->sandbox->ensureToStringAllowed(($context["var_default_header_dark_black"] ?? null), 46, $this->source)) . $this->sandbox->ensureToStringAllowed(($context["var_default_header_absolute"] ?? null), 46, $this->source)), "html", null, true);
        echo "\">
\t<div class=\"container\"> 
\t\t<!-- Logo -->
\t\t<div class=\"header-logo\">
\t\t\t";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 50)) {
            // line 51
            echo "\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
\t\t\t  ";
        }
        // line 53
        echo "\t\t\t
\t\t</div>
\t\t<!-- Menu -->
\t\t<div class=\"header-menu\">
\t\t\t";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 57)) {
            // line 58
            echo "\t\t\t  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "
\t\t\t";
        }
        // line 60
        echo "\t\t\t
\t\t\t
\t\t</div>
\t\t<!-- Menu Toggle -->
\t\t<button class=\"header-toggle\"> <span></span> </button>
\t</div>
\t<!-- end container --> 
</div>

";
        // line 69
        if ( !twig_test_empty(($context["header_image_article"] ?? null))) {
            // line 70
            echo "\t";
            $context["img_uri"] = ($context["header_image_article"] ?? null);
        }
        // line 72
        echo "
";
        // line 73
        if ( !twig_test_empty(($context["img_uri"] ?? null))) {
            // line 74
            echo "\t<div class=\"section-xl bg-image parallax\" data-bg-src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["img_uri"] ?? null), 74, $this->source)), "html", null, true);
            echo "\">
\t\t<div class=\"bg-black-06\">
\t\t\t<div class=\"container text-center\">
\t\t\t\t<h1 class=\"font-weight-normal margin-0\">";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</h1>
\t\t\t\t";
            // line 78
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_description_header", [], "any", false, false, true, 78), "value", [], "any", false, false, true, 78))) {
                // line 79
                echo "\t\t\t\t\t<p>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_description_header", [], "any", false, false, true, 79), "value", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            // line 81
            echo "\t\t\t</div><!-- end container -->
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/drupalet_mono/templates/header_styles/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 81,  195 => 79,  193 => 78,  189 => 77,  182 => 74,  180 => 73,  177 => 72,  173 => 70,  171 => 69,  160 => 60,  154 => 58,  152 => 57,  146 => 53,  140 => 51,  138 => 50,  131 => 46,  125 => 42,  121 => 40,  117 => 38,  115 => 37,  111 => 35,  107 => 33,  103 => 31,  101 => 30,  98 => 29,  94 => 27,  90 => 25,  88 => 24,  85 => 23,  81 => 21,  77 => 19,  75 => 18,  72 => 17,  68 => 15,  64 => 13,  62 => 12,  58 => 10,  56 => 9,  54 => 8,  52 => 7,  50 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupalet_mono/templates/header_styles/header.html.twig", "/home/admin/domains/mono10.drupalet.com/public_html/themes/drupalet_mono/templates/header_styles/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 12);
        static $filters = array("escape" => 46);
        static $functions = array("file_url" => 74);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['file_url']
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
