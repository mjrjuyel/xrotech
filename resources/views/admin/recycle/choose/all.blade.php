@extends('layouts.admin')
@section('content')
@if(Session::has('success'))
    <script type="text/javascript">
        swal({
            title: "Success!",
            text: "{{ Session::get('success') }}",
            icon: "success",
            button: "OK",
            timer: 5000,
        });

    </script>
@endif
@if(Session::has('error'))
    <script type="text/javascript">
        swal({
            title: "Opps!",
            text: "{{ Session::get('error') }}",
            icon: "error",
            button: "OK",
            timer: 5000,
        });

    </script>
@endif
<p>>Recycle > Choose :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card_header"><i class="uil-envelope-alt header_icon"></i> All Deleted Choose Data
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row m-80">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table id="myTable" class="table  table-striped text-center custom_table">
                        <thead class="heading_col">
                            <tr>
                            <th>Choose Title</th>
                                <th>Choose Detail</th>
                                <th>Choose Icon</th>
                                <th>Creator</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allchos as $data)
                                <tr class="table_font">
                                <td>{{ $data->cho_title}}</td>
                                    <td>{{ Str::words($data->cho_detail,5) }}</td>
                                    <td>
                                        {{$data->cho_icon}}
                                    </td>
                                    <td>{{ $data->creator->name}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Manage
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" id="restore" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#recover_modal"
                                                        data-id="{{ $data->id }}">Restore</a></li>

                                                <li><a class="dropdown-item" id="delete" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#delete_modal"
                                                        data-id="{{ $data->id }}">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <div id="delete_modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="post"
                                            action="{{ url('/dashboard/choose/delete/' .$data->cho_slug) }}">
                                            @method('DELETE')
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header modal-colored-header bg-danger">
                                                    <h4 class="modal-title" id="primary-header-modalLabel">permanent Delete Choose</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-hidden="true"></button>
                                                </div>
                                                <div class="modal-body modal_body">
                                                    Are You Sure want to Delete Choose Data?
                                                    <input type="hidden" name="modal_id" value="{{ $data->id }}">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="Submit" class="btn btn-primary">Yes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class=""></div>
            </div>
            <div class="card-header bg-dark">
                <div class="col-12">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Print</button>
                        <button type="button" class="btn btn-dark">PDf</button>
                        <button type="button" class="btn btn-primary">Excel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ===== Modal Options ==== -->


<!-- ===  Modal Restore === -->
<div id="recover_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" action="{{ route('dashboard.choose.restore') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="primary-header-modalLabel">Recover Choose Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body modal_body">
                    Are You Sure want to Restore Choose Data?
                    <input type="hidden" name="modal_id" id="modal_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Yes</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
