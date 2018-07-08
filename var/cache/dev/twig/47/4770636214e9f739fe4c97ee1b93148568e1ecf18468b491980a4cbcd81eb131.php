<?php

/* FGSGestionComptesBundle::admin.html.twig */
class __TwigTemplate_0c55f9e937337ebcc9a1b998a3be7c16f9c29dcc4e7a8d41661ebeb80b4123a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'big_title' => array($this, 'block_big_title'),
            'title' => array($this, 'block_title'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle::admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle::admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <link rel=\"icon\" type=\"image/png\" href=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icone.png"), "html", null, true);
        echo ">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">

    <title>JMLESSOUS - ";
        // line 11
        $this->displayBlock('big_title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icone.png"), "html", null, true);
        echo "/>

    <!-- Bootstrap core CSS -->
    <link href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css1/bootstrap.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <!--external css-->
    <link href=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("font-awesome/css/font-awesome.css"), "html", null, true);
        echo " rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css1/zabuto_calendar.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js1/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "/>
    <link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lineicons/style.css"), "html", null, true);
        echo ">

    <!-- Custom styles for this template -->
    <link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css1/style.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <link href=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css1/style-responsive.css"), "html", null, true);
        echo " rel=\"stylesheet\">

    <script src=";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js1/chart-master/Chart.js"), "html", null, true);
        echo "></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<section id=\"container\">
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class=\"header black-bg\">
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
        </div>
        <a href=\"index.html\" class=\"logo\"><b>JMLESSOUS</b></a>
        <div class=\"nav notify-row\" id=\"top_menu\">
            <!--  notification start -->

            <!--  notification end -->
        </div>
        <div class=\"top-menu\">
            <ul class=\"nav pull-right top-menu\">
                <li><a class=\"logout\" href= \"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_home");
        echo "\"> Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id=\"sidebar\" class=\"nav-collapse \">
            <!-- sidebar menu start-->
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">

                <p class=\"centered\"><a href=\"profile.html\"><img src=";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icone.png"), "html", null, true);
        echo " width=\"100\"></a>
                </p>
                <li class=\"mt\">
                    <a class=\"active\" href=\"\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"glyphicon glyphicon-user\"></i>
                        <span>Utilisateurs</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"\">Consulter Utilisateurs</a></li>
                    </ul>
                </li>

                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"glyphicon glyphicon-briefcase\"></i>
                        <span>Banque</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_ajouterBanque");
        echo "\">Ajouter Banque</a></li>
                        <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_afficherBanques");
        echo "\">Consulter Banques</a></li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"glyphicon glyphicon-comment\"></i>
                        <span>Reclamations</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lire_reclamations");
        echo "\">Reclamations</a></li>
                    </ul>
                </li>



            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id=\"main-content\">
        <section class=\"wrapper\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"form-panel\">
                        <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> ";
        // line 126
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>

                        ";
        // line 128
        $this->displayBlock('contenu', $context, $blocks);
        // line 129
        echo "
                    </div><!-- /form-panel -->
                </div><!-- /col-lg-12 -->
            </div>
        </section>
    </section>

    <!--main content end-->

</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src=";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js1/jquery.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js1/jquery-1.8.3.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js1/bootstrap.min.js"), "html", null, true);
        echo "></script>
<script class=\"include\" type=\"text/javascript\" src=";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js1/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js1/jquery.scrollTo.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js1/jquery.nicescroll.js"), "html", null, true);
        echo " type=\"text/javascript\"></script>
<script src=";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js1/jquery.sparkline.js"), "html", null, true);
        echo "></script>


<!--common script for all pages-->
<script src=";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js1/common-scripts.js"), "html", null, true);
        echo "></script>


<!--script for this page-->
<script src=";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js1/sparkline-chart.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/zabuto_calendar.js"), "html", null, true);
        echo "></script>

