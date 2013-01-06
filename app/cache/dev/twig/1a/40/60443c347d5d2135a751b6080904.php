<?php

/* CloudPodClassroomBundle:Classrooms:Lesson.html.twig */
class __TwigTemplate_1a4060443c347d5d2135a751b6080904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CloudPodClassroomBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CloudPodClassroomBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Upload form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "  <div style=\"float:right\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("download"), "html", null, true);
        echo "\"> Download here 
</a>  </div>
<h1> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "lessonTitle"), "html", null, true);
        echo " </h1>
Description : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "lessonDesc"), "html", null, true);
        echo " <br/>
Content: <div style=\"border:2px solid black;\">";
        // line 11
        echo $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "lessonContent");
        echo " </div>
";
        // line 19
        echo "<iframe src=\"http://docs.google.com/viewer?url=cloud-pod.net%2FCloudPod%2Fweb%2Ffiles%2Fuploads%2Flessons%2F1%2F05.pdf&embedded=true\" width=\"600\" height=\"500\" style=\"border: none;\"></iframe>
<br/>
<br/>


";
    }

    public function getTemplateName()
    {
        return "CloudPodClassroomBundle:Classrooms:Lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  52 => 11,  48 => 10,  44 => 9,  38 => 7,  35 => 5,  29 => 3,);
    }
}
