<?php

/* tasks/show.html.twig */
class __TwigTemplate_633ece659b8ddb3bad14d242e2601e0c305c6f11a799b8b501cdebfe5039ad6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tasks/show.html.twig", 1);
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
        $__internal_e6bdcbb5f85e2a2a236c8ce1f57b32bda862e00cf11af66909310bb870f8cf55 = $this->env->getExtension("native_profiler");
        $__internal_e6bdcbb5f85e2a2a236c8ce1f57b32bda862e00cf11af66909310bb870f8cf55->enter($__internal_e6bdcbb5f85e2a2a236c8ce1f57b32bda862e00cf11af66909310bb870f8cf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tasks/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6bdcbb5f85e2a2a236c8ce1f57b32bda862e00cf11af66909310bb870f8cf55->leave($__internal_e6bdcbb5f85e2a2a236c8ce1f57b32bda862e00cf11af66909310bb870f8cf55_prof);

    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_ecec58c8dad4cb18ea5ecf17040fde9f6188c96ce63ea434a90bb8662f45c4b8 = $this->env->getExtension("native_profiler");
        $__internal_ecec58c8dad4cb18ea5ecf17040fde9f6188c96ce63ea434a90bb8662f45c4b8->enter($__internal_ecec58c8dad4cb18ea5ecf17040fde9f6188c96ce63ea434a90bb8662f45c4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 4
        echo "<ol class=\"breadcrumb\">
    <li><a href=\"#\">Home</a></li>
    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("task_list");
        echo "\">Tasks list</a></li>
    <li><a href=\"\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "title", array()), "html", null, true);
        echo "</a></li>
</ol>
";
        
        $__internal_ecec58c8dad4cb18ea5ecf17040fde9f6188c96ce63ea434a90bb8662f45c4b8->leave($__internal_ecec58c8dad4cb18ea5ecf17040fde9f6188c96ce63ea434a90bb8662f45c4b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cd78321929505f169117dd17e49e16e46da56767a926fc345b11eb7c901d935 = $this->env->getExtension("native_profiler");
        $__internal_8cd78321929505f169117dd17e49e16e46da56767a926fc345b11eb7c901d935->enter($__internal_8cd78321929505f169117dd17e49e16e46da56767a926fc345b11eb7c901d935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <h3>Task details</h3>
    <br/>
  \t<table class=\"table table-striped\">
      <tr>
        <th>Title: </th>
        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "title", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <th>Assignee: </th>
        <td>
          ";
        // line 22
        if ( !twig_test_empty($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "assignee", array()))) {
            // line 23
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "assignee", array()), "username", array()), "html", null, true);
            echo "
          ";
        } else {
            // line 25
            echo "            unassigned
          ";
        }
        // line 27
        echo "        </td>
      </tr>
      <tr>
        <th>Status: </th>
        <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "status", array()), "name", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <th>Created at: </th>
        <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "createdAt", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <th>Author: </th>
        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "author", array()), "username", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <th>Content: </th>
        <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "content", array()), "html", null, true);
        echo "</td>
      </tr>
  \t</table>
    <br/>
    <h3>Comments:</h3>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 49
            echo "      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()), "html", null, true);
            echo " @";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createdAt", array()), "d-m-Y H:i:s"), "html", null, true);
            echo " 
          ";
            // line 52
            if (($this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) {
                // line 53
                echo "            | <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_remove", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\">Remove</a>
          ";
            }
            // line 55
            echo "        </div>
        <div class=\"panel-body\">
          ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "message", array()), "html", null, true);
            echo "
        </div>
      </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "      No comments, sorry<br/><br/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "  \t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_add", array("taskId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : $this->getContext($context, "task")), "id", array()))), "html", null, true);
        echo "\">
      <button type=\"button\" class=\"btn btn-success\">Add comment</button>
    </a>
";
        
        $__internal_8cd78321929505f169117dd17e49e16e46da56767a926fc345b11eb7c901d935->leave($__internal_8cd78321929505f169117dd17e49e16e46da56767a926fc345b11eb7c901d935_prof);

    }

    public function getTemplateName()
    {
        return "tasks/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 63,  163 => 61,  154 => 57,  150 => 55,  144 => 53,  142 => 52,  136 => 51,  132 => 49,  127 => 48,  119 => 43,  112 => 39,  105 => 35,  98 => 31,  92 => 27,  88 => 25,  82 => 23,  80 => 22,  72 => 17,  65 => 12,  59 => 11,  49 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumbs %}*/
/* <ol class="breadcrumb">*/
/*     <li><a href="#">Home</a></li>*/
/*     <li><a href="{{ path('task_list') }}">Tasks list</a></li>*/
/*     <li><a href="">{{ task.title }}</a></li>*/
/* </ol>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h3>Task details</h3>*/
/*     <br/>*/
/*   	<table class="table table-striped">*/
/*       <tr>*/
/*         <th>Title: </th>*/
/*         <td>{{ task.title }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <th>Assignee: </th>*/
/*         <td>*/
/*           {% if task.assignee is not empty %}*/
/*             {{ task.assignee.username }}*/
/*           {% else %}*/
/*             unassigned*/
/*           {% endif %}*/
/*         </td>*/
/*       </tr>*/
/*       <tr>*/
/*         <th>Status: </th>*/
/*         <td>{{ task.status.name }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <th>Created at: </th>*/
/*         <td>{{ task.createdAt|date('d-m-Y H:i:s') }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <th>Author: </th>*/
/*         <td>{{ task.author.username }}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <th>Content: </th>*/
/*         <td>{{ task.content }}</td>*/
/*       </tr>*/
/*   	</table>*/
/*     <br/>*/
/*     <h3>Comments:</h3>*/
/*     {% for comment in comments %}*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           {{ comment.author.username }} @{{ comment.createdAt|date('d-m-Y H:i:s') }} */
/*           {% if comment.author.username == app.user.username %}*/
/*             | <a href="{{ path('comment_remove', {'id': comment.id }) }}">Remove</a>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           {{ comment.message }}*/
/*         </div>*/
/*       </div>*/
/*     {% else %}*/
/*       No comments, sorry<br/><br/>*/
/*     {% endfor %}*/
/*   	<a href="{{ path('comment_add', {'taskId': task.id }) }}">*/
/*       <button type="button" class="btn btn-success">Add comment</button>*/
/*     </a>*/
/* {% endblock %}*/
/* */
