<?php

namespace App\Http\Controllers;
use App\Models\Vaccin;
use Illuminate\Http\Request;
# 1. La facade QrCode
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SimpleQRcodeController extends Controller
{
    //
     // L'action "generate" de la route "simple-qrcode" (GET)
     public function show ($vaccin_id) {

        $vaccin=Vaccin::find($vaccin_id);
    	# 2. On génère un QR code de taille 200 x 200 px
    	$qrcode = QrCode::encoding("UTF-8")
        ->color(0, 0, 0)
        ->backgroundColor(0, 196, 255)     
        ->size(300)
        ->generate($vaccin );
    	
    	# 3. On envoie le QR code généré à la vue "simple-qrcode"
    	return view("simple-qrcode", compact('qrcode'));
    }
}
