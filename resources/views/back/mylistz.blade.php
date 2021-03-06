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
                        <h4>Active Investment Details</h4>
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
                        @foreach ($client as $item)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$item->subject}}</td>
                                <td>{{$item->message}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->created_at}}</td>
                                <td><form action="{{route('reply')}}" method="post">{{csrf_field()}}<input type="hidden" name="id" value="{{$item->id}}"><textarea name="reply" placeholder="Enter Reply Here" >{{$item->admin_reply}}</textarea><button class="btn btn-info">Reply</button></form></td>
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