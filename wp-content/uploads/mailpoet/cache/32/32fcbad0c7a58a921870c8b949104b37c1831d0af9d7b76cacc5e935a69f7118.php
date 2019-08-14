<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* form/templates/blocks/date_days.hbs */
class __TwigTemplate_beb3935b0b0dc975bba9dc2834f4dfb2e7d4d03c9cc8192c6c5b87d8d017def3 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["currentDay"] = \MailPoetVendor\twig_number_format_filter($this->env, \MailPoetVendor\twig_date_format_filter($this->env, "now", "d"));
        // line 2
        echo "<select id=\"{{ id }}_days\">
  <option value=\"\">";
        // line 3
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Day");
        echo "</option>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = \MailPoetVendor\twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 5
            echo "    <option
    ";
            // line 6
            if ((($context["currentDay"] ?? null) == $context["day"])) {
                // line 7
                echo "      {{#if params.is_default_today}}selected=\"selected\"{{/if}}
    ";
            }
            // line 9
            echo "    >";
            echo \MailPoetVendor\twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/date_days.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  52 => 9,  48 => 7,  46 => 6,  43 => 5,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "form/templates/blocks/date_days.hbs", "/home/kojejefryl/www/fabulle/wp-content/plugins/mailpoet/views/form/templates/blocks/date_days.hbs");
    }
}
