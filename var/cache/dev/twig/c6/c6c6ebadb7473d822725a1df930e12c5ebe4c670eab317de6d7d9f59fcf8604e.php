<?php

/* :form-templates:form_table_layout.html.twig */
class __TwigTemplate_77bc6bf7b1b93239a43c6d7f83f83a058f5d204ab1f3faaa269da3f909298e62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", ":form-templates:form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f2f77ee27450378752d8daa40267b85a173b8eb869c833a953c1431b7ecba67 = $this->env->getExtension("native_profiler");
        $__internal_8f2f77ee27450378752d8daa40267b85a173b8eb869c833a953c1431b7ecba67->enter($__internal_8f2f77ee27450378752d8daa40267b85a173b8eb869c833a953c1431b7ecba67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-templates:form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_8f2f77ee27450378752d8daa40267b85a173b8eb869c833a953c1431b7ecba67->leave($__internal_8f2f77ee27450378752d8daa40267b85a173b8eb869c833a953c1431b7ecba67_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_edc9023e2f606f2214a2bd3fa28f7d0719f758e8c6002f1334eaa912e45dda40 = $this->env->getExtension("native_profiler");
        $__internal_edc9023e2f606f2214a2bd3fa28f7d0719f758e8c6002f1334eaa912e45dda40->enter($__internal_edc9023e2f606f2214a2bd3fa28f7d0719f758e8c6002f1334eaa912e45dda40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_edc9023e2f606f2214a2bd3fa28f7d0719f758e8c6002f1334eaa912e45dda40->leave($__internal_edc9023e2f606f2214a2bd3fa28f7d0719f758e8c6002f1334eaa912e45dda40_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_dd56531c35527148e89b264766c0ff93daaa12f8c3d5815dfe6879984bed0242 = $this->env->getExtension("native_profiler");
        $__internal_dd56531c35527148e89b264766c0ff93daaa12f8c3d5815dfe6879984bed0242->enter($__internal_dd56531c35527148e89b264766c0ff93daaa12f8c3d5815dfe6879984bed0242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_dd56531c35527148e89b264766c0ff93daaa12f8c3d5815dfe6879984bed0242->leave($__internal_dd56531c35527148e89b264766c0ff93daaa12f8c3d5815dfe6879984bed0242_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_330be850757705a78afee3a42c79b3dcade2d18829afb9cedaf5d8bfc05a200c = $this->env->getExtension("native_profiler");
        $__internal_330be850757705a78afee3a42c79b3dcade2d18829afb9cedaf5d8bfc05a200c->enter($__internal_330be850757705a78afee3a42c79b3dcade2d18829afb9cedaf5d8bfc05a200c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_330be850757705a78afee3a42c79b3dcade2d18829afb9cedaf5d8bfc05a200c->leave($__internal_330be850757705a78afee3a42c79b3dcade2d18829afb9cedaf5d8bfc05a200c_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_32eb0445352e285be171a585b88b364028688dead3a0d0a3cdbc930b3dc41b9a = $this->env->getExtension("native_profiler");
        $__internal_32eb0445352e285be171a585b88b364028688dead3a0d0a3cdbc930b3dc41b9a->enter($__internal_32eb0445352e285be171a585b88b364028688dead3a0d0a3cdbc930b3dc41b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_32eb0445352e285be171a585b88b364028688dead3a0d0a3cdbc930b3dc41b9a->leave($__internal_32eb0445352e285be171a585b88b364028688dead3a0d0a3cdbc930b3dc41b9a_prof);

    }

    public function getTemplateName()
    {
        return ":form-templates:form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  139 => 42,  137 => 41,  133 => 38,  131 => 37,  128 => 35,  126 => 34,  122 => 33,  116 => 32,  108 => 28,  106 => 27,  103 => 25,  97 => 24,  89 => 20,  87 => 19,  83 => 16,  77 => 15,  69 => 11,  67 => 10,  65 => 9,  62 => 7,  60 => 6,  57 => 4,  51 => 3,  44 => 32,  42 => 24,  40 => 15,  38 => 3,  14 => 1,);
    }
}
/* {% use "form_div_layout.html.twig" %}*/
/* */
/* {%- block form_row -%}*/
/*     <tr>*/
/*         <td>*/
/*             {{- form_label(form) -}}*/
/*         </td>*/
/*         <td>*/
/*             {{- form_errors(form) -}}*/
/*             {{- form_widget(form) -}}*/
/*         </td>*/
/*     </tr>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block button_row -%}*/
/*     <tr>*/
/*         <td></td>*/
/*         <td>*/
/*             {{- form_widget(form) -}}*/
/*         </td>*/
/*     </tr>*/
/* {%- endblock button_row -%}*/
/* */
/* {%- block hidden_row -%}*/
/*     <tr style="display: none">*/
/*         <td colspan="2">*/
/*             {{- form_widget(form) -}}*/
/*         </td>*/
/*     </tr>*/
/* {%- endblock hidden_row -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <table {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty and errors|length > 0 -%}*/
/*         <tr>*/
/*             <td colspan="2">*/
/*                 {{- form_errors(form) -}}*/
/*             </td>*/
/*         </tr>*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </table>*/
/* {%- endblock form_widget_compound -%}*/
/* */
