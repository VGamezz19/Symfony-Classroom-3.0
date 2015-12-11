<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_dcd60bf99952318385346faf3456c795cc99f2ef9696b924a6b7efa89fc57b51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d29f7ff8b1d40433a577750ebfb39b8d55b2cd85083af2072e8f9584453e2df0 = $this->env->getExtension("native_profiler");
        $__internal_d29f7ff8b1d40433a577750ebfb39b8d55b2cd85083af2072e8f9584453e2df0->enter($__internal_d29f7ff8b1d40433a577750ebfb39b8d55b2cd85083af2072e8f9584453e2df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d29f7ff8b1d40433a577750ebfb39b8d55b2cd85083af2072e8f9584453e2df0->leave($__internal_d29f7ff8b1d40433a577750ebfb39b8d55b2cd85083af2072e8f9584453e2df0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55e5ca86e776195f214efb0197ec3ce67ea4e350303361012fac386b21a939d7 = $this->env->getExtension("native_profiler");
        $__internal_55e5ca86e776195f214efb0197ec3ce67ea4e350303361012fac386b21a939d7->enter($__internal_55e5ca86e776195f214efb0197ec3ce67ea4e350303361012fac386b21a939d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    <div>
        ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "    </div>
";
        
        $__internal_55e5ca86e776195f214efb0197ec3ce67ea4e350303361012fac386b21a939d7->leave($__internal_55e5ca86e776195f214efb0197ec3ce67ea4e350303361012fac386b21a939d7_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b070bdcaacf02066c24bceedef9ae33d997b21a6df601a700396a2dfa023a7a9 = $this->env->getExtension("native_profiler");
        $__internal_b070bdcaacf02066c24bceedef9ae33d997b21a6df601a700396a2dfa023a7a9->enter($__internal_b070bdcaacf02066c24bceedef9ae33d997b21a6df601a700396a2dfa023a7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "        ";
        
        $__internal_b070bdcaacf02066c24bceedef9ae33d997b21a6df601a700396a2dfa023a7a9->leave($__internal_b070bdcaacf02066c24bceedef9ae33d997b21a6df601a700396a2dfa023a7a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  91 => 15,  83 => 17,  81 => 15,  77 => 13,  74 => 12,  68 => 11,  59 => 8,  54 => 7,  49 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if app.request.hasPreviousSession %}*/
/*         {% for type, messages in app.session.flashbag.all() %}*/
/*             {% for message in messages %}*/
/*                 <div class="flash-{{ type }}">*/
/*                     {{ message }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     <div>*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     </div>*/
/* {% endblock %}*/
