<?php

/* FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte.html.twig */
class __TwigTemplate_834163e347fb093d5cd2e5f31e4f4f4aae9c32e1f633ae7cf326d1d83d56aee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("FGSGestionComptesBundle::layout.html.twig", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenu' => array($this, 'block_contenu'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FGSGestionComptesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte.html.twig"));

        // line 1
        $context["paginationMax"] = twig_round(((isset($context["maxMouvementFinanciers"]) ? $context["maxMouvementFinanciers"] : $this->getContext($context, "maxMouvementFinanciers")) / (isset($context["longueur"]) ? $context["longueur"] : $this->getContext($context, "longueur"))), 0, "ceil");
        // line 2
        $context["paginationAct"] = twig_round((((isset($context["positionActuelle"]) ? $context["positionActuelle"] : $this->getContext($context, "positionActuelle")) + (isset($context["longueur"]) ? $context["longueur"] : $this->getContext($context, "longueur"))) / (isset($context["longueur"]) ? $context["longueur"] : $this->getContext($context, "longueur"))), 0, "floor");
        // line 4
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visualisation des données d'un compte";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 9
        echo "\t<div class='row'>
\t\t<div class='col-xs-12, col-md-4'>
\t\t\t<canvas id=\"canvas-categorie-totaux\" width=\"2\" height=\"1\"/>
\t\t</div>
\t\t<div class='col-xs-12, col-md-6'>

\t\t</div>
\t</div>
\t
\t<div class='row'>
\t\t<div class=\"col-md-1 col-xs-2\" class=\"height: 38px;\">
\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute($this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "banque", array()), "urlImage", array()))), "html", null, true);
        echo "\" class='logo-compte' />
\t\t</div>
\t\t<div class=\"col-md-11 col-xs-10\">
\t\t\t<h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "nom", array()), "html", null, true);
        echo "<span class=\"label ";
        echo ((($this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "montantActuel", array()) < 0)) ? ("label-danger") : ("label-success"));
        echo " pull-right\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "montantActuel", array()), 2, ",", " "), "html", null, true);
        echo " €</span></h1>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-6 col-md-3 col-xs-12\">
\t\t\t<a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">
\t\t\t\t<span class='glyphicon glyphicon-calendar'></span> Visualisation du mois en cours
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t<a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">
\t\t\t\t<span class='glyphicon glyphicon-calendar'></span> Visualisation de l'année en cours</a>
\t\t</div>
\t</div>\t

\t";
        // line 38
        if ( !twig_test_empty($this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "mouvementFinanciers", array()))) {
            // line 39
            echo "\t\t";
            echo twig_include($this->env, $context, "FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig", array("liste_mouvement_financier" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "mouvementFinanciers", array()), "caption_top" => (((("Visualisation de vos dernières opérations (page " . (isset($context["paginationAct"]) ? $context["paginationAct"] : $this->getContext($context, "paginationAct"))) . " / ") . (isset($context["paginationMax"]) ? $context["paginationMax"] : $this->getContext($context, "paginationMax"))) . ")")));
            echo "
