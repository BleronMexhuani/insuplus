@extends('layouts.app')
@section('content')
    <div class="mt-5 ">
        <div class="col ms-0 ms-md-1 px-0 px-md-2 me-4">
            <div class="mt-4  px-2">
                <div class="bgform profileform mt-4 p-4 p-md-5">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class=" px-2">
                <div class="bgform updateform ">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div> --}}
        </div>
    </div>
@endsection
