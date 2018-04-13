<?php

/* programmer/show.twig */
class __TwigTemplate_247afa7f3aba90a4152450b73194a29153ad7ff6d9e2c9402e2d9df01497e499 extends Twig_Template
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
        echo "    <h1 class=\"nickname\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array()), "html", null, true);
        echo "</h1>
    <div class=\"prog-level\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "tagLine", array()), "html", null, true);
        echo "</div>
\t<img class=\"prog-show\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('code_battle')->getAvatarPath($this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "avatarNumber", array()))), "html", null, true);
        echo "\" alt=\"Avatar";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "avatarNumber", array()), "html", null, true);
        echo "\" />
    <h3 class=\"show-power\">
        Power Level:

        <span class=\"label label-";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('code_battle')->getPowerLevelClass((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer"))), "html", null, true);
        echo "\">
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "powerLevel", array()), "html", null, true);
        echo "
        </span>
    </h3>
    ";
        // line 15
        if (($this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "user", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 16
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("programmer_powerup", array("nickname" => $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array()))), "html", null, true);
            echo "\" method=\"POST\">
            <div class=\"battle-btns\">
                <button type=\"submit\" class=\"btn btn-lg btn-power\">Power Up!</button>
                <button class=\"btn btn-lg btn-start-battle\" type=\"button\" data-toggle=\"modal\" data-target=\"#chooseProject\">Start Battle!</button>
            </div>
        </form>

        <div class=\"modal fade\" id=\"chooseProject\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Choose your enemy</h4>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"projects-list\">
                            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 33
                echo "                                <li>
                                    <form action=\"";
                // line 34
                echo $this->env->getExtension('routing')->getPath("battle_new");
                echo "\" method=\"POST\">
                                        <input type=\"hidden\" name=\"programmer_id\" value=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "id", array()), "html", null, true);
                echo "\" />
                                        <input type=\"hidden\" name=\"project_id\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", array()), "html", null, true);
                echo "\" />

                                        <input type=\"submit\" class=\"btn btn-lg btn-enemy js-select-battle-project\" value=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo " (difficulty: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "difficultyLevel", array()), "html", null, true);
                echo ")\" />
                                    </form>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                        </ul>
                    </div>

                    <div class=\"js-progress-messages battle-progress-message\"></div>
                    <div class=\"progress progress-striped active js-battle-status\" style=\"display: none;\">
                      <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                    </div>
                    
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Surrender</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div><!-- /.modal -->
    ";
        }
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        var Battle = function(\$modal) {
            this.initialize(\$modal);
        };

        \$.extend(Battle.prototype, {
            messages: [
                'Cloning the repository',
                'Stting through some planning meetings',
                'Running Composer install',
                'Working into the night on the search feature',
                'Writing tests'
            ],

            initialize: function(\$modal) {
                this.\$modal = \$modal;

                this.\$modal.on(
                    'click',
                    '.js-select-battle-project',
                    \$.proxy(this._handleBattleStart, this)
                );
            },

            startBattle: function(\$form) {
                var self = this;

                var \$battleButtons = this.\$modal.find('.js-select-battle-project');
                \$battleButtons.attr('disabled');

                var \$progressBar = this.\$modal.find('.js-battle-status');
                var \$movingBar = \$progressBar.find('.progress-bar');
                \$progressBar.show();

                var \$messages = this.\$modal.find('.js-progress-messages');
                var messages = this.messages;

                var max = 5;
                (function loopOverMessages (i) {
                   setTimeout(function () {
                       \$messages.html(messages[max-i]);
                       \$movingBar.width((100/max*(max-i))+'%');
                       if (i--) {
                           loopOverMessages(i);
                       } else {
                           self.finishBattle(\$form);
                       }
                   }, 300)
                })(max);
            },

            finishBattle: function(\$form) {
                var \$messages = this.\$modal.find('.js-progress-messages');
                \$messages.html('Battle Concluded!');

                \$form.submit();
            },

            _handleBattleStart: function(e) {
                e.preventDefault();
                \$form = \$(e.currentTarget).closest('form');

                this.startBattle(\$form);
            }
        });

        \$(document).ready(function() {
            var \$modal = \$('#chooseProject');

            var battle = new Battle(\$modal);
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "programmer/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 62,  146 => 61,  125 => 42,  113 => 38,  108 => 36,  104 => 35,  100 => 34,  97 => 33,  93 => 32,  73 => 16,  71 => 15,  65 => 12,  61 => 11,  52 => 7,  48 => 6,  43 => 5,  40 => 4,  36 => 1,  34 => 2,  11 => 1,);
    }
}
