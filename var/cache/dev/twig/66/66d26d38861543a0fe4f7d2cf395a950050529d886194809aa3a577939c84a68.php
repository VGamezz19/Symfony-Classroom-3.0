<?php

/* :index:index.html.twig */
class __TwigTemplate_17b3c3e785ccd4d4e71dba8497c6854f10befce4ce65f41d2cd1b93292d7d86a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":index:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfb75a1768c08e576e27d66a4ceb346465c0a473ee15de2d0ca1068ac706b88a = $this->env->getExtension("native_profiler");
        $__internal_dfb75a1768c08e576e27d66a4ceb346465c0a473ee15de2d0ca1068ac706b88a->enter($__internal_dfb75a1768c08e576e27d66a4ceb346465c0a473ee15de2d0ca1068ac706b88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfb75a1768c08e576e27d66a4ceb346465c0a473ee15de2d0ca1068ac706b88a->leave($__internal_dfb75a1768c08e576e27d66a4ceb346465c0a473ee15de2d0ca1068ac706b88a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65bd176ee71df91e140cf8a035a5fd5fb0b6620185bc7f0a3e09e595a839c159 = $this->env->getExtension("native_profiler");
        $__internal_65bd176ee71df91e140cf8a035a5fd5fb0b6620185bc7f0a3e09e595a839c159->enter($__internal_65bd176ee71df91e140cf8a035a5fd5fb0b6620185bc7f0a3e09e595a839c159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</span> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 8
            echo "            <span>You are anonymous</span> | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a> - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 10
        echo "    </div>
";
        
        $__internal_65bd176ee71df91e140cf8a035a5fd5fb0b6620185bc7f0a3e09e595a839c159->leave($__internal_65bd176ee71df91e140cf8a035a5fd5fb0b6620185bc7f0a3e09e595a839c159_prof);

    }

    public function getTemplateName()
    {
        return ":index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  55 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*             <span>{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}</span> | <a href="{{ path('fos_user_security_logout') }}">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>*/
/*         {% else %}*/
/*             <span>You are anonymous</span> | <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a> - <a href="{{ path('fos_user_registration_register') }}">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/