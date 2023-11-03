//function for get_staff_info
const btn_stf = document.querySelectorAll('.btn_stf');

btn_stf.forEach(btn_staff_id => {
    btn_staff_id.onclick = function () {
        fetch_staff_modal(this.value).then(modal_html => {
            document.getElementById('modals_staff_view').innerHTML = modal_html;//paglagay ng modal sa div
            const mod_staff_info = new bootstrap.Modal('#modal_view_staff'); //pagsabi na yung element na may ID na modal_view_staff ay isang modal
            mod_staff_info.show();
        });
    }
});

async function fetch_staff_modal(staff_id) {
    const response = await fetch('/staff_info/' + staff_id);
    return response.text();
}