<script type=\"text/javascript\">
    \$(document).ready(function () {
        var unique_id = \$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href=\"http://blacktie.co\" target=\"_blank\" style=\"color:#ffd777\">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: ";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ui-sam.jpg"), "html", null, true);
        echo ",
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>

<script type=\"application/javascript\">
    \$(document).ready(function () {
        \$(\"#date-popover\").popover({html: true, trigger: \"manual\"});
        \$(\"#date-popover\").hide();
        \$(\"#date-popover\").click(function (e) {
            \$(this).hide();
        });

        \$(\"#my-calendar\").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: \"show_data.php?action=1\",
                modal: true
            },
            legend: [
                {type: \"text\", label: \"Special event\", badge: \"00\"},
                {type: \"block\", label: \"Regular event\",}
            ]
        });
    });


    function myNavFunction(id) {
        \$(\"#date-popover\").hide();
        var nav = \$(\"#\" + id).data(\"navigation\");
        var to = \$(\"#\" + id).data(\"to\");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>


</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_big_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "big_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "big_title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FGSGestionComptesBundle::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 128,  358 => 126,  341 => 11,  279 => 166,  266 => 156,  262 => 155,  255 => 151,  248 => 147,  244 => 146,  240 => 145,  236 => 144,  232 => 143,  228 => 142,  224 => 141,  210 => 129,  208 => 128,  203 => 126,  178 => 104,  166 => 95,  162 => 94,  134 => 69,  116 => 54,  85 => 26,  80 => 24,  76 => 23,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  53 => 15,  47 => 12,  43 => 11,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <link rel=\"icon\" type=\"image/png\" href={{ asset('img/icone.png') }}>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">

    <title>JMLESSOUS - {% block big_title %}{% endblock %}</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href={{ asset('img/icone.png') }}/>

    <!-- Bootstrap core CSS -->
    <link href={{ asset('css1/bootstrap.css') }} rel=\"stylesheet\">
    <!--external css-->
    <link href={{ asset('font-awesome/css/font-awesome.css') }} rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href={{ asset('css1/zabuto_calendar.css') }}>
    <link rel=\"stylesheet\" type=\"text/css\" href={{ asset('js1/gritter/css/jquery.gritter.css') }}/>
    <link rel=\"stylesheet\" type=\"text/css\" href={{ asset('lineicons/style.css') }}>

    <!-- Custom styles for this template -->
    <link href={{ asset('css1/style.css') }} rel=\"stylesheet\">
    <link href={{ asset('css1/style-responsive.css') }} rel=\"stylesheet\">

    <script src={{ asset('js1/chart-master/Chart.js') }}></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<section id=\"container\">
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class=\"header black-bg\">
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
        </div>
        <a href=\"index.html\" class=\"logo\"><b>JMLESSOUS</b></a>
        <div class=\"nav notify-row\" id=\"top_menu\">
            <!--  notification start -->

            <!--  notification end -->
        </div>
        <div class=\"top-menu\">
            <ul class=\"nav pull-right top-menu\">
                <li><a class=\"logout\" href= \"{{ path('fgs_gestion_comptes_home') }}\"> Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id=\"sidebar\" class=\"nav-collapse \">
            <!-- sidebar menu start-->
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">

                <p class=\"centered\"><a href=\"profile.html\"><img src={{ asset('img/icone.png') }} width=\"100\"></a>
                </p>
                <li class=\"mt\">
                    <a class=\"active\" href=\"\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"glyphicon glyphicon-user\"></i>
                        <span>Utilisateurs</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"\">Consulter Utilisateurs</a></li>
                    </ul>
                </li>

                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"glyphicon glyphicon-briefcase\"></i>
                        <span>Banque</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"{{ path('fgs_gestion_comptes_ajouterBanque') }}\">Ajouter Banque</a></li>
                        <li><a href=\"{{ path('fgs_gestion_comptes_afficherBanques') }}\">Consulter Banques</a></li>
                    </ul>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"glyphicon glyphicon-comment\"></i>
                        <span>Reclamations</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"{{ path('lire_reclamations') }}\">Reclamations</a></li>
                    </ul>
                </li>



            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id=\"main-content\">
        <section class=\"wrapper\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"form-panel\">
                        <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> {% block title %}{% endblock %}</h4>

                        {% block contenu %}{% endblock %}

                    </div><!-- /form-panel -->
                </div><!-- /col-lg-12 -->
            </div>
        </section>
    </section>

    <!--main content end-->

</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src={{ asset('js1/jquery.js') }}></script>
<script src={{ asset('js1/jquery-1.8.3.min.js') }}></script>
<script src={{ asset('js1/bootstrap.min.js') }}></script>
<script class=\"include\" type=\"text/javascript\" src={{ asset('js1/jquery.dcjqaccordion.2.7.js') }}></script>
<script src={{ asset('js1/jquery.scrollTo.min.js') }}></script>
<script src={{ asset('js1/jquery.nicescroll.js') }} type=\"text/javascript\"></script>
<script src={{ asset('js1/jquery.sparkline.js') }}></script>


<!--common script for all pages-->
<script src={{ asset('js1/common-scripts.js') }}></script>


<!--script for this page-->
<script src={{ asset('js1/sparkline-chart.js') }}></script>
<script src={{ asset('js/zabuto_calendar.js') }}></script>

<script type=\"text/javascript\">
    \$(document).ready(function () {
        var unique_id = \$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href=\"http://blacktie.co\" target=\"_blank\" style=\"color:#ffd777\">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: {{ asset('images/ui-sam.jpg') }},
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>

<script type=\"application/javascript\">
    \$(document).ready(function () {
        \$(\"#date-popover\").popover({html: true, trigger: \"manual\"});
        \$(\"#date-popover\").hide();
        \$(\"#date-popover\").click(function (e) {
            \$(this).hide();
        });

        \$(\"#my-calendar\").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: \"show_data.php?action=1\",
                modal: true
            },
            legend: [
                {type: \"text\", label: \"Special event\", badge: \"00\"},
                {type: \"block\", label: \"Regular event\",}
            ]
        });
    });


    function myNavFunction(id) {
        \$(\"#date-popover\").hide();
        var nav = \$(\"#\" + id).data(\"navigation\");
        var to = \$(\"#\" + id).data(\"to\");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>


</body>
</html>
", "FGSGestionComptesBundle::admin.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle/Resources/views/admin.html.twig");
    }
}
