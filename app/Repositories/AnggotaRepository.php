<?php

namespace App\Repositories;

use App\Models\Anggota;
use App\Repositories\BaseRepository;

/**
 * Class AnggotaRepository
 * @package App\Repositories
 * @version March 2, 2021, 1:06 pm UTC
*/

class AnggotaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'foto'
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
        return Anggota::class;
    }
}
