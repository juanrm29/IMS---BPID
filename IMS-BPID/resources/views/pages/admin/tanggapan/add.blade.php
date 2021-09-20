@extends('layouts.admin')

@section('title')
Tanggapan
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
                        <div class="card-title">Tanggapan Improvement Idea</div>
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

                        <form action="{{ route('tanggapan.store')}} " method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="pengaduan_id" value="{{ $item->id }} ">
                            <div class="field-wrapper">
                                <select class="select-multiple js-states" name="prioritas" title="Select User Role"
                                    data-live-search="true" name="prioritas">
                                    <option value="" selected="" disabled="">Select Priority</option>
                                    <option value="L0">L0</option>
                                    <option value="L1">L1</option>
                                    <option value="L2">L2</option>
                                    <option value="L3">L3</option>
                                    <option value="L4">L4</option>
                                </select>
                                <div class="field-placeholder">Prioritas</div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="field-wrapper">

                                    <textarea class="form-control" rows="5" type="text" placeholder="Isi Tanggapan Anda"
                                        value="{{ old('description')}}" name="tanggapan"></textarea>
                                    <div class=" field-placeholder">Tanggapan <span class="text-danger"></span></div>
                                </div>
                            </div>

                            <div class="field-wrapper">
                                <select class="select-multiple js-states" name="status" title="Select Status"
                                    data-live-search="true" name="status">
                                    <option value="" selected="" disabled="">Select Status</option>
                                    <option value="Belum di Proses">Belum di Proses</option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                                <div class="field-placeholder">Status</div>
                            </div>


                            <button type="submit"
                                class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Tanggapi
                            </button>

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