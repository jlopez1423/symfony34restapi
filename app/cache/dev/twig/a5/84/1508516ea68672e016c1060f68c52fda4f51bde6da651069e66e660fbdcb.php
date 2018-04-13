<?php

/* homepage.twig */
class __TwigTemplate_a5841508516ea68672e016c1060f68c52fda4f51bde6da651069e66e660fbdcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("layout.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"button-list\">
    <ul class=\"action-buttons-list\">
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("programmer_new");
        echo "\" class=\"btn btn-lg btn-create\">Create Programmer</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("programmer_choose");
        echo "\" class=\"btn btn-lg btn-start-battle\">Start Battle</a>
        </li>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("battle_list");
        echo "\" class=\"btn btn-lg btn-scores\">Scores</a>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "homepage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  50 => 10,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
