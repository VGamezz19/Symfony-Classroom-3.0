<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b9e5f935d2086babba1215c6e8e80f1e0a9db0bd5046c3bd72338c5e23301606 extends Twig_Template
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
        $__internal_1f88941a3cc3075d9ee257c7df2462f92d0b958b0da549605a2914b9676caed2 = $this->env->getExtension("native_profiler");
        $__internal_1f88941a3cc3075d9ee257c7df2462f92d0b958b0da549605a2914b9676caed2->enter($__internal_1f88941a3cc3075d9ee257c7df2462f92d0b958b0da549605a2914b9676caed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_1f88941a3cc3075d9ee257c7df2462f92d0b958b0da549605a2914b9676caed2->leave($__internal_1f88941a3cc3075d9ee257c7df2462f92d0b958b0da549605a2914b9676caed2_prof);

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