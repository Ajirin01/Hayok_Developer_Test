@extends('layouts.backend')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Patient</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{ route('patients.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name <span class="text-danger">*</span></label>
                                <input name="name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Surname <span class="text-danger">*</span></label>
                                <input name="surname" class="form-control" type="text">
                            </div>
                        </div>
                        {{-- <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div> --}}
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Age <span class="text-danger">*</span></label>
                                <input name="age" class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group gender-select">
                                <label class="gen-label">Gender:</label>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" name="gender" class="form-check-input">Male
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" name="gender" class="form-check-input">Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Height <span class="text-danger">*</span></label>
                                <input name="height" class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Weight <span class="text-danger">*</span></label>
                                <input name="weight" class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Ward</label>
                                <select name="ward" class="form-control select">
                                    <option>Male Ward</option>
                                    <option>Female Ward</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select name="state" class="form-control select">
                                            <option>Chanchaga</option>
                                            <option>Bosso</option>
                                            <option>Dutse Kura</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>L.G.A</label>
                                        <select name="lga" class="form-control select">
                                            <option>Chanchaga</option>
                                            <option>Bosso</option>
                                            <option>Dutse Kura</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Photo</label>
                                <div class="profile-upload">
                                    
                                    <div class="upload-img">
                                        <a class="dropdown-item" id="take-photo" href="#" data-toggle="modal" data-target="#webcam-model"><img style=" width: 200px; height: 170px" id="avarta" alt="" src="{{ asset('assets/img/user.jpg') }}">
                                        </a>
                                        <!-- <img style=" width: 200px; height: 170px" id="avarta" alt="" src="assets/img/user.jpg"> -->
                                    </div>
                                    <div class="upload-input">
                                        <!-- <input type="file" class="form-control" accept="image/*" capture="camera"> -->
                                        <a class="dropdown-item" id="take-photo" href="#" data-toggle="modal" data-target="#webcam-model"><i class="fa fa-picture-o m-r-5"></i> Take Photo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="photo" id="patient-photo">
                    <div class="form-group">
                        <label class="display-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="patient_active" value="option1" checked>
                            <label class="form-check-label" for="patient_active">
                            Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="patient_inactive" value="option2">
                            <label class="form-check-label" for="patient_inactive">
                            Inactive
                            </label>
                        </div>
                    </div>
                    <div id="webcam-model" class="modal fade webcam-modal" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <!-- <img src="assets/img/sent.png" alt="" width="50" height="46"> -->
                                    <video id="webcam" autoplay playsinline width="350" height="350"></video>
                                    <canvas id="canvas" class="d-none"></canvas>
                                    <audio id="snapSound" src="{{ asset('assets/audio/snap.wav') }}" preload = "auto"></audio>
                                    <div class="m-t-20"> <a href="#" id="close" class="btn btn-white" data-dismiss="modal">Close</a>
                                        <div class="m-t-20 text-center">
                                            <button class="btn btn-primary submit-btn" id="flip">Flip Camera</button>
                                        </div>
                                        <div class="m-t-20 text-center">
                                            <button class="btn btn-primary submit-btn" id="snap">Snap</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Patient</button>
                    </div>
                    <input type="hidden" name="image_url" id="image-url">
                </form>
            </div>
        </div>
    </div>
@endsection