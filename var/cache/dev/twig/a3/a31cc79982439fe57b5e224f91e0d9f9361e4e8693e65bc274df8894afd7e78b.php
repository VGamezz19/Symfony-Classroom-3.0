<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_19ee52b4ceeb8f9963c14173c9eda9b68ca5472b4e721a3560f08c8a59c15003 extends Twig_Template
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
        $__internal_11b7e6880c9a81d85dd9940538aeb422f7d65686122087b59641984ac3716e4c = $this->env->getExtension("native_profiler");
        $__internal_11b7e6880c9a81d85dd9940538aeb422f7d65686122087b59641984ac3716e4c->enter($__internal_11b7e6880c9a81d85dd9940538aeb422f7d65686122087b59641984ac3716e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_11b7e6880c9a81d85dd9940538aeb422f7d65686122087b59641984ac3716e4c->leave($__internal_11b7e6880c9a81d85dd9940538aeb422f7d65686122087b59641984ac3716e4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
