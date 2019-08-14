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

/* settings/woocommerce.html */
class __TwigTemplate_ae7ce173d342d6c65b5b63108cfb3a26cdb784812e16100aaff64e4af41b16b5 extends \MailPoetVendor\Twig\Template
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
        echo "<table class=\"form-table\">
  <tr>
    <th scope=\"row\">
      <label for=\"settings[mailpoet_subscribe_old_woocommerce_customers]\">
        ";
        // line 5
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe old WooCommerce customers");
        echo "
      </label>
      <p class=\"description\">
        ";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe all my past customers to this list because they agreed to receive marketing emails from me.");
        echo "
    <td>
      <p>
        <input
        data-toggle=\"mailpoet_subscribe_old_woocommerce_customers\"
        type=\"checkbox\"
        value=\"1\"
        id=\"settings[mailpoet_subscribe_old_woocommerce_customers]\"
        name=\"mailpoet_subscribe_old_woocommerce_customers[enabled]\"
        ";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mailpoet_subscribe_old_woocommerce_customers", []), "enabled", [])) {
            echo "checked=\"checked\"";
        }
        // line 18
        echo "        >
        ";
        // line 28
        echo "        <input
          type=\"hidden\"
          value=\"1\"
          name=\"mailpoet_subscribe_old_woocommerce_customers[dummy]\"
        >
</table>

";
    }

    public function getTemplateName()
    {
        return "settings/woocommerce.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 28,  58 => 18,  54 => 17,  42 => 8,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "settings/woocommerce.html", "/home/kojejefryl/www/fabulle/wp-content/plugins/mailpoet/views/settings/woocommerce.html");
    }
}
