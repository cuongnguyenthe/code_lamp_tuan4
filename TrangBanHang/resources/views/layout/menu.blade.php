<nav class="navbar navbar-inverse menu">
    <div class="container">
        <div class="navbar-header">
            <div class="col-xs-10 visible-xs">
                <form class=" navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" col-xs-2 ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav menu ">
                <li class=""><a href="{{route('trang-chu')}}" >Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li class="dropdown ">
                    <a class="dropdown-toggle " data-toggle="dropdown" href="#">Danh mục sản phẩm <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('chitiet_loaisp')}}">Iphone</a></li>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">Oppo</a></li>
                        <li><a href="#">Asus</a></li>
                        <li><a href="#">Sony</a></li>
                        <li><a href="#">Acer</a></li>
                        <li><a href="#">Khác</a></li>
                    </ul>
                </li>
                <li><a href="#">Liên hệ</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Tài khoản</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Đăng Nhập</a></li>
                        <li><a href="#">Đăng ký</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>