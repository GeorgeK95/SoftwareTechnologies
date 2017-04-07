<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_74213bc6ef4cdcd0c62f7ffdabe4b74a56c4e0b51b8cae32cc5dd8463043a338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59384aff20819c0560674970797d61fc5aaa905fe6ccd326b4274f14cbb1b54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59384aff20819c0560674970797d61fc5aaa905fe6ccd326b4274f14cbb1b54b->enter($__internal_59384aff20819c0560674970797d61fc5aaa905fe6ccd326b4274f14cbb1b54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59384aff20819c0560674970797d61fc5aaa905fe6ccd326b4274f14cbb1b54b->leave($__internal_59384aff20819c0560674970797d61fc5aaa905fe6ccd326b4274f14cbb1b54b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d843d692fadfbee17d8c6df2398c394c31eff62c27e8be0d1fb6ab8c287a7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d843d692fadfbee17d8c6df2398c394c31eff62c27e8be0d1fb6ab8c287a7f6->enter($__internal_7d843d692fadfbee17d8c6df2398c394c31eff62c27e8be0d1fb6ab8c287a7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d843d692fadfbee17d8c6df2398c394c31eff62c27e8be0d1fb6ab8c287a7f6->leave($__internal_7d843d692fadfbee17d8c6df2398c394c31eff62c27e8be0d1fb6ab8c287a7f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2100b8deaffd8bd888246bf3f66fe606b146d3d64f467f03f58ff69f2d8178f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2100b8deaffd8bd888246bf3f66fe606b146d3d64f467f03f58ff69f2d8178f6->enter($__internal_2100b8deaffd8bd888246bf3f66fe606b146d3d64f467f03f58ff69f2d8178f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2100b8deaffd8bd888246bf3f66fe606b146d3d64f467f03f58ff69f2d8178f6->leave($__internal_2100b8deaffd8bd888246bf3f66fe606b146d3d64f467f03f58ff69f2d8178f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35c1fbba363e84244fafff5ee96eb786d1930d289ab4c6388a7121c2800f7830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c1fbba363e84244fafff5ee96eb786d1930d289ab4c6388a7121c2800f7830->enter($__internal_35c1fbba363e84244fafff5ee96eb786d1930d289ab4c6388a7121c2800f7830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35c1fbba363e84244fafff5ee96eb786d1930d289ab4c6388a7121c2800f7830->leave($__internal_35c1fbba363e84244fafff5ee96eb786d1930d289ab4c6388a7121c2800f7830_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
