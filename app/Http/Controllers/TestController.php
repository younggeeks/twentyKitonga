<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use App\Job;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Zizaco\Entrust\Entrust;

class TestController extends Controller
{

    public function __construct(Entrust $entrust,Auth $auth)
    {
        $this->entrust=$entrust;
        $this->auth=$auth;
    }

    public function getIndex()
    {
        return view("welcome");
    }

    public function getCustomers()
    {
        $private=Company::where("id",Auth::user()->company_id)->with(
            [
                'customers'=> function($q) {
          $q->whereNull("user_id");
        }])->first();


      // dd($private);


        $public=Company::where("id",Auth::user()->company_id)->with(
            [
                'customers'=> function($q) {
          $q->whereNotNull("user_id");
        }])->first();

        return view("customers",[
            "privates"=>$private,
            "publics"=>$public
        ]);
    }

    public function getViewCustomer($id)
    {
        $customer=Customer::where("id",$id)->with("companies")
            ->with("user")->with(
        [
            'jobs'=> function($q) {
                $q->where("company_id",Auth::user()->company_id);
            }])
            ->first();
        $total=Job::where("customer_id",$id)->count();

        return view("customer",[
            "customer"=>$customer,
            "total"=>$total
        ]);
    }

    public function getViewJob($id)
    {
        $job=Job::where("id",$id)->with(["customer","company"])->first();
        return view("job",[
            "job"=>$job
        ]);
    }

    public function getViewCompany($id)
    {
        if(Auth::user()->company_id!=$id &&!$this->entrust->hasRole("super_admin")){
            return "You are Not Authrized to View Any Other Company's Profile ";
        }
        $company=Company::where("id",$id)->with([
            "customers"
        ])->first();

        return view("company",[
            "company"=>$company
        ]);
    }


    public function getLogin1()
    {
        Auth::attempt([
              "email"=> "samjunior@kiu.ac.tz",
            "password"=>123456
        ]);
    }


    public function getLogin2()
    {
        Auth::attempt([
           "email"=> "athuman@yumai.com",
            "password"=>123456
        ]);
    }

    public function getLogout()
    {
        Auth::logout();
    }

    public function getJobs()
    {

        $jobs=Job::where("company_id",Auth::getUser()->company_id)->with(["company","customer"]);

        return view("jobs",[
           "jobs"=>$jobs
        ]);
    }



}
