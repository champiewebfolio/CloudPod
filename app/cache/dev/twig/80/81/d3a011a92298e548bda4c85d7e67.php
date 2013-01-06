<?php

/* CloudPodClassroomBundle:Forms:ClassResourceForm.html.twig */
class __TwigTemplate_8081d3a011a92298e548bda4c85d7e67 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("upload_resource"), "html", null, true);
        echo "\" method=\"post\"
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["resourceform"]) ? $context["resourceform"] : $this->getContext($context, "resourceform")), 'enctype');
        echo ">

";
        // line 7
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["resourceform"]) ? $context["resourceform"] : $this->getContext($context, "resourceform")), 'rest');
        echo "
  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["resourceform"]) ? $context["resourceform"] : $this->getContext($context, "resourceform")), 'rest');
        echo "

<input type=\"submit\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "CloudPodClassroomBundle:Forms:ClassResourceForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  38 => 7,  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
