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
        $__internal_6b45936e21a87f7ffdc24abc58ef051d5c6dac8ad6cc82b82c92dccb5da5ceb8 = $this->env->getExtension("native_profiler");
        $__internal_6b45936e21a87f7ffdc24abc58ef051d5c6dac8ad6cc82b82c92dccb5da5ceb8->enter($__internal_6b45936e21a87f7ffdc24abc58ef051d5c6dac8ad6cc82b82c92dccb5da5ceb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6b45936e21a87f7ffdc24abc58ef051d5c6dac8ad6cc82b82c92dccb5da5ceb8->leave($__internal_6b45936e21a87f7ffdc24abc58ef051d5c6dac8ad6cc82b82c92dccb5da5ceb8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_67c011030b6289e606b34ec1461a7170c93f79f0c48be7bd0c58deccf6646827 = $this->env->getExtension("native_profiler");
        $__internal_67c011030b6289e606b34ec1461a7170c93f79f0c48be7bd0c58deccf6646827->enter($__internal_67c011030b6289e606b34ec1461a7170c93f79f0c48be7bd0c58deccf6646827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Platingaming
            ";
        
        $__internal_67c011030b6289e606b34ec1461a7170c93f79f0c48be7bd0c58deccf6646827->leave($__internal_67c011030b6289e606b34ec1461a7170c93f79f0c48be7bd0c58deccf6646827_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_749607be618e6037b071de9455d0b0a0ede2b67fa5e138729589964151e59c5d = $this->env->getExtension("native_profiler");
        $__internal_749607be618e6037b071de9455d0b0a0ede2b67fa5e138729589964151e59c5d->enter($__internal_749607be618e6037b071de9455d0b0a0ede2b67fa5e138729589964151e59c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_749607be618e6037b071de9455d0b0a0ede2b67fa5e138729589964151e59c5d->leave($__internal_749607be618e6037b071de9455d0b0a0ede2b67fa5e138729589964151e59c5d_prof);

    }

    // line 69
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_1d66e8eb710efe5b87cba78521c8ad7405d1fb5994d8b2426469b201ecbb3145 = $this->env->getExtension("native_profiler");
        $__internal_1d66e8eb710efe5b87cba78521c8ad7405d1fb5994d8b2426469b201ecbb3145->enter($__internal_1d66e8eb710efe5b87cba78521c8ad7405d1fb5994d8b2426469b201ecbb3145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 70
        echo "                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                    </ol>
                    ";
        
        $__internal_1d66e8eb710efe5b87cba78521c8ad7405d1fb5994d8b2426469b201ecbb3145->leave($__internal_1d66e8eb710efe5b87cba78521c8ad7405d1fb5994d8b2426469b201ecbb3145_prof);

    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5d7f740220bc627f11b5ad0604d3752b2fa8d010cd5f793a38c6a6f01e65866 = $this->env->getExtension("native_profiler");
        $__internal_a5d7f740220bc627f11b5ad0604d3752b2fa8d010cd5f793a38c6a6f01e65866->enter($__internal_a5d7f740220bc627f11b5ad0604d3752b2fa8d010cd5f793a38c6a6f01e65866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "             </div>
        </div>
    </div>

        ";
        
        $__internal_a5d7f740220bc627f11b5ad0604d3752b2fa8d010cd5f793a38c6a6f01e65866->leave($__internal_a5d7f740220bc627f11b5ad0604d3752b2fa8d010cd5f793a38c6a6f01e65866_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3281e3a65b76e0baf2248207f91e9f847cd7c2e00423f9ab4ee1e082725450e8 = $this->env->getExtension("native_profiler");
        $__internal_3281e3a65b76e0baf2248207f91e9f847cd7c2e00423f9ab4ee1e082725450e8->enter($__internal_3281e3a65b76e0baf2248207f91e9f847cd7c2e00423f9ab4ee1e082725450e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3281e3a65b76e0baf2248207f91e9f847cd7c2e00423f9ab4ee1e082725450e8->leave($__internal_3281e3a65b76e0baf2248207f91e9f847cd7c2e00423f9ab4ee1e082725450e8_prof);

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
