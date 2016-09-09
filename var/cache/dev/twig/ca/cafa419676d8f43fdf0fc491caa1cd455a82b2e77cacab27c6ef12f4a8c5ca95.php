<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b7f389813bce1c9b0498ec14a13fc3b7490645863ba53e5ba2735c852fc56879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ad03e96cfb21f04d9b13df72ca99a243e28e0817ab56a0a35db427622cd402a = $this->env->getExtension("native_profiler");
        $__internal_6ad03e96cfb21f04d9b13df72ca99a243e28e0817ab56a0a35db427622cd402a->enter($__internal_6ad03e96cfb21f04d9b13df72ca99a243e28e0817ab56a0a35db427622cd402a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ad03e96cfb21f04d9b13df72ca99a243e28e0817ab56a0a35db427622cd402a->leave($__internal_6ad03e96cfb21f04d9b13df72ca99a243e28e0817ab56a0a35db427622cd402a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e76789ea9c541c13bb57124176a2a5aaf9f041a436f59197805cc189de33a374 = $this->env->getExtension("native_profiler");
        $__internal_e76789ea9c541c13bb57124176a2a5aaf9f041a436f59197805cc189de33a374->enter($__internal_e76789ea9c541c13bb57124176a2a5aaf9f041a436f59197805cc189de33a374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e76789ea9c541c13bb57124176a2a5aaf9f041a436f59197805cc189de33a374->leave($__internal_e76789ea9c541c13bb57124176a2a5aaf9f041a436f59197805cc189de33a374_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_57c940adb9e3b642551a84d74d8b9a7eb19fd44614d475a5e6fd75319df493e8 = $this->env->getExtension("native_profiler");
        $__internal_57c940adb9e3b642551a84d74d8b9a7eb19fd44614d475a5e6fd75319df493e8->enter($__internal_57c940adb9e3b642551a84d74d8b9a7eb19fd44614d475a5e6fd75319df493e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_57c940adb9e3b642551a84d74d8b9a7eb19fd44614d475a5e6fd75319df493e8->leave($__internal_57c940adb9e3b642551a84d74d8b9a7eb19fd44614d475a5e6fd75319df493e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e42b1d5774c2e325723726e7c6ab1208527652ae521ef7e857d4325507b5b97 = $this->env->getExtension("native_profiler");
        $__internal_6e42b1d5774c2e325723726e7c6ab1208527652ae521ef7e857d4325507b5b97->enter($__internal_6e42b1d5774c2e325723726e7c6ab1208527652ae521ef7e857d4325507b5b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6e42b1d5774c2e325723726e7c6ab1208527652ae521ef7e857d4325507b5b97->leave($__internal_6e42b1d5774c2e325723726e7c6ab1208527652ae521ef7e857d4325507b5b97_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
