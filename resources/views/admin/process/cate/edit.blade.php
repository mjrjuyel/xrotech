@extends('layouts.admin')
@section('content')
@if(Session::has('success'))
    <script type="text/javascript">
        swal({
            elem4: "Success!",
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
            elem4: "Opps!",
            text: "{{ Session::get('error') }}",
            icon: "error",
            button: "OK",
            timer: 5000,
        });

    </script>
@endif
<p>>Admin > Ai Process : Type > Edit :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{ route ('dashboard.process.update') }}">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="fa-brands fa-servicestack header_icon"></i> Update Ai Process
                                Information</h3>
                        </div>
                        <div class="col-md-4 text-end"><a href="{{ route('dashboard.process') }}"
                                class="btn btn-sm btn-primary btn_header">
                                <i class="fa-solid fa-user-plus"></i> All Ai Process</a></div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <input type="hidden" name="slug" value="{{ $edit->pro_slug }}">
                <div class="row m-80">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Ai Process Type Title <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="title" value="{{ $edit->pro_title }}">
                                @error('title')
                                    <span class="text-danger invalid_msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Process Type Data 1 <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="elem1" value="{{ $edit->pro_elem1 }}">
                                @error('elem1')
                                    <span class="text-danger invalid_msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Process Type Data 2 <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="elem2" value="{{ $edit->pro_elem2 }}">
                                @error('elem2')
                                    <span class="text-danger invalid_msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Ai Process Type Data 3
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="elem3" value="{{ $edit->pro_elem3 }}">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Ai  Process Type Data 4 
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="elem4" value="{{ $edit->pro_elem4 }}">
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
