<?php

/* layout.twig */
class __TwigTemplate_c42d653f35f051e088af12ced1f78dbdc01ec88a104ebc5e2bd1d1a71bd6f745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macros"] = $this->env->loadTemplate("_macros.twig");
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <!-- Add custom CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basePath", array()), "html", null, true);
        echo "/css/styles.css\">
</head>
<body>
    <!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <div class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><img src=\"../img/logo-2.png\" alt=\"code battle logo\" class=\"logo\"></a>
                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"navbar-brand\">Code Battles</a>
               ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 28
            echo "                <button class = \"navbar-toggle\" data-toggle = \"collapse\" data-target = \"#navbar-main\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                </button>
                ";
        } else {
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
            <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 38
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
            echo "                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\"
                               data-toggle=\"dropdown\" href=\"#\">
                                User Info <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    ";
            // line 46
            $context["user"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "user", array());
            // line 47
            echo "                                    <table class=\"table table-striped user-information\">
                                        <tbody>
                                        <tr>
                                            <th>Email</th>
                                            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">Logout</a>
                        </li>
                    ";
        } else {
            // line 66
            echo "                    ";
        }
        // line 67
        echo "                </ul>
            </div>
        </div>
    </div>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"main-console-screen\">
                ";
        // line 76
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "flashbag", array()), "has", array(0 => "notice_happy"), "method")) {
            // line 77
            echo "                    ";
            echo $context["macros"]->getflashMessage($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "flashbag", array()), "get", array(0 => "notice_happy"), "method"), true);
            echo "
                ";
        }
        // line 79
        echo "
                ";
        // line 80
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "flashbag", array()), "has", array(0 => "notice_sad"), "method")) {
            // line 81
            echo "                    ";
            echo $context["macros"]->getflashMessage($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "flashbag", array()), "get", array(0 => "notice_sad"), "method"), false);
            echo "
                ";
        }
        // line 83
        echo "
                ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "            </div>
        </div>
    </div>

    ";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "</body>
</html>
";
    }

    // line 84
    public function block_content($context, array $blocks = array())
    {
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        // line 90
        echo "        <script src=\"http://code.jquery.com/jquery-2.0.3.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 90,  177 => 89,  172 => 84,  166 => 93,  164 => 89,  158 => 85,  156 => 84,  153 => 83,  147 => 81,  145 => 80,  142 => 79,  136 => 77,  134 => 76,  123 => 67,  120 => 66,  114 => 63,  103 => 55,  96 => 51,  90 => 47,  88 => 46,  79 => 39,  77 => 38,  72 => 35,  69 => 34,  61 => 28,  59 => 27,  55 => 26,  51 => 25,  38 => 15,  23 => 2,  21 => 1,);
    }
}
