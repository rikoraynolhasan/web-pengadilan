<?php

namespace App\Repositories;

use App\Models\Transaksi;
use App\Repositories\BaseRepository;

/**
 * Class TransaksiRepository
 * @package App\Repositories
 * @version March 2, 2021, 1:10 pm UTC
*/

class TransaksiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Transaksi::class;
    }
}
