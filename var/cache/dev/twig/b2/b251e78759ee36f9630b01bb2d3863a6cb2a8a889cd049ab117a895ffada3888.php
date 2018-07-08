<?php

/* header/meta.html.twig */
class __TwigTemplate_e4167c3de533e810e35c2b2ef9bbd6a3219299bd3a3593a43ee6b49d574fe63e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header/meta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header/meta.html.twig"));

        // line 1
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=320px, initial-scale=1, maximum-scale=1\" />
<meta http-equiv=\"content-language\" content=\"fr-FR\" />
<meta name=\"language\" content=\"fr-FR\" />
<meta property=\"og:title\" content=\"Faites vos comptes en ligne\">
<meta property=\"og:site_name\" content=\"Ma petite Tirelire\">
<meta property=\"og:url\" content=\"https://www.ma-petite-tirelire.fr/\">
<meta property=\"og:description\" content=\"Ma petite tirelire est une application web vous permettant de faire vos comptes en ligne. Son but : vous aider dans la gestion de vos finances et à terme, économiser.\">
<meta property=\"fb:page_id\" content=\"1697318110492039\">
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:image\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("img/logo-share-facebook.jpg"), "html", null, true);
        echo "\" />
<!--  <meta http-equiv=\"Content-Security-Policy\" content=\"default-src 'self'; font-src 'self'  fonts.gstatic.com; style-src 'self' fonts.googleapis.com; \">  -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header/meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=320px, initial-scale=1, maximum-scale=1\" />
<meta http-equiv=\"content-language\" content=\"fr-FR\" />
<meta name=\"language\" content=\"fr-FR\" />
<meta property=\"og:title\" content=\"Faites vos comptes en ligne\">
<meta property=\"og:site_name\" content=\"Ma petite Tirelire\">
<meta property=\"og:url\" content=\"https://www.ma-petite-tirelire.fr/\">
<meta property=\"og:description\" content=\"Ma petite tirelire est une application web vous permettant de faire vos comptes en ligne. Son but : vous aider dans la gestion de vos finances et à terme, économiser.\">
<meta property=\"fb:page_id\" content=\"1697318110492039\">
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:image\" content=\"{{ absolute_url('img/logo-share-facebook.jpg') }}\" />
<!--  <meta http-equiv=\"Content-Security-Policy\" content=\"default-src 'self'; font-src 'self'  fonts.gstatic.com; style-src 'self' fonts.googleapis.com; \">  -->
", "header/meta.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\app\\Resources\\views\\header\\meta.html.twig");
    }
}
