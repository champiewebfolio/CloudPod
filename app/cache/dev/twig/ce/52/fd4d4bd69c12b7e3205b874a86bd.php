<?php

/* CloudPodClassroomBundle:Classrooms:Lecturer.html.twig */
class __TwigTemplate_ce52fd4d4bd69c12b7e3205b874a86bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CloudPodUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CloudPodUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "Lecturer Classroom
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "classroomActive"), "method"), "html", null, true);
        echo "

    <br>
<div style=\"color:blue; font-size:16px; font-weight:bold;\">Welcome teacher ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo " to ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "className"), "html", null, true);
        echo " class</div><br/>
Class Description : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classDesc"), "html", null, true);
        echo "

<br/><br/>
Classmates: <br/>
\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classuser"]) ? $context["classuser"] : $this->getContext($context, "classuser")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "     \t  
<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_user_profile", array("uname" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userName", array(), "method"))), "html", null, true);
            echo "\">
";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userName"), "html", null, true);
            echo "</a>    
 <br/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "       
<br/>
<br/>
Teacher's Panel
<ul>
<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lecturer_add_announcement", array("classID" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "classroomActive"), "method"))), "html", null, true);
        echo "\"> Create announcement </a></li>
<li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lecturer_create_lesson", array("classID" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "classroomActive"), "method"))), "html", null, true);
        echo "\"> Create lesson </a></li>

</ul>
Activity Center
<ul>
<li><a href=\"#\"> Create Quiz </a></li>
<li><a href=\"#\"> Delete Quiz </a></li>
<li><a href=\"#\"> View Quiz </a></li>
<li><a href=\"#\"> Submissions</a> </li>
<li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_resources"), "html", null, true);
        echo "\"> Resources</a> </li>
<li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("set_collaboration_url"), "html", null, true);
        echo "\" onclick=\"window.open(&quot;http://scriblink.com&quot;);\"> Facilitate class collaboration</a> -- Powered by Scriblink </li>
</ul>

<br/>
";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements")));
        foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
            // line 44
            echo "     \t  
";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : $this->getContext($context, "announcement")), "announcementTitle"), "html", null, true);
            echo " 
 <br/>
 ";
            // line 47
            echo $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : $this->getContext($context, "announcement")), "announcementContent");
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "      

 <strong>LESSONS!</strong>
 <br/>
  ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : $this->getContext($context, "lessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 53
            echo " Title : 
";
            // line 54
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 55
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_display_lesson", array("lessonID" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "lessonID"), "classID" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "classroomActive"), "method"))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "lessonTitle"), "html", null, true);
                echo " </a>
 ";
            } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 57
                echo "
  <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lecturer_display_lesson", array("lessonID" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "lessonID"), "classID" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "classroomActive"), "method"))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "lessonTitle"), "html", null, true);
                echo " </a>

 ";
            }
            // line 61
            echo "
  -";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "lessonDesc"), "html", null, true);
            echo " 
 
 <br/>
 
 <br/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 67
        echo "    


";
    }

    public function getTemplateName()
    {
        return "CloudPodClassroomBundle:Classrooms:Lecturer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 67,  170 => 62,  167 => 61,  159 => 58,  156 => 57,  148 => 55,  146 => 54,  143 => 53,  139 => 52,  133 => 48,  125 => 47,  120 => 45,  117 => 44,  113 => 43,  106 => 39,  102 => 38,  90 => 29,  86 => 28,  79 => 23,  70 => 21,  66 => 20,  63 => 19,  59 => 18,  52 => 14,  46 => 13,  40 => 10,  37 => 9,  32 => 6,  29 => 5,);
    }
}
