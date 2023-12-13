@extends('layouts.admin')

@section('title', 'Customers Management Page')

@section('content')
<!-- <h1>Welcome to my homepage!</h1> -->
<!-- Your page content goes here -->
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Customers table</h1>
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
                        <th>Name</th>
                        <th>Joined date</th>
                        <!-- <th>Phone number</th> -->
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Joined date</th>
                        <!-- <th>Phone number</th> -->
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($customerUsers as $user)
                    <tr>
                        <td>{{ $user->user_id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->created_at}}</td>
                        <!-- <td>{{ $user->phone	}}</td> -->
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('customer.view', $user->user_id) }}" style="text-decoration: none;">
                                <img src="{{ asset('img/show.png') }}" alt="" width="20px" height="20px" />
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    <!-- <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
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
                        <td>
                            <img src="./img/delete.png" alt="" width="20px" height="20px" />
                            &nbsp;
                            <img src="./img/edit.png" alt="" width="20px" height="20px" />
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection