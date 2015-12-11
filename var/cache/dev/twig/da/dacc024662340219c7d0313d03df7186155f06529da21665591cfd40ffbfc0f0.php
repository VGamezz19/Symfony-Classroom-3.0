<?php

/* :admin/tag:unused-tags.html.twig */
class __TwigTemplate_a4688b57df17551e812c217db8bc4dde4ab5bedf5f7e724cc34b986aac921ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":admin/tag:unused-tags.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efd5a3e66f0717c8462fdc001859b9524f87806f2da0d76d7defb2c10b7f1818 = $this->env->getExtension("native_profiler");
        $__internal_efd5a3e66f0717c8462fdc001859b9524f87806f2da0d76d7defb2c10b7f1818->enter($__internal_efd5a3e66f0717c8462fdc001859b9524f87806f2da0d76d7defb2c10b7f1818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/tag:unused-tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efd5a3e66f0717c8462fdc001859b9524f87806f2da0d76d7defb2c10b7f1818->leave($__internal_efd5a3e66f0717c8462fdc001859b9524f87806f2da0d76d7defb2c10b7f1818_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2b8773d35fc870e3bddf40d3490f8599eda46c14cd4cf551c3cc3a0d77bfe3a = $this->env->getExtension("native_profiler");
        $__internal_e2b8773d35fc870e3bddf40d3490f8599eda46c14cd4cf551c3cc3a0d77bfe3a->enter($__internal_e2b8773d35fc870e3bddf40d3490f8599eda46c14cd4cf551c3cc3a0d77bfe3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags"))) {
            // line 5
            echo "    <table class=\"table\">
        <thead>
            <td><strong>Tag</strong></td>
            <td></td>
        </thead>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 11
                echo "            <tr>
                <td>";
                // line 12
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</td>
                <td><a class=\"btn btn-danger\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_admin_tag_remove", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">remove</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </table>
    <div>
        <a class=\"btn btn-danger\" href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("app_admin_tag_removeAllUnusedTags");
            echo "\">Remove all unused tags</a>
    </div>
    ";
        } else {
            // line 21
            echo "        <h1>No unused tags were found</h1>
    ";
        }
        
        $__internal_e2b8773d35fc870e3bddf40d3490f8599eda46c14cd4cf551c3cc3a0d77bfe3a->leave($__internal_e2b8773d35fc870e3bddf40d3490f8599eda46c14cd4cf551c3cc3a0d77bfe3a_prof);

    }

    public function getTemplateName()
    {
        return ":admin/tag:unused-tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  74 => 18,  70 => 16,  61 => 13,  57 => 12,  54 => 11,  50 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if tags %}*/
/*     <table class="table">*/
/*         <thead>*/
/*             <td><strong>Tag</strong></td>*/
/*             <td></td>*/
/*         </thead>*/
/*         {% for tag in tags %}*/
/*             <tr>*/
/*                 <td>{{ tag }}</td>*/
/*                 <td><a class="btn btn-danger" href="{{ path('app_admin_tag_remove', {'id': tag.id}) }}">remove</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     <div>*/
/*         <a class="btn btn-danger" href="{{ path('app_admin_tag_removeAllUnusedTags') }}">Remove all unused tags</a>*/
/*     </div>*/
/*     {% else %}*/
/*         <h1>No unused tags were found</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
