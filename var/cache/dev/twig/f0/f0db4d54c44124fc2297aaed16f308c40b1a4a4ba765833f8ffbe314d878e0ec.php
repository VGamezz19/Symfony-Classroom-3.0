<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ea4818c72e8242c3520a1ff220e78808d1a0ca2740194b7120eb358eef708fcc extends Twig_Template
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
        $__internal_e5d12f25875006df01017493b56677b6a9ba84fb753198d51264a3ccbfce9449 = $this->env->getExtension("native_profiler");
        $__internal_e5d12f25875006df01017493b56677b6a9ba84fb753198d51264a3ccbfce9449->enter($__internal_e5d12f25875006df01017493b56677b6a9ba84fb753198d51264a3ccbfce9449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e5d12f25875006df01017493b56677b6a9ba84fb753198d51264a3ccbfce9449->leave($__internal_e5d12f25875006df01017493b56677b6a9ba84fb753198d51264a3ccbfce9449_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
