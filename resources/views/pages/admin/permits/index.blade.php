@extends('layouts.app')

@section('title', 'Data Perizinan')

@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Tabel Data Perizinan</h3>
            </div>
        </div>
    </div>

    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <table id="permits_table" class="datatable-init-export nowrap table" data-export-title="Export">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Kelas</th>
                        <th>Tanggal Pergi</th>
                        <th>Tanggal Pulang</th>
                        <th>No Kwitansi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody class="text-capitalize">
                    @foreach ($permits as $permit)
                        <tr>
                            <td>{{ $permit->fullname }}</td>
                            <td>{{ $permit->classname }}</td>
                            <td>{{ \Laraindo\TanggalFormat::DateIndo($permit->leave_date, 'Y-m-d') }}</td>
                            <td>{{ \Laraindo\TanggalFormat::DateIndo($permit->arrival_date, 'Y-m-d') }}</td>
                            <td>{{ $permit->invoice_number }}</td>
                            <td>{{ $permit->status == 'pending' ? 'Belum Kembali' : 'Sudah Kembali' }}</td>
                            <td>
                                @if ($permit->status == 'pending')
                                    <a href="{{ route('admin.permit.member.status', $permit) }}" class="btn btn-icon btn-sm btn-success"
                                        onclick="return confirm('apakah member sudah kembali?');">
                                        <em class="icon ni ni-check"></em>
                                    </a>
                                @endif
                                <a href="{{ route('admin.permits.show', $permit) }}" class="btn btn-icon btn-sm btn-info">
                                    <em class="icon ni ni-eye"></em>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('after-script')
    <script>
        $(document).ready(function() {
            var auto_responsive = $('#permits_table').data("auto-responsive"),
                has_export = typeof $('#permits_table').data("buttons") !== "undefined" && $('#permits_table').data("buttons") ? true : false;
            var export_title = $('#permits_table').data("export-title") ? $('#permits_table').data("export-title") : "Export";
            var btn = has_export ? '<"dt-export-buttons d-flex align-center"<"dt-export-title d-none d-md-inline-block">B>' : "",
                btn_cls = has_export ? " with-export" : "";
            var dom_normal = '<"row justify-between g-2' +
                btn_cls +
                '"<"col-7 col-sm-4 text-start"f><"col-5 col-sm-8 text-end"<"datatable-filter"<"d-flex justify-content-end g-2"' +
                btn +
                'l>>>><"datatable-wrap my-3"t><"row align-items-center"<"col-7 col-sm-12 col-md-9"p><"col-5 col-sm-12 col-md-3 text-start text-md-end"i>>';
            var dom_separate = '<"row justify-between g-2' +
                btn_cls +
                '"<"col-7 col-sm-4 text-start"f><"col-5 col-sm-8 text-end"<"datatable-filter"<"d-flex justify-content-end g-2"' +
                btn +
                'l>>>><"my-3"t><"row align-items-center"<"col-7 col-sm-12 col-md-9"p><"col-5 col-sm-12 col-md-3 text-start text-md-end"i>>';
            var dom = $('#permits_table').hasClass("is-separate") ?
                dom_separate :
                dom_normal;

            $('#permits_table').DataTable({
                destroy: true,
                dom: dom,
                order: [
                    [2, 'desc']
                ],
                language: {
                    search: "",
                    searchPlaceholder: "Type in to Search",
                    lengthMenu: "<span class='d-none d-sm-inline-block'>Show</span><div class='form-control-select'> _MENU_ </div>",
                    info: "_START_ -_END_ of _TOTAL_",
                    infoEmpty: "0",
                    infoFiltered: "( Total _MAX_  )",
                    paginate: {
                        first: "First",
                        last: "Last",
                        next: "Next",
                        previous: "Prev",
                    },
                },
                initComplete: function() {
                    this.api().order([2, 'desc']).draw();
                }
            });
        });
    </script>
@endpush
