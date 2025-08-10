@extends('layouts.admin')

@section('content')
    <div class="card container-fluid my-5">
        <h1 class="mb-4">Daftar Katalog Sale</h1>
        <div class="d-lg-flex mb-3">
            <div>
                <div class="ms-auto my-auto d-md-none d-lg-block">
                    <button type="button" class="btn btn-dark btn-md mb-0" onclick="showInputModal()">Add Katalog Sale</button>
                </div>
            </div>
        </div>
        <div class="overflow-auto">
            <table class="table table-bordered nowrap w-100" id="sale-table" style="table-layout: auto">
                <thead>
                    <tr>
                        <th class="w-100">Nama Katalog</th>
                        <th>Harga Normal</th>
                        <th>Harga Sale</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('modal')
    @include('admin.katalog.modal-sale')
@endsection

@section('js')
    <script>
        var save_method = "";

        $(document).ready(function() {
            dataTable();

        });

        function hideLoading() {
            Swal.close(); // Menutup SweetAlert
        }

        function showLoading(modal = null) {
            Swal.fire({
                title: "Sedang Memuat...",
                text: "Harap tunggu sementara kami memproses permintaan Anda.",
                icon: "info",
                allowOutsideClick: false, // Tidak bisa ditutup jika klik di luar
                showConfirmButton: false, // Tidak ada tombol konfirmasi
                target: modal ? $(modal)[0] : null,
                didOpen: () => {
                    // Menambahkan animasi "fadeIn" atau animasi lain dari animate.css
                    Swal.getPopup().classList.add(
                        "animate__animated",
                        "animate__fadeIn"
                    ); // Bisa ganti animasi sesuai kebutuhan
                    Swal.showLoading(); // Menampilkan animasi loading
                },
            });
        }

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        function handleAjaxSuccess(modal = null, response) {
            hideLoading();

            if (modal) {
                $(`${modal} #btnSimpan`).prop("disabled", false);
                $(`${modal}`).modal("hide");
            }

            Toast.fire({
                icon: response.icon,
                html: response.message,
            });

            // $("#sale-table").DataTable().ajax.reload();
            if ($.fn.dataTable.isDataTable("#sale-table")) {
                $("#sale-table").DataTable().ajax.reload();
            }
        }

        function dataTable() {
            $('#sale-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('admin/katalog-sale/serversideTable') }}",
                columns: [
                    {
                        data: 'nama_katalog',
                        className: '',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'harga_normal',
                        className: '',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'harga_sales',
                        className: '',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: null,
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return ` <div class="dropdown">
                                    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Aksi
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#" onclick="showEditData(this)" data-id="${row.uuid}">Edit</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="showDetailData(this)" data-id="${row.uuid}">Detail</a></li>
                                        <li><a class="dropdown-item text-danger" href="#" onclick="deleteData(this)" data-id="${row.uuid}" data-name="${row.nama_katalog}">Hapus</a></li>
                                    </ul>
                                </div>`;
                        }
                    }

                ],
                language: {
                    paginate: {
                        first: '<<',
                        previous: '<',
                        next: '>',
                        last: '>>'
                    }
                },
                pageLength: 10,
                lengthMenu: [
                    [10, 20, 50, 100],
                    [10, 20, 50, 100]
                ],
                pagingType: "simple_numbers", // Menampilkan hanya "Previous" dan "Next"
            });
            $.fn.DataTable.ext.pager.numbers_length = 5;
        }

        function setFormValue(form, formData) {
            for (let key in formData) {
                if (formData.hasOwnProperty(key)) {
                    const element = $(`${form} #${key}`);

                    if (element.length && element.attr("type") !== "file") {
                        if (element.hasClass("input_format_number")) {
                            element.val(formData[key] != null ? format_number(formData[key]) : '');
                        } else {
                            element.val(formData[key]);
                        }
                    }
                }
            }
        }


        function setSelect2Value(modalSelector, fieldId, value) {
            $(`${modalSelector} #${fieldId}`).val(value).trigger("change");
        }

        function initializeFormForEdit(modalSelector, data) {
            setSelect2Value(modalSelector, 'fk_id_katalog', data.fk_id_katalog);
        }

        function showInputModal() {
            save_method = "create";
            let form = $('#formInputData');
            let modal = $('#modalInputData');

            modal.modal('show');

        }

        // input data
        $("#formInputData").on('submit', function(e) {
            e.preventDefault();

            let modal = '#modalInputData';

            showLoading(modal);

            $(`${modal} #btnSimpan`).prop('disabled', true);

            let formData = new FormData(this);

            let url, method;
            url = "{{ url('admin/katalog-sale') }}";
            method = 'POST';

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: method,
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                // dataType: "json",
                success: function(response) {
                    handleAjaxSuccess(modal, response);
                },
                error: function(xhr, status, error) {
                    showValidationErrors(modal, xhr);
                }
            });
        })

        $("#formEditData").on('submit', function(e) {
            e.preventDefault();

            let modal = "#modalEditData";

            showLoading(modal);

            $(`${modal} #btnSimpan`).prop('disabled', true);

            let formData = new FormData(this);

            let url;
            url = "{{ url('admin/katalog-sale') }}/" + formData.get('uuid');
            formData = new FormData(this);
            formData.append('_method', 'PUT');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                // dataType: "json",
                success: function(response) {
                    handleAjaxSuccess(modal, response);
                },
                error: function(xhr, status, error) {

                    showValidationErrors(modal, xhr);
                }
            });
        })

        function showEditData(element) {
            const modalSelector = '#modalEditData';
            const formSelector = '#formEditData';
            const uuid = element.getAttribute('data-id');

            save_method = 'update';

            showLoading(modalSelector);
            $(modalSelector).modal('show');
            $(`${modalSelector} .modal-title`).text('Edit Katalog');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                url: `/admin/katalog-sale/${uuid}`,
                success: function(response) {
                    hideLoading();

                    const data = response.data;

                    setFormValue(formSelector, data);
                    initializeFormForEdit(formSelector, data);
                },
                error: function() {
                    hideLoading();
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal menampilkan data.',
                    });
                }
            });
        }
        // show detail data
        function showDetailData(e) {
            let modalSelector = "#modalDetailData";
            let formSelector = "#formDetailData";

            showLoading(modalSelector);

            // clearValidationForm(`${form}`);

            $(`${modalSelector}`).modal('show');
            $(`${modalSelector} .modal-title`).text('Detail Katalog')

            let uuid = e.getAttribute('data-id');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "GET",
                url: `{{ url('admin/katalog-sale') }}/${uuid}`,
                success: function(response) {

                    hideLoading();

                    const data = response.data;

                    setFormValue(formSelector, data);
                    initializeFormForEdit(formSelector, data);
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: `Error displaying data`,
                    });
                }
            });
        }

        function deleteData(e) {
            let uuid = e.getAttribute('data-id');
            let nama_data = e.getAttribute('data-name');

            // console.log(nama_data)

            Swal.fire({
                title: `Apa Anda yakin akan menghapus ${nama_data} ? `,
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    showLoading();

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "DELETE",
                        url: `{{ url('admin/katalog') }}/${uuid}`,
                        dataType: 'JSON',
                        success: function(response) {
                            handleAjaxSuccess(null, response);
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: `Gagal menghapus data`,
                            });
                        }
                    });
                }
            })
        }
    </script>
@endsection
