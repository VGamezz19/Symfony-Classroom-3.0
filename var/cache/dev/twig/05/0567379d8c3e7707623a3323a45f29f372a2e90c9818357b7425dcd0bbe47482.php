<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_859cc53ff3ff62d6c958b6d5a9f42534b6cc464fbd0b3d7c30cbf4f05c13fb01 extends Twig_Template
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
        $__internal_d2bd1d855318385afbc154dca30660af24eb8027bb77e99ee0ab5f258dacdc71 = $this->env->getExtension("native_profiler");
        $__internal_d2bd1d855318385afbc154dca30660af24eb8027bb77e99ee0ab5f258dacdc71->enter($__internal_d2bd1d855318385afbc154dca30660af24eb8027bb77e99ee0ab5f258dacdc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d2bd1d855318385afbc154dca30660af24eb8027bb77e99ee0ab5f258dacdc71->leave($__internal_d2bd1d855318385afbc154dca30660af24eb8027bb77e99ee0ab5f258dacdc71_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */