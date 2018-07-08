<?php

/* @FGSGestionComptes/Categories/gerer_categories.html.twig */
class __TwigTemplate_dd73634ae0ca363054ea915c05b3addecad35b2f3738c0f46bb64711d4189538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FGSGestionComptesBundle::layout.html.twig", "@FGSGestionComptes/Categories/gerer_categories.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGSGestionComptes/Categories/gerer_categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGSGestionComptes/Categories/gerer_categories.html.twig"));

        // line 81
        $context["macros"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_modal($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 5
        echo "<div class=\"modal\" id=\"confirmation\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">x</button>
\t\t\t<h4 class=\"modal-title\">Attention</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t<p>
\t\t\t\tVous êtes sur le point de supprimer cette Catégorie : <strong id=\"ma_categorie\"></strong> ?
\t\t\t</p>
\t\t\t<p>
\t\t\t\tTout les mouvements financiers lié à cette Catégorie seront transféré à la catégorie <strong id=\"son_parent\"></strong>
\t\t\t</p>
\t\t\t<p>
\t\t\t\tCette Action ne pourra pas être annulé.
\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t<a class=\"btn btn-danger\" id=\"valider_suppression\" href=\"#\">
\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span> 
\t\t\t\tSupprimer cette catégorie
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

    // line 83
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 84
        echo "<h1 class=\"page-header\">Gérer mes catégories</h1>

<div class='row'>
\t<div class='col-md-offset-1 col-md-10'>
\t";
        // line 88
        if ( !twig_test_empty((isset($context["listeCategories"]) ? $context["listeCategories"] : $this->getContext($context, "listeCategories")))) {
            // line 89
            echo "\t\t";
            echo $context["macros"]->getgenerer_enfants((isset($context["listeCategories"]) ? $context["listeCategories"] : $this->getContext($context, "listeCategories")));
            echo "
\t";
        } else {
            // line 91
            echo "\t\t<div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\">
\t\t\t<p><span class=\"glyphicon glyphicon-warning-sign\"></span> Vous n'avez pas encore de catégories.</p>
\t\t</div>
\t";
        }
        // line 95
        echo "\t</div>

</div>
<hr class=\"col-md-10 col-md-offset-1\"/>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-9 col-md-2 col-xs-12\">
\t\t\t<a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouter_categorie");
        echo "\" class=\"btn btn-success btn-block\">
\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span> Ajouter
\t\t\t</a>
\t\t</div>
\t</div>
";
        // line 106
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form_delete"]) ? $context["form_delete"] : $this->getContext($context, "form_delete")), 'form');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 111
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/iconset/daily-life.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/categories/gerer.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src='";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/delete-cat-mf.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function getgenerer_enfants($__enfants__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "enfants" => $__enfants__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "generer_enfants"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "generer_enfants"));

            // line 38
            echo "<ul class='media-list'>
\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["enfants"]) ? $context["enfants"] : $this->getContext($context, "enfants")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                // line 40
                echo "
\t<li class='media'>
\t\t<div class='media-left'>
\t\t\t<div>
\t\t\t\t<span class=' img-circle bg-primary text-center glyphicon ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["children"], "icone", array()), "html", null, true);
                echo "'> </span>
\t\t\t</div>
\t\t</div>
\t\t<div class='media-body'>
\t\t\t
\t\t\t<div>
\t\t\t\t";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["children"], "libelle", array()), "html", null, true);
                echo " 
\t\t\t\t<div class='pull-right' >
\t\t\t\t\t<a  href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_modifier_categorie", array("id" => $this->getAttribute($context["children"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info \">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span><span class='hidden-xs'> Modifier</span>
\t\t\t\t\t</a>";
                // line 56
                $this->loadTemplate("FGSGestionComptesBundle:Categories:delete_button.html.twig", "@FGSGestionComptes/Categories/gerer_categories.html.twig", 56)->display($context);
                // line 58
                echo "<div class='btn-group'>
\t\t\t\t\t\t<a  href=\"";
                // line 59
                echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "first", array())) ? ("#") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_monter_categorie", array("id" => $this->getAttribute($context["children"], "id", array()))))), "html", null, true);
                echo "\" class=\"btn btn-success";
                echo (($this->getAttribute($context["loop"], "first", array())) ? (" disabled") : (""));
                echo "\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-up\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a  href=\"";
                // line 62
                echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "last", array())) ? ("#") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_descendre_categorie", array("id" => $this->getAttribute($context["children"], "id", array()))))), "html", null, true);
                echo "\" class=\"btn btn-success";
                echo (($this->getAttribute($context["loop"], "last", array())) ? (" disabled") : (""));
                echo "\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<span></span>
\t\t\t</div>
\t\t\t";
                // line 70
                $context["macros"] = $this;
                // line 71
                echo "\t\t\t";
                echo (( !twig_test_empty($this->getAttribute($context["children"], "childrens", array()))) ? ($context["macros"]->getgenerer_enfants($this->getAttribute($context["children"], "childrens", array()))) : (""));
                echo "

\t\t</div>
\t\t
\t</li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "</ul>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@FGSGestionComptes/Categories/gerer_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 77,  297 => 71,  295 => 70,  282 => 62,  274 => 59,  271 => 58,  269 => 56,  264 => 52,  259 => 50,  250 => 44,  244 => 40,  227 => 39,  224 => 38,  206 => 37,  194 => 121,  190 => 120,  181 => 119,  169 => 113,  165 => 112,  161 => 111,  152 => 110,  140 => 106,  132 => 101,  124 => 95,  118 => 91,  112 => 89,  110 => 88,  104 => 84,  95 => 83,  55 => 5,  46 => 4,  36 => 1,  34 => 81,  11 => 1,);
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
\t\t\t\tVous êtes sur le point de supprimer cette Catégorie : <strong id=\"ma_categorie\"></strong> ?
\t\t\t</p>
\t\t\t<p>
\t\t\t\tTout les mouvements financiers lié à cette Catégorie seront transféré à la catégorie <strong id=\"son_parent\"></strong>
\t\t\t</p>
\t\t\t<p>
\t\t\t\tCette Action ne pourra pas être annulé.
\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t<a class=\"btn btn-danger\" id=\"valider_suppression\" href=\"#\">
\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span> 
\t\t\t\tSupprimer cette catégorie
\t\t\t</a>
\t\t\t<a href=\"\" class=\"btn btn-info\" data-dismiss=\"modal\" >
\t\t\t\tAnnuler
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}

{% macro generer_enfants(enfants) %}
<ul class='media-list'>
\t{% for children in enfants %}

\t<li class='media'>
\t\t<div class='media-left'>
\t\t\t<div>
\t\t\t\t<span class=' img-circle bg-primary text-center glyphicon {{ children.icone }}'> </span>
\t\t\t</div>
\t\t</div>
\t\t<div class='media-body'>
\t\t\t
\t\t\t<div>
\t\t\t\t{{ children.libelle }} 
\t\t\t\t<div class='pull-right' >
\t\t\t\t\t<a  href=\"{{ path('fgs_gestion_comptes_modifier_categorie', {\"id\":children.id}) }}\" class=\"btn btn-info \">
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span><span class='hidden-xs'> Modifier</span>
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t{%- include 'FGSGestionComptesBundle:Categories:delete_button.html.twig' -%}
\t\t\t\t\t
\t\t\t\t\t<div class='btn-group'>
\t\t\t\t\t\t<a  href=\"{{ loop.first ? '#' : path('fgs_gestion_comptes_monter_categorie', {'id': children.id}) }}\" class=\"btn btn-success{{ loop.first ? ' disabled'}}\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-up\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a  href=\"{{ loop.last ? '#' :path('fgs_gestion_comptes_descendre_categorie', {'id': children.id}) }}\" class=\"btn btn-success{{ loop.last ? ' disabled'}}\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-arrow-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<span></span>
\t\t\t</div>
\t\t\t{% import _self as macros %}
\t\t\t{{ children.childrens is not empty  ? macros.generer_enfants(children.childrens) }}

\t\t</div>
\t\t
\t</li>
\t{% endfor %}
</ul>
{% endmacro %}


{% import _self as macros %}

{% block contenu %}
<h1 class=\"page-header\">Gérer mes catégories</h1>

<div class='row'>
\t<div class='col-md-offset-1 col-md-10'>
\t{% if listeCategories is not empty %}
\t\t{{ macros.generer_enfants(listeCategories) }}
\t{% else %}
\t\t<div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\">
\t\t\t<p><span class=\"glyphicon glyphicon-warning-sign\"></span> Vous n'avez pas encore de catégories.</p>
\t\t</div>
\t{% endif %}
\t</div>

</div>
<hr class=\"col-md-10 col-md-offset-1\"/>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-9 col-md-2 col-xs-12\">
\t\t\t<a href=\"{{ path('fgs_gestion_comptes_ajouter_categorie') }}\" class=\"btn btn-success btn-block\">
\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span> Ajouter
\t\t\t</a>
\t\t</div>
\t</div>
{{ form(form_delete) }}
{% endblock %}


{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/iconset/daily-life.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/categories/gerer.css') }}\">
{% endblock %}




{% block javascripts %}
{{ parent() }}
<script src='{{ asset('bundles/fgsgestioncomptes/js/delete-cat-mf.js') }}'></script>
{% endblock %}
", "@FGSGestionComptes/Categories/gerer_categories.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle\\Resources\\views\\Categories\\gerer_categories.html.twig");
    }
}
