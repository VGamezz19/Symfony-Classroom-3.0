<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_a0db4571eb258549f9da89c494a8a967f9775a81aeb9cbc30e5c6f8e65eb3607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_d4e4eb2ec0526465920084119d37fb7ad283f1d6f17a2af577270a8a0ab45700 = $this->env->getExtension("native_profiler");
        $__internal_d4e4eb2ec0526465920084119d37fb7ad283f1d6f17a2af577270a8a0ab45700->enter($__internal_d4e4eb2ec0526465920084119d37fb7ad283f1d6f17a2af577270a8a0ab45700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4e4eb2ec0526465920084119d37fb7ad283f1d6f17a2af577270a8a0ab45700->leave($__internal_d4e4eb2ec0526465920084119d37fb7ad283f1d6f17a2af577270a8a0ab45700_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3243a393ef147766c884420b8e9d097aefa66e598bc47bc3680b763efe88a7b1 = $this->env->getExtension("native_profiler");
        $__internal_3243a393ef147766c884420b8e9d097aefa66e598bc47bc3680b763efe88a7b1->enter($__internal_3243a393ef147766c884420b8e9d097aefa66e598bc47bc3680b763efe88a7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_3243a393ef147766c884420b8e9d097aefa66e598bc47bc3680b763efe88a7b1->leave($__internal_3243a393ef147766c884420b8e9d097aefa66e598bc47bc3680b763efe88a7b1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */