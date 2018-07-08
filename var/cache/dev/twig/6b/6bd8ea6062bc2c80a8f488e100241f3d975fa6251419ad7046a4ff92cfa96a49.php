<?php

/* FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_mois.html.twig */
class __TwigTemplate_c6cfef68656576d3e6f106a5844d5788702e5f7881e4236d3e1a9f8b105a27c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FGSGestionComptesBundle::layout.html.twig", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_mois.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'modal' => array($this, 'block_modal'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_mois.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_mois.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

    // line 5
    public function block_modal($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 6
        echo "<!-- Boite de dialogue -->
<div class=\"modal\" id=\"date\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 16
        echo "<!-- Titre (image, nom et date du mois en cours) -->
<div class='row'>
\t<div class=\"col-md-1 col-xs-2\" class=\"height: 38px;\">
\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute($this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "banque", array()), "urlImage", array()))), "html", null, true);
        echo "\" class=\"logo-compte\" />
\t</div>
\t<div class=\"col-md-11 col-xs-10\">
\t\t<h1>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "nom", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "actuelle", array()), "full", "none", null, null, "MMMM YYYY"), "html", null, true);
        echo ")</h1>
\t</div>
</div>

<!--  Totaux (Revenus, Totaux, Dépenses)-->
<div class='row'>
\t<!--  Revenus -->
\t<div class='col-md-4'>
\t\t<div class='gestion-compte-info gestion-compte-info-revenu'>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Revenu à ce jour</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["totaux"]) ? $context["totaux"] : $this->getContext($context, "totaux")), "revenu_not_planified", array()), "html", null, true);
        echo " €</div>
\t\t\t</div>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Revenu à venir</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["totaux"]) ? $context["totaux"] : $this->getContext($context, "totaux")), "revenu_planified", array()), "html", null, true);
        echo " €</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<!--  Totaux -->
\t<div class='col-md-4'>
\t\t<div class='gestion-compte-info gestion-compte-info-total'>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Total à ce jour</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "montantActuel", array()), "html", null, true);
        echo " €</div>
\t\t\t</div>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Total planifié</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "montantActuel", array()) + $this->getAttribute((isset($context["totaux"]) ? $context["totaux"] : $this->getContext($context, "totaux")), "revenu_planified", array())) + $this->getAttribute((isset($context["totaux"]) ? $context["totaux"] : $this->getContext($context, "totaux")), "depense_planified", array())), "html", null, true);
        echo " €</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!--  Dépenses -->
\t<div class='col-md-4'>
\t\t<div class='gestion-compte-info gestion-compte-info-depense'>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Dépense à ce jour</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>";
        // line 61
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["totaux"]) ? $context["totaux"] : $this->getContext($context, "totaux")), "depense_not_planified", array())), "html", null, true);
        echo " €</div>
\t\t\t</div>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Dépense à venir</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>";
        // line 65
        echo twig_escape_filter($this->env, abs($this->getAttribute((isset($context["totaux"]) ? $context["totaux"] : $this->getContext($context, "totaux")), "depense_planified", array())), "html", null, true);
        echo " €</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 71
        if ( !twig_test_empty($this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "mouvementFinanciers", array()))) {
            // line 72
            echo "\t<div class='row'>
\t\t<!-- visualisations des mouvements financiers  -->
\t\t<div class='col-md-9'>
\t\t\t<ul class=\"nav nav-tabs nav-justified\">
\t\t\t\t<li class=\"active\"><a href=\"#operations\" data-toggle=\"tab\">Opérations  <span class=\"badge\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["totaux"]) ? $context["totaux"] : $this->getContext($context, "totaux")), "nb_not_planified", array()), "html", null, true);
            echo "</span></a></li>
\t\t\t\t<li><a href=\"#operations_planifiees\" data-toggle=\"tab\">Opérations à venir <span class=\"badge\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["totaux"]) ? $context["totaux"] : $this->getContext($context, "totaux")), "nb_planified", array()), "html", null, true);
            echo "</span></a></li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<!-- Mouvements financiers effectifs -->
\t\t\t\t<div class=\"tab-pane active\" id=\"operations\">
\t\t\t\t\t";
            // line 82
            if ( !twig_test_empty($this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getMouvementFinanciersPlanified", array()))) {
                // line 83
                echo "\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig", array("liste_mouvement_financier" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "getMouvementFinanciersPlanified", array()), "caption_bottom" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("mouvement.valeur", $this->getAttribute((isset($context["totaux"]) ? $context["totaux"] : $this->getContext($context, "totaux")), "nb_not_planified", array()))));
                echo "
\t\t\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t\t\t<p class='no-transaction'>Aucune transaction n'a encore été réalisée sur ce compte ce mois ci.<p>
\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Mouvements financiers planifiées -->
\t\t\t\t<div class=\"tab-pane\" id=\"operations_planifiees\">
\t\t\t\t\t";
            // line 92
            if ( !twig_test_empty($this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "mouvementFinanciersNotPlanified", array()))) {
                // line 93
                echo "\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig", array("liste_mouvement_financier" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "mouvementFinanciersNotPlanified", array()), "caption_bottom" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("mouvement_planifie.valeur", $this->getAttribute((isset($context["totaux"]) ? $context["totaux"] : $this->getContext($context, "totaux")), "nb_planified", array()))));
                echo "
