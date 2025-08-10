@php
    $option_brand = $option_brand ?? [];
@endphp

{{-- modal input data --}}
<div class="modal fade" id="modalInputData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInputDataLabel">Tambah Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="formInputData">

                    <input type="hidden" name="uuid" id="uuid">

                    {{-- tambahkan input disini --}}
                    <div class="mb-3">
                        <label for="nama_katalog" class="form-label">Nama Katalog</label>
                        <input type="text" class="form-control" id="nama_katalog" name="nama_katalog" required>
                    </div>
                    <div class="mb-3">
                        <label for="fk_id_brand" class="form-label">Brand</label>
                        <select class="form-select" id="fk_id_brand" name="fk_id_brand" required>
                            <option value="">Pilih Brand</option>
                            @foreach ($option_brand as $brand)
                                <option value="{{ $brand['value'] }}">{{ $brand['label'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="url" class="form-control" id="link" name="link" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Sold">Sold</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                        <small class="form-text text-muted">Format gambar: jpg, jpeg, png. Maksimal ukuran: 2MB.</small>
                    </div>

                    {{-- tambahkan input disini --}}

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info" id="btnSimpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- modal input data --}}

{{-- modal edit data --}}
<div class="modal fade" id="modalEditData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditDataLabel">Edit Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="formEditData">

                    <input type="hidden" name="uuid" id="uuid">

                    {{-- tambahkan input disini --}}
                    <div class="mb-3">
                        <label for="nama_katalog" class="form-label">Nama Katalog</label>
                        <input type="text" class="form-control" id="nama_katalog" name="nama_katalog" required>
                    </div>
                    <div class="mb-3">
                        <label for="fk_id_brand" class="form-label">Brand</label>
                        <select class="form-select" id="fk_id_brand" name="fk_id_brand" required>
                            <option value="">Pilih Brand</option>
                            @foreach ($option_brand as $brand)
                                <option value="{{ $brand['value'] }}">{{ $brand['label'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="url" class="form-control" id="link" name="link" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Sold">Sold</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <img id="preview_gambar" src="#" alt="Preview Gambar" class="img-fluid d-block mx-auto mt-2"
                            style="max-height: 200px; display: none;">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                        <small class="form-text text-muted">Format gambar: jpg, jpeg, png. Maksimal ukuran:
                            2MB.</small>
                    </div>
                    {{-- tambahkan input disini --}}

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info" id="btnSimpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- modal edit data --}}

{{-- modal detail data --}}
<div class="modal fade" id="modalDetailData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailDataLabel">Detail Data</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="formDetailData">

                    {{-- tambahkan input disini --}}
                    <div class="mb-3">
                        <label for="nama_katalog" class="form-label">Nama Katalog</label>
                        <input type="text" class="form-control" id="nama_katalog" name="nama_katalog" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="fk_id_brand" class="form-label" re>Brand</label>
                        <select class="form-select" id="fk_id_brand" name="fk_id_brand" disabled>
                            <option value="">Pilih Brand</option>
                            @foreach ($option_brand as $brand)
                                <option value="{{ $brand['value'] }}">{{ $brand['label'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" disabled></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="url" class="form-control" id="link" name="link" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" disabled>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Sold">Sold</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <img id="preview_gambar" src="#" alt="Preview Gambar" class="img-fluid d-block mx-auto mt-2"
                            style="max-height: 200px; display: none;">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                        <small class="form-text text-muted">Format gambar: jpg, jpeg, png. Maksimal ukuran:
                            2MB.</small>
                    </div>
                    {{-- tambahkan input disini --}}

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
