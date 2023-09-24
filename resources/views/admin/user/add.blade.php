@extends('layouts.admin')
@section('content')
<p>>Admin > Technology > Register :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{ route ('dashboard.technology.insert') }}" enctype="multipart-form-data">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="fa-brands fa-Technologystack header_icon"></i> Register
                                Technology Section</h3>
                        </div>
                        <div class="col-md-4 text-end"><a href="{{ route('dashboard.technology') }}"
                                class="btn btn-sm btn-primary btn_header">
                                <i class="fa-solid fa-user-plus"></i> All Technology</a></div>
                    </div>
                </div>
                <div class="row m-80">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Technology Title <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="title"
                                    value="{{ old('title') }}">
                                @error('title')
                                    <span class="text-danger invalid_msg">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Technology Icon <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="file" class="form-control" name="icon"
                                    value="{{ old('icon') }}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Technology Description <span class="err">*</span>
                                    :</label>
                            </div>
                            <div class="col-md-5">
                            <textarea type="text" rows="4" style=" resize: none;" class="form-control" name="elem1"
                                    value=""> {{ old('elem1') }} </textarea>
                                @error('elem1')
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
