<?php namespace App\Controllers;

use App\Models\SerieModel;
use CodeIgniter\Controller;

class Series extends Controller {

    protected $serieModel;

    public function __construct(){
        helper('form');
        $this->serieModel = new SerieModel();
    }

    public function index(){

        $series = $this->serieModel->findAll();
        
        $variaveis = [
            'series' => $series
        ];

        return view('home/home_page', $variaveis);
    }

    public function novaSerie(){
        return view('nova_serie/home');
    }

    public function sair(){
        die();
    }

    public function store(){

        $dados = $this->request->getPost();

        $request = $this->serieModel->save($dados);

        if($request){
            return view('sucesso');
        }else{
            return view('error_nova_serie');
        }
    }

    public function edit($id = null){

        $dado = $this->serieModel->find($id);
        
        return view('nova_serie/home', ['serie' => $dado]);
        
    }


}