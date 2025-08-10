<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Katalog;
use App\Service\CrudService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Service\UploadFileService;
use App\Http\Requests\Katalog\StoreKatalogRequest;
use App\Http\Requests\Katalog\UpdateKatalogRequest;



class AdminKatalogController extends Controller
{
    protected $crudService;
    protected $uploadFileService;
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->crudService = new CrudService(new Katalog());
        $this->uploadFileService = new UploadFileService();
    }
    public function index()
    {
        $option_brand = Brand::all()->map(function ($brand) {
            return [
                'value' => $brand->pk_id_brand,
                'label' => $brand->nama_brand,
            ];
        });

        return view('admin.katalog.index', compact('option_brand'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function serversideTable($uuid = null): JsonResponse
    {
        $data = Katalog::with('brand');

        if ($uuid != null) {
            $data = $data->whereHas('brand', function ($query) use ($uuid) {
                $query->where('uuid', $uuid);
            });
        }

        $data = $data->get()->map(function ($item) {
            return [
                'uuid' => $item->uuid,
                'nama_brand' => $item->brand->nama_brand ?? '-',
                'nama_katalog' => $item->nama_katalog,
                'deskripsi' => $item->deskripsi,
                'harga' => $item->harga,
                'link' => $item->link,
                'status' => $item->status,
            ];
        });

        return DataTables::of($data)
            ->addIndexColumn()->make();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKatalogRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $this->uploadFileService->uploadFile(
                $request->file('gambar'), // kirim langsung objek file
                'gambar',
                'gambar-katalog'
            );
        }

        return $this->crudService->store($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        return $this->crudService->show($uuid);
    }

    public function detail(string $uuid)
    {
        $katalog = Katalog::where('uuid', $uuid)->firstOrFail();

        return response()->json([
            'data' => $katalog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKatalogRequest $request, string $uuid)
    {
        $data = $request->validated();

        $row_data = Katalog::where('uuid', $uuid)->firstOrFail();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $this->uploadFileService->uploadFile(
                $request->file('gambar'), // kirim file langsung
                'gambar',
                'gambar-katalog',
                $row_data->gambar // hapus gambar lama
            );
        }

        return $this->crudService->update($data, $uuid);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $row_data = Katalog::where('uuid', $uuid)->firstOrFail();

        $this->uploadFileService->deleteFile('gambar-katalog', $row_data->gambar);


        return $this->crudService->destroy($uuid);
    }
}
