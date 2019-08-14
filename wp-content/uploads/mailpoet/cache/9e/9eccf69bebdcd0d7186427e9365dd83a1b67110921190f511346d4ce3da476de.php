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

/* form/templates/blocks/select.hbs */
class __TwigTemplate_d1afdedf43d92c93469419e97b470e9c9a4d4f028e08316bbbd83421d3728177 extends \MailPoetVendor\Twig\Template
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
        echo "{{#unless params.label_within}}
  {{#if params.label}}
    <p>
      <label>{{ params.label }}{{#if params.required}} *{{/if}}</label>
    </p>
  {{/if}}
{{/unless}}
<select>
  {{#if params.label_within}}
    <option value=\"\">{{ params.label }}{{#if params.required}} *{{/if}}</option>
  {{else}}
    {{#unless params.required}}<option value=\"\">-</option>{{/unless}}
  {{/if}}
  {{#each params.values}}
    <option {{#if is_checked}}selected=\"selected\"{{/if}}>{{ value }}</option>
  {{/each}}
</select>";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/select.hbs";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "form/templates/blocks/select.hbs", "/home/kojejefryl/www/fabulle/wp-content/plugins/mailpoet/views/form/templates/blocks/select.hbs");
    }
}
