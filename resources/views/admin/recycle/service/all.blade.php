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
<p>>Admin > Contact-Message :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card_header"><i class="uil-envelope-alt header_icon"></i> All Deleted Services
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
                                <th>Service Title</th>
                                <th>Service Icon</th>
                                <th>Service Element</th>
                                <th>Creator</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allservice as $data)
                                <tr class="table_font">
                                    <td>{{ $data->ser_title }}</td>
                                    <td>
                                        @if($data->ser_icon)
                                            <img src="{{ asset('uploads/admin/service/'.$data->ser_icon) }}"
                                                class="img-fluid" width="200px">
                                        @else
                                            <img src="{{ asset('contents/website') }}/assets/images/homepage-one/header-shape.png"
                                                class="img-fluid" width="200px">
                                        @endif
                                    </td>
                                    <td>{{ $data->ser_elem1 }}</td>
                                    <td>{{ $data->creator->name }}</td>
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
                                            action="{{ url('/dashboard/service/delete/' .$data->ser_slug) }}">
                                            @method('DELETE')
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header modal-colored-header bg-danger">
                                                    <h4 class="modal-title" id="primary-header-modalLabel">permanent
                                                        Delete Service</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-hidden="true"></button>
                                                </div>
                                                <div class="modal-body modal_body">
                                                    Are You Sure want to Delete Service?
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
        <form method="post" action="{{ route('dashboard.service.restore') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="primary-header-modalLabel">Recover Service Info</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body modal_body">
                    Are You Sure want to Restore Seervice?
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
