<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ec46bee5df7ea62ded0bb0058f9ed5c3645f47a1593e1cbe3bb2cb79af49eb08 extends Twig_Template
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
        $__internal_8afd0ea5b9635effff81ea51b36d0734dc367707518ee7181e54961ee9a0bb0d = $this->env->getExtension("native_profiler");
        $__internal_8afd0ea5b9635effff81ea51b36d0734dc367707518ee7181e54961ee9a0bb0d->enter($__internal_8afd0ea5b9635effff81ea51b36d0734dc367707518ee7181e54961ee9a0bb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8afd0ea5b9635effff81ea51b36d0734dc367707518ee7181e54961ee9a0bb0d->leave($__internal_8afd0ea5b9635effff81ea51b36d0734dc367707518ee7181e54961ee9a0bb0d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
