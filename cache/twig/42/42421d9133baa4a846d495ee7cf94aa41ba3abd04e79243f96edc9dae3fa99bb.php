<?php

/* templates/master/inc/messages.twig */
class __TwigTemplate_aca383f6d0de60624a0181f612c29d13e727d565ceda7c40957f79e75df3bd2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        if ($this->getAttribute(($context["flash"] ?? null), "getMessage", array(0 => "success"), "method")) {
            // line 3
            echo "\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t<span aria-hidden=\"true\">&times;</span>
\t\t</button>
\t\t";
            // line 7
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["flash"] ?? null), "getMessage", array(0 => "success"), "method")), "html", null, true);
            echo "
\t</div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute(($context["flash"] ?? null), "getMessage", array(0 => "info"), "method")) {
            // line 12
            echo "\t<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t<span aria-hidden=\"true\">&times;</span>
\t\t</button>
\t\t";
            // line 16
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["flash"] ?? null), "getMessage", array(0 => "info"), "method")), "html", null, true);
            echo "
\t</div>
";
        }
        // line 19
        echo "
";
        // line 20
        if ($this->getAttribute(($context["flash"] ?? null), "getMessage", array(0 => "error"), "method")) {
            // line 21
            echo "\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t<span aria-hidden=\"true\">&times;</span>
\t\t</button>
\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["flash"] ?? null), "getMessage", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t</div>
";
        }
        // line 30
        echo "
";
        // line 31
        if ($this->getAttribute(($context["flash"] ?? null), "getMessage", array(0 => "warning"), "method")) {
            // line 32
            echo "\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t<span aria-hidden=\"true\">&times;</span>
\t\t</button>
\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["flash"] ?? null), "getMessage", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 37
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, $context["warning"], "html", null, true);
                echo "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t</div>
";
        }
        // line 41
        echo "

";
    }

    public function getTemplateName()
    {
        return "templates/master/inc/messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  105 => 39,  96 => 37,  92 => 36,  86 => 32,  84 => 31,  81 => 30,  77 => 28,  68 => 26,  64 => 25,  58 => 21,  56 => 20,  53 => 19,  47 => 16,  41 => 12,  39 => 11,  36 => 10,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% if flash.getMessage( 'success' ) %}
\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t<span aria-hidden=\"true\">&times;</span>
\t\t</button>
\t\t{{ flash.getMessage( 'success' ) | first }}
\t</div>
{% endif %}

{% if flash.getMessage( 'info' ) %}
\t<div class=\"alert alert-info alert-dismissible fade show\" role=\"alert\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t<span aria-hidden=\"true\">&times;</span>
\t\t</button>
\t\t{{ flash.getMessage( 'info' ) | first }}
\t</div>
{% endif %}

{% if flash.getMessage( 'error' ) %}
\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t<span aria-hidden=\"true\">&times;</span>
\t\t</button>
\t\t{% for error in flash.getMessage( 'error' ) %}
\t\t\t<li>{{ error }}</li>
\t\t{% endfor %}
\t</div>
{% endif %}

{% if flash.getMessage( 'warning' ) %}
\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t<span aria-hidden=\"true\">&times;</span>
\t\t</button>
\t\t{% for warning in flash.getMessage( 'warning' ) %}
\t\t\t<li>{{ warning }}</li>
\t\t{% endfor %}
\t</div>
{% endif %}


", "templates/master/inc/messages.twig", "C:\\xampp\\htdocs\\slimer-framework\\app\\Views\\templates\\master\\inc\\messages.twig");
    }
}