\t\t\t\t\t";
            } else {
                // line 95
                echo "\t\t\t\t\t\t<p class='no-transaction'>Aucune transaction planifiée n'est prévue sur ce compte ce mois ci.</p>
\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
\t\t
\t\t<div class='col-md-3'>
\t\t\t<div class=\"panel panel-danger\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\tRépartition Dépenses
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<canvas id=\"canvas-depense\" />
\t\t\t\t\t</div>
\t\t\t\t\t<ul class='list-group list-group-depenses' >
\t\t\t\t\t\t";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totaux_par_categorie"]) ? $context["totaux_par_categorie"] : $this->getContext($context, "totaux_par_categorie")));
            foreach ($context['_seq'] as $context["_key"] => $context["totalCategorie"]) {
                // line 113
                echo "\t\t\t\t\t\t\t<li class='list-group-item'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["totalCategorie"], "libelle_categorie", array(), "array"), "html", null, true);
                echo " <span class=\"badge pull-right\">";
                echo twig_escape_filter($this->env, abs($this->getAttribute($context["totalCategorie"], "total", array(), "array")), "html", null, true);
                echo " €</span></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['totalCategorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        } else {
            // line 121
            echo "\t<p class='well well-sm no-transaction'>Aucune transaction n'a encore été réalisé sur ce compte ce mois ci.<p>
";
        }
        // line 123
        echo "
<nav>
\t<ul class=\"pager\">
\t\t<li class=\"\"><a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "annee" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "moins_1_mois", array()), "Y"), "mois" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "moins_1_mois", array()), "m"))), "html", null, true);
        echo "\"><span aria-hidden=\"true\">&larr;</span> Mois précédent</a></li>
\t\t<li class=\"\"id=\"mois_annee_en_cours\"><a href='";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "'><span class='glyphicon glyphicon-calendar'></span></a></li>
\t\t<li class=\"\"><a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "annee" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "plus_1_mois", array()), "Y"), "mois" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "plus_1_mois", array()), "m"))), "html", null, true);
        echo "\">Mois suivant <span aria-hidden=\"true\">&rarr;</span></a></li>
\t</ul>
</nav>";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FGSGestionComptesBundle:Mouvements:genererFormsCheckAndDelete"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 135
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/iconset/daily-life.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/mouvements/visualiser_mouvements_compte_mois.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsbootstrap/css/datepicker3.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/Chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsbootstrap/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsbootstrap/js/locales/bootstrap-datepicker.fr.js"), "html", null, true);
        echo "\"></script>
<script src='";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/activate-tooltip.js"), "html", null, true);
        echo "'></script>
<script src='";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/check-or-delete-mf.js"), "html", null, true);
        echo "'></script>
<script src='";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/mouvements/visualiser_mouvements_compte_mois.js"), "html", null, true);
        echo "'></script>

<script>
//graphique
var dataCanvasDepense = [
\t";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totaux_par_categorie"]) ? $context["totaux_par_categorie"] : $this->getContext($context, "totaux_par_categorie")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["totalCategorie"]) {
            // line 155
            echo "\t{
\t\tvalue: ";
            // line 156
            echo twig_escape_filter($this->env, abs($this->getAttribute($context["totalCategorie"], "total", array(), "array")), "html", null, true);
            echo ",
\t\tcolor:\"#F7464A\",
\t\thighlight: \"#FF5A5E\",
\t\tlabel: \"";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["totalCategorie"], "libelle_categorie", array(), "array"), "html", null, true);
            echo "\"
