<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5229a7b019df86e289ff4eaee42a289b352c18069c829364c958d6b98e2d6e85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'contenu' => array($this, 'block_contenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

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

        $this->displayParentBlock("title", $context, $blocks);
        echo " : Faites vos comptes en lignes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $this->displayParentBlock("meta", $context, $blocks);
        echo "
\t\t<meta name=\"description\" content=\"Ma petite tirelire est une application web vous permettant de faire vos comptes en ligne. Son but : vous aider dans la gestion de vos finances et à terme, économiser.\" />
\t\t<meta name=\"robots\" content=\"index, follow\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 11
        echo "
<nav id=\"navigation_puces\">
\t<ul class=\"nav\">
\t\t<li><a href=\"#login\"></a></li>
\t\t<li><a href=\"#comptes\"></a></li>
\t\t<li><a href=\"#mouvements\"></a></li>
\t\t<li><a href=\"#visualiser\"></a></li>
\t</ul>
</nav>
<section id=\"login\">
\t<div class=\"container-fluid\">
\t\t<div class=\"col-sm-7 presentation\">
\t\t\t<h1>Faites vos comptes en ligne</h1>
\t\t\t<p class='text-justify'><span class=\"ma-petite-tirelire\"> JMLESSOUS</span> est une application web vous permettant de faire vos comptes en ligne.<p>
\t\t\t<p class='text-justify'>Son but est de vous aider dans la gestion de vos finances et à terme : économiser.</p>
\t\t\t<p class='text-center aeration'><a href=\"#comptes\" class='ma-petite-tirelire decouvrir'>Découvrez <i>JMLESSOUS</i></a></p>
\t\t</div>
\t\t
\t\t<div class=\"col-sm-5 form\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h2>Connexion <small>à votre compte</small></h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<noscript  class=\"text-justify alert alert-warning alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t\t<p>Oups il semblerait que vous n'avez pas activé <strong>JavaScript</strong> sur votre navigateur. Cela risque de dégrader votre expérience utilisateur</p>
\t\t\t\t\t\t<p>pour savoir comment activer JavaScript : <a href ='http://www.enable-javascript.com/fr/'>cliquez sur ce lien</a></p>
\t\t\t\t\t</noscript>
\t    \t\t\t";
        // line 39
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 40
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-warning-sign\"></span> ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 45
        echo "
\t\t\t\t\t";
        // line 46
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 47
            echo "\t\t\t\t\t\t<form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
            echo "\" method=\"post\" >
\t\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t    <label for=\"username\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo " / Mail\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t    <label for=\"password\">";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"  class=\"\"/>
\t\t\t\t\t\t\t    <label for=\"remember_me\">";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t";
        } else {
            // line 70
            echo "\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))), "FOSUserBundle"), "html", null, true);
            echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary btn-block\">
\t\t\t\t\t\t\t\t";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 79
        echo "
\t\t    \t\t";
        // line 80
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 81
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tVous n'avez pas encore de compte ? <br />
\t\t\t\t\t\t<a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Créer un nouveau compte</a>
\t\t\t\t\t<p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<a href=\"#comptes\" class=\"down\"><span class=\"glyphicon glyphicon-menu-down\"></span></a>
</section>


<section id=\"comptes\">
    <div class=\"container-fluid\">
    \t<div class=\"row\">
\t    \t<div class=\"col-md-5 image visible-md-block visible-lg-block\">
\t    \t</div>
\t    \t<div class=\"col-md-7 presentation\">
\t\t\t\t<h2>Ajoutez vos comptes</h2>
\t\t\t\t<p class='text-justify'><span class=\"ma-petite-tirelire\">JMLESSOUS </span>vous permet de définir les comptes que vous souhaitez gérer. S'ils sont affiliés de banques différentes, ne vous inquiétez pas : c’est prévu.</p>
\t\t\t\t<h2>Vos données confidentielles</h2>
\t\t\t\t<p class='text-justify'>Aucune donnée confidentielle concernant vos comptes ne vous sera demandée. Vous n’avez donc aucune inquiétude à avoir.</p>
\t\t\t</div>
\t    \t<div class=\"col-md-5 image visible-sm-block visible-xs-block\">
\t    \t</div>
\t\t</div>\t\t
    </div>
    <a href=\"#mouvements\" class=\"down\"><span class=\"glyphicon glyphicon-menu-down\"></span></a>
</section>

<section id=\"mouvements\">
    <div class=\"container-fluid\">
    \t<div class=\"row\">
\t    \t<div class=\"col-md-7 presentation\">
\t\t\t\t<h2>Indiquez vos mouvements financiers</h2>
\t\t\t\t<p class='text-justify'>Chaque action financière doit être ajoutée pour que la gestion de vos comptes soit efficace !</p>
\t\t\t\t<p class='text-justify'>N’attendez pas d’être chez vous pour le faire ! Votre smartphone vous permet de le faire rapidement.</p>
\t\t\t\t<h2>Catégorisez</h2>
\t\t\t\t<p class='text-justify'><span class=\"ma-petite-tirelire\">JMELESSOUS </span>dispose d’un système de catégorisation très précis vous permettant de trier vos mouvements financiers comme vous l’entendez.</p>
\t\t\t\t<h2>Planifiez</h2>
\t\t\t\t<p class='text-justify'>Vos dépenses régulières (loyer, eau, électricité, etc.) et vos revenus peuvent être planifiés à l’avance.</p>
\t\t\t\t<p class='text-justify'>Cela vous permettra d’anticiper les mouvements sur votre compte en évitant des saisies superflues.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5 image\">
\t\t\t</div>
\t\t</div>\t\t
    </div>
    <a href=\"#visualiser\" class=\"down\"><span class=\"glyphicon glyphicon-menu-down\"></span></a>
</section>

<section id=\"visualiser\">
    <div class=\"container-fluid\">
    \t<div class=\"row\">
\t    \t<div class=\"col-md-5 image visible-md-block visible-lg-block\">
\t    \t</div>
\t    \t<div class=\"col-md-7  presentation\">
\t    \t\t<h2>Visualisez</h2>
\t\t\t\t<p class='text-justify'><span class=\"ma-petite-tirelire\">JMLESSOUS </span>vous permettra d’avoir des informations sur tous vos comptes d’un seul coup d’œil.</p>
\t\t\t\t<p class='text-justify'>Vous pourrez aussi visualiser le bilan du mois en cours, des mois passés ou du mois prochain :</p>
\t\t\t\t<ul>
\t\t\t\t\t<li>liste des mouvements financiers réalisés et à venir ;</li>
\t\t\t\t\t<li>sommes dépensées par catégories ; </li>
\t\t\t\t\t<li>total des dépenses, des revenus.</li>
\t\t\t\t</ul>
\t\t\t\t<p class='text-justify'>Vous n’aurez plus de mauvaises surprises à la fin du mois.</p>
\t\t\t\t<p class='text-justify'>De même, il vous sera aussi possible de visualiser les bilans annuels de vos comptes afin de comparer les dépenses et les revenus sur plusieurs mois. </p>

\t\t\t<p class='text-center aeration'><a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class='ma-petite-tirelire'>Découvrez en plus : inscrivez vous !</a></p>
\t\t\t</div>\t
\t    \t<div class=\"col-md-5 image visible-sm-block visible-xs-block\">
\t    \t</div>
\t\t</div>\t\t
    </div>
    <a href=\"#login\" class=\"top\"><span class=\"glyphicon glyphicon-menu-up\"></span></a>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 165
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsuser/css/security/login.css"), "html", null, true);
        echo "\"  rel='stylesheet' type='text/css' />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fgsuser/js/security/progressive-href.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 171,  368 => 170,  359 => 169,  347 => 166,  343 => 165,  334 => 164,  317 => 80,  297 => 153,  229 => 88,  222 => 84,  217 => 81,  215 => 80,  212 => 79,  205 => 75,  201 => 74,  195 => 71,  192 => 70,  185 => 66,  178 => 62,  170 => 57,  166 => 56,  157 => 52,  153 => 51,  147 => 48,  142 => 47,  140 => 46,  137 => 45,  131 => 42,  127 => 40,  125 => 39,  95 => 11,  86 => 10,  64 => 5,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block title %}{{ parent() }} : Faites vos comptes en lignes{% endblock %}

{% block meta %}{{ parent() }}
\t\t<meta name=\"description\" content=\"Ma petite tirelire est une application web vous permettant de faire vos comptes en ligne. Son but : vous aider dans la gestion de vos finances et à terme, économiser.\" />
\t\t<meta name=\"robots\" content=\"index, follow\" />
{% endblock %}
\t
{% block contenu %}

<nav id=\"navigation_puces\">
\t<ul class=\"nav\">
\t\t<li><a href=\"#login\"></a></li>
\t\t<li><a href=\"#comptes\"></a></li>
\t\t<li><a href=\"#mouvements\"></a></li>
\t\t<li><a href=\"#visualiser\"></a></li>
\t</ul>
</nav>
<section id=\"login\">
\t<div class=\"container-fluid\">
\t\t<div class=\"col-sm-7 presentation\">
\t\t\t<h1>Faites vos comptes en ligne</h1>
\t\t\t<p class='text-justify'><span class=\"ma-petite-tirelire\"> JMLESSOUS</span> est une application web vous permettant de faire vos comptes en ligne.<p>
\t\t\t<p class='text-justify'>Son but est de vous aider dans la gestion de vos finances et à terme : économiser.</p>
\t\t\t<p class='text-center aeration'><a href=\"#comptes\" class='ma-petite-tirelire decouvrir'>Découvrez <i>JMLESSOUS</i></a></p>
\t\t</div>
\t\t
\t\t<div class=\"col-sm-5 form\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h2>Connexion <small>à votre compte</small></h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<noscript  class=\"text-justify alert alert-warning alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t\t<p>Oups il semblerait que vous n'avez pas activé <strong>JavaScript</strong> sur votre navigateur. Cela risque de dégrader votre expérience utilisateur</p>
\t\t\t\t\t\t<p>pour savoir comment activer JavaScript : <a href ='http://www.enable-javascript.com/fr/'>cliquez sur ce lien</a></p>
\t\t\t\t\t</noscript>
\t    \t\t\t{% if error %}
\t\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-warning-sign\"></span> {{ error.messageKey|trans(error.messageData, 'security') }}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if not is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\t\t\t\t<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" >
\t\t\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t    <label for=\"username\">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</label>
\t\t\t\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" placeholder=\"{{ 'security.login.username'|trans({}, 'FOSUserBundle') }} / Mail\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t    <label for=\"password\">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>
\t\t\t\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"  class=\"\"/>
\t\t\t\t\t\t\t    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-primary btn-block\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t{{ 'layout.logged_in_as'|trans({'%username%': app.user.username|title}, 'FOSUserBundle') }} 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-primary btn-block\">
\t\t\t\t\t\t\t\t{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t    \t\t{% block fos_user_content %}{% endblock %}
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe oublié ?</a>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tVous n'avez pas encore de compte ? <br />
\t\t\t\t\t\t<a href=\"{{ path('fos_user_registration_register') }}\">Créer un nouveau compte</a>
\t\t\t\t\t<p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<a href=\"#comptes\" class=\"down\"><span class=\"glyphicon glyphicon-menu-down\"></span></a>
</section>


<section id=\"comptes\">
    <div class=\"container-fluid\">
    \t<div class=\"row\">
\t    \t<div class=\"col-md-5 image visible-md-block visible-lg-block\">
\t    \t</div>
\t    \t<div class=\"col-md-7 presentation\">
\t\t\t\t<h2>Ajoutez vos comptes</h2>
\t\t\t\t<p class='text-justify'><span class=\"ma-petite-tirelire\">JMLESSOUS </span>vous permet de définir les comptes que vous souhaitez gérer. S'ils sont affiliés de banques différentes, ne vous inquiétez pas : c’est prévu.</p>
\t\t\t\t<h2>Vos données confidentielles</h2>
\t\t\t\t<p class='text-justify'>Aucune donnée confidentielle concernant vos comptes ne vous sera demandée. Vous n’avez donc aucune inquiétude à avoir.</p>
\t\t\t</div>
\t    \t<div class=\"col-md-5 image visible-sm-block visible-xs-block\">
\t    \t</div>
\t\t</div>\t\t
    </div>
    <a href=\"#mouvements\" class=\"down\"><span class=\"glyphicon glyphicon-menu-down\"></span></a>
</section>

<section id=\"mouvements\">
    <div class=\"container-fluid\">
    \t<div class=\"row\">
\t    \t<div class=\"col-md-7 presentation\">
\t\t\t\t<h2>Indiquez vos mouvements financiers</h2>
\t\t\t\t<p class='text-justify'>Chaque action financière doit être ajoutée pour que la gestion de vos comptes soit efficace !</p>
\t\t\t\t<p class='text-justify'>N’attendez pas d’être chez vous pour le faire ! Votre smartphone vous permet de le faire rapidement.</p>
\t\t\t\t<h2>Catégorisez</h2>
\t\t\t\t<p class='text-justify'><span class=\"ma-petite-tirelire\">JMELESSOUS </span>dispose d’un système de catégorisation très précis vous permettant de trier vos mouvements financiers comme vous l’entendez.</p>
\t\t\t\t<h2>Planifiez</h2>
\t\t\t\t<p class='text-justify'>Vos dépenses régulières (loyer, eau, électricité, etc.) et vos revenus peuvent être planifiés à l’avance.</p>
\t\t\t\t<p class='text-justify'>Cela vous permettra d’anticiper les mouvements sur votre compte en évitant des saisies superflues.</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-5 image\">
\t\t\t</div>
\t\t</div>\t\t
    </div>
    <a href=\"#visualiser\" class=\"down\"><span class=\"glyphicon glyphicon-menu-down\"></span></a>
</section>

<section id=\"visualiser\">
    <div class=\"container-fluid\">
    \t<div class=\"row\">
\t    \t<div class=\"col-md-5 image visible-md-block visible-lg-block\">
\t    \t</div>
\t    \t<div class=\"col-md-7  presentation\">
\t    \t\t<h2>Visualisez</h2>
\t\t\t\t<p class='text-justify'><span class=\"ma-petite-tirelire\">JMLESSOUS </span>vous permettra d’avoir des informations sur tous vos comptes d’un seul coup d’œil.</p>
\t\t\t\t<p class='text-justify'>Vous pourrez aussi visualiser le bilan du mois en cours, des mois passés ou du mois prochain :</p>
\t\t\t\t<ul>
\t\t\t\t\t<li>liste des mouvements financiers réalisés et à venir ;</li>
\t\t\t\t\t<li>sommes dépensées par catégories ; </li>
\t\t\t\t\t<li>total des dépenses, des revenus.</li>
\t\t\t\t</ul>
\t\t\t\t<p class='text-justify'>Vous n’aurez plus de mauvaises surprises à la fin du mois.</p>
\t\t\t\t<p class='text-justify'>De même, il vous sera aussi possible de visualiser les bilans annuels de vos comptes afin de comparer les dépenses et les revenus sur plusieurs mois. </p>

\t\t\t<p class='text-center aeration'><a href=\"{{ path('fos_user_registration_register') }}\" class='ma-petite-tirelire'>Découvrez en plus : inscrivez vous !</a></p>
\t\t\t</div>\t
\t    \t<div class=\"col-md-5 image visible-sm-block visible-xs-block\">
\t    \t</div>
\t\t</div>\t\t
    </div>
    <a href=\"#login\" class=\"top\"><span class=\"glyphicon glyphicon-menu-up\"></span></a>
</section>

{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"{{ asset('bundles/fgsuser/css/security/login.css') }}\"  rel='stylesheet' type='text/css' />
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"{{ asset('bundles/fgsuser/js/security/progressive-href.js') }}\"></script>
{% endblock %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
