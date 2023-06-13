<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class employeecontroller extends Controller
{
    //
    public function index()
    {
        $company = Company::all();
        // echo "<pre>";
        // print_r($company);
    // return view('note/create', compact('doas'));
        $url = url('/employee');
        $title = "Employee registration form";
        $data = compact('url','title','company');
        return view('employee')->with($data);
    }
    public function register(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'website' => 'required',
            'password' => 'required'

        ]);
        $employee = new Employee();
        $employee->fname = $request['fname'];
        $employee->lname = $request['lname'];
        $employee->email = $request['email'];
        $employee->website = $request['website'];
        $employee->password = md5($request['password']);
        $employee->unsignedBigInteger('companyy_id');
        $employee->foreign('companyy_id')->references('company_id')->on('company');
        $employee->save();
        return redirect('/employee-view');
    }
    public function view(){
        $employee = Employee::all();
        $data = compact('employee');
        return view('emplyee-view')->with($data);

    }
    public function delete($id){
        $employee = Employee::find($id);
        if(!is_null($employee)){
            $employee->delete();
        }
        return redirect('employee-view');
    }
    public function edit($id) {
        $employee = Employee::find($id);
        if(is_null($employee)) {
            // not found
            return redirect('employee-view');
        } else {
            $url = url('/employee-view/update') . "/" . $id;
            $title = "Edit employee Data";
            $data = compact('employee','url','title');
            return view('employee')->with($data);
        }

    }
    public function update($id, Request $request){
        $employee = Employee::find($id);
        // $employee = new employee;
        $employee->fname = $request['fname'];
        $employee->lname = $request['lname'];
        $employee->email = $request['email'];
        $employee->website = $request['website'];
        $employee->save();
        return redirect('/employee-view');
    }
}
