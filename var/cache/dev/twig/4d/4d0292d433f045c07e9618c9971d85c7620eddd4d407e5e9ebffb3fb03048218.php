<?php

/* FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_annee.html.twig */
class __TwigTemplate_a000e389cfda91d9283f290bcde76a74c7f6024eec71a801bc828a98f9ba9dea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FGSGestionComptesBundle::layout.html.twig", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_annee.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_annee.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_annee.html.twig"));

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

    // line 6
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 7
        echo "<div class='row'>
\t<div class=\"col-md-1 col-xs-2\" class=\"height: 38px;\">
\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute($this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "banque", array()), "urlImage", array()))), "html", null, true);
        echo "\" class='logo-compte' />
\t</div>
\t<div class=\"col-md-11 col-xs-10\">
\t\t<h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "nom", array()), "html", null, true);
        echo " (Année : ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "Y"), "html", null, true);
        echo ")</h1>
\t</div>
</div> 

<div class='row'>\t\t
\t\t<div class='col-md-8'>
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading \">Graphique des mouvements financiers de l'année</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<canvas id=\"canvas-annee-type-bilan\" />
\t\t\t\t\t</div>
\t\t\t\t\t<ul class='pager'>
\t\t\t\t\t\t<li class='revenus'><span class=\"badge\"><span class='text-center glyphicon icon-arrow-graph-up-right'></span></span> Revenus</li>
\t\t\t\t\t\t<li class='depenses'><span class=\"badge\"><span class='text-center glyphicon icon-arrow-graph-down-right'></span></span> Dépenses</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class='col-md-4'>
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading \">Mouvements financiers de l'année</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<table class='table'>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\tMois
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\tRevenus
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\tDépenses
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["depense_annee"]) ? $context["depense_annee"] : $this->getContext($context, "depense_annee")));
        foreach ($context['_seq'] as $context["_key"] => $context["bilan_mois"]) {
            // line 51
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\" ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois", array("id" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id", array()), "annee" => twig_date_format_filter($this->env, $this->getAttribute($context["bilan_mois"], "date", array(), "array"), "Y"), "mois" => twig_date_format_filter($this->env, $this->getAttribute($context["bilan_mois"], "date", array(), "array"), "m"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["bilan_mois"], "date", array(), "array"), "full", "none", null, null, "MMMM")), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["bilan_mois"], "montant_revenu", array(), "array"), "html", null, true);
            echo " €
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 59
            echo twig_escape_filter($this->env, abs($this->getAttribute($context["bilan_mois"], "montant_depense", array(), "array")), "html", null, true);
            echo " €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bilan_mois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</div>

<div class='row'>\t\t
\t<div class='col-md-12'>
\t\t<nav>
\t\t\t<ul class=\"pager\">
\t\t\t\t<li class=\"\"><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee", array("id" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id", array()), "annee" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "-1 year"), "Y"))), "html", null, true);
        echo "\"><span aria-hidden=\"true\">&larr;</span> Année précédente</a></li>
\t\t\t\t<li class=\"\" id=\"annee_choix\"><a href='";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee", array("id" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id", array()))), "html", null, true);
        echo "'><span class='glyphicon glyphicon-calendar'></span></a></li>
\t\t\t\t<li class=\"\"><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee", array("id" => $this->getAttribute((isset($context["compte"]) ? $context["compte"] : $this->getContext($context, "compte")), "id", array()), "annee" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "+1 year"), "Y"))), "html", null, true);
        echo "\">Année suivante <span aria-hidden=\"true\">&rarr;</span></a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 86
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/iconset/daily-life.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsbootstrap/css/datepicker3.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/mouvements/visualiser_mouvements_compte_annee.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/Chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsbootstrap/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsbootstrap/js/locales/bootstrap-datepicker.fr.js"), "html", null, true);
        echo "\"></script>
<script src='";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/mouvements/visualiser_mouvements_compte_anee.js"), "html", null, true);
        echo "'></script>
<script>

//graphique
var data = {
    labels: [\t";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["depense_annee"]) ? $context["depense_annee"] : $this->getContext($context, "depense_annee")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["bilan_mois"]) {
            // line 104
            echo "\t\t\t\t\"";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["bilan_mois"], "date", array(), "array"), "full", "none", null, null, "MMMM")), "html", null, true);
            echo "\"
