<?php

/* UserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9cc113f35904f695a044c666a0d61cf699d600ec515ea92e75a0799f92ed198e extends Twig_Template
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
        $__internal_c1b37f3bfe9d1e60e5140bbfadc101dad53b4b8a047bd6c228229f81228b9e8c = $this->env->getExtension("native_profiler");
        $__internal_c1b37f3bfe9d1e60e5140bbfadc101dad53b4b8a047bd6c228229f81228b9e8c->enter($__internal_c1b37f3bfe9d1e60e5140bbfadc101dad53b4b8a047bd6c228229f81228b9e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input class=\"btn btn-default\" type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c1b37f3bfe9d1e60e5140bbfadc101dad53b4b8a047bd6c228229f81228b9e8c->leave($__internal_c1b37f3bfe9d1e60e5140bbfadc101dad53b4b8a047bd6c228229f81228b9e8c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input class="btn btn-default" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */