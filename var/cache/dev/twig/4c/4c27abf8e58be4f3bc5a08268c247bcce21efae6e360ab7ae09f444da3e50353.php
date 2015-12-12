<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_99038c4ef815991eaf5b9d13482c0d1abe48f1decd8227d0b3cde38198661a02 extends Twig_Template
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
        $__internal_0858a9751523915e5b6f3b6734a377567814d73b3cf2e2aab5752bbd1304b5ba = $this->env->getExtension("native_profiler");
        $__internal_0858a9751523915e5b6f3b6734a377567814d73b3cf2e2aab5752bbd1304b5ba->enter($__internal_0858a9751523915e5b6f3b6734a377567814d73b3cf2e2aab5752bbd1304b5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0858a9751523915e5b6f3b6734a377567814d73b3cf2e2aab5752bbd1304b5ba->leave($__internal_0858a9751523915e5b6f3b6734a377567814d73b3cf2e2aab5752bbd1304b5ba_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_51988d0adffdbd325c400e1238954e8a57bae120d0cd44bc6ae81759b636aeff = $this->env->getExtension("native_profiler");
        $__internal_51988d0adffdbd325c400e1238954e8a57bae120d0cd44bc6ae81759b636aeff->enter($__internal_51988d0adffdbd325c400e1238954e8a57bae120d0cd44bc6ae81759b636aeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_51988d0adffdbd325c400e1238954e8a57bae120d0cd44bc6ae81759b636aeff->leave($__internal_51988d0adffdbd325c400e1238954e8a57bae120d0cd44bc6ae81759b636aeff_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_49ec15db155a34b621e0a5e509ee2ec8aa424ade7b20c2ecc4a38945fe603cd3 = $this->env->getExtension("native_profiler");
        $__internal_49ec15db155a34b621e0a5e509ee2ec8aa424ade7b20c2ecc4a38945fe603cd3->enter($__internal_49ec15db155a34b621e0a5e509ee2ec8aa424ade7b20c2ecc4a38945fe603cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_49ec15db155a34b621e0a5e509ee2ec8aa424ade7b20c2ecc4a38945fe603cd3->leave($__internal_49ec15db155a34b621e0a5e509ee2ec8aa424ade7b20c2ecc4a38945fe603cd3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bd9f916cf1a6f50ca231e2d3f01911ddacc3496e97dd6c444414589bf4f518fe = $this->env->getExtension("native_profiler");
        $__internal_bd9f916cf1a6f50ca231e2d3f01911ddacc3496e97dd6c444414589bf4f518fe->enter($__internal_bd9f916cf1a6f50ca231e2d3f01911ddacc3496e97dd6c444414589bf4f518fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bd9f916cf1a6f50ca231e2d3f01911ddacc3496e97dd6c444414589bf4f518fe->leave($__internal_bd9f916cf1a6f50ca231e2d3f01911ddacc3496e97dd6c444414589bf4f518fe_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
