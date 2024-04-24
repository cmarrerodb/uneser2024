<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estado
 * 
 * @property int $id
  * @property string $estado
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Municipio[] $municipios
 *
 * @package App\Models
 */
class Cne_estado extends Model
{
	use SoftDeletes;
	protected $table = 'cne_estados';
	protected $primaryKey = 'id';

	protected $fillable = [
		'estado'
	];

	public function municipios()
	{
		return $this->hasMany(Cne_municipio::class, 'id', 'estado_id');
	}
}
