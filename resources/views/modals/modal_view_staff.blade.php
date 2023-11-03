<div class="modal fade" id="modal_view_staff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-start">
                <img style="border-radius: 50%; border: 1px solid black;" class="align-self-center"
                    src="{{ asset('multimedia/me2.png') }}" alt="" width="160" height="150" class="">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <p class="lh-sm align-self-center">
                    <label class="fw-bold fs-5">{{ $staff_data->first_name }} {{ $staff_data->middle_name }}
                        {{ $staff_data->last_name }}</label> <br>
                    <label class="fs-6">{{ $staff_data->unifast_office }}</label> <br>
                    <label class="fs-6">{{ $staff_data->unit }}</label> <br>
                    <label class="fs-6">{{ $staff_data->designation }} -
                        {{ $staff_data->employment_type }}</label> <br>
                    <label class="fs-6">ID NUMBER: {{ $staff_data->id_no }}</label> <br>
                </p>

                <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button style="font-size:15px" class="nav-link active fw-bold " id="nav-personal-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-personal" type="button" role="tab"
                            aria-controls="nav-personal" aria-selected="true">Personal Information</button>
                        <button style="font-size:15px" class="nav-link fw-bold" id="nav-family-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-family" type="button" role="tab"
                            aria-controls="nav-family" aria-selected="false">Family Background</button>
                        <button style="font-size:15px" class="nav-link fw-bold" id="nav-education-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-education" type="button" role="tab"
                            aria-controls="nav-education" aria-selected="false">Educational Background</button>
                        <button style="font-size:15px" class="nav-link fw-bold" id="nav-contact-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab"
                            aria-controls="nav-contact" aria-selected="false">Service Eligibility</button>
                        <button style="font-size:15px" class="nav-link fw-bold" id="nav-work-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-work" type="button" role="tab" aria-controls="nav-work"
                            aria-selected="false">Work Experience</button>
                        <button style="font-size:15px" class="nav-link fw-bold" id="nav-trainings-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-trainings" type="button" role="tab"
                            aria-controls="nav-trainings" aria-selected="false">Training Programs Attended</button>
                        <button style="font-size:15px" class="nav-link fw-bold" id="nav-other-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-other" type="button" role="tab" aria-controls="nav-other"
                            aria-selected="false">Other Information</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-personal" role="tabpanel"
                        aria-labelledby="nav-personal-tab">
                        <div class="border p-2">
                            <div class="row">
                                <div class="col-4"><label>Date of Birth:</label></div>
                                <div class="col-7">
                                    <label>{{ date('F d, Y', strtotime($staff_data->date_of_birth)) }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Place of Birth:</label></div>
                                <div class="col-7"><label>{{ $staff_data->place_of_birth }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Gender:</label></div>
                                <div class="col-7"><label>{{ $staff_data->gender }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Civil Status:</label></div>
                                <div class="col-7"><label>{{ $staff_data->civil_status }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Height (m):</label></div>
                                <div class="col-7"><label>{{ $staff_data->height }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Weight (kg):</label></div>
                                <div class="col-7"><label>{{ $staff_data->weight }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Blood Type:</label></div>
                                <div class="col-7"><label>{{ $staff_data->blood_type }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>GSIS No:</label></div>
                                <div class="col-7"><label>{{ $staff_data->gsis_no }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>PAGIBIG No:</label></div>
                                <div class="col-7"><label>{{ $staff_data->pagibig_no }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>PHILHEALTH No:</label></div>
                                <div class="col-7"><label>{{ $staff_data->philhealth_no }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>SSS No:</label></div>
                                <div class="col-7"><label>{{ $staff_data->sss_no }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>TIN No:</label></div>
                                <div class="col-7"><label>{{ $staff_data->tin_no }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Citizenship:</label></div>
                                <div class="col-7"><label>{{ $staff_data->citizenship }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Residential Address:</label></div>
                                <div class="col-7"><label>{{ $staff_data->residential_address }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Permanent Address:</label></div>
                                <div class="col-7"><label>{{ $staff_data->permanent_address }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Telephone No:</label></div>
                                <div class="col-7"><label>{{ $staff_data->telephone_no }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Mobile No:</label></div>
                                <div class="col-7"><label>{{ $staff_data->mobile_no }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Email Address:</label></div>
                                <div class="col-7">
                                    <label>{{ $staff_data->email_address }}</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-family" role="tabpanel" aria-labelledby="nav-family-tab">
                        <div class="border p-2">
                            <div class="row">
                                <div class="col-4"><label>Spouse Name:</label></div>
                                <div class="col-7"><label>{{ $staff_data->spouse_name }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Occupation:</label></div>
                                <div class="col-7"><label>{{ $staff_data->spouse_occupation }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Employer/Business Name:</label></div>
                                <div class="col-7">
                                    <label>{{ $staff_data->spouse_employer_or_business }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Business Address:</label></div>
                                <div class="col-7">
                                    <label>{{ $staff_data->spouse_employer_or_business_address }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Contact Number:</label></div>
                                <div class="col-7">
                                    <label>{{ $staff_data->spouse_contact_number }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label></label></div>
                                <div class="col-7"><label></label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Fathers Name:</label></div>
                                <div class="col-7"><label>{{ $staff_data->fathers_name }}</label></div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label>Mothers Maiden Name:</label></div>
                                <div class="col-7"><label>{{ $staff_data->mothers_maiden_name }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4"><label></label></div>
                                <div class="col-7"><label></label></div>
                            </div>
                            <div class="row text-center">
                                <div class="col-12 fw-bold"><label>Name of Children</label></div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Full name</th>
                                            <th>Date of Birth</th>
                                        </tr>
                                        {{-- @foreach ($name_of_children as $row)
                                                <tr>
                                                    <td>{{ $row->full_name }}</td>
                                                    <td>{{ $row->date('F d, Y', strtotime($date_of_birth)) }}</td>
                                                </tr>
                                            @endforeach --}}


                                        @foreach ($staff_name_of_children as $row)
                                            <tr>
                                                <td>{{ $row->full_name }}</td>
                                                <td>{{ date('F d, Y', strtotime($row->date_of_birth)) }}</td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-education" role="tabpanel"
                        aria-labelledby="nav-education-tab">
                        <div class="table-responsive p-1 mt-1">
                            <table class="table table-striped align-middle">
                                <tr>
                                    <th style="font-size:14px; text-align:center">Level</th>
                                    <th style="font-size:14px; text-align:center">Name of School</th>
                                    <th style="font-size:14px; text-align:center">Degree/Course</th>
                                    <th style="font-size:14px; text-align:center">Highest Level/ Units Earned</th>
                                    <th style="font-size:14px; text-align:center">Yr. Graduated</th>
                                    <th style="font-size:14px; text-align:center">Scholarship/ Academic Honors</th>
                                    @foreach ($staff_educational_background as $row)
                                <tr>
                                    <td style="text-align:center">{{ $row->level }}</td>
                                    <td style="text-align:center">{{ $row->school_name }}</td>
                                    <td style="text-align:center">{{ $row->degree_or_course }}</td>
                                    <td style="text-align:center">{{ $row->highest_level_or_units_earned }}</td>
                                    <td style="text-align:center">{{ $row->year_graduated }}</td>
                                    <td style="text-align:center">{{ $row->scholarship_or_academic_honors }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="table-responsive p-1 mt-1">
                            <table class="table table-striped align-middle">
                                <tr>
                                    <th style="font-size:14px; text-align:center; width:23%">Eligibility</th>
                                    <th style="font-size:14px; text-align:center">Rating</th>
                                    <th style="font-size:14px; text-align:center">Date of Examination</th>
                                    <th style="font-size:14px; text-align:center">Place of Examination</th>
                                    <th style="font-size:14px; text-align:center">License No</th>
                                    <th style="font-size:14px; text-align:center">Date of Validity</th>
                                </tr>
                                @foreach ($staff_service_eligibility as $row)
                                    <tr>
                                        <td style="text-align:center">{{ $row->eligibility }}</td>
                                        <td style="text-align:center">{{ $row->rating }}</td>
                                        <td style="text-align:center">{{ $row->date_of_examination }}</td>
                                        <td style="text-align:center">{{ $row->place_of_examination }}</td>
                                        <td style="text-align:center">{{ $row->license_no }}</td>
                                        <td style="text-align:center">{{ $row->date_of_validity }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-work" role="tabpanel" aria-labelledby="nav-work-tab">
                        <div class="table-responsive p-1 mt-1">
                            <table class="table table-striped align-middle">
                                <tr>
                                    <th style="font-size:14px; text-align:center">From</th>
                                    <th style="font-size:14px; text-align:center">To</th>
                                    <th style="font-size:14px; text-align:center; width:18%">Position Title</th>
                                    <th style="font-size:14px; text-align:center">Company/Agency</th>
                                    <th style="font-size:14px; text-align:center">Monthly Salary</th>
                                    <th style="font-size:14px; text-align:center">Status of Appointment</th>
                                    <th style="font-size:14px; text-align:center">Gov Service?</th>
                                </tr>
                                @foreach ($staff_work_experience as $row)
                                    <tr>
                                        <td style="text-align:center">{{ $row->from }}</td>
                                        <td style="text-align:center">{{ $row->to }}</td>
                                        <td style="text-align:center">{{ $row->position_title }}</td>
                                        <td style="text-align:center">{{ $row->company_or_agency }}</td>
                                        <td style="text-align:center">P{{ $row->monthly_salary }}</td>
                                        <td style="text-align:center">{{ $row->status_of_appointment }}</td>
                                        <td style="text-align:center">{{ $row->is_government_service }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-trainings" role="tabpanel"
                        aria-labelledby="nav-trainings-tab">
                        <div class="table-responsive p-1 mt-1">
                            <table class="table table-striped align-middle">
                                <tr>
                                    <th style="font-size:14px; text-align:center">Training Programs Title</th>
                                    <th style="font-size:14px; text-align:center">From</th>
                                    <th style="font-size:14px; text-align:center">To</th>
                                    <th style="font-size:14px; text-align:center">No of Hours</th>
                                    <th style="font-size:14px; text-align:center">Type</th>
                                    <th style="font-size:14px; text-align:center">Conducted/Sponsored By</th>
                                </tr>
                                @foreach ($staff_tp_attended as $row)
                                    <tr>
                                        <td style="font-size:14px; text-align:center">
                                            {{ $row->training_or_program_title }}
                                        </td>
                                        <td style="font-size:14px; text-align:center">{{ $row->from }}</td>
                                        <td style="font-size:14px; text-align:center">{{ $row->to }}</td>
                                        <td style="font-size:14px; text-align:center">{{ $row->no_of_hours }}</td>
                                        <td style="font-size:14px; text-align:center">{{ $row->type }}</td>
                                        <td style="font-size:14px; text-align:center">
                                            {{ $row->conducted_or_sponseored_by }}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
                        <div class="row table-responsive p-1 mt-1">
                            <div class="col-4 ">
                                <table class="table table-striped align-middle">
                                    <tr>
                                        <th style="font-size:14px; text-align:center; height: 60px; max-height: 60px;">
                                            Special Skills and Hobbies</th>
                                    </tr>
                                    @foreach ($staff_oi_special_sills_and_hobbies as $row)
                                        <tr>
                                            <td style="font-size:14px; text-align:center">
                                                {{ $row->special_skills_and_hobbies }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>

                            <div class="col-4 ">
                                <table class="table table-striped align-middle">
                                    <tr>
                                        <th style="font-size:14px; text-align:center;height: 60px; max-height: 60px;">
                                            Non Academic Distinction / Recognition</th>
                                    </tr>
                                    @foreach ($staff_oi_distinction_or_recognition as $row)
                                        <tr>
                                            <td style="font-size:14px; text-align:center">
                                                {{ $row->distinction_or_recognition }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>

                            <div class="col-4 ">
                                <table class="table table-striped align-middle">
                                    <tr>
                                        <th style="font-size:14px; text-align:center;height: 60px; max-height: 60px;">
                                            Association / Organization</th>
                                    </tr>
                                    @foreach ($staff_oi_association_or_organization as $row)
                                        <tr>
                                            <td style="font-size:14px; text-align:center">
                                                {{ $row->association_or_organization }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer justify-content-start">
                                                                                                    </div> -->
        </div>
    </div>
</div>
