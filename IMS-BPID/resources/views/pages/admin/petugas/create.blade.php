@extends('layouts.admin')

@section('title')
Add User - IMS
@endsection

@section('content')
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add User</div>
                    </div>
                    <form action="{{ route('petugas.store')}} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="nik" id="nik">
                                        <div class="field-placeholder">No. Employee <span class="text-danger">*</span>
                                        </div>
                                        <div class="form-text">
                                            Please enter your No.Employee
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="name" id="name">
                                        <div class="field-placeholder">Name <span class="text-danger">*</span>
                                        </div>
                                        <div class="form-text">
                                            Please enter your Full Name
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="email" name="email" id="email">
                                        <div class="field-placeholder">Email <span class="text-danger">*</span>
                                        </div>
                                        <div class="form-text">
                                            We'll never share your email with anyone.
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="phone" id="phone">
                                        <div class="field-placeholder">Phone</div>
                                        <div class="form-text">
                                            Please enter your mobile number.
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="departement" id="departement">
                                        <div class="field-placeholder">Departement</div>
                                        <div class="form-text">
                                            Please enter your Departement.
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="posisi" id="posisi">
                                        <div class="field-placeholder">Position</div>
                                        <div class="form-text">
                                            Please enter your Position.
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->


                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <select class="select-multiple js-states" name="roles" title="Select User Role"
                                            data-live-search="true" name="roles" id="roles">
                                            <option value="" selected="" disabled="">Select Role</option>
                                            <option value="ADMIN">Admin</option>
                                            <option value="USER">User</option>
                                        </select>
                                        <div class="field-placeholder">Role</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="password" name="password" id="password">
                                        <div class="field-placeholder">Password</div>
                                        <div class="form-text">
                                            Please enter your Password.
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="password" name="password_confirmation"
                                            id="password_confirmation">
                                        <div class="field-placeholder">Password Confirmation</div>
                                        <div class="form-text">
                                            Please enter your Password Confirmation.
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <input type="submit" class="btn btn-primary" value="Submit"></input>
                                </div>
                    </form>
                </div>
                <!-- Row end -->

            </div>
        </div>
        <!-- Card end -->

    </div>
</div>
<!-- Row end -->

</div>
<!-- Content wrapper end -->



</div>
@endsection