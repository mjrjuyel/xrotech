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
<p>>Admin > Service > Edit :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{ route ('dashboard.service.update') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="fa-brands fa-servicestack header_icon"></i> Update Service
                                Information</h3>
                        </div>
                        <div class="col-md-4 text-end"><a href="{{ route('dashboard.service') }}"
                                class="btn btn-sm btn-primary btn_header">
                                <i class="fa-solid fa-user-plus"></i> All Service</a></div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <input type="hidden" name="slug" value="{{ $edit->ser_slug }}">
                <div class="row m-80">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Service Title <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="title" value="{{ $edit->ser_title }}">
                                @error('title')
                                    <span class="text-danger invalid_msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Service Icon <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="icon" value="{{ $edit->ser_icon }}">

                                @error('icon')
                                    <span class="text-danger invalid_msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Service Element 1 <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="elem1" value="{{ $edit->ser_elem1 }}">
                                @error('elem1')
                                    <span class="text-danger invalid_msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Service Elemet 2 <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="elem2" value="{{ $edit->ser_elem2 }}">
                                @error('elem2')
                                    <span class="text-danger invalid_msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Service Elemet 3 <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="elem3" value="{{ $edit->ser_elem3 }}">
                                @error('elem3')
                                    <span class="text-danger invalid_msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="card-header bg-secondary">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary button">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
