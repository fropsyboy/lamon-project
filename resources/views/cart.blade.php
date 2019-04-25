@extends('layouts.app')

@section('logo')
    <h2><a href="{{ url('/home') }}">LA MON YOGHURTS</a></h2>
@endsection

@section('banner')
    <section class="cart-banner text-center">
        <div class="inner-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-content">
                        <h1>Cart</h1>
                    </div> 
                </div>
            </div>
        </div>
    </section> 
@endsection

@section('content')
    <section class="cart-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-page">
                        <table>
                            <tbody>
                                <tr>
                                    <th class="product-img">Product</th>
                                    <th class="product-name">Product Name</th>
                                    <th class="price">Price</th>
                                    <th class="quantity">Quantity</th>
                                    <th class="total">Total</th>
                                    <th class="remove"></th>
                                </tr>
                                <tr>
                                    <td class="product-img"><img src="{{ asset('assets/images/product.jpg') }}"></td>
                                    <td class="product-name">Porridge Oats</td>
                                    <td class="price yellow">₦20.00</td>
                                    <td class="quantity">
                                        <input type="number" value="1">
                                    </td>
                                    <td class="total yellow">₦20.00</td>
                                    <td class="remove"><i class="fa fa-times-circle"></i></td>
                                </tr>
                                <tr>
                                    <td class="product-img"><img src="{{ asset('assets/images/product.jpg') }}"></td>
                                    <td class="product-name">Porridge Oats</td>
                                    <td class="price yellow">₦20.00</td>
                                    <td class="quantity">
                                        <input type="number" value="1">
                                    </td>
                                    <td class="total yellow">₦20.00</td>
                                    <td class="remove"><i class="fa fa-times-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="coupon-card">
                            <div class="apply-coupon input-group">   
                                <input type="text" class="form-control" placeholder="Coupon Code">
                                <span class="input-group-btn">
                                    <button class="btn btn-lg btn-primary" type="button">Apply Coupon</button>
                                </span>
                            </div>
                            <div class="conti-shop">
                                <button class="btn btn-lg btn-primary" type="button">Continue Shopping</button>
                            </div>
                        </div>
                    <div class="cart-totals">
                        <table>
                            <tbody>
                                <tr>
                                    <th class="cart-total">Cart Totals</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td class="subtotals">Subtotals</td>
                                    <td class="text-right yellow">₦20</td>
                                </tr>
                                <tr>
                                    <td class="totals">Totals</td>
                                    <td class="text-right yellow">₦20</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-ms-12 text-right">
                            <button class="btn btn-lg btn-primary">Proceed To Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cart page css end-->
@endsection