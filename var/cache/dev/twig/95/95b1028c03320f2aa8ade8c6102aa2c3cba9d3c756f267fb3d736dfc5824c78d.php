<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_aa2f21908cd53bbd0eb03d83eb60727b5729499b51db87bc9484b7a2c6c4ec78 extends Twig_Template
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
        $__internal_03844fd119bf559bc499d5c8bf489cb9278df6ad478cdfe78476018cf0cfdf33 = $this->env->getExtension("native_profiler");
        $__internal_03844fd119bf559bc499d5c8bf489cb9278df6ad478cdfe78476018cf0cfdf33->enter($__internal_03844fd119bf559bc499d5c8bf489cb9278df6ad478cdfe78476018cf0cfdf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_03844fd119bf559bc499d5c8bf489cb9278df6ad478cdfe78476018cf0cfdf33->leave($__internal_03844fd119bf559bc499d5c8bf489cb9278df6ad478cdfe78476018cf0cfdf33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */