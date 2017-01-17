<?php

/* {# inline_template_start #}<div class="homepage-article-right">
{{ field_image }}
</div>
<div class="homepage-article-left">
<div class="views-field-title">
{{ title }}
</div>
<div class="views-field-created">
{{ created }}
</div>
<div class="views-field-body">
{{ body }} 
{{view_node}}
</div>
</div> */
class __TwigTemplate_3d23830138c5e1b63dd21b0f4f2ee814e24da150ba0b4b7900ffa643bbe4c8e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"homepage-article-right\">
";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
</div>
<div class=\"homepage-article-left\">
<div class=\"views-field-title\">
";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
</div>
<div class=\"views-field-created\">
";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "
</div>
<div class=\"views-field-body\">
";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo " 
";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["view_node"]) ? $context["view_node"] : null), "html", null, true));
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"homepage-article-right\">
{{ field_image }}
</div>
<div class=\"homepage-article-left\">
<div class=\"views-field-title\">
{{ title }}
</div>
<div class=\"views-field-created\">
{{ created }}
</div>
<div class=\"views-field-body\">
{{ body }} 
{{view_node}}
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 13,  79 => 12,  73 => 9,  67 => 6,  60 => 2,  57 => 1,);
    }
}
/* {# inline_template_start #}<div class="homepage-article-right">*/
/* {{ field_image }}*/
/* </div>*/
/* <div class="homepage-article-left">*/
/* <div class="views-field-title">*/
/* {{ title }}*/
/* </div>*/
/* <div class="views-field-created">*/
/* {{ created }}*/
/* </div>*/
/* <div class="views-field-body">*/
/* {{ body }} */
/* {{view_node}}*/
/* </div>*/
/* </div>*/
