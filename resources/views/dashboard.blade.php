@extends('layouts.app')
@section('content')
    @if (Auth::user()->hasRole(['manager']))
        @include('roles.manager.dashboard')
    @elseif(Auth::user()->hasRole(['supervisor']))
        @include('roles.supervisor.dashboard')
    @elseif(Auth::user()->hasRole(['hr']))
        @include('roles.hr_and_finance.dashboard')
    @elseif(Auth::user()->hasRole(['umfrage_agent']))
        @include('roles.umfrage_agent.dashboard')
    @endif
@endsection
