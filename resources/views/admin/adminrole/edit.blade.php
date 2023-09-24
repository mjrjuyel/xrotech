@extends('layouts.admin')
@section('content')
<p>>Admin > Role > Edit :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{ route ('dashboard.role.update') }}">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="uil-constructor header_icon"></i> Update Service Info</h3>
                        </div>
                        <div class="col-md-4 text-end"><a href="{{ route('dashboard.role') }}"
                                class="btn btn-sm btn-primary btn_header">
                                <i class="fa-solid fa-user-plus"></i> All service</a></div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{$edit->id}}">
                <input type="hidden" name="slug" value="{{$edit->ser_slug}}">
                <div class="row m-80">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3 text-end">
                                
                                <label class="col-form-label input_name">Role Title <span class="err">*</span> :</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="role" value="{{$edit->role_title}}">
                                @error('role')
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