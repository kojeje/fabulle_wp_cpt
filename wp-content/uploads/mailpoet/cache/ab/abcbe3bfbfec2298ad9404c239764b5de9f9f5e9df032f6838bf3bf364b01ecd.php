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

/* form/templates/blocks/segment.hbs */
class __TwigTemplate_311e1f0b90806baa94744d96b323c8359c4811befe3e86f11a75f50208d74c4c extends \MailPoetVendor\Twig\Template
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
        echo "{{#if params.label}}<p>{{ params.label }}</p>{{/if}}
{{#unless params.values}}<p class=\"mailpoet_error\">";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please select at least one list");
        echo "</p>{{/unless}}
{{#each params.values}}
  <p>
    <input class=\"mailpoet_checkbox\" type=\"checkbox\" {{#if is_checked}}checked=\"checked\"{{/if}} disabled=\"disabled\" />{{ name }}
  </p>
{{/each}}";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/segment.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "form/templates/blocks/segment.hbs", "/home/kojejefryl/www/fabulle/wp-content/plugins/mailpoet/views/form/templates/blocks/segment.hbs");
    }
}
