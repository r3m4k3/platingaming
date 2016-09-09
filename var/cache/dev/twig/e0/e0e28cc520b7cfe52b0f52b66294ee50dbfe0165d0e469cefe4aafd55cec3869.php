<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1fba8143fc1150858bb57c4ecb6ec46b5913977feca3260dbc637ede8ce69b9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92eb96d37387b3ed71690bd8fdf5c34ba1210621f728d26354e89595dd376d7b = $this->env->getExtension("native_profiler");
        $__internal_92eb96d37387b3ed71690bd8fdf5c34ba1210621f728d26354e89595dd376d7b->enter($__internal_92eb96d37387b3ed71690bd8fdf5c34ba1210621f728d26354e89595dd376d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92eb96d37387b3ed71690bd8fdf5c34ba1210621f728d26354e89595dd376d7b->leave($__internal_92eb96d37387b3ed71690bd8fdf5c34ba1210621f728d26354e89595dd376d7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d368d64b504ad6fa5bd89c04679ca11feda29f763cc5dd3540ad3afb716c24f = $this->env->getExtension("native_profiler");
        $__internal_8d368d64b504ad6fa5bd89c04679ca11feda29f763cc5dd3540ad3afb716c24f->enter($__internal_8d368d64b504ad6fa5bd89c04679ca11feda29f763cc5dd3540ad3afb716c24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8d368d64b504ad6fa5bd89c04679ca11feda29f763cc5dd3540ad3afb716c24f->leave($__internal_8d368d64b504ad6fa5bd89c04679ca11feda29f763cc5dd3540ad3afb716c24f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b011f65a09aed629cc8f25a0b672c0154433d509a8b6cba2dc77c4e263a995ad = $this->env->getExtension("native_profiler");
        $__internal_b011f65a09aed629cc8f25a0b672c0154433d509a8b6cba2dc77c4e263a995ad->enter($__internal_b011f65a09aed629cc8f25a0b672c0154433d509a8b6cba2dc77c4e263a995ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b011f65a09aed629cc8f25a0b672c0154433d509a8b6cba2dc77c4e263a995ad->leave($__internal_b011f65a09aed629cc8f25a0b672c0154433d509a8b6cba2dc77c4e263a995ad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f1b614650236f3f37911373e1ab4496c36da4e917bcd3f09415a9acf3bb0fe4 = $this->env->getExtension("native_profiler");
        $__internal_0f1b614650236f3f37911373e1ab4496c36da4e917bcd3f09415a9acf3bb0fe4->enter($__internal_0f1b614650236f3f37911373e1ab4496c36da4e917bcd3f09415a9acf3bb0fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f1b614650236f3f37911373e1ab4496c36da4e917bcd3f09415a9acf3bb0fe4->leave($__internal_0f1b614650236f3f37911373e1ab4496c36da4e917bcd3f09415a9acf3bb0fe4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
