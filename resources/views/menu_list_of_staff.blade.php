@extends('layouts.my_layout')
@section('content')
    @include('modals.modal_add_staff')
    <div id="modals_view_staff"></div>


    <div class="container-fluid d-flex justify-content-end">
        <button id="btn_staff_add" class="btn btn-primary btn-sm mt-2 p-1"><i class="bi bi-person-add"></i> Add New
            Staff</button>
    </div>

    <div class="container-fluid table-responsive p-3 mt-3">
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
                @foreach ($staff_list_data as $key => $row)
                    <tr>
                        <td style="font-size:15px; text-align:center">
                            <img style="border-radius: 50%; border: 1px solid black;" class="align-self-center"
                                src="{{ asset('multimedia/me2.png') }}" alt="" width="100" height="100">
                        </td>
                        <td style="font-size:15px; text-align:center">{{ $row->first_name }} {{ $row->middle_name }}
                            {{ $row->last_name }}</td>
                        <td style="font-size:15px; text-align:center">{{ $row->designation }}</td>
                        <td style="font-size:15px; text-align:center">{{ $row->employment_type }}</td>
                        <td style="font-size:15px; text-align:center">{{ $row->unit }}</td>
                        <td style="font-size:15px; text-align:center">{{ $row->status }}</td>
                        <td style="font-size:15px; text-align:center">
                            <button id="btn_stf_{{ $key }}" value={{ $row->staff_id }}
                                class="btn btn-primary btn-sm btn_stf"><i class="bi bi-eye"></i></button>

                            <button class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
