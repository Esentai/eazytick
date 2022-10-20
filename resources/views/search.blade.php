@extends('layouts.main')

@section('content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-area-content">
                    <h1>Поиск друзей</h1>
                </div>
            </div>
        </div>
    </div>
</section><!-- breadcrumb area end -->
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<section class="details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="details-content">
                    <div class="details-reply">
                        <h2>Оставить сообщение</h2>
                        <form action="{{ route('search.store') }}" method="POST" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="select-container">
                                        <input name="name" type="text" placeholder="Name"/>
                                        <i class="icofont icofont-ui-user"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="select-container">
                                        <input name="email" type="text" placeholder="Email"/>
                                        <i class="icofont icofont-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="select-container">
                                        <input name="phone" type="text" placeholder="Phone"/>
                                        <i class="icofont icofont-phone"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="textarea-container">
                                        <textarea name="message" placeholder="Type Here Message"></textarea>
                                        <button><i class="icofont icofont-send-mail"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="details-comment">
                                <button type="submit" class="theme-btn theme-btn2" href="#">Post Comment</button>
                            </div>
                        </form>
                    </div>

                </div>
                @foreach($messages as $message)
                    <div style="font-size: 18px">
                        <a href="tel:{{$message->phone}}">{{$message->name}}</a>: {{$message->message}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>

@endsection
