<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_2e3ca63656c051a2e17379392cceb4de7f4513d3e78ae459a92583d25e1a0876 extends Twig_Template
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
        $__internal_4eeea6f6ee461b8391c729da8cc28ce5b9a547fa6d0baf39b0013a1edf8d520f = $this->env->getExtension("native_profiler");
        $__internal_4eeea6f6ee461b8391c729da8cc28ce5b9a547fa6d0baf39b0013a1edf8d520f->enter($__internal_4eeea6f6ee461b8391c729da8cc28ce5b9a547fa6d0baf39b0013a1edf8d520f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4eeea6f6ee461b8391c729da8cc28ce5b9a547fa6d0baf39b0013a1edf8d520f->leave($__internal_4eeea6f6ee461b8391c729da8cc28ce5b9a547fa6d0baf39b0013a1edf8d520f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d1ce6748d6b4f5177523fd2403394397b2e8bbbe910e2c967b8df3462a5cb6b0 = $this->env->getExtension("native_profiler");
        $__internal_d1ce6748d6b4f5177523fd2403394397b2e8bbbe910e2c967b8df3462a5cb6b0->enter($__internal_d1ce6748d6b4f5177523fd2403394397b2e8bbbe910e2c967b8df3462a5cb6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d1ce6748d6b4f5177523fd2403394397b2e8bbbe910e2c967b8df3462a5cb6b0->leave($__internal_d1ce6748d6b4f5177523fd2403394397b2e8bbbe910e2c967b8df3462a5cb6b0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_25185cea240e94bd7070cafce13611a2f668ccdafa9af19fe5d938064a8b76f3 = $this->env->getExtension("native_profiler");
        $__internal_25185cea240e94bd7070cafce13611a2f668ccdafa9af19fe5d938064a8b76f3->enter($__internal_25185cea240e94bd7070cafce13611a2f668ccdafa9af19fe5d938064a8b76f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_25185cea240e94bd7070cafce13611a2f668ccdafa9af19fe5d938064a8b76f3->leave($__internal_25185cea240e94bd7070cafce13611a2f668ccdafa9af19fe5d938064a8b76f3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9c50b288ac45530c16cf9a57ad883b42e24217c4ca91846328433efff1b2f73b = $this->env->getExtension("native_profiler");
        $__internal_9c50b288ac45530c16cf9a57ad883b42e24217c4ca91846328433efff1b2f73b->enter($__internal_9c50b288ac45530c16cf9a57ad883b42e24217c4ca91846328433efff1b2f73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9c50b288ac45530c16cf9a57ad883b42e24217c4ca91846328433efff1b2f73b->leave($__internal_9c50b288ac45530c16cf9a57ad883b42e24217c4ca91846328433efff1b2f73b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
