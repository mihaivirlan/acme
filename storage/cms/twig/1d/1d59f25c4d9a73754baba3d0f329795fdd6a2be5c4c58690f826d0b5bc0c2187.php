<?php

/* E:\OpenServer\domains\localhost\acme/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_1c9d50b275cee796db0b37a8723e7cc9022e6b4de27551b829bc4cd3641e7285 extends Twig_Template
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
        echo "<h1>Contact us</h1>
<form>
  <div class=\"form-group\">
    <label for=\"email\">Email address:</label>
    <input type=\"email\" class=\"form-control\" id=\"email\">
  </div>
  <div class=\"form-group\">
    <label for=\"pwd\">Name:</label>
    <input type=\"text\" class=\"form-control\">
  </div>
   <div class=\"form-group\">
    <label>Message</label>
    <textarea class=\"form-control\"></textarea>
  </div>
  <button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "E:\\OpenServer\\domains\\localhost\\acme/themes/responsiv-clean/pages/contact.htm";
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
        return new Twig_Source("<h1>Contact us</h1>
<form>
  <div class=\"form-group\">
    <label for=\"email\">Email address:</label>
    <input type=\"email\" class=\"form-control\" id=\"email\">
  </div>
  <div class=\"form-group\">
    <label for=\"pwd\">Name:</label>
    <input type=\"text\" class=\"form-control\">
  </div>
   <div class=\"form-group\">
    <label>Message</label>
    <textarea class=\"form-control\"></textarea>
  </div>
  <button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>", "E:\\OpenServer\\domains\\localhost\\acme/themes/responsiv-clean/pages/contact.htm", "");
    }
}
