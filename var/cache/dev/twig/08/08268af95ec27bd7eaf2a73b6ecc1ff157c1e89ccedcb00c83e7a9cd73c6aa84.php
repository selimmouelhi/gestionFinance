<?php

/* FGSGestionComptesBundle:Mouvements:check_button.html.twig */
class __TwigTemplate_bcbba6579cc594a997bb61a4ab55a95df4a699ef8997c3c465dba19ffd33de2f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Mouvements:check_button.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Mouvements:check_button.html.twig"));

        // line 1
        echo "<button data-action='check' data-value='";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mouvementFinancier"]) ? $context["mouvementFinancier"] : $this->getContext($context, "mouvementFinancier")), "id", array()), "html", null, true);
        echo "' class='btn btn-xs ";
        echo (($this->getAttribute((isset($context["mouvementFinancier"]) ? $context["mouvementFinancier"] : $this->getContext($context, "mouvementFinancier")), "checkBanque", array())) ? ("text-success") : ("text-muted"));
        echo " btn-link'>
\t<span class='glyphicon glyphicon-ok'></span>
</button>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FGSGestionComptesBundle:Mouvements:check_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<button data-action='check' data-value='{{ mouvementFinancier.id }}' class='btn btn-xs {{ mouvementFinancier.checkBanque ? 'text-success' : 'text-muted' }} btn-link'>
\t<span class='glyphicon glyphicon-ok'></span>
</button>
", "FGSGestionComptesBundle:Mouvements:check_button.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle\\Resources\\views\\Mouvements\\check_button.html.twig");
    }
}
