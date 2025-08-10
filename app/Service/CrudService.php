<?php

namespace App\Service;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use App\Service\UploadFileService;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;

class CrudService
{
    protected $model;
    protected $uploadFileService;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->uploadFileService = new UploadFileService();
    }

    public function store(array $data): JsonResponse
    {
        try {
            $data['uuid'] = Str::uuid()->toString(); // Jika perlu, jika tidak bisa dihapus
            $this->model::create($data);

            return response()->json([
                'icon' => 'success',
                'message' => 'Data berhasil ditambahkan'
            ]);
        } catch (Exception $th) {
            return response()->json([
                'icon' => 'error',
                'message' => $th->getMessage(),
            ]);
        }
    }

    public function show(string $uuid)
    {
        try {
            return response()->json([
                'data' => $this->model::where('uuid', $uuid)->firstOrFail()
            ]);
        } catch (Exception $th) {
            //throw $th;
        }
    }

    public function update(array $data, string $id)
    {
        try {
            $this->model::where('uuid', $id)->update($data);

            return response()->json([
                'icon' => 'success',
                'message' => 'Berhasil mengubah data'
            ]);
        } catch (Exception $error) {
            //throw $th;
        }
    }

    public function destroy(string $id)
    {
        $record = $this->model::where('uuid', $id)->firstOrFail();
        $record->delete();

        return response()->json([
            'icon' => 'success',
            'message' => 'Berhasil menghapus data'
        ]);
    }

    public function serversideTable()
    {
        $kurir = $this->model::get();

        return DataTables::of($kurir)
            ->addIndexColumn()->make();
    }

    public function data($fieldOrder = null, $orderOrder = 'asc'): JsonResponse
    {
        try {
            $query = $this->model::query();

            if ($fieldOrder) {
                $query->orderBy($fieldOrder, $orderOrder);
            }

            $data = $query->get();

            return response()->json([
                'data' => $data
            ]);
        } catch (Exception $e) {
            // Log the exception message
            Log::error("Data retrieval failed: " . $e->getMessage());

            // Return a JSON response with an error message
            return response()->json([
                'error' => 'An error occurred while retrieving data.'
            ], 500);
        }
    }

}
