<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAnggotaRequest;
use App\Http\Requests\UpdateAnggotaRequest;
use App\Repositories\AnggotaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use App\Models\Anggota;
use Carbon\Carbon;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Auth;
use PDF;



class AnggotaController extends AppBaseController
{
    /** @var  AnggotaRepository */
    private $anggotaRepository;

    public function __construct(AnggotaRepository $anggotaRepo)
    {
        $this->anggotaRepository = $anggotaRepo;
    }

    /**
     * Display a listing of the Anggota.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $anggotas = Anggota::select('nama_anggota','tempat_lahir','tanggal_lahir','alamat','no_hp','foto','id')->orderBy('created_at', 'asc')->paginate(5);
        // $anggotas = $this->anggotaRepository->all();
        // $data = Anggota::find(9);

        return view('anggotas.index')
            ->with('anggotas', $anggotas);
    }

    /**
     * Show the form for creating a new Anggota.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        return view('anggotas.create');
    }

    /**
     * Store a newly created Anggota in storage.
     *
     * @param CreateAnggotaRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateAnggotaRequest $request)
    {
        // $input = $request->all();

        // $anggota = $this->anggotaRepository->create($input);

        // Flash::success('Anggota saved successfully.');

        // return redirect(route('anggotas.index'));

        if($request->file('foto')) {
            $file = $request->file('foto');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalName(); 
            $request->file('foto')->move("images/anggota", $fileName);
            $foto = $fileName;
        } else {
            $foto = NULL;
        }

        Anggota::create([
                'nama_anggota' => $request->get('nama_anggota'),
                'tempat_lahir' => $request->get('tempat_lahir'),
                'tanggal_lahir' => $request->get('tanggal_lahir'),
                'alamat' => $request->get('alamat'),
                'no_hp' => $request->get('no_hp'),
                'foto' => $foto
            ]);

        Flash::success('Anggota saved successfully.');

        return redirect(route('anggotas.index'));
    }

    /**
     * Display the specified Anggota.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $data = Anggota::findOrFail($id);

        $anggota = $this->anggotaRepository->find($id);

        if (empty($anggota)) {
            Flash::error('Anggota not found');

            return redirect(route('anggotas.index'));
        }

        return view('anggotas.show',compact('data'))->with('anggota', $anggota);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $post = DB::table('anggotass')
            ->where('nama_anggota','like','%'.$search.'%')
            ->orWhere('tempat_lahir','like'.'%'.$search.'%')
            ->orWhere('tanggal_lahir','like'.'%'.$search.'%')
            ->orWhere('alamat','like','%'.$search.'%')
            ->orWhere('no_hp','like','%'.$search.'%')
            ->orWhere('foto','like','%'.$search.'%')
            ->orderBy('created_at', 'desc')->paginate();

        return view('anggotas.index', ['anggotas' => $post]);
    }

    /**
     * Show the form for editing the specified Anggota.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $data = Anggota::findOrFail($id);
        $anggota = $this->anggotaRepository->find($id);

        if (empty($anggota)) {
            Flash::error('Anggota not found');

            return redirect(route('anggotas.index'));
        }

        return view('anggotas.edit', compact('data'))->with('anggota', $anggota);
    }

    /**
     * Update the specified Anggota in storage.
     *
     * @param int $id
     * @param UpdateAnggotaRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateAnggotaRequest $request)
    {
        if($request->file('foto')) {
            $file = $request->file('foto');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalName(); 
            $request->file('foto')->move("images/anggota", $fileName);
            $foto = $fileName;
        } else {
            $foto = NULL;
        }

        Anggota::find($id)->update([
                'nama_anggota' => $request->get('nama_anggota'),
                'tempat_lahir' => $request->get('tempat_lahir'),
                'tanggal_lahir' => $request->get('tanggal_lahir'),
                'alamat' => $request->get('alamat'),
                'no_hp' => $request->get('no_hp'),
                'foto' => $foto
            ]);

        Flash::success('Anggota updated successfully.');

        return redirect(route('anggotas.index'));
    }

    /**
     * Remove the specified Anggota from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $anggota = $this->anggotaRepository->find($id);

        if (empty($anggota)) {
            Flash::error('Anggota not found');

            return redirect(route('anggotas.index'));
        }

        $this->anggotaRepository->delete($id);

        Flash::success('Anggota deleted successfully.');

        return redirect(route('anggotas.index'));
    }
    public function pdf($id)
    {
        $anggota = $this->anggotaRepository->find($id);
        if (empty($anggota)) {
            Flash::error('anggota not found');
            return redirect(route('anggotas.index'));
        }
        $pdf = PDF::loadView('anggotas.kartu',
            compact('anggota'))->setPaper([-10,-40,200,390],'landscape');
        //return $pdf->download('kartu_member.pdf');
        return $pdf->stream('kartu_anggota.pdf'); 
    }
}
