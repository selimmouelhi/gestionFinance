<?php

/* @FGSGestionComptes/Comptes/gerer.html.twig */
class __TwigTemplate_976575b982ef17ca68899f304e368c5e2541a771d8fc1ac2edb65c8e6bc6c8dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FGSGestionComptesBundle::layout.html.twig", "@FGSGestionComptes/Comptes/gerer.html.twig", 1);
        $this->blocks = array(
            'modal' => array($this, 'block_modal'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGSGestionComptes/Comptes/gerer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGSGestionComptes/Comptes/gerer.html.twig"));

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
\t\t\t\tEtes vous certains de vouloir supprimer le compte : <strong id=\"nom_compte\"></strong> ?
\t\t\t</p>
\t\t\t<p>
\t\t\t\tCette Action ne pourra pas être annulé.
\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t<a class=\"btn btn-danger\" id=\"valider_suppression\" href=\"#\">
\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span> 
\t\t\t\tSupprimer ce compte
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

    // line 34
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

    // line 36
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 37
        echo "<h1 class=\"page-header\">Gerer mes comptes</h1>

\t";
        // line 39
        if (twig_test_empty((isset($context["listeComptes"]) ? $context["listeComptes"] : $this->getContext($context, "listeComptes")))) {
            // line 40
            echo "\t<div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\">
\t\t<p><span class=\"glyphicon glyphicon-warning-sign\"></span> Vous n'avez pas encore ajouté de compte.</p>
\t</div>
\t";
        }
        // line 44
        echo "\t
\t";
        // line 45
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
            // line 46
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-offset-1 col-md-1 col-xs-2\" class=\"height: 100px;\">
\t\t\t\t<img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/" . $this->getAttribute($this->getAttribute($context["compte"], "banque", array()), "urlImage", array()))), "html", null, true);
            echo "\" class='logo-compte' />
\t\t\t</div>
\t\t\t<div class=\"col-md-5 col-xs-10\"><h4>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "nom", array()), "html", null, true);
            echo " <span class=\"label  ";
            echo ((($this->getAttribute($context["compte"], "montantActuel", array()) < 0)) ? ("label-danger") : ("label-success"));
            echo " pull-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "montantActuel", array()), "html", null, true);
            echo " €</span></h4></div>
\t\t\t<div class=\"col-md-4 col-xs-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_modifier_compte", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn-block\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span> Modifier
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t";
            // line 59
            $this->loadTemplate("FGSGestionComptesBundle:Comptes:delete_button.html.twig", "@FGSGestionComptes/Comptes/gerer.html.twig", 59)->display($context);
            // line 60
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t\t";
            // line 66
            if (($this->getAttribute($context["loop"], "last", array()) != true)) {
                // line 67
                echo "\t\t<hr class=\"col-md-10 col-md-offset-1\"/>
\t\t";
            }
            // line 69
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
        // line 70
        echo "\t<hr class=\"col-md-10 col-md-offset-1\"/>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-9 col-md-2 col-xs-12\">
\t\t\t<a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouter_compte");
        echo "\" class=\"btn btn-success btn-block\">
\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span> Ajouter
\t\t\t</a>
\t\t</div>
\t</div>";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FGSGestionComptesBundle:Comptes:genererFormDelete"));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 83
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/comptes/gerer.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src='";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/js/delete-compte.js"), "html", null, true);
        echo "'></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FGSGestionComptes/Comptes/gerer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 89,  263 => 88,  254 => 87,  242 => 84,  238 => 83,  229 => 82,  219 => 78,  212 => 73,  207 => 70,  193 => 69,  189 => 67,  187 => 66,  179 => 60,  177 => 59,  169 => 54,  158 => 50,  153 => 48,  149 => 46,  132 => 45,  129 => 44,  123 => 40,  121 => 39,  117 => 37,  108 => 36,  90 => 34,  53 => 5,  44 => 4,  11 => 1,);
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
\t\t\t\tEtes vous certains de vouloir supprimer le compte : <strong id=\"nom_compte\"></strong> ?
\t\t\t</p>
\t\t\t<p>
\t\t\t\tCette Action ne pourra pas être annulé.
\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t<a class=\"btn btn-danger\" id=\"valider_suppression\" href=\"#\">
\t\t\t\t<span class=\"glyphicon glyphicon-trash\"></span> 
\t\t\t\tSupprimer ce compte
\t\t\t</a>
\t\t\t<a href=\"\" class=\"btn btn-info\" data-dismiss=\"modal\" >
\t\t\t\tAnnuler
\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}

{% block title %}Visualisation de vos comptes{% endblock %}

{% block contenu %}
<h1 class=\"page-header\">Gerer mes comptes</h1>

\t{% if listeComptes is empty %}
\t<div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\">
\t\t<p><span class=\"glyphicon glyphicon-warning-sign\"></span> Vous n'avez pas encore ajouté de compte.</p>
\t</div>
\t{% endif %}
\t
\t{% for compte in listeComptes %}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-offset-1 col-md-1 col-xs-2\" class=\"height: 100px;\">
\t\t\t\t<img src=\"{{ asset('img/'~compte.banque.urlImage) }}\" class='logo-compte' />
\t\t\t</div>
\t\t\t<div class=\"col-md-5 col-xs-10\"><h4>{{ compte.nom }} <span class=\"label  {{ compte.montantActuel < 0 ? 'label-danger':'label-success' }} pull-right\">{{ compte.montantActuel }} €</span></h4></div>
\t\t\t<div class=\"col-md-4 col-xs-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<a href=\"{{ path('fgs_gestion_comptes_modifier_compte', {\"id\":compte.id}) }}\" class=\"btn btn-info btn-block\">
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span> Modifier
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t{% include 'FGSGestionComptesBundle:Comptes:delete_button.html.twig' %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t\t{% if loop.last != true %}
\t\t<hr class=\"col-md-10 col-md-offset-1\"/>
\t\t{% endif %}
\t{% endfor %}
\t<hr class=\"col-md-10 col-md-offset-1\"/>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-9 col-md-2 col-xs-12\">
\t\t\t<a href=\"{{ path('fgs_gestion_comptes_ajouter_compte') }}\" class=\"btn btn-success btn-block\">
\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span> Ajouter
\t\t\t</a>
\t\t</div>
\t</div>
\t{{- render(controller('FGSGestionComptesBundle:Comptes:genererFormDelete')) -}}
{% endblock %}


{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/comptes/gerer.css') }}\">
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src='{{ asset('bundles/fgsgestioncomptes/js/delete-compte.js') }}'></script>
{% endblock %}
", "@FGSGestionComptes/Comptes/gerer.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle\\Resources\\views\\Comptes\\gerer.html.twig");
    }
}
