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

/* etudiant/lister.html.twig */
class __TwigTemplate_48d650564baa0e884b8ae686c9849afef44c8da0d7aab23a0c87b1d221c1687d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/lister.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title>Réalisations professionnelles</title>
\t<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
\t<script src=\"https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js\"></script>
\t<link href=\"https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css\" rel=\"stylesheet\">
</head>
<body>
<div class=\"container\">
\t<h1 class=\"display-4\"><u>Réalisations professionnelles</u></h1><br>

\t\t<!-- 1ER TABLEAU : AFFICHER TOUTES LES OCCURENCES DE DEUXIEME ANNEE, SI IL N'Y EN A PAS, SORTIR DE LA CONDITION -->
\t\t\t<h4 align=\"left\"><u>Deuxième année</u></h4>
\t\t\t\t<table class=\"table table-dark\" id=\"table\" data-toggle=\"BootstrapTable\" data-height=\"460\">
\t\t\t\t  <thead>
\t\t\t\t    <tr>
\t\t\t\t      <th scope=\"col\" data-sortable=\"true\">Libellé</th>
\t\t\t\t      <th scope=\"col\" data-sortable=\"true\">Nombre d'activités</th>
\t\t\t\t      <th scope=\"col\" data-sortable=\"true\">Statut</th>
\t\t\t\t      <th scope=\"col\" data-sortable=\"true\">Date</th>
\t\t\t\t      <th></th>
\t\t\t\t    </tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t  \t<!-- ENTRER DANS LA BOUCLE -->
\t\t\t\t    <tr>
\t\t\t\t      <td><a href=\"../etudiant/consulter.html.twig\" class=\"text-white\"> [BLOC 6] Virtualisation de serveur</td></a>
\t\t\t\t      <td>2</td>
\t\t\t\t      <td>Commenté</td>
\t\t\t\t      <td>27/10/2020</td>
\t\t\t\t      <td><a href=\"...\"><img src=\"img/delete.png\" width=\"15px\" title=\"Cliquez pour supprimer\"></a></td>
\t\t\t\t    </tr>
\t\t\t\t    <tr>
\t\t\t\t      <td><a href=\"...\" class=\"text-white\"> [BLOC 7] JAVA JEE</td></a>
\t\t\t\t      <td>1</td>
\t\t\t\t      <td>Terminé</td>
\t\t\t\t      <td>18/09/2020</td>
\t\t\t\t      <td><a href=\"...\"><img src=\"img/delete.png\" width=\"15px\" title=\"Cliquez pour supprimer\"></a></td>
\t\t\t\t    </tr>
\t\t\t\t  </tbody>
\t\t\t\t</table>
\t\t\t\t<br>
\t\t\t\t<br>

\t\t\t<!-- BOUCLE RECUPERATION LIBELLE, STATUT, CALCUL NB ACTIVITE RP 2EME ANNEE SELON ID -->

\t\t<!-- 2EME TABLEAU : AFFICHER TOUTES LES OCCURENCES DE PREMIERE ANNEE, SI IL N'Y EN A PAS, SORTIR DE LA CONDITION -->
\t\t\t<h4 align=\"left\"><u>Première année</u></h4>
\t\t\t\t<table class=\"table table-dark\">
\t\t\t\t  <thead>
\t\t\t\t    <tr>
\t\t\t\t      <th scope=\"col\">Libellé</th>
\t\t\t\t      <th scope=\"col\">Nombre d'activités</th>
\t\t\t\t      <th scope=\"col\">Statut</th>
\t\t\t\t      <th scope=\"col\">Date</th>
\t\t\t\t      <th></th>
\t\t\t\t    </tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t  \t<!-- ENTRER DANS LA BOUCLE -->
\t\t\t\t    <tr>\t
\t\t\t\t      <td><a href=\"...\" class=\"text-white\"> [STAGE 1] Cahier des charges</td></a>
\t\t\t\t      <td>12</td>
\t\t\t\t      <td>Terminé</td>
\t\t\t\t      <td>12/06/2020</td>
\t\t\t\t      <td><a href=\"...\"><img src=\"img/delete.png\" width=\"15px\" title=\"Cliquez pour supprimer\"></a></td>
\t\t\t\t    </tr>
\t\t\t\t    <tr>\t
\t\t\t\t      <td><a href=\"...\" class=\"text-white\"> [BLOC 1] Page web HTML</td></a>
\t\t\t\t      <td>1</td>
\t\t\t\t      <td>Envoyé</td>
\t\t\t\t      <td>26/09/2019</td>
\t\t\t\t      <td><a href=\"...\"><img src=\"img/delete.png\" width=\"15px\" title=\"Cliquez pour supprimer\"></a></td>
\t\t\t\t    </tr>
\t\t\t\t    <tr>\t
\t\t\t\t      <td><a class=\"text-white\" href=\"...\"> [BLOC 3] VLAN</td></a>
\t\t\t\t      <td>3</td>
\t\t\t\t      <td>Modifié</td>
\t\t\t\t      <td>04/09/2019</td>
\t\t\t\t      <td><a href=\"...\"><img src=\"img/delete.png\" width=\"15px\" title=\"Cliquez pour supprimer\"></a></td>
\t\t\t\t    </tr>
\t\t\t\t  </tbody>
\t\t\t\t</table>


