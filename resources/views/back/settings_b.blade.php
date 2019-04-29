@extends('back.layout')
@section('content')
<div id="page-wrapper">
    <div class="main-page">
        @if(Session::has('msg'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Alert...!</strong> <kbd>{{ Session::get('msg', '') }}</kbd>
            </div>
        @endif
<div class="form-three widget-shadow">
    <div class=" panel-body-inputin">
        <form class="form-horizontal" method="post" action="{{ route('save_acc') }}">
            {{csrf_field()}}
            <div class="form-group" >
                <label class="col-md-2 control-label">Account Type</label>
                <div class="col-md-8">
                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-tags"></i>
												</span>
                        <select id="account_type" class="form-control1" name="account_type" required>
                            <option value="0">.....</option>
                            <option value="1">Nigerian Bank</option>
                        </select>

                    </div>
                </div>
            </div>
            <div class="form-group" id="acc_name" style="display:none;">
                <label class="col-md-2 control-label">Account Name</label>
                <div class="col-md-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-user"></i>
												</span>
                        <input  class="form-control1" type="text" name="account_name" placeholder="Account Name">
                    </div>
                </div>
            </div>

            <div class="form-group" id="bank_name" style="display:none;">
                <label class="col-md-2 control-label">Bank Name</label>
                <div class="col-md-8">
                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-bank"></i>
												</span>
                        <input  class="form-control1" name="bank" type="text" placeholder="Bank Name">
                    </div>
                </div>
            </div>

            <div class="form-group" id="acc_num" style="display:none;">
                <label class="col-md-2 control-label">Account Number</label>
                <div class="col-md-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-digg"></i>
												</span>
                        <input  class="form-control1" name="addressx" type="text" placeholder="Account Number">
                    </div>
                </div>
            </div>

            <div class="form-group" id="bit_add" style="display:none;">
                <label class="col-md-2 control-label">Bitcoin Address</label>
                <div class="col-md-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-bars"></i>
												</span>
                        <input  class="form-control1" type="text" name="address" placeholder="Bitcoin Address">
                    </div>
                </div>
            </div>

            <div class="form-group" id="button" style="display:none;">
                <label class="col-md-2 control-label">Save Account</label>
                <div class="col-md-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-save"></i>
												</span>
                        <button  class="form-control1 btn-success"   name="add">Add Account </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

            <div class="tables">

                <div class="bs-example widget-shadow" data-example-id="hoverable-table">

                    <table class="table table-hover">
                        <h4>Active Account Details</h4>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Account Type</th>
                            <th>Account Name</th>
                            <th>Account Address</th>
                            <th>Account Bank</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($accounts as $account)
                        <tr>
                            <th scope="row">{{$account->id}}</th>
                            <td>{{$account->type}}</td>
                            <td>{{$account->name}}</td>
                            <td>{{$account->address}}</td>
                            <td>{{$account->bank}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


</div>
</div>
<script type="text/javascript">
    $('#account_type').on('change', function () {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
      // alert( valueSelected );

        $('#acc_name').hide();

        $('#acc_num').hide();

        $('#bank_name').hide();

        $('#bit_add').hide();

        $('#button').hide();






        if (valueSelected ==1 ) {

            $('#acc_name').show();

            $('#acc_num').show();

            $('#bank_name').show();

            $('#bit_add').hide();

            $('#button').show();

        }
        else if (valueSelected ==2 ) {

            $('#acc_name').hide();

            $('#acc_name').hide();

            $('#bank_name').hide();

            $('#bit_add').show();

            $('#button').show();

        }

    });
</script>
@endsection