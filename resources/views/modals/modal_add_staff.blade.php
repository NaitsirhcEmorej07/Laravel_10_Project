<!-- Modal -->
<div class="modal fade" id="modal_add_staff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ADD NEW STAFF</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button style="font-size:15px" class="nav-link active fw-bold " id="nav-general-add-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-general-add" type="button" role="tab"
                            aria-controls="nav-general-add" aria-selected="true">General Information</button>
                        <button style="font-size:15px" class="nav-link fw-bold" id="nav-personal-add-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-personal-add" type="button" role="tab"
                            aria-controls="nav-personal-add" aria-selected="false">Personal Information</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-general-add" role="tabpanel"
                        aria-labelledby="nav-general-add-tab">
                        <div class="border p-3 border border-secondary">
                            GENERAL
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-personal-add" role="tabpanel"
                        aria-labelledby="nav-personal-add-tab">
                        <div class="border p-2">
                            personal
                        </div>
                    </div>


                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
