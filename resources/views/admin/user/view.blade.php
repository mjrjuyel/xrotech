@extends('layouts.admin')
@section('content')

<p>>Admin > Technology > View :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card_header"><i class="fa-brands fa-servicestack header_icon"></i>Technology Information
                        </h3>
                    </div>
                    <div class="col-md-4 text-end"><a href="{{ route('dashboard.technology') }}"
                            class="btn btn-sm btn-primary btn_header">
                            <i class="fa-brands fa-servicestack"></i> All Technology </a></div>
                </div>
            </div>
            <div class="row m-80">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <table class="table table-bordered table-striped table-hover view_custom_table">
                        <tr>
                            <td>Technology Name</td>
                            <td>:</td>
                            <td>{{ $view->tech_title }}</td>
                        </tr>
                        <tr>
                            <td>Technology Icon</td>
                            <td>:</td>
                            <td>
                                @if($view->tech_icon)
                                    <img src="{{ asset('uploads/admin/technology/'.$view->tech_icon) }}"
                                        class="img-fluid" width="200px">
                                @else
                                    <img src="{{ asset('contents/website') }}/assets/images/homepage-one/header-shape.png"
                                        class="img-fluid" width="200px">
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Technology Detail</td>
                            <td>:</td>
                            <td>{{ $view->tech_description }}</td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Technology Creator</td>
                            <td>:</td>
                            <td>{{ $view->creator->name}}
                            </td>
                        </tr>
                        <tr>
                            <td>Technology Editor</td>
                            <td>:</td>
                            <td>{{ optional($view->editor)->name}}
                            </td>
                        </tr>
                        <tr>
                            <td>Technology Created at</td>
                            <td>:</td>
                            <td>{{ $view->created_at->format('D-M-Y | h:m:s A') }}
                            </td>
                        </tr>

                        <tr>
                            <td>Technology Created at</td>
                            <td>:</td>
                            <td>{{ optional($view->updated_at)->format('D-M-Y | h:m:s A') }}
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
