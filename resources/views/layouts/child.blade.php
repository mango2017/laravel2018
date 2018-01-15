@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>hello child</p>
@endsection

@section('content')
    <p>hello world child</p>
@endsection

@section('content', 'contentjdmjdjdj')