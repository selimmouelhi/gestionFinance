<?php

/* FGSGestionComptesBundle:Default:first.html.twig */
class __TwigTemplate_f92cb74778b8fe97bb5b3db0f5e2cd529a2034eb474d3fb50401c3c140645277 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FGSGestionComptesBundle::layout2.html.twig", "FGSGestionComptesBundle:Default:first.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenu' => array($this, 'block_contenu'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FGSGestionComptesBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Default:first.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Default:first.html.twig"));

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

        echo "Bienvenue sur JMLESSOUS";
        
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
        echo "
    <section id=\"intro\" class=\"text-center row\">
        <div class=\"container\">
            <h1 style=\"margin-bottom: 40px;\">Bienvenue</h1>
            <p class=\"text-justify intro-text\">
                Bienvenue a notre site web <span class=\"ma-petite-tirelire\"> JMLESSOUS</span>, il vous faudra configurer vos comptes et vos catégories.
            </p>

            <ul class=\"etapes\">
                <li>
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"rond\">1</a>
                    <div class=\"description-etape\">
                        <h2>Authentification</h2>
                        <p class=\"text-justify\">D'abord authentifiez vous </i>».</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"rond\">2</a>
                    <div class=\"description-etape\">
                        <h2>Ajoutez vos comptes</h2>
                        <p class=\"text-justify\">Pour Ajouter vos comptes, passez par le menu « <i>Mes comptes / Ajouter un compte </i>».</p>
                        <p class=\"text-justify\">Vous aurez plus tard la possibilité de les modifier en passant par le menu « <i>Mes comptes / Gérer mes comptes </i>».</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"rond\">3</a>
                    <div class=\"description-etape\">
                        <h2>Créer vos propres catégories</h2>
                        <p class=\"text-justify\">Pour Ajouter vos propres catégories, il vous faudra passer le menu « <i>Catégories / Ajouter une catégorie </i>». </p>
                        <p class=\"text-justify\">Vous pourrez plus tard les modifier ou les supprimer en passant par le menu « <i>Catégories / Gérer mes catégories </i>».</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"rond\">4</a>
                    <div class=\"description-etape\">
                        <h2>Gérez vos finances</h2>
                        <p class=\"text-justify\">Vous pouvez maintenant ajouter vos dépenses ou vos revenus via leur menu respectif : « <i>Dépense </i>» et « <i>Revenu </i>». </p>
                        <p class=\"text-justify\">Quand au menu  « <i>Planifier </i>» il vous permettra de programmer vos mouvements financiers régulier.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 54
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/iconset/daily-life.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsgestioncomptes/css/presentation/welcome.css"), "html", null, true);
        echo "\">
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FGSGestionComptesBundle:Default:first.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 56,  138 => 55,  134 => 54,  125 => 53,  81 => 16,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FGSGestionComptesBundle::layout2.html.twig\" %}

{% block title %}Bienvenue sur JMLESSOUS{% endblock %}

{% block contenu %}

    <section id=\"intro\" class=\"text-center row\">
        <div class=\"container\">
            <h1 style=\"margin-bottom: 40px;\">Bienvenue</h1>
            <p class=\"text-justify intro-text\">
                Bienvenue a notre site web <span class=\"ma-petite-tirelire\"> JMLESSOUS</span>, il vous faudra configurer vos comptes et vos catégories.
            </p>

            <ul class=\"etapes\">
                <li>
                    <a href=\"{{ path('fos_user_security_login') }}\" class=\"rond\">1</a>
                    <div class=\"description-etape\">
                        <h2>Authentification</h2>
                        <p class=\"text-justify\">D'abord authentifiez vous </i>».</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"rond\">2</a>
                    <div class=\"description-etape\">
                        <h2>Ajoutez vos comptes</h2>
                        <p class=\"text-justify\">Pour Ajouter vos comptes, passez par le menu « <i>Mes comptes / Ajouter un compte </i>».</p>
                        <p class=\"text-justify\">Vous aurez plus tard la possibilité de les modifier en passant par le menu « <i>Mes comptes / Gérer mes comptes </i>».</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"rond\">3</a>
                    <div class=\"description-etape\">
                        <h2>Créer vos propres catégories</h2>
                        <p class=\"text-justify\">Pour Ajouter vos propres catégories, il vous faudra passer le menu « <i>Catégories / Ajouter une catégorie </i>». </p>
                        <p class=\"text-justify\">Vous pourrez plus tard les modifier ou les supprimer en passant par le menu « <i>Catégories / Gérer mes catégories </i>».</p>
                    </div>
                </li>
                <li>
                    <a href=\"#\" class=\"rond\">4</a>
                    <div class=\"description-etape\">
                        <h2>Gérez vos finances</h2>
                        <p class=\"text-justify\">Vous pouvez maintenant ajouter vos dépenses ou vos revenus via leur menu respectif : « <i>Dépense </i>» et « <i>Revenu </i>». </p>
                        <p class=\"text-justify\">Quand au menu  « <i>Planifier </i>» il vous permettra de programmer vos mouvements financiers régulier.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
{% endblock %}



{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/iconset/daily-life.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('bundles/fgsgestioncomptes/css/presentation/welcome.css') }}\">
</style>
{% endblock %}

", "FGSGestionComptesBundle:Default:first.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle/Resources/views/Default/first.html.twig");
    }
}
