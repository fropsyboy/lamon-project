@extends('back.layout')
@section('content')
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            @if(session()->has('msg'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Alert...!</strong> <kbd>{{ Session::get('msg', '') }}</kbd>
            </div>
            @endif

            <div class="col-md-4 modal-grids">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Investment</button>

            </div>



            <div class="tables">

                <div class="bs-example widget-shadow" data-example-id="hoverable-table">

                    <table class="table table-hover" id="myTable">
                        <h4>Active Investment Details</h4>
                        <thead>
                        <tr>
                            <th>Invest.No</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Interest (daily,Reap)</th>
                            <th>Reap Date</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach($investments as $investment)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <th scope="row">{{$investment->created_at->toFormattedDateString() }}</th>
                            <td>{{$investment->amount}}</td>
                            <td> {{$investment->interest}}</td>
                            <td>{{$investment->reap}}</td>
                            <td>
                                @if($investment->status=='waiting to Pay')
                                    <span class="label label-danger">
                                {{strtoupper($investment->status)}}
                                    </span>
                                    @endif
                                    @if($investment->status=='pending')
                                        <span class="label label-info">
                              {{strtoupper($investment->status)}}
                                    </span>
                                    @endif
                                    @if($investment->status=='waiting')
                                        <span class="label label-default">
                                {{strtoupper($investment->status)}}
                                    </span>
                                    @endif
                                    @if($investment->status=='withdrawn')
                                        <span class="label label-success">
                                {{strtoupper($investment->status)}}
                                    </span>
                                    @endif
                            </td>

                            @if($investment->status == 'Riped')
                            <td><input type="hidden" id="id" name="amount" value="{{$value = $investment->id}}">
                                <input type="hidden" id="amount" name="amount" class="form-control" value="{{$value = $investment->amount + $investment->interest}}">
                                <button class="btn btn-danger btn-xs" id="send" data-toggle="modal" data-target="#liquidate" data-whatever="@mdo">Liquidate</button>
                            </td>
                                <td></td>
                            @elseif($investment->status == 'waiting to Pay')
                                <td>
                                    <span class="label label-primary">
                                    {{abs($today->diffInDays($investment->created_at) - 20)}} TO GO
                                        </span>
                                </td>
                                <form method="post" action="{{ route('del') }}">
                                    {{csrf_field()}}
                                    <td><input type="hidden"  name="idd" value="{{$investment->id}}"><button class="btn btn-danger btn-xs">Delete</button></td>
                                </form>
                            @elseif($investment->status == 'pending')
                                <td>
                                    <span class="label label-info">
                                    {{abs($today->diffInDays($investment->created_at) - 20)}} TO GO
                                    </span>
                                </td>
                               <td></td>
                            @elseif($investment->status == 'payment_completed')
                                <td>
                                    <span class="label label-success">
                                    {{abs($today->diffInDays($investment->created_at) - 20)}} TO GO
                                    </span>
                                </td>
                                <td></td>
                                @else
                                <td>
                                    <span class="label label-success">
                                    Withdrawn
                                    </span>
                                </td>
                                <td></td>
                            @endif


                        </tr>
                            <?php $i++; ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>



            <!-- for amcharts js -->
            <script src=" {{ URL::asset('assets/back/js/amcharts.js') }}"></script>
            <script src=" {{ URL::asset('assets/back/js/serial.js') }}"></script>
            <script src=" {{ URL::asset('assets/back/js/export.min.js') }}"></script>
            <link rel="stylesheet" href=" {{ URL::asset('assets/back/css/export.css') }}" type="text/css" media="all" />
            <script src=" {{ URL::asset('assets/back/js/light.js') }}"></script>
            <!-- for amcharts js -->

            <script  src=" {{ URL::asset('assets/back/js/index1.js') }}"></script>


            <script type="text/javascript">
                $(function() {
                    var id = $("#id").val();
                    var amount = $("#amount").val();
                    var idd = $("#idd").val();
                    var amountd = $("#amountd").val();

                    $("#send").on('click', function () {

                        $("#demo").html(amount);
                        $("#demox").html(id);


                    });



                    $("#liquid").on('click', function () {

                        document.getElementById("idt").value = id;


                    });
                    $("#delete").on('click', function () {

                        $("#demod").html(amountd);
                        $("#demoxd").html(idd);


                    });

                    $("#del").on('click', function () {

                        document.getElementById("idd").value = idd;


                    });

                });
            </script>


        </div>
    </div>


@endsection