<?php

namespace App\Controllers;
use App\Models\PromotionModel;
class Home extends BaseController

{
    public function index(): string
    {
        $model_promotion = new PromotionModel();
        //CRUD
        //Ajout -> insert
       // $donnees =['nom' => "Preparatoire",];
        //$model_promotion ->  insert($donnees);

        //Lecture -> find ou findAll
       //$promotions = $model_promotion -> findAll();
       //var_dump ($promotions); 

        //Modification -> update
       // $donnees =['nom' => "yass",];
        //$model_promotion ->  update(126, $donnees);
        //Suppression -> Delete
       // $model_promotion ->  delete(127);
       // $promotions = $model_promotion -> findAll();
       //var_dump ($promotions);

        return view('index');
    }
    
    public function uibuttons(){
        return view('ui-buttons');
    }

    public function essai(){
        $model_promotion = new PromotionModel();
            
        $promotions = $model_promotion -> findAll();
       var_dump ($promotions); 

        return view('essai');
    }
    
}
