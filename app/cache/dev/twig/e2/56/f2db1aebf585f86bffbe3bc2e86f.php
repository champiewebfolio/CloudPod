<?php

/* CloudPodClassroomBundle:Forms:LessonForm.html.twig */
class __TwigTemplate_e256f2db1aebf585f86bffbe3bc2e86f extends Twig_Template
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
        echo "<style type=\"text/css\">


</style>
<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lecturer_create_lesson", array("classID" => (isset($context["classid"]) ? $context["classid"] : $this->getContext($context, "classid")))), "html", null, true);
        echo "\" method=\"post\"
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["fileform"]) ? $context["fileform"] : $this->getContext($context, "fileform")), 'enctype');
        echo ">

";
        // line 10
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["fileform"]) ? $context["fileform"] : $this->getContext($context, "fileform")), 'rest');
        echo "
  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

<input type=\"submit\" />
</form>

";
        // line 16
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "
";
    }

    public function getTemplateName()
    {
        return "CloudPodClassroomBundle:Forms:LessonForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  46 => 11,  41 => 10,  36 => 7,  32 => 6,  26 => 2,  20 => 1,);
    }
}
