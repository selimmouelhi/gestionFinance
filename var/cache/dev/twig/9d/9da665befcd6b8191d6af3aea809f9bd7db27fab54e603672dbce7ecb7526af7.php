<?php

/* @FGSGestionComptes/Categories/delete_button.html.twig */
class __TwigTemplate_3596f98ff51773d1a18c0172b1b6e53e295457f8ce208b35adb32629abcc183f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGSGestionComptes/Categories/delete_button.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FGSGestionComptes/Categories/delete_button.html.twig"));

        // line 1
        if ( !twig_test_empty($this->getAttribute((isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")), "parent", array()))) {
            // line 2
            echo "\t<button data-categorie=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")), "libelle", array()), "html", null, true);
            echo "\" data-parent=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")), "parent", array()), "libelle", array()), "html", null, true);
            echo "\" data-action='delete' data-value='";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")), "id", array()), "html", null, true);
            echo "' class='btn btn-danger'>
\t\t<span class='glyphicon glyphicon-trash'></span><span class='hidden-xs'>Supprimer</span>
\t</button>
";
        } else {
            // line 6
            echo "\t<button class='btn btn-danger disabled' type='button'><span class='glyphicon glyphicon-trash'></span><span class='hidden-xs'>Supprimer</span></button>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FGSGestionComptes/Categories/delete_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if children.parent is not empty %}
\t<button data-categorie=\"{{ children.libelle }}\" data-parent=\"{{ children.parent.libelle }}\" data-action='delete' data-value='{{ children.id }}' class='btn btn-danger'>
\t\t<span class='glyphicon glyphicon-trash'></span><span class='hidden-xs'>Supprimer</span>
\t</button>
{% else %}
\t<button class='btn btn-danger disabled' type='button'><span class='glyphicon glyphicon-trash'></span><span class='hidden-xs'>Supprimer</span></button>
{% endif %}
", "@FGSGestionComptes/Categories/delete_button.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle\\Resources\\views\\Categories\\delete_button.html.twig");
    }
}
