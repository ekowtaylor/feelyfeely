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

/* themes/drupalet_mono/templates/block/block.html.twig */
class __TwigTemplate_6aaf5b9f51242fd12d43589c7d08c472 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $context["custom_classes"] = "";
        // line 3
        if ((($context["label"] ?? null) == "")) {
            // line 4
            $context["custom_classes"] = "no-title";
        }
        // line 7
        $context["classes"] = [0 => "block", 1 => "drp-block", 2 => "sidebar-box", 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 11
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 11), 11, $this->source))), 4 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 12
($context["plugin_id"] ?? null), 12, $this->source))), 5 =>         // line 13
($context["custom_classes"] ?? null)];
        // line 17
        $context["classes_section"] = [0 => "section", 1 => "block", 2 => "drp-block", 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 21
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 21), 21, $this->source))), 4 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 22
($context["plugin_id"] ?? null), 22, $this->source))), 5 =>         // line 23
($context["custom_classes"] ?? null)];
        // line 27
        $context["classes_footer"] = [0 => "block", 1 => "drp-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 30
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 30), 30, $this->source))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 31
($context["plugin_id"] ?? null), 31, $this->source))), 4 =>         // line 32
($context["custom_classes"] ?? null)];
        // line 35
        echo "



";
        // line 39
        if (((($context["region"] ?? null) == "sidebar_right") || (($context["region"] ?? null) == "sidebar_left"))) {
            // line 40
            echo "<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo ">
";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 41, $this->source), "html", null, true);
            echo "

\t\t";
            // line 43
            if (($context["label"] ?? null)) {
                // line 44
                echo "\t        <h6 class=\"font-small font-weight-normal uppercase\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 44, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 44, $this->source), "html", null, true);
                echo "</h6>
\t\t";
            }
            // line 46
            echo "    
\t 
      \t";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 48, $this->source), "html", null, true);
            echo "
    
</div>
";
        } elseif ((        // line 51
($context["region"] ?? null) == "slideshow_content")) {
            // line 52
            echo "<!-- start slideshow -->
\t\t";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 53, $this->source), "html", null, true);
            echo "
<!-- end slideshow -->

";
        } elseif ((        // line 56
($context["region"] ?? null) == "footer")) {
            // line 57
            echo "
\t";
            // line 58
            if (($context["label"] ?? null)) {
                // line 59
                echo "\t\t<h4 class=\"sidebar-heading block-title\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 59, $this->source), "html", null, true);
                echo "><span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 59, $this->source), "html", null, true);
                echo "</span></h4>
\t";
            }
            // line 61
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 61, $this->source), "html", null, true);
            echo "
\t";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 62, $this->source), "html", null, true);
            echo "
\t
";
        } elseif (((((((        // line 64
($context["region"] ?? null) == "branding") || (($context["region"] ?? null) == "social_footer")) || (($context["region"] ?? null) == "copyright")) || (($context["region"] ?? null) == "menu_footer")) || (($context["region"] ?? null) == "menu_toggle")) || (($context["region"] ?? null) == "content_menu_toggle"))) {
            // line 65
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 65, $this->source), "html", null, true);
            echo "
