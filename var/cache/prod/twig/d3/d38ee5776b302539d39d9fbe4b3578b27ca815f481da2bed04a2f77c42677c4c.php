<?php

/* default/login.html.twig */
class __TwigTemplate_0d5d6f701f9ad309b398ed53ae951fad2650bbe7a23891e4162e2ae0053c5b8e extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 24
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array())), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "                Sign in
            ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6eb66a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6eb66a2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_bootstrap-3.3.4.min_1.css");
            // line 15
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
            // asset "6eb66a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6eb66a2_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_signin_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "6eb66a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6eb66a2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "        ";
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
        return array (  112 => 17,  92 => 15,  87 => 11,  84 => 10,  79 => 7,  76 => 6,  63 => 31,  58 => 29,  53 => 27,  50 => 26,  44 => 24,  42 => 23,  35 => 18,  33 => 10,  30 => 9,  28 => 6,  21 => 1,);
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
