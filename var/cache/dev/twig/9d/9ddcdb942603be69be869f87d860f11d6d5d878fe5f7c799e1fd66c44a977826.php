<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_97856311584865a46e1eca9b99261d0991db02049efdcacac85e7686c42f1be6 extends Twig_Template
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
        $__internal_bf36801d1eb075e2cee30ddb84bbe7bf2ce3f3c5d4f1c01a264fd148593e1d1c = $this->env->getExtension("native_profiler");
        $__internal_bf36801d1eb075e2cee30ddb84bbe7bf2ce3f3c5d4f1c01a264fd148593e1d1c->enter($__internal_bf36801d1eb075e2cee30ddb84bbe7bf2ce3f3c5d4f1c01a264fd148593e1d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_bf36801d1eb075e2cee30ddb84bbe7bf2ce3f3c5d4f1c01a264fd148593e1d1c->leave($__internal_bf36801d1eb075e2cee30ddb84bbe7bf2ce3f3c5d4f1c01a264fd148593e1d1c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
