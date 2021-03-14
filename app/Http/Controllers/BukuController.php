<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Repositories\BukuRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use App\Models\Buku;
use Carbon\Carbon;
use DB;
use Session; 
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Auth;
use PDF;

class BukuController extends AppBaseController
{
    /** @var  BukuRepository */
    private $bukuRepository;

    public function __construct(BukuRepository $bukuRepo)
    {
        $this->bukuRepository = $bukuRepo;
    }

    /**
     * Display a listing of the Buku.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $bukus = $this->bukuRepository->all();

        return view('bukus.index')
            ->with('bukus', $bukus);
    }

    /**
     * Show the form for creating a new Buku.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        return view('bukus.create');
    }

    /**
     * Store a newly created Buku in storage.
     *
     * @param CreateBukuRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateBukuRequest $request)
    {
        // $input = $request->all();

        // $buku = $this->bukuRepository->create($input);

        // Flash::success('Buku saved successfully.');

        // return redirect(route('bukus.index'));
        
        if($request->file('sinopsis')) {
            $file2 = $request->file('sinopsis');
            $dt = Carbon::now();
            $acak = $file2->getClientOriginalExtension();
            $fileName2 = $file2->getClientOriginalName();
            $request->file('sinopsis')->move("images/pdf", $fileName2);
            $pdf = $fileName2;
        } else {
            $pdf = "tes";
        }

        if($request->file('foto')) {
            $file = $request->file('foto');
            $dt = Carbon::now();
            $acak = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalName();
            $request->file('foto')->move("images/buku", $fileName);
            $foto = $fileName;
        } else {
            $foto = "tes";
        }

        Buku::create([
            'kode_buku' => $request->get('kode_buku'),
            'judul_buku' => $request->get('judul_buku'),
            'pegarang' => $request->get('pegarang'),
            'kota_terbit' => $request->get('kota_terbit'),
            'tahun_terbit' => $request->get('tahun_terbit'),
            'cet_edisi_jilid' => $request->get('cet_edisi_jilid'),
            'no_klas' => $request->get('no_klas'),
            'sumber_pengadaan' => $request->get('sumber_pengadaan'),
            'eks' => $request->get('eks'),
            'rak' => $request->get('rak'),
            'sipnosis' => $pdf,
            'tanggal_diterima' => $request->get('tanggal_diterima'),
            'foto' => $foto
        ]);

        Flash::success('Buku saved successfully.');

        return redirect(route('bukus.index'));
    }

    /**
     * Display the specified Buku.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $buku = $this->bukuRepository->find($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        return view('bukus.show')->with('buku', $buku);
    }

    /**
     * Show the form for editing the specified Buku.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $buku = $this->bukuRepository->find($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        return view('bukus.edit')->with('buku', $buku);
    }

    /**
     * Update the specified Buku in storage.
     *
     * @param int $id
     * @param UpdateBukuRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateBukuRequest $request)
    {
        // $buku = $this->bukuRepository->find($id);

        // if (empty($buku)) {
        //     Flash::error('Buku not found');

        //     return redirect(route('bukus.index'));
        // }

        // $buku = $this->bukuRepository->update($request->all(), $id);

        // Flash::success('Buku updated successfully.');

        // return redirect(route('bukus.index'));

         if($request->file('foto')) {
            $file = $request->file('foto');
            $dt = Carbon::now();
            $acak = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalName();
            $request->file('foto')->move("/images/buku", $fileName);
            $foto = $fileName;
        } else {
            $foto = NULL;
        }

        Buku::create([
            'kode_buku' => $request->get('kode_buku'),
            'judul_buku' => $request->get('judul_buku'),
            'pengarang' => $request->get('pengarang'),
            'kota_terbit' => $request->get('kota_terbit'),
            'tahun_terbit' => $request->get('tahun_terbit'),
            'cet_edisi_jilid' => $request->get('cet_edisi_jilid'),
            'no_klas' => $request->get('no_klas'),
            'sumber_pengadaan' => $request->get('sumber_pengadaan'),
            'eks' => $request->get('eks'),
            'rak' => $request->get('rak'),
            'sipnosis' => $request->get('sipnosis'),
            'tanggal_diterima' => $request->get('tanggal_diterima'),
            'foto' => $foto
        ]);

        Flash::success('Buku saved successfully.');

        return redirect(route('bukus.index'));
    }

    /**
     * Remove the specified Buku from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $buku = $this->bukuRepository->find($id);

        if (empty($buku)) {
            Flash::error('Buku not found');

            return redirect(route('bukus.index'));
        }

        $this->bukuRepository->delete($id);

        Flash::success('Buku deleted successfully.');

        return redirect(route('bukus.index'));
    }
}
