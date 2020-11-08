<?php namespace App\Controllers;

use App\Models\SerieModel;
use CodeIgniter\Controller;

class Series extends Controller {

    protected $serieModel;

    public function __construct(){
        $this->serieModel = new SerieModel();
    }

    public function index(){
        
        $series = $this->serieModel->findAll();
        
        $variaveis = [
            'series' => $series
        ];

        return view('series/home_page', $variaveis);
    }


}