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

/* stage/consulter.html.twig */
class __TwigTemplate_44003831d2e1507687cf02d07f36334e0a8401b96a5200352e66ce7b2f8ab996 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stage/consulter.html.twig"));

        $this->parent = $this->loadTemplate("entete.html.twig", "stage/consulter.html.twig", 3);
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

  </head>
  <html>
    
    <body>
      <center>
      <h1>Consultation de stage</h1>
      </center>
      <hr class=\"featurette-divider p-1\">
      <div class=\"container\">
        <form>
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Nom de l'entreprise</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Jean Rostand\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">SIRET</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"19140017500011\">
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Directeur</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Sébastien DUVAL-ROCHER\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">Ville</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Caen\">
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Adresse</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"98 route d'Ifs\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">Téléphone</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"02.31.52.19.40\">
            </div>
          </div>
          <center><div class=\"col-md-6 mb-3\">
            <label for=\"validationCustom02\" >Mail</label>
            <input type=\"mail\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"jean.rostand@ac-caen.fr\">
          </div></center>
          <hr class=\"featurette-divider p-2\">
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Nom du tuteur</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Patrick Mailhet\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">Téléphone du tuteur</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"06.25.34.62.58\">
            </div>
          </div>
          <center><div class=\"col-md-6 mb-3\">
            <label for=\"validationCustom02\" >Mail du tuteur</label>
            <input type=\"mail\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Patrick.Maihlet@ac-caen.fr\">
          </div></center>
          <hr class=\"featurette-divider p-2\">
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Date de debut du stage</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"04/01/2021\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">Date de fin du stage</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"26/02/2021\">
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Durée</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"8 Semaines\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">Sujet</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Mise en place de mise à jour automatique du menu\">
            </div>
          </div>
        </form>
        <hr class=\"featurette-divider p-2\">
        <center><h2>Horaires</h2><br></center>
        <table class=\"table table-dark\" >
          <thead>
            <tr>
              <th scope=\"col\">#</th>
              <th scope=\"col\">Lundi</th>
              <th scope=\"col\">Mardi</th>
              <th scope=\"col\">Mercredi</th>
              <th scope=\"col\">Jeudi</th>
              <th scope=\"col\">Vendredi</th>
              <th scope=\"col\">Samedi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope=\"row\">Début de journée</th>
              <td>8h - 12h</td>
              <td>8H</td>
              <td>8H</td>
              <td>8H</td>
              <td>8H</td>
              <td>0H</td>
            </tr>
            <tr>
              <th scope=\"row\">Fin de journée</th>
              <td>14h - 17h</td>
              <td>8H</td>
              <td>8H</td>
              <td>8H</td>
              <td>8H</td>
              <td>0H</td>
            </tr>
          </tbody>
        </table>
      </div>
    </body>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "stage/consulter.html.twig";
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

  </head>
  <html>
    
    <body>
      <center>
      <h1>Consultation de stage</h1>
      </center>
      <hr class=\"featurette-divider p-1\">
      <div class=\"container\">
        <form>
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Nom de l'entreprise</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Jean Rostand\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">SIRET</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"19140017500011\">
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Directeur</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Sébastien DUVAL-ROCHER\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">Ville</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Caen\">
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Adresse</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"98 route d'Ifs\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">Téléphone</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"02.31.52.19.40\">
            </div>
          </div>
          <center><div class=\"col-md-6 mb-3\">
            <label for=\"validationCustom02\" >Mail</label>
            <input type=\"mail\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"jean.rostand@ac-caen.fr\">
          </div></center>
          <hr class=\"featurette-divider p-2\">
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Nom du tuteur</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Patrick Mailhet\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">Téléphone du tuteur</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"06.25.34.62.58\">
            </div>
          </div>
          <center><div class=\"col-md-6 mb-3\">
            <label for=\"validationCustom02\" >Mail du tuteur</label>
            <input type=\"mail\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Patrick.Maihlet@ac-caen.fr\">
          </div></center>
          <hr class=\"featurette-divider p-2\">
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Date de debut du stage</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"04/01/2021\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">Date de fin du stage</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"26/02/2021\">
            </div>
          </div>
          <div class=\"form-row\">
            <div class=\"col-md-6 mb-3\">
              <label for=\"disabledTextInput\">Durée</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"8 Semaines\">
            </div>
            <div class=\"col-md-6 mb-3\">
              <label for=\"validationCustom02\">Sujet</label>
              <input type=\"text\" id=\"disabledTextInput\" class=\"form-control\" placeholder=\"Mise en place de mise à jour automatique du menu\">
            </div>
          </div>
        </form>
        <hr class=\"featurette-divider p-2\">
        <center><h2>Horaires</h2><br></center>
        <table class=\"table table-dark\" >
          <thead>
            <tr>
              <th scope=\"col\">#</th>
              <th scope=\"col\">Lundi</th>
              <th scope=\"col\">Mardi</th>
              <th scope=\"col\">Mercredi</th>
              <th scope=\"col\">Jeudi</th>
              <th scope=\"col\">Vendredi</th>
              <th scope=\"col\">Samedi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope=\"row\">Début de journée</th>
              <td>8h - 12h</td>
              <td>8H</td>
              <td>8H</td>
              <td>8H</td>
              <td>8H</td>
              <td>0H</td>
            </tr>
            <tr>
              <th scope=\"row\">Fin de journée</th>
              <td>14h - 17h</td>
              <td>8H</td>
              <td>8H</td>
              <td>8H</td>
              <td>8H</td>
              <td>0H</td>
            </tr>
          </tbody>
        </table>
      </div>
    </body>
</html>

{% endblock %}", "stage/consulter.html.twig", "D:\\wamp64\\www\\portefeuille\\templates\\stage\\consulter.html.twig");
    }
}
