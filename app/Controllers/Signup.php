<?php

namespace App\Controllers;

class Signup extends BaseController
{
    public function new()
    {
        return view("Signup/new");
    }

    public function create()
    {
        $user = new \App\Entities\User($this->request->getPost());

        $model = new \App\Models\Usermodel;

        if($model->insert($user)) {
            
            return redirect()->to("/singup/success");

        } else{

            return redirect()->back()
                             ->with('errors', $model->errrors())
                             ->with('warning','Invalid data')
                             ->withInput();                             
        }
    }

    public  function success()
    {
        
    }
}