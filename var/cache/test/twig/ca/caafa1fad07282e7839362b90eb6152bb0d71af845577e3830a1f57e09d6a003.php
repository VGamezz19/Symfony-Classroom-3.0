<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4076de56276e5c7728ec045f88957d5f91a8725f30d9c217e0d5dc330531279e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f23668962900764889769550cb4246eb1d5513ef7e38781213c8c00bef49efeb = $this->env->getExtension("native_profiler");
        $__internal_f23668962900764889769550cb4246eb1d5513ef7e38781213c8c00bef49efeb->enter($__internal_f23668962900764889769550cb4246eb1d5513ef7e38781213c8c00bef49efeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f23668962900764889769550cb4246eb1d5513ef7e38781213c8c00bef49efeb->leave($__internal_f23668962900764889769550cb4246eb1d5513ef7e38781213c8c00bef49efeb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e388b80316d58bf892d7b8f510530ce4987fdd9dd970c8050e1523821475f4ed = $this->env->getExtension("native_profiler");
        $__internal_e388b80316d58bf892d7b8f510530ce4987fdd9dd970c8050e1523821475f4ed->enter($__internal_e388b80316d58bf892d7b8f510530ce4987fdd9dd970c8050e1523821475f4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e388b80316d58bf892d7b8f510530ce4987fdd9dd970c8050e1523821475f4ed->leave($__internal_e388b80316d58bf892d7b8f510530ce4987fdd9dd970c8050e1523821475f4ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_355f118f4c91d58485f8358dc4462380ec7840aa96ceb3ae400ebaa21c9c9874 = $this->env->getExtension("native_profiler");
        $__internal_355f118f4c91d58485f8358dc4462380ec7840aa96ceb3ae400ebaa21c9c9874->enter($__internal_355f118f4c91d58485f8358dc4462380ec7840aa96ceb3ae400ebaa21c9c9874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_355f118f4c91d58485f8358dc4462380ec7840aa96ceb3ae400ebaa21c9c9874->leave($__internal_355f118f4c91d58485f8358dc4462380ec7840aa96ceb3ae400ebaa21c9c9874_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff04221b63d69ecff99ceccb9e18831281ef05a65fd3b62c5204119ab6453399 = $this->env->getExtension("native_profiler");
        $__internal_ff04221b63d69ecff99ceccb9e18831281ef05a65fd3b62c5204119ab6453399->enter($__internal_ff04221b63d69ecff99ceccb9e18831281ef05a65fd3b62c5204119ab6453399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ff04221b63d69ecff99ceccb9e18831281ef05a65fd3b62c5204119ab6453399->leave($__internal_ff04221b63d69ecff99ceccb9e18831281ef05a65fd3b62c5204119ab6453399_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
