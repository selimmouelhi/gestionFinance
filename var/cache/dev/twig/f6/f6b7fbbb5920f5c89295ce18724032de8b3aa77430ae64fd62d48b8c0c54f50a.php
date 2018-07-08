<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_5d2a948da3721cb807bde9d007090dc14020490e5028809773f6f8c4b5961b2f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>404</title>
    </head>
    <body>
         <div class=\"container-fluid\">
        \t<div class=\"row\" style=\"margin-bottom: -30px;\">
\t        \t<div class=\"col-sm-4 text-center col-sm-offset-4\">
\t\t        \t<img alt=\"\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo_500.png"), "html", null, true);
        echo "\" id=\"logo\" style=\"width: 90%; max-width: 400px;\">
\t        \t</div>
\t        </div>
        \t<div class=\"row second\" style=\"border-top: 2px #006384 solid;\">
        \t\t<div class=\"col-sm-12 text-center\">
\t\t       \t\t<h1 style=\"font-size: 500%;\">Erreur 500</h1>
\t\t        \t<p style=\"font-size: 200%;\">Oups ! ! ! Quelque chose d'incompréhensible vient de se passer.</p> 
\t\t        \t<p style=\"font-size: 200%;\">Je vous invite à retourner à la <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_homepage");
        echo ".\">page principale</a>.</p> 
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <style>
        .second{
\t       /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#def2f8+0,ffffff+79&amp;1+0,0+79 */
\t\t\tbackground: -moz-linear-gradient(top,  rgba(222,242,248,1) 0%, rgba(255,255,255,0) 70%); /* FF3.6-15 */
\t\t\tbackground: -webkit-linear-gradient(top,  rgba(222,242,248,1) 0%,rgba(255,255,255,0) 70%); /* Chrome10-25,Safari5.1-6 */
\t\t\tbackground: linear-gradient(to bottom,  rgba(222,242,248,1) 0%,rgba(255,255,255,0) 70%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
\t\t\tfilter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#def2f8', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */
        }
        </style>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  50 => 18,  40 => 11,  30 => 4,  25 => 1,);
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
<html lang=\"fr\">
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>404</title>
    </head>
    <body>
         <div class=\"container-fluid\">
        \t<div class=\"row\" style=\"margin-bottom: -30px;\">
\t        \t<div class=\"col-sm-4 text-center col-sm-offset-4\">
\t\t        \t<img alt=\"\" src=\"{{ asset('img/logo_500.png') }}\" id=\"logo\" style=\"width: 90%; max-width: 400px;\">
\t        \t</div>
\t        </div>
        \t<div class=\"row second\" style=\"border-top: 2px #006384 solid;\">
        \t\t<div class=\"col-sm-12 text-center\">
\t\t       \t\t<h1 style=\"font-size: 500%;\">Erreur 500</h1>
\t\t        \t<p style=\"font-size: 200%;\">Oups ! ! ! Quelque chose d'incompréhensible vient de se passer.</p> 
\t\t        \t<p style=\"font-size: 200%;\">Je vous invite à retourner à la <a href=\"{{ path('fgs_gestion_comptes_homepage') }}.\">page principale</a>.</p> 
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
        <style>
        .second{
\t       /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#def2f8+0,ffffff+79&amp;1+0,0+79 */
\t\t\tbackground: -moz-linear-gradient(top,  rgba(222,242,248,1) 0%, rgba(255,255,255,0) 70%); /* FF3.6-15 */
\t\t\tbackground: -webkit-linear-gradient(top,  rgba(222,242,248,1) 0%,rgba(255,255,255,0) 70%); /* Chrome10-25,Safari5.1-6 */
\t\t\tbackground: linear-gradient(to bottom,  rgba(222,242,248,1) 0%,rgba(255,255,255,0) 70%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
\t\t\tfilter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#def2f8', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */
        }
        </style>
    </body>
</html>
", "TwigBundle:Exception:error500.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\app/Resources/TwigBundle/views/Exception/error500.html.twig");
    }
}
