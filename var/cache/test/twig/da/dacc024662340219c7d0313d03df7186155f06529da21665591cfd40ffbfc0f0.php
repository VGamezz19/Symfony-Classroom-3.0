<?php

/* :admin/tag:unused-tags.html.twig */
class __TwigTemplate_a4688b57df17551e812c217db8bc4dde4ab5bedf5f7e724cc34b986aac921ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":admin:admin_layout.html.twig", ":admin/tag:unused-tags.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":admin:admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e20873c2ad80409866560d2fc68796382356b88d9d7816d901781fa776ecbbb9 = $this->env->getExtension("native_profiler");
        $__internal_e20873c2ad80409866560d2fc68796382356b88d9d7816d901781fa776ecbbb9->enter($__internal_e20873c2ad80409866560d2fc68796382356b88d9d7816d901781fa776ecbbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/tag:unused-tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e20873c2ad80409866560d2fc68796382356b88d9d7816d901781fa776ecbbb9->leave($__internal_e20873c2ad80409866560d2fc68796382356b88d9d7816d901781fa776ecbbb9_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_a2f6d45d1a55fd7703567a7e5a2ac56e74bf342d1116afad7894d3b25b0f460a = $this->env->getExtension("native_profiler");
        $__internal_a2f6d45d1a55fd7703567a7e5a2ac56e74bf342d1116afad7894d3b25b0f460a->enter($__internal_a2f6d45d1a55fd7703567a7e5a2ac56e74bf342d1116afad7894d3b25b0f460a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Unused Tags";
        
        $__internal_a2f6d45d1a55fd7703567a7e5a2ac56e74bf342d1116afad7894d3b25b0f460a->leave($__internal_a2f6d45d1a55fd7703567a7e5a2ac56e74bf342d1116afad7894d3b25b0f460a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_01343453cccf6133081b5bd6570b92132d361622c098ffca3f07245da2752808 = $this->env->getExtension("native_profiler");
        $__internal_01343453cccf6133081b5bd6570b92132d361622c098ffca3f07245da2752808->enter($__internal_01343453cccf6133081b5bd6570b92132d361622c098ffca3f07245da2752808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags"))) {
            // line 7
            echo "    <table class=\"table\">
        <thead>
            <td><strong>Tag</strong></td>
            <td></td>
        </thead>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 13
                echo "            <tr>
                <td class=\"tag-name\">";
                // line 14
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</td>
                <td><a class=\"btn btn-danger\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_admin_tag_remove", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">remove</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </table>
    <div>
        <a class=\"btn btn-danger\" href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("app_admin_tag_removeAllUnusedTags");
            echo "\">Remove all unused tags</a>
    </div>
    ";
        } else {
            // line 23
            echo "        <div class=\"row \">
            <div class=\"col-md-4 alert-success\" style=\"padding: 10px;\">
                <p id=\"no-unused-tags-found\">No unused tags were found</p>
            </div>
        </div>
    ";
        }
        
        $__internal_01343453cccf6133081b5bd6570b92132d361622c098ffca3f07245da2752808->leave($__internal_01343453cccf6133081b5bd6570b92132d361622c098ffca3f07245da2752808_prof);

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
        return array (  93 => 23,  87 => 20,  83 => 18,  74 => 15,  70 => 14,  67 => 13,  63 => 12,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':admin:admin_layout.html.twig' %}*/
/* */
/* {% block headTitle %}Unused Tags{% endblock %}*/
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
/*                 <td class="tag-name">{{ tag }}</td>*/
/*                 <td><a class="btn btn-danger" href="{{ path('app_admin_tag_remove', {'id': tag.id}) }}">remove</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     <div>*/
/*         <a class="btn btn-danger" href="{{ path('app_admin_tag_removeAllUnusedTags') }}">Remove all unused tags</a>*/
/*     </div>*/
/*     {% else %}*/
/*         <div class="row ">*/
/*             <div class="col-md-4 alert-success" style="padding: 10px;">*/
/*                 <p id="no-unused-tags-found">No unused tags were found</p>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/