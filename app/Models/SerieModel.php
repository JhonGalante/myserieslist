<?php namespace App\Models;

use CodeIgniter\Model;

class SerieModel extends Model {
    protected $table = 'series';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'titulo',
        'sinopse',
        'nota',
        'episodios'
    ];
}