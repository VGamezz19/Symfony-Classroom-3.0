<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d9f81ec00a237523fa75b35e1464a9f4a85342f5e41a02ed85aaf5c66380b685 extends Twig_Template
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
        $__internal_35db71ab33aa2cbe4c151b86004226e128a64e580302366789d6e486905bb7f9 = $this->env->getExtension("native_profiler");
        $__internal_35db71ab33aa2cbe4c151b86004226e128a64e580302366789d6e486905bb7f9->enter($__internal_35db71ab33aa2cbe4c151b86004226e128a64e580302366789d6e486905bb7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_35db71ab33aa2cbe4c151b86004226e128a64e580302366789d6e486905bb7f9->leave($__internal_35db71ab33aa2cbe4c151b86004226e128a64e580302366789d6e486905bb7f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */