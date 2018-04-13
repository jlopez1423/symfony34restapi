<?php

/* programmer/new.twig */
class __TwigTemplate_779e8c8d0c14486fd5d2850158308adf5a173716adcc79561fa819df61d170d7 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "    <h1 id=\"create\">Create a Programmer!</h1>

    ";
        // line 7
        if (array_key_exists("errors", $context)) {
            // line 8
            echo "        ";
            echo $context["macros"]->getprint_errors((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            echo "
    ";
        }
        // line 10
        echo "

        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("programmer_new_handle");
        echo "\" method=\"post\">
            <fieldset>
                ";
        // line 14
        echo $context["macros"]->getform_field("text", "nickname", "Nickname", $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array()), "SmilingCoder");
        echo "
                ";
        // line 15
        echo $context["macros"]->getform_field("textarea", "tagLine", "Tag Line", $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "tagLine", array()), "No, sleep, til coding");
        echo "

                <ul class=\"avatar-list js-selectable-tile\">
                    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                        <li data-number=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('code_battle')->getAvatarPath($context["i"])), "html", null, true);
            echo "\" alt=\"Avatar";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" />
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </ul>
                <input type=\"hidden\" class=\"js-selectable-target\" name=\"avatarNumber\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "avatarNumber", array()), "html", null, true);
        echo "\" />

                    <button type=\"submit\" class=\"btn create-buttons\">Compile!</button>
                    <a class=\"cancel-link\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Cancel</a>
            </fieldset>
        </form>

";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        jQuery(document).ready(function() {
            \$('.js-selectable-tile').on('click', 'li', function(e) {
                e.preventDefault();

                \$(this).parent().find('li').removeClass('selected');
                \$(this).addClass('selected');

                \$('.js-selectable-target').val(\$(this).data('number'))
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "programmer/new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 34,  112 => 33,  103 => 27,  97 => 24,  94 => 23,  83 => 20,  78 => 19,  74 => 18,  68 => 15,  64 => 14,  59 => 12,  55 => 10,  49 => 8,  47 => 7,  43 => 5,  40 => 4,  36 => 1,  34 => 2,  11 => 1,);
    }
}
