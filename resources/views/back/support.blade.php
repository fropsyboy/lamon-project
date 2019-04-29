@extends('back.layout')
@section('content')

<div id="page-wrapper">
    <div class="main-page compose">
        <h2 class="title1">Compose Mail Page</h2>
        <div class="col-md-4 compose-left">
            <div class="folder widget-shadow">
                <ul>
                    <li class="head">Messages  ({{$count}})</li>
                    @foreach($supports as $support)
                    <li class="head">{{$support->subject}}  </li>
                        @endforeach


                </ul>
            </div>

        </div>
        <div class="col-md-8 compose-right widget-shadow">
            <div class="panel-default">
                <div class="panel-heading">
                    Compose New Message
                </div>
                <div class="panel-body">
                    @if(Session::has('msg'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Alert...!</strong> <kbd>{{ Session::get('msg', '') }}</kbd>
                        </div>
                    @endif
                    <div class="alert alert-info">
                        Please fill details to send a new message
                    </div>
                    <form class="com-mail" method="post" action="{{ route('c_support') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="text" class="form-control1 control3" placeholder="Subject :" name="subject">
                        <textarea rows="6" class="form-control1 control2" placeholder="Message :" name="message"></textarea>
                        <input type="file"  name="picture" class="btn btn-primary">

                        <input type="submit" value="Send Message">
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>

        <div class="tables">

            <div class="bs-example widget-shadow" data-example-id="hoverable-table">

                <table class="table table-hover">
                    <h4>Active Investment Details</h4>
                    <thead>
                    <tr>
                        <th>Replies</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Reply</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($supports as $support)
                        <tr>
                            <th scope="row">{{$count}}</th>
                            <td>{{$support->subject}}</td>
                            <td>{{$support->message}}</td>
                            <td>{{$support->admin_reply}}</td>
                            <td>{{$support->status}}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>
@endsection