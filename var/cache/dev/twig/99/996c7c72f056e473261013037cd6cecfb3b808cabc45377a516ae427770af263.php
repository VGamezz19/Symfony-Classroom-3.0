<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_7b75232b97578dacbc9823a538f09013019c5d9724bc9decc1b37c0c47dd7922 extends Twig_Template
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
        $__internal_7cd4f26ed1c0bf4eb9bba61df349f863ab2d91a0210fab45ab312bb03c5e7246 = $this->env->getExtension("native_profiler");
        $__internal_7cd4f26ed1c0bf4eb9bba61df349f863ab2d91a0210fab45ab312bb03c5e7246->enter($__internal_7cd4f26ed1c0bf4eb9bba61df349f863ab2d91a0210fab45ab312bb03c5e7246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_7cd4f26ed1c0bf4eb9bba61df349f863ab2d91a0210fab45ab312bb03c5e7246->leave($__internal_7cd4f26ed1c0bf4eb9bba61df349f863ab2d91a0210fab45ab312bb03c5e7246_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
