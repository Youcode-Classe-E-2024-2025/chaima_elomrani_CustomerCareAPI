<?php

namespace App\Services;

use App\Models\Responses;

class ResponseService
{
    public function createResponse(array $data){
        return Responses::create($data);
    }

    public function getAllResponses(){
        return Responses::all();
    }

    public function getResponseById($id){
        return Responses::findOrFail($id);
    }   

    public function update($id , array $data){
        $responce = Responses::findOrFail($id);
        $responce->update($data);
    }   
    
    public function deleteResponse($id){
        $responce = Responses::findOrFail($id);
        return $responce->delete();
    }

}