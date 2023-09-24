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

<p>>Admin > Basic > Info :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{ route ('dashboard.basic.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="uil-constructor header_icon"></i> Basic Part</h3>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <input type="hidden" name="slug" value="{{ $edit->basic_slug }}">
                <div class="row m-80">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Main Logo <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="mlogo">
                            </div>
                            <div class="col-md-4">
                                @if($edit->basic_Mlogo != '')
                                    <img src="{{ asset('uploads/admin/basic/'.$edit->basic_Mlogo) }}"
                                        alt=="" class="img-fluid" width="200px">
                                @else
                                <img src="{{ asset('contents/website/assets/images/logo.png') }}"
                                        alt=="" class="img-fluid" width="200px">
                                @endif
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Footer Logo <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="flogo">
                            </div>
                            <div class="col-md-4">
                                @if($edit->basic_Flogo !='')
                                    <img src="{{ asset('uploads/admin/basic/'.$edit->basic_Flogo) }}"
                                        alt=="" class="img-fluid" width="200px">
                                        @else
                                <img src="{{ asset('contents/website/assets/images/logo.png') }}"
                                        alt=="" class="img-fluid" width="200px">
                                @endif
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Fav Icon <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="favicon">
                            </div>
                            <div class="col-md-4">
                                @if($edit->basic_favIcon)
                                    <img src="{{ asset('uploads/admin/basic/' .$edit->basic_favIcon) }}"
                                        alt=="" class="img-fluid" width="200px">
                                        @else
                                <img src="{{ asset('contents/website/assets/images/favicon.png') }}"
                                        alt=="" class="img-fluid" width="100px" height="100px" style="object-fit: cover;">
                                @endif
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Description <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <textarea type="text" rows="6" style=" resize: none " class="form-control" name="description">{{ $edit->basic_description }}</textarea>
                                @error('description')
                                <span class="invalid_msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> CopyRight <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <textarea type="text" rows="2" style=" resize: none " class="form-control" name="copy">{{ $edit->basic_copy }}</textarea>

                                @error('copy')
                                <span class="invalid_msg">{{$message}}</span>
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
