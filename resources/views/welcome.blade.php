@extends('layouts.app')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Список сотрудников</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-success mb-2">Создать сотрудника</a>
   <div class="row">
       <div class="col-md-6">
           <div class="card shadow mb-4">
               <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
               </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                           <thead>
                           <tr>
                               <th>Имя</th>
                               <th>Фамилия</th>
                               <th>Отчество</th>
                               <th>Должность</th>
                               <th>Телефон</th>
                               <th>Дата рождения</th>
                           </tr>
                           </thead>
                           <tbody>
                           @foreach($customers as $customer)
                               <tr>
                                   <td>{{ $customer->name }}</td>
                                   <td>{{ $customer->lastname }}</td>
                                   <td>{{ $customer->patronymic }}</td>
                                   <td>{{ $customer->role }}</td>
                                   <td>{{ $customer->phone }}</td>
                                   <td>{{ $customer->birthday }}</td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>

@endsection
