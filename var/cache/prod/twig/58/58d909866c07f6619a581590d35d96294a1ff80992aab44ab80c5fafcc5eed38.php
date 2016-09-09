<?php

/* comment/add.html.twig */
class __TwigTemplate_ea954d5a2823df77f7bcca05d4a299a50fcc210f773bcba2252708c65a8be4b9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 4
        echo "<ol class=\"breadcrumb\">
    <li><a href=\"#\">Home</a></li>
    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("task_list");
        echo "\">Tasks list</a></li>
    <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), "html", null, true);
        echo "</a></li>
    <li><a href=\"\">Add comment</a></li>
</ol>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "form_theme.html.twig"));
        // line 14
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "reset", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'row');
        echo "
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
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
        return array (  73 => 18,  69 => 17,  65 => 16,  61 => 15,  56 => 14,  53 => 13,  50 => 12,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
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