\t\t\t\t";
            // line 105
            echo ((($this->getAttribute($context["loop"], "last", array()) == false)) ? (",") : (""));
            echo "
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bilan_mois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "],
    datasets: [
        {
            label: \"Revenus\",
            fillColor: \"rgba(138,194,73,0.2)\",
            strokeColor: \"rgba(138,194,73,1)\",
            pointColor: \"rgba(138,194,73,1)\",
            pointStrokeColor: \"#fff\",
            pointHighlightFill: \"#fff\",
            pointHighlightStroke: \"rgba(220,220,220,1)\",
            data: [\t";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["depense_annee"]) ? $context["depense_annee"] : $this->getContext($context, "depense_annee")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["bilan_mois"]) {
            // line 117
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bilan_mois"], "montant_revenu", array(), "array"), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 118
            echo ((($this->getAttribute($context["loop"], "last", array()) == false)) ? (",") : (""));
            echo "
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bilan_mois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "]
        },
        {
            label: \"Dépenses\",
            fillColor: \"rgba(220,28,93,0.1)\",
            strokeColor: \"rgba(220,28,93,1)\",
            pointColor: \"rgba(220,28,93,1)\",
            pointStrokeColor: \"#fff\",
            pointHighlightFill: \"#fff\",
            pointHighlightStroke: \"rgba(151,187,205,1)\",
            data: [\t";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["depense_annee"]) ? $context["depense_annee"] : $this->getContext($context, "depense_annee")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["bilan_mois"]) {
            // line 130
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, abs($this->getAttribute($context["bilan_mois"], "montant_depense", array(), "array")), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 131
            echo ((($this->getAttribute($context["loop"], "last", array()) == false)) ? (",") : (""));
            echo "
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bilan_mois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "]
        }
    ]
};

var confCanvas = \t{\tresponsive : true,
\t\t\t\t\t\ttooltipCornerRadius : 0,
\t\t\t\t\t\ttooltipFontFamilly : \"'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif\",
\t\t\t\t\t\ttooltipFontSize: 12,
\t\t\t\t\t\ttooltipTitleFontSize: 12,
\t\t\t\t\t\ttooltipYPadding: 6,
\t\t\t\t\t\ttooltipXPadding: 10,
\t\t\t\t\t    multiTooltipTemplate: \"<%= datasetLabel%> : <%= value + ' €' %>\",
\t\t\t\t\t};



window.onload = function(){
\tvar ctx = document.getElementById(\"canvas-annee-type-bilan\").getContext(\"2d\");
\tvar myLineChart = new Chart(ctx).Line(data, confCanvas);
};


</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_annee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 132,  382 => 131,  377 => 130,  360 => 129,  348 => 119,  332 => 118,  327 => 117,  310 => 116,  298 => 106,  282 => 105,  277 => 104,  260 => 103,  252 => 98,  248 => 97,  244 => 96,  240 => 95,  236 => 94,  227 => 93,  215 => 89,  211 => 88,  207 => 87,  203 => 86,  194 => 85,  177 => 77,  173 => 76,  169 => 75,  156 => 64,  145 => 59,  139 => 56,  131 => 53,  127 => 51,  123 => 50,  80 => 12,  74 => 9,  70 => 7,  61 => 6,  43 => 3,  11 => 1,);
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


{% block contenu %}
<div class='row'>
\t<div class=\"col-md-1 col-xs-2\" class=\"height: 38px;\">
\t\t<img src=\"{{ asset('img/'~compte.banque.urlImage) }}\" class='logo-compte' />
\t</div>
\t<div class=\"col-md-11 col-xs-10\">
\t\t<h1>{{ compte.nom }} (Année : {{ date|date('Y') }})</h1>
\t</div>
</div> 

<div class='row'>\t\t
\t\t<div class='col-md-8'>
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading \">Graphique des mouvements financiers de l'année</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<canvas id=\"canvas-annee-type-bilan\" />
\t\t\t\t\t</div>
\t\t\t\t\t<ul class='pager'>
\t\t\t\t\t\t<li class='revenus'><span class=\"badge\"><span class='text-center glyphicon icon-arrow-graph-up-right'></span></span> Revenus</li>
\t\t\t\t\t\t<li class='depenses'><span class=\"badge\"><span class='text-center glyphicon icon-arrow-graph-down-right'></span></span> Dépenses</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class='col-md-4'>
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading \">Mouvements financiers de l'année</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<table class='table'>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\tMois
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\tRevenus
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\tDépenses
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% for bilan_mois in depense_annee %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\" {{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois',{'id':compte.id, 'annee':bilan_mois['date']|date('Y'), 'mois':bilan_mois['date']|date('m')  }) }}\">{{ bilan_mois['date']|localizeddate('full','none',null, null, 'MMMM')|capitalize }}</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{ bilan_mois['montant_revenu'] }} €
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{ bilan_mois['montant_depense']|abs }} €
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</div>

