<?php

/* FGSGestionComptesBundle:Utils:menu.html.twig */
class __TwigTemplate_249563192181965364f0a0953fc54af1ba2bfc79492c521a2f2fd3b2df4d32d4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Utils:menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Utils:menu.html.twig"));

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
\t\t\t\t<li ";
        // line 20
        echo (((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_compte") || ((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_gerer_compte"))) ? ("class='active'") : (""));
        echo ">
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Mes comptes <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li ";
        // line 23
        echo ((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_compte")) ? ("class='active'") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouter_compte");
        echo "\">Ajouter un compte</a></li>
\t\t\t\t\t\t<li ";
        // line 24
        echo ((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_gerer_compte")) ? ("class='active'") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_gerer_compte");
        echo "\">Gérer mes comptes</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li ";
        // line 27
        echo (((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_categorie") || ((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_gerer_categories"))) ? ("class='active'") : (""));
        echo ">
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Categories <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li ";
        // line 30
        echo ((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_categorie")) ? ("class='active'") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouter_categorie");
        echo "\">Ajouter une catégorie</a></li>
\t\t\t\t\t\t<li ";
        // line 31
        echo ((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_gerer_categories")) ? ("class='active'") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_gerer_categories");
        echo "\">Gerer mes categories</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li ";
        // line 34
        echo ((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_depense")) ? ("class='active'") : (""));
        echo ">
\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouter_depense");
        echo "\">Dépense</a>
\t\t\t\t</li>
\t\t\t\t<li ";
        // line 37
        echo ((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_revenu")) ? ("class='active'") : (""));
        echo ">
\t\t\t\t\t<a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouter_revenu");
        echo "\" >Revenu</a>
\t\t\t\t</li>
\t\t\t\t<li ";
        // line 40
        echo ((((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_depense_planifiee") || ((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_revenu_planifie")) || ((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_voir_mouvements_planifies"))) ? ("class='active'") : (""));
        echo ">
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Planifier <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li ";
        // line 43
        echo ((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_depense_planifiee")) ? ("class='active'") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouter_depense_planifiee");
        echo "\">Ajouter une dépense planifiée</a></li>
\t\t\t\t\t\t<li ";
        // line 44
        echo ((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_revenu_planifie")) ? ("class='active'") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouter_revenu_planifie");
        echo "\">Ajouter un revenu planifié</a></li>
\t\t\t\t\t\t<li ";
        // line 45
        echo ((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_voir_mouvements_planifies")) ? ("class='active'") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_voir_mouvements_planifies");
        echo "\">Visualiser mes planifications</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>


                <li ";
        // line 50
        echo ((((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_depense_planifiee") || ((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_revenu_planifie")) || ((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_voir_mouvements_planifies"))) ? ("class='active'") : (""));
        echo ">
                    <a href=\"#\" data-toggle=\"dropdown\">Envoyer Reclamation<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li ";
        // line 53
        echo ((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_reclamation")) ? ("class='active'") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouter_reclamation");
        echo "\">Ajouter reclamation</a></li>
                        <li ";
        // line 54
        echo ((((isset($context["page_courante"]) ? $context["page_courante"] : $this->getContext($context, "page_courante")) == "fgs_gestion_comptes_ajouter_revenu_planifie")) ? ("class='active'") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_afficherC_reclamation");
        echo "\">Mes Reclamations</a></li>
                    </ul>
                </li>

\t\t\t</ul>
\t\t\t\t\t
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a></li>
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
        return "FGSGestionComptesBundle:Utils:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 61,  151 => 54,  145 => 53,  139 => 50,  129 => 45,  123 => 44,  117 => 43,  111 => 40,  106 => 38,  102 => 37,  97 => 35,  93 => 34,  85 => 31,  79 => 30,  73 => 27,  65 => 24,  59 => 23,  53 => 20,  43 => 13,  39 => 12,  27 => 2,  25 => 1,);
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
\t\t\t\t<li {{ (page_courante == 'fgs_gestion_comptes_ajouter_compte' or page_courante == 'fgs_gestion_comptes_gerer_compte') ? \"class='active'\" }}>
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Mes comptes <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li {{ page_courante =='fgs_gestion_comptes_ajouter_compte' ? \"class='active'\" }}><a href=\"{{ path('fgs_gestion_comptes_ajouter_compte') }}\">Ajouter un compte</a></li>
\t\t\t\t\t\t<li {{ page_courante =='fgs_gestion_comptes_gerer_compte' ? \"class='active'\" }}><a href=\"{{ path('fgs_gestion_comptes_gerer_compte') }}\">Gérer mes comptes</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li {{ (page_courante == 'fgs_gestion_comptes_ajouter_categorie' or page_courante == 'fgs_gestion_comptes_gerer_categories') ? \"class='active'\" }}>
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Categories <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li {{ page_courante == 'fgs_gestion_comptes_ajouter_categorie' ? \"class='active'\" }}><a href=\"{{ path('fgs_gestion_comptes_ajouter_categorie') }}\">Ajouter une catégorie</a></li>
\t\t\t\t\t\t<li {{ page_courante == 'fgs_gestion_comptes_gerer_categories' ? \"class='active'\" }}><a href=\"{{ path('fgs_gestion_comptes_gerer_categories') }}\">Gerer mes categories</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li {{ page_courante == 'fgs_gestion_comptes_ajouter_depense' ? \"class='active'\" }}>
\t\t\t\t\t<a href=\"{{ path('fgs_gestion_comptes_ajouter_depense') }}\">Dépense</a>
\t\t\t\t</li>
\t\t\t\t<li {{ page_courante == 'fgs_gestion_comptes_ajouter_revenu' ? \"class='active'\" }}>
\t\t\t\t\t<a href=\"{{ path('fgs_gestion_comptes_ajouter_revenu') }}\" >Revenu</a>
\t\t\t\t</li>
\t\t\t\t<li {{ (page_courante == 'fgs_gestion_comptes_ajouter_depense_planifiee' or page_courante == 'fgs_gestion_comptes_ajouter_revenu_planifie'  or page_courante == 'fgs_gestion_comptes_voir_mouvements_planifies') ? \"class='active'\" }}>
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">Planifier <span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li {{ page_courante == 'fgs_gestion_comptes_ajouter_depense_planifiee' ? \"class='active'\" }}><a href=\"{{ path('fgs_gestion_comptes_ajouter_depense_planifiee') }}\">Ajouter une dépense planifiée</a></li>
\t\t\t\t\t\t<li {{ page_courante == 'fgs_gestion_comptes_ajouter_revenu_planifie' ? \"class='active'\" }}><a href=\"{{ path('fgs_gestion_comptes_ajouter_revenu_planifie') }}\">Ajouter un revenu planifié</a></li>
\t\t\t\t\t\t<li {{ page_courante == 'fgs_gestion_comptes_voir_mouvements_planifies' ? \"class='active'\" }}><a href=\"{{ path('fgs_gestion_comptes_voir_mouvements_planifies') }}\">Visualiser mes planifications</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>


                <li {{ (page_courante == 'fgs_gestion_comptes_ajouter_depense_planifiee' or page_courante == 'fgs_gestion_comptes_ajouter_revenu_planifie'  or page_courante == 'fgs_gestion_comptes_voir_mouvements_planifies') ? \"class='active'\" }}>
                    <a href=\"#\" data-toggle=\"dropdown\">Envoyer Reclamation<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li {{ page_courante == 'fgs_gestion_comptes_ajouter_reclamation' ? \"class='active'\" }}><a href=\"{{ path('fgs_gestion_comptes_ajouter_reclamation') }}\">Ajouter reclamation</a></li>
                        <li {{ page_courante == 'fgs_gestion_comptes_ajouter_revenu_planifie' ? \"class='active'\" }}><a href=\"{{ path('fgs_gestion_comptes_afficherC_reclamation') }}\">Mes Reclamations</a></li>
                    </ul>
                </li>

\t\t\t</ul>
\t\t\t\t\t
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
\t\t\t</ul>
\t\t</div>
\t</div><!-- /.container-fluid -->
</nav>
", "FGSGestionComptesBundle:Utils:menu.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle/Resources/views/Utils/menu.html.twig");
    }
}
