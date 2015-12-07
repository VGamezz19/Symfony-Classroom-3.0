<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_727336a30dfb3bfe92defd438dd2a6c0626aff0fa42f0697778bd49a0640c83c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffb8f21594eec473bfcc373ab3ff8da70b928923d98a1a59d69e608aa5530e79 = $this->env->getExtension("native_profiler");
        $__internal_ffb8f21594eec473bfcc373ab3ff8da70b928923d98a1a59d69e608aa5530e79->enter($__internal_ffb8f21594eec473bfcc373ab3ff8da70b928923d98a1a59d69e608aa5530e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffb8f21594eec473bfcc373ab3ff8da70b928923d98a1a59d69e608aa5530e79->leave($__internal_ffb8f21594eec473bfcc373ab3ff8da70b928923d98a1a59d69e608aa5530e79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8dbe1a3e94ca4ea5bf80c4dd0b9183dae919caac6cfdf02e259cae3a6f886d6 = $this->env->getExtension("native_profiler");
        $__internal_b8dbe1a3e94ca4ea5bf80c4dd0b9183dae919caac6cfdf02e259cae3a6f886d6->enter($__internal_b8dbe1a3e94ca4ea5bf80c4dd0b9183dae919caac6cfdf02e259cae3a6f886d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b8dbe1a3e94ca4ea5bf80c4dd0b9183dae919caac6cfdf02e259cae3a6f886d6->leave($__internal_b8dbe1a3e94ca4ea5bf80c4dd0b9183dae919caac6cfdf02e259cae3a6f886d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_35da0524094e385808592d7b90eadc3b226024dbc777c12527bc50b4fc043141 = $this->env->getExtension("native_profiler");
        $__internal_35da0524094e385808592d7b90eadc3b226024dbc777c12527bc50b4fc043141->enter($__internal_35da0524094e385808592d7b90eadc3b226024dbc777c12527bc50b4fc043141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_35da0524094e385808592d7b90eadc3b226024dbc777c12527bc50b4fc043141->leave($__internal_35da0524094e385808592d7b90eadc3b226024dbc777c12527bc50b4fc043141_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
