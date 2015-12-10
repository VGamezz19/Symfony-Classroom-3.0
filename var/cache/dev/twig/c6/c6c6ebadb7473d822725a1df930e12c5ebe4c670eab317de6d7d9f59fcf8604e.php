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
        $__internal_c9db11824319e45294ad7ac61cff7a1784db30fc17b782105590894efa18eeb8 = $this->env->getExtension("native_profiler");
        $__internal_c9db11824319e45294ad7ac61cff7a1784db30fc17b782105590894efa18eeb8->enter($__internal_c9db11824319e45294ad7ac61cff7a1784db30fc17b782105590894efa18eeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-templates:form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_c9db11824319e45294ad7ac61cff7a1784db30fc17b782105590894efa18eeb8->leave($__internal_c9db11824319e45294ad7ac61cff7a1784db30fc17b782105590894efa18eeb8_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0f13562185302e6504b166a45ffa686985b19771ee0b1efacd22f03e7bc17113 = $this->env->getExtension("native_profiler");
        $__internal_0f13562185302e6504b166a45ffa686985b19771ee0b1efacd22f03e7bc17113->enter($__internal_0f13562185302e6504b166a45ffa686985b19771ee0b1efacd22f03e7bc17113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_0f13562185302e6504b166a45ffa686985b19771ee0b1efacd22f03e7bc17113->leave($__internal_0f13562185302e6504b166a45ffa686985b19771ee0b1efacd22f03e7bc17113_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ec9c7baae4ac786114529b431637768fdfbf2dbd5a4ca75f6d97d014bb0af5b1 = $this->env->getExtension("native_profiler");
        $__internal_ec9c7baae4ac786114529b431637768fdfbf2dbd5a4ca75f6d97d014bb0af5b1->enter($__internal_ec9c7baae4ac786114529b431637768fdfbf2dbd5a4ca75f6d97d014bb0af5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_ec9c7baae4ac786114529b431637768fdfbf2dbd5a4ca75f6d97d014bb0af5b1->leave($__internal_ec9c7baae4ac786114529b431637768fdfbf2dbd5a4ca75f6d97d014bb0af5b1_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_ed995d9ed2a0c2e29d2fa645686243b70488f81423cc478cebbaee0ad4f2b20e = $this->env->getExtension("native_profiler");
        $__internal_ed995d9ed2a0c2e29d2fa645686243b70488f81423cc478cebbaee0ad4f2b20e->enter($__internal_ed995d9ed2a0c2e29d2fa645686243b70488f81423cc478cebbaee0ad4f2b20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_ed995d9ed2a0c2e29d2fa645686243b70488f81423cc478cebbaee0ad4f2b20e->leave($__internal_ed995d9ed2a0c2e29d2fa645686243b70488f81423cc478cebbaee0ad4f2b20e_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_25982ba219baf5adf5bfb67145c13fd544b1c76f0445de7430da7efefea78fdb = $this->env->getExtension("native_profiler");
        $__internal_25982ba219baf5adf5bfb67145c13fd544b1c76f0445de7430da7efefea78fdb->enter($__internal_25982ba219baf5adf5bfb67145c13fd544b1c76f0445de7430da7efefea78fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_25982ba219baf5adf5bfb67145c13fd544b1c76f0445de7430da7efefea78fdb->leave($__internal_25982ba219baf5adf5bfb67145c13fd544b1c76f0445de7430da7efefea78fdb_prof);

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
