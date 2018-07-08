<?php

/* FGSGestionComptesBundle:MouvementsPlanifies:visualiser_mouvements_planifies.html.twig */
class __TwigTemplate_f0341cb21a8a3de5dcd3c7501e4c435c968bc19f206d6653d45189b5b4c55959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FGSGestionComptesBundle::layout.html.twig", "FGSGestionComptesBundle:MouvementsPlanifies:visualiser_mouvements_planifies.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'modal' => array($this, 'block_modal'),
            'contenu' => array($this, 'block_contenu'),
            'titre_contenu' => array($this, 'block_titre_contenu'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:MouvementsPlanifies:visualiser_mouvements_planifies.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:MouvementsPlanifies:visualiser_mouvements_planifies.html.twig"));

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

        echo "Visualisations des planifications";
        
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
        echo "<div class=\"modal\" id=\"confirmation\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">x</button>
\t\t\t<h4 class=\"modal-title\">Attention</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t<p>
\t\t\t\tEtes vous certains de vouloir supprimer le mouvement financier planifié  : <strong id=\"nom_mfp\"></strong> rattaché au compte <strong id=\"nom_compte\"></strong> ?
\t\t\t</p>
\t\t\t<p>
\t\t\t\tCette Action ne pourra pas être annulé.
\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t<a class=\"btn btn-danger\" id=\"valider_suppression\" href=\"#\">
\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span> 
\t\t\t\tSupprimer ce mouvement
\t\t\t</a>
\t\t\t<a href=\"\" class=\"btn btn-info\" data-dismiss=\"modal\" >
\t\t\t\tAnnuler
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 36
        echo "\t<h1 class=\"page-header\">";
        $this->displayBlock('titre_contenu', $context, $blocks);
        echo "</h1>

\t";
        // line 38
        if (twig_test_empty((isset($context["liste_mouvements_financiers_planifies"]) ? $context["liste_mouvements_financiers_planifies"] : $this->getContext($context, "liste_mouvements_financiers_planifies")))) {
            // line 39
            echo "\t<div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\">
\t\t<p><span class=\"glyphicon glyphicon-warning-sign\"></span> Vous n'avez pas encore ajouté de mouvement financier planifié.</p>
\t</div>
\t";
        }
        // line 43
        echo "\t
\t";
        // line 44
        if ( !twig_test_empty((isset($context["liste_mouvements_financiers_planifies"]) ? $context["liste_mouvements_financiers_planifies"] : $this->getContext($context, "liste_mouvements_financiers_planifies")))) {
            // line 45
            echo "\t
\t\t<table class=\"table table-striped \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>
\t\t\t\t\t\tNom du Compte
\t\t\t\t\t</th>
\t\t\t\t\t<th>
\t\t\t\t\t\tLibelle
\t\t\t\t\t</th>
\t\t\t\t\t<th>
\t\t\t\t\t\tMontant
\t\t\t\t\t</th>
\t\t\t\t\t<th>
\t\t\t\t\t\tDate Initiale
\t\t\t\t\t</th>
\t\t\t\t\t<th>
\t\t\t\t\t\tRécurence
\t\t\t\t\t</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_mouvements_financiers_planifies"]) ? $context["liste_mouvements_financiers_planifies"] : $this->getContext($context, "liste_mouvements_financiers_planifies")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["mouvementFinancierPlanifie"]) {
                // line 69
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["mouvementFinancierPlanifie"], "compte", array()), "banque", array()), "urlImage", array()))), "html", null, true);
                echo "\" class='logo-compte' />
\t\t\t\t\t\t";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mouvementFinancierPlanifie"], "compte", array()), "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["mouvementFinancierPlanifie"], "libelle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["mouvementFinancierPlanifie"], "montant", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 76
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mouvementFinancierPlanifie"], "dateInitiale", array()), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("recurence.valeur", $this->getAttribute($context["mouvementFinancierPlanifie"], "intervalValeur", array())), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute($context["mouvementFinancierPlanifie"], "intervalType", array()), $this->getAttribute($context["mouvementFinancierPlanifie"], "intervalValeur", array())), "html", null, true);
                echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href='";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_modifier_mouvements_planifies", array("id" => $this->getAttribute($context["mouvementFinancierPlanifie"], "id", array()))), "html", null, true);
                echo "' class='btn btn-info btn-xs'><span class='glyphicon glyphicon-pencil'></span></a> 
\t\t\t\t\t\t";
                // line 83
                $this->loadTemplate("FGSGestionComptesBundle:MouvementsPlanifies:delete_button.html.twig", "FGSGestionComptesBundle:MouvementsPlanifies:visualiser_mouvements_planifies.html.twig", 83)->display($context);
                // line 84
                echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mouvementFinancierPlanifie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 90
        echo "\t<hr class=\"col-xs-12\"/>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-md-3 col-xs-12\">
\t\t\t<a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouter_depense_planifiee");
        echo "\" class=\"btn btn-warning btn-block\">
\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span> Ajouter une dépense planifiée
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t<a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouter_revenu_planifie");
        echo "\" class=\"btn btn-success btn-block\">
