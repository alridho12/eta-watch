<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Katalog;
use App\Service\CrudService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Service\UploadFileService;
use App\Http\Requests\Katalog\StoreKatalogRequest;
use App\Http\Requests\Katalog\UpdateKatalogRequest;

class KatalogController extends Controller
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
        $brands = Brand::all();
        $katalog = Katalog::with('brand')->latest()->paginate(20);
        return view('pages.katalog.index', compact('katalog', 'brands'));
    }

    public function getKatalog(Request $request)
    {
        $query = Katalog::with('brand');

        // Filter by brand
        if ($request->brand) {
            $query->where('fk_id_brand', $request->brand);
        }

        // Search
        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('nama_katalog', 'like', '%' . $request->search . '%')
                    ->orWhere('deskripsi', 'like', '%' . $request->search . '%')
                    ->orWhereHas('brand', function ($brandQuery) use ($request) {
                        $brandQuery->where('nama_brand', 'like', '%' . $request->search . '%');
                    });
            });
        }

        // Sorting
        switch ($request->sort) {
            case 'price-asc':
                $query->orderBy('harga', 'asc');
                break;
            case 'price-desc':
                $query->orderBy('harga', 'desc');
                break;
            default:
                $query->latest();
                break;
        }

        $katalog = $query->paginate(20);

        // Return partial view only
        return response()->json([
            'html'       => view('pages.katalog.partials.katalog-list', compact('katalog'))->render(),
            'pagination' => $katalog->links('pagination::bootstrap-5')->toHtml()
        ]);
    }
}
