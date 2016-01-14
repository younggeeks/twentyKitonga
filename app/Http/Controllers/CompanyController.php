<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function getViewCompany()
    {

        $id=Auth::user()->company_id;
        if(Auth::user()->company_id!=$id &&!$this->entrust->hasRole("super_admin")){
            return "You are Not Authrized to View Any Other Company's Profile ";
        }
        $company=Company::where("id",$id)->with([
            "customers","jobs"
        ])->first();



        return view("company_profile.company_profile",[
            "company"=>$company,
            "estimators"=>User::where("company_id",Auth::user()->company_id)->count(),
            "jobs"=>Job::where("company_id",Auth::user()->company_id)->count(),
            "customers"=>$company->customers->count(),
            "estimatorz"=>User::where("company_id",Auth::user()->company_id)->get()
        ]);
    }

    public function postRegisterCompany(Request $request)
    {

        $validator=Validator::make($request->except("__token"),[
            "name"=>"required",
            "email"=>"required|email",
            "tin"=>"required",
            "vrn"=>"required",
            "box"=>"required",
            "address"=>"required",
            "phone"=>"required",
            "logo"=>"required|image",
            "password"=>"required|confirmed",
            "password_confirmation"=>"required"
        ]);

        if($validator->passes()){


            $data=$request->all();
            //registering the company/adding to db
            $company=Company::create([
                "name"=>$data['name'],
                "tin"=>$data['tin'],
                "box"=>$data['box'],
                "address"=>$data['address'],
                "phone"=>$data['phone'],
                "logo"=>$data['logo'],
                "vrn"=>$data['vrn'],
                "email"=>$data['email'],
                "status"=>"pending"
            ]);



            $user=User::create([
                "email"=>$data['email'],
                "password"=>Hash::make($data["password"]),
                "name"=>$data["name"],
                "company_id"=>$company->id
            ]);

            $role=Role::find(4);
            $user->attachRole($role);

            $log=Auth::login($user);

            if($log){
                return Redirect::to("/")->with("success","You are Now Registered and Logged In! \n please wait for Confirmation Email before you can access full system");
            }
        }else{
            return Redirect::back()->withErrors($validator)->withInput();
        }


    }

    public function getRegister()
    {
        return view("company_profile.company_information");
    }

    public function getView($id)
    {
        $company= $private=Company::where("id",$id)->with(
            [
                'customers'=> function($q) {
                    $q->whereNull("user_id");
                }])->first();
    }
}
