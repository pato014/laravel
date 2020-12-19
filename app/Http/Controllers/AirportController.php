<?php
namespace App\Http\Controllers;
use App\StudInsert;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StudInsertController extends Controller
{
    
    public function insert(){
        $urlData = getURLList();
        return view('welcome');
    }
    public function create(Request $request){
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$student = new StudInsert;
                $student->first_name = $data['first_name'];
                $student->last_name = $data['last_name'];
				$student->city_name = $data['city_name'];
				$student->email = $data['email'];
				$student->save();
				return redirect('insert')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
    }
}