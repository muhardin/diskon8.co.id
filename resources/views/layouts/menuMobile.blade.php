<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a href="{{ route('home') }}">Dashboard</a></li>
                            <li><a href="{{ route('catalog.index') }}">Katalog</a></li>
                            @if (Auth::user()->user_type == 'reseller')
                              <li><a href="{{ route('coupon.index') }}">Kupon</a></li>
                              <li><a href="{{ route('wallet.index') }}">Gajian</a></li>
                              <li><a data-toggle="collapse" data-target="#order" href="#">Pesanan <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="order" class="collapse dropdown-header-top">
                                      <li><a href="{{ route('order.prospect') }}">Prospek</a></li>
                                      <li><a href="{{ route('order.index') }}">Pesanan Masuk</a></li>
                                      <li><a href="{{ route('order.confirm') }}">Konfirmasi</a></li>
                                      <li><a href="{{ route('order.packing') }}">Packing</a></li>
                                      <li><a href="{{ route('order.delivering') }}">Pengiriman</a></li>
                                      <li><a href="{{ route('order.success') }}">Diterima Pembeli</a></li>
                                  </ul>
                              </li>
                              <li><a href="{{ route('order.tracking') }}">Lacak Pesanan</a></li>
                            @else
                              <li><a data-toggle="collapse" data-target="#others" href="#">Produk <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="others" class="collapse dropdown-header-top">
                                      <li><a href="{{ route('category.index') }}">Kategori</a></li>
                                      <li><a href="{{ route('product.index') }}">List</a></li>
                                  </ul>
                              </li>
                              <li><a href="{{ route('resellerDashboard.create') }}">Reseller Dashboard</a></li>
                              <li><a href="{{ route('resellerPackage.index') }}">Paket Reseller</a></li>
                              <li><a href="{{ route('reseller.index') }}">Reseller</a></li>
                              <li><a href="{{ route('order.sell') }}">Order</a></li>
                              <li><a href="{{ route('wallet.admin') }}">Withdraw</a></li>
                              <li><a href="{{ route('bank.index') }}">Akun Bank</a></li>
                              <li><a href="{{ route('user.index') }}">Admin</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
