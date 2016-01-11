@extends("layout.master")
@section("content")
    <div class="container">
        <div class="content">
            <div class="title">
                <h1>

                </h1>
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
                @foreach($privates as $customer)
                    <tr>
                        <td><a href="{{URL::to("test/view-customer",$customer->id)}}">{{$customer->full_name}}</a></td>
                        <td><a href="{{URL::to("test/view-customer",$customer->id)}}">{{$customer->address}}</a></td>
                        <td><a href="{{URL::to("test/view-customer",$customer->id)}}">{{$customer->phone}}</a></td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
    </div>
@stop
