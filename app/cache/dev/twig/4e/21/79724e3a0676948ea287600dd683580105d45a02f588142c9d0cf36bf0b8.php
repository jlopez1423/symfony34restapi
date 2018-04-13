<?php

/* user/login.twig */
class __TwigTemplate_4e2179724e3a0676948ea287600dd683580105d45a02f588142c9d0cf36bf0b8 extends Twig_Template
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
        echo "    <h1>Login</h1>

    ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"alert alert-dismissable alert-danger\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array())), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 16
        echo "    
        <form class=\"form-login\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("security_login_check");
        echo "\" method=\"post\">
            <fieldset>
                ";
        // line 19
        echo $context["macros"]->getform_field("text", "_username", "Email", (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "foo@example.com");
        echo "
                ";
        // line 20
        echo $context["macros"]->getform_field("password", "_password", "Password", "", "");
        echo "
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn\">Login</button>
                    <a id=\"reg-btn\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("user_register");
        echo "\">Register</a>
                </div>
            </fieldset>
        </form>

";
    }

    public function getTemplateName()
    {
        return "user/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  73 => 20,  69 => 19,  64 => 17,  61 => 16,  53 => 11,  48 => 8,  46 => 7,  42 => 5,  39 => 4,  35 => 1,  33 => 2,  11 => 1,);
    }
}
