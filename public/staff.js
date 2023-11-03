const modal_add_staff = new bootstrap.Modal('#modal_add_staff');

//function for viewing modal_staff_add
const btn_add_staff = document.getElementById('btn_staff_add');
btn_add_staff.onclick = function () {
    modal_add_staff.show();
}

//function for get_staff_info
const btn_stf = document.querySelectorAll('.btn_stf');
btn_stf.forEach(btn_staff_id => {
    btn_staff_id.onclick = function () {
        fetch_staff_modal(this.value).then(modal_html => {
            document.getElementById('modals_view_staff').innerHTML = modal_html;//paglagay ng modal sa div
            const mod_staff_info = new bootstrap.Modal('#modal_view_staff'); //pagsabi na yung element na may ID na modal_view_staff ay isang modal
            mod_staff_info.show();
        });
    }
});

async function fetch_staff_modal(staff_id) {
    const response = await fetch('/staff_info/' + staff_id);
    return response.text();
}


