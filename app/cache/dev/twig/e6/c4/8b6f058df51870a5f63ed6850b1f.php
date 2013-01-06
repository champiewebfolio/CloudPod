<?php

/* CloudPodClassroomBundle:Classrooms:ClassResources.html.twig */
class __TwigTemplate_e6c48b6f058df51870a5f63ed6850b1f extends Twig_Template
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
        echo "Symfony - Display Resources";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Display File</h1>
Resources <br> <br/>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) ? $context["resources"] : $this->getContext($context, "resources")));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 9
            echo "

";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "name"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("download", array("param" => "resource", "param2" => $this->getAttribute((isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "resourceID"))), "html", null, true);
            echo "\"> Download - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('twig_extension')->sizeFilter($this->getAttribute((isset($context["resource"]) ? $context["resource"] : $this->getContext($context, "resource")), "size")), "html", null, true);
            echo "
</a>    
 <br/>
 <br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("upload_resource"), "html", null, true);
        echo "\"> Upload Resources 
</a> 
<hr/>
Student Submissions
";
    }

    public function getTemplateName()
    {
        return "CloudPodClassroomBundle:Classrooms:ClassResources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  50 => 11,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
