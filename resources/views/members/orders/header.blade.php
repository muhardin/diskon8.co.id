@php
$confirms = \App\Order::select('orders.*', 'products.name as product_name', 'users.name as ordered_by')
            //->where('order_status', @$_GET['status'])
            ->where('orders.reseller_id',Auth::user()->id)
            ->leftJoin('products', 'products.id', '=', 'orders.product_id')
            ->leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->get();    
@endphp

<div class="os-tabs-w p-0">
    <div class="os-tabs-controls mb-0">
        <ul class="nav nav-tabs upper">
            <li class="nav-item">
            <a aria-expanded="false" class="nav-link {{@$proactive}}"
                    href="{{url('/member/order/prospek')}}">Prospek</a>
            </li>
            <li class="nav-item">
            <a aria-expanded="false" class="nav-link {{@$ordactive}}"
            href="{{url('/member/order')}}">Order Masuk <button class="text-light btn btn-sm btn-primary m-0" data-toggle="tooltip" data-placement="top" title="Detail">{{@$confirms->count()}}</button></a>
            </li>
            <li class="nav-item">
                <a aria-expanded="false" class="nav-link {{@$cnfactive}}"
                    href="{{url('/member/order?status=processing')}}">Konfirmasi<button class="text-light btn btn-sm btn-primary m-0" data-toggle="tooltip" data-placement="top" title="Detail">{{@$confirms->where('order_status','processing')->count()}}</button></a>
            </li>
            <li class="nav-item">
            <a aria-expanded="false" class="nav-link {{@$piadactive}}"
                    href="{{url('/member/order?status=paid')}}">Pembayaran Diterima<button class="text-light btn btn-sm btn-primary m-0" data-toggle="tooltip" data-placement="top" title="Detail">{{@$confirms->where('order_status','processing')->count()}}</button></a>
            </li>
            <li class="nav-item">
                <a aria-expanded="false" class="nav-link {{@$packactive}}"
                    href="{{url('/member/order?status=packing')}}">Packing<button class="text-light btn btn-sm btn-primary m-0" data-toggle="tooltip" data-placement="top" title="Detail">{{@$confirms->where('order_status','processing')->count()}}</button></a>
            </li>
            <li class="nav-item">
                <a aria-expanded="false" class="nav-link {{@$deldactive}}"
                    href="{{url('/member/order?status=delivering')}}">Pengiriman<button class="text-light btn btn-sm btn-primary m-0" data-toggle="tooltip" data-placement="top" title="Detail">{{@$confirms->where('order_status','delivering')->count()}}</button></a>
            </li>
            <li class="nav-item">
            <a aria-expanded="false" class="nav-link {{@$successact}}"
                    href="{{url('/member/order?status=success')}}">Diterima Buyer<button class="text-light btn btn-sm btn-primary m-0" data-toggle="tooltip" data-placement="top" title="Detail">{{@$confirms->where('order_status','success')->count()}}</button></a>
            </li>
        </ul>
    </div>
</div>