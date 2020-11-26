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

/* stage/lister.html.twig */
class __TwigTemplate_9e9d30c4ac2dd2313616f2d9ccfd1e42ba0d233ce6eaceb6f16671be0000d49c extends Template
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
        // line 3
        return "entete.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stage/lister.html.twig"));

        $this->parent = $this->loadTemplate("entete.html.twig", "stage/lister.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
<!DOCTYPE html>

<html>
<head>
  <meta charset=\"utf-8\">
  <title>Stage</title>
</head>
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
  <script src=\"https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js\"></script>
  <link href=\"https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css\" rel=\"stylesheet\">
</head><body>
<div class=\"container\">
  <h1 class=\"display-4\"><u>Tableau de suivi de stage</u></h1><br>


      <h4 align=\"left\"><u>Suivi de stage</u></h4>
        <table class=\"table table-dark\" id=\"table\" data-toggle=\"BootstrapTable\" data-height=\"460\">
          <thead>
            <tr>
            <th scope=\"col\">Etudiant</th>
          <th scope=\"col\">Référent</th>
          <th scope=\"col\">Entreprise</th>
          <th scope=\"col\">Tuteur</th>
            </tr>
          </thead>
          <tbody>

            <tr>
            <td>YANIS ADALA</td>
            <td>P.NGO</td>
            <td>Lyée Jean Rostand</td>
            <td>Mr.Ngo</td>
            <td><a href=\"#\">Carnet de bord</a></td>
          </tr>
            <tr>
            <td>LEO AUBRIS</td>
            <td>Z.ANNOUCHE</td>
            <td>AXA Assurance</td>
            <td>Thommerel Laurent</td>
            <td><a href=\"#\">Carnet de bord</a></td>
          </tr>
          </tbody>
        </table>
        <br>
        <br>

      



</body>

</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "stage/lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  52 => 4,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends \"entete.html.twig\" %}
 {% block content %}

<!DOCTYPE html>

<html>
<head>
  <meta charset=\"utf-8\">
  <title>Stage</title>
</head>
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\" integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
  <script src=\"https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js\"></script>
  <link href=\"https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css\" rel=\"stylesheet\">
</head><body>
<div class=\"container\">
  <h1 class=\"display-4\"><u>Tableau de suivi de stage</u></h1><br>


      <h4 align=\"left\"><u>Suivi de stage</u></h4>
        <table class=\"table table-dark\" id=\"table\" data-toggle=\"BootstrapTable\" data-height=\"460\">
          <thead>
            <tr>
            <th scope=\"col\">Etudiant</th>
          <th scope=\"col\">Référent</th>
          <th scope=\"col\">Entreprise</th>
          <th scope=\"col\">Tuteur</th>
            </tr>
          </thead>
          <tbody>

            <tr>
            <td>YANIS ADALA</td>
            <td>P.NGO</td>
            <td>Lyée Jean Rostand</td>
            <td>Mr.Ngo</td>
            <td><a href=\"#\">Carnet de bord</a></td>
          </tr>
            <tr>
            <td>LEO AUBRIS</td>
            <td>Z.ANNOUCHE</td>
            <td>AXA Assurance</td>
            <td>Thommerel Laurent</td>
            <td><a href=\"#\">Carnet de bord</a></td>
          </tr>
          </tbody>
        </table>
        <br>
        <br>

      



</body>

</html>

{% endblock %}", "stage/lister.html.twig", "D:\\wamp64\\www\\portefeuille\\templates\\stage\\lister.html.twig");
    }
}
