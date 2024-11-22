<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EtudiantController;



route::get("/etudiant",[EtudiantController::class, "liste_etudiant"]);
route::get("/ajouter",[EtudiantController::class, "ajouter_etudiant"]);
route::post("/ajouter/traitement",[EtudiantController::class, "ajouter_etudiant_traitement"]);
route::update("/update/etudiant/{id}",[EtudiantController::class, "update_etudiant"]);
