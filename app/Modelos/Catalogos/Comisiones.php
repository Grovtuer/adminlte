<?php
namespace App\Modelos\Catalogos;
use Illuminate\Database\Eloquent\Model;

class Comisiones extends Model
{
	protected $table = 'comision';
    protected $primaryKey = 'id_comision';
    protected $fillable = ['id_comision', 'cantidad','estatus'];
    	
}
