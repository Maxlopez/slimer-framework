<?php

/* home/main.twig */
class __TwigTemplate_7229b038bb9248d06d92f113850acf576df5b359a5aaff890b4f18d3b2709524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/master/master.twig", "home/main.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/master/master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"row justify-content-center\">
\t<div class=\"col-md-6 text-center\">
\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/images/favicon.png\" alt=\"Slimer Logo\" class=\"slimer-logo\">
\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
\t<h3>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "version", array()), "html", null, true);
        echo "</h3>
\t<p><strong>Slimer</strong> is an application following MVC pattern for Slim Framework 3 <a href=\"https://www.slimframework.com/\" target=\"_blank\"><i class=\"fa fa-link\"></i></a></p>

\t<p style=\"font-size:12px; color: #222\"><strong>Slimer </strong> is
\t   ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "\t\t<span>";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo " </span>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\tand an Scalable application.<span>
\t</p>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "home/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  55 => 14,  51 => 13,  44 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/master/master.twig' %}

{% block content %}

<div class=\"row justify-content-center\">
\t<div class=\"col-md-6 text-center\">
\t<img src=\"{{ base_url() }}/public/assets/images/favicon.png\" alt=\"Slimer Logo\" class=\"slimer-logo\">
\t<h1>{{ app.name }}</h1>
\t<h3>{{ app.version }}</h3>
\t<p><strong>Slimer</strong> is an application following MVC pattern for Slim Framework 3 <a href=\"https://www.slimframework.com/\" target=\"_blank\"><i class=\"fa fa-link\"></i></a></p>

\t<p style=\"font-size:12px; color: #222\"><strong>Slimer </strong> is
\t   {% for item in app.features %}
\t\t<span>{{ item }} </span>
\t\t{% endfor %}
\t\tand an Scalable application.<span>
\t</p>

  </div>
</div>

{% endblock %}", "home/main.twig", "C:\\xampp\\htdocs\\slimer-framework\\app\\Views\\home\\main.twig");
    }
}
