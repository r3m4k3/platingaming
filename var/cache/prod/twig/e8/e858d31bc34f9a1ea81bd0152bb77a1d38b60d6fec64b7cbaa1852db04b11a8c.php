<?php

/* tasks/list-manager.html.twig */
class __TwigTemplate_67270fcef7a666a48b0e737ba38174ab15e7923d65ac5c8ecbb5d3b61aa5fec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tasks/list-manager.html.twig", 1);
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
    <li><a href=\"\">Tasks list</a></li>
</ol>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <h3>All tasks</h3>
    <br/>
    Filter: 
    <form method=\"GET\" id=\"assignee-filter\">
      <select name=\"assignee\">
        <option disabled selected value>-- Select an assignee --</option>
        <option value=\"unassigned\">Show only unassigned</option>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((( !(null === (isset($context["assignee"]) ? $context["assignee"] : null)) && ($this->getAttribute((isset($context["assignee"]) ? $context["assignee"] : null), "username", array()) == $this->getAttribute($context["user"], "username", array())))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </select> 
      <button type=\"submit\" class=\"btn-primary btn btn-xs\">Search</button>
    </form>
      | <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("task_manager_list");
        echo "\">Reset filter</a>
  \t<table class=\"table table-striped\">
  \t\t<thead>
  \t\t\t<th>No</th>
  \t\t\t<th>Title</th>
        <th>Assignee</th>
  \t\t\t<th>Status</th>
  \t\t\t<th>Action</th>
  \t\t</thead>
  \t\t<tbody>
  \t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 35
            echo "  \t\t\t<tr>
  \t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
  \t\t\t\t<td>
  \t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_show", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">
  \t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "
  \t\t\t\t\t</a>
  \t\t\t\t</td>
          <td>
            <select class=\"assignee-select\" data-task-id=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo $this->env->getExtension('routing')->getUrl("task_change_assignee");
            echo "\">
              <option disabled selected value> -- select an assignee -- </option>
              ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 46
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" ";
                echo ((( !(null === $this->getAttribute($context["task"], "assignee", array())) && ($this->getAttribute($this->getAttribute($context["task"], "assignee", array()), "username", array()) == $this->getAttribute($context["user"], "username", array())))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </select>
            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_unassign", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"Click here to unassign the task \">
              <span class=\"glyphicon glyphicon-remove\"></span>
            </a>
          </td>
  \t\t\t\t<td>
            ";
            // line 54
            if (($this->getAttribute($this->getAttribute($context["task"], "status", array()), "name", array()) == "NEW")) {
                // line 55
                echo "              <span class=\"label label-danger\">
            ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 56
$context["task"], "status", array()), "name", array()) == "IN PROGRESS")) {
                // line 57
                echo "              <span class=\"label label-warning\">
            ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 58
$context["task"], "status", array()), "name", array()) == "REVIEW")) {
                // line 59
                echo "              <span class=\"label label-info\">
            ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 60
$context["task"], "status", array()), "name", array()) == "DONE")) {
                // line 61
                echo "              <span class=\"label label-success\">
            ";
            } else {
                // line 63
                echo "              <span class=\"label label-default\">
            ";
            }
            // line 65
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "status", array()), "name", array()), "html", null, true);
            echo "
              </span>
          </td>
  \t\t\t\t<td>
  \t\t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_edit", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">
  \t\t\t\t\t\t<span class=\"glyphicon glyphicon-edit\"></span>
  \t\t\t\t\t</a>
  \t\t\t\t\t<a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_remove", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">
  \t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
  \t\t\t\t\t</a>
  \t\t\t\t</td>
  \t\t\t</tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 78
            echo "        <tr>
          <td colspan=\"5\">No records found</td>
        </tr>
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "  \t\t</tbody>
  \t</table>
  <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("task_add");
        echo "\" class=\"btn btn-primary btn-sm\">
      <i class=\"glyphicon glyphicon-white glyphicon-plus\"></i> Add task
  </a>
