<?php

/* CloudPodClassroomBundle:Forms:ClassRegistrationForm.html.twig */
class __TwigTemplate_c644987cf058727510d7908dabb0adee extends Twig_Template
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
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_register"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
<input type=\"submit\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "CloudPodClassroomBundle:Forms:ClassRegistrationForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
