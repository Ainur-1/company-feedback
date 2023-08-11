@extends('layouts.app')

@section('title-block')Страница контактов@endsection

@section('content')
<h1>Страница контактов</h1>

<form action="{{ route('contact-form') }}" method="POST">
    @csrf

    <div class="m-2 form-group">
        <label for="name">Введите имя</label>
        <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
    </div>

    <div class="m-2 form-group">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>

    <div class="m-2 form-group">
        <label for="subject">Тема сообщения</label>
        <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
    </div>

    <div class="m-2 form-group">
        <label for="message">Сообщение</label>
        <textarea name="message" placeholder="Введите cообщение" id="message" class="form-control"></textarea>
    </div>

    <button type="submit" class="m-2 btn btn-success">Отправить</button>
</form>
@endsection

@section('aside')
@parent
<p>Дополнительный текст</p>
@endsection