@extends('layout.master')
@section('Noidung')
        <div class="container content1">
            <div class="row col-md-12">
                <div class="col-md-3 col-sm-4">
                    <div class="row">

                        <ul class="list-group " >
                            <li class="list-group-item tieude ">
                                <span class="glyphicon glyphicon-list">&nbsp;</span>
                                <span class="text-center">Danh mục sản phẩm</span>
                            </li>
                            <li class="list-group-item ds ">
                                <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                                <a href="#" class="red_hover" >Iphone </a>
                            </li>
                            <li class="list-group-item ds ">
                                <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                                <a href="#" class="red_hover" >Samsung </a>
                            </li>
                            <li class="list-group-item ds ">
                                <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                                <a href="#" class="red_hover" >Oppo</a>
                            </li>
                            <li class="list-group-item ds ">
                                <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                                <a href="#" class="red_hover" >Asus</a>
                            </li>
                            <li class="list-group-item ds ">
                                <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                                <a href="#" class="red_hover" >Sony</a>
                            </li>
                            <li class="list-group-item ds ">
                                <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                                <a href="#" class="red_hover" >Acer</a>
                            </li>
                            <li class="list-group-item ds ">
                                <span class="glyphicon glyphicon-phone ">&nbsp;</span>
                                <a href="#" class="red_hover" >Khác</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-1 content1-right">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Iphone</h3><hr class="gach_full">
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-6 col-xs-6  col-sm-6">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6 col-sm-6">
                                        <img class="img-responsive img-thumbnail" src="images/{{$product->image}}" width="100%">
                                    </div>
                                    <div class="col-md-6 text-center col-xs-6 col-sm-6">
                                        <div class="height">
                                            <span ><strong><a class="red_hover" href="#">{{$product->name}}</a></strong></span>
                                        </div>
                                        <div >
                                            <p><span> Giá: &nbsp; </span><span class="gia">{{$product->price}}</span></p>
                                        </div>
                                        <div> <a href="#" class="select"> Mua hàng</a></div>

                                    </div>
                                </div>
                            </div>

                        @endforeach



                    </div>

                </div>
            </div>
        </div>
    @endsection
