<?php

/* users/list.html.twig */
class __TwigTemplate_2d2c68f32981b6bd82a0f2477566f983da4aa86882f5a6a73bc682e3b8f49d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/list.html.twig", 1);
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
        echo $this->env->getExtension('routing')->getPath("user_my_account");
        echo "\">Users list</a></li>
</ol>
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  \t<table class=\"table table-striped\">
  \t\t<thead>
  \t\t\t<th>No</th>
  \t\t\t<th>Username</th>
  \t\t\t<th>E-mail address</th>
        <th>Status</th>
  \t\t\t<th>Action</th>
  \t\t</thead>
  \t\t<tbody>
  \t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "  \t\t\t<tr>
  \t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
          <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_get", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 26
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()) != $this->getAttribute($context["user"], "username", array()))) {
                // line 27
                echo "              ";
                if ($this->getAttribute($context["user"], "isEnabled", array())) {
                    // line 28
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_change_status", array("id" => $this->getAttribute($context["user"], "id", array()), "status" => 0)), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"Click here to disable the user \">
                  <span class=\"glyphicon glyphicon-ok\"></span> enabled
                </a>
              ";
                } else {
                    // line 32
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_change_status", array("id" => $this->getAttribute($context["user"], "id", array()), "status" => 1)), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"Click here to enable the user \">
                <span class=\"glyphicon glyphicon-minus\"></span> disabled
              </a>
              ";
                }
                // line 36
                echo "            ";
            } else {
                // line 37
                echo "              ---
            ";
            }
            // line 39
            echo "          </td>
  \t\t\t\t<td>
            ";
            // line 41
            if ($this->env->getExtension('twig_extension')->isManager()) {
                // line 42
                echo "                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()) != $this->getAttribute($context["user"], "username", array()))) {
                    // line 43
                    echo "        \t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_remove", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\">
        \t\t\t\t\t\t<span class=\"glyphicon glyphicon-remove\"></span>
        \t\t\t\t\t</a>
                ";
                } else {
                    // line 47
                    echo "                  ---
                ";
                }
                // line 49
                echo "            ";
            } else {
                // line 50
                echo "              ---
            ";
            }
            // line 52
            echo "  \t\t\t\t</td>
  \t\t\t</tr>
  \t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  \t\t</tbody>
  \t</table>
    ";
        // line 57
        if ($this->env->getExtension('twig_extension')->isManager()) {
            // line 58
            echo "    \t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_add");
            echo "\" class=\"btn btn-primary btn-sm\">
        <i class=\"glyphicon glyphicon-white glyphicon-plus\"></i> Add user
      </a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "users/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 58,  168 => 57,  164 => 55,  148 => 52,  144 => 50,  141 => 49,  137 => 47,  129 => 43,  126 => 42,  124 => 41,  120 => 39,  116 => 37,  113 => 36,  105 => 32,  97 => 28,  94 => 27,  92 => 26,  87 => 24,  81 => 23,  77 => 22,  74 => 21,  57 => 20,  46 => 11,  43 => 10,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block breadcrumbs %}*/
/* <ol class="breadcrumb">*/
/*     <li><a href="#">Home</a></li>*/
/*     <li><a href="{{ path('user_my_account') }}">Users list</a></li>*/
/* </ol>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   	<table class="table table-striped">*/
/*   		<thead>*/
/*   			<th>No</th>*/
/*   			<th>Username</th>*/
/*   			<th>E-mail address</th>*/
/*         <th>Status</th>*/
/*   			<th>Action</th>*/
/*   		</thead>*/
/*   		<tbody>*/
/*   		{% for user in users %}*/
/*   			<tr>*/
/*   				<td>{{ loop.index }}</td>*/
/*           <td><a href="{{ path('user_get', {'id': user.id }) }}">{{ user.username }}</a></td>*/
/*           <td>{{ user.email }}</td>*/
/*           <td>*/
/*             {% if app.user.username != user.username %}*/
/*               {% if user.isEnabled %}*/
/*                 <a href="{{ path('user_change_status', {'id': user.id, 'status': 0}) }}" data-toggle="tooltip" title="Click here to disable the user ">*/
/*                   <span class="glyphicon glyphicon-ok"></span> enabled*/
/*                 </a>*/
/*               {% else %}*/
/*               <a href="{{ path('user_change_status', {'id': user.id, 'status': 1}) }}" data-toggle="tooltip" title="Click here to enable the user ">*/
/*                 <span class="glyphicon glyphicon-minus"></span> disabled*/
/*               </a>*/
/*               {% endif %}*/
/*             {% else %}*/
/*               ---*/
/*             {% endif %}*/
/*           </td>*/
/*   				<td>*/
/*             {% if is_manager() %}*/
/*                 {% if app.user.username != user.username %}*/
/*         					<a href="{{ path('user_remove', {'id': user.id }) }}">*/
/*         						<span class="glyphicon glyphicon-remove"></span>*/
/*         					</a>*/
/*                 {% else %}*/
/*                   ---*/
/*                 {% endif %}*/
/*             {% else %}*/
/*               ---*/
/*             {% endif %}*/
/*   				</td>*/
/*   			</tr>*/
/*   		{% endfor %}*/
/*   		</tbody>*/
/*   	</table>*/
/*     {% if is_manager() %}*/
/*     	<a href="{{ path('user_add') }}" class="btn btn-primary btn-sm">*/
/*         <i class="glyphicon glyphicon-white glyphicon-plus"></i> Add user*/
/*       </a>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