\t\t\t<!-- BOUCLE RECUPERATION LIBELLE, STATUT, CALCUL NB ACTIVITE 1ERE ANNEE SELON ID -->



\t\t<!-- SI AUCUNES OCCURENCES, AFFICHER MESSAGE POUR PREVENIR QU'AUCUNES OCCURENCES N'A ETE RENSEIGNE -->
\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t  \t\t\tVous n'avez pas encore inséré de <a href=\"...\" class=\"alert-link\">réalisation professionnelle</a> pour le moment.
\t\t\t\t</div>

\t\t<br><br>
\t\t\t<a href=\"...\"><input type=\"button\" value=\"Ajouter une nouvelle réalisation professionnelle\" class=\"btn btn-secondary btn-lg btn-block\"></a><br><br><br>
\t\t\t\t


<div class=\"accordion\" id=\"accordionExample\">
<div class=\"card\">
    <div class=\"card-header\" id=\"headingTwo\">
      <h2 class=\"mb-0\">
        <button class=\"btn btn-link btn-block text-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          Aide
        </button>
      </h2>
    </div>
    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
      <div class=\"card-body\">
        Cette page permet d'éditer une réalisation professionnelle en cliquant sur le libellé de la réalisation, afin de l'éditer. Vous pouvez prendre connaissance du nombre d'activité, son statut et vous pouvez supprimer une réalisation en appuyant sur la croix rouge <img src=\"img/delete.png\" width=\"15px\" title=\"Exemple\">
      </div>
    </div>
  </div>
</div>
</body>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/lister.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<title>Réalisations professionnelles</title>
\t<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
\t<script src=\"https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js\"></script>
\t<link href=\"https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css\" rel=\"stylesheet\">
</head>
<body>
<div class=\"container\">
\t<h1 class=\"display-4\"><u>Réalisations professionnelles</u></h1><br>

\t\t<!-- 1ER TABLEAU : AFFICHER TOUTES LES OCCURENCES DE DEUXIEME ANNEE, SI IL N'Y EN A PAS, SORTIR DE LA CONDITION -->
\t\t\t<h4 align=\"left\"><u>Deuxième année</u></h4>
\t\t\t\t<table class=\"table table-dark\" id=\"table\" data-toggle=\"BootstrapTable\" data-height=\"460\">
\t\t\t\t  <thead>
\t\t\t\t    <tr>
\t\t\t\t      <th scope=\"col\" data-sortable=\"true\">Libellé</th>
\t\t\t\t      <th scope=\"col\" data-sortable=\"true\">Nombre d'activités</th>
\t\t\t\t      <th scope=\"col\" data-sortable=\"true\">Statut</th>
\t\t\t\t      <th scope=\"col\" data-sortable=\"true\">Date</th>
\t\t\t\t      <th></th>
\t\t\t\t    </tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t  \t<!-- ENTRER DANS LA BOUCLE -->
\t\t\t\t    <tr>
\t\t\t\t      <td><a href=\"../etudiant/consulter.html.twig\" class=\"text-white\"> [BLOC 6] Virtualisation de serveur</td></a>
\t\t\t\t      <td>2</td>
\t\t\t\t      <td>Commenté</td>
\t\t\t\t      <td>27/10/2020</td>
\t\t\t\t      <td><a href=\"...\"><img src=\"img/delete.png\" width=\"15px\" title=\"Cliquez pour supprimer\"></a></td>
\t\t\t\t    </tr>
\t\t\t\t    <tr>
\t\t\t\t      <td><a href=\"...\" class=\"text-white\"> [BLOC 7] JAVA JEE</td></a>
\t\t\t\t      <td>1</td>
\t\t\t\t      <td>Terminé</td>
\t\t\t\t      <td>18/09/2020</td>
\t\t\t\t      <td><a href=\"...\"><img src=\"img/delete.png\" width=\"15px\" title=\"Cliquez pour supprimer\"></a></td>
\t\t\t\t    </tr>
\t\t\t\t  </tbody>
\t\t\t\t</table>
\t\t\t\t<br>
\t\t\t\t<br>

