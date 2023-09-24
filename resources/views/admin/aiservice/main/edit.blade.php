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

<p>>Admin > Ai Service > Main > Info :</p>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{ route ('dashboard.aiservice-main.update') }}">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="fa-solid fa-bars-progress header_icon"></i>Ai Service Main
                                Information
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
                                <label class="col-form-label input_name">Ai Service Main Title :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title"
                                    value="{{ $edit->ai_main_title }}">

                                    @error('title')
                                    <span class="invalid_msg">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">Ai Service Main Subtitle Title :</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sub_title"
                                    value="{{ $edit->ai_main_subtitle }}">

                                    @error('sub_title')
                                    <span class="invalid_msg">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 text-end">
                                <label class="col-form-label input_name">Ai Service Type :</label>
                            </div>
                            <div class="col-md-6">
                                @foreach($edit->ai_type as $type)
                                    <a href="{{ url('/dashboard/aiservice/view/' .$type->ai_slug)}}" class="btn btn-primary mt-1">{{$type->id}} : {{ $type->ai_title}},</a>
                                @endforeach
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