\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span> Ajouter un revenu planifiée
\t\t\t</a>
\t\t</div>
\t</div>";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FGSGestionComptesBundle:MouvementsPlanifies:genererFormDelete"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_titre_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_contenu"));

        echo "Visualisations des planifications";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 108
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/mouvementsplanifies/visualiser.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src='";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/delete-mfp.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FGSGestionComptesBundle:MouvementsPlanifies:visualiser_mouvements_planifies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 114,  324 => 113,  315 => 112,  303 => 109,  299 => 108,  290 => 107,  272 => 36,  262 => 103,  255 => 98,  247 => 93,  242 => 90,  237 => 87,  221 => 84,  219 => 83,  215 => 82,  209 => 79,  205 => 78,  200 => 76,  196 => 75,  192 => 74,  187 => 72,  183 => 71,  179 => 69,  162 => 68,  137 => 45,  135 => 44,  132 => 43,  126 => 39,  124 => 38,  118 => 36,  109 => 35,  72 => 6,  63 => 5,  45 => 3,  11 => 1,);
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

{% block title %}Visualisations des planifications{% endblock %}

{% block modal %}
<div class=\"modal\" id=\"confirmation\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">x</button>
\t\t\t<h4 class=\"modal-title\">Attention</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t<p>
\t\t\t\tEtes vous certains de vouloir supprimer le mouvement financier planifié  : <strong id=\"nom_mfp\"></strong> rattaché au compte <strong id=\"nom_compte\"></strong> ?
\t\t\t</p>
\t\t\t<p>
\t\t\t\tCette Action ne pourra pas être annulé.
\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t<a class=\"btn btn-danger\" id=\"valider_suppression\" href=\"#\">
\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span> 
\t\t\t\tSupprimer ce mouvement
\t\t\t</a>
\t\t\t<a href=\"\" class=\"btn btn-info\" data-dismiss=\"modal\" >
\t\t\t\tAnnuler
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}

{% block contenu %}
\t<h1 class=\"page-header\">{% block titre_contenu %}Visualisations des planifications{% endblock %}</h1>

\t{% if liste_mouvements_financiers_planifies is empty %}
\t<div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\">
\t\t<p><span class=\"glyphicon glyphicon-warning-sign\"></span> Vous n'avez pas encore ajouté de mouvement financier planifié.</p>
\t</div>
\t{% endif %}
\t
\t{% if liste_mouvements_financiers_planifies is not empty %}
\t
\t\t<table class=\"table table-striped \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>
\t\t\t\t\t\tNom du Compte
\t\t\t\t\t</th>
\t\t\t\t\t<th>
\t\t\t\t\t\tLibelle
\t\t\t\t\t</th>
\t\t\t\t\t<th>
\t\t\t\t\t\tMontant
\t\t\t\t\t</th>
\t\t\t\t\t<th>
\t\t\t\t\t\tDate Initiale
\t\t\t\t\t</th>
\t\t\t\t\t<th>
\t\t\t\t\t\tRécurence
\t\t\t\t\t</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t{% for mouvementFinancierPlanifie in liste_mouvements_financiers_planifies %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img src=\"{{ asset('img/'~mouvementFinancierPlanifie.compte.banque.urlImage) }}\" class='logo-compte' />
\t\t\t\t\t\t{{ mouvementFinancierPlanifie.compte.nom }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ mouvementFinancierPlanifie.libelle }}</td>
\t\t\t\t\t<td>{{ mouvementFinancierPlanifie.montant }}</td>
\t\t\t\t\t<td>{{ mouvementFinancierPlanifie.dateInitiale|date(\"d/m/Y\") }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ 'recurence.valeur'|transchoice(mouvementFinancierPlanifie.intervalValeur) }}
\t\t\t\t\t\t{{ mouvementFinancierPlanifie.intervalType|transchoice(mouvementFinancierPlanifie.intervalValeur) }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href='{{ path('fgs_gestion_comptes_modifier_mouvements_planifies', {'id':mouvementFinancierPlanifie.id}) }}' class='btn btn-info btn-xs'><span class='glyphicon glyphicon-pencil'></span></a> 
\t\t\t\t\t\t{% include 'FGSGestionComptesBundle:MouvementsPlanifies:delete_button.html.twig' %}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t{% endif %}
\t<hr class=\"col-xs-12\"/>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-md-3 col-xs-12\">
\t\t\t<a href=\"{{ path('fgs_gestion_comptes_ajouter_depense_planifiee') }}\" class=\"btn btn-warning btn-block\">
\t\t\t\t<span class=\"glyphicon glyphicon-minus\"></span> Ajouter une dépense planifiée
\t\t\t</a>
\t\t</div>
\t\t<div class=\"col-md-3 col-xs-12\">
\t\t\t<a href=\"{{ path('fgs_gestion_comptes_ajouter_revenu_planifie') }}\" class=\"btn btn-success btn-block\">
\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span> Ajouter un revenu planifiée
\t\t\t</a>
\t\t</div>
\t</div>\t
\t{{- render(controller('FGSGestionComptesBundle:MouvementsPlanifies:genererFormDelete')) -}}
{% endblock %}


{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/mouvementsplanifies/visualiser.css') }}\">
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src='{{ asset('bundles/fgsgestioncomptes/js/delete-mfp.js') }}'></script>
{% endblock %}
", "FGSGestionComptesBundle:MouvementsPlanifies:visualiser_mouvements_planifies.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle/Resources/views/MouvementsPlanifies/visualiser_mouvements_planifies.html.twig");
    }
}
