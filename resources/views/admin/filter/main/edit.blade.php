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
<p>>Admin > Filter > Edit :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">

            <form method="post" action="{{ route ('dashboard.filter.update') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="fa-brands fa-servicestack header_icon"></i> Update
                                Filter Data</h3>
                        </div>
                        <div class="col-md-4 text-end"><a href="{{ route('dashboard.filter') }}"
                                class="btn btn-sm btn-primary btn_header">
                                <i class="fa-solid fa-user-plus"></i> All Filter Data</a></div>
                    </div>
                </div>
                <div class="card-body card_body">
                    <div class="row">
                        <input type="hidden" name="id" value="{{ $edit->id }}">
                        <input type="hidden" name="slug" value="{{ $edit->fil_slug }}">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-3 text-end">
                                    <label for="" class="col-form-label col_form_label">Filter Data Title : <span
                                            class="valid_sign">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control form_control" name="title"
                                        value="{{ $edit->fil_title }}">
                                    @error('title')
                                        <span class="text-danger invalid_msg">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3 text-end">
                                    <label for="" class="col-form-label col_form_label">Filter Data Details : </label>
                                </div>
                                <div class="col-md-7 mb-2">
                                    <input type="description" class="form-control form_control" name="detail"
                                        value="{{ $edit->fil_detail }}">
                                        @error('detail')
                                    <span class="text-danger invalid_msg">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3 text-end">
                                    <label for="" class="col-form-label col_form_label">Filter Data Image :
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input type="file" id="" class="form-control form_control" name="pic" value="">

                                </div>
                                <div class="col-md-3">
                                    @if($edit->fil_pic !='')
                                        <img src="{{ asset('uploads/admin/filter/'.$edit->fil_pic) }}"
                                            class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;">
                                    @else
                                        <img src="{{ asset('uploads/admin/post') }}/pic1.png"
                                            class="img-fluid" height="200px" width="200px" style="oobject-fit:cover;">
                                    @endif
                                </div>
                            </div>


                            <div class="row mt-3">
                                <div class="col-md-3 text-end">
                                    <label class="col-form-label col_form_label">Category : </label>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control " name="cat">
                                        <option value="" style=" display: none ;">Select Filter Type</option>
                                        @foreach($filtertype as $category)
                                            <option value="{{$category->id}}" @if($edit->fil_cat == $category->id) Selected @endif>
                                                {{ $category->fil_type_btn }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('cat')
                                        <span class="text-danger invalid_msg">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>

                </div>
                <div class="card-footer card_footer text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
