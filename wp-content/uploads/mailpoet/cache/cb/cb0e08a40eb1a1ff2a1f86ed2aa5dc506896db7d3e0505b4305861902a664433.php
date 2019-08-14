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

/* form/templates/preview.hbs */
class __TwigTemplate_2b76193c1ee3a0b23844dad96e25d41ebbc8be3721b14787ecba26f30d074937 extends \MailPoetVendor\Twig\Template
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
        echo "<style type=\"text/css\" id=\"mailpoet_form_preview_styles\">
\t.mailpoet_hp_email_label { display: none; }
\t{{{ css }}}
</style>
<div class=\"mailpoet_form\">
  <div class=\"mailpoet_message\">
    <p class=\"mailpoet_validate_success\">";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This is what the success message looks like.");
        echo "</p>
    <p class=\"mailpoet_validate_error\">";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This is what the error message looks like.");
        echo "</p>
  </div>
  {{{ html }}}
</div>
";
    }

    public function getTemplateName()
    {
        return "form/templates/preview.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "form/templates/preview.hbs", "/home/kojejefryl/www/fabulle/wp-content/plugins/mailpoet/views/form/templates/preview.hbs");
    }
}