\t}
\t";
            // line 161
            echo ((($this->getAttribute($context["loop"], "last", array()) == false)) ? (",") : (""));
            echo "
\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['totalCategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "];

var confCanvas = {responsive : true};

window.onload = function(){
\tvar ctx = document.getElementById(\"canvas-depense\").getContext(\"2d\");
\twindow.myDoughnut = new Chart(ctx).Doughnut(dataCanvasDepense, confCanvas);

};


</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_mois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 163,  408 => 161,  403 => 159,  397 => 156,  394 => 155,  377 => 154,  369 => 149,  365 => 148,  361 => 147,  357 => 146,  353 => 145,  349 => 144,  345 => 143,  336 => 142,  324 => 138,  320 => 137,  316 => 136,  312 => 135,  303 => 134,  293 => 131,  288 => 128,  284 => 127,  280 => 126,  275 => 123,  271 => 121,  263 => 115,  252 => 113,  248 => 112,  231 => 97,  227 => 95,  221 => 93,  219 => 92,  212 => 87,  208 => 85,  202 => 83,  200 => 82,  192 => 77,  188 => 76,  182 => 72,  180 => 71,  171 => 65,  164 => 61,  151 => 51,  144 => 47,  131 => 37,  124 => 33,  108 => 22,  102 => 19,  97 => 16,  88 => 15,  71 => 6,  62 => 5,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FGSGestionComptesBundle::layout.html.twig\" %}

{% block title %}Visualisation des données d'un compte{% endblock %}

{% block modal %}
<!-- Boite de dialogue -->
<div class=\"modal\" id=\"date\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t</div>
\t</div>
</div>
{% endblock %}

{% block contenu %}
<!-- Titre (image, nom et date du mois en cours) -->
<div class='row'>
\t<div class=\"col-md-1 col-xs-2\" class=\"height: 38px;\">
\t\t<img src=\"{{ asset('img/'~compte.banque.urlImage) }}\" class=\"logo-compte\" />
\t</div>
\t<div class=\"col-md-11 col-xs-10\">
\t\t<h1>{{ compte.nom }} ({{ date.actuelle|localizeddate('full','none',null, null, 'MMMM YYYY') }})</h1>
\t</div>
</div>

<!--  Totaux (Revenus, Totaux, Dépenses)-->
<div class='row'>
\t<!--  Revenus -->
\t<div class='col-md-4'>
\t\t<div class='gestion-compte-info gestion-compte-info-revenu'>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Revenu à ce jour</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>{{ totaux.revenu_not_planified }} €</div>
\t\t\t</div>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Revenu à venir</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>{{ totaux.revenu_planified }} €</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<!--  Totaux -->
\t<div class='col-md-4'>
\t\t<div class='gestion-compte-info gestion-compte-info-total'>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Total à ce jour</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>{{ compte.montantActuel }} €</div>
\t\t\t</div>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Total planifié</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>{{ compte.montantActuel + totaux.revenu_planified + totaux.depense_planified }} €</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!--  Dépenses -->
\t<div class='col-md-4'>
\t\t<div class='gestion-compte-info gestion-compte-info-depense'>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Dépense à ce jour</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>{{ totaux.depense_not_planified | abs }} €</div>
\t\t\t</div>
\t\t\t<div class='col-md-6'>
\t\t\t\t<h3 class='gestion-compte-info-titre'>Dépense à venir</h3>
\t\t\t\t<div class='gestion-compte-info-contenu'>{{ totaux.depense_planified | abs }} €</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{% if compte.mouvementFinanciers is not empty %}
\t<div class='row'>
\t\t<!-- visualisations des mouvements financiers  -->
\t\t<div class='col-md-9'>
\t\t\t<ul class=\"nav nav-tabs nav-justified\">
\t\t\t\t<li class=\"active\"><a href=\"#operations\" data-toggle=\"tab\">Opérations  <span class=\"badge\">{{ totaux.nb_not_planified }}</span></a></li>
\t\t\t\t<li><a href=\"#operations_planifiees\" data-toggle=\"tab\">Opérations à venir <span class=\"badge\">{{ totaux.nb_planified }}</span></a></li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<!-- Mouvements financiers effectifs -->
\t\t\t\t<div class=\"tab-pane active\" id=\"operations\">
\t\t\t\t\t{% if compte.getMouvementFinanciersPlanified is not empty %}
\t\t\t\t\t\t{{ include('FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig', { 'liste_mouvement_financier' : compte.getMouvementFinanciersPlanified, 'caption_bottom': 'mouvement.valeur'|transchoice(totaux.nb_not_planified) }) }}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p class='no-transaction'>Aucune transaction n'a encore été réalisée sur ce compte ce mois ci.<p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- Mouvements financiers planifiées -->
\t\t\t\t<div class=\"tab-pane\" id=\"operations_planifiees\">
\t\t\t\t\t{% if compte.mouvementFinanciersNotPlanified is not empty %}
\t\t\t\t\t\t{{ include('FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig', { 'liste_mouvement_financier' : compte.mouvementFinanciersNotPlanified, 'caption_bottom': 'mouvement_planifie.valeur'|transchoice(totaux.nb_planified) }) }}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p class='no-transaction'>Aucune transaction planifiée n'est prévue sur ce compte ce mois ci.</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
\t\t
\t\t<div class='col-md-3'>
\t\t\t<div class=\"panel panel-danger\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\tRépartition Dépenses
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<canvas id=\"canvas-depense\" />
\t\t\t\t\t</div>
\t\t\t\t\t<ul class='list-group list-group-depenses' >
\t\t\t\t\t\t{% for totalCategorie in totaux_par_categorie %}
\t\t\t\t\t\t\t<li class='list-group-item'>{{ totalCategorie['libelle_categorie'] }} <span class=\"badge pull-right\">{{ totalCategorie['total']|abs  }} €</span></li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% else %}
\t<p class='well well-sm no-transaction'>Aucune transaction n'a encore été réalisé sur ce compte ce mois ci.<p>
{% endif %}

<nav>
\t<ul class=\"pager\">
\t\t<li class=\"\"><a href=\"{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois', {'id':id, 'annee':date.moins_1_mois|date('Y'),'mois':date.moins_1_mois|date('m')}) }}\"><span aria-hidden=\"true\">&larr;</span> Mois précédent</a></li>
\t\t<li class=\"\"id=\"mois_annee_en_cours\"><a href='{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois', {'id':id}) }}'><span class='glyphicon glyphicon-calendar'></span></a></li>
\t\t<li class=\"\"><a href=\"{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois', {'id':id, 'annee':date.plus_1_mois|date('Y'),'mois':date.plus_1_mois|date('m')}) }}\">Mois suivant <span aria-hidden=\"true\">&rarr;</span></a></li>
\t</ul>
</nav>
{{- render(controller('FGSGestionComptesBundle:Mouvements:genererFormsCheckAndDelete')) -}}
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/iconset/daily-life.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/mouvements/visualiser_mouvements_compte_mois.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsbootstrap/css/datepicker3.css') }}\">
{% endblock %}


{% block javascripts %}
{{ parent() }}
<script src=\"{{ asset('bundles/fgsgestioncomptes/js/Chart.js') }}\"></script>
<script src=\"{{ asset('bundles/fgsbootstrap/js/bootstrap-datepicker.js') }}\"></script>
<script src=\"{{ asset('bundles/fgsbootstrap/js/locales/bootstrap-datepicker.fr.js') }}\"></script>
<script src='{{ asset('bundles/fgsgestioncomptes/js/activate-tooltip.js') }}'></script>
<script src='{{ asset('bundles/fgsgestioncomptes/js/check-or-delete-mf.js') }}'></script>
<script src='{{ asset('bundles/fgsgestioncomptes/js/mouvements/visualiser_mouvements_compte_mois.js') }}'></script>

<script>
//graphique
var dataCanvasDepense = [
\t{% for totalCategorie in totaux_par_categorie %}
\t{
\t\tvalue: {{ totalCategorie['total']|abs  }},
\t\tcolor:\"#F7464A\",
\t\thighlight: \"#FF5A5E\",
\t\tlabel: \"{{ totalCategorie['libelle_categorie'] }}\"
\t}
\t{{ loop.last == false ? ',' }}
\t{% endfor %}
];

var confCanvas = {responsive : true};

window.onload = function(){
\tvar ctx = document.getElementById(\"canvas-depense\").getContext(\"2d\");
\twindow.myDoughnut = new Chart(ctx).Doughnut(dataCanvasDepense, confCanvas);

};


</script>
{% endblock %}
", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_mois.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle/Resources/views/Mouvements/visualiser_mouvements_compte_mois.html.twig");
    }
}
