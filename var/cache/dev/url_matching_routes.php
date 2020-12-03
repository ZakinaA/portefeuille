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
                            .'|listerLesS(?'
                                .'|tages/([^/]++)(*:177)'
                                .'|emaines/([^/]++)(*:201)'
                            .')'
                            .'|consulter(?'
                                .'|/([^/]++)(*:231)'
                                .'|ActJour/([^/]++)(*:255)'
                            .')'
                        .')'
                        .'|activite/consulterSemaine/([^/]++)/([^/]++)(*:308)'
                    .')'
                    .'|nseignant/(?'
                        .'|rp/lister(?'
                            .'|LesRPaCommenter/([^/]++)(*:366)'
                            .'|ParPromo/([^/]++)(*:391)'
                        .')'
                        .'|stage/ListerStagesAffect/([^/]++)(*:433)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        73 => [[['_route' => 'etudiantLister', '_controller' => 'App\\Controller\\EtudiantController::listerEtudiant'], ['annee'], null, null, false, true, null]],
        106 => [[['_route' => 'etudiantListerLesRP', '_controller' => 'App\\Controller\\RPController::listerLesRPEtudiant'], ['etu_id'], null, null, false, true, null]],
        132 => [[['_route' => 'rpConsulter', '_controller' => 'App\\Controller\\RPController::consulterRpEtudiant'], ['rp_id'], null, null, false, true, null]],
        177 => [[['_route' => 'EtudiantListerStage', '_controller' => 'App\\Controller\\StageController::listerLesStages'], ['etu_id'], null, null, false, true, null]],
        201 => [[['_route' => 'ListerSemaine', '_controller' => 'App\\Controller\\ActiviteController::listerLesSemaines'], ['stage_id'], null, null, false, true, null]],
        231 => [[['_route' => 'StageConsulter', '_controller' => 'App\\Controller\\StageController::consulterStage'], ['stage_id'], null, null, false, true, null]],
        255 => [[['_route' => 'StageActQuoti', '_controller' => 'App\\Controller\\StageController::consulterActJour'], ['tachesemaine_id'], null, null, false, true, null]],
        308 => [[['_route' => 'ConsulterSemaine', '_controller' => 'App\\Controller\\ActiviteController::ConsulterSemaine'], ['stage_id', 'semaineStage_id'], null, null, false, true, null]],
        366 => [[['_route' => 'enseignantLesRPaCommenter', '_controller' => 'App\\Controller\\RPController::listerLesRPaCommenter'], ['enseignant_id'], null, null, false, true, null]],
        391 => [[['_route' => 'rpListerPromo', '_controller' => 'App\\Controller\\RPController::listerParPromo'], ['annee'], null, null, false, true, null]],
        433 => [
            [['_route' => 'ListerStagesAffect', '_controller' => 'App\\Controller\\StageController::ListerStagesAffect'], ['enseignant_id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
