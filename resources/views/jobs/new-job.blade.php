@extends('Layouts.MasterPage')
@section('product_specs_active')
active
@stop

@section('contents')
    <div class="page-content">

        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{URL::to('/')}}">Home</a>
                </li>
                <li class="active">Product specification</li>

            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <div class="col-lg-12 col-sm-12col-xs-12 col-sm-offset-0">
            <h2><i class="fa fa-clipboard"></i> Product specification.</h2>
           <font color="#8b0000"><i class="glyphicon glyphicon-warning-sign"></i></font> Please select and fill all of the below specifications to complete the estimation.
            <p></p>
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-white bg-sky">
                    <span class="widget-caption">Product specification Panel</span>
                    <div class="widget-buttons">
                        <a href="#" data-toggle="maximize">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="#" data-toggle="collapse">
                            <i class="fa fa-minus"></i>
                        </a>
                    </div><!--Widget Buttons-->
                </div><!--Widget Header-->
                <div class="widget-body bg-whitesmoke bordered-bottom bordered-white" style="color:#000">
                   <!-- form-->
                    <div id="registration-form">
                        <form role="form">
                            <div class="form-title">
                               Information
                            </div>
                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <select name="" id="" class="form-control" name="company_id">
                                 <option value="">Select Company</option>
                                     @foreach($companies as $company)
                                         <option value="{{$company->id}}">{{$company->name}}</option>
                                         @endforeach

                             </select>
                             </span>
                            </div>

                            <div class="form-group">
                            <span class="input-icon icon-right">
                            <input type="hidden" hidden="hidden" name="customer_id" value="{{Auth::user()->id}}" class="form-control" id="emailInput" placeholder="Customer">

                             </span>
                            </div>
                            <div class="form-group">
                             <span class="input-icon icon-right">
                            <input type="text" name="job_name" class="form-control" id="passwordInput" placeholder="Job name">
                            <i class="fa fa-lock circular"></i>
                              </span>
                            </div>

                            <div class="form-title">
                               Product type.
                            </div>
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                     {{--<span class="input-icon icon-right">--}}
                                      {{--<input type="text" class="form-control" placeholder="Name">--}}
                                      {{--<i class="fa fa-user"></i>--}}
                                      {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                    {{--<span class="input-icon icon-right">--}}
                                    {{--<input type="text" class="form-control" placeholder="Family">--}}
                                     {{--<i class="fa fa-user"></i>--}}
                                    {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                    {{--<span class="input-icon icon-right">--}}
                                    {{--<input type="text" class="form-control" placeholder="Phone">--}}
                                   {{--<i class="glyphicon glyphicon-earphone"></i>--}}
                                    {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                    {{--<span class="input-icon icon-right">--}}
                                    {{--<input type="text" class="form-control" placeholder="Mobile">--}}
                                    {{--<i class="glyphicon glyphicon-phone"></i>--}}
                                    {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<hr class="wide">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                     {{--<span class="input-icon icon-right">--}}
                                     {{--<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" placeholder="Birth Date">--}}
                                     {{--<i class="fa fa-calendar"></i>--}}
                                     {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="form-group">--}}
                                     {{--<span class="input-icon icon-right">--}}
                                     {{--<input type="text" class="form-control" placeholder="Birth Place">--}}
                                     {{--<i class="fa fa-globe"></i>--}}
                                      {{--</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input name="type_of_product" type="radio" class="colored-blue">
                                        <span class="text">Normal Book</span>
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input name="type_of_product" type="radio" class="colored-blue">
                                        <span class="text">Set Book</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="type_of_product" type="radio" class="colored-blue">
                                        <span class="text">Sheet</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-title">
                                Quantity.
                            </div>

                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <input type="number" name="quantity" class="form-control" id="userameInput" placeholder="Quantity of product">
                             <i class="glyphicon glyphicon-plus-sign circular"></i>
                             </span>
                            </div>
                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <input type="number" name="number_pages" class="form-control" id="userameInput" placeholder="Number of pages.">
                             <i class="glyphicon glyphicon-plus-sign circular"></i>
                             </span>
                            </div>

                            <div class="form-title">
                            Product size.
                            </div>

                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <select name="" id="" class="form-control" name="product_size">
                                 <option value="">[Enter Product Size] or [Select One from this list]</option>
                                 <option value="A0">A0</option>
                                 <option value="A1">A1</option>
                                 <option value="A2">A2</option>
                                 <option value="A3">A3</option>
                                 <option value="A4">A4</option>
                                 <option value="A5">A5</option>
                                 <option value="A6">A6</option>
                                 <option value="A7">A7</option>
                                 <option value="A8">A8</option>
                                 <option value="A9">A9</option>
                                 <option value="A10">A10</option>
                                 <option value="B0">B0</option>
                                 <option value="B1">B1</option>
                                 <option value="B2">B2</option>
                                 <option value="B3">B3</option>
                                 <option value="B4">B4</option>
                                 <option value="B5">B5</option>
                                 <option value="B6">B6</option>
                                 <option value="B7">B7</option>
                                 <option value="B8">B8</option>
                                 <option value="B9">B9</option>
                                 <option value="B10">B10</option>
                                 <option value="C0">C0</option>
                                 <option value="C1">C1</option>
                                 <option value="C2">C2</option>
                                 <option value="C3">C3</option>
                                 <option value="C4">C4</option>
                                 <option value="C5">C5</option>
                                 <option value="C6">C6</option>
                                 <option value="C7">C7</option>
                                 <option value="C8">C8</option>
                                 <option value="C9">C9</option>
                                 <option value="C10">C10</option>
                             </select>
                             </span>
                            </div>

                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <input type="number" name="height" class="form-control" id="userameInput" placeholder="X for height">
                             <i class="glyphicon glyphicon-plus-sign circular"></i>
                             </span>
                            </div>

                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <input type="number" name="width" class="form-control" id="userameInput" placeholder="Y for Width">
                             <i class="glyphicon glyphicon-plus-sign circular"></i>
                             </span>
                            </div>

                            <div class="form-title">
                               Colors
                            </div>

                            <p>
                                <b><u>Color Specification</u></b><br>
                                i.   Full Color : it contains all type of colors including colors which are over loping/ gradient.<br>
                                ii.  Spot Color: it contains multiple colors which does not over lope or does not have gradient.<br>
                                iii. Single Color: it contains only one color.
                            </p>

                            <div class="form-title">
                             Text Pages.
                            </div>

                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <select name="" id="" class="form-control" name="text_page_color">
                                 <option value="select color" selected="">Type of color to print text page</option>
                                 <option value="full color">Full Color</option>
                                 <option value="single color">Single Color</option>
                                 <option value="spot color">Spot Color</option>
                             </select>
                             </span>
                            </div>
                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <select name="" id="" class="form-control" name="cover_page_color">
                                 <option value="select color" selected="">Type of color to print cover page</option>
                                 <option value="full color">Full Color</option>
                                 <option value="single color">Single Color</option>
                                 <option value="spot color">Spot Color</option>
                             </select>
                             </span>
                            </div>

                            <div class="form-title">
                                Paper
                            </div>

                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <select name="" id="" class="form-control" name="paper_type_text_page">
                                 <option value="select color" selected="">Type of paper for text page</option>
                                 <option value="Saddle Stitch">Saddle Stitch</option>
                                 <option value="Spiral Bind">Spiral Bind</option>
                                 <option value="Sewn Bind">Sewn Bind</option>
                                 <option value="Glued Bind">Glued Bind</option>
                                 <option value="Perfect Bind">Perfect Bind</option>
                                 <option value="Full Case Bind">Full Case Bind</option>
                             </select>
                             </span>
                            </div>

                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <select name="" id="" class="form-control" name="paper_type_cover_page">
                                 <option value="select color" selected="">Type of paper for cover page</option>
                                 <option value="Saddle Stitch">Saddle Stitch</option>
                                 <option value="Spiral Bind">Spiral Bind</option>
                                 <option value="Sewn Bind">Sewn Bind</option>
                                 <option value="Glued Bind">Glued Bind</option>
                                 <option value="Perfect Bind">Perfect Bind</option>
                                 <option value="Full Case Bind">Full Case Bind</option>
                             </select>
                             </span>
                            </div>

                            <div class="form-title">
                              Finishing
                            </div>

                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <input type="text" name="serial_number" class="form-control" id="userameInput" placeholder="Serial numbering">
                             <i class="glyphicon glyphicon-plus-sign circular"></i>
                             </span>
                            </div>

                            <div class="form-group">
                             <span class="input-icon icon-right">
                             <select name="" id="" class="form-control" name="type_of_binding">
                                 <option value="select color" selected="">Type of binding</option>
                                 <option value="Saddle Stitch">Saddle Stitch</option>
                                 <option value="Spiral Bind">Spiral Bind</option>
                                 <option value="Sewn Bind">Sewn Bind</option>
                                 <option value="Glued Bind">Glued Bind</option>
                                 <option value="Perfect Bind">Perfect Bind</option>
                                 <option value="Full Case Bind">Full Case Bind</option>
                             </select>
                             </span>
                            </div>
                            <p></p>

                            {{--<div class="form-group">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" class="colored-blue">--}}
                                        {{--<span class="text">Auto Sign In After Registration</span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-check"></i> Estimate</button>
                            <button type="submit" class="btn btn-darkorange"><i class="glyphicon glyphicon-trash"></i> Clear</button>
                        </form>
                    </div>


                </div><!--Widget Body-->
            </div><!--Widget-->
        </div>
    </div>
@stop