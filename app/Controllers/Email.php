<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Models\EmailModel;

class Email extends BaseController
{
    public function index()
    {
        return view('subscribe/form');
    }

     public function berhasil()
    {
        return view('subscribe/berhasil');
    }

    public function gagal()
    {
        return view('subscribe/gagal');
    }

    public function create()
    {
        try{
            $validation=$this->validate([
                'email'=>'is_unique[emails.email]',
            ],
        );
       if(!$validation){
           return view ('/subscribe/gagal');
       }
       else{
      
        $payload = [
            "id" => uniqid(),
            "name" => $this->request->getPost('name'),
            "email" => $this->request->getPost('email'),
        ];

        $this->emailModel->insert($payload);
        return view ('/subscribe/berhasil');
    }
        }
    catch(\Exception $e) {
        return redirect()->to(previous_url());
    }
    }
}
    
//     public function save()
//     {
//         $this->emailModel->save([
//             'email' =>$this->request->getVar('email')
//         ]);
//     }
// }
