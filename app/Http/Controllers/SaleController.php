<?php

namespace App\Http\Controllers;

use App\Http\Requests\Sale\StoreSaleRequest;
use App\Http\Requests\Sale\UpdateSaleRequest;
use App\Models\Sale;
use App\Models\Katalog;
use App\Service\CrudService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Service\UploadFileService;

class SaleController extends Controller
{
    protected $crudService;
    protected $uploadFileService;
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {

        $this->crudService = new CrudService(new Sale());
        $this->uploadFileService = new UploadFileService();
    }
    public function index()
    {
        $option_katalog = Katalog::all()->map(function ($katalog) {
            return [
                'value' => $katalog->pk_id_katalog,
                'label' => $katalog->nama_katalog,
            ];
        });

        return view('admin.katalog.sale', compact('option_katalog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function serversideTable($uuid = null): JsonResponse
    {
        $data = Sale::with('katalog');

        if ($uuid != null) {
            $data = $data->whereHas('katalog', function ($query) use ($uuid) {
                $query->where('uuid', $uuid);
            });
        }

        $data = $data->get()->map(function ($item) {
            return [
                'uuid' => $item->uuid,
                'nama_katalog' => $item->katalog->nama_katalog ?? '-',
                'harga_normal' => $item->harga_normal,
                'harga_sales' => $item->harga_sales,
            ];
        });

        return DataTables::of($data)
            ->addIndexColumn()->make();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequest $request)
    {
        $data = $request->validated();

        return $this->crudService->store($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        return $this->crudService->show($uuid);
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function detail(string $uuid)
    {
        $sale = Sale::where('uuid', $uuid)->firstOrFail();

        return response()->json([
            'data' => $sale
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleRequest $request, string $uuid)
    {
        $data = $request->validated();

        $row_data = Sale::where('uuid', $uuid)->firstOrFail();

        return $this->crudService->update($data, $uuid);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $row_data = Sale::where('uuid', $uuid)->firstOrFail();

        return $this->crudService->destroy($uuid);
    }
}
