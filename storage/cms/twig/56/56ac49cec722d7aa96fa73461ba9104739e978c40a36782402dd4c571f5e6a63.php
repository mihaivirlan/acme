<?php

/* E:\OpenServer\domains\localhost\acme/themes/responsiv-clean/pages/blog/post.htm */
class __TwigTemplate_d4ec2bea7a02fefd16d393328c82fa875685216d00e76e3e5b7bedc5f628317f extends Twig_Template
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
        $context["image"] = $this->getAttribute($this->getAttribute(($context["post"] ?? null), "featured_images", array()), "first", array());
        // line 2
        $context["nextPost"] = $this->getAttribute(($context["blogPost"] ?? null), "nextPost", array());
        // line 3
        $context["lastPost"] = $this->getAttribute(($context["blogPost"] ?? null), "previousPost", array());
        // line 4
        echo "
<div class=\"post-single\">
    <article>
        ";
        // line 7
        if (($context["image"] ?? null)) {
            // line 8
            echo "            <div class=\"post-image\">
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["image"] ?? null), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\" />
            </div>
        ";
        }
        // line 12
        echo "        <header class=\"post-title\">
            <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
        </header>

        <div class=\"post-content\">
            ";
        // line 17
        echo $this->getAttribute(($context["post"] ?? null), "content_html", array());
        echo "
        </div>

        <footer>
            <span class=\"published\"><i class=\"icon icon-calendar\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "</span>
            ";
        // line 23
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "categories", array()), "count", array())) {
            echo " in
                <span class=\"category\">
                    <i class=\"icon icon-folder-open\"></i>
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 27
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 28
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                </span>
            ";
        }
        // line 31
        echo "        </footer>
    </article>
    <nav class=\"post-links\">
        ";
        // line 34
        if (($context["lastPost"] ?? null)) {
            // line 35
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lastPost"] ?? null), "url", array()), "html", null, true);
            echo "\" class=\"link-previous\">
                <p>Previous</p>
                <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lastPost"] ?? null), "title", array()), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 40
        echo "        ";
        if (($context["nextPost"] ?? null)) {
            // line 41
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nextPost"] ?? null), "url", array()), "html", null, true);
            echo "\" class=\"link-next\">
                <p>Next</p>
                <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nextPost"] ?? null), "title", array()), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 46
        echo "    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\OpenServer\\domains\\localhost\\acme/themes/responsiv-clean/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 46,  143 => 43,  137 => 41,  134 => 40,  128 => 37,  122 => 35,  120 => 34,  115 => 31,  111 => 29,  97 => 28,  88 => 27,  71 => 26,  64 => 23,  60 => 21,  53 => 17,  46 => 13,  43 => 12,  35 => 9,  32 => 8,  30 => 7,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set image = post.featured_images.first %}
{% set nextPost = blogPost.nextPost %}
{% set lastPost = blogPost.previousPost %}

<div class=\"post-single\">
    <article>
        {% if image %}
            <div class=\"post-image\">
                <img src=\"{{ image.path }}\" alt=\"{{ post.title }}\" />
            </div>
        {% endif %}
        <header class=\"post-title\">
            <h1>{{ post.title }}</h1>
        </header>

        <div class=\"post-content\">
            {{ post.content_html|raw }}
        </div>

        <footer>
            <span class=\"published\"><i class=\"icon icon-calendar\"></i> {{ post.published_at|date('M d, Y') }}</span>
            {# <span class=\"author\"><i class=\"icon icon-user\"></i> {{ post.author.full_name }}</span> #}
            {% if post.categories.count %} in
                <span class=\"category\">
                    <i class=\"icon icon-folder-open\"></i>
                    {% for category in post.categories %}
                        <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                    {% endfor %}
                </span>
            {% endif %}
        </footer>
    </article>
    <nav class=\"post-links\">
        {% if lastPost %}
            <a href=\"{{ lastPost.url }}\" class=\"link-previous\">
                <p>Previous</p>
                <span>{{ lastPost.title }}</span>
            </a>
        {% endif %}
        {% if nextPost %}
            <a href=\"{{ nextPost.url }}\" class=\"link-next\">
                <p>Next</p>
                <span>{{ nextPost.title }}</span>
            </a>
        {% endif %}
    </nav>
</div>", "E:\\OpenServer\\domains\\localhost\\acme/themes/responsiv-clean/pages/blog/post.htm", "");
    }
}
