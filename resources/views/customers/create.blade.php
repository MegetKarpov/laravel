@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="h3 mb-2 text-gray-800">Создание сотрудников</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Имя</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Фамилия</label>
                    <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Отчество</label>
                    <input type="text" class="form-control" name="patronymic" value="{{ old('patronymic') }}">
                </div>
                <div class="mb-3">
                    <select name="role" id="" class="form-control">
                        <option value="Мл. специалист" @if(old('role') == 'Мл. специалист') selected @endif>Мл. специалист</option>
                        <option value="Специалист" @if(old('role') == 'Специалист') selected @endif>Специалист</option>
                        <option value="Ст. специалист" @if(old('role') == 'Ст. специалист') selected @endif>Ст. специалист</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Дата рождения</label>
                    <input type="date" class="form-control" name="birthday" value="{{ old('birthday') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Телефон</label>
                    <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
