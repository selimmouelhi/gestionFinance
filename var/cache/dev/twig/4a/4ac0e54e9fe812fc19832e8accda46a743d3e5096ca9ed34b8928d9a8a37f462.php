<?php

/* @FGSGestionComptes/MouvementsPlanifies/delete_button.html.twig */
class __TwigTemplate_d73c65235c829fe0541c3009336da199347e3a18a8e324e110e4767a11cf3eae extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGSGestionComptes/MouvementsPlanifies/delete_button.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGSGestionComptes/MouvementsPlanifies/delete_button.html.twig"));

        // line 1
        echo "<button  data-action='delete'  data-libelle=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mouvementFinancierPlanifie"]) ? $context["mouvementFinancierPlanifie"] : $this->getContext($context, "mouvementFinancierPlanifie")), "libelle", array()), "html", null, true);
        echo "\" data-libelle-compte=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mouvementFinancierPlanifie"]) ? $context["mouvementFinancierPlanifie"] : $this->getContext($context, "mouvementFinancierPlanifie")), "compte", array()), "nom", array()), "html", null, true);
        echo "\" data-value='";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mouvementFinancierPlanifie"]) ? $context["mouvementFinancierPlanifie"] : $this->getContext($context, "mouvementFinancierPlanifie")), "id", array()), "html", null, true);
        echo "' class='btn btn-danger btn-xs' type='submit'>
\t<span class='glyphicon glyphicon-remove'></span>
</button>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FGSGestionComptes/MouvementsPlanifies/delete_button.html.twig";
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
        return new Twig_Source("<button  data-action='delete'  data-libelle=\"{{ mouvementFinancierPlanifie.libelle }}\" data-libelle-compte=\"{{ mouvementFinancierPlanifie.compte.nom }}\" data-value='{{ mouvementFinancierPlanifie.id }}' class='btn btn-danger btn-xs' type='submit'>
\t<span class='glyphicon glyphicon-remove'></span>
</button>
", "@FGSGestionComptes/MouvementsPlanifies/delete_button.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle\\Resources\\views\\MouvementsPlanifies\\delete_button.html.twig");
    }
}
