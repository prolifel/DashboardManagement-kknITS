<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class WhatsappController extends Controller
{
    public function redirect($number){
        $indonesiaCode = "62";
        $numberWithoutCode = substr($number, 1);
        $numberEdited = $indonesiaCode.$numberWithoutCode;

        $url = "https://api.whatsapp.com/send?phone=$numberEdited&text=Halo%20*nama*!%0A%0ATerima%20kasih%20telah%20berbelanja%20di%20Marketplace%20Herbal.%0A%0ABerikut%20ini%20adalah%20detail%20pesanan%20anda%3A%0A*Link%20PDF*%0A%0A%0ADimohon%20untuk%20segera%20membayarkan%20tagihan%20sebesar%20*Subtotal*%20melalui%20rekening%20yang%20telah%20tersedia.%0A%0ATerima%20kasih";

        return redirect($url);
    }
}
