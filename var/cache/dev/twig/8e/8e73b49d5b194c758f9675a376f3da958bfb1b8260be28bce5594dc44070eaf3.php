<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d0fd1dd0f5f9c52110ed5afec0be23629787efa7e173aa9fc2e43d74b3380d1f extends Twig_Template
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
        $__internal_54cd6a2fafed98a316010951d34fff0410e7074d505a0ec599b51d2464c08ed0 = $this->env->getExtension("native_profiler");
        $__internal_54cd6a2fafed98a316010951d34fff0410e7074d505a0ec599b51d2464c08ed0->enter($__internal_54cd6a2fafed98a316010951d34fff0410e7074d505a0ec599b51d2464c08ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_54cd6a2fafed98a316010951d34fff0410e7074d505a0ec599b51d2464c08ed0->leave($__internal_54cd6a2fafed98a316010951d34fff0410e7074d505a0ec599b51d2464c08ed0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
