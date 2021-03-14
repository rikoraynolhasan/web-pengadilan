<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaksi
 * @package App\Models
 * @version March 2, 2021, 1:10 pm UTC
 *
 * @property \App\Models\Anggotass $anggotass
 * @property \App\Models\Buku $bukus
 * @property \App\Models\User $users
 * @property string $kode_peminjaman
 * @property string $tanggal_peminjaman
 * @property string $tanggal_pengembalian
 * @property string $status
 * @property string $denda
 * @property integer $anggotass_id
 * @property integer $bukus_id
 * @property integer $users_id
 */
class Transaksi extends Model
{

    public $table = 'transaksis';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'kode_peminjaman',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'status',
        'denda',
        'anggotass_id',
        'bukus_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode_peminjaman' => 'string',
        'tanggal_peminjaman' => 'date',
        'tanggal_pengembalian' => 'date',
        'status' => 'string',
        'denda' => 'string',
        'anggotass_id' => 'integer',
        'bukus_id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'anggotass_id' => 'required',
        'bukus_id' => 'required',
        'users_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function anggotass()
    {
        return $this->belongsTo(\App\Models\Anggotass::class, 'anggotass_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bukus()
    {
        return $this->belongsTo(\App\Models\Buku::class, 'bukus_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function users()
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id');
    }
}
