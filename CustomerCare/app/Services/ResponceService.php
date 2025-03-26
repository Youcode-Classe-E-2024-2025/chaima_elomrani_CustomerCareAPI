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

    public function getResponceById($id){
        return Responces::findOrFail($id);
    }   

    public function update($id , array $data){
        $responce = Responces::findOrFail($id);
        $responce->update($data);
    }   
    
    public function deleteResponce($id){
        $responce = Responces::findOrFail($id);
        return $responce->delete();
    }

}