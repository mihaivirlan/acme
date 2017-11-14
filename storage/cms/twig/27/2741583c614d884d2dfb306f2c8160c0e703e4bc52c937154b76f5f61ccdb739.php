<?php

/* E:\OpenServer\domains\localhost\acme/themes/acme/pages/blog/category.htm */
class __TwigTemplate_405bc7fd11cfc8ce4b23625fd11bff594b5b2e663c5a419b82b11216b10ce0b9 extends Twig_Template
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
        echo "<div class=\"category-title\">
    <h1>Category: ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
</div>

<div class=\"blog-posts\">
    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/posts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "E:\\OpenServer\\domains\\localhost\\acme/themes/acme/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"category-title\">
    <h1>Category: {{ category.name }}</h1>
</div>

<div class=\"blog-posts\">
    {% partial 'blog/posts' %}
</div>", "E:\\OpenServer\\domains\\localhost\\acme/themes/acme/pages/blog/category.htm", "");
    }
}
