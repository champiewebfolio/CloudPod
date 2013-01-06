<?php

/* CloudPodClassroomBundle:FlashBag:FlashBagRender.html.twig */
class __TwigTemplate_38bd03dde136a89ff42fa9854085391b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>REDIRECT</title>
        <meta http-equiv=\"Refresh\" content=\"4;url=";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lecturer_classroom_page", array("classID" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "classroomActive"), "method"))), "html", null, true);
        echo "\" />
    </head>
    <body>
      ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "    <div class=\"flash-notice\">
      <strong>  ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo " </strong>

      Redirecting to classroom...
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "        
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CloudPodClassroomBundle:FlashBag:FlashBagRender.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  39 => 11,  36 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }
}
