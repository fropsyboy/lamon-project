@extends('back.layout')
@section('content')
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page general">

            <div class="col-md-12 modal-grids">
                <h3>INVESTMENT REQUESTS</h3>
            </div>
            @if(session()->has('msg'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Alert...!</strong> <kbd>{{ Session::get('msg', '') }}</kbd>
                </div>
            @endif

            @foreach($merges as $mergex)
                @foreach($mergex as $merge)
            <div class="col-md-6 panel-grids" @if($merge->status == 'success') style="background-color: greenyellow;" @else style="background-color: red;" @endif>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Investment Request : {{$merge->id}}</h3>
                    </div>
                    <div class="panel-body">
                        <p><span class="label label-info">Make Payment to :</span> <span class="text-success pull-right"> &nbsp;&nbsp;{{$merge->user_ripe->user_riped->account_user->name}} </span>
                            <br><br>
                            <span class="label label-info">Phone Number:</span> <span class="text-success pull-right"> &nbsp;&nbsp;{{$merge->user_ripe->user_riped->phone_number}} </span>
                        <br><br>
                            <span class="label label-info">Investment Amount :</span> <span class="text-success pull-right"> &nbsp;&nbsp; &#8358; {{$merge->amount}} </span>
                            <br><br>
                            <span class="label label-info">Date Created :</span> <span class="text-success pull-right"> &nbsp;&nbsp;  {{$merge->created_at->toFormattedDateString()}} </span>(<?php $tt = 48 - ($current->diffInHours($merge->created_at)); if($tt >= 0){ echo $tt;}else{ echo 'Expired'; }  ?>  hours remaining)
                            <br><br>
                            <span class="label label-info">Account Details :</span> <span class="text-success pull-right"> &nbsp;&nbsp;  {{$merge->user_ripe->user_riped->account_user->address}} </span>({{$merge->user_ripe->user_riped->account_user->bank}})
                            <br><br>
                            @if($merge->status == 'pending')
                           <a href="{{route('decline',['id' => $merge->id, 'user' => Auth::user()->id])}}">
                               <button class="btn btn-danger">Decline</button>
                           </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-success pull-right" data-toggle="modal" data-target="#proof">Payment Complete</button>
                        @else
                                <button class="btn btn-success pull-right">View Details</button>
                        @endif
                    </div>
                </div>
            </div>
                <div class="modal fade" id="proof" tabindex="-1" role="dialog" aria-labelledby="proof">
                    <div class="modal-dialog" role="document">
                        <form method="post" action="{{route('proof')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel"> Payment Proof Upload</h4>
                                </div>
                                <div class="modal-body">


                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Please Make sure to Upload the correct Payment Proof to avoid being blocked?</label>

                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Payment Proof:</label>
                                        <span id="demoxd" style="font-weight: bold;"> </span>
                                        <input type="hidden" name="id" value="{{$merge->id}}" >
                                        <input type="file"  class="form-control" name="picture"  id="quantity" required>
                                    </div>
                                    <p></p>
                                    @if($merge->proof)
                                        <img src="{{url('').'/'.$merge->proof}}" style="width:450px; height: 300px;">
                                    @else
                                        PROOF NOT UPLOADED YET
                                    @endif


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" id="del" class="btn btn-primary">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
            @endforeach


            <div class="clearfix"> </div>
        </div>


            <!-- for amcharts js -->
            <script src=" {{ URL::asset('assets/back/js/amcharts.js') }}"></script>
            <script src=" {{ URL::asset('assets/back/js/serial.js') }}"></script>
            <script src=" {{ URL::asset('assets/back/js/export.min.js') }}"></script>
            <link rel="stylesheet" href=" {{ URL::asset('assets/back/css/export.css') }}" type="text/css" media="all" />
            <script src=" {{ URL::asset('assets/back/js/light.js') }}"></script>
            <!-- for amcharts js -->

            <script  src=" {{ URL::asset('assets/back/js/index1.js') }}"></script>





        </div>
    </div>


@endsection