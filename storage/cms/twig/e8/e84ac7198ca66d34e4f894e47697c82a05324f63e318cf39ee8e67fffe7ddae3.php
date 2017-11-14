<?php

/* E:\OpenServer\domains\localhost\acme/themes/acme/pages/about.htm */
class __TwigTemplate_7300235315d3a549bed7e2c733d11e7e32f5410a1fb21076727835f0ae837f23 extends Twig_Template
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
        echo "<h1>About Us</h1>
<p>This is about page</p>
<hr>

";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "E:\\OpenServer\\domains\\localhost\\acme/themes/acme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About Us</h1>
<p>This is about page</p>
<hr>

{% component 'resourcesLinks' %}", "E:\\OpenServer\\domains\\localhost\\acme/themes/acme/pages/about.htm", "");
    }
}
