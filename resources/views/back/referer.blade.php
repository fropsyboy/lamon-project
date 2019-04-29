@extends('back.layout')
@section('content')
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">

            <div class="col-md-4 modal-grids">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Investment</button>

            </div>



            <div class="tables">

                <div class="bs-example widget-shadow" data-example-id="hoverable-table">

                    <table class="table table-hover">
                        <h4>Active Investment Details</h4>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Date Joined</th>
                            <th>Account Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        @foreach ($refers as $refer)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$refer->name}}</td>
                                <td>{{$refer->email}}</td>
                                <td>{{$refer->phone_number}}</td>
                                <td>{{$refer->created_at}}</td>
                                <td>{{$refer->status}}</td>
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





        </div>
    </div>


@endsection