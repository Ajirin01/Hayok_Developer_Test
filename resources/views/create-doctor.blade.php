@extends('layouts.backend')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Health Worker</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{ route('doctors.store') }}" method="POST">
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
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password">
                            </div>
                        </div> -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Age</label>
                                <div>
                                    <input name="age" type="number" class="form-control datetimepicker">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group gender-select">
                                <label class="gen-label">Gender:</label>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input name="gender" type="radio" name="gender" class="form-check-input">Male
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input name="gender" type="radio" name="gender" class="form-check-input">Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-12">
                                    <div class="form-group">
                                        <label>Cadre</label>
                                        <select name="cadre" class="form-control select">
                                            <option>Doctor</option>
                                            <option>Nurse</option>
                                            <option>Surgeon</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select name="department" class="form-control select">
                                            <option>Medicine</option>
                                            <option>Laboratory</option>
                                            <option>Surgry</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input name="status" class="form-check-input" type="radio" name="status" id="doctor_active" value="option1" checked>
                            <label class="form-check-label" for="doctor_active">
                            Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="status" class="form-check-input" type="radio" name="status" id="doctor_inactive" value="option2">
                            <label class="form-check-label" for="doctor_inactive">
                            Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection