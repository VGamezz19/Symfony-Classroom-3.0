<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c251a18192d262688359dd68b4bb8fd87c9024d02141c7db8d90870426401609 extends Twig_Template
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
        $__internal_31386166673c0e7aa5051444ffc8ebb5a360a180e8fcf238f76fc826004053e1 = $this->env->getExtension("native_profiler");
        $__internal_31386166673c0e7aa5051444ffc8ebb5a360a180e8fcf238f76fc826004053e1->enter($__internal_31386166673c0e7aa5051444ffc8ebb5a360a180e8fcf238f76fc826004053e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_31386166673c0e7aa5051444ffc8ebb5a360a180e8fcf238f76fc826004053e1->leave($__internal_31386166673c0e7aa5051444ffc8ebb5a360a180e8fcf238f76fc826004053e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
