<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_17122bd7a774e255162b2bdfbba1b0bb623cde8570346bd5bcb8e166816abd65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_1a1f43b4649990f0b32582ee8ded836b91bfffbb4dce49022c2aa85df89f3ae3 = $this->env->getExtension("native_profiler");
        $__internal_1a1f43b4649990f0b32582ee8ded836b91bfffbb4dce49022c2aa85df89f3ae3->enter($__internal_1a1f43b4649990f0b32582ee8ded836b91bfffbb4dce49022c2aa85df89f3ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a1f43b4649990f0b32582ee8ded836b91bfffbb4dce49022c2aa85df89f3ae3->leave($__internal_1a1f43b4649990f0b32582ee8ded836b91bfffbb4dce49022c2aa85df89f3ae3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_551495f4e0a783cb4b75ae5d6d89e76f635d5ea93277e4eaebeaf97f5444f462 = $this->env->getExtension("native_profiler");
        $__internal_551495f4e0a783cb4b75ae5d6d89e76f635d5ea93277e4eaebeaf97f5444f462->enter($__internal_551495f4e0a783cb4b75ae5d6d89e76f635d5ea93277e4eaebeaf97f5444f462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_551495f4e0a783cb4b75ae5d6d89e76f635d5ea93277e4eaebeaf97f5444f462->leave($__internal_551495f4e0a783cb4b75ae5d6d89e76f635d5ea93277e4eaebeaf97f5444f462_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */