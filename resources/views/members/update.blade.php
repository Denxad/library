@extends('layouts.main')

@section('title', 'Editar - ' . $member->name)
@section('header', 'Editar membro')
@section('small-header', $member->name)

@section('content')
    <div class="update-form">
        {{Form::model($member, ['url' => '/member/update/' . $member->id])}}
        @include('members.form')
        {{ Form::close() }}
    </div>
@stop