";
    }

    public function getTemplateName()
    {
        return "tasks/list-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 84,  226 => 82,  217 => 78,  198 => 72,  192 => 69,  184 => 65,  180 => 63,  176 => 61,  174 => 60,  171 => 59,  169 => 58,  166 => 57,  164 => 56,  161 => 55,  159 => 54,  151 => 49,  148 => 48,  135 => 46,  131 => 45,  124 => 43,  117 => 39,  113 => 38,  108 => 36,  105 => 35,  87 => 34,  74 => 24,  69 => 21,  56 => 19,  52 => 18,  43 => 11,  40 => 10,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumbs %}*/
/* <ol class="breadcrumb">*/
/*     <li><a href="#">Home</a></li>*/
/*     <li><a href="">Tasks list</a></li>*/
/* </ol>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h3>All tasks</h3>*/
/*     <br/>*/
/*     Filter: */
/*     <form method="GET" id="assignee-filter">*/
/*       <select name="assignee">*/
/*         <option disabled selected value>-- Select an assignee --</option>*/
/*         <option value="unassigned">Show only unassigned</option>*/
/*         {% for user in users %}*/
/*           <option value="{{ user.id }}" {{ assignee is not null and assignee.username == user.username ? 'selected' : '' }}>{{ user.username }}</option>*/
/*         {% endfor %}*/
/*       </select> */
/*       <button type="submit" class="btn-primary btn btn-xs">Search</button>*/
/*     </form>*/
/*       | <a href="{{ path('task_manager_list') }}">Reset filter</a>*/
/*   	<table class="table table-striped">*/
/*   		<thead>*/
/*   			<th>No</th>*/
/*   			<th>Title</th>*/
/*         <th>Assignee</th>*/
/*   			<th>Status</th>*/
/*   			<th>Action</th>*/
/*   		</thead>*/
/*   		<tbody>*/
/*   		{% for task in tasks %}*/
/*   			<tr>*/
/*   				<td>{{ loop.index }}</td>*/
/*   				<td>*/
/*   					<a href="{{ path('task_show', {'id': task.id }) }}">*/
/*   						{{ task.title }}*/
/*   					</a>*/
/*   				</td>*/
/*           <td>*/
/*             <select class="assignee-select" data-task-id="{{ task.id }}" data-url="{{ url('task_change_assignee') }}">*/
/*               <option disabled selected value> -- select an assignee -- </option>*/
/*               {% for user in users %}*/
/*                 <option value="{{ user.id }}" {{ task.assignee is not null and task.assignee.username == user.username ? 'selected' : '' }}>{{ user.username }}</option>*/
/*               {% endfor %}*/
/*             </select>*/
/*             <a href="{{ path('task_unassign', {'id': task.id}) }}" data-toggle="tooltip" title="Click here to unassign the task ">*/
/*               <span class="glyphicon glyphicon-remove"></span>*/
/*             </a>*/
/*           </td>*/
/*   				<td>*/
/*             {% if task.status.name == 'NEW' %}*/
/*               <span class="label label-danger">*/
/*             {% elseif task.status.name == 'IN PROGRESS' %}*/
/*               <span class="label label-warning">*/
/*             {% elseif task.status.name == 'REVIEW' %}*/
/*               <span class="label label-info">*/
/*             {% elseif task.status.name == 'DONE' %}*/
/*               <span class="label label-success">*/
/*             {% else %}*/
/*               <span class="label label-default">*/
/*             {% endif %}*/
/*                 {{ task.status.name }}*/
/*               </span>*/
/*           </td>*/
/*   				<td>*/
/*   					<a href="{{ path('task_edit', {'id': task.id}) }}">*/
/*   						<span class="glyphicon glyphicon-edit"></span>*/
/*   					</a>*/
/*   					<a href="{{ path('task_remove', {'id': task.id}) }}">*/
/*   						<span class="glyphicon glyphicon-remove"></span>*/
/*   					</a>*/
/*   				</td>*/
/*   			</tr>*/
/*         {% else %}*/
/*         <tr>*/
/*           <td colspan="5">No records found</td>*/
/*         </tr>*/
/*   		{% endfor %}*/
/*   		</tbody>*/
/*   	</table>*/
/*   <a href="{{ path('task_add') }}" class="btn btn-primary btn-sm">*/
/*       <i class="glyphicon glyphicon-white glyphicon-plus"></i> Add task*/
/*   </a>*/
/* {% endblock %}*/
/* */