<div class='row'>\t\t
\t<div class='col-md-12'>
\t\t<nav>
\t\t\t<ul class=\"pager\">
\t\t\t\t<li class=\"\"><a href=\"{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee', {'id':compte.id, 'annee':date|date_modify(\"-1 year\") |date('Y') }) }}\"><span aria-hidden=\"true\">&larr;</span> Année précédente</a></li>
\t\t\t\t<li class=\"\" id=\"annee_choix\"><a href='{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee', {'id':compte.id})}}'><span class='glyphicon glyphicon-calendar'></span></a></li>
\t\t\t\t<li class=\"\"><a href=\"{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee', {'id':compte.id, 'annee':date|date_modify(\"+1 year\")|date('Y') }) }}\">Année suivante <span aria-hidden=\"true\">&rarr;</span></a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>
</div>

{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/iconset/daily-life.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsbootstrap/css/datepicker3.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/mouvements/visualiser_mouvements_compte_annee.css') }}\">
{% endblock %}


{% block javascripts %}
{{ parent() }}
<script src=\"{{ asset('bundles/fgsgestioncomptes/js/Chart.js') }}\"></script>
<script src=\"{{ asset('bundles/fgsbootstrap/js/bootstrap-datepicker.js') }}\"></script>
<script src=\"{{ asset('bundles/fgsbootstrap/js/locales/bootstrap-datepicker.fr.js') }}\"></script>
<script src='{{ asset('bundles/fgsgestioncomptes/js/mouvements/visualiser_mouvements_compte_anee.js') }}'></script>
<script>

//graphique
var data = {
    labels: [\t{% for bilan_mois in depense_annee %}
\t\t\t\t\"{{ bilan_mois['date']|localizeddate('full','none',null, null, 'MMMM')|capitalize }}\"
\t\t\t\t{{ loop.last == false ? ',' }}
\t\t\t\t{% endfor %}],
    datasets: [
        {
            label: \"Revenus\",
            fillColor: \"rgba(138,194,73,0.2)\",
            strokeColor: \"rgba(138,194,73,1)\",
            pointColor: \"rgba(138,194,73,1)\",
            pointStrokeColor: \"#fff\",
            pointHighlightFill: \"#fff\",
            pointHighlightStroke: \"rgba(220,220,220,1)\",
            data: [\t{% for bilan_mois in depense_annee %}
\t\t\t\t\t{{ bilan_mois['montant_revenu'] }}
\t\t\t\t\t{{ loop.last == false ? ',' }}
\t\t\t\t\t{% endfor %}]
        },
        {
            label: \"Dépenses\",
            fillColor: \"rgba(220,28,93,0.1)\",
            strokeColor: \"rgba(220,28,93,1)\",
            pointColor: \"rgba(220,28,93,1)\",
            pointStrokeColor: \"#fff\",
            pointHighlightFill: \"#fff\",
            pointHighlightStroke: \"rgba(151,187,205,1)\",
            data: [\t{% for bilan_mois in depense_annee %}
\t\t\t\t\t{{ bilan_mois['montant_depense']|abs }}
\t\t\t\t\t{{ loop.last == false ? ',' }}
\t\t\t\t\t{% endfor %}]
        }
    ]
};

var confCanvas = \t{\tresponsive : true,
\t\t\t\t\t\ttooltipCornerRadius : 0,
\t\t\t\t\t\ttooltipFontFamilly : \"'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif\",
\t\t\t\t\t\ttooltipFontSize: 12,
\t\t\t\t\t\ttooltipTitleFontSize: 12,
\t\t\t\t\t\ttooltipYPadding: 6,
\t\t\t\t\t\ttooltipXPadding: 10,
\t\t\t\t\t    multiTooltipTemplate: \"<%= datasetLabel%> : <%= value + ' €' %>\",
\t\t\t\t\t};



window.onload = function(){
\tvar ctx = document.getElementById(\"canvas-annee-type-bilan\").getContext(\"2d\");
\tvar myLineChart = new Chart(ctx).Line(data, confCanvas);
};


</script>
{% endblock %}
", "FGSGestionComptesBundle:Mouvements:visualiser_mouvements_compte_annee.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle\\Resources\\views\\Mouvements\\visualiser_mouvements_compte_annee.html.twig");
    }
}
