<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_87639ff80b85c2e59e8662ee0547bc41195eef5aac248142d408c79ef483e047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_78b8097d6a2c6371d59e3104a6f8241745f88ee76b8df544f9ccefadfc09b912 = $this->env->getExtension("native_profiler");
        $__internal_78b8097d6a2c6371d59e3104a6f8241745f88ee76b8df544f9ccefadfc09b912->enter($__internal_78b8097d6a2c6371d59e3104a6f8241745f88ee76b8df544f9ccefadfc09b912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78b8097d6a2c6371d59e3104a6f8241745f88ee76b8df544f9ccefadfc09b912->leave($__internal_78b8097d6a2c6371d59e3104a6f8241745f88ee76b8df544f9ccefadfc09b912_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa7eec0bdc6f73f36de7c80584860853111cbce9fdafda20670d6974d3c230bd = $this->env->getExtension("native_profiler");
        $__internal_aa7eec0bdc6f73f36de7c80584860853111cbce9fdafda20670d6974d3c230bd->enter($__internal_aa7eec0bdc6f73f36de7c80584860853111cbce9fdafda20670d6974d3c230bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_aa7eec0bdc6f73f36de7c80584860853111cbce9fdafda20670d6974d3c230bd->leave($__internal_aa7eec0bdc6f73f36de7c80584860853111cbce9fdafda20670d6974d3c230bd_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
