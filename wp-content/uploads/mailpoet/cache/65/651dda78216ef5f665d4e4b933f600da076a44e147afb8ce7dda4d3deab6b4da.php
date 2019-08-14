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

/* newsletter/editor.html */
class __TwigTemplate_2281b1601864835c1dfef22a0cbb0ebda6dd7fabc69f562b188a0bb8e1385165 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "newsletter/editor.html", 1);
        $this->blocks = [
            'templates' => [$this, 'block_templates'],
            'content' => [$this, 'block_content'],
            'translations' => [$this, 'block_translations'],
            'after_css' => [$this, 'block_after_css'],
            'after_javascript' => [$this, 'block_after_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_templates($context, array $blocks = [])
    {
        // line 4
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_tools_generic", "newsletter/templates/blocks/base/toolsGeneric.hbs");
        // line 7
        echo "
  ";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_block", "newsletter/templates/blocks/automatedLatestContent/block.hbs");
        // line 11
        echo "
  ";
        // line 12
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_widget", "newsletter/templates/blocks/automatedLatestContent/widget.hbs");
        // line 15
        echo "
  ";
        // line 16
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_settings", "newsletter/templates/blocks/automatedLatestContent/settings.hbs");
        // line 19
        echo "
  ";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_block", "newsletter/templates/blocks/automatedLatestContentLayout/block.hbs");
        // line 23
        echo "
  ";
        // line 24
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_widget", "newsletter/templates/blocks/automatedLatestContentLayout/widget.hbs");
        // line 27
        echo "
  ";
        // line 28
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_settings", "newsletter/templates/blocks/automatedLatestContentLayout/settings.hbs");
        // line 31
        echo "
  ";
        // line 32
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_block", "newsletter/templates/blocks/button/block.hbs");
        // line 35
        echo "
  ";
        // line 36
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_widget", "newsletter/templates/blocks/button/widget.hbs");
        // line 39
        echo "
  ";
        // line 40
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_settings", "newsletter/templates/blocks/button/settings.hbs");
        // line 43
        echo "
  ";
        // line 44
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_block", "newsletter/templates/blocks/container/block.hbs");
        // line 47
        echo "
  ";
        // line 48
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_block_empty", "newsletter/templates/blocks/container/emptyBlock.hbs");
        // line 51
        echo "
  ";
        // line 52
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_one_column_widget", "newsletter/templates/blocks/container/oneColumnLayoutWidget.hbs");
        // line 55
        echo "
  ";
        // line 56
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_two_column_widget", "newsletter/templates/blocks/container/twoColumnLayoutWidget.hbs");
        // line 59
        echo "
  ";
        // line 60
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_two_column_12_widget", "newsletter/templates/blocks/container/twoColumnLayoutWidget12.hbs");
        // line 63
        echo "
  ";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_two_column_21_widget", "newsletter/templates/blocks/container/twoColumnLayoutWidget21.hbs");
        // line 67
        echo "
  ";
        // line 68
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_three_column_widget", "newsletter/templates/blocks/container/threeColumnLayoutWidget.hbs");
        // line 71
        echo "
  ";
        // line 72
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_settings", "newsletter/templates/blocks/container/settings.hbs");
        // line 75
        echo "
  ";
        // line 76
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_column_settings", "newsletter/templates/blocks/container/columnSettings.hbs");
        // line 79
        echo "
  ";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_block", "newsletter/templates/blocks/divider/block.hbs");
        // line 83
        echo "
  ";
        // line 84
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_widget", "newsletter/templates/blocks/divider/widget.hbs");
        // line 87
        echo "
  ";
        // line 88
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_settings", "newsletter/templates/blocks/divider/settings.hbs");
        // line 91
        echo "
  ";
        // line 92
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_block", "newsletter/templates/blocks/footer/block.hbs");
        // line 95
        echo "
  ";
        // line 96
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_widget", "newsletter/templates/blocks/footer/widget.hbs");
        // line 99
        echo "
  ";
        // line 100
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_settings", "newsletter/templates/blocks/footer/settings.hbs");
        // line 103
        echo "
  ";
        // line 104
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_block", "newsletter/templates/blocks/header/block.hbs");
        // line 107
        echo "
  ";
        // line 108
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_widget", "newsletter/templates/blocks/header/widget.hbs");
        // line 111
        echo "
  ";
        // line 112
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_settings", "newsletter/templates/blocks/header/settings.hbs");
        // line 115
        echo "
  ";
        // line 116
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_block", "newsletter/templates/blocks/image/block.hbs");
        // line 119
        echo "
  ";
        // line 120
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_widget", "newsletter/templates/blocks/image/widget.hbs");
        // line 123
        echo "
  ";
        // line 124
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_settings", "newsletter/templates/blocks/image/settings.hbs");
        // line 127
        echo "
  ";
        // line 128
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_block", "newsletter/templates/blocks/posts/block.hbs");
        // line 131
        echo "
  ";
        // line 132
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_widget", "newsletter/templates/blocks/posts/widget.hbs");
        // line 135
        echo "
  ";
        // line 136
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings", "newsletter/templates/blocks/posts/settings.hbs");
        // line 139
        echo "
  ";
        // line 140
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_display_options", "newsletter/templates/blocks/posts/settingsDisplayOptions.hbs");
        // line 143
        echo "
  ";
        // line 144
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_selection", "newsletter/templates/blocks/posts/settingsSelection.hbs");
        // line 147
        echo "
  ";
        // line 148
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_selection_empty", "newsletter/templates/blocks/posts/settingsSelectionEmpty.hbs");
        // line 151
        echo "
  ";
        // line 152
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_single_post", "newsletter/templates/blocks/posts/settingsSinglePost.hbs");
        // line 155
        echo "
  ";
        // line 156
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_products_block", "newsletter/templates/blocks/products/block.hbs");
        // line 159
        echo "
  ";
        // line 160
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_products_widget", "newsletter/templates/blocks/products/widget.hbs");
        // line 163
        echo "
  ";
        // line 164
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_products_settings", "newsletter/templates/blocks/products/settings.hbs");
        // line 167
        echo "
  ";
        // line 168
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_products_settings_display_options", "newsletter/templates/blocks/products/settingsDisplayOptions.hbs");
        // line 171
        echo "
  ";
        // line 172
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_products_settings_selection", "newsletter/templates/blocks/products/settingsSelection.hbs");
        // line 175
        echo "
  ";
        // line 176
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_products_settings_selection_empty", "newsletter/templates/blocks/products/settingsSelectionEmpty.hbs");
        // line 179
        echo "
  ";
        // line 180
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_products_settings_single_post", "newsletter/templates/blocks/products/settingsSinglePost.hbs");
        // line 183
        echo "
  ";
        // line 184
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_block", "newsletter/templates/blocks/social/block.hbs");
        // line 187
        echo "
  ";
        // line 188
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_block_icon", "newsletter/templates/blocks/social/blockIcon.hbs");
        // line 191
        echo "
  ";
        // line 192
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_widget", "newsletter/templates/blocks/social/widget.hbs");
        // line 195
        echo "
  ";
        // line 196
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings", "newsletter/templates/blocks/social/settings.hbs");
        // line 199
        echo "
  ";
        // line 200
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_icon", "newsletter/templates/blocks/social/settingsIcon.hbs");
        // line 203
        echo "
  ";
        // line 204
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_icon_selector", "newsletter/templates/blocks/social/settingsIconSelector.hbs");
        // line 207
        echo "
  ";
        // line 208
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_styles", "newsletter/templates/blocks/social/settingsStyles.hbs");
        // line 211
        echo "
  ";
        // line 212
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_block", "newsletter/templates/blocks/spacer/block.hbs");
        // line 215
        echo "
  ";
        // line 216
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_widget", "newsletter/templates/blocks/spacer/widget.hbs");
        // line 219
        echo "
  ";
        // line 220
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_settings", "newsletter/templates/blocks/spacer/settings.hbs");
        // line 223
        echo "
  ";
        // line 224
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_block", "newsletter/templates/blocks/text/block.hbs");
        // line 227
        echo "
  ";
        // line 228
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_widget", "newsletter/templates/blocks/text/widget.hbs");
        // line 231
        echo "
  ";
        // line 232
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_settings", "newsletter/templates/blocks/text/settings.hbs");
        // line 235
        echo "
  ";
        // line 236
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_heading", "newsletter/templates/components/heading.hbs");
        // line 239
        echo "
  ";
        // line 240
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_save", "newsletter/templates/components/save.hbs");
        // line 243
        echo "
  ";
        // line 244
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_styles", "newsletter/templates/components/styles.hbs");
        // line 247
        echo "
  ";
        // line 248
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_newsletter_preview", "newsletter/templates/components/newsletterPreview.hbs");
        // line 251
        echo "
  ";
        // line 252
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar", "newsletter/templates/components/sidebar/sidebar.hbs");
        // line 255
        echo "
  ";
        // line 256
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_content", "newsletter/templates/components/sidebar/content.hbs");
        // line 259
        echo "
  ";
        // line 260
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_layout", "newsletter/templates/components/sidebar/layout.hbs");
        // line 263
        echo "
  ";
        // line 264
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_preview", "newsletter/templates/components/sidebar/preview.hbs");
        // line 267
        echo "
  ";
        // line 268
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_styles", "newsletter/templates/components/sidebar/styles.hbs");
        // line 271
        echo "