\t\t
\t\t<div class='text-center'>
\t\t\t<nav>
\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["paginationMax"]) ? $context["paginationMax"] : $this->getContext($context, "paginationMax"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 45
                echo "\t\t\t\t\t\t<li class=\"";
                echo ((((isset($context["paginationAct"]) ? $context["paginationAct"] : $this->getContext($context, "paginationAct")) == $context["i"])) ? ("active") : (""));
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "debut" => (($context["i"] - 1) * (isset($context["longueur"]) ? $context["longueur"] : $this->getContext($context, "longueur"))), "longueur" => (isset($context["longueur"]) ? $context["longueur"] : $this->getContext($context, "longueur")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t";
        } else {
            // line 51
            echo "\t\t<p class='well well-sm' style='background-color:#fff; margin-top: 10px;'>Aucune transaction n'a encore été réalisé sur ce compte<p>
\t";
        }
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FGSGestionComptesBundle:Mouvements:genererFormsCheckAndDelete"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 59
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/iconset/daily-life.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/mouvements/visualiser_mouvements_compte.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src='";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/activate-tooltip.js"), "html", null, true);
        echo "'></script>
<script src='";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/check-or-delete-mf.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 67,  212 => 66,  208 => 65,  199 => 64,  187 => 61,  183 => 60,  179 => 59,  170 => 58,  160 => 54,  156 => 51,  150 => 47,  137 => 45,  133 => 44,  124 => 39,  122 => 38,  114 => 33,  106 => 28,  94 => 23,  88 => 20,  75 => 9,  66 => 8,  48 => 6,  38 => 4,  36 => 2,  34 => 1,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set paginationMax \t= (maxMouvementFinanciers/(longueur))|round(0,'ceil') %}
{% set paginationAct\t= ((positionActuelle+longueur)/longueur)|round(0,'floor') %}
\t\t\t\t\t
{% extends \"FGSGestionComptesBundle::layout.html.twig\" %}

{% block title %}Visualisation des données d'un compte{% endblock %}

{% block contenu %}
\t<div class='row'>
\t\t<div class='col-xs-12, col-md-4'>
\t\t\t<canvas id=\"canvas-categorie-totaux\" width=\"2\" height=\"1\"/>
\t\t</div>
\t\t<div class='col-xs-12, col-md-6'>

\t\t</div>
\t</div>
\t
\t<div class='row'>
\t\t<div class=\"col-md-1 col-xs-2\" class=\"height: 38px;\">
\t\t\t<img src=\"{{ asset('img/'~compte.banque.urlImage) }}\" class='logo-compte' />
\t\t</div>
\t\t<div class=\"col-md-11 col-xs-10\">
\t\t\t<h1>{{ compte.nom }}<span class=\"label {{ compte.montantActuel < 0 ? 'label-danger':'label-success' }} pull-right\">{{ compte.montantActuel|number_format(2, ',', ' ') }} €</span></h1>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-6 col-md-3 col-xs-12\">
\t\t\t<a href=\"{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois',{'id':id}) }}\" class=\"btn btn-primary btn-block\">
\t\t\t\t<span class='glyphicon glyphicon-calendar'></span> Visualisation du mois en cours
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t<a href=\"{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee',{'id':id}) }}\" class=\"btn btn-primary btn-block\">
\t\t\t\t<span class='glyphicon glyphicon-calendar'></span> Visualisation de l'année en cours</a>
\t\t</div>
\t</div>\t

\t{% if compte.mouvementFinanciers is not empty %}
\t\t{{ include('FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig', { 'liste_mouvement_financier' : compte.mouvementFinanciers, 'caption_top':'Visualisation de vos dernières opérations (page '~paginationAct~' / '~paginationMax~')' }) }}
\t\t
\t\t<div class='text-center'>
\t\t\t<nav>
\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t{% for i in 1..paginationMax %}
\t\t\t\t\t\t<li class=\"{{ paginationAct == i ? 'active'}}\"><a href=\"{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte', {'id':id, 'debut':(((i-1)*longueur)), 'longueur':longueur}) }}\">{{ i }} <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t{% else %}
\t\t<p class='well well-sm' style='background-color:#fff; margin-top: 10px;'>Aucune transaction n'a encore été réalisé sur ce compte<p>
\t{% endif %}

\t{{- render(controller('FGSGestionComptesBundle:Mouvements:genererFormsCheckAndDelete')) -}}
{% endblock %}


{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/iconset/daily-life.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/mouvements/visualiser_mouvements_compte.css') }}\">
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src='{{ asset('bundles/fgsgestioncomptes/js/activate-tooltip.js') }}'></script>
<script src='{{ asset('bundles/fgsgestioncomptes/js/check-or-delete-mf.js') }}'></script>
{% endblock %}
", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle/Resources/views/Mouvements/visualiser_mouvements_compte.html.twig");
    }
}
