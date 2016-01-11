@extends("layout.master")
@section("content")
    <div class="container">
        <div class="content">
            <div class="title">
                <h1>
                    Company Details
                </h1>
            </div>


            <div class="row-fluid">
                <div class="span12" id="content">
                    <div><p><img src="{{asset("uploads/".$company->logo)}}" width="160" height="160"></p>
                        <div id="details" class="span7">
                            <div>

                                <h3>{{$company->name}}</h3>
                                {{--@if($customer->)--}}
                                {{--<h4>President and CEO</h4>--}}
                                <br>
                                <table class="table table-striped">

                                    <tbody>
                                    <tr>
                                        <td> Company VRN : </td>
                                        <td><i class="icon-home"></i> {{$company->vrn}}</td>
                                    </tr>
                                    <tr>
                                        <td>T.I.N Number:</td>
                                        <td><i class="icon-headphones"></i> {{$company->tin}}</td>
                                    </tr>
                                    <tr>
                                        <td>P.O BOX :</td>
                                        <td><i class="icon-headphones"></i> {{$company->box}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td><i class="icon-headphones"></i> {{$company->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone :</td>
                                        <td><i class="icon-headphones"></i> {{$company->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td><i class="icon-headphones"></i>{{$company->address}} </td>
                                    </tr>
                                    <tr>
                                        <td>Registered:</td>
                                        <td><i class="icon-envelope"></i>{{$company->created_at->diffForHumans()}}</td>
                                    </tr>
                                    {{--<tr>--}}
                                    {{--<td>Twitter:</td>--}}
                                    {{--<td><i class="icon-retweet"></i> <a href="">@fakejking</a></td>--}}
                                    {{--</tr>--}}
                                    </tbody>
                                </table>


                            </div>
                        </div>

                    </div>
                </div>

            </div>

            {{--happa kazi tu--}}

            @if(Auth::check()&&Entrust::hasRole('estimator'))
                <div class="container">
                    <div class="content">
                        <div class="title">
                            <h2>
                                Estimations Done By {{$company->name}}
                            </h2>
                        </div>

                        <table class="table table-bordered">
                            <tr>
                                <th>Job Type</th>
                                <th>Customer</th>
                                <th>Date</th>
                            </tr>
                            @foreach($company->jobs as $job)
                                <tr>
                                    <td><a href="{{URL::to("test/view-job",$job->id)}}">{{$job->type_of_product}}</a></td>
                                    <td><a href="{{URL::to("test/view-job",$job->id)}}">{{$job->customer->full_name}}</a></td>
                                    <td><a href="{{URL::to("test/view-job",$job->id)}}">{{$job->created_at->format("Y-M")}}</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
        </div>
                @endif
        </div>
    </div>
    </div>
@stop
