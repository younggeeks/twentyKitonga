<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
}
