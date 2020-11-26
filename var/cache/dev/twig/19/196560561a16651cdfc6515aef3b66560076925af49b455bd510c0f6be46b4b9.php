<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* rp/consulter.html.twig */
class __TwigTemplate_e7a4332868e2d392ac8d247170b37c050080da9b0ac12d20e4c7bc634a35a82a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "entete.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rp/consulter.html.twig"));

        $this->parent = $this->loadTemplate("entete.html.twig", "rp/consulter.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Réalisations professionnelles</title>
    <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
</head>
<body>
<div class=\"container\">
    <h1 class=\"display-4\"><u>Réalisations professionnelles</u></h1>
       <br> 

<form>
  <div class=\"form-group\">
    <table>
      <tr>
        <td width=\"100%\">
          <label for=\"formGroupExampleInput\">Libellé *</label>
          <input type=\"text\" class=\"form-control\" id=\"libelle\" placeholder=\"Libellé\" value=\"[BLOC 6] Virtualisation de serveur\">
        </td>
        <td width=\"1%\">
          <img src=\"https://img.icons8.com/fluent-systems-regular/24/000000/info.png\"/ title=\"Préfixer le libellé par le cadre de réalisation : [PPE1], [SI6], [SISR2], [STAGE1],...\">
        </td>
      </tr>
    </table>
  </div>


  <div class=\"form-group\">
    <table>
      <tr>
        <td width=\"100%\">
          <label for=\"formGroupExampleInput2\">Contexte *</label>
          <input type=\"text\" class=\"form-control\" id=\"contexte\" placeholder=\"Contexte\">
        </td>
        <td width=\"1%\">
          <img src=\"https://img.icons8.com/fluent-systems-regular/24/000000/info.png\"/ title=\"Dire ce que l'entreprise veut changer à son activité (exemple : on souhaite permettre aux clients de passer commande sur le site / le parc informatique doit faire l'objet d'un suivi)\">
        </td>
      </tr>
    </table>
  </div>


</form>

<br><br>


<div class=\"jumbotron jumbotron-fluid\">
  <div class=\"container\">
  <form>
  <div class=\"form-row\">
    <div class=\"form-group col-md-4\">
      <label for=\"source\">Source</label>
      <input type=\"text\" class=\"form-control\" id=\"source\" placeholder=\"Source\">
      </select>
    </div>
    <div class=\"form-group col-md-2\">
      <label for=\"source\">Composition</label>
      <input type=\"text\" class=\"form-control\" id=\"source\" placeholder=\"Composition\">
    </div>
  </div>
  <div class=\"form-row\">
    <div class=\"form-group col-md-6\">
      <label for=\"debut\">Debut</label>
      <input type=\"date\" class=\"form-control\" id=\"debut\">
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"fin\">Fin</label>
      <input type=\"date\" class=\"form-control\" id=\"fin\">
    </div>
  </div>
</form>
  </div>
</div>

<br>

<form>
  <div class=\"form-group\">
    <label for=\"env_tech\">Env.tech</label>
    <input type=\"text\" class=\"form-control\" id=\"env_tech\" placeholder=\"Environnement technologique\">
  </div>
  <div class=\"form-group\">
    <label for=\"moyens\">Moyens</label>
    <input type=\"text\" class=\"form-control\" id=\"moyen\" placeholder=\"Moyens\">
  </div>
  <div class=\"form-group\">
    <label for=\"avis\">Avis</label>
    <input type=\"text\" class=\"form-control\" id=\"avis\" placeholder=\"Avis\">
  </div>
</form>

            <!-- BOUCLE RECUPERATION LIBELLE, STATUT, CALCUL NB ACTIVITE 1ERE ANNEE SELON ID -->


        <!-- SI AUCUNES OCCURENCES, AFFICHER MESSAGE POUR PREVENIR QU'AUCUNES OCCURENCES N'A ETE RENSEIGNE -->

        <br><br>
            <a href=\"...\"><input type=\"button\" value=\"Enregistrer\" class=\"btn btn-secondary btn-lg btn-block\"></a>

  <div class=\"alert alert-light\" role=\"alert\">
  * Champ Obligatoire <a href=\"#\" class=\"alert-link\">
</div>


</div>
</body>

</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "rp/consulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"entete.html.twig\" %}
 {% block content %}


<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Réalisations professionnelles</title>
    <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
</head>
<body>
<div class=\"container\">
    <h1 class=\"display-4\"><u>Réalisations professionnelles</u></h1>
       <br> 

<form>
  <div class=\"form-group\">
    <table>
      <tr>
        <td width=\"100%\">
          <label for=\"formGroupExampleInput\">Libellé *</label>
          <input type=\"text\" class=\"form-control\" id=\"libelle\" placeholder=\"Libellé\" value=\"[BLOC 6] Virtualisation de serveur\">
        </td>
        <td width=\"1%\">
          <img src=\"https://img.icons8.com/fluent-systems-regular/24/000000/info.png\"/ title=\"Préfixer le libellé par le cadre de réalisation : [PPE1], [SI6], [SISR2], [STAGE1],...\">
        </td>
      </tr>
    </table>
  </div>


  <div class=\"form-group\">
    <table>
      <tr>
        <td width=\"100%\">
          <label for=\"formGroupExampleInput2\">Contexte *</label>
          <input type=\"text\" class=\"form-control\" id=\"contexte\" placeholder=\"Contexte\">
        </td>
        <td width=\"1%\">
          <img src=\"https://img.icons8.com/fluent-systems-regular/24/000000/info.png\"/ title=\"Dire ce que l'entreprise veut changer à son activité (exemple : on souhaite permettre aux clients de passer commande sur le site / le parc informatique doit faire l'objet d'un suivi)\">
        </td>
      </tr>
    </table>
  </div>


</form>

<br><br>


<div class=\"jumbotron jumbotron-fluid\">
  <div class=\"container\">
  <form>
  <div class=\"form-row\">
    <div class=\"form-group col-md-4\">
      <label for=\"source\">Source</label>
      <input type=\"text\" class=\"form-control\" id=\"source\" placeholder=\"Source\">
      </select>
    </div>
    <div class=\"form-group col-md-2\">
      <label for=\"source\">Composition</label>
      <input type=\"text\" class=\"form-control\" id=\"source\" placeholder=\"Composition\">
    </div>
  </div>
  <div class=\"form-row\">
    <div class=\"form-group col-md-6\">
      <label for=\"debut\">Debut</label>
      <input type=\"date\" class=\"form-control\" id=\"debut\">
    </div>
    <div class=\"form-group col-md-6\">
      <label for=\"fin\">Fin</label>
      <input type=\"date\" class=\"form-control\" id=\"fin\">
    </div>
  </div>
</form>
  </div>
</div>

<br>

<form>
  <div class=\"form-group\">
    <label for=\"env_tech\">Env.tech</label>
    <input type=\"text\" class=\"form-control\" id=\"env_tech\" placeholder=\"Environnement technologique\">
  </div>
  <div class=\"form-group\">
    <label for=\"moyens\">Moyens</label>
    <input type=\"text\" class=\"form-control\" id=\"moyen\" placeholder=\"Moyens\">
  </div>
  <div class=\"form-group\">
    <label for=\"avis\">Avis</label>
    <input type=\"text\" class=\"form-control\" id=\"avis\" placeholder=\"Avis\">
  </div>
</form>

            <!-- BOUCLE RECUPERATION LIBELLE, STATUT, CALCUL NB ACTIVITE 1ERE ANNEE SELON ID -->


        <!-- SI AUCUNES OCCURENCES, AFFICHER MESSAGE POUR PREVENIR QU'AUCUNES OCCURENCES N'A ETE RENSEIGNE -->

        <br><br>
            <a href=\"...\"><input type=\"button\" value=\"Enregistrer\" class=\"btn btn-secondary btn-lg btn-block\"></a>

  <div class=\"alert alert-light\" role=\"alert\">
  * Champ Obligatoire <a href=\"#\" class=\"alert-link\">
</div>


</div>
</body>

</html>

{% endblock %}", "rp/consulter.html.twig", "D:\\wamp64\\www\\portefeuille\\templates\\rp\\consulter.html.twig");
    }
}
