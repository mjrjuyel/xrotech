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
<p>>Admin > Role > Data :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card_header"><i class="fa-solid fa-user-group header_icon"></i> All User Information
                        </h3>
                    </div>
                    <div class="col-md-4 text-end"><a href="{{ route('dashboard.role.add') }}"
                            class="btn btn-sm btn-primary btn_header">
                            <i class="fa-solid fa-user-plus"></i> New Role</a></div>
                </div>
            </div>
            <div class="row m-80">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table class="table  table-striped text-center custom_table">

                        <thead class="heading_col">
                            <tr>
                                <th>Id</th>
                                <th>Role Name</th>
                                <th>User Name</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allrole as $data)
                                <tr class="table_font">
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->role_title }}</td>
                                    <td>....</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Manage
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ url ('dashboard/role/view/'.$data->role_slug)}}">View</a></li>
                                                <li><a class="dropdown-item" href="{{ url ('dashboard/role/edit/'.$data->role_slug)}}">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class=""></div>
            </div>
            <div class="card-header bg-secondary">
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
@endsection
