@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Selamat Datang, {{ Auth::user()->name }}!</h3>
            </div>
        </div>
    </div>
@endsection
