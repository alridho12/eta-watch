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
                        <label for="nama_brand" class="form-label">Nama Brand</label>
                        <input type="text" class="form-control" id="nama_brand" name="nama_brand" required>
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
                        <label for="nama_brand" class="form-label">Nama Brand</label>
                        <input type="text" class="form-control" id="nama_brand" name="nama_brand" required>
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
                        <label for="nama_brand" class="form-label">Nama Brand</label>
                        <input type="text" class="form-control" id="nama_brand" name="nama_brand" disabled>
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
