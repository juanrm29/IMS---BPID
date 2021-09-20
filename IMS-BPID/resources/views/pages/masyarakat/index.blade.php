@extends('layouts.masyarakat')

@section('title')
Tambah Improvement - IMS
@endsection
@section('content')
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Improvement Idea</div>
                    </div>
                    <div class="card-body mt-4">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('pengaduan.store')}} " method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="Enter Your Issue"
                                            name="issue" value="{{ old('issue')}}" required>
                                        <div class="field-placeholder">Issue</div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <textarea class="form-control" rows="5" placeholder="Enter Your Suggest"
                                            value="{{ old('description')}}" name="description" required></textarea>
                                        <div class=" field-placeholder">Saran <span class="text-danger"></span></div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <textarea class="form-control" rows="5" placeholder="Enter Your Cost/Benefit"
                                            value="{{ old('benefit')}}" name="benefit" required></textarea>
                                        <div class=" field-placeholder">Cost/Benefit <span class="text-danger"></span>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="file" name="file">
                                            <button class="btn btn-outline-primary" type="button" id="file">File
                                                Attachment
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit Form</button>
                                </div>
                            </div>
                            <!-- Row end -->
                        </form>
                    </div>
                </div>
                <!-- Card end -->
            </div>



            <!-- Row end -->

            <!-- Row start -->

            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->

        <!-- App Footer start -->

        <!-- App footer end -->


    </div>
    @endsection