@extends('layouts.my_layout')

@section('content')

    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_view_staff"><i
            class="bi bi-eye"></i></button>


            
    <div class="modal fade" id="modal_view_staff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-start">
                    <img style="border-radius: 50%; border: 1px solid black;" class="align-self-center" src="assets/me2.png"
                        alt="" width="160" height="150" class="">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="lh-sm align-self-center">
                        <label class="fw-bold fs-5">sample</label> <br>
                        <label class="fs-6">sample</label> <br>
                        <label class="fs-6">sample</label> <br>
                        <label class="fs-6">sample</label> <br>
                        <label class="fs-6">sample</label> <br>
                    </p>

                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button style="font-size:15px" class="nav-link active fw-bold " id="nav-home-tab"
                                data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                                aria-controls="nav-home" aria-selected="true">Personal Information</button>
                            <button style="font-size:15px" class="nav-link fw-bold" id="nav-profile-tab"
                                data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab"
                                aria-controls="nav-profile" aria-selected="false">Family Background</button>
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
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="border p-2">
                                <div class="row">
                                    <div class="col-4"><label>Date of Birth:</label></div>
                                    <div class="col-7">
                                        <label>sample</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Place of Birth:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Gender:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Civil Status:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Height (m):</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Weight (kg):</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Blood Type:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>GSIS No:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>PAGIBIG No:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>PHILHEALTH No:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>SSS No:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>TIN No:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Citizenship:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Residential Address:</label></div>
                                    <div class="col-7"><label>sample</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Permanent Address:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Telephone No:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Mobile No:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Email Address:</label></div>
                                    <div class="col-7">
                                        <label>sample</label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="border p-2">
                                <div class="row">
                                    <div class="col-4"><label>Spouse Name:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Occupation:</label></div>
                                    <div class="col-7"><label>sample</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Employer/Business Name:</label></div>
                                    <div class="col-7">
                                        <label>sample</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Business Address:</label></div>
                                    <div class="col-7">
                                        <label>sample</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Contact Number:</label></div>
                                    <div class="col-7">
                                        <label>sample</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label></label></div>
                                    <div class="col-7"><label></label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Fathers Name:</label></div>
                                    <div class="col-7"><label>sample</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-4"><label>Mothers Maiden Name:</label></div>
                                    <div class="col-7"><label>sample</label>
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
                                                <tr>
                                                    sample
                                                </tr>

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
                                    </tr>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                        </tr>
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
                                        <tr>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                        </tr>
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
                                        <tr>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sample</td>
                                            <td style="text-align:center">sampl</td>
                                        </tr>
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
                                        <tr>
                                            <td style="font-size:14px; text-align:center">
                                                sample</td>
                                            <td style="font-size:14px; text-align:center">sample</td>
                                            <td style="font-size:14px; text-align:center">sample</td>
                                            <td style="font-size:14px; text-align:center">sample</td>
                                            <td style="font-size:14px; text-align:center">sample</td>
                                            <td style="font-size:14px; text-align:center">
                                                sample</td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
                            <div class="row table-responsive p-1 mt-1">
                                <div class="col-4 ">
                                    <table class="table table-striped align-middle">
                                        <tr>
                                            <th style="font-size:14px; text-align:center; height: 60px; max-height: 60px;">Special Skills and Hobbies</th>
                                        </tr>
                                            <tr>
                                                <td style="font-size:14px; text-align:center">
                                                    sample
                                                </td>
                                            </tr>
                                    </table>
                                </div>

                                <div class="col-4 ">
                                    <table class="table table-striped align-middle">
                                        <tr>
                                            <th style="font-size:14px; text-align:center;height: 60px; max-height: 60px;">Non Academic Distinction / Recognition</th>
                                        </tr>
                                            <tr>
                                                <td style="font-size:14px; text-align:center">
                                                    sample
                                                </td>
                                            </tr>
                                    </table>
                                </div>

                                <div class="col-4 ">
                                    <table class="table table-striped align-middle">
                                        <tr>
                                            <th style="font-size:14px; text-align:center;height: 60px; max-height: 60px;">Association / Organization</th>
                                        </tr>
                                            <tr>
                                                <td style="font-size:14px; text-align:center">
                                                    sample
                                                </td>
                                            </tr>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // This code will trigger the modal on page load    
        $(document).ready(function() {
            $('#modal_view_staff').modal('show');
        });
    </script>
    
@endsection
