<?php

/* form_theme.html.twig */
class __TwigTemplate_8098bc3f02e09269b730ca79e401f38ae02e8b3eafc1bbfad03edef97740317d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'form_errors' => array($this, 'block_form_errors'),
            'button_row' => array($this, 'block_button_row'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f99575c81bdc03bc0e54d597631c79410c415651e9627bd1b9655947dc6b1f8 = $this->env->getExtension("native_profiler");
        $__internal_8f99575c81bdc03bc0e54d597631c79410c415651e9627bd1b9655947dc6b1f8->enter($__internal_8f99575c81bdc03bc0e54d597631c79410c415651e9627bd1b9655947dc6b1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_theme.html.twig"));

        // line 1
        $this->displayBlock('form_start', $context, $blocks);
        // line 16
        echo "        
";
        // line 17
        $this->displayBlock('form_row', $context, $blocks);
        // line 28
        echo "        
";
        // line 29
        $this->displayBlock('form_label', $context, $blocks);
        // line 46
        echo "        
";
        // line 47
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "    
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 63
        echo "    
";
        // line 64
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 87
        echo "    
";
        // line 88
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('form_errors', $context, $blocks);
        // line 107
        echo "        
";
        // line 108
        $this->displayBlock('button_row', $context, $blocks);
        // line 117
        echo "        
";
        // line 118
        $this->displayBlock('button_widget', $context, $blocks);
        // line 127
        echo "    
";
        // line 128
        $this->displayBlock('submit_widget', $context, $blocks);
        
        $__internal_8f99575c81bdc03bc0e54d597631c79410c415651e9627bd1b9655947dc6b1f8->leave($__internal_8f99575c81bdc03bc0e54d597631c79410c415651e9627bd1b9655947dc6b1f8_prof);

    }

    // line 1
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2a8be4a1644585a589f036f528a7d072a2ec5c9de7841d95f2f67beb2c741c79 = $this->env->getExtension("native_profiler");
        $__internal_2a8be4a1644585a589f036f528a7d072a2ec5c9de7841d95f2f67beb2c741c79->enter($__internal_2a8be4a1644585a589f036f528a7d072a2ec5c9de7841d95f2f67beb2c741c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 4
        echo "    ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 5
            echo "        ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $context["form_method"] = "POST";
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "form-horizontal")) : ("form-horizontal")))));
        // line 10
        echo "    <form name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
    ";
        // line 11
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 12
            echo "        <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2a8be4a1644585a589f036f528a7d072a2ec5c9de7841d95f2f67beb2c741c79->leave($__internal_2a8be4a1644585a589f036f528a7d072a2ec5c9de7841d95f2f67beb2c741c79_prof);

    }

    // line 17
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a79f76e3507c5f3e1efa4fa780a1fd3bcf0e4eadbe1ba99bcc49cde02a17e4a6 = $this->env->getExtension("native_profiler");
        $__internal_a79f76e3507c5f3e1efa4fa780a1fd3bcf0e4eadbe1ba99bcc49cde02a17e4a6->enter($__internal_a79f76e3507c5f3e1efa4fa780a1fd3bcf0e4eadbe1ba99bcc49cde02a17e4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 18
        ob_start();
        // line 19
        echo "    <div class=\"form-group";
        echo (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? (" has-error") : (""));
        echo "\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"col-sm-9\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a79f76e3507c5f3e1efa4fa780a1fd3bcf0e4eadbe1ba99bcc49cde02a17e4a6->leave($__internal_a79f76e3507c5f3e1efa4fa780a1fd3bcf0e4eadbe1ba99bcc49cde02a17e4a6_prof);

    }

    // line 29
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_973667e2b6ea809db8a36703cc1f6a04c7f5ac49dc7fba647114eecae24395c1 = $this->env->getExtension("native_profiler");
        $__internal_973667e2b6ea809db8a36703cc1f6a04c7f5ac49dc7fba647114eecae24395c1->enter($__internal_973667e2b6ea809db8a36703cc1f6a04c7f5ac49dc7fba647114eecae24395c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 30
        ob_start();
        // line 31
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 32
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 33
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 34
                echo "        ";
            }
            // line 35
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 36
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 37
                echo "        ";
            }
            // line 38
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " col-sm-3 control-label"))));
            // line 39
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 40
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 41
                echo "        ";
            }
            // line 42
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_973667e2b6ea809db8a36703cc1f6a04c7f5ac49dc7fba647114eecae24395c1->leave($__internal_973667e2b6ea809db8a36703cc1f6a04c7f5ac49dc7fba647114eecae24395c1_prof);

    }

    // line 47
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8ae29e8bbcad369daecdd240e52f46f515b00c0be298c75823dee4ff2a1a427b = $this->env->getExtension("native_profiler");
        $__internal_8ae29e8bbcad369daecdd240e52f46f515b00c0be298c75823dee4ff2a1a427b->enter($__internal_8ae29e8bbcad369daecdd240e52f46f515b00c0be298c75823dee4ff2a1a427b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 48
        ob_start();
        // line 49
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 50
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "file")) {
            // line 51
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
            // line 52
            echo "    ";
        }
        // line 53
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8ae29e8bbcad369daecdd240e52f46f515b00c0be298c75823dee4ff2a1a427b->leave($__internal_8ae29e8bbcad369daecdd240e52f46f515b00c0be298c75823dee4ff2a1a427b_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c26ffa98cc16f7e3885eafe776ee4c51f880e18cbad1f4225b036bd38e29209b = $this->env->getExtension("native_profiler");
        $__internal_c26ffa98cc16f7e3885eafe776ee4c51f880e18cbad1f4225b036bd38e29209b->enter($__internal_c26ffa98cc16f7e3885eafe776ee4c51f880e18cbad1f4225b036bd38e29209b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        ob_start();
        // line 59
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 60
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c26ffa98cc16f7e3885eafe776ee4c51f880e18cbad1f4225b036bd38e29209b->leave($__internal_c26ffa98cc16f7e3885eafe776ee4c51f880e18cbad1f4225b036bd38e29209b_prof);

    }

    // line 64
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d477059fb55426e6df89587ef5334c1b763f94392df7225128142b667c9fcb16 = $this->env->getExtension("native_profiler");
        $__internal_d477059fb55426e6df89587ef5334c1b763f94392df7225128142b667c9fcb16->enter($__internal_d477059fb55426e6df89587ef5334c1b763f94392df7225128142b667c9fcb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 65
        ob_start();
        // line 70
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 71
        echo "    <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
";
        // line 75
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 76
            echo "            ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 77
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            ";
            // line 78
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 79
                echo "                <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
            ";
            }
            // line 81
            echo "        ";
        }
        // line 82
        echo "        ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 83
        echo "        ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
    </select>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d477059fb55426e6df89587ef5334c1b763f94392df7225128142b667c9fcb16->leave($__internal_d477059fb55426e6df89587ef5334c1b763f94392df7225128142b667c9fcb16_prof);

    }

    // line 88
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_78916b6036532b869730cecbfa15a5a21373fe1e936a2e91fdf0e22d302688c2 = $this->env->getExtension("native_profiler");
        $__internal_78916b6036532b869730cecbfa15a5a21373fe1e936a2e91fdf0e22d302688c2->enter($__internal_78916b6036532b869730cecbfa15a5a21373fe1e936a2e91fdf0e22d302688c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 89
        ob_start();
        // line 90
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 91
            echo "    <div class=\"checkbox\">
        <label>
            ";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), "html", null, true);
            echo "
        </label>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_78916b6036532b869730cecbfa15a5a21373fe1e936a2e91fdf0e22d302688c2->leave($__internal_78916b6036532b869730cecbfa15a5a21373fe1e936a2e91fdf0e22d302688c2_prof);

    }

    // line 100
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_912ea45b0836826d98405d1931f922ea632979998ab8071618919c9ccbac69d2 = $this->env->getExtension("native_profiler");
        $__internal_912ea45b0836826d98405d1931f922ea632979998ab8071618919c9ccbac69d2->enter($__internal_912ea45b0836826d98405d1931f922ea632979998ab8071618919c9ccbac69d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 101
        ob_start();
        // line 102
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 103
            echo "        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_912ea45b0836826d98405d1931f922ea632979998ab8071618919c9ccbac69d2->leave($__internal_912ea45b0836826d98405d1931f922ea632979998ab8071618919c9ccbac69d2_prof);

    }

    // line 108
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_51380cedd42a69ca331027485d781d9d52298f33b398cbcc1b95abc60708402e = $this->env->getExtension("native_profiler");
        $__internal_51380cedd42a69ca331027485d781d9d52298f33b398cbcc1b95abc60708402e->enter($__internal_51380cedd42a69ca331027485d781d9d52298f33b398cbcc1b95abc60708402e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 109
        ob_start();
        // line 110
        echo "    <div class=\"form-group\">
        <div class=\"col-sm-offset-3 col-sm-9\">
            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_51380cedd42a69ca331027485d781d9d52298f33b398cbcc1b95abc60708402e->leave($__internal_51380cedd42a69ca331027485d781d9d52298f33b398cbcc1b95abc60708402e_prof);

    }

    // line 118
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a4d4f9cfef20a4279b4c713437d4e40f0fb1f2d2bffe68b40092b6c32b847de7 = $this->env->getExtension("native_profiler");
        $__internal_a4d4f9cfef20a4279b4c713437d4e40f0fb1f2d2bffe68b40092b6c32b847de7->enter($__internal_a4d4f9cfef20a4279b4c713437d4e40f0fb1f2d2bffe68b40092b6c32b847de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 119
        ob_start();
        // line 120
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 121
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 122
            echo "    ";
        }
        // line 123
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " btn"))));
        // line 124
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a4d4f9cfef20a4279b4c713437d4e40f0fb1f2d2bffe68b40092b6c32b847de7->leave($__internal_a4d4f9cfef20a4279b4c713437d4e40f0fb1f2d2bffe68b40092b6c32b847de7_prof);

    }

    // line 128
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_96e0c54a0815302ad0cf941b927cb4c8571f5254bb28fc49c53a589540b345a1 = $this->env->getExtension("native_profiler");
        $__internal_96e0c54a0815302ad0cf941b927cb4c8571f5254bb28fc49c53a589540b345a1->enter($__internal_96e0c54a0815302ad0cf941b927cb4c8571f5254bb28fc49c53a589540b345a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 129
        ob_start();
        // line 130
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 131
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-success")) : ("btn-success")))));
        // line 132
        echo "    ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_96e0c54a0815302ad0cf941b927cb4c8571f5254bb28fc49c53a589540b345a1->leave($__internal_96e0c54a0815302ad0cf941b927cb4c8571f5254bb28fc49c53a589540b345a1_prof);

    }

    public function getTemplateName()
    {
        return "form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  513 => 132,  510 => 131,  507 => 130,  505 => 129,  499 => 128,  484 => 124,  481 => 123,  478 => 122,  475 => 121,  472 => 120,  470 => 119,  464 => 118,  452 => 112,  448 => 110,  446 => 109,  440 => 108,  425 => 103,  420 => 102,  418 => 101,  412 => 100,  394 => 93,  390 => 91,  385 => 90,  383 => 89,  377 => 88,  365 => 83,  362 => 82,  359 => 81,  353 => 79,  351 => 78,  346 => 77,  343 => 76,  340 => 75,  332 => 71,  329 => 70,  327 => 65,  321 => 64,  308 => 60,  305 => 59,  303 => 58,  297 => 57,  278 => 53,  275 => 52,  272 => 51,  269 => 50,  266 => 49,  264 => 48,  258 => 47,  233 => 42,  230 => 41,  227 => 40,  224 => 39,  221 => 38,  218 => 37,  215 => 36,  212 => 35,  209 => 34,  206 => 33,  203 => 32,  200 => 31,  198 => 30,  192 => 29,  180 => 23,  176 => 22,  171 => 20,  166 => 19,  164 => 18,  158 => 17,  146 => 12,  144 => 11,  119 => 10,  116 => 9,  113 => 8,  110 => 7,  107 => 6,  104 => 5,  101 => 4,  98 => 3,  96 => 2,  90 => 1,  83 => 128,  80 => 127,  78 => 118,  75 => 117,  73 => 108,  70 => 107,  68 => 100,  65 => 99,  63 => 88,  60 => 87,  58 => 64,  55 => 63,  53 => 57,  50 => 56,  48 => 47,  45 => 46,  43 => 29,  40 => 28,  38 => 17,  35 => 16,  33 => 1,);
    }
}
/* {% block form_start %}*/
/* {% spaceless %}*/
/*     {% set method = method|upper %}*/
/*     {% if method in ["GET", "POST"] %}*/
/*         {% set form_method = method %}*/
/*     {% else %}*/
/*         {% set form_method = "POST" %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('form-horizontal'))|trim }) %}*/
/*     <form name="{{ form.vars.name }}" method="{{ form_method|lower }}" action="{{ action }}"{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {% if form_method != method %}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_start %}*/
/*         */
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     <div class="form-group{{ errors|length > 0 ? ' has-error':'' }}">*/
/*         {{ form_label(form) }}*/
/*         <div class="col-sm-9">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/*         */
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if label is not same as(false) %}*/
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {% endif %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' col-sm-3 control-label')|trim }) %}*/
/*         {% if label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ label|trans({}, translation_domain) }}</label>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/*         */
/* {% block form_widget_simple %}*/
/* {% spaceless %}*/
/*     {% set type = type|default('text') %}*/
/*     {% if type != 'file' %}*/
/*         {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control')|trim }) %}*/
/*     {% endif %}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {% endspaceless %}*/
/* {% endblock form_widget_simple %}*/
/*     */
/* {% block textarea_widget %}*/
/* {% spaceless %}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control')|trim }) %}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {% endspaceless %}*/
/* {% endblock textarea_widget %}*/
/*     */
/* {% block choice_widget_collapsed %}*/
/* {% spaceless %}*/
/* {# empty_value was deleted from sf3 #}*/
/* {#     {% if required and empty_value is none and not empty_value_in_choices %}*/
/*         {% set required = false %}*/
/*     {% endif %} #}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control')|trim }) %}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/* {#         {% if empty_value is not none %}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ empty_value|trans({}, translation_domain) }}</option>*/
/*         {% endif %} #}*/
/*         {% if preferred_choices|length > 0 %}*/
/*             {% set options = preferred_choices %}*/
/*             {{ block('choice_widget_options') }}*/
/*             {% if choices|length > 0 and separator is not none %}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {% set options = choices %}*/
/*         {{ block('choice_widget_options') }}*/
/*     </select>*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_collapsed %}*/
/*     */
/* {% block choice_widget_expanded %}*/
/* {% spaceless %}*/
/*     {% for child in form %}*/
/*     <div class="checkbox">*/
/*         <label>*/
/*             {{ form_widget(child) }} {{ child.vars.label }}*/
/*         </label>*/
/*     </div>*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% for error in errors %}*/
/*         <span class="help-block">{{ error.message }}</span>*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/*         */
/* {% block button_row %}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="col-sm-offset-3 col-sm-9">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock button_row %}*/
/*         */
/* {% block button_widget %}*/
/* {% spaceless %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('') ~ ' btn')|trim }) %}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</button>*/
/* {% endspaceless %}*/
/* {% endblock button_widget %}*/
/*     */
/* {% block submit_widget %}*/
/* {% spaceless %}*/
/*     {% set type = type|default('submit') %}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('btn-success'))|trim }) %}*/
/*     {{ block('button_widget') }}*/
/* {% endspaceless %}*/
/* {% endblock submit_widget %}*/
