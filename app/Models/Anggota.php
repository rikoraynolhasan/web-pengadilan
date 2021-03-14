<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Anggota
 * @package App\Models
 * @version March 2, 2021, 1:06 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $transaksis
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $no_hp
 * @property string $foto
 */
class Anggota extends Model
{

    public $table = 'anggotass';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_anggota',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_anggota' => 'string',
        'tempat_lahir' => 'string',
        'tanggal_lahir' => 'date',
        'alamat' => 'string',
        'no_hp' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function transaksis()
    {
        return $this->hasMany(\App\Models\Transaksi::class, 'anggotass_id');
    }
}
