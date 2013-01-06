<?php

/* CloudPodUserBundle:Forms:login.html.twig */
class __TwigTemplate_1af2bbd4a862e7f1ca96d2863d5b6f0f extends Twig_Template
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
        echo "    symfony2 Blog Tutorial | Login
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "

    ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 13
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 15
        echo " 
    <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\" method=\"POST\">
        <table>
            <tr>
                <td>
                    <label for=\"username\">Username:</label>
                </td>
                <td>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for=\"password\">Password:</label>
                </td>
                <td>
                    <input type=\"password\" id=\"password\" name=\"_password\" />
                </td>
            </tr>
        </table>
        <input type=\"submit\" name=\"login\" value=\"submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "CloudPodUserBundle:Forms:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  59 => 16,  56 => 15,  50 => 13,  48 => 12,  44 => 10,  41 => 9,  36 => 6,  33 => 5,  29 => 9,  26 => 8,  24 => 5,  21 => 4,);
    }
}
