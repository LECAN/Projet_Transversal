<?php

/* PolytechProjetTransversalBundle:Default:register.html.twig */
class __TwigTemplate_aaf60ba41cfddef95eb6a2749c106b72f3036ee25be6e05ba3804a7363beccb3 extends Twig_Template
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
\t\t";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["register_form"]) ? $context["register_form"] : $this->getContext($context, "register_form")), 'form');
        echo "

\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "PolytechProjetTransversalBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  30 => 10,  19 => 1,);
    }
}
