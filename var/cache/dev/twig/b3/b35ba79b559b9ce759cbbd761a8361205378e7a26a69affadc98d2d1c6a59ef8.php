<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5f237135c272fa03961b1179f2f93a42f43ccc1cad6ec5275fc24450830e000c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bccda06ce7e1b1d14cfbb8056c975ba422717345ae66e099ed16c62361432af7 = $this->env->getExtension("native_profiler");
        $__internal_bccda06ce7e1b1d14cfbb8056c975ba422717345ae66e099ed16c62361432af7->enter($__internal_bccda06ce7e1b1d14cfbb8056c975ba422717345ae66e099ed16c62361432af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bccda06ce7e1b1d14cfbb8056c975ba422717345ae66e099ed16c62361432af7->leave($__internal_bccda06ce7e1b1d14cfbb8056c975ba422717345ae66e099ed16c62361432af7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e62b6200dca0430933a060011e9f32291faebdc726a08e998f217102ac0f0bcd = $this->env->getExtension("native_profiler");
        $__internal_e62b6200dca0430933a060011e9f32291faebdc726a08e998f217102ac0f0bcd->enter($__internal_e62b6200dca0430933a060011e9f32291faebdc726a08e998f217102ac0f0bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_e62b6200dca0430933a060011e9f32291faebdc726a08e998f217102ac0f0bcd->leave($__internal_e62b6200dca0430933a060011e9f32291faebdc726a08e998f217102ac0f0bcd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
