<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/rp' => [[['_route' => 'rp', '_controller' => 'App\\Controller\\RPController::consulterRpEtudiant'], null, null, null, false, false, null]],
        '/stage' => [[['_route' => 'stage', '_controller' => 'App\\Controller\\StageController::consulterStage'], null, null, null, false, false, null]],
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
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
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
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
