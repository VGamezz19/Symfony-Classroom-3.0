<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a8cd6b306a3669f0d196f3ef01ea4e818ed1aa9dd2d2e0b21c211b3db7f7bf84 extends Twig_Template
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
        $__internal_0c0af370c18692de0a655ada01c422c685ad469364ea2abda3720e0aa7ac82fc = $this->env->getExtension("native_profiler");
        $__internal_0c0af370c18692de0a655ada01c422c685ad469364ea2abda3720e0aa7ac82fc->enter($__internal_0c0af370c18692de0a655ada01c422c685ad469364ea2abda3720e0aa7ac82fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0c0af370c18692de0a655ada01c422c685ad469364ea2abda3720e0aa7ac82fc->leave($__internal_0c0af370c18692de0a655ada01c422c685ad469364ea2abda3720e0aa7ac82fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