";
        } elseif (((((        // line 66
($context["region"] ?? null) == "footer_first") || (($context["region"] ?? null) == "footer_second")) || (($context["region"] ?? null) == "footer_third")) || (($context["region"] ?? null) == "footer_four"))) {
            // line 67
            echo "
\t<div ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes_footer"] ?? null)], "method", false, false, true, 68), 68, $this->source), "html", null, true);
            echo ">
\t\t";
            // line 69
            if (($context["label"] ?? null)) {
                // line 70
                echo "\t\t\t<h6 class=\"font-small font-weight-normal uppercase\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 70, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 70, $this->source), "html", null, true);
                echo "</h6>
\t\t";
            }
            // line 72
            echo "\t\t
\t\t";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 73, $this->source), "html", null, true);
            echo "
\t\t";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 74, $this->source), "html", null, true);
            echo "
\t\t
\t</div>

";
        } elseif ((((        // line 78
($context["region"] ?? null) == "content") || (($context["region"] ?? null) == "before_content")) || (($context["region"] ?? null) == "content_bottom"))) {
            // line 79
            echo "\t";
            if ( !twig_test_empty(($context["content"] ?? null))) {
                // line 80
                echo "
\t

\t\t<div ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes_section"] ?? null)], "method", false, false, true, 83), 83, $this->source), "html", null, true);
                echo ">
\t\t\t<div class=\"container\">
\t\t\t\t";
                // line 85
                if (($context["label"] ?? null)) {
                    // line 86
                    echo "\t\t\t\t\t<div class=\"margin-bottom-70\">
\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t<div class=\"col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 align-title\">
\t\t\t\t\t\t\t\t<h6 class=\"font-family-tertiary font-small font-weight-normal uppercase subtitle-section\">Subtitle</h6>
\t\t\t\t\t\t\t\t<h2 class=\"font-weight-normal title-section\">";
                    // line 90
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 90, $this->source), "html", null, true);
                    echo "</h2>
\t\t\t\t\t\t\t\t<p class=\"desc-section hidden\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t
\t\t\t\t";
                // line 97
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 97, $this->source), "html", null, true);
                echo "
\t\t\t\t";
                // line 98
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 98, $this->source), "html", null, true);
                echo "
\t\t\t\t";
                // line 99
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 99, $this->source), "html", null, true);
                echo "
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t
\t";
            }
            // line 105
            echo "\t\t
";
        } else {
            // line 107
            echo "<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 107), 107, $this->source), "html", null, true);
            echo ">
\t<div class=\"container\">
\t\t";
            // line 109
            if (($context["label"] ?? null)) {
                // line 110
                echo "\t\t\t<div class=\"row\">
\t\t\t\t<h3 class=\"sep-line-one\">";
                // line 111
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 111, $this->source), "html", null, true);
                echo "</h3>
\t\t\t</div>
\t\t";
            }
            // line 114
            echo "\t\t<div class=\"row\">
\t\t\t";
            // line 115
            $this->displayBlock('content', $context, $blocks);
            // line 118
            echo "\t\t</div>
\t</div>
</div>
";
        }
    }

    // line 115
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "\t\t\t  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 116, $this->source), "html", null, true);
        echo "
\t\t  ";
    }

    public function getTemplateName()
    {
        return "themes/drupalet_mono/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 116,  265 => 115,  257 => 118,  255 => 115,  252 => 114,  246 => 111,  243 => 110,  241 => 109,  235 => 107,  231 => 105,  222 => 99,  218 => 98,  214 => 97,  211 => 96,  202 => 90,  196 => 86,  194 => 85,  189 => 83,  184 => 80,  181 => 79,  179 => 78,  172 => 74,  168 => 73,  165 => 72,  157 => 70,  155 => 69,  151 => 68,  148 => 67,  146 => 66,  141 => 65,  139 => 64,  134 => 62,  129 => 61,  121 => 59,  119 => 58,  116 => 57,  114 => 56,  108 => 53,  105 => 52,  103 => 51,  97 => 48,  93 => 46,  85 => 44,  83 => 43,  78 => 41,  73 => 40,  71 => 39,  65 => 35,  63 => 32,  62 => 31,  61 => 30,  60 => 27,  58 => 23,  57 => 22,  56 => 21,  55 => 17,  53 => 13,  52 => 12,  51 => 11,  50 => 7,  47 => 4,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupalet_mono/templates/block/block.html.twig", "/home/admin/domains/mono10.drupalet.com/public_html/themes/drupalet_mono/templates/block/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 3, "block" => 115);
        static $filters = array("clean_class" => 11, "escape" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
