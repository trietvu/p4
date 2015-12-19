<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Input as Input;

class UploadController extends Controller{

    public function upload(){
        if(Input::hasFile('file')){
            echo 'Uploaded<br />';
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
            echo '<img src="uploads/'.$file->getClientOriginalName().'" />';
        }
    }

}
