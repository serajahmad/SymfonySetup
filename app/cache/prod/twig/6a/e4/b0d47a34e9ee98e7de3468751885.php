<?php

/* BloggerGeneralBundle:Default:index.html.twig */
class __TwigTemplate_6ae4b0d47a34e9ee98e7de3468751885 extends Twig_Template
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
        echo "fgfgfgfg  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">contact</a>
";
    }

    public function getTemplateName()
    {
        return "BloggerGeneralBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
