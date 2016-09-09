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
        $__internal_25aeae5324b34415619c5d870de80971b42d9265239a1be920454b51c01ed767 = $this->env->getExtension("native_profiler");
        $__internal_25aeae5324b34415619c5d870de80971b42d9265239a1be920454b51c01ed767->enter($__internal_25aeae5324b34415619c5d870de80971b42d9265239a1be920454b51c01ed767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25aeae5324b34415619c5d870de80971b42d9265239a1be920454b51c01ed767->leave($__internal_25aeae5324b34415619c5d870de80971b42d9265239a1be920454b51c01ed767_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47b8dd377fa61c11b3c6871d3a7124529b3b3d84fdbef1b8fbb238669a07f99e = $this->env->getExtension("native_profiler");
        $__internal_47b8dd377fa61c11b3c6871d3a7124529b3b3d84fdbef1b8fbb238669a07f99e->enter($__internal_47b8dd377fa61c11b3c6871d3a7124529b3b3d84fdbef1b8fbb238669a07f99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_47b8dd377fa61c11b3c6871d3a7124529b3b3d84fdbef1b8fbb238669a07f99e->leave($__internal_47b8dd377fa61c11b3c6871d3a7124529b3b3d84fdbef1b8fbb238669a07f99e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa680ae24e60c312d209b6281a65cc67ccc0f666ae8ce6e9ec50550cd304ec5a = $this->env->getExtension("native_profiler");
        $__internal_fa680ae24e60c312d209b6281a65cc67ccc0f666ae8ce6e9ec50550cd304ec5a->enter($__internal_fa680ae24e60c312d209b6281a65cc67ccc0f666ae8ce6e9ec50550cd304ec5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa680ae24e60c312d209b6281a65cc67ccc0f666ae8ce6e9ec50550cd304ec5a->leave($__internal_fa680ae24e60c312d209b6281a65cc67ccc0f666ae8ce6e9ec50550cd304ec5a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f566ca708c7a84d1864279eb3cede9239ad1702273ac885655832025ff386b40 = $this->env->getExtension("native_profiler");
        $__internal_f566ca708c7a84d1864279eb3cede9239ad1702273ac885655832025ff386b40->enter($__internal_f566ca708c7a84d1864279eb3cede9239ad1702273ac885655832025ff386b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f566ca708c7a84d1864279eb3cede9239ad1702273ac885655832025ff386b40->leave($__internal_f566ca708c7a84d1864279eb3cede9239ad1702273ac885655832025ff386b40_prof);

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
