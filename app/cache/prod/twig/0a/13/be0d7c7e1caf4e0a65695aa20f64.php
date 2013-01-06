<?php

/* CloudPodHomeBundle:Pages:Home.html.twig */
class __TwigTemplate_0a13be0d7c7e1caf4e0a65695aa20f64 extends Twig_Template
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
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
<h1> THIS IS HOME PAGE </h1>

Welcome ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "username"), "method"), "html", null, true);
        echo " <br/>
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_user_profile", array("uname" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "username"), "method"))), "html", null, true);
        echo "\"> Profile </a>

";
    }

    public function getTemplateName()
    {
        return "CloudPodHomeBundle:Pages:Home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }
}
