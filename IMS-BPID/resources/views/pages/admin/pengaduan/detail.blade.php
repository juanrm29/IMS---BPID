@extends('layouts.admin')

@section('title')
Detail Improvement
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
                    <div class="card-body">

                        <div class="invoice-container">

                            <div class="invoice-header">
                                <!-- Row start -->
                                <div class="row justify-content-between">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                                        <a href="index.html" class="invoice-logo">
                                            <img src="{{ asset ('backend/img/logo.svg')}}">
                                        </a>
                                    </div>
                                    @foreach($item->details as $ite)
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                                        <address class="text-right">
                                            {{ $ite->name }} <br>
                                            {{ $ite->user_nik }}<br>
                                            {{ $item->user->departement }} <br>
                                            {{ $item->user->email }} <br>
                                        </address>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="invoice-details">
                                        <div class="invoice-nume" style="">
                                            <div class="h6"> <b> Issue</b></div>
                                            <div>{{ $item->issue}}</div>
                                            <div>{{ $ite->created_at->format('l, d F Y - H:i:s') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="50%">Description</th>
                                                <th>Cost/Benefit</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="white-space:pre-wrap; ">
                                                    <p>{{ $item->description}}</p>

                                                </td>
                                                <td style="white-space:pre-wrap; ">
                                                    <p>{{ $item->benefit}}</p>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Row end -->
                            <div class="row gutters">
                                <div class="col-12">

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Penilaian</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>

                                                        <p> @if (empty($nilai))
                                                            Belum ada penilaian
                                                            @else

                                                        <div class="invoice-nume" style="">
                                                            <div class="h7"> <b> Penilaian Satu :
                                                                </b>{{ $nilai->penilaian_satu}}</div>
                                                        </div>
                                                        <div class="invoice-nume" style="">
                                                            <div class="h7"> <b> Penilaian Dua : </b>
                                                                {{ $nilai->penilaian_dua}}</div>
                                                        </div>
                                                        <div class="invoice-nume" style="">
                                                            <div class="h7"> <b> Penilaian Tiga : </b>
                                                                {{ $nilai->penilaian_tiga}}</div>
                                                        </div>
                                                        <div class="invoice-nume" style="">
                                                            <div class="h7"> <b> Penilaian Empat : </b>
                                                                {{ $nilai->penilaian_empat}}</div>
                                                        </div>
                                                        <div class="invoice-nume" style="">
                                                            <div class="h7"> <b> Penilaian Lima : </b>
                                                                {{ $nilai->penilaian_lima}}</div>
                                                        </div>
                                                        <thead>
                                                            <tr>
                                                                <th>Nilai Prioritas</th>

                                                            </tr>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    {{ (($nilai->penilaian_satu) +  ($nilai->penilaian_dua) +  ($nilai->penilaian_tiga) +  ($nilai->penilaian_empat) +  ($nilai->penilaian_lima)) / 5 }}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        </thead>



                                    </div>
                                    @endif</p>
                                    </td>
                                    </tr>

                                    </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-12">

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Tanggapan</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>

                                                        <p> @if (empty($tangap->tanggapan))
                                                            Belum ada tanggapan
                                                            @else

                                                        <div class="invoice-nume" style="">
                                                            <div class="h7"> <b> Priority</b></div>
                                                            <div>{{ $tangap->prioritas}}</div>
                                                        </div>
                                                        <div class="invoice-nume" style="">
                                                            <div class="h7"> <b> Tanggapan</b></div>
                                                            <div style="white-space:pre-wrap;">{{ $tangap->tanggapan}}
                                                            </div>
                                                        </div>

                                    </div>
                                    @endif</p>
                                    </td>
                                    </tr>

                                    </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        @endforeach
                        <!-- Row end -->
                        <div class="row gutters">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-start">
                                    <a href="{{ url('admin/pengaduan/cetak', $item->id)}}"
                                        class=" btn btn-primary">Export
                                        ke PDF</a>
                                    <a href="{{ route('penilaian.show', $item->id)}}" class="btn btn-light ms-1">Berikan
                                        Penilaian</a>
                                    <a href="{{ route('tanggapan.show', $item->id)}}" class="btn btn-light ms-1">Berikan
                                        Tanggapan</a>
                                </div>
                            </div>

                        </div>
                        <!-- Row start -->

                        <!-- Row end -->

                    </div>

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