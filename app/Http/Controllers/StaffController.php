<?php

namespace App\Http\Controllers;
use App\Models\StaffModel;
use App\Models\StaffModelNameOfChildren;
use App\Models\StaffModelEducationalBackground;
use App\Models\StaffModelServiceEligibility;
use App\Models\StaffModelWorkExperience;
use App\Models\StaffModelTPAttended;
use App\Models\StaffModelOiSpecialSkillsAndHobbies;
use App\Models\StaffModelDistinctionOrRecognition;
use App\Models\StaffModelAssociationOrOrganization;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $data['staff_list_data'] = StaffModel::all();
        return view('menu_list_of_staff', $data);
    }


    public function get_staff_info($staff_id)
    {
        //ONE QUERY INSTEAD OF MULTIPLE USING JOIN3
        $data['staff_data'] = StaffModel::select(
            'tbl_unifast_staff_main_information.*',
            'tbl_unifast_staff_personal_information.*',
            'tbl_unifast_staff_family_background.*'
        )
            ->leftJoin('tbl_unifast_staff_personal_information', 'tbl_unifast_staff_main_information.staff_id', '=', 'tbl_unifast_staff_personal_information.staff_id')
            ->leftJoin('tbl_unifast_staff_family_background', 'tbl_unifast_staff_main_information.staff_id', '=', 'tbl_unifast_staff_family_background.staff_id')
            ->where('tbl_unifast_staff_main_information.staff_id', $staff_id)
            ->first();

        $data['staff_name_of_children'] = StaffModelNameOfChildren::where('staff_id', $staff_id)->get();
        $data['staff_educational_background'] = StaffModelEducationalBackground::where('staff_id', $staff_id)->get();
        $data['staff_service_eligibility'] = StaffModelServiceEligibility::where('staff_id', $staff_id)->get();
        $data['staff_work_experience'] = StaffModelWorkExperience::where('staff_id', $staff_id)->get();
        $data['staff_tp_attended'] = StaffModelTPAttended::where('staff_id', $staff_id)->get();
        $data['staff_oi_special_sills_and_hobbies'] = StaffModelOiSpecialSkillsAndHobbies::where('staff_id', $staff_id)->get();
        $data['staff_oi_distinction_or_recognition'] = StaffModelDistinctionOrRecognition::where('staff_id', $staff_id)->get();
        $data['staff_oi_association_or_organization'] = StaffModelAssociationOrOrganization::where('staff_id', $staff_id)->get();

        // echo json_encode($data);
        return view('modals.modal_view_staff', $data);
    }
}

