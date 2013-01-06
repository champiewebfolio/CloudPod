<?php

/* CloudPodClassroomBundle:Classrooms:Student.html.twig */
class __TwigTemplate_5f61efd472338e10cfc4d72b4e4a7b4f extends Twig_Template
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
        echo "Classroom
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
<br>
<div style=\"color:blue; font-size:16px; font-weight:bold;\">Welcome ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo " to ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "className"), "html", null, true);
        echo " class</div><br/>
Class Description : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classDesc"), "html", null, true);
        echo "

<br/><br/>
Classmates: <br/>
\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classuser"]) ? $context["classuser"] : $this->getContext($context, "classuser")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "     \t  
<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_user_profile", array("uname" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userName"))), "html", null, true);
            echo "\">
";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userName"), "html", null, true);
            echo "</a>    
 <br/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "      

\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements")));
        foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
            // line 25
            echo "     \t  
";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : $this->getContext($context, "announcement")), "announcementTitle"), "html", null, true);
            echo " 
 <br/>
 ";
            // line 28
            echo $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : $this->getContext($context, "announcement")), "announcementContent");
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "    

 ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : $this->getContext($context, "lessons")));
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 32
            echo " Title : <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_display_lesson", array("lessonID" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "lessonID"), "classID" => (isset($context["classid"]) ? $context["classid"] : $this->getContext($context, "classid")))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "lessonTitle"), "html", null, true);
            echo " </a>- ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "lessonDesc"), "html", null, true);
            echo " 
 
 <br/>
 
 <br/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "   
<br/>

<a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("view_resources"), "html", null, true);
        echo "\"> Resources </a>
<br/>

<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("class_submit", array("classID" => (isset($context["classid"]) ? $context["classid"] : $this->getContext($context, "classid")))), "html", null, true);
        echo "\"> Submissions </a>

</ul>

";
    }

    public function getTemplateName()
    {
        return "CloudPodClassroomBundle:Classrooms:Student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  131 => 40,  126 => 37,  109 => 32,  105 => 31,  101 => 29,  93 => 28,  88 => 26,  85 => 25,  81 => 24,  77 => 22,  68 => 20,  64 => 19,  61 => 18,  57 => 17,  50 => 13,  44 => 12,  40 => 10,  37 => 9,  32 => 6,  29 => 5,);
    }
}
