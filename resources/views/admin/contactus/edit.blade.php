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
            <form method="post" action="{{ route ('dashboard.contact.update') }}">
                @csrf
                <div class="card-header bg-dark">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="card_header"><i class="fa-solid fa-address-book header_icon"></i></i>Banner
                                InFormation</h3>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <input type="hidden" name="id" value="{{ $edit->editor->name }}">
                <div class="row m-80">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">

                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Mobile Number 1 :</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
                                <input type="text" class="form-control" name="nb1" id="inlineFormInputGroup" value="{{$edit->cu_number1}}"
                                    placeholder="Add New Number">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Mobile Number 2 :</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
                                <input type="text" class="form-control" name="nb2" id="inlineFormInputGroup" value="{{$edit->cu_number2}}"
                                    placeholder="Add New Number">
                            </div>
                        </div>

                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Email 1:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-regular fa-envelope"></i></div>
                                <input type="email" class="form-control" name="email1" id="inlineFormInputGroup" value="{{$edit->cu_email1}}"
                                    placeholder="Add New Number">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Email 2:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-regular fa-envelope"></i></div>
                                <input type="email" class="form-control" name="email2" id="inlineFormInputGroup" value="{{$edit->cu_email2}}"
                                    placeholder="Add New Number">
                            </div>
                        </div>

                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Address 1:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
                                <textarea type="text" rows="2" style=" resize: none " class="form-control"
                                   placeholder="Add New Address" name="address1">{{$edit->cu_address1}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Address 2:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
                                <textarea type="text" rows="2" style=" resize: none " class="form-control"
                                   placeholder="Add New Address" name="address2">{{$edit->cu_address2}}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">

                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Mobile Number 3:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
                                <input type="text" class="form-control" name="nb3" id="inlineFormInputGroup" value="{{$edit->cu_number3}}"
                                    placeholder="Add New Number">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Mobile Number 4:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-solid fa-phone"></i></div>
                                <input type="text" class="form-control" name="nb4" id="inlineFormInputGroup" value="{{$edit->cu_number4}}"
                                    placeholder="Add New Number">
                            </div>
                        </div>

                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Email 3:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-regular fa-envelope"></i></div>
                                <input type="email" class="form-control" name="email3" id="inlineFormInputGroup" value="{{$edit->cu_email3}}"
                                    placeholder="Add New Email">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Email 4:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-regular fa-envelope"></i></div>
                                <input type="email" class="form-control" name="email4" id="inlineFormInputGroup" value="{{$edit->cu_email4}}"
                                    placeholder="Add New Email">
                            </div>
                        </div>

                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Address 3:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
                                <textarea type="text" rows="2" style=" resize: none " class="form-control"
                                   placeholder="Add New Address" name="address3">{{$edit->cu_address3}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <label class="col-form-label" for="inlineFormInputGroup">Address 4:</label>
                            <div class="input-group mb-2">
                                <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
                                <textarea type="text" rows="2" style=" resize: none " class="form-control"
                                   placeholder="Add New Address" name="address4">{{$edit->cu_address4}}</textarea>
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
