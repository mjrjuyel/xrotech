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

<p>>Admin > Portfolio > Info :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{ route ('dashboard.portfolio.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="fa-solid fa-bars-progress header_icon"></i>Portfolio Information
                            </h3>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <input type="hidden" name="name" value="{{ optional($edit->editor)->name }}">
                <div class="row m-80">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">Portfolio Title :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{$edit->port_title}}">
                                @error('title')
                                <span class="invalid_msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">Portfolio Sub Title :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="subtitle" value="{{$edit->port_sub_1}}">
                                @error('subtitle')
                                <span class="invalid_msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">Portfolio Sub Title Down:</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="subtitle2" value="{{$edit->port_sub_2}}">
                                @error('subtitle2')
                                <span class="invalid_msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">Portfolio Image <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="port_pic">
                            </div>
                            <div class="col-md-4">
                                @if($edit->port_pic)
                                    <img src="{{ asset('uploads/admin/portfolio/'.$edit->port_pic) }}"
                                        alt=="" class="img-fluid" width="200px">
                                @else
                                    <img src="{{ asset('contents/website') }}/assets/images/feature-shape/feature-shape-1.png"
                                        alt="" class="img-fluid" width="200px">
                                @endif
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

@section('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
    $('#description').summernote();
});
</script>
@endsection
