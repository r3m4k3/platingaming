<?php

/* tasks/show.html.twig */
class __TwigTemplate_1f58361f5f32db2dd8f07936e17e9209586d88b2abdb2c9d4420eb8f8cbf9342 extends Twig_Template
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
    <li><a href=\"\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), "html", null, true);
        echo "</a></li>
</ol>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <h3>Task details</h3>
    <br/>
  \t<table class=\"table table-striped\">
      <tr>
        <th>Title: </th>
        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "title", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <th>Assignee: </th>
        <td>
          ";
        // line 22
        if ( !twig_test_empty($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "assignee", array()))) {
            // line 23
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "assignee", array()), "username", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "status", array()), "name", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <th>Created at: </th>
        <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "createdAt", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <th>Author: </th>
        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "author", array()), "username", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <th>Content: </th>
        <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "content", array()), "html", null, true);
        echo "</td>
      </tr>
  \t</table>
    <br/>
    <h3>Comments:</h3>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
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
            if (($this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()))) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_add", array("taskId" => $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id", array()))), "html", null, true);
        echo "\">
      <button type=\"button\" class=\"btn btn-success\">Add comment</button>
    </a>
";
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
        return array (  155 => 63,  148 => 61,  139 => 57,  135 => 55,  129 => 53,  127 => 52,  121 => 51,  117 => 49,  112 => 48,  104 => 43,  97 => 39,  90 => 35,  83 => 31,  77 => 27,  73 => 25,  67 => 23,  65 => 22,  57 => 17,  50 => 12,  47 => 11,  40 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
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
