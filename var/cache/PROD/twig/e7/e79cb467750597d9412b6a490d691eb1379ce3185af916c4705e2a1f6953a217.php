<?php

/* UserBundle:Security:horitzontal-login.html.twig */
class __TwigTemplate_c51ddaa3cebf827f140f9316620aeacb910f7b11ed49caf923de6017f53b6fba extends Twig_Template
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
        $__internal_c85a2314b913ef6da45c8f568b7626b9d96eed3669b04a9d1ca1e7526e2c85da = $this->env->getExtension("native_profiler");
        $__internal_c85a2314b913ef6da45c8f568b7626b9d96eed3669b04a9d1ca1e7526e2c85da->enter($__internal_c85a2314b913ef6da45c8f568b7626b9d96eed3669b04a9d1ca1e7526e2c85da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:horitzontal-login.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
    <div class=\"form-group\">
        <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>
    <div class=\"form-group\">
        <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
    <a class=\"btn btn-danger\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Sign up</a>
</form>";
        
        $__internal_c85a2314b913ef6da45c8f568b7626b9d96eed3669b04a9d1ca1e7526e2c85da->leave($__internal_c85a2314b913ef6da45c8f568b7626b9d96eed3669b04a9d1ca1e7526e2c85da_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:horitzontal-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  32 => 4,  27 => 2,  22 => 1,);
    }
}
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*     <div class="form-group">*/
/*         <input class="form-control" placeholder="Username" type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <input class="form-control" placeholder="Password" type="password" id="password" name="_password" required="required" />*/
/*     </div>*/
/*     <button type="submit" class="btn btn-success">Sign in</button>*/
/*     <a class="btn btn-danger" href="{{ path('fos_user_registration_register') }}">Sign up</a>*/
/* </form>*/