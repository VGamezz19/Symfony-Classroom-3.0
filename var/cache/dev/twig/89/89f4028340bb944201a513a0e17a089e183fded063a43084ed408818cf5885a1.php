<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_55dbd5601780e7534527a442d3c7bde6467e750053fe7aabc17d4310d2849d14 extends Twig_Template
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
        $__internal_d6daf268427e8c666e85c4d06bea9cadf16f8185787965f0e411f3fe078afef8 = $this->env->getExtension("native_profiler");
        $__internal_d6daf268427e8c666e85c4d06bea9cadf16f8185787965f0e411f3fe078afef8->enter($__internal_d6daf268427e8c666e85c4d06bea9cadf16f8185787965f0e411f3fe078afef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d6daf268427e8c666e85c4d06bea9cadf16f8185787965f0e411f3fe078afef8->leave($__internal_d6daf268427e8c666e85c4d06bea9cadf16f8185787965f0e411f3fe078afef8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */