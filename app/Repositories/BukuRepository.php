<?php

namespace App\Repositories;

use App\Models\Buku;
use App\Repositories\BaseRepository;

/**
 * Class BukuRepository
 * @package App\Repositories
 * @version March 2, 2021, 1:09 pm UTC
*/

class BukuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'sipnosis'
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
        return Buku::class;
    }
}
