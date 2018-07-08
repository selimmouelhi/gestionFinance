<?php

/* FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig */
class __TwigTemplate_793d0107c596e7dd68535f701bdb4361d047a811bf54b0ec53f24d0825cae7e3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig"));

        // line 1
        echo "<table class=\"table table-striped\">
\t";
        // line 2
        if (array_key_exists("caption_top", $context)) {
            // line 3
            echo "\t\t<caption>";
            echo twig_escape_filter($this->env, (isset($context["caption_top"]) ? $context["caption_top"] : $this->getContext($context, "caption_top")), "html", null, true);
            echo " </caption>
\t";
        }
        // line 5
        echo "\t<thead>
\t\t<tr>
\t\t\t<th class='hidden-xs'></th>
\t\t\t<th>
\t\t\t\tDate
\t\t\t</th>
\t\t\t<th>
\t\t\t\tLibellé
\t\t\t</th>
\t\t\t<th class='hidden-xs'>
\t\t\t\tCatégorie
\t\t\t</th>
\t\t\t<th class=\"text-right\">
\t\t\t\tMontant
\t\t\t</th>
\t\t\t<th class='hidden-xs'></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_mouvement_financier"]) ? $context["liste_mouvement_financier"] : $this->getContext($context, "liste_mouvement_financier")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["mouvementFinancier"]) {
            // line 25
            echo "\t\t\t<tr>
\t\t\t\t<td  class='hidden-xs'>";
            // line 26
            $this->loadTemplate("FGSGestionComptesBundle:Mouvements:check_button.html.twig", "FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig", 26)->display($context);
            echo "</td>
\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mouvementFinancier"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 28
            $this->loadTemplate("FGSGestionComptesBundle:Utils:commentaire.html.twig", "FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig", 28)->display($context);
            echo twig_escape_filter($this->env, $this->getAttribute($context["mouvementFinancier"], "libelle", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td  class='hidden-xs'><p class='label ";
            // line 29
            echo ((($this->getAttribute($context["mouvementFinancier"], "montant", array()) > 0)) ? ("label-success") : ("label-warning"));
            echo " categorie-mf'><span class=' text-center glyphicon ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mouvementFinancier"], "categorieMouvementFinancier", array()), "icone", array()), "html", null, true);
            echo "'></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mouvementFinancier"], "categorieMouvementFinancier", array()), "libelle", array()), "html", null, true);
            echo "</p></td>
\t\t\t\t<td class=\"text-right\">";
            // line 30
            echo twig_escape_filter($this->env, twig_localized_currency_filter($this->getAttribute($context["mouvementFinancier"], "montant", array()), "EUR"), "html", null, true);
            echo "</td>
\t\t\t\t<td class='text-right hidden-xs'>
\t\t\t\t\t<a href='";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fgs_gestion_comptes_modifier_mouvement_financier", array("id" => $this->getAttribute($context["mouvementFinancier"], "id", array()))), "html", null, true);
            echo "' class='btn btn-info btn-xs'><span class='glyphicon glyphicon-pencil'></span></a> 
\t\t\t\t\t";
            // line 33
            $this->loadTemplate("FGSGestionComptesBundle:Mouvements:delete_button.html.twig", "FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig", 33)->display($context);
            // line 34
            echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mouvementFinancier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t</tbody>
\t";
        // line 38
        if (array_key_exists("caption_bottom", $context)) {
            // line 39
            echo "\t\t<caption>";
            echo twig_escape_filter($this->env, (isset($context["caption_bottom"]) ? $context["caption_bottom"] : $this->getContext($context, "caption_bottom")), "html", null, true);
            echo " </caption>
\t";
        }
        // line 41
        echo "</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  130 => 39,  128 => 38,  125 => 37,  109 => 34,  107 => 33,  103 => 32,  98 => 30,  90 => 29,  85 => 28,  81 => 27,  77 => 26,  74 => 25,  57 => 24,  36 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-striped\">
\t{% if caption_top is defined %}
\t\t<caption>{{ caption_top }} </caption>
\t{% endif %}
\t<thead>
\t\t<tr>
\t\t\t<th class='hidden-xs'></th>
\t\t\t<th>
\t\t\t\tDate
\t\t\t</th>
\t\t\t<th>
\t\t\t\tLibellé
\t\t\t</th>
\t\t\t<th class='hidden-xs'>
\t\t\t\tCatégorie
\t\t\t</th>
\t\t\t<th class=\"text-right\">
\t\t\t\tMontant
\t\t\t</th>
\t\t\t<th class='hidden-xs'></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for mouvementFinancier in liste_mouvement_financier %}
\t\t\t<tr>
\t\t\t\t<td  class='hidden-xs'>{% include 'FGSGestionComptesBundle:Mouvements:check_button.html.twig' %}</td>
\t\t\t\t<td>{{ mouvementFinancier.date|date(\"d/m/Y\") }}</td>
\t\t\t\t<td>{% include 'FGSGestionComptesBundle:Utils:commentaire.html.twig' %}{{ mouvementFinancier.libelle }}</td>
\t\t\t\t<td  class='hidden-xs'><p class='label {{ mouvementFinancier.montant > 0 ? 'label-success':'label-warning' }} categorie-mf'><span class=' text-center glyphicon {{ mouvementFinancier.categorieMouvementFinancier.icone }}'></span> {{ mouvementFinancier.categorieMouvementFinancier.libelle }}</p></td>
\t\t\t\t<td class=\"text-right\">{{ mouvementFinancier.montant|localizedcurrency('EUR') }}</td>
\t\t\t\t<td class='text-right hidden-xs'>
\t\t\t\t\t<a href='{{ path('fgs_gestion_comptes_modifier_mouvement_financier', {'id':mouvementFinancier.id}) }}' class='btn btn-info btn-xs'><span class='glyphicon glyphicon-pencil'></span></a> 
\t\t\t\t\t{% include 'FGSGestionComptesBundle:Mouvements:delete_button.html.twig' %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endfor %}
\t</tbody>
\t{% if caption_bottom is defined  %}
\t\t<caption>{{ caption_bottom }} </caption>
\t{% endif %}
</table>
", "FGSGestionComptesBundle:Utils:tableau_mouvement_financier.html.twig", "C:\\wamp64\\www\\GestionComptes-master\\src\\FGS\\GestionComptesBundle\\Resources\\views\\Utils\\tableau_mouvement_financier.html.twig");
    }
}
