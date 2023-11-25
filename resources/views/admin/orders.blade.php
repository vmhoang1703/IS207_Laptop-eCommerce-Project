@extends('layouts.admin')

@section('title', 'Orders Management Page')

@section('content')
<!-- <h1>Welcome to my homepage!</h1> -->
<!-- Your page content goes here -->
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Orders table</h1>
<p class="mb-4">
    <!-- DataTables is a third party plugin that is used to generate the
              demo table below. For more information about DataTables, please
              visit the -->
    <!-- <a target="_blank" href="https://datatables.net"
                >official DataTables documentation</a
              >. -->
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <!-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  DataTables Example
                </h6>
              </div> -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product name</th>
                        <th>Ordered date</th>
                        <th>Customer name</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Product name</th>
                        <th>Ordered date</th>
                        <th>Customer name</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>
                            <img src="./img/delete.png" alt="" width="20px" height="20px" />
                            &nbsp;
                            <img src="./img/edit.png" alt="" width="20px" height="20px" />
                        </td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                        <td>
                            <img src="./img/delete.png" alt="" width="20px" height="20px" />
                            &nbsp;
                            <img src="./img/edit.png" alt="" width="20px" height="20px" />
                        </td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                        <td>
                            <img src="./img/delete.png" alt="" width="20px" height="20px" />
                            &nbsp;
                            <img src="./img/edit.png" alt="" width="20px" height="20px" />
                        </td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                        <td>
                            <img src="./img/delete.png" alt="" width="20px" height="20px" />
                            &nbsp;
                            <img src="./img/edit.png" alt="" width="20px" height="20px" />
                        </td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                        <td>
                            <img src="./img/delete.png" alt="" width="20px" height="20px" />
                            &nbsp;
                            <img src="./img/edit.png" alt="" width="20px" height="20px" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection