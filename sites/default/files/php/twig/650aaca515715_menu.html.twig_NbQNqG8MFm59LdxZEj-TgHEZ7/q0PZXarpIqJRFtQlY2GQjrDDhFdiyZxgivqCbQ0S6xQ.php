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

/* themes/drupalet_mono/templates/navigation/menu.html.twig */
class __TwigTemplate_6d3bd6a8948d7bcc635a32dbed6a5aa5 extends Template
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
        echo "
";
        // line 2
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 3
        echo "

";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 5, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 7
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 8
            echo "  ";
            $macros["menus"] = $this;
            // line 9
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 10
                echo "   
    ";
                // line 11
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 12
                    echo "\t\t";
                    $context["menu_li"] = "nav-item";
                    // line 13
                    echo "\t\t";
                    $context["menu_a"] = "nav-link";
                    // line 14
                    echo "\t  <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "drp_menu nav"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
                    echo ">
    ";
                } elseif ((                // line 15
($context["menu_level"] ?? null) == 1)) {
                    // line 16
                    echo "\t\t";
                    $context["menu_li"] = "nav-dropdown-item";
                    // line 17
                    echo "\t\t";
                    $context["menu_a"] = "nav-dropdown-link";
                    // line 18
                    echo "      <ul class=\"nav-dropdown\">
\t ";
                } else {
                    // line 20
                    echo "\t \t";
                    $context["menu_li"] = "nav-subdropdown-item";
                    // line 21
                    echo "\t\t";
                    $context["menu_a"] = "nav-subdropdown-link";
                    // line 22
                    echo "\t\t <ul class=\"nav-subdropdown\">
    ";
                }
                // line 24
                echo "\t
\t
\t
\t
\t\t
    ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 30
                    echo "\t\t
\t
\t
      ";
                    // line 34
                    $context["classes"] = [0 => "menu-item", 1 => "nav-item", 2 =>                     // line 37
($context["menu_li"] ?? null), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 38
$context["item"], "is_expanded", [], "any", false, false, true, 38)) ? ("menu-item--expanded") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 39
$context["item"], "is_collapsed", [], "any", false, false, true, 39)) ? ("menu-item--collapsed") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,                     // line 40
$context["item"], "in_active_trail", [], "any", false, false, true, 40)) ? ("menu-item--active-trail") : ("")), 6 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 41
$context["item"], "attributes", [], "any", false, false, true, 41), "drp_class", [], "any", false, false, true, 41)];
                    // line 44
                    echo "      
\t  <li ";
                    // line 45
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 45), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 46
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 46), 46, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 46), 46, $this->source), ["class" => [0 => ($context["menu_a"] ?? null)]]), "html", null, true);
                    echo "
        ";
                    // line 47
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 47)) {
                        // line 48
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 48), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 48, $context, $this->getSourceContext()));
                        echo "

        ";
                    }
                    // line 51
                    echo "
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/drupalet_mono/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 54,  157 => 51,  150 => 48,  148 => 47,  144 => 46,  140 => 45,  137 => 44,  135 => 41,  134 => 40,  133 => 39,  132 => 38,  131 => 37,  130 => 34,  125 => 30,  121 => 29,  114 => 24,  110 => 22,  107 => 21,  104 => 20,  100 => 18,  97 => 17,  94 => 16,  92 => 15,  87 => 14,  84 => 13,  81 => 12,  79 => 11,  76 => 10,  73 => 9,  70 => 8,  55 => 7,  48 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupalet_mono/templates/navigation/menu.html.twig", "/home/admin/domains/mono10.drupalet.com/public_html/themes/drupalet_mono/templates/navigation/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 2, "macro" => 7, "if" => 9, "set" => 12, "for" => 29);
        static $filters = array("escape" => 14);
        static $functions = array("link" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['escape'],
                ['link']
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
