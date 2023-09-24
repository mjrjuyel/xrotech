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

<p>>Admin > Get In Touch > Info :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{ route ('dashboard.get-touch.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="fa-solid fa-bars-progress header_icon"></i>Coontact Information
                            </h3>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <input type="hidden" name="name" value="{{ $edit->creator->name }}">
                <input type="hidden" name="name" value="{{ optional($edit->editor)->name }}">
                <div class="row m-80">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">Contact Title :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{$edit->get_title}}">
                                @error('title')
                                <span class="invalid_msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">Contact Title :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sub_title" value="{{$edit->get_sub}}">
                                @error('sub_title')
                                <span class="invalid_msg">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">Contact Image <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" name="pic">
                            </div>
                            <div class="col-md-4">
                                @if($edit->get_pic)
                                    <img src="{{ asset('uploads/admin/contact/'.$edit->get_pic) }}"
                                        alt=="" class="img-fluid" width="200px">
                                @else
                                    <img src="{{ asset('contents/website') }}/assets/images/homepage-one/header-shape.png"
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
