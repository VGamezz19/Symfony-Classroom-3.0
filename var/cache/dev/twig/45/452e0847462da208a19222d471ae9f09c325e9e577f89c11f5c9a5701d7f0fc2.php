<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f934a6611a803e32f79b757de2e2dd7e3496d44af52a0ea04b7bb79c2f957a60 extends Twig_Template
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
        $__internal_2d674805982d0c3557886f58b775400cbad176015ad12eebb01a010efef56d30 = $this->env->getExtension("native_profiler");
        $__internal_2d674805982d0c3557886f58b775400cbad176015ad12eebb01a010efef56d30->enter($__internal_2d674805982d0c3557886f58b775400cbad176015ad12eebb01a010efef56d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2d674805982d0c3557886f58b775400cbad176015ad12eebb01a010efef56d30->leave($__internal_2d674805982d0c3557886f58b775400cbad176015ad12eebb01a010efef56d30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
