<?php

/* UserBundle:Group:show_content.html.twig */
class __TwigTemplate_deda63c58378ba788c2dd28dfcdd946d4a66e5a11d7a1ee8637cc4077be6be01 extends Twig_Template
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
        $__internal_eec17b22a570012e62c379c4c435426234f9698979dd6733c3e9f82c662a1830 = $this->env->getExtension("native_profiler");
        $__internal_eec17b22a570012e62c379c4c435426234f9698979dd6733c3e9f82c662a1830->enter($__internal_eec17b22a570012e62c379c4c435426234f9698979dd6733c3e9f82c662a1830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

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
        
        $__internal_eec17b22a570012e62c379c4c435426234f9698979dd6733c3e9f82c662a1830->leave($__internal_eec17b22a570012e62c379c4c435426234f9698979dd6733c3e9f82c662a1830_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show_content.html.twig";
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