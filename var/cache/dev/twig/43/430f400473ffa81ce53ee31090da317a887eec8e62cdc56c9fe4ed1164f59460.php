<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_394493af975486d197d5ddf93446e9314049186b2866e141bf4bae8b9388da5d extends Twig_Template
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
        $__internal_55b7873c766dd299f8b086c630567aa1f8610ecdd640201bd9824308b96dad5e = $this->env->getExtension("native_profiler");
        $__internal_55b7873c766dd299f8b086c630567aa1f8610ecdd640201bd9824308b96dad5e->enter($__internal_55b7873c766dd299f8b086c630567aa1f8610ecdd640201bd9824308b96dad5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_55b7873c766dd299f8b086c630567aa1f8610ecdd640201bd9824308b96dad5e->leave($__internal_55b7873c766dd299f8b086c630567aa1f8610ecdd640201bd9824308b96dad5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
