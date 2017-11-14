<?php

/* E:\OpenServer\domains\localhost\acme/themes/acme/pages/home.htm */
class __TwigTemplate_b61ca9f42b80ef8a30884182d0bc5bdee8b80649e535d7bb3df03cf50eead321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"jumbotron text-center\">
    <h1> ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "site_name", array()), "html", null, true);
        echo " </h1>
    <p> ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "site_description", array()), "html", null, true);
        echo " </p>
        <a href=\"{'about'|page}\" class=\"btn btn-default\">Read More</a>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\OpenServer\\domains\\localhost\\acme/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron text-center\">
    <h1> {{ theme.site_name }} </h1>
    <p> {{ theme.site_description }} </p>
        <a href=\"{'about'|page}\" class=\"btn btn-default\">Read More</a>
</div>", "E:\\OpenServer\\domains\\localhost\\acme/themes/acme/pages/home.htm", "");
    }
}
