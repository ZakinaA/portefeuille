<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
<<<<<<< HEAD
        '/enseignant' => [[['_route' => 'enseignant', '_controller' => 'App\\Controller\\EnseignantController::index'], null, null, null, false, false, null]],
        '/r/p' => [[['_route' => 'r_p', '_controller' => 'App\\Controller\\RPController::index'], null, null, null, false, false, null]],
        '/stage' => [[['_route' => 'stage', '_controller' => 'App\\Controller\\StageController::index'], null, null, null, false, false, null]],
=======
        '/rp' => [[['_route' => 'rp', '_controller' => 'App\\Controller\\RPController::consulterRpEtudiant'], null, null, null, false, false, null]],
        '/stage' => [[['_route' => 'stage', '_controller' => 'App\\Controller\\StageController::consulterStage'], null, null, null, false, false, null]],
>>>>>>> 5dcc1f8f085ee197c996394503fcfa7c32b399df
        '/etudiant/ajouter' => [[['_route' => 'etudiantAjouter', '_controller' => 'App\\Controller\\EtudiantController::ajouterEtudiant'], null, null, null, false, false, null]],
        '/rp/ajouter' => [[['_route' => 'rpAjouter', '_controller' => 'App\\Controller\\RPController::ajouterRp'], null, null, null, false, false, null]],
        '/stage/ajouter' => [[['_route' => 'stageAjouter', '_controller' => 'App\\Controller\\StageController::ajouterStage'], null, null, null, false, false, null]],
        '/enseignant/ajouter' => [[['_route' => 'enseignantAjouter', '_controller' => 'App\\Controller\\EnseignantController::ajouterEnseignant'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'route_accueil', '_controller' => 'App\\Controller\\EtudiantController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/e(?'
                    .'|tudiant/(?'
<<<<<<< HEAD
                        .'|lister(?'
                            .'|/([^/]++)(*:76)'
                            .'|MesRP/([^/]++)(*:97)'
                            .'|LesStages/([^/]++)(*:122)'
                        .')'
                        .'|rp/consulter/([^/]++)(*:152)'
                        .'|stage/consulter(?'
                            .'|/([^/]++)(*:187)'
                            .'|ActJour/([^/]++)(*:211)'
                        .')'
                    .')'
                    .'|nseignant/(?'
                        .'|listerRPaCommenter/([^/]++)/([^/]++)(*:270)'
                        .'|rp/listerParPromo/([^/]++)(*:304)'
                        .'|ListerStagesAffect/([^/]++)(*:339)'
=======
                        .'|lister/([^/]++)(*:73)'
                        .'|rp/(?'
                            .'|listerMesRP/([^/]++)(*:106)'
                            .'|consulter/([^/]++)(*:132)'
                        .')'
                        .'|stage/(?'
                            .'|listerLesStages/([^/]++)(*:174)'
                            .'|consulter(?'
                                .'|/([^/]++)(*:203)'
                                .'|ActJour/([^/]++)(*:227)'
                            .')'
                        .')'
                    .')'
                    .'|nseignant/(?'
                        .'|rp/lister(?'
                            .'|LesRPaCommenter/([^/]++)(*:287)'
                            .'|ParPromo/([^/]++)(*:312)'
                        .')'
                        .'|stage/ListerStagesAffect/([^/]++)(*:354)'
>>>>>>> 5dcc1f8f085ee197c996394503fcfa7c32b399df
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
<<<<<<< HEAD
        76 => [[['_route' => 'etudiantLister', '_controller' => 'App\\Controller\\EtudiantController::listerEtudiant'], ['annee'], null, null, false, true, null]],
        97 => [[['_route' => 'etudiantListerLesRP', '_controller' => 'App\\Controller\\EtudiantController::listerLesRP'], ['etu_id'], null, null, false, true, null]],
        122 => [[['_route' => 'EtudiantListerStage', '_controller' => 'App\\Controller\\EtudiantController::listerLesStages'], ['etu_id'], null, null, false, true, null]],
        152 => [[['_route' => 'rpConsulter', '_controller' => 'App\\Controller\\RPController::consulterRp'], ['rp_id'], null, null, false, true, null]],
        187 => [[['_route' => 'StageConsulter', '_controller' => 'App\\Controller\\StageController::consulterStage'], ['stage_id'], null, null, false, true, null]],
        211 => [[['_route' => 'StageActQuoti', '_controller' => 'App\\Controller\\StageController::consulterActJour'], ['tachesemaine_id'], null, null, false, true, null]],
        270 => [[['_route' => 'enseignantRPaCommenter', '_controller' => 'App\\Controller\\EnseignantController::listerRPaCommenter'], ['enseignant_id', 'statut_id'], null, null, false, true, null]],
        304 => [[['_route' => 'rpListerPromo', '_controller' => 'App\\Controller\\RPController::listerParPromo'], ['annee'], null, null, false, true, null]],
        339 => [
            [['_route' => 'ListerStagesAffect', '_controller' => 'App\\Controller\\EnseignantController::ListerStagesAffect'], ['enseignant_id'], null, null, false, true, null],
=======
        73 => [[['_route' => 'etudiantLister', '_controller' => 'App\\Controller\\EtudiantController::listerEtudiant'], ['annee'], null, null, false, true, null]],
        106 => [[['_route' => 'etudiantListerLesRP', '_controller' => 'App\\Controller\\RPController::listerLesRPEtudiant'], ['etu_id'], null, null, false, true, null]],
        132 => [[['_route' => 'rpConsulter', '_controller' => 'App\\Controller\\RPController::consulterRpEtudiant'], ['rp_id'], null, null, false, true, null]],
        174 => [[['_route' => 'EtudiantListerStage', '_controller' => 'App\\Controller\\StageController::listerLesStages'], ['etu_id'], null, null, false, true, null]],
        203 => [[['_route' => 'StageConsulter', '_controller' => 'App\\Controller\\StageController::consulterStage'], ['stage_id'], null, null, false, true, null]],
        227 => [[['_route' => 'StageActQuoti', '_controller' => 'App\\Controller\\StageController::consulterActJour'], ['tachesemaine_id'], null, null, false, true, null]],
        287 => [[['_route' => 'enseignantLesRPaCommenter', '_controller' => 'App\\Controller\\RPController::listerLesRPaCommenter'], ['enseignant_id'], null, null, false, true, null]],
        312 => [[['_route' => 'rpListerPromo', '_controller' => 'App\\Controller\\RPController::listerParPromo'], ['annee'], null, null, false, true, null]],
        354 => [
            [['_route' => 'ListerStagesAffect', '_controller' => 'App\\Controller\\StageController::ListerStagesAffect'], ['enseignant_id'], null, null, false, true, null],
>>>>>>> 5dcc1f8f085ee197c996394503fcfa7c32b399df
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
