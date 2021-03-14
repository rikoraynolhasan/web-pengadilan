<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Repositories\TransaksiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;

class TransaksiController extends AppBaseController
{
    /** @var  TransaksiRepository */
    private $transaksiRepository;

    public function __construct(TransaksiRepository $transaksiRepo)
    {
        $this->transaksiRepository = $transaksiRepo;
    }

    /**
     * Display a listing of the Transaksi.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $transaksis = $this->transaksiRepository->all();

        return view('transaksis.index')
            ->with('transaksis', $transaksis);
    }

    /**
     * Show the form for creating a new Transaksi.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        $pek = \App\Models\Anggota::get();
        $pnp = \App\Models\Buku::get();
        $pekk = \App\Models\Anggota::all()->pluck('nama_anggota','id');
        $pnpp = \App\Models\Buku::all()->pluck('kode_buku','id');
        return view('transaksis.create', compact('pek', 'pnp' ,'pekk', 'pnpp'));
    }

    /**
     * Store a newly created Transaksi in storage.
     *
     * @param CreateTransaksiRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateTransaksiRequest $request)
    {
        $input = $request->all();

        $transaksi = $this->transaksiRepository->create($input);

        Flash::success('Transaksi saved successfully.');

        return redirect(route('transaksis.index'));
    }

    /**
     * Display the specified Transaksi.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $transaksi = $this->transaksiRepository->find($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        return view('transaksis.show')->with('transaksi', $transaksi);
    }

    /**
     * Show the form for editing the specified Transaksi.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $transaksi = $this->transaksiRepository->find($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        return view('transaksis.edit')->with('transaksi', $transaksi);
    }

    /**
     * Update the specified Transaksi in storage.
     *
     * @param int $id
     * @param UpdateTransaksiRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateTransaksiRequest $request)
    {
        $transaksi = $this->transaksiRepository->find($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        $transaksi = $this->transaksiRepository->update($request->all(), $id);

        Flash::success('Transaksi updated successfully.');

        return redirect(route('transaksis.index'));
    }

    /**
     * Remove the specified Transaksi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $transaksi = $this->transaksiRepository->find($id);

        if (empty($transaksi)) {
            Flash::error('Transaksi not found');

            return redirect(route('transaksis.index'));
        }

        $this->transaksiRepository->delete($id);

        Flash::success('Transaksi deleted successfully.');

        return redirect(route('transaksis.index'));
    }
}
