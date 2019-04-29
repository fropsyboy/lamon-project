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



            <div class="tables">

                <div class="bs-example widget-shadow" data-example-id="hoverable-table">
                    
                    <table class="table table-hover">
                        <h4>Product List</h4>
                        <button class="btn btn-dark btn-xs">Add new</button>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                    
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td><a href=""><button class="btn btn-info">Select</button></a></td>
                        </tr>

                        <?php $i++; ?>
                        
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