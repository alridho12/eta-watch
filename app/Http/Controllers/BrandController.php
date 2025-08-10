<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use App\Service\CrudService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Service\UploadFileService;
use App\Http\Requests\Brand\StoreBrandRequest;
use App\Http\Requests\Brand\UpdateBrandRequest;

class BrandController extends Controller
{
    protected $crudService;
    protected $uploadFileService;

    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->crudService = new CrudService(new Brand());
        $this->uploadFileService = new UploadFileService();
    }
    public function index()
    {
        return view('admin.brands.index');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function serversideTable(): JsonResponse
    {
        return $this->crudService->serversideTable();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
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

    public function detail(string $uuid)
    {
        $brand = Brand::where('uuid', $uuid)->firstOrFail();

        return response()->json([
            'data' => $brand
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, string $uuid)
    {
        $data = $request->validated();

        $row_data = Brand::where('uuid', $uuid)->firstOrFail();

        return $this->crudService->update($data, $uuid);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $row_data = Brand::where('uuid', $uuid)->firstOrFail();

        return $this->crudService->destroy($uuid);
    }
}
