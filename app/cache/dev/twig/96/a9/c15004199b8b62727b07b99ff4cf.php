<?php

/* CloudPodClassroomBundle:Forms:CollabURLForm.html.twig */
class __TwigTemplate_96a9c15004199b8b62727b07b99ff4cf extends Twig_Template
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
<form action=\"\" method=\"post\"
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


<input type=\"submit\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "CloudPodClassroomBundle:Forms:CollabURLForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 2,  20 => 1,);
    }
}