";
    }

    // line 274
    public function block_content($context, array $blocks = [])
    {
        // line 275
        echo "<!-- Hidden heading for notices to appear under -->
<h1 style=\"display:none\">";
        // line 276
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter Editor");
        echo "</h1>
<div id=\"mailpoet_editor\">
  <div id=\"mailpoet_editor_breadcrumb\" class=\"mailpoet_breadcrumbs\"></div>
  <div id=\"mailpoet_editor_top\"></div>
  <div id=\"mailpoet_editor_heading\"></div>
  <div class=\"clearfix\"></div>
  <div id=\"mailpoet_editor_main_wrapper\">
    <div id=\"mailpoet_editor_styles\"></div>
    <div id=\"mailpoet_editor_content_container\">
      <div class=\"mailpoet_newsletter_wrapper\">
        <div id=\"mailpoet_editor_content\"></div>
      </div>
    </div>
    <div id=\"mailpoet_editor_sidebar\"></div>
    <div class=\"clear\"></div>
  </div>
  <div id=\"mailpoet_editor_bottom\"></div>

  <div class=\"mailpoet_layer_overlay\" style=\"display:none;\"></div>

  <div id=\"wp-link-backdrop\" style=\"display: none\"></div>
  <div
    id=\"wp-link-wrap\"
    class=\"wp-core-ui search-panel-visible\"
    style=\"display: none\"
  >
  <form id=\"wp-link\" tabindex=\"-1\">
    ";
        // line 303
        echo wp_nonce_field("internal-linking", "_ajax_linking_nonce", false);
        echo "
    <div id=\"link-modal-title\">
      ";
        // line 305
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Insert/edit link");
        echo "
      <div id=\"wp-link-close\" tabindex=\"0\"></div>
    </div>
    <div id=\"link-selector\">
      <div id=\"link-options\">
        <div>
          <label>
            <span>";
        // line 312
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Type");
        echo "</span>
            <select id=\"url-type-field\" name=\"urltype\">
              <option value=\"http://\">";
        // line 314
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link to a web page");
        echo "</option>
              <option value=\"[viewInBrowserUrl]\">";
        // line 315
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Browser version");
        echo "</option>
              <option value=\"[unsubscribeUrl]\">";
        // line 316
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubcribe page");
        echo "</option>
              <option value=\"[manageSubscriptionUrl]\">";
        // line 317
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage your subscription page");
        echo "</option>
            </select>
          </label>
        </div>
        <div id=\"link-href-field\">
          <label><span>";
        // line 322
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link");
        echo "</span><input id=\"url-field\" type=\"text\" name=\"href\" /></label>
        </div>
        <div class=\"mailpoet_hidden\">
          <label><span>";
        // line 325
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Title");
        echo "</span><input id=\"link-title-field\" type=\"text\" name=\"linktitle\" /></label>
        </div>
        <div class=\"link-target mailpoet_hidden\">
          <label><span>&nbsp;</span><input type=\"checkbox\" id=\"link-target-checkbox\" /> ";
        // line 328
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open link in a new window/tab");
        echo "</label>
        </div>
      </div>
      <div id=\"search-panel\">
        <div class=\"link-search-wrapper\">
          <label>
            <span class=\"search-label\">";
        // line 334
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Search your content");
        echo "</span>
            <input type=\"search\" id=\"search-field\" class=\"link-search-field\" autocomplete=\"off\" />
            <span class=\"spinner\"></span>
          </label>
        </div>
        <div id=\"search-results\" class=\"query-results\">
          <ul></ul>
          <div class=\"river-waiting\">
            <span class=\"spinner\"></span>
          </div>
        </div>
        <div id=\"most-recent-results\" class=\"query-results\">
          <div class=\"query-notice\"><em>";
        // line 346
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No search term specified. Showing recent items.");
        echo "</em></div>
          <ul></ul>
          <div class=\"river-waiting\">
            <span class=\"spinner\"></span>
          </div>
        </div>
      </div>
    </div>
    <div class=\"submitbox\">
      <div id=\"wp-link-update\">
        <input type=\"submit\" value=\"";
        // line 356
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add Link");
        echo "\" class=\"button button-primary\" id=\"wp-link-submit\" name=\"wp-link-submit\">
      </div>
      <div id=\"wp-link-cancel\">
        <a class=\"submitdelete deletion\" href=\"#\">";
        // line 359
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Cancel");
        echo "</a>
      </div>
    </div>
  </form>
</div>
";
    }

    // line 366
    public function block_translations($context, array $blocks = [])
    {
        // line 367
        echo "  ";
        $context["helpTooltipSendPreview"] = \MailPoetVendor\twig_escape_filter($this->env, MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Didn't receive the test email? Read our [link]quick guide[/link] to sending issues. <br><br>A MailPoet logo will appear in the footer of all emails sent with the free version of MailPoet."), "http://beta.docs.mailpoet.com/article/146-my-newsletters-are-not-being-received", ["target" => "_blank"]), "js");
        // line 370
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(["failedToFetchAvailablePosts" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Failed to fetch available posts"), "failedToFetchRenderedPosts" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Failed to fetch rendered posts"), "shortcodesWindowTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select a shortcode"), "unsubscribeLinkMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("All emails must include an \"Unsubscribe\" link. Add a footer widget to your email to continue."), "automatedLatestContentMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Please add an “Automatic Latest Content” widget to the email from the right sidebar.", "(Please reuse the current translation used for the string “Automatic Latest Content”) This Error message is displayed when a user tries to send a “Post Notification” email without any “Automatic Latest Content” widget inside"), "newsletterPreviewEmailMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enter an email address to send the preview newsletter to."), "newsletterPreviewSent" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your test email has been sent!"), "newsletterPreviewErrorNotice" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email could not be sent due to a technical issue with %\$1s"), "newsletterPreviewErrorCheckConfiguration" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please check your sending method configuration, you may need to consult with your hosting company."), "newsletterPreviewErrorUseSendingService" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("The easy alternative is to <b>send emails with MailPoet Sending Service</b> instead, like thousands of other users do."), "newsletterPreviewErrorSignUpForSendingService" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sign up for free in minutes"), "newsletterPreviewErrorCheckSettingsNotice" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Check your [link]sending method settings[/link]."), "templateNameMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please add a template name"), "helpTooltipSendPreview" =>         // line 384
($context["helpTooltipSendPreview"] ?? null), "helpTooltipDesignerSubjectLine" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("You can add MailPoet shortcodes here. For example, you can add your subscribers' first names by using this shortcode: [subscriber:firstname | default:reader]. Simply copy and paste the shortcode into the field."), "helpTooltipDesignerPreheader" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This optional text will appear in your subscribers' inboxes, beside the subject line. Write something enticing!"), "helpTooltipDesignerFullWidth" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This option eliminates padding around the image."), "helpTooltipDesignerIdealWidth" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Use images with widths of at least 1,000 pixels to ensure sharp display on high density screens, like mobile devices."), "templateSaved" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template has been saved."), "templateSaveFailed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template has not been saved, please try again"), "categoriesAndTags" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories & tags"), "noPostsToDisplay" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("There is no content to display."), "previewShouldOpenInNewTab" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your preview should open in a new tab. Please ensure your browser is not blocking popups from this page."), "newsletterPreview" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter Preview"), "newsletterBodyIsCorrupted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Contents of this newsletter are corrupted and may be lost, you may need to add new content to this newsletter, or create a new one. If possible, please contact us and report this issue."), "saving" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Saving..."), "unsavedChangesWillBeLost" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("There are unsaved changes which will be lost if you leave this page."), "selectColor" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Select", "select color"), "cancelColorSelection" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Cancel", "cancel color selection"), "newsletterIsPaused" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email sending has been paused."), "tutorialVideoTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Before you start, this is how you drag and drop in MailPoet"), "selectType" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select type"), "events" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Events"), "conditions" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Conditions", "Configuration options for automatic email events"), "template" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template"), "designer" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Designer"), "send" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send")]);
        // line 408
        echo "
";
    }

    // line 411
    public function block_after_css($context, array $blocks = [])
    {
        // line 412
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("newsletterEditor.css");
        // line 414
        echo "
";
    }

    // line 417
    public function block_after_javascript($context, array $blocks = [])
    {
        // line 418
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("lib/tinymce/tinymce.min.js", "lib/tinymce/jquery.tinymce.min.js", "lib/mailpoet_shortcodes/plugin.js", "lib/wplink/plugin.js", "newsletter_editor.js");
        // line 424
        echo "

  ";
        // line 426
        echo do_action("mailpoet_newsletter_editor_after_javascript");
        echo "

  <script type=\"text/javascript\">
    function renderWithFont(node) {
      if (!node.element) return node.text;
      var \$wrapper = jQuery('<span></span>');
      \$wrapper.css({'font-family': Handlebars.helpers.fontWithFallback(node.element.value)});
      \$wrapper.text(node.text);
      return \$wrapper;
    }
    function fontsSelect(selector) {
      jQuery(selector).select2({
        minimumResultsForSearch: Infinity,
        templateSelection: renderWithFont,
        templateResult: renderWithFont
      });
    }

    var templates = {
      styles: Handlebars.compile(
        jQuery('#newsletter_editor_template_styles').html()
      ),
      save: Handlebars.compile(
        jQuery('#newsletter_editor_template_save').html()
      ),
      heading: Handlebars.compile(
        jQuery('#newsletter_editor_template_heading').html()
      ),

      sidebar: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar').html()
      ),
      sidebarContent: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_content').html()
      ),
      sidebarLayout: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_layout').html()
      ),
      sidebarStyles: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_styles').html()
      ),
      sidebarPreview: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_preview').html()
      ),
      newsletterPreview: Handlebars.compile(
        jQuery('#newsletter_editor_template_newsletter_preview').html()
      ),

      genericBlockTools: Handlebars.compile(
        jQuery('#newsletter_editor_template_tools_generic').html()
      ),

      containerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_block').html()
      ),
      containerEmpty: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_block_empty').html()
      ),
      oneColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_one_column_widget').html()
      ),
      twoColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_two_column_widget').html()
      ),
      twoColumn12LayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_two_column_12_widget').html()
      ),
      twoColumn21LayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_two_column_21_widget').html()
      ),
      threeColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_three_column_widget').html()
      ),
      containerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_settings').html()
      ),
      containerBlockColumnSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_column_settings').html()
      ),

      buttonBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_block').html()
      ),
      buttonInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_widget').html()
      ),
      buttonBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_settings').html()
      ),

      dividerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_block').html()
      ),
      dividerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_widget').html()
      ),
      dividerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_settings').html()
      ),

      footerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_block').html()
      ),
      footerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_widget').html()
      ),
      footerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_settings').html()
      ),

      headerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_block').html()
      ),
      headerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_widget').html()
      ),
      headerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_settings').html()
      ),

      imageBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_block').html()
      ),
      imageInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_widget').html()
      ),
      imageBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_settings').html()
      ),

      socialBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_block').html()
      ),
      socialIconBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_block_icon').html()
      ),
      socialInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_widget').html()
      ),
      socialBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings').html()
      ),
      socialSettingsIconSelector: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_icon_selector').html()
      ),
      socialSettingsIcon: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_icon').html()
      ),
      socialSettingsStyles: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_styles').html()
      ),

      spacerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_block').html()
      ),
      spacerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_widget').html()
      ),
      spacerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_settings').html()
      ),

      automatedLatestContentBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_block').html()
      ),
      automatedLatestContentInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_widget').html()
      ),
      automatedLatestContentBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_settings').html()
      ),

      automatedLatestContentLayoutBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_block').html()
      ),
      automatedLatestContentLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_widget').html()
      ),
      automatedLatestContentLayoutBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_settings').html()
      ),

      postsBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_block').html()
      ),
      postsInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_widget').html()
      ),
      postsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings').html()
      ),
      postSelectionPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_selection').html()
      ),
      emptyPostPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_selection_empty').html()
      ),
      singlePostPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_single_post').html()
      ),
      displayOptionsPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_display_options').html()
      ),

      productsBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_block').html()
      ),
      productsInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_widget').html()
      ),
      productsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_settings').html()
      ),
      postSelectionProductsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_settings_selection').html()
      ),
      emptyPostProductsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_settings_selection_empty').html()
      ),
      singlePostProductsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_settings_single_post').html()
      ),
      displayOptionsProductsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_settings_display_options').html()
      ),

      textBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_block').html()
      ),
      textInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_widget').html()
      ),
      textBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_settings').html()
      )
    };

    var config = {
      availableStyles: {
        textSizes: [
          '9px', '10px', '11px', '12px', '13px', '14px', '15px', '16px',
          '17px', '18px', '19px', '20px', '21px', '22px', '23px', '24px'
        ],
        headingSizes: [
          '10px', '12px', '14px', '16px', '18px', '20px', '22px', '24px',
          '26px', '30px', '36px', '40px'
        ],
        lineHeights: [
          '1.0',
          '1.2',
          '1.4',
          '1.6',
          '1.8',
          '2.0',
        ],
        fonts: {
          standard: [
            'Arial',
            'Comic Sans MS',
            'Courier New',
            'Georgia',
            'Lucida',
            'Tahoma',
            'Times New Roman',
            'Trebuchet MS',
            'Verdana'
          ],
          custom: [
            'Arvo',
            'Lato',
            'Lora',
            'Merriweather',
            'Merriweather Sans',
            'Noticia Text',
            'Open Sans',
            'Playfair Display',
            'Roboto',
            'Source Sans Pro',
            'Oswald',
            'Raleway',
            'Permanent Marker',
            'Pacifico',
          ]
        },
        socialIconSets: {
          'default': {
            'custom': '";
        // line 712
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 714
        echo "',
            'facebook': '";
        // line 715
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Facebook.png");
        // line 717
        echo "',
            'twitter': '";
        // line 718
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Twitter.png");
        // line 720
        echo "',
            'google-plus': '";
        // line 721
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Google-Plus.png");
        // line 723
        echo "',
            'youtube': '";
        // line 724
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Youtube.png");
        // line 726
        echo "',
            'website': '";
        // line 727
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Website.png");
        // line 729
        echo "',
            'email': '";
        // line 730
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Email.png");
        // line 732
        echo "',
            'instagram': '";
        // line 733
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Instagram.png");
        // line 735
        echo "',
            'pinterest': '";
        // line 736
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Pinterest.png");
        // line 738
        echo "',
            'linkedin': '";
        // line 739
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/LinkedIn.png");
        // line 741
        echo "'
          },
          'grey': {
            'custom': '";
        // line 744
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 746
        echo "',
            'facebook': '";
        // line 747
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Facebook.png");
        // line 749
        echo "',
            'twitter': '";
        // line 750
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Twitter.png");
        // line 752
        echo "',
            'google-plus': '";
        // line 753
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Google-Plus.png");
        // line 755
        echo "',
            'youtube': '";
        // line 756
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Youtube.png");
        // line 758
        echo "',
            'website': '";
        // line 759
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Website.png");
        // line 761
        echo "',
            'email': '";
        // line 762
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Email.png");
        // line 764
        echo "',
            'instagram': '";
        // line 765
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Instagram.png");
        // line 767
        echo "',
            'pinterest': '";
        // line 768
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Pinterest.png");
        // line 770
        echo "',
            'linkedin': '";
        // line 771
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/LinkedIn.png");
        // line 773
        echo "',
          },
          'circles': {
            'custom': '";
        // line 776
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 778
        echo "',
            'facebook': '";
        // line 779
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Facebook.png");
        // line 781
        echo "',
            'twitter': '";
        // line 782
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Twitter.png");
        // line 784
        echo "',
            'google-plus': '";
        // line 785
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Google-Plus.png");
        // line 787
        echo "',
            'youtube': '";
        // line 788
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Youtube.png");
        // line 790
        echo "',
            'website': '";
        // line 791
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Website.png");
        // line 793
        echo "',
            'email': '";
        // line 794
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Email.png");
        // line 796
        echo "',
            'instagram': '";
        // line 797
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Instagram.png");
        // line 799
        echo "',
            'pinterest': '";
        // line 800
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Pinterest.png");
        // line 802
        echo "',
            'linkedin': '";
        // line 803
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/LinkedIn.png");
        // line 805
        echo "',
          },
          'full-flat-roundrect': {
            'custom': '";
        // line 808
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 810
        echo "',
            'facebook': '";
        // line 811
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Facebook.png");
        // line 813
        echo "',
            'twitter': '";
        // line 814
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Twitter.png");
        // line 816
        echo "',
            'google-plus': '";
        // line 817
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Google-Plus.png");
        // line 819
        echo "',
            'youtube': '";
        // line 820
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Youtube.png");
        // line 822
        echo "',
            'website': '";
        // line 823
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Website.png");
        // line 825
        echo "',
            'email': '";
        // line 826
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Email.png");
        // line 828
        echo "',
            'instagram': '";
        // line 829
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Instagram.png");
        // line 831
        echo "',
            'pinterest': '";
        // line 832
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Pinterest.png");
        // line 834
        echo "',
            'linkedin': '";
        // line 835
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/LinkedIn.png");
        // line 837
        echo "',
          },
          'full-gradient-square': {
            'custom': '";
        // line 840
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 842
        echo "',
            'facebook': '";
        // line 843
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Facebook.png");
        // line 845
        echo "',
            'twitter': '";
        // line 846
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Twitter.png");
        // line 848
        echo "',
            'google-plus': '";
        // line 849
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Google-Plus.png");
        // line 851
        echo "',
            'youtube': '";
        // line 852
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Youtube.png");
        // line 854
        echo "',
            'website': '";
        // line 855
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Website.png");
        // line 857
        echo "',
            'email': '";
        // line 858
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Email.png");
        // line 860
        echo "',
            'instagram': '";
        // line 861
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Instagram.png");
        // line 863
        echo "',
            'pinterest': '";
        // line 864
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Pinterest.png");
        // line 866
        echo "',
            'linkedin': '";
        // line 867
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/LinkedIn.png");
        // line 869
        echo "',
          },
          'full-symbol-color': {
            'custom': '";
        // line 872
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 874
        echo "',
            'facebook': '";
        // line 875
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Facebook.png");
        // line 877
        echo "',
            'twitter': '";
        // line 878
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Twitter.png");
        // line 880
        echo "',
            'google-plus': '";
        // line 881
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Google-Plus.png");
        // line 883
        echo "',
            'youtube': '";
        // line 884
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Youtube.png");
        // line 886
        echo "',
            'website': '";
        // line 887
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Website.png");
        // line 889
        echo "',
            'email': '";
        // line 890
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Email.png");
        // line 892
        echo "',
            'instagram': '";
        // line 893
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Instagram.png");
        // line 895
        echo "',
            'pinterest': '";
        // line 896
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Pinterest.png");
        // line 898
        echo "',
            'linkedin': '";
        // line 899
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/LinkedIn.png");
        // line 901
        echo "',
          },
          'full-symbol-black': {
            'custom': '";
        // line 904
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 906
        echo "',
            'facebook': '";
        // line 907
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Facebook.png");
        // line 909
        echo "',
            'twitter': '";
        // line 910
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Twitter.png");
        // line 912
        echo "',
            'google-plus': '";
        // line 913
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Google-Plus.png");
        // line 915
        echo "',
            'youtube': '";
        // line 916
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Youtube.png");
        // line 918
        echo "',
            'website': '";
        // line 919
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Website.png");
        // line 921
        echo "',
            'email': '";
        // line 922
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Email.png");
        // line 924
        echo "',
            'instagram': '";
        // line 925
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Instagram.png");
        // line 927
        echo "',
            'pinterest': '";
        // line 928
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Pinterest.png");
        // line 930
        echo "',
            'linkedin': '";
        // line 931
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/LinkedIn.png");
        // line 933
        echo "',
          },
          'full-symbol-grey': {
            'custom': '";
        // line 936
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 938
        echo "',
            'facebook': '";
        // line 939
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Facebook.png");
        // line 941
        echo "',
            'twitter': '";
        // line 942
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Twitter.png");
        // line 944
        echo "',
            'google-plus': '";
        // line 945
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Google-Plus.png");
        // line 947
        echo "',
            'youtube': '";
        // line 948
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Youtube.png");
        // line 950
        echo "',
            'website': '";
        // line 951
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Website.png");
        // line 953
        echo "',
            'email': '";
        // line 954
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Email.png");
        // line 956
        echo "',
            'instagram': '";
        // line 957
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Instagram.png");
        // line 959
        echo "',
            'pinterest': '";
        // line 960
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Pinterest.png");
        // line 962
        echo "',
            'linkedin': '";
        // line 963
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/LinkedIn.png");
        // line 965
        echo "',
          },
          'line-roundrect': {
            'custom': '";
        // line 968
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 970
        echo "',
            'facebook': '";
        // line 971
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Facebook.png");
        // line 973
        echo "',
            'twitter': '";
        // line 974
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Twitter.png");
        // line 976
        echo "',
            'google-plus': '";
        // line 977
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Google-Plus.png");
        // line 979
        echo "',
            'youtube': '";
        // line 980
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Youtube.png");
        // line 982
        echo "',
            'website': '";
        // line 983
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Website.png");
        // line 985
        echo "',
            'email': '";
        // line 986
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Email.png");
        // line 988
        echo "',
            'instagram': '";
        // line 989
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Instagram.png");
        // line 991
        echo "',
            'pinterest': '";
        // line 992
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Pinterest.png");
        // line 994
        echo "',
            'linkedin': '";
        // line 995
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/LinkedIn.png");
        // line 997
        echo "',
          },
          'line-square': {
            'custom': '";
        // line 1000
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 1002
        echo "',
            'facebook': '";
        // line 1003
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Facebook.png");
        // line 1005
        echo "',
            'twitter': '";
        // line 1006
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Twitter.png");
        // line 1008
        echo "',
            'google-plus': '";
        // line 1009
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Google-Plus.png");
        // line 1011
        echo "',
            'youtube': '";
        // line 1012
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Youtube.png");
        // line 1014
        echo "',
            'website': '";
        // line 1015
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Website.png");
        // line 1017
        echo "',
            'email': '";
        // line 1018
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Email.png");
        // line 1020
        echo "',
            'instagram': '";
        // line 1021
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Instagram.png");
        // line 1023
        echo "',
            'pinterest': '";
        // line 1024
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Pinterest.png");
        // line 1026
        echo "',
            'linkedin': '";
        // line 1027
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/LinkedIn.png");
        // line 1029
        echo "',
          },
        },
        dividers: [
          'hidden',
          'dotted',
          'dashed',
          'solid',
          'double',
          'groove',
          'ridge'
        ]
      },
      socialIcons: {
        'facebook': {
          title: 'Facebook',
          linkFieldName: '";
        // line 1045
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.facebook.com',
        },
        'twitter': {
          title: 'Twitter',
          linkFieldName: '";
        // line 1050
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.twitter.com',
        },
        'google-plus': {
          title: 'Google Plus',
          linkFieldName: '";
        // line 1055
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://plus.google.com',
        },
        'youtube': {
          title: 'Youtube',
          linkFieldName: '";
        // line 1060
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.youtube.com',
        },
        'website': {
          title: '";
        // line 1064
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Website"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 1065
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
        'email': {
          title: '";
        // line 1069
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 1070
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
        'instagram': {
          title: 'Instagram',
          linkFieldName: '";
        // line 1075
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://instagram.com',
        },
        'pinterest': {
          title: 'Pinterest',
          linkFieldName: '";
        // line 1080
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.pinterest.com',
        },
        'linkedin': {
          title: 'LinkedIn',
          linkFieldName: '";
        // line 1085
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.linkedin.com',
        },
        'custom': {
          title: '";
        // line 1089
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Custom"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 1090
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
      },
      blockDefaults: {
        automatedLatestContent: {
          amount: '5',
          withLayout: false,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'belowTitle', // 'belowTitle'|'aboveTitle'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1107
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1109
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'button', // 'link'|'button'
          readMoreText: '";
        // line 1111
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1113
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'automatedLatestContent.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              }
            }
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'automatedLatestContent.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        automatedLatestContentLayout: {
          amount: '5',
          withLayout: true,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'alternate', // 'centered'|'left'|'right'|'alternate'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1162
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1164
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'button', // 'link'|'button'
          readMoreText: '";
        // line 1166
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1168
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'automatedLatestContentLayout.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              }
            }
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'automatedLatestContentLayout.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        button: {
          text: '";
        // line 1206
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Button"), "js"), "html", null, true);
        echo "',
          url: '',
          styles: {
            block: {
              backgroundColor: '#2ea1cd',
              borderColor: '#0074a2',
              borderWidth: '1px',
              borderRadius: '5px',
              borderStyle: 'solid',
              width: '180px',
              lineHeight: '40px',
              fontColor: '#ffffff',
              fontFamily: 'Verdana',
              fontSize: '18px',
              fontWeight: 'normal',
              textAlign: 'center',
            },
          },
        },
        container: {
          image: {
            src: null,
            display: 'scale',
          },
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
          },
        },
        divider: {
          styles: {
            block: {
              backgroundColor: 'transparent',
              padding: '13px',
              borderStyle: 'solid',
              borderWidth: '3px',
              borderColor: '#aaaaaa',
            },
          },
        },
        footer: {
          text: '<p><a href=\"[link:subscription_unsubscribe_url]\">";
        // line 1248
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubscribe");
        echo "</a> | <a href=\"[link:subscription_manage_url]\">";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage subscription");
        echo "</a><br />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add your postal address here!");
        echo "</p>',
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
            text: {
              fontColor: '#222222',
              fontFamily: 'Arial',
              fontSize: '12px',
              textAlign: 'center',
            },
            link: {
              fontColor: '#6cb7d4',
              textDecoration: 'none',
            },
          },
        },
        image: {
          link: '',
          src: '',
          alt: '";
        // line 1268
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("An image of..."), "js"), "html", null, true);
        echo "',
          fullWidth: false,
          width: '281px',
          height: '190px',
          styles: {
            block: {
              textAlign: 'center',
            },
          },
        },
        posts: {
          amount: '10',
          withLayout: true,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          postStatus: 'publish', // 'draft'|'pending'|'private'|'publish'|'future'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'alternate', // 'centered'|'left'|'right'|'alternate'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1291
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1293
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'link', // 'link'|'button'
          readMoreText: '";
        // line 1295
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1297
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'posts.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              },
            },
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'posts.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        products: {
          amount: '10',
          withLayout: true,
          contentType: 'product',
          postStatus: 'publish', // 'draft'|'pending'|'publish'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'alternate', // 'centered'|'left'|'right'|'alternate'|'none',
          pricePosition: 'hidden', // 'hidden'|'above'|'below'
          readMoreType: 'link', // 'link'|'button'
          readMoreText: '";
        // line 1348
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Buy now", "Text of a button which links to an ecommerce product page"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1350
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Buy now", "Text of a button which links to an ecommerce product page"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'posts.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              },
            },
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'posts.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        social: {
          iconSet: 'default',
          styles: {
            block: {
              textAlign: 'center'
            }
          },
          icons: [
          {
            type: 'socialIcon',
            iconType: 'facebook',
            link: 'http://www.facebook.com',
            image: '";
        // line 1399
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Facebook.png");
        // line 1401
        echo "',
            height: '32px',
            width: '32px',
            text: '";
        // line 1404
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Facebook"), "js"), "html", null, true);
        echo "',
          },
          {
            type: 'socialIcon',
            iconType: 'twitter',
            link: 'http://www.twitter.com',
            image: '";
        // line 1410
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Twitter.png");
        // line 1412
        echo "',
            height: '32px',
            width: '32px',
            text: '";
        // line 1415
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Twitter"), "js"), "html", null, true);
        echo "',
          },
          ],
        },
        spacer: {
          styles: {
            block: {
              backgroundColor: 'transparent',
              height: '40px',
            },
          },
        },
        text: {
          text: '";
        // line 1428
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit this to insert text."), "js"), "html", null, true);
        echo "',
        },
        header: {
          text: '";
        // line 1431
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Display problems?"), "js"), "html", null, true);
        echo "&nbsp;' +
            '<a href=\"[link:newsletter_view_in_browser_url]\">";
        // line 1432
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open this email in your web browser.");
        echo "</a>',
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
            text: {
              fontColor: '#222222',
              fontFamily: 'Arial',
              fontSize: '12px',
              textAlign: 'center',
            },
            link: {
              fontColor: '#6cb7d4',
              textDecoration: 'underline',
            },
          },
        },
      },
      shortcodes: ";
        // line 1450
        echo json_encode(($context["shortcodes"] ?? null));
        echo ",
      sidepanelWidth: '331px',
      newsletterPreview: {
        width: '1024px',
        height: '768px',
        previewTypeLocalStorageKey: 'newsletter_editor.preview_type'
      },
      validation: {
        validateUnsubscribeLinkPresent: ";
        // line 1458
        echo ((($context["mss_active"] ?? null)) ? ("true") : ("false"));
        echo ",
      },
      urls: {
        send: '";
        // line 1461
        echo admin_url(("admin.php?page=mailpoet-newsletters#/send/" . intval($this->env->getExtension('MailPoet\Twig\Functions')->params("id"))));
        echo "',
        imageMissing: '";
        // line 1462
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/image-missing.svg");
        // line 1464
        echo "',
      },
      dragDemoUrl: '";
        // line 1466
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateCdnUrl("newsletter-editor/editor-drag-demo.20190226-1505.mp4");
        echo "',
      currentUserId: '";
        // line 1467
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute(($context["current_wp_user"] ?? null), "wp_user_id", []), "html", null, true);
        echo "',
      dragDemoUrlSettings: '";
        // line 1468
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["editor_tutorial_seen"] ?? null), "html", null, true);
        echo "',
      installedAt: '";
        // line 1469
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "installed_at", [], "array"), "html", null, true);
        echo "',
      mtaMethod: '";
        // line 1470
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", [], "array"), "method", [], "array"), "html", null, true);
        echo "',
    };
    wp.hooks.doAction('mailpoet_newsletters_editor_initialize', config);

  </script>
