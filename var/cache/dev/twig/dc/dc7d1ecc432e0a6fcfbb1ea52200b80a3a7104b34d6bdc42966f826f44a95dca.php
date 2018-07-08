<?php

/* FGSGestionComptesBundle:Comptes:index.html.twig */
class __TwigTemplate_609e60758bf04e84081ba9201081a21421e46cd991efb3c815e63fba3ec3ea81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FGSGestionComptesBundle::layout.html.twig", "FGSGestionComptesBundle:Comptes:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Comptes:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Comptes:index.html.twig"));

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

        echo "Visualisation de vos comptes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeComptes"]) ? $context["listeComptes"] : $this->getContext($context, "listeComptes")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 7
            echo "\t\t<div class='col-lg-6'>
\t\t\t<div class='panel panel-";
            // line 8
            echo ((($this->getAttribute($context["compte"], "montantActuel", array()) < 0)) ? ("danger") : ("primary"));
            echo "'>
\t\t\t\t<div class='panel-heading'>
\t\t\t\t\t<div class='btn-group pull-right menu-compte'>
\t\t\t\t\t\t<a type=\"button\" class=\" dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-option-vertical\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">Visualiser tout les mouvements du comptes </a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">Visualisation du mois en cours</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">Visualisation de l'année en cours</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<h2>
\t\t\t\t\t\t<img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute($this->getAttribute($context["compte"], "banque", array()), "urlImage", array()))), "html", null, true);
            echo "\" class='logo-compte' sizes=\"100px\"/>
\t\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_visualiser_mouvement_financier_compte", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "nom", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class='panel-body'>
\t\t\t\t\t";
            // line 29
            if ( !twig_test_empty($this->getAttribute($context["compte"], "mouvementFinanciers", array()))) {
                // line 30
                echo "\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig", array("liste_mouvement_financier" => $this->getAttribute($context["compte"], "mouvementFinanciers", array()), "caption_bottom" => "Vos 2 dernières transactions"));
                echo "
\t\t\t\t\t";
            } else {
                // line 32
                echo "\t\t\t\t\t<p>Aucune transaction n'a encore été réalisé sur ce compte<p>
\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t</div>
\t\t\t\t<div class='panel-footer'>
\t\t\t\t\t<h3 class=\" ";
            // line 36
            echo ((($this->getAttribute($context["compte"], "montantActuel", array()) < 0)) ? ("text-danger") : ("text-success"));
            echo " text-right\">
\t\t\t\t\t\t<small>Total : </small>";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["compte"], "montantActuel", array()), 2, ",", " "), "html", null, true);
            echo " €
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 42
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                echo "<div class='clearfix'></div>";
            }
            // line 43
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FGSGestionComptesBundle:Mouvements:genererFormsCheckAndDelete"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 49
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/iconset/daily-life.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/iconset/daily-life.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/comptes/index.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src='";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/activate-tooltip.js"), "html", null, true);
        echo "'></script>
<script src='";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/check-or-delete-mf.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FGSGestionComptesBundle:Comptes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 59,  235 => 58,  231 => 57,  222 => 56,  210 => 52,  206 => 51,  202 => 50,  198 => 49,  189 => 48,  179 => 45,  165 => 43,  161 => 42,  153 => 37,  149 => 36,  145 => 34,  141 => 32,  135 => 30,  133 => 29,  124 => 23,  120 => 22,  116 => 21,  109 => 17,  105 => 16,  101 => 15,  91 => 8,  88 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %}Visualisation de vos comptes{% endblock %}

{% block contenu %}
\t{% for compte in listeComptes %}
\t\t<div class='col-lg-6'>
\t\t\t<div class='panel panel-{{ compte.montantActuel < 0 ? 'danger':'primary' }}'>
\t\t\t\t<div class='panel-heading'>
\t\t\t\t\t<div class='btn-group pull-right menu-compte'>
\t\t\t\t\t\t<a type=\"button\" class=\" dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-option-vertical\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte', {'id':compte.id}) }}\">Visualiser tout les mouvements du comptes </a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte_mois',{'id':compte.id}) }}\">Visualisation du mois en cours</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte_annee',{'id':compte.id}) }}\">Visualisation de l'année en cours</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<h2>
\t\t\t\t\t\t<img src=\"{{ asset('img/'~compte.banque.urlImage) }}\" class='logo-compte' sizes=\"100px\"/>
\t\t\t\t\t\t<a href=\"{{ path('fgs_gestion_comptes_visualiser_mouvement_financier_compte', {'id':compte.id}) }}\">
\t\t\t\t\t\t\t{{ compte.nom }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class='panel-body'>
\t\t\t\t\t{% if compte.mouvementFinanciers is not empty %}
\t\t\t\t\t\t{{ include('FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig', { 'liste_mouvement_financier' : compte.mouvementFinanciers, 'caption_bottom': 'Vos 2 dernières transactions' }) }}
\t\t\t\t\t{% else %}
\t\t\t\t\t<p>Aucune transaction n'a encore été réalisé sur ce compte<p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class='panel-footer'>
\t\t\t\t\t<h3 class=\" {{ compte.montantActuel < 0 ? 'text-danger':'text-success' }} text-right\">
\t\t\t\t\t\t<small>Total : </small>{{ compte.montantActuel|number_format(2, ',', ' ') }} €
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% if loop.index is even %}<div class='clearfix'></div>{%  endif %}
\t{% endfor %}
\t
\t{{- render(controller('FGSGestionComptesBundle:Mouvements:genererFormsCheckAndDelete')) -}}
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/iconset/daily-life.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/iconset/daily-life.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/comptes/index.css') }}\">
{% endblock %}


{% block javascripts %}
{{ parent() }}
<script src='{{ asset('bundles/fgsgestioncomptes/js/activate-tooltip.js') }}'></script>
<script src='{{ asset('bundles/fgsgestioncomptes/js/check-or-delete-mf.js') }}'></script>
{% endblock %}
", "FGSGestionComptesBundle:Comptes:index.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle\\Resources\\views\\Comptes\\index.html.twig");
    }
}
