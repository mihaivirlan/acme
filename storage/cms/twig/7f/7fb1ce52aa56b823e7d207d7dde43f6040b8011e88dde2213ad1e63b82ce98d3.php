<?php

/* E:\OpenServer\domains\localhost\acme/themes/acme/layouts/default.htm */
class __TwigTemplate_74f261e0b472a1ea0eb79813e76a70b01f5c111286191d544bc2ab3a61a7f8df extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Acme - ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_descrition", array()), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/sandstone/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\">
        ";
        // line 8
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 9
        echo "    </head>
    <body>
        <header>
            ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "        </header>

    <div class=\"container\">
        ";
        // line 16
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 17
        echo "    </div>

        <footer>
            ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "        </footer>

        <script src=\"";
        // line 23
        echo "assets/vendor/jquery.js|theme";
        echo "\"></script>
        <script src=\"";
        // line 24
        echo "assets/vendor/bootstrap|theme";
        echo "\"></script>
        <script src=\"";
        // line 25
        echo "assets/javascript/app.js|theme";
        echo "\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "E:\\OpenServer\\domains\\localhost\\acme/themes/acme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  73 => 24,  69 => 23,  65 => 21,  61 => 20,  56 => 17,  54 => 16,  49 => 13,  45 => 12,  40 => 9,  37 => 8,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>Acme - {{this.page.title}}</title>
        <meta name=\"description\" content=\"\"{{this.page.meta_descrition}}\">
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/sandstone/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/theme.css' |theme }}\">
        {% styles %}
    </head>
    <body>
        <header>
            {% partial 'site/header' %}
        </header>

    <div class=\"container\">
        {% page %}
    </div>

        <footer>
            {% partial 'site/footer' %}
        </footer>

        <script src=\"{{'assets/vendor/jquery.js|theme'}}\"></script>
        <script src=\"{{'assets/vendor/bootstrap|theme'}}\"></script>
        <script src=\"{{'assets/javascript/app.js|theme'}}\"></script>
    </body>
</html>", "E:\\OpenServer\\domains\\localhost\\acme/themes/acme/layouts/default.htm", "");
    }
}
