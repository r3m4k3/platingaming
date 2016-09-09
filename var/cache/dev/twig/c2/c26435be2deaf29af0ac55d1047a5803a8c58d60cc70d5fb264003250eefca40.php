<?php

/* default/login.html.twig */
class __TwigTemplate_0404b8452ee182b53addf4ef696851e631f597d3cce7ff884f32b7fa2e88e380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f98f298678d65ef46064d8e8641105c807c265250f9ed08b8591c704a5fe3443 = $this->env->getExtension("native_profiler");
        $__internal_f98f298678d65ef46064d8e8641105c807c265250f9ed08b8591c704a5fe3443->enter($__internal_f98f298678d65ef46064d8e8641105c807c265250f9ed08b8591c704a5fe3443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

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
        // line 18
        echo "    </head>
    <body>


        <div class=\"container\">
            ";
        // line 23
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 24
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array())), "html", null, true);
            echo "</div>
            ";
        }
        // line 26
        echo "
            <form method=\"post\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("security_login_check");
        echo "\" class=\"form-signin\" role=\"form\" novalidate>
                <h2 class=\"form-signin-heading\">Please sign in</h2>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Login or e-mail address\" required autofocus>
                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
            </form>

        </div> <!-- /container -->

    </body>
</html>
";
        
        $__internal_f98f298678d65ef46064d8e8641105c807c265250f9ed08b8591c704a5fe3443->leave($__internal_f98f298678d65ef46064d8e8641105c807c265250f9ed08b8591c704a5fe3443_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_10abdd94e2e3c440bd0275c480f26eabb1f81bf23b9ecf1897903b587a17890b = $this->env->getExtension("native_profiler");
        $__internal_10abdd94e2e3c440bd0275c480f26eabb1f81bf23b9ecf1897903b587a17890b->enter($__internal_10abdd94e2e3c440bd0275c480f26eabb1f81bf23b9ecf1897903b587a17890b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Sign in
            ";
        
        $__internal_10abdd94e2e3c440bd0275c480f26eabb1f81bf23b9ecf1897903b587a17890b->leave($__internal_10abdd94e2e3c440bd0275c480f26eabb1f81bf23b9ecf1897903b587a17890b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_865defebf891b8090d11f3e66a06e727052b04872697e7ac045f77b16c7c84b6 = $this->env->getExtension("native_profiler");
        $__internal_865defebf891b8090d11f3e66a06e727052b04872697e7ac045f77b16c7c84b6->enter($__internal_865defebf891b8090d11f3e66a06e727052b04872697e7ac045f77b16c7c84b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6eb66a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6eb66a2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_bootstrap-3.3.4.min_1.css");
            // line 15
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "6eb66a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6eb66a2_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_signin_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "6eb66a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6eb66a2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "        ";
        
        $__internal_865defebf891b8090d11f3e66a06e727052b04872697e7ac045f77b16c7c84b6->leave($__internal_865defebf891b8090d11f3e66a06e727052b04872697e7ac045f77b16c7c84b6_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 17,  107 => 15,  102 => 11,  96 => 10,  88 => 7,  82 => 6,  66 => 31,  61 => 29,  56 => 27,  53 => 26,  47 => 24,  45 => 23,  38 => 18,  36 => 10,  33 => 9,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>*/
/*             {% block title %}*/
/*                 Sign in*/
/*             {% endblock %}*/
/*         </title>*/
/*         {% block stylesheets %}*/
/*             {% stylesheets filter="scssphp" output="css/app.css"*/
/*                 "%kernel.root_dir%/Resources/assets/css/bootstrap-3.3.4.min.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/signin.scss"*/
/*             %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/* */
/* */
/*         <div class="container">*/
/*             {% if error %}*/
/*                 <div class="alert alert-danger">{{ error.message|trans }}</div>*/
/*             {% endif %}*/
/* */
/*             <form method="post" action="{{ path('security_login_check') }}" class="form-signin" role="form" novalidate>*/
/*                 <h2 class="form-signin-heading">Please sign in</h2>*/
/*                 <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control" placeholder="Login or e-mail address" required autofocus>*/
/*                 <input type="password" id="password" name="_password" class="form-control" placeholder="Password" required>*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}"/>*/
/*                 <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>*/
/*             </form>*/
/* */
/*         </div> <!-- /container -->*/
/* */
/*     </body>*/
/* </html>*/
/* */
