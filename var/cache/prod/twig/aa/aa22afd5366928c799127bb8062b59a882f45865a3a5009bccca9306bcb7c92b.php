<?php

/* base.html.twig */
class __TwigTemplate_f2e6c42e9a964e2fd93c86c2e40c9fd602955a409db90ac62d7462c078d73803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    </head>
    <body>

        <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Dashboard</a>
                </div>
                <div class=\"navbar-collapse collapse\">

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 38
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 39
            echo "                                    You're signed in as <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</strong> <span class=\"caret\"></span></a>
                                ";
        }
        // line 41
        echo "                              <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("user_my_account");
        echo "\">Account details</a></li>
                                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("security_logout");
        echo "\">Logout</a></li>
                              </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <div class=\"container-fluid\">

            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2 sidebar\">
                    <ul class=\"nav nav-sidebar\">
                        <li id=\"my-tasks\" class=\"";
        // line 57
        echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("task_developer_list"))) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("task_developer_list");
        echo "\">My tasks</a></li>
                        ";
        // line 58
        if ($this->env->getExtension('twig_extension')->isManager()) {
            // line 59
            echo "                            <li id=\"tasks\" class=\"";
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("task_manager_list"))) ? ("active") : (""));
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("task_manager_list");
            echo "\">All tasks</a></li>
                        ";
        }
        // line 61
        echo "                        <li id=\"statuses\" class=\"";
        echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("status_list"))) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("status_list");
        echo "\">Statuses</a></li>
                        <li id=\"users\" class=\"";
        // line 62
        echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("user_list"))) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_list");
        echo "\">Users</a></li>
                    </ul>

                </div>
                <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">

                    ";
        // line 69
        echo "                    ";
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 74
        echo "
                    ";
        // line 76
        echo "
                    <div class=\"container alerts\">
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            echo " 
                        ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 80
                echo "                            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["msg"]), "html", null, true);
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </div>

        ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "                Platingaming
            ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d5d58a6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d5d58a6_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_bootstrap-3.3.4.min_1.css");
            // line 16
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
            // asset "d5d58a6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d5d58a6_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_bootstrap-theme-3.3.4.min_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
            // asset "d5d58a6_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d5d58a6_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_main_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "d5d58a6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d5d58a6") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "        ";
    }

    // line 69
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 70
        echo "                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                    </ol>
                    ";
    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        // line 86
        echo "             </div>
        </div>
    </div>

        ";
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        // line 92
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7e3bfcc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e3bfcc_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_jquery-3.1.0.min_1.js");
            // line 97
            echo "             <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "7e3bfcc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e3bfcc_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_bootstrap-3.3.4.min_2.js");
            echo "             <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
            // asset "7e3bfcc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e3bfcc_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_main_3.js");
            echo "             <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "7e3bfcc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e3bfcc") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app.js");
            echo "             <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 99
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 99,  252 => 97,  247 => 92,  244 => 91,  236 => 86,  233 => 85,  226 => 70,  223 => 69,  219 => 18,  193 => 16,  188 => 11,  185 => 10,  180 => 7,  177 => 6,  171 => 100,  168 => 91,  166 => 85,  162 => 83,  156 => 82,  145 => 80,  141 => 79,  135 => 78,  131 => 76,  128 => 74,  125 => 69,  114 => 62,  107 => 61,  99 => 59,  97 => 58,  91 => 57,  74 => 43,  70 => 42,  67 => 41,  61 => 39,  59 => 38,  38 => 19,  36 => 10,  33 => 9,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>*/
/*             {% block title %}*/
/*                 Platingaming*/
/*             {% endblock %}*/
/*         </title>*/
/*         {% block stylesheets %}*/
/*             {% stylesheets filter="scssphp" output="css/app.css"*/
/*                 "%kernel.root_dir%/Resources/assets/css/bootstrap-3.3.4.min.css"*/
/*                 "%kernel.root_dir%/Resources/assets/css/bootstrap-theme-3.3.4.min.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/main.scss"*/
/*             %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/* */
/*         <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <div class="container-fluid">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="#">Dashboard</a>*/
/*                 </div>*/
/*                 <div class="navbar-collapse collapse">*/
/* */
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li class="dropdown">*/
/*                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                                 {% if app.user is not empty %}*/
/*                                     You're signed in as <strong>{{ app.user.username }}</strong> <span class="caret"></span></a>*/
/*                                 {% endif %}*/
/*                               <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('user_my_account') }}">Account details</a></li>*/
/*                                 <li><a href="{{ path('security_logout') }}">Logout</a></li>*/
/*                               </ul>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="container-fluid">*/
/* */
/*             <div class="row">*/
/*                 <div class="col-sm-3 col-md-2 sidebar">*/
/*                     <ul class="nav nav-sidebar">*/
/*                         <li id="my-tasks" class="{{ (app.request.uri == url('task_developer_list')) ? 'active' : '' }}"><a href="{{ path('task_developer_list') }}">My tasks</a></li>*/
/*                         {% if is_manager() %}*/
/*                             <li id="tasks" class="{{ (app.request.uri == url('task_manager_list')) ? 'active' : '' }}"><a href="{{ path('task_manager_list') }}">All tasks</a></li>*/
/*                         {% endif %}*/
/*                         <li id="statuses" class="{{ (app.request.uri == url('status_list')) ? 'active' : '' }}"><a href="{{ path('status_list') }}">Statuses</a></li>*/
/*                         <li id="users" class="{{ (app.request.uri == url('user_list')) ? 'active' : '' }}"><a href="{{ path('user_list') }}">Users</a></li>*/
/*                     </ul>*/
/* */
/*                 </div>*/
/*                 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/* */
/*                     {# breadcrumbsy #}*/
/*                     {% block breadcrumbs %}*/
/*                     <ol class="breadcrumb">*/
/*                         <li><a href="#">Home</a></li>*/
/*                     </ol>*/
/*                     {% endblock %}*/
/* */
/*                     {# flash messages #}*/
/* */
/*                     <div class="container alerts">*/
/*                     {% for type,messages in app.session.flashbag.all() %} */
/*                         {% for msg in messages %}*/
/*                             <div class="alert alert-{{ type }}">{{ msg|trans }}</div>*/
/*                         {% endfor %}*/
/*                     {% endfor %}*/
/*                     </div>*/
/* */
/*         {% block body %}*/
/*              </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             {% javascripts output="js/app.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/jquery-3.1.0.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-3.3.4.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/main.js"*/
/*             %}*/
/*              <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
