<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Usuario;
class Util
{

	public  function getUsuario(){
		return Usuario::find(Auth::user()->id);
	}
    public  function getFechaVence($fecha){
        $carbon = new Carbon($fecha, 'America/Bogota');
        $carbon1 = $carbon->addDays(1);
        return $carbon1;
    }
    public  function getVenceHoras($fecha){
        $carbon = new Carbon($fecha, 'America/Bogota');
        $carbon1 = $carbon->addDays(1);
        $carbon2 = Carbon::now('America/Bogota');
        $prog = $carbon1->diffInHours($carbon2);
        return $prog;
    }
	public  function getValor($vlr){
		if($vlr=== null) $vlr="";
		$vlr  = trim($vlr);
        $vlrr = $vlr;
		$vlrr = stripslashes($vlrr);
		$vlrr = htmlspecialchars($vlrr);
		$vlrr = strip_tags($vlrr);
        return $vlrr;
    }

}
