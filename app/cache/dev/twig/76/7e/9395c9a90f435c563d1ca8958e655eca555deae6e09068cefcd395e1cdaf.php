<?php

/* PolytechProjetTransversalBundle:Default:connected.html.twig */
class __TwigTemplate_767e9395c9a90f435c563d1ca8958e655eca555deae6e09068cefcd395e1cdaf extends Twig_Template
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
        echo "<!DOCTYPE HTML>

<html>
\t<head>

\t\t<title>Your Website</title>
\t\t<meta name=\"description\" content=\"\" />
\t\t<meta name=\"keywords\" content=\"\" />
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t
\t</head>
\t<body>
\t<H1>
\t\tconnected
\t</H1>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "PolytechProjetTransversalBundle:Default:connected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
