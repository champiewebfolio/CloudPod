<?php

/* CloudPodUserBundle:UserProfile:index.html.twig */
class __TwigTemplate_7c93db6b18adb3a23b160aea78136c8c extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " PROFILE
    </h2>
   
    <br>
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userprofile"]) ? $context["userprofile"] : $this->getContext($context, "userprofile")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "      Name :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
            echo " 
      <br/>
      Age :";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "age"), "html", null, true);
            echo "
      <br/>
      School :";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "school"), "html", null, true);
            echo "
      <br/>
      Country :";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["userclass"]) ? $context["userclass"] : $this->getContext($context, "userclass")));
        foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
            // line 31
            echo "    ";
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 32
                echo "
     <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_classroom_page", array("classID" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classID", array(), "method"))), "html", null, true);
                echo "\">
     ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "className"), "html", null, true);
                echo "  </a> - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classDesc"), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lecturer_classroom_page", array("classID" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classID", array(), "method"))), "html", null, true);
                echo "\">
     ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "className"), "html", null, true);
                echo "  </a> - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classDesc"), "html", null, true);
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
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "has", array(0 => "username"), "method")) {
            echo " ";
            // line 56
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "username"), "method") == (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) {
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
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
                    echo ">
      ";
                    // line 60
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
                    echo "
      <input type=\"submit\" name=\"Enroll\" />
</form>
      ";
                }
                // line 64
                echo "
      ";
                // line 65
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 66
                    echo "       <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_register"), "html", null, true);
                    echo "\"> Create class</a>
    ";
                }
                // line 68
                echo "
  ";
            }
            // line 70
            echo "    ";
        }
        // line 71
        echo "<br/>
<br/>


";
        // line 75
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 76
            echo "    <div class=\"flash-notice\">
        ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
    </div>
 ";
        }
        // line 80
        echo "    <ul>
   
                    ";
        // line 82
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 83
            echo "                        <li>
                            <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_logout"), "html", null, true);
            echo "\">
                                Logout
                            </a>
                        </li>
                    ";
        }
        // line 89
        echo "                </ul>
";
    }

    public function getTemplateName()
    {
        return "CloudPodUserBundle:UserProfile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 89,  217 => 84,  214 => 83,  212 => 82,  208 => 80,  202 => 77,  199 => 76,  197 => 75,  191 => 71,  188 => 70,  184 => 68,  178 => 66,  176 => 65,  173 => 64,  166 => 60,  160 => 59,  157 => 58,  155 => 57,  150 => 56,  146 => 53,  142 => 50,  133 => 46,  124 => 42,  120 => 41,  117 => 40,  115 => 39,  111 => 37,  102 => 34,  98 => 33,  95 => 32,  92 => 31,  88 => 30,  83 => 27,  74 => 24,  69 => 22,  64 => 20,  56 => 18,  52 => 17,  45 => 13,  40 => 10,  37 => 9,  32 => 6,  29 => 5,);
    }
}
