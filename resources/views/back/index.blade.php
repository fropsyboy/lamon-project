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
                        <button type="button" class="btn btn-dark btn-xs" data-toggle="modal" data-target="#createProduct" data-whatever="@mdo">Add New Product</button>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Date Added</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1 ?>
                            @foreach($products as $product)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>
                            <a href="{{route('viewProduct',['id' => $product->id])}}">
                            <img src="{{$product->image1}}" style="width: auto; height: auto;max-width: 100px;max-height: 70px">
                            </a>
                            </td>  
                            <td>{{$product->code}}</td>
                            <td>
                            <a href="{{route('viewProduct',['id' => $product->id])}}">
                            {{$product->name}}
                            </a>
                            </td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->amount}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>{{$product->status}}</td>
                            <td>
                            <a href="{{route('chgStatus',['id' => $product->id,'status' => $product->status])}}" >
                                  
                            @if($product->status=='active') 
                            <button class="btn btn-xs btn-danger">
                                Disable
                             </button>
                              @else
                              <button class="btn btn-xs btn-info">
                                Enable
                             </button>
                                @endif
                              </td>

                              </a>
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


    <div class="modal fade" id="createProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <form method="post" action="{{route('addProduct')}}" enctype="multipart/form-data">
                {{csrf_field()}}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Make An Investment</h4>
                </div>
                <div class="modal-body">


                        
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Product Name:</label>
                            <input type="text" class="form-control" name="name" value="" >
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Product Quantity:</label>
                            <input type="number" class="form-control" name="quantity"  value="0">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Product Amount:</label>
                            <input type="number" class="form-control" name="amount" value="0">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Product Description:</label>
                            <textarea class="form-control"  name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Product Image A:</label>
                            <input type="file" class="form-control" name="image1" >
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Product Image B:</label>
                            <input type="file" class="form-control" name="image2" >
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection