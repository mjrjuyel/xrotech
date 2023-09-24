@extends('layouts.admin')
@section('content')

<p>>Admin > Filter : Type > View :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header bg-dark">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="card_header"><i class="fa-brands fa-servicestack header_icon"></i>Filter Type Information
                        </h3>
                    </div>
                    <div class="col-md-4 text-end"><a href="{{ route('dashboard.filter-cat') }}"
                            class="btn btn-sm btn-primary btn_header">
                            <i class="fa-brands fa-servicestack"></i> All Filter Type </a></div>
                </div>
            </div>
            <div class="row m-80">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <table class="table table-bordered table-striped table-hover view_custom_table">
                        <tr>
                            <td>Filter Type Name</td>
                            <td>:</td>
                            <td>{{ $view->fil_type_title }}</td>
                        </tr>
                        <tr>
                            <td>Filter Type Button</td>
                            <td>:</td>
                            <td>
                                {{$view->fil_type_btn}}
                            </td>
                        </tr>

                        <tr>
                            <td>Filter Belongs To</td>
                            <td>:</td>
                            <td>
                            </td>
                        </tr> 

                        <tr>
                            <td>Filter Type Creator</td>
                            <td>:</td>
                            <td>{{ $view->creator->name}}
                            </td>
                        </tr>
                        <tr>
                            <td>Filter Type Editor</td>
                            <td>:</td>
                            <td>{{ optional($view->editor)->name}}
                            </td>
                        </tr>
                        <tr>
                            <td>Filter Type Created at</td>
                            <td>:</td>
                            <td>{{ $view->created_at->format('D-M-Y | h:m:s A') }}
                            </td>
                        </tr>

                        <tr>
                            <td>Filter Type Updated at</td>
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
