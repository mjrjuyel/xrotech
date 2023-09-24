@extends('layouts.admin')
@section('content')
<p>>Admin > Ai service > Type > Register :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{ route ('dashboard.aiservice.insert') }}" enctype="multipart-form-data">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="fa-brands fa-servicestack header_icon"></i> Register
                                Ai Service  Type</h3>
                        </div>
                        <div class="col-md-4 text-end"><a href="{{ route('dashboard.aiservice') }}"
                                class="btn btn-sm btn-primary btn_header">
                                <i class="fa-solid fa-user-plus"></i> All Choose Type</a></div>
                    </div>
                </div>
                <div class="row m-80">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <div class="row">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name"> Ai Service Type Title <span class="err">*</span>
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
