<?php

/* templates/master/inc/css-files.twig */
class __TwigTemplate_bdb3cafed3434b4d104896741ab02a28f1a77128409f55ef0c607736de342f6d extends Twig_Template
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
        echo "<!-- Bootstrap 4 -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/libs/bootstrap/css/bootstrap.min.css\">


<!-- Font Awesome -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/libs/font-awesome/css/fontawesome-all.min.css\">

<!-- Main style -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/public/assets/css/style.css\">

";
    }

    public function getTemplateName()
    {
        return "templates/master/inc/css-files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Bootstrap 4 -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/libs/bootstrap/css/bootstrap.min.css\">


<!-- Font Awesome -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/libs/font-awesome/css/fontawesome-all.min.css\">

<!-- Main style -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ base_url() }}/public/assets/css/style.css\">

", "templates/master/inc/css-files.twig", "C:\\xampp\\htdocs\\slimer-framework\\app\\Views\\templates\\master\\inc\\css-files.twig");
    }
}
