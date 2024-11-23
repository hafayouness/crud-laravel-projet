<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EtudiantController;



route::get("/etudiant",[EtudiantController::class, "liste_etudiant"]);
route::get("/ajouter",[EtudiantController::class, "ajouter_etudiant"]);
route::get("/delete/etudiant/{id}",[EtudiantController::class, "delete_etudiant"]);
route::post("/ajouter/traitement",[EtudiantController::class, "ajouter_etudiant_traitement"]);
route::get("/update/etudiant/{id}",[EtudiantController::class, "update_etudiant"]);
route::post("/update/traitement",[EtudiantController::class, "update_etudiant_traitement"]);
