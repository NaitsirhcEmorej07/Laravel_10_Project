<?php

namespace App\Http\Controllers;

use App\Models\StaffModel;
use App\Models\StaffModelAssociationOrOrganization;
use App\Models\StaffModelDistinctionOrRecognition;
use App\Models\StaffModelEducationalBackground;
use App\Models\StaffModelPersonalInformation;
use App\Models\StaffModelFamilyBackground;
use App\Models\StaffModelNameOfChildren;
use App\Models\StaffModelOiSpecialSkillsAndHobbies;
use App\Models\StaffModelServiceEligibility;
use App\Models\StaffModelTPAttended;
use App\Models\StaffModelWorkExperience;
use App\Models\User;
use Illuminate\Http\Request;

class StaffViewController extends Controller
{
    // public function index()
    // {
    //     $data['staff'] = StaffModel::where('staff_id', 1)->first();
    //     return view('modal_view_staff', $data);

    //     $data_personal_info['staff_personal_info'] = StaffModel::where('staff_personal_info', 1)->first();
    //     return view('modal_view_staff', $data_personal_info);
    // }

    public function index()
    {
        $data = [
            'staff_main_info' => StaffModel::where('staff_id', 1)->first(),
            'staff_personal_info' => StaffModelPersonalInformation::where('staff_id', 1)->first(),
            'staff_family_background' => StaffModelFamilyBackground::where('staff_id', 1)->first(),
            'staff_name_of_children' => StaffModelNameOfChildren::where('staff_id', 1)->get(),
            'staff_educational_background' => StaffModelEducationalBackground::where('staff_id', 1)->get(),
            'staff_service_eligibility' => StaffModelServiceEligibility::where('staff_id', 1)->get(),
            'staff_work_experience' => StaffModelWorkExperience::where('staff_id', 1)->get(),
            'staff_tp_attended' => StaffModelTPAttended::where('staff_id', 1)->get(),
            'staff_oi_special_sills_and_hobbies' => StaffModelOiSpecialSkillsAndHobbies::where('staff_id', 1)->get(),
            'staff_oi_distinction_or_recognition' => StaffModelDistinctionOrRecognition::where('staff_id', 1)->get(),
            'staff_oi_association_or_organization' => StaffModelAssociationOrOrganization::where('staff_id', 1)->get()
        ];









        return view('modal_view_staff', $data);
    }
}
