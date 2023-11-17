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

/* @drupalet_mono/footer_styles/footer-classic.html.twig */
class __TwigTemplate_b7c7c8f962b9c44f71b6d71e84bd1985 extends Template
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
        echo "<footer>
\t<div class=\"section-sm bg-dark\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row col-spacing-20\">
\t\t\t\t<div class=\"col-6 col-sm-6 col-lg-3\">
\t\t\t\t\t";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 6)) {
            // line 7
            echo "\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 9
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 col-sm-6 col-lg-3\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 12)) {
            // line 13
            echo "\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 col-sm-6 col-lg-3\">
\t\t\t\t\t";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 17)) {
            // line 18
            echo "\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6 col-sm-6 col-lg-3\">
\t\t\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 23)) {
            // line 24
            echo "\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row(1) -->
\t\t\t
\t\t\t<hr class=\"margin-top-30 margin-bottom-30\">
\t\t\t<div class=\"row col-spacing-10\">
\t\t\t\t<div class=\"col-12 col-md-6 text-center text-md-left\">
\t\t\t\t\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 34)) {
            // line 35
            echo "\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-6 text-center text-md-right\">
\t\t\t\t\t";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_footer", [], "any", false, false, true, 41)) {
            // line 42
            echo "\t\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social_footer", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end row(2) --> 
\t\t</div>
\t\t<!-- end container --> 
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "@drupalet_mono/footer_styles/footer-classic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  118 => 42,  116 => 41,  110 => 37,  104 => 35,  102 => 34,  92 => 26,  86 => 24,  84 => 23,  79 => 20,  73 => 18,  71 => 17,  67 => 15,  61 => 13,  59 => 12,  54 => 9,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@drupalet_mono/footer_styles/footer-classic.html.twig", "/home/admin/domains/mono10.drupalet.com/public_html/themes/drupalet_mono/templates/footer_styles/footer-classic.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("escape" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
