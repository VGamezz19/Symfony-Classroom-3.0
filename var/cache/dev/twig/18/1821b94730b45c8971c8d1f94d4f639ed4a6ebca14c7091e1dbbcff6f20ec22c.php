<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_b954a446011786f678ff01133cc54e95af1d17f4a003fde861e965a38dc11368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_0163d4bb0ca6a69a5556e52a56bcfa1f5aada5c0fb8f61fb49365a89cdea8412 = $this->env->getExtension("native_profiler");
        $__internal_0163d4bb0ca6a69a5556e52a56bcfa1f5aada5c0fb8f61fb49365a89cdea8412->enter($__internal_0163d4bb0ca6a69a5556e52a56bcfa1f5aada5c0fb8f61fb49365a89cdea8412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0163d4bb0ca6a69a5556e52a56bcfa1f5aada5c0fb8f61fb49365a89cdea8412->leave($__internal_0163d4bb0ca6a69a5556e52a56bcfa1f5aada5c0fb8f61fb49365a89cdea8412_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad1338e4ecf6358d62e05a7c91da3ae5bf0116b21d995f58516ec09ba3dc4d99 = $this->env->getExtension("native_profiler");
        $__internal_ad1338e4ecf6358d62e05a7c91da3ae5bf0116b21d995f58516ec09ba3dc4d99->enter($__internal_ad1338e4ecf6358d62e05a7c91da3ae5bf0116b21d995f58516ec09ba3dc4d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ad1338e4ecf6358d62e05a7c91da3ae5bf0116b21d995f58516ec09ba3dc4d99->leave($__internal_ad1338e4ecf6358d62e05a7c91da3ae5bf0116b21d995f58516ec09ba3dc4d99_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */