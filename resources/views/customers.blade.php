@extends("layout.master")
@section("content")
    <div class="container">
        <div class="content">
            <div class="title">
                <h1>
                   Sample Private Customers
                </h1>
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>


                @foreach($privates->customers as $customer)
                <tr>
                    <td><a href="{{URL::to("test/view-customer",$customer->id)}}">{{$customer->full_name}}</a></td>
                    <td><a href="{{URL::to("test/view-customer",$customer->id)}}">{{$customer->box}}</a></td>
                    <td><a href="{{URL::to("test/view-customer",$customer->id)}}">{{$customer->phone}}</a></td>
                </tr>
                    @endforeach
            </table>
        </div>

        <div class="title">
                <h1>
                   Sample Public Customers
                </h1>
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
                @foreach($publics->customers as $public)
                <tr>
                    <td><a href="{{URL::to("test/view-customer",$public->id)}}">{{$public->full_name}}</a></td>
                    <td><a href="{{URL::to("test/view-customer",$public->id)}}">{{$public->address}}</a></td>
                    <td><a href="{{URL::to("test/view-customer",$public->id)}}">{{$public->phone}}</a></td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>
@stop
