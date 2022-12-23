@extends('layouts.app')
@section('content')
    @if (Auth::user()->hasRole(['manager']))
        @include('roles.manager.dashboard')
    @elseif(Auth::user()->hasRole(['call_agent']))
        @include('roles.call_agent.dashboard')
    @elseif(Auth::user()->hasRole(['supervisor']))
        @include('roles.supervisor.dashboard')
    @elseif(Auth::user()->hasRole(['team_leader']))
        @include('roles.team_leader.dashboard')
    @elseif(Auth::user()->hasRole(['hr']))
        @include('roles.hr_and_finance.dashboard')
    @elseif(Auth::user()->hasRole(['umfrage_agent']))
        @include('roles.umfrage_agent.dashboard')
    @elseif(Auth::user()->hasRole(['quality_agent']))
        @include('roles.quality_agent.dashboard')
    @elseif(Auth::user()->hasRole(['confirmation_agent']))
        @include('roles.confirmation_agent.dashboard')
    @endif
@endsection
