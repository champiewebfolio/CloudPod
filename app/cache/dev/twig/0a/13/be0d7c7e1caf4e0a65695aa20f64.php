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
";
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "has", array(0 => "username"), "method")) {
            // line 5
            echo "Welcome ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "username"), "method"), "html", null, true);
            echo " <br/>
<a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_user_profile", array("uname" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "username"), "method"))), "html", null, true);
            echo "\"> Profile </a>

";
        } else {
            // line 9
            echo "
LOGIN!
";
        }
        // line 12
        echo "

";
    }

    public function getTemplateName()
    {
        return "CloudPodHomeBundle:Pages:Home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  43 => 9,  37 => 6,  32 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }
}
