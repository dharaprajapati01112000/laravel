<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class compnaycontroller extends Controller
{

    public function index()
    {
        $url = url('/company');
        $title = "Company registration form";
        $data = compact('url','title');
        return view('company')->with($data);
    }
    public function register(Request $request){

            $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'website' => 'required'

        ]);
       $company = new Company();
       $company->name = $request['name'];
       $company->email = $request['email'];
       $company->website = $request['website'];
       $company->password = md5($request['password']);
       $company->save();
        return redirect('/company-view');
    }
    public function view(){
        $company = Company::all();
        $data = compact('company');
        return view('company-view')->with($data);

    }
    public function delete($id){
        $company = Company::find($id);
        if(!is_null($company)){
            $company->delete();
        }
        return redirect('company-view');
    }
    public function edit($id) {
        $company = Company::find($id);
        if(is_null($company)) {
            // not found
            return redirect('company-view');
        } else {
            $url = url('/company-view/update') . "/" . $id;
            $title = "Edit Company Data";
            $data = compact('company','url','title');
            return view('company')->with($data);
        }

    }
    public function update($id, Request $request){
        $company = Company::find($id);
        // $company = new company;
        $company->name = $request['name'];
        $company->email = $request['email'];
        $company->website = $request['website'];
        $company->save();
        return redirect('/company-view');
    }
}
