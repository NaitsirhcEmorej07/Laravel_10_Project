@extends('layouts.my_layout')

@section('content')
{{-- @include('modal_view_staff') --}}

    <div class="table-responsive p-3 mt-3">
        <table id="staff_list_table" class="table table-striped align-middle">
            <thead>
                <tr>
                    <th style="font-size:16px; text-align:center"></th>
                    <th style="font-size:16px; text-align:center">Full Name</th>
                    <th style="font-size:16px; text-align:center">Designation</th>
                    <th style="font-size:16px; text-align:center">Appointment Status</th>
                    <th style="font-size:16px; text-align:center">Division/Unit</th>
                    <th style="font-size:16px; text-align:center">Status</th>
                    <th style="font-size:16px; text-align:center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-size:14px; text-align:center">
                        <img style="border-radius: 50%; border: 1px solid black;" class="align-self-center"
                        src="{{ asset('multimedia/me2.png') }}" alt="" width="100" height="100">
                    </td>
                    <td style="font-size:15px; text-align:center">Christian Jerome Marfe Espeña</td>
                    <td style="font-size:15px; text-align:center">Project Technical Staff I</td>
                    <td style="font-size:15px; text-align:center">C.O.S</td>
                    <td style="font-size:15px; text-align:center">ICT Unit</td>
                    <td style="font-size:15px; text-align:center">Active</td>
                    <td style="font-size:15px; text-align:center">
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_view_staff"><i
                                class="bi bi-eye"></i></button>
                                
                        <button class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                    </td>
                </tr>
                <!-- <tr>
                    <td style="font-size:14px; text-align:center">
                        <img style="border-radius: 50%; border: 1px solid black;" class="align-self-center"
                        src="{{ asset('multimedia/CONANAN.png') }}" alt="" width="100" height="100">
                    </td>
                    <td style="font-size:15px; text-align:center">Ramon Jacinto Diaz Conanan</td>
                    <td style="font-size:15px; text-align:center">Project Technical Staff II</td>
                    <td style="font-size:15px; text-align:center">C.O.S</td>
                    <td style="font-size:15px; text-align:center">ICT Unit</td>
                    <td style="font-size:15px; text-align:center">Active</td>
                    <td style="font-size:15px; text-align:center">
                        <button class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:14px; text-align:center">
                        <img style="border-radius: 50%; border: 1px solid black;" class="align-self-center"
                        src="{{ asset('multimedia/BOHOL.png') }}" alt="" width="100" height="100">
                    </td>
                    <td style="font-size:15px; text-align:center">Froilan Lucas Bohol</td>
                    <td style="font-size:15px; text-align:center">Project Technical Staff I</td>
                    <td style="font-size:15px; text-align:center">C.O.S</td>
                    <td style="font-size:15px; text-align:center">ICT Unit</td>
                    <td style="font-size:15px; text-align:center">Active</td>
                    <td style="font-size:15px; text-align:center">
                        <button class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>

   

@endsection
