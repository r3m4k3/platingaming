<?php

/* comment/add.html.twig */
class __TwigTemplate_8b24a9367018a647299f76c54b8c3a75e531c1d00679b943a33e8deaa4270f9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comment/add.html.twig", 1);
        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34e7147a7402c32ccb98f22bdddc39f3e6808a64c683a13c31f3410b487d00b5 = $this->env->getExtension("native_profiler");
        $__internal_34e7147a7402c32ccb98f22bdddc39f3e6808a64c683a13c31f3410b487d00b5->enter($__internal_34e7147a7402c32ccb98f22bdddc39f3e6808a64c683a13c31f3410b487d00b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34e7147a7402c32ccb98f22bdddc39f3e6808a64c683a13c31f3410b487d00b5->leave($__internal_34e7147a7402c32ccb98f22bdddc39f3e6808a64c683a13c31f3410b487d00b5_prof);

    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_79495e6522bfc9693c49efbd0224c9da314cce295e4780ff6422c5eafb2ae666 = $this->env->getExtension("native_profiler");
        $__internal_79495e6522bfc9693c49efbd0224c9da314cce295e4780ff6422c5eafb2ae666->enter($__internal_79495e6522bfc9693c49efbd0224c9da314cce295e4780ff6422c5eafb2ae666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 4
        echo "<ol class=\"breadcrumb\">
    <li><a href=\"#\">Home</a></li>
    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("task_list");
        echo "\">Tasks list</a></li>
    <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "title", array()), "html", null, true);
        echo "</a></li>
    <li><a href=\"\">Add comment</a></li>
</ol>
";
        
        $__internal_79495e6522bfc9693c49efbd0224c9da314cce295e4780ff6422c5eafb2ae666->leave($__internal_79495e6522bfc9693c49efbd0224c9da314cce295e4780ff6422c5eafb2ae666_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2475cf4808f11a116e048ca80f126cb5a090f20cb1c2ea417099f1ee6c599841 = $this->env->getExtension("native_profiler");
        $__internal_2475cf4808f11a116e048ca80f126cb5a090f20cb1c2ea417099f1ee6c599841->enter($__internal_2475cf4808f11a116e048ca80f126cb5a090f20cb1c2ea417099f1ee6c599841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "form_theme.html.twig"));
        // line 14
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reset", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2475cf4808f11a116e048ca80f126cb5a090f20cb1c2ea417099f1ee6c599841->leave($__internal_2475cf4808f11a116e048ca80f126cb5a090f20cb1c2ea417099f1ee6c599841_prof);

    }

    public function getTemplateName()
    {
        return "comment/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  84 => 17,  80 => 16,  76 => 15,  71 => 14,  68 => 13,  62 => 12,  49 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumbs %}*/
/* <ol class="breadcrumb">*/
/*     <li><a href="#">Home</a></li>*/
/*     <li><a href="{{ path('task_list') }}">Tasks list</a></li>*/
/*     <li><a href="{{ path('task_show', {'id': task.id }) }}">{{ task.title }}</a></li>*/
/*     <li><a href="">Add comment</a></li>*/
/* </ol>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% form_theme form 'form_theme.html.twig' %}*/
/*     {{ form_start(form, {'attr':{'novalidate':'novalidate'}}) }}*/
/*         {{ form_row(form.message) }}*/
/*         {{ form_row(form.reset) }}*/
/*         {{ form_row(form.save) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
