@extends("layout.master")
@section("content")
    <div class="container">
        <div class="content">
            <div class="title">
                <h1>
                   Job Details
                </h1>
            </div>


            <div class="row-fluid">
                <div class="span12" id="content">
                    <div>
                        <div id="details" class="span7">
                            <div>

                                <h3>{{$job->type_of_product}}</h3>
                                {{--@if($customer->)--}}
                                {{--<h4>President and CEO</h4>--}}
                                <br>
                                <table class="table table-striped">

                                    <tbody>
                                    <tr>
                                        <td> Type Of Product:</td>
                                        <td><i class="icon-home"></i> {{$job->type_of_product}}</td>
                                    </tr>
                                    <tr>
                                        <td>Quantity:</td>
                                        <td><i class="icon-headphones"></i> {{$job->quantity}}</td>
                                    </tr>
                                    <tr>
                                        <td>Print Sides:</td>
                                        <td><i class="icon-headphones"></i> {{$job->print_sides}}</td>
                                    </tr>
                                    <tr>
                                        <td>Customer:</td>
                                        <td><i class="icon-headphones"></i><a
                                                    href="{{URL::to("test/view-customer",$job->customer->id)}}">{{$job->customer->full_name}}</a> </td>
                                    </tr>
                                    <tr>
                                        <td>Company:</td>
                                        <td><i class="icon-headphones"></i><a href="{{URL::to("test/view-company",$job->company->id)}}"> {{$job->company->name}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Time:</td>
                                        <td><i class="icon-envelope"></i>{{$job->created_at->diffForHumans()}}</td>
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
    </div>
    </div>
    </div>
@stop
