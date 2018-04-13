<?php

/* battle/show.twig */
class __TwigTemplate_3a6a66436cbc31f1d15fe4b7c29fa6eddc82fef6653ed82b0d76636764fc1c68 extends Twig_Template
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
        // line 2
        $context["macros"] = $this->env->loadTemplate("_macros.twig");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1 class=\"battle-result\">Battle:</h1>
    <p class=\"results\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array()), "html", null, true);
        echo " vs. ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</p>

    <h3 id=\"winner\">Winner: ";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["battle"]) ? $context["battle"] : $this->getContext($context, "battle")), "didProgrammerWin", array())) ? ($this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array())) : ($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()))), "html", null, true);
        echo "</h3>

    <div id=\"battle-notes\">
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["battle"]) ? $context["battle"] : $this->getContext($context, "battle")), "notes", array()), "html", null, true);
        echo "
    </div>

    ";
        // line 14
        if (($this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "user", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 15
            echo "        <div style=\"margin-top: 20px;\">
        <hr>
        <div class=\"battle-btns\">
            <a class=\"btn btn-small btn-start-battle\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programmer_show", array("nickname" => $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array()))), "html", null, true);
            echo "\">Fight again</a>
            <a class=\"btn btn-small btn-surrender\" href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">Retreat!</a>
        </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "battle/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  71 => 18,  66 => 15,  64 => 14,  58 => 11,  52 => 8,  45 => 6,  42 => 5,  39 => 4,  35 => 1,  33 => 2,  11 => 1,);
    }
}
