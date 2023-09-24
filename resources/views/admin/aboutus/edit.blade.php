@extends('layouts.admin')
@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

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

<p>>Admin > About Us > Info :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{ route ('dashboard.about.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="fa-solid fa-bars-progress header_icon"></i>About Us Information
                            </h3>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <input type="hidden" name="name" value="{{ $edit->editor->name }}">
                <div class="row m-80">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">About Us Title :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{$edit->about_title}}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">About Us Sub Title :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="subtitle" value="{{$edit->about_subtitle}}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">About Us Description :</label>
                            </div>
                            <div class="col-md-6">
                                <textarea type="text" style="resize:none; "id="description" rows="10" class="form-control" name="detail">{{$edit->about_description}}</textarea>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">About Us Image <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="about_pic">
                            </div>
                            <div class="col-md-4">
                                @if($edit->about_pic)
                                    <img src="{{ asset('uploads/admin/about/'.$edit->about_pic) }}"
                                        alt=="" class="img-fluid" width="200px">
                                @else
                                    <img src="{{ asset('contents/website') }}/assets/images/feature-shape/feature-shape-1.png"
                                        alt="" class="img-fluid" width="200px">
                                @endif
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">About Us Feature<span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <Input type="text"  class="form-control" name="feat1" value="{{$edit->about_elem1}}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">About Us Feature<span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <Input type="text"  class="form-control" name="feat2" value="{{$edit->about_elem2}}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">About Us Feature<span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <Input type="text"  class="form-control" name="feat3" value="{{$edit->about_elem3}}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">About Us Feature<span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <Input type="text"  class="form-control" name="feat4" value="{{$edit->about_elem4}}">
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
