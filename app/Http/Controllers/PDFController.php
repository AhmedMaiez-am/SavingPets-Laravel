<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animaux;
use PDF;
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function generatePDF()
    {
        $animaux = animaux::get();
  
        $data = [
            'title' => 'PDF',
            'date' => date('m/d/Y'),
            'animaux' => $animaux
        ]; 
            
        $pdf = PDF::loadView('myPDF', $data);
     
        return $pdf->download('SavingPets.pdf');
    }
}