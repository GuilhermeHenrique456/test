<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
	public lista(){
		return(object){
			'nome'=>'guilherme',
			'tel'=>'991168863'
		}
	}
}
