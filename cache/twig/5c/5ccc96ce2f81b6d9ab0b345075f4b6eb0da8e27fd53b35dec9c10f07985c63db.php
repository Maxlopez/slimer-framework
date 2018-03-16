<?php

/* templates/master/inc/js-files.twig */
class __TwigTemplate_2767d8c5e716012a462280d74ffb749025ae63c83ec75e746d5470e4cff8c19b extends Twig_Template
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
        echo "<!-- Jquery -->
<script type=\"text/javascript\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/libs/jquery/jquery-3.3.1.min.js\"></script>

<!-- Bootstrap -->
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/libs/bootstrap/js/bootstrap.min.js\"></script>

<!-- Main file -->
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/js/app.js\"></script>


";
    }

    public function getTemplateName()
    {
        return "templates/master/inc/js-files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Jquery -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/libs/jquery/jquery-3.3.1.min.js\"></script>

<!-- Bootstrap -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/libs/bootstrap/js/bootstrap.min.js\"></script>

<!-- Main file -->
<script type=\"text/javascript\" src=\"{{ base_url() }}/public/assets/js/app.js\"></script>


", "templates/master/inc/js-files.twig", "C:\\xampp\\htdocs\\slimer\\app\\Views\\templates\\master\\inc\\js-files.twig");
    }
}
