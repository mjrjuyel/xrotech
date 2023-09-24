@extends('layouts.admin')
@section('content')

<p>>Admin > Role > View :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card_header"><i class="fa-solid fa-user-group header_icon"></i> Each Role Info</h3>
                    </div>
                    <div class="col-md-4 text-end"><a href="{{ route('dashboard.role') }}"
                            class="btn btn-sm btn-primary btn_header">
                            <i class="fa-solid fa-user-plus"></i> All Role </a></div>
                </div>
            </div>
            <div class="row m-80">
                <div class="col-md-3"></div>
                <div class="col-md-5">
                    <table class="table table-bordered table-striped table-hover view_custom_table">
                        <tr>
                            <td>Id</td>
                            <td>:</td>
                            <td>{{ $view->id }}</td>
                        </tr>
                        <tr>
                            <td>Role Title</td>
                            <td>:</td>
                            <td>{{ $view->role_title }}</td>
                        </tr>
                        <tr>
                            <td>Created at</td>
                            <td>:</td>
                            <td>{{ $view->created_at->format('D-M-Y | h:m:s A') }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4"></div>
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
