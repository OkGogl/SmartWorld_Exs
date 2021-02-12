{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}

@extends('layouts')

@section('title')Главная  страница@endsection

@section('main_content')
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequuntur, culpa dicta doloribus ea error quidem reiciendis sapiente soluta voluptas. Amet culpa in laborum sit voluptatem. Consequuntur deserunt eveniet nesciunt.</p>
@endsection
