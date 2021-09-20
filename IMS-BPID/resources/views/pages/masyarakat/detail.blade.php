@extends('layouts.masyarakat')

@section('title')
Data Improvement - IMS
@endsection
@section('content')

<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Data Improvement</div>
                    <a href="{{ url('user/add')}}" style="float:right;" class="btn btn-primary">Add Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basicExample" class="table custom-table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>No. Employee</th>
                                    <th>Issue</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->name}}</td>
                                    <td> {{ $item->user_nik }}</td>
                                    <td> {{ $item->issue}}</td>
                                    <td>{{ $item->created_at->format('l, d F Y - H:i:s') }}</td>
                                    @if($item->status =='Belum di Proses')
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
                                            {{ $item->status }}
                                        </span>
                                    </td>
                                    @elseif ($item->status =='Sedang Di Nilai')
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
                                            {{ $item->status }}
                                        </span>
                                    </td>
                                    @else ($item->status =='Selesai')
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                                            {{ $item->status }}
                                        </span>
                                    </td>
                                    @endif
                                    <td>
                                        <a href="{{ route('pengaduan.show', $item->id)}} "
                                            class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Detail">

                                            <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                    </td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center text-gray-400">
                                        Data Kosong
                                    </td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Card end -->
        </div>
    </div>
    <!-- Row end -->

</div>

@endsection