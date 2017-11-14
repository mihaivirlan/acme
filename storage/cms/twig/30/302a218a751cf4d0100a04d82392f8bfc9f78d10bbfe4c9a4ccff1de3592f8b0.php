<?php

/* E:\OpenServer\domains\localhost\acme/themes/acme/pages/Home.htm */
class __TwigTemplate_8c374fff7e2344fb7e7297ff281311ea5b38a00c866d8a6a63c5ab8e92cf849a extends Twig_Template
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
        echo "<h1>Welcome</h1>";
    }

    public function getTemplateName()
    {
        return "E:\\OpenServer\\domains\\localhost\\acme/themes/acme/pages/Home.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Welcome</h1>", "E:\\OpenServer\\domains\\localhost\\acme/themes/acme/pages/Home.htm", "");
    }
}