\t\t\t<!-- BOUCLE RECUPERATION LIBELLE, STATUT, CALCUL NB ACTIVITE RP 2EME ANNEE SELON ID -->

\t\t<!-- 2EME TABLEAU : AFFICHER TOUTES LES OCCURENCES DE PREMIERE ANNEE, SI IL N'Y EN A PAS, SORTIR DE LA CONDITION -->
\t\t\t<h4 align=\"left\"><u>Première année</u></h4>
\t\t\t\t<table class=\"table table-dark\">
\t\t\t\t  <thead>
\t\t\t\t    <tr>
\t\t\t\t      <th scope=\"col\">Libellé</th>
\t\t\t\t      <th scope=\"col\">Nombre d'activités</th>
\t\t\t\t      <th scope=\"col\">Statut</th>
\t\t\t\t      <th scope=\"col\">Date</th>
\t\t\t\t      <th></th>
\t\t\t\t    </tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t  \t<!-- ENTRER DANS LA BOUCLE -->
\t\t\t\t    <tr>\t
\t\t\t\t      <td><a href=\"...\" class=\"text-white\"> [STAGE 1] Cahier des charges</td></a>
\t\t\t\t      <td>12</td>
\t\t\t\t      <td>Terminé</td>
\t\t\t\t      <td>12/06/2020</td>
\t\t\t\t      <td><a href=\"...\"><img src=\"img/delete.png\" width=\"15px\" title=\"Cliquez pour supprimer\"></a></td>
\t\t\t\t    </tr>
\t\t\t\t    <tr>\t
\t\t\t\t      <td><a href=\"...\" class=\"text-white\"> [BLOC 1] Page web HTML</td></a>
\t\t\t\t      <td>1</td>
\t\t\t\t      <td>Envoyé</td>
\t\t\t\t      <td>26/09/2019</td>
\t\t\t\t      <td><a href=\"...\"><img src=\"img/delete.png\" width=\"15px\" title=\"Cliquez pour supprimer\"></a></td>
\t\t\t\t    </tr>
\t\t\t\t    <tr>\t
\t\t\t\t      <td><a class=\"text-white\" href=\"...\"> [BLOC 3] VLAN</td></a>
\t\t\t\t      <td>3</td>
\t\t\t\t      <td>Modifié</td>
\t\t\t\t      <td>04/09/2019</td>
\t\t\t\t      <td><a href=\"...\"><img src=\"img/delete.png\" width=\"15px\" title=\"Cliquez pour supprimer\"></a></td>
\t\t\t\t    </tr>
\t\t\t\t  </tbody>
\t\t\t\t</table>


\t\t\t<!-- BOUCLE RECUPERATION LIBELLE, STATUT, CALCUL NB ACTIVITE 1ERE ANNEE SELON ID -->



\t\t<!-- SI AUCUNES OCCURENCES, AFFICHER MESSAGE POUR PREVENIR QU'AUCUNES OCCURENCES N'A ETE RENSEIGNE -->
\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t  \t\t\tVous n'avez pas encore inséré de <a href=\"...\" class=\"alert-link\">réalisation professionnelle</a> pour le moment.
\t\t\t\t</div>

\t\t<br><br>
\t\t\t<a href=\"...\"><input type=\"button\" value=\"Ajouter une nouvelle réalisation professionnelle\" class=\"btn btn-secondary btn-lg btn-block\"></a><br><br><br>
\t\t\t\t


<div class=\"accordion\" id=\"accordionExample\">
<div class=\"card\">
    <div class=\"card-header\" id=\"headingTwo\">
      <h2 class=\"mb-0\">
        <button class=\"btn btn-link btn-block text-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          Aide
        </button>
      </h2>
    </div>
    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
      <div class=\"card-body\">
        Cette page permet d'éditer une réalisation professionnelle en cliquant sur le libellé de la réalisation, afin de l'éditer. Vous pouvez prendre connaissance du nombre d'activité, son statut et vous pouvez supprimer une réalisation en appuyant sur la croix rouge <img src=\"img/delete.png\" width=\"15px\" title=\"Exemple\">
      </div>
    </div>
  </div>
</div>
</body>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\" crossorigin=\"anonymous\"></script>
</html>", "etudiant/lister.html.twig", "D:\\wamp64\\www\\portefeuille\\templates\\etudiant\\lister.html.twig");
    }
}
