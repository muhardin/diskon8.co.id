@extends('layouts.member_layout')
@section('content')
<div class="content-i">
        <div class="content-box">
<div class="element-wrapper">
<div class="element-actions">
<a class="btn btn-primary" href="{{url('/member/teamadd')}}">Tambah CS</a>
<a class="btn btn-info" href="#" data-toggle="modal" data-target=".bd-example-modal-sm">Invite CS</a>
</div>
<div class="element-header">
<h3>
    Tim
</h3>
</div>
<div class="element-box">
<div class="table-responsive">
    <table class="table table-bordered table-lg table-v2 table-striped">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Product
                </th>
                <th>
                    Sales
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
                                        <tr>
                    <td colspan="4" class="text-center">Anda Belum Memiliki CS, <a href="{{url('/member/teamadd')}}">Tambah CS</a></td>
                </tr>
                                </tbody>
    </table>

    <div class="row mt-3">
        <div class="col-md-5">
            Tampilkan
            <select id="pagination-offset">
                <option value="6">6</option>
                <option value="10" selected="selected">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
        </div>
        <div class="col-md-7 text-right">
            <div class="pagination-info mr-2">
                Tampilan hasil <span class="pagination-info-from">1</span> - <span class="pagination-info-to">10</span>
                dari <span class="pagination-info-total">0</span>
            </div>
            <button class="btn btn-sm btn-default btn-pagination prev" data-page="" data-number="0" style="display:none"><i class="fa fa-chevron-left"></i></button>
            <button class="btn btn-sm btn-default btn-pagination next" data-page="" data-number="2" style="display:none"><i class="fa fa-chevron-right"></i></button>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Undang CS ke Store</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">
    <form id="form-invite" novalidate="true">
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email CS" aria-label="Recipient's username" aria-describedby="button-addon2" required="">
            <div class="input-group-append">
                <button class="btn btn-primary disabled" type="submit" id="button-addon2">Invite</button>
            </div>
            
            <div class="help-block with-errors text-danger"></div>
        </div>
    </form>
</div>
</div>
</div>
</div>
<script type="text/template" id="template">
<% _.each(data.data, function(item) { %>
<tr>
<td>
    <%= item.name %>
</td>
<td>
    <%= item.email %>
</td>
<td>
    <%= item.total_product ? item.total_product : 0 %>
</td>
<td>
    <%= item.sales ? item.sales : 0 %>
</td>

<td class="row-actions">
    <a href="#" class="btn-remove text-danger" data-id="<% item.id %>">Delete</a>
</td>
</tr>
<% }) %>
</script>
    </div>
@endsection

