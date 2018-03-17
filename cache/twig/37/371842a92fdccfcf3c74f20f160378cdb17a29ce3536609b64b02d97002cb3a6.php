<?php

/* templates/master/master.twig */
class __TwigTemplate_614efce3b3eab8c8d3612dbff16c3546bf39b81477d07f27ba7489c3f173225d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<!-- Tell the browser to be responsive to screen width -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<!-- Favicon icon -->
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/images/favicon.png\">
\t<title>Slimer Framework</title>

\t";
        // line 14
        $this->loadTemplate("templates/master/inc/css-files.twig", "templates/master/master.twig", 14)->display($context);
        // line 15
        echo "
</head>

<body>

\t<div class=\"container slimer-page\">
\t\t<div class=\"row messages\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t";
        // line 23
        $this->loadTemplate("templates/master/inc/messages.twig", "templates/master/master.twig", 23)->display($context);
        // line 24
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "
\t</div><!-- .container -->

\t";
        // line 33
        $this->loadTemplate("templates/master/inc/js-files.twig", "templates/master/master.twig", 33)->display($context);
        // line 34
        echo "
</body>

</html>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "templates/master/master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  74 => 27,  66 => 34,  64 => 33,  59 => 30,  57 => 27,  52 => 24,  50 => 23,  40 => 15,  38 => 14,  32 => 11,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<!-- Tell the browser to be responsive to screen width -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<!-- Favicon icon -->
\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ base_url() }}/public/assets/images/favicon.png\">
\t<title>Slimer Framework</title>

\t{% include 'templates/master/inc/css-files.twig' %}

</head>

<body>

\t<div class=\"container slimer-page\">
\t\t<div class=\"row messages\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t{% include 'templates/master/inc/messages.twig' %}
\t\t\t</div>
\t\t</div>

\t\t{% block content %}

\t\t{% endblock %}

\t</div><!-- .container -->

\t{% include 'templates/master/inc/js-files.twig' %}

</body>

</html>
", "templates/master/master.twig", "C:\\xampp\\htdocs\\slimer-framework\\app\\Views\\templates\\master\\master.twig");
    }
}
