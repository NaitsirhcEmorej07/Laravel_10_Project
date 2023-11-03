<?php



use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StaffController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', function () {
//     return view('menu_list_of_staff');   
// });

Route::get('/', [StaffController::class, 'index']);

Route::get('/staff_list', [StaffController::class, 'index']);

Route::get('/staff_info/{staff_id}', [StaffController::class, 'get_staff_info']);
