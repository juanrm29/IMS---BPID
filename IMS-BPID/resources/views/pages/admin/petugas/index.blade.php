@extends('layouts.admin')

@section('title')
Add Admin - IMS
@endsection

@section('content')
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">User List</div>
                    <a href="{{ route('petugas.create')}}" style="float:right;" class="btn btn-primary">Add Admin</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <table id="basicExample" class="table custom-table">
                            <thead>
                                <tr>
                                    <th>No.Employee</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Departement</th>
                                    <th>Posisi</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $petugas)
                                <tr>
                                    <td>{{ $petugas->nik }}</td>
                                    <td>{{ $petugas->name }}</td>
                                    <td> {{ $petugas->email }}</td>
                                    <td> {{ $petugas->phone }}</td>
                                    <td> {{ $petugas->departement}}</td>
                                    <td> {{ $petugas->posisi }}</td>
                                    <td> <a class="badge rounded-pill bg-primary">{{ $petugas->roles }}</a></td>
                                    <td>
                                        <form action="{{ route('petugas.destroy', $petugas->id)}}"
                                            onclick="return confirm ('Yakin mau dihapus ?')" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button
                                                class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
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