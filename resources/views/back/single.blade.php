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
<h3>{{$product->name}}-{{$product->status}}</h3>

    <div class=" panel-body-inputin">

        <form class="form-horizontal" method="post" action="{{ route('addProduct') }}">
            {{csrf_field()}}
            <div class="form-group" >
                <label class="col-md-2 control-label">Product Name</label>
                <div class="col-md-8">
                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-tags"></i>
												</span>
            <input  class="form-control1" type="text" name="account_name" value="{{$product->name}}">


                    </div>
                </div>
            </div>
            <div class="form-group" id="acc_name" >
                <label class="col-md-2 control-label">Product Quantity</label>
                <div class="col-md-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-user"></i>
												</span>
                        <input  class="form-control1" type="number" name="quantity" value="{{$product->quantity}}">
                    </div>
                </div>
            </div>

            <div class="form-group" id="bank_name" >
                <label class="col-md-2 control-label">Product Amount</label>
                <div class="col-md-8">
                    <div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-bank"></i>
												</span>
                        <input  class="form-control1" name="amount" type="number" value="{{$product->amount}}">
                    </div>
                </div>
            </div>

            <div class="form-group" id="acc_num" >
                <label class="col-md-2 control-label">Product Description</label>
                <div class="col-md-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-digg"></i>
												</span>
                        <textarea class="form-control1" name="description">{{$product->description}}</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group" id="bit_add" >
                <label class="col-md-2 control-label">Images</label>
                <div class="col-md-4">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-bars"></i>
												</span>
                        <img  src="/{{$product->image1}}" style="width: auto; height: auto;max-width: 100px;max-height: 70px" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-bars"></i>
												</span>
                        <img  src="/{{$product->image1}}"  style="width: auto; height: auto;max-width: 100px;max-height: 70px">
                    </div>
                </div>
            </div>

            <div class="form-group" id="button" >
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