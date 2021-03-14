<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Buku
 * @package App\Models
 * @version March 2, 2021, 1:09 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $transaksis
 * @property string $kode_buku
 * @property string $judul_buku
 * @property string $pegarang
 * @property string $kota_terbit
 * @property string $tahun_terbit
 * @property string $cet_edisi_jilid
 * @property string $no_klas
 * @property string $sumber_pengadaan
 * @property string $eks
 * @property string $rak
 * @property string $sipnosis
 */
class Buku extends Model
{

    public $table = 'bukus';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'kode_buku',
        'judul_buku',
        'pegarang',
        'kota_terbit',
        'tahun_terbit',
        'cet_edisi_jilid',
        'no_klas',
        'sumber_pengadaan',
        'eks',
        'rak',
        'sipnosis',
        'tanggal_diterima',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode_buku' => 'string',
        'judul_buku' => 'string',
        'pegarang' => 'string',
        'kota_terbit' => 'string',
        'tahun_terbit' => 'string',
        'cet_edisi_jilid' => 'string',
        'no_klas' => 'string',
        'sumber_pengadaan' => 'string',
        'eks' => 'string',
        'rak' => 'string',
        'sipnosis' => 'string',
        'tanggal_diterima' => 'string',
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
        return $this->hasMany(\App\Models\Transaksi::class, 'bukus_id');
    }
}
