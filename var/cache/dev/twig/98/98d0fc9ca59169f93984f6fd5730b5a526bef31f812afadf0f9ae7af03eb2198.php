<?php

/* FGSGestionComptesBundle:Utils:menu2.html.twig */
class __TwigTemplate_c10f33f3e1238d4d50005bf0f88a8e622422300cddd7b6bb4fc2c22aad60bcf4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Utils:menu2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Utils:menu2.html.twig"));

        // line 1
        $context["page_courante"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 2
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
\t<div class=\"container-fluid\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_homepage");
        echo "\">
\t\t\t\t<img alt=\"ma-petite-tirelire.fr\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icone.png"), "html", null, true);
        echo "\" id=\"logo\">
\t\t\t</a>
\t\t</div>


\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li >
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Mes comptes <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li ><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Ajouter un compte</a></li>
\t\t\t\t\t\t<li ><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Gérer mes comptes</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li >
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Categories <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li ><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Ajouter une catégorie</a></li>
\t\t\t\t\t\t<li {><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Gerer mes categories</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li >
\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Dépense</a>
\t\t\t\t</li>
\t\t\t\t<li >
\t\t\t\t\t<a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" >Revenu</a>
\t\t\t\t</li>
\t\t\t\t<li >
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Planifier <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li ><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Ajouter une dépense planifiée</a></li>
\t\t\t\t\t\t<li ><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Ajouter un revenu planifié</a></li>
\t\t\t\t\t\t<li {><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Visualiser mes planifications</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t</ul>
\t\t\t\t\t
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Connexion</a></li>

\t\t\t</ul>
\t\t</div>
\t</div><!-- /.container-fluid -->
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FGSGestionComptesBundle:Utils:menu2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  102 => 45,  98 => 44,  94 => 43,  86 => 38,  80 => 35,  73 => 31,  69 => 30,  60 => 24,  56 => 23,  43 => 13,  39 => 12,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set page_courante = app.request.attributes.get('_route') %}
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
\t<div class=\"container-fluid\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"{{ path('fgs_gestion_comptes_homepage') }}\">
\t\t\t\t<img alt=\"ma-petite-tirelire.fr\" src=\"{{ asset('img/icone.png') }}\" id=\"logo\">
\t\t\t</a>
\t\t</div>


\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li >
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Mes comptes <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li ><a href=\"{{ path('fos_user_security_login') }}\">Ajouter un compte</a></li>
\t\t\t\t\t\t<li ><a href=\"{{ path('fos_user_security_login') }}\">Gérer mes comptes</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li >
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Categories <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li ><a href=\"{{ path('fos_user_security_login') }}\">Ajouter une catégorie</a></li>
\t\t\t\t\t\t<li {><a href=\"{{ path('fos_user_security_login') }}\">Gerer mes categories</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li >
\t\t\t\t\t<a href=\"{{ path('fos_user_security_login') }}\">Dépense</a>
\t\t\t\t</li>
\t\t\t\t<li >
\t\t\t\t\t<a href=\"{{ path('fos_user_security_login') }}\" >Revenu</a>
\t\t\t\t</li>
\t\t\t\t<li >
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Planifier <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li ><a href=\"{{ path('fos_user_security_login') }}\">Ajouter une dépense planifiée</a></li>
\t\t\t\t\t\t<li ><a href=\"{{ path('fos_user_security_login') }}\">Ajouter un revenu planifié</a></li>
\t\t\t\t\t\t<li {><a href=\"{{ path('fos_user_security_login') }}\">Visualiser mes planifications</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t</ul>
\t\t\t\t\t
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li><a href=\"{{ path('fos_user_security_login') }}\">Connexion</a></li>

\t\t\t</ul>
\t\t</div>
\t</div><!-- /.container-fluid -->
</nav>
", "FGSGestionComptesBundle:Utils:menu2.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle\\Resources\\views\\Utils\\menu2.html.twig");
    }
}
