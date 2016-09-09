<?php

/* base.html.twig */
class __TwigTemplate_28d89b0044a5e0b1a9436f585df4f4877760c9c38117b81c2284a2d189bca208 extends Twig_Template
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
        $__internal_e9568b7b40fbe980101e1e499b24385d49f28b27d3a7694a97bc613d4f4d40cb = $this->env->getExtension("native_profiler");
        $__internal_e9568b7b40fbe980101e1e499b24385d49f28b27d3a7694a97bc613d4f4d40cb->enter($__internal_e9568b7b40fbe980101e1e499b24385d49f28b27d3a7694a97bc613d4f4d40cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 39
            echo "                                    You're signed in as <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("task_developer_list"))) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("task_developer_list");
        echo "\">My tasks</a></li>
                        ";
        // line 58
        if ($this->env->getExtension('twig_extension')->isManager()) {
            // line 59
            echo "                            <li id=\"tasks\" class=\"";
            echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("task_manager_list"))) ? ("active") : (""));
            echo "\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("task_manager_list");
            echo "\">All tasks</a></li>
                        ";
        }
        // line 61
        echo "                        <li id=\"statuses\" class=\"";
        echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("status_list"))) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("status_list");
        echo "\">Statuses</a></li>
                        <li id=\"users\" class=\"";
        // line 62
        echo ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()) == $this->env->getExtension('routing')->getUrl("user_list"))) ? ("active") : (""));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_e9568b7b40fbe980101e1e499b24385d49f28b27d3a7694a97bc613d4f4d40cb->leave($__internal_e9568b7b40fbe980101e1e499b24385d49f28b27d3a7694a97bc613d4f4d40cb_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b04415b750a3fcee5095fe35ddfa001531de984cda8b11a7521e63e9ca861ed = $this->env->getExtension("native_profiler");
        $__internal_8b04415b750a3fcee5095fe35ddfa001531de984cda8b11a7521e63e9ca861ed->enter($__internal_8b04415b750a3fcee5095fe35ddfa001531de984cda8b11a7521e63e9ca861ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Platingaming
            ";
        
        $__internal_8b04415b750a3fcee5095fe35ddfa001531de984cda8b11a7521e63e9ca861ed->leave($__internal_8b04415b750a3fcee5095fe35ddfa001531de984cda8b11a7521e63e9ca861ed_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f00c2aba05adb2e698bab08b4c8a464fa5a2944322f026a657e226a5f28a8a2d = $this->env->getExtension("native_profiler");
        $__internal_f00c2aba05adb2e698bab08b4c8a464fa5a2944322f026a657e226a5f28a8a2d->enter($__internal_f00c2aba05adb2e698bab08b4c8a464fa5a2944322f026a657e226a5f28a8a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d5d58a6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d5d58a6_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_bootstrap-3.3.4.min_1.css");
            // line 16
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "d5d58a6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d5d58a6_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_bootstrap-theme-3.3.4.min_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "d5d58a6_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d5d58a6_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_main_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "d5d58a6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d5d58a6") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "        ";
        
        $__internal_f00c2aba05adb2e698bab08b4c8a464fa5a2944322f026a657e226a5f28a8a2d->leave($__internal_f00c2aba05adb2e698bab08b4c8a464fa5a2944322f026a657e226a5f28a8a2d_prof);

    }

    // line 69
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_013e4e74fa2e7303f8913ed0df794d208b346e7b78eac75ac349814bc432c77d = $this->env->getExtension("native_profiler");
        $__internal_013e4e74fa2e7303f8913ed0df794d208b346e7b78eac75ac349814bc432c77d->enter($__internal_013e4e74fa2e7303f8913ed0df794d208b346e7b78eac75ac349814bc432c77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 70
        echo "                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                    </ol>
                    ";
        
        $__internal_013e4e74fa2e7303f8913ed0df794d208b346e7b78eac75ac349814bc432c77d->leave($__internal_013e4e74fa2e7303f8913ed0df794d208b346e7b78eac75ac349814bc432c77d_prof);

    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a4daf60e2b76ceafdfff50b3b1442dbb9c43576a3e09a93c7c281701c6828e3 = $this->env->getExtension("native_profiler");
        $__internal_2a4daf60e2b76ceafdfff50b3b1442dbb9c43576a3e09a93c7c281701c6828e3->enter($__internal_2a4daf60e2b76ceafdfff50b3b1442dbb9c43576a3e09a93c7c281701c6828e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "             </div>
        </div>
    </div>

        ";
        
        $__internal_2a4daf60e2b76ceafdfff50b3b1442dbb9c43576a3e09a93c7c281701c6828e3->leave($__internal_2a4daf60e2b76ceafdfff50b3b1442dbb9c43576a3e09a93c7c281701c6828e3_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3246ac7d61f77d4f48c9e528d1476751fa2f9e11127d3bde63f855374ba7b7f3 = $this->env->getExtension("native_profiler");
        $__internal_3246ac7d61f77d4f48c9e528d1476751fa2f9e11127d3bde63f855374ba7b7f3->enter($__internal_3246ac7d61f77d4f48c9e528d1476751fa2f9e11127d3bde63f855374ba7b7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7e3bfcc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e3bfcc_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_jquery-3.1.0.min_1.js");
            // line 97
            echo "             <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "7e3bfcc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e3bfcc_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_bootstrap-3.3.4.min_2.js");
            echo "             <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "7e3bfcc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e3bfcc_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_main_3.js");
            echo "             <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "7e3bfcc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e3bfcc") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app.js");
            echo "             <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 99
        echo "        ";
        
        $__internal_3246ac7d61f77d4f48c9e528d1476751fa2f9e11127d3bde63f855374ba7b7f3->leave($__internal_3246ac7d61f77d4f48c9e528d1476751fa2f9e11127d3bde63f855374ba7b7f3_prof);

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
        return array (  311 => 99,  285 => 97,  280 => 92,  274 => 91,  263 => 86,  257 => 85,  247 => 70,  241 => 69,  234 => 18,  208 => 16,  203 => 11,  197 => 10,  189 => 7,  183 => 6,  174 => 100,  171 => 91,  169 => 85,  165 => 83,  159 => 82,  148 => 80,  144 => 79,  138 => 78,  134 => 76,  131 => 74,  128 => 69,  117 => 62,  110 => 61,  102 => 59,  100 => 58,  94 => 57,  77 => 43,  73 => 42,  70 => 41,  64 => 39,  62 => 38,  41 => 19,  39 => 10,  36 => 9,  34 => 6,  27 => 1,);
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
