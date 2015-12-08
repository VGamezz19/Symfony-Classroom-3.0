<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_4cc68961b224d40961041d3924ec37125897bb22d6a0fa0569e89b020e922b90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed5448ce9ac98fb00957c3dc9d1055a87dce3ad322d93146014f9b4416f6d4a5 = $this->env->getExtension("native_profiler");
        $__internal_ed5448ce9ac98fb00957c3dc9d1055a87dce3ad322d93146014f9b4416f6d4a5->enter($__internal_ed5448ce9ac98fb00957c3dc9d1055a87dce3ad322d93146014f9b4416f6d4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ed5448ce9ac98fb00957c3dc9d1055a87dce3ad322d93146014f9b4416f6d4a5->leave($__internal_ed5448ce9ac98fb00957c3dc9d1055a87dce3ad322d93146014f9b4416f6d4a5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2fc68de1ab1ecaaf4f47b79f48c3fd90e46d839948d74e360544ed1a9ed668d8 = $this->env->getExtension("native_profiler");
        $__internal_2fc68de1ab1ecaaf4f47b79f48c3fd90e46d839948d74e360544ed1a9ed668d8->enter($__internal_2fc68de1ab1ecaaf4f47b79f48c3fd90e46d839948d74e360544ed1a9ed668d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2fc68de1ab1ecaaf4f47b79f48c3fd90e46d839948d74e360544ed1a9ed668d8->leave($__internal_2fc68de1ab1ecaaf4f47b79f48c3fd90e46d839948d74e360544ed1a9ed668d8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ca4d2aaf528eed5e88c90a03f920446491ffe0c5543b9c4a74046a8fa17348f6 = $this->env->getExtension("native_profiler");
        $__internal_ca4d2aaf528eed5e88c90a03f920446491ffe0c5543b9c4a74046a8fa17348f6->enter($__internal_ca4d2aaf528eed5e88c90a03f920446491ffe0c5543b9c4a74046a8fa17348f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ca4d2aaf528eed5e88c90a03f920446491ffe0c5543b9c4a74046a8fa17348f6->leave($__internal_ca4d2aaf528eed5e88c90a03f920446491ffe0c5543b9c4a74046a8fa17348f6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_20df206d30f1946480aa70d465fb4045f0b813513ae85f5d3e1a967eb7cebd3b = $this->env->getExtension("native_profiler");
        $__internal_20df206d30f1946480aa70d465fb4045f0b813513ae85f5d3e1a967eb7cebd3b->enter($__internal_20df206d30f1946480aa70d465fb4045f0b813513ae85f5d3e1a967eb7cebd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_20df206d30f1946480aa70d465fb4045f0b813513ae85f5d3e1a967eb7cebd3b->leave($__internal_20df206d30f1946480aa70d465fb4045f0b813513ae85f5d3e1a967eb7cebd3b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */