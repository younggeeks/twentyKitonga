@extends("layout.master")
@section("content")
    <div class="container">
        <div class="content">
            <div class="title">
                <h1>
                    Customer Details
                </h1>
            </div>


            <div class="row-fluid">
                <div class="span12" id="content">
                    <div>
                        <div id="details" class="span7">
                            <div>

                                <h3>Customer Name: {{$customer->full_name}}</h3>
                                <h3>Total Jobs: {{$total}}</h3>

                                {{--@if($customer->)--}}
                                {{--<h4>President and CEO</h4>--}}
                                <br>
                                <table class="table table-striped">

                                    <tbody>
                                    <tr>
                                        <td> Phone:</td>
                                        <td><i class="icon-home"></i> {{$customer->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td><i class="icon-headphones"></i> {{$customer->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Box:</td>
                                        <td><i class="icon-envelope"></i> <a
                                                    href="mailto:jking@fakemail.com">{{$customer->box}}</a></td>
                                    </tr>
                                        {{--<tr>--}}
                                            {{--<td>Twitter:</td>--}}
                                            {{--<td><i class="icon-retweet"></i> <a href="">@fakejking</a></td>--}}
                                        {{--</tr>--}}
                                    </tbody>
                                </table>


                            </div>
                        </div>
                        @if($customer->jobs->isEmpty())
                            <div class="alert alert-warning">
                                <h4 class="alert-heading">No Jobs</h4>
                                This Customer Has Not Done Any Estimation Yet
                            </div>
                        @else


                        <div class="span5">
                            <div id="reports" class="well">
                                <h3 class="modal-header">Recent Estimation By Customer</h3>

                                <div class="alert alert-info no-reports">
                                    <h4 class="alert-heading">Info</h4>
                                    List Of Estimation Done For/By {{$customer->full_name}}
                                </div>

                                <ul class="nav nav-list">
                                    @foreach($customer->jobs as $job)
                                    <li><a href="{{URL::to("test/view-job",$job->id)}}">
                                            <img width="50" height="60" src="pics/Julie_Taylor50.jpg"
                                                 style="float:left;margin-right: 10px;">

                                            <p class="list-item">{{$job->type_of_product}}
                                                <br>Qty: {{$job->quantity}}
                                                <br>Company: {{$job->company->name}}
                                            
                                        </a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>


                    @endif
                </div>
            </div>

        </div>
    </div>
    {{--typeofcolor:full color;numberofcolor:2;color1:blue;color2:red;--}}
@stop
