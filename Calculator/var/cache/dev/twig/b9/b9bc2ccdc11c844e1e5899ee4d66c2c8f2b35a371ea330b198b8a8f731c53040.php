<?php

/* base.html.twig */
class __TwigTemplate_64a406055ccccc751f397be3cc17f75d17d9d6b4c5e4326d0fb16b99756276ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_207e08d53cc7764d0739b4086cbbc65c6ce6ecc0e90694f95a698ef4a62c37f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207e08d53cc7764d0739b4086cbbc65c6ce6ecc0e90694f95a698ef4a62c37f6->enter($__internal_207e08d53cc7764d0739b4086cbbc65c6ce6ecc0e90694f95a698ef4a62c37f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_207e08d53cc7764d0739b4086cbbc65c6ce6ecc0e90694f95a698ef4a62c37f6->leave($__internal_207e08d53cc7764d0739b4086cbbc65c6ce6ecc0e90694f95a698ef4a62c37f6_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_1406a62bd955ff3bbd1e2941394a2fbdc3f9be6b693ef575a203e362d03691c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1406a62bd955ff3bbd1e2941394a2fbdc3f9be6b693ef575a203e362d03691c7->enter($__internal_1406a62bd955ff3bbd1e2941394a2fbdc3f9be6b693ef575a203e362d03691c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_1406a62bd955ff3bbd1e2941394a2fbdc3f9be6b693ef575a203e362d03691c7->leave($__internal_1406a62bd955ff3bbd1e2941394a2fbdc3f9be6b693ef575a203e362d03691c7_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9825eb496df6c5472b04b61561c42665a85cdabe2df825090f9a84cc913a0acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9825eb496df6c5472b04b61561c42665a85cdabe2df825090f9a84cc913a0acc->enter($__internal_9825eb496df6c5472b04b61561c42665a85cdabe2df825090f9a84cc913a0acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_9825eb496df6c5472b04b61561c42665a85cdabe2df825090f9a84cc913a0acc->leave($__internal_9825eb496df6c5472b04b61561c42665a85cdabe2df825090f9a84cc913a0acc_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b8478bd7f113208e48e92cb13eeb7f2f23dfba98042bb73ccbc4668138eaa891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8478bd7f113208e48e92cb13eeb7f2f23dfba98042bb73ccbc4668138eaa891->enter($__internal_b8478bd7f113208e48e92cb13eeb7f2f23dfba98042bb73ccbc4668138eaa891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_b8478bd7f113208e48e92cb13eeb7f2f23dfba98042bb73ccbc4668138eaa891->leave($__internal_b8478bd7f113208e48e92cb13eeb7f2f23dfba98042bb73ccbc4668138eaa891_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_76091b6439841a9eec11a7b115f3899ae23764938b7f3a8f7cc698926d6ace5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76091b6439841a9eec11a7b115f3899ae23764938b7f3a8f7cc698926d6ace5e->enter($__internal_76091b6439841a9eec11a7b115f3899ae23764938b7f3a8f7cc698926d6ace5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_76091b6439841a9eec11a7b115f3899ae23764938b7f3a8f7cc698926d6ace5e->leave($__internal_76091b6439841a9eec11a7b115f3899ae23764938b7f3a8f7cc698926d6ace5e_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_21f436b6c665093b84afa61848b36c6b6e981770e8dcdf0ca8eb66329cf47170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f436b6c665093b84afa61848b36c6b6e981770e8dcdf0ca8eb66329cf47170->enter($__internal_21f436b6c665093b84afa61848b36c6b6e981770e8dcdf0ca8eb66329cf47170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_21f436b6c665093b84afa61848b36c6b6e981770e8dcdf0ca8eb66329cf47170->leave($__internal_21f436b6c665093b84afa61848b36c6b6e981770e8dcdf0ca8eb66329cf47170_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_789cc242314584a10802355f206774bffd5b9c17ac0a7d9e77339ca23c485e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789cc242314584a10802355f206774bffd5b9c17ac0a7d9e77339ca23c485e0e->enter($__internal_789cc242314584a10802355f206774bffd5b9c17ac0a7d9e77339ca23c485e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_789cc242314584a10802355f206774bffd5b9c17ac0a7d9e77339ca23c485e0e->leave($__internal_789cc242314584a10802355f206774bffd5b9c17ac0a7d9e77339ca23c485e0e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_00cbf7bcdc38a56089d84ea6c08ec1800b1c863dcfd570d290b97ba08f3e7c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00cbf7bcdc38a56089d84ea6c08ec1800b1c863dcfd570d290b97ba08f3e7c61->enter($__internal_00cbf7bcdc38a56089d84ea6c08ec1800b1c863dcfd570d290b97ba08f3e7c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_00cbf7bcdc38a56089d84ea6c08ec1800b1c863dcfd570d290b97ba08f3e7c61->leave($__internal_00cbf7bcdc38a56089d84ea6c08ec1800b1c863dcfd570d290b97ba08f3e7c61_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
