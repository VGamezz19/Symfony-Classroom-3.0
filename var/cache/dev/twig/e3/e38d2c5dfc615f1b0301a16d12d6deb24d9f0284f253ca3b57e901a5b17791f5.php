<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2f779f48f74b03db01e38d90b327c07aca771a1994ddba5fc55b62607011e460 extends Twig_Template
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
        $__internal_bbea4ba529d28b394f4c660558b4735e5642284df3ad03c4c50becee12334f0a = $this->env->getExtension("native_profiler");
        $__internal_bbea4ba529d28b394f4c660558b4735e5642284df3ad03c4c50becee12334f0a->enter($__internal_bbea4ba529d28b394f4c660558b4735e5642284df3ad03c4c50becee12334f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bbea4ba529d28b394f4c660558b4735e5642284df3ad03c4c50becee12334f0a->leave($__internal_bbea4ba529d28b394f4c660558b4735e5642284df3ad03c4c50becee12334f0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
