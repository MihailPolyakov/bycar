@extends('templates.template-index')

@section('title')Домашняя страница@endsection

@section('content')
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">By car</h5>
        <a class="btn btn-outline-primary mx-2" href="login.php">Войти</a>
        <a class="btn btn-outline-primary mx-2" href="registrate.php">Зарегестрироваться</a>
    </div>
@endsection



