<?php

/* CloudPodUserBundle:UserProfile:index.html.twig */
class __TwigTemplate_7c93db6b18adb3a23b160aea78136c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo " 
";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo " 
";
        // line 9
        $this->displayBlock('content', $context, $blocks);
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    User Profile
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "

    <h2>
       ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " PROFILE
    </h2>
   
    <br>
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userprofile"]) ? $context["userprofile"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "      Name :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName"), "html", null, true);
            echo " 
      <br/>
      Age :";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "age"), "html", null, true);
            echo "
      <br/>
      School :";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "school"), "html", null, true);
            echo "
      <br/>
      Country :";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "country"), "html", null, true);
            echo "

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "<br/><br/>

<strong>  Class enrolled : </strong><br/>  
";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userclass"]) ? $context["userclass"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
            // line 31
            echo "    ";
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 32
                echo "
     <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_classroom_page", array("classID" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classID", array(), "method"))), "html", null, true);
                echo "\">
     ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "className"), "html", null, true);
                echo "  </a> - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classDesc"), "html", null, true);
                echo "

     <br/>
    ";
            }
            // line 37
            echo " 

      ";
            // line 39
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 40
                echo "
     <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lecturer_classroom_page", array("classID" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classID", array(), "method"))), "html", null, true);
                echo "\">
     ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "className"), "html", null, true);
                echo "  </a> - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classDesc"), "html", null, true);
                echo "

     <br/>
    ";
            }
            // line 46
            echo "
     <br/>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "<br/>

 ";
        // line 53
        echo " ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "has", array(0 => "username"), "method")) {
            echo " ";
            // line 56
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "username"), "method") == (isset($context["name"]) ? $context["name"] : null))) {
                echo " 
      ";
                // line 57
                if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                    // line 58
                    echo "        <strong>Enroll in Class</strong>
      <form action=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_user_profile_enroll"), "html", null, true);
                    echo "\" method=\"post\" ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
                    echo ">
      ";
                    // line 60
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
                    echo "
      <input type=\"submit\" name=\"Enroll\" />
</form>
      ";
                }
                // line 64
                echo "  ";
            }
            // line 65
            echo "    ";
        }
        // line 66
        echo "
";
        // line 67
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 68
            echo "    <div class=\"flash-notice\">
        ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
    </div>
 ";
        }
        // line 72
        echo "    <ul>
   
                    ";
        // line 74
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 75
            echo "                        <li>
                            <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_logout"), "html", null, true);
            echo "\">
                                Logout
                            </a>
                        </li>
                    ";
        }
        // line 81
        echo "                </ul>
";
    }

    public function getTemplateName()
    {
        return "CloudPodUserBundle:UserProfile:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  214 => 81,  206 => 76,  203 => 75,  201 => 74,  197 => 72,  191 => 69,  188 => 68,  186 => 67,  183 => 66,  180 => 65,  177 => 64,  170 => 60,  164 => 59,  161 => 58,  159 => 57,  154 => 56,  150 => 53,  146 => 50,  137 => 46,  128 => 42,  124 => 41,  121 => 40,  119 => 39,  115 => 37,  106 => 34,  102 => 33,  99 => 32,  96 => 31,  92 => 30,  87 => 27,  78 => 24,  73 => 22,  68 => 20,  60 => 18,  56 => 17,  49 => 13,  44 => 10,  41 => 9,  36 => 6,  33 => 5,  29 => 9,  26 => 8,  24 => 5,  21 => 4,);
    }
}
