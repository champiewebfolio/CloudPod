<?php

/* CloudPodClassroomBundle:Forms:AnnouncementForm.html.twig */
class __TwigTemplate_41520c0366f345832446077d5ea12217 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lecturer_add_announcement", array("classID" => (isset($context["classid"]) ? $context["classid"] : $this->getContext($context, "classid")))), "html", null, true);
        echo "\" method=\"post\"
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


<input type=\"submit\" />
</form>
";
        // line 9
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "
";
    }

    public function getTemplateName()
    {
        return "CloudPodClassroomBundle:Forms:AnnouncementForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
