@extends('layouts.admin')

@section('title', 'Orders Management Page')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Orders table</h1>
<p class="mb-4"></p>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Ordinal Number</th>
                        <th>Id</th>
                        <th>Product name</th>
                        <th>Ordered date</th>
                        <th>Customer name</th>
                        <th>Total</th>
                        <th>Order status</th>
                        <th>Payment status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Ordinal Number</th>
                        <th>Id</th>
                        <th>Product name</th>
                        <th>Ordered date</th>
                        <th>Customer name</th>
                        <th>Total</th>
                        <th>Order status</th>
                        <th>Payment status</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($orders as $index => $order)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $order->order_id }}</td>
                        <td>
                            @if ($order->product_id === '')
                            @foreach ($order->products as $product)
                            {{ $product['title'] }}
                            <br>
                            @endforeach
                            @else
                            {{ $order->product->title }}
                            @endif
                        </td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>${{ $order->total }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->payment_status }}</td>
                        <td>
                            @if(Auth::user()->role == 'admin')
                            <a href="{{ route('order.view', $order->order_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/show.png') }}" alt="" width="20px" height="20px" />
                            </a>
                            &nbsp;
                            <a href="#" class="edit-status" data-order-id="{{ $order->order_id }}" data-order-status="{{ $order->status }}" data-toggle="modal" data-target="#editStatusModal{{ $order->order_id }}">
                                <img src="{{ asset('img/edit.png') }}" alt="Edit" width="20px" height="20px" />
                            </a>
                            @endif
                        </td>
                        <div class="modal fade" id="editStatusModal{{ $order->order_id }}" tabindex="-1" role="dialog" aria-labelledby="editStatusModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editStatusModalLabel">Edit Order Status</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="editStatusForm" action="{{ route('order.update', ['id' => $order->order_id]) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="order_id" id="editOrderId" value="">
                                            <div class="form-group">
                                                <label for="editStatus">New Status</label>
                                                <select name="status" class="form-control" id="editStatus">
                                                    @foreach($orderStatusOptions as $statusOption)
                                                    <option value="{{ $statusOption }}" {{ $order->status == $statusOption ? 'selected' : '' }}>
                                                        {{ $statusOption }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Edit Status Modal -->
<!-- <div class="modal fade" id="editStatusModal" tabindex="-1" role="dialog" aria-labelledby="editStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStatusModalLabel">Edit Order Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editStatusForm" action="{{ route('order.update', ['id' => $order->order_id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="order_id" id="editOrderId" value="">
                    <div class="form-group">
                        <label for="editStatus">New Status</label>
                        <select name="status" class="form-control" id="editStatus">
                            @foreach($orderStatusOptions as $statusOption)
                            <option value="{{ $statusOption }}">
                                {{ $statusOption }}
                            </option>
                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div> -->
@endsection

@section('scripts')
<script>
    $('.edit-status').click(function() {
        var orderId = $(this).data('order-id');
        var orderStatus = $(this).data('order-status');

        $('#editOrderId' + orderId).val(orderId);

        $('#editStatus' + orderId).val(orderStatus);

        $('#editStatusModal' + orderId).modal('show');
    });

    $('[id^="editStatusModal"]').on('shown.bs.modal', function() {
        var orderId = this.id.replace('editStatusModal', '');
        var orderStatus = $('#editStatus' + orderId).val();
        $('#editStatus' + orderId).val(orderStatus).change();
    });
</script>
@endsection