";
    }

    public function getTemplateName()
    {
        return "newsletter/editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1944 => 1470,  1940 => 1469,  1936 => 1468,  1932 => 1467,  1928 => 1466,  1924 => 1464,  1922 => 1462,  1918 => 1461,  1912 => 1458,  1901 => 1450,  1880 => 1432,  1876 => 1431,  1870 => 1428,  1854 => 1415,  1849 => 1412,  1847 => 1410,  1838 => 1404,  1833 => 1401,  1831 => 1399,  1779 => 1350,  1774 => 1348,  1720 => 1297,  1715 => 1295,  1710 => 1293,  1705 => 1291,  1679 => 1268,  1652 => 1248,  1607 => 1206,  1566 => 1168,  1561 => 1166,  1556 => 1164,  1551 => 1162,  1499 => 1113,  1494 => 1111,  1489 => 1109,  1484 => 1107,  1464 => 1090,  1460 => 1089,  1453 => 1085,  1445 => 1080,  1437 => 1075,  1429 => 1070,  1425 => 1069,  1418 => 1065,  1414 => 1064,  1407 => 1060,  1399 => 1055,  1391 => 1050,  1383 => 1045,  1365 => 1029,  1363 => 1027,  1360 => 1026,  1358 => 1024,  1355 => 1023,  1353 => 1021,  1350 => 1020,  1348 => 1018,  1345 => 1017,  1343 => 1015,  1340 => 1014,  1338 => 1012,  1335 => 1011,  1333 => 1009,  1330 => 1008,  1328 => 1006,  1325 => 1005,  1323 => 1003,  1320 => 1002,  1318 => 1000,  1313 => 997,  1311 => 995,  1308 => 994,  1306 => 992,  1303 => 991,  1301 => 989,  1298 => 988,  1296 => 986,  1293 => 985,  1291 => 983,  1288 => 982,  1286 => 980,  1283 => 979,  1281 => 977,  1278 => 976,  1276 => 974,  1273 => 973,  1271 => 971,  1268 => 970,  1266 => 968,  1261 => 965,  1259 => 963,  1256 => 962,  1254 => 960,  1251 => 959,  1249 => 957,  1246 => 956,  1244 => 954,  1241 => 953,  1239 => 951,  1236 => 950,  1234 => 948,  1231 => 947,  1229 => 945,  1226 => 944,  1224 => 942,  1221 => 941,  1219 => 939,  1216 => 938,  1214 => 936,  1209 => 933,  1207 => 931,  1204 => 930,  1202 => 928,  1199 => 927,  1197 => 925,  1194 => 924,  1192 => 922,  1189 => 921,  1187 => 919,  1184 => 918,  1182 => 916,  1179 => 915,  1177 => 913,  1174 => 912,  1172 => 910,  1169 => 909,  1167 => 907,  1164 => 906,  1162 => 904,  1157 => 901,  1155 => 899,  1152 => 898,  1150 => 896,  1147 => 895,  1145 => 893,  1142 => 892,  1140 => 890,  1137 => 889,  1135 => 887,  1132 => 886,  1130 => 884,  1127 => 883,  1125 => 881,  1122 => 880,  1120 => 878,  1117 => 877,  1115 => 875,  1112 => 874,  1110 => 872,  1105 => 869,  1103 => 867,  1100 => 866,  1098 => 864,  1095 => 863,  1093 => 861,  1090 => 860,  1088 => 858,  1085 => 857,  1083 => 855,  1080 => 854,  1078 => 852,  1075 => 851,  1073 => 849,  1070 => 848,  1068 => 846,  1065 => 845,  1063 => 843,  1060 => 842,  1058 => 840,  1053 => 837,  1051 => 835,  1048 => 834,  1046 => 832,  1043 => 831,  1041 => 829,  1038 => 828,  1036 => 826,  1033 => 825,  1031 => 823,  1028 => 822,  1026 => 820,  1023 => 819,  1021 => 817,  1018 => 816,  1016 => 814,  1013 => 813,  1011 => 811,  1008 => 810,  1006 => 808,  1001 => 805,  999 => 803,  996 => 802,  994 => 800,  991 => 799,  989 => 797,  986 => 796,  984 => 794,  981 => 793,  979 => 791,  976 => 790,  974 => 788,  971 => 787,  969 => 785,  966 => 784,  964 => 782,  961 => 781,  959 => 779,  956 => 778,  954 => 776,  949 => 773,  947 => 771,  944 => 770,  942 => 768,  939 => 767,  937 => 765,  934 => 764,  932 => 762,  929 => 761,  927 => 759,  924 => 758,  922 => 756,  919 => 755,  917 => 753,  914 => 752,  912 => 750,  909 => 749,  907 => 747,  904 => 746,  902 => 744,  897 => 741,  895 => 739,  892 => 738,  890 => 736,  887 => 735,  885 => 733,  882 => 732,  880 => 730,  877 => 729,  875 => 727,  872 => 726,  870 => 724,  867 => 723,  865 => 721,  862 => 720,  860 => 718,  857 => 717,  855 => 715,  852 => 714,  850 => 712,  561 => 426,  557 => 424,  554 => 418,  551 => 417,  546 => 414,  543 => 412,  540 => 411,  535 => 408,  533 => 384,  531 => 370,  528 => 367,  525 => 366,  515 => 359,  509 => 356,  496 => 346,  481 => 334,  472 => 328,  466 => 325,  460 => 322,  452 => 317,  448 => 316,  444 => 315,  440 => 314,  435 => 312,  425 => 305,  420 => 303,  390 => 276,  387 => 275,  384 => 274,  379 => 271,  377 => 268,  374 => 267,  372 => 264,  369 => 263,  367 => 260,  364 => 259,  362 => 256,  359 => 255,  357 => 252,  354 => 251,  352 => 248,  349 => 247,  347 => 244,  344 => 243,  342 => 240,  339 => 239,  337 => 236,  334 => 235,  332 => 232,  329 => 231,  327 => 228,  324 => 227,  322 => 224,  319 => 223,  317 => 220,  314 => 219,  312 => 216,  309 => 215,  307 => 212,  304 => 211,  302 => 208,  299 => 207,  297 => 204,  294 => 203,  292 => 200,  289 => 199,  287 => 196,  284 => 195,  282 => 192,  279 => 191,  277 => 188,  274 => 187,  272 => 184,  269 => 183,  267 => 180,  264 => 179,  262 => 176,  259 => 175,  257 => 172,  254 => 171,  252 => 168,  249 => 167,  247 => 164,  244 => 163,  242 => 160,  239 => 159,  237 => 156,  234 => 155,  232 => 152,  229 => 151,  227 => 148,  224 => 147,  222 => 144,  219 => 143,  217 => 140,  214 => 139,  212 => 136,  209 => 135,  207 => 132,  204 => 131,  202 => 128,  199 => 127,  197 => 124,  194 => 123,  192 => 120,  189 => 119,  187 => 116,  184 => 115,  182 => 112,  179 => 111,  177 => 108,  174 => 107,  172 => 104,  169 => 103,  167 => 100,  164 => 99,  162 => 96,  159 => 95,  157 => 92,  154 => 91,  152 => 88,  149 => 87,  147 => 84,  144 => 83,  142 => 80,  139 => 79,  137 => 76,  134 => 75,  132 => 72,  129 => 71,  127 => 68,  124 => 67,  122 => 64,  119 => 63,  117 => 60,  114 => 59,  112 => 56,  109 => 55,  107 => 52,  104 => 51,  102 => 48,  99 => 47,  97 => 44,  94 => 43,  92 => 40,  89 => 39,  87 => 36,  84 => 35,  82 => 32,  79 => 31,  77 => 28,  74 => 27,  72 => 24,  69 => 23,  67 => 20,  64 => 19,  62 => 16,  59 => 15,  57 => 12,  54 => 11,  52 => 8,  49 => 7,  46 => 4,  43 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/editor.html", "/home/kojejefryl/www/fabulle/wp-content/plugins/mailpoet/views/newsletter/editor.html");
    }
}
