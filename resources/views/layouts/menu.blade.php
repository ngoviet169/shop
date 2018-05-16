<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="logo"><a href="{{route('home')}}"><img id="logo" src="{{asset('')}}/images/oil.png" alt="FlatShop"></a></div>
            </div>
            <div class="col-md-10 col-sm-10">
                <div class="clearfix"></div>
                <div class="header_bottom">
                    <ul class="option">
                        <li id="search" class="search">
                            <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                        </li>
                        <li class="option-cart">
                            <a href="#" class="cart-icon">cart <span class="cart_no">02</span></a>
                            <ul class="option-cart-item">
                                <li>
                                    <div class="cart-item">
                                        <div class="image"><img src="images/products/thum/products-01.png" alt=""></div>
                                        <div class="item-description">
                                            <p class="name">Lincoln chair</p>
                                            <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
                                        </div>
                                        <div class="right">
                                            <p class="price">$30.00</p>
                                            <a href="#" class="remove"><img src="images/remove.png" alt="remove"></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart-item">
                                        <div class="image"><img src="images/products/thum/products-02.png" alt=""></div>
                                        <div class="item-description">
                                            <p class="name">Lincoln chair</p>
                                            <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">01</span></p>
                                        </div>
                                        <div class="right">
                                            <p class="price">$30.00</p>
                                            <a href="#" class="remove"><img src="images/remove.png" alt="remove"></a>
                                        </div>
                                    </div>
                                </li>
                                <li><span class="total">Total <strong>$60.00</strong></span><button class="checkout" onClick="location.href='checkout.html'">CheckOut</button></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="productgird.html">Home</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="productgird.html">Mua Nhiều</a></li>
                            <li><a href="productlitst.html">Yêu Thích</a></li>
                            <li><a href="#">Top View</a></li>
                            <li><a href="#">Support</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">List Nhớt</a>
                                <div class="dropdown-menu">
                                    <ul class="mega-menu-links">
                                        @foreach($cates as $cate)
                                            <li><a href="{{route('list-product-category', $cate->id)}}">{{$cate->cate_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3" id="user-menu">
                        <ul class="usermenu">
                            <li><a href="checkout.html" class="log">Login</a></li>
                            <li><a href="checkout2.html" class="reg">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>