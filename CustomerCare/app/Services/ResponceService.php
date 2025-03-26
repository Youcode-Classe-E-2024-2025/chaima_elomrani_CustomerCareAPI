<?php

namespace App\Services;

use App\Models\Responces;

class ResponceService
{
    public function createResponce(array $data){
        return Responces::create($data);
    }

    public function getAllResponces(){
        return Responces::all();
    }
}