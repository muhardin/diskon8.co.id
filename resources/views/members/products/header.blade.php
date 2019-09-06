<div class="os-tabs-w p-0">
    <div class="os-tabs-controls mb-0">
        <ul class="nav nav-tabs upper">
            <li class="nav-item">
            <a aria-expanded="false" class="nav-link {{@$activedetail}}"
                    href="{{url('member/productdetail/'.@$id)}}"> Detail</a>
            </li>
            <li class="nav-item">
                <a aria-expanded="false" class="nav-link "
                    href="#">Pelanggan</a>
            </li>
            <li class="nav-item">
                <a aria-expanded="false" class="nav-link {{@$assetact}}"
                    href="{{url('member/productdetail/'.@$id.'/productasset')}}">Asset</a>
            </li>
            <li class="nav-item">
                <a aria-expanded="false" class="nav-link "
                    href="#">Stok</a>
            </li>
            <li class="nav-item">
                <a aria-expanded="false" class="nav-link "
                    href="#">Team</a>
            </li>
            <li class="nav-item">
                <a aria-expanded="false" class="nav-link "
                    href="#">Album</a>
            </li>
        </ul>
    </div>
</div>