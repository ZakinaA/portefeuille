<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'rp' => [[], ['_controller' => 'App\\Controller\\RPController::consulterRpEtudiant'], [], [['text', '/rp']], [], []],
    'stage' => [[], ['_controller' => 'App\\Controller\\StageController::consulterStage'], [], [['text', '/stage']], [], []],
    'etudiantAjouter' => [[], ['_controller' => 'App\\Controller\\EtudiantController::ajouterEtudiant'], [], [['text', '/etudiant/ajouter']], [], []],
    'rpAjouter' => [[], ['_controller' => 'App\\Controller\\RPController::ajouterRp'], [], [['text', '/rp/ajouter']], [], []],
    'stageAjouter' => [[], ['_controller' => 'App\\Controller\\StageController::ajouterStage'], [], [['text', '/stage/ajouter']], [], []],
    'enseignantAjouter' => [[], ['_controller' => 'App\\Controller\\EnseignantController::ajouterEnseignant'], [], [['text', '/enseignant/ajouter']], [], []],
    'route_accueil' => [[], ['_controller' => 'App\\Controller\\EtudiantController::index'], [], [['text', '/accueil']], [], []],
    'etudiantLister' => [['annee'], ['_controller' => 'App\\Controller\\EtudiantController::listerEtudiant'], [], [['variable', '/', '[^/]++', 'annee', true], ['text', '/etudiant/lister']], [], []],
    'etudiantListerLesRP' => [['etu_id'], ['_controller' => 'App\\Controller\\RPController::listerLesRPEtudiant'], [], [['variable', '/', '[^/]++', 'etu_id', true], ['text', '/etudiant/rp/listerMesRP']], [], []],
    'rpConsulter' => [['rp_id'], ['_controller' => 'App\\Controller\\RPController::consulterRpEtudiant'], [], [['variable', '/', '[^/]++', 'rp_id', true], ['text', '/etudiant/rp/consulter']], [], []],
    'enseignantLesRPaCommenter' => [['enseignant_id'], ['_controller' => 'App\\Controller\\RPController::listerLesRPaCommenter'], [], [['variable', '/', '[^/]++', 'enseignant_id', true], ['text', '/enseignant/rp/listerLesRPaCommenter']], [], []],
    'rpListerPromo' => [['annee'], ['_controller' => 'App\\Controller\\RPController::listerParPromo'], [], [['variable', '/', '[^/]++', 'annee', true], ['text', '/enseignant/rp/listerParPromo']], [], []],
    'EtudiantListerStage' => [['etu_id'], ['_controller' => 'App\\Controller\\StageController::listerLesStages'], [], [['variable', '/', '[^/]++', 'etu_id', true], ['text', '/etudiant/stage/listerLesStages']], [], []],
    'StageConsulter' => [['stage_id'], ['_controller' => 'App\\Controller\\StageController::consulterStage'], [], [['variable', '/', '[^/]++', 'stage_id', true], ['text', '/etudiant/stage/consulter']], [], []],
    'StageActQuoti' => [['tachesemaine_id'], ['_controller' => 'App\\Controller\\StageController::consulterActJour'], [], [['variable', '/', '[^/]++', 'tachesemaine_id', true], ['text', '/etudiant/stage/consulterActJour']], [], []],
    'ListerStagesAffect' => [['enseignant_id'], ['_controller' => 'App\\Controller\\StageController::ListerStagesAffect'], [], [['variable', '/', '[^/]++', 'enseignant_id', true], ['text', '/enseignant/stage/ListerStagesAffect']], [], []],
];
