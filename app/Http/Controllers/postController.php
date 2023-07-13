<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
    
 {
     public function exportexcel(){
        retrunExcel::download(new postExport,'data.xlsx'); 
     }

 }
