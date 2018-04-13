<?php

/* _macros.twig */
class __TwigTemplate_abed74578591ff29e63b2fe72a37abf25bb8f40eb917e62310994c32166db527 extends Twig_Template
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
        // line 17
        echo "
";
        // line 28
        echo "
";
    }

    // line 2
    public function getprint_errors($__errors__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "errors" => $__errors__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "
    ";
            // line 4
            if ( !twig_test_empty((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")))) {
                // line 5
                echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"alert alert-dismissable alert-danger\">
                    ";
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 9
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "                </div>
            </div>
        </div>
    ";
            }
            // line 15
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getform_field($__type__ = null, $__name__ = null, $__label__ = null, $__value__ = null, $__placeholder__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "name" => $__name__,
            "label" => $__label__,
            "value" => $__value__,
            "placeholder" => $__placeholder__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "    <div class=\"form-group\">
        <label for=\"form-";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" class=\"control-label\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</label>
        ";
            // line 21
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "textarea")) {
                // line 22
                echo "            <textarea name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "\" class=\"form-control\" id=\"form-";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</textarea>
        ";
            } else {
                // line 24
                echo "            <input type=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\" class=\"form-control\" id=\"form-";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" />
        ";
            }
            // line 26
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getflashMessage($__messages__ = null, $__isPositive__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "isPositive" => $__isPositive__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    <div class=\"alert alert-warning flash-message\">
        ";
            // line 31
            if ((isset($context["isPositive"]) ? $context["isPositive"] : $this->getContext($context, "isPositive"))) {
                // line 32
                echo "            <i class=\"fa fa-bolt\"></i>
        ";
            } else {
                // line 34
                echo "            <i class=\"fa fa-exclamation-triangle\"></i>
        ";
            }
            // line 36
            echo "
        ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 38
                echo "            ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 40,  175 => 38,  171 => 37,  168 => 36,  164 => 34,  160 => 32,  158 => 31,  155 => 30,  143 => 29,  131 => 26,  117 => 24,  105 => 22,  103 => 21,  97 => 20,  94 => 19,  79 => 18,  67 => 15,  61 => 11,  52 => 9,  48 => 8,  43 => 5,  41 => 4,  38 => 3,  27 => 2,  22 => 28,  19 => 17,);
    }
}
