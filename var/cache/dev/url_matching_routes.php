<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/enseignant' => [[['_route' => 'enseignant', '_controller' => 'App\\Controller\\EnseignantController::index'], null, null, null, false, false, null]],
        '/r/p' => [[['_route' => 'r_p', '_controller' => 'App\\Controller\\RPController::index'], null, null, null, false, false, null]],
        '/stage' => [[['_route' => 'stage', '_controller' => 'App\\Controller\\StageController::index'], null, null, null, false, false, null]],
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
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
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
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
