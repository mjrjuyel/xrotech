@extends('layouts.admin')
@section('content')

<p>>Admin > Contact-Message > View :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card_header"><i class="uil-envelope-alt header_icon"></i>Message Info {{$view->cm_name}} </h3>
                    </div>
                    <div class="col-md-4 text-end"><a href="{{ route('dashboard.contact-message') }}"
                            class="btn btn-sm btn-primary btn_header">
                            <i class="uil-envelope-alt"></i> All Messages </a></div>
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
                            <td>Sender Name</td>
                            <td>:</td>
                            <td>{{ $view->cm_name }}</td>
                        </tr>
                        <tr>
                            <td>Sender Email</td>
                            <td>:</td>
                            <td>{{ $view->cm_email }}</td>
                        </tr>
                        <tr>
                            <td>Sender Number</td>
                            <td>:</td>
                            <td>{{ $view->cm_phone }}</td>
                        </tr>
                        <tr>
                            <td>Subject</td>
                            <td>:</td>
                            <td>{{ $view->cm_subject }}</td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td>:</td>
                            <td>{{ $view->cm_message }}</td>
                        </tr>
                        <tr>
                            <td>Sending Time</td>
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
