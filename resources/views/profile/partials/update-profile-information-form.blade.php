<section>
    <header>
        <div class="mt-4">
        <div>
            <span class="titleprofile">Profil-Informationen</span>
        </div>
        <div class="mt-2">
            <span class="subtitleprofile">Aktualisieren Sie die Profilinformationen Ihres Kontos und Ihre E-Mail Adresse.</span>
        </div>
    </div>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-12 col-lg-6 ">
                <div class="row">
                    <div class="col-auto">
                        <div class="mt-4 py-3">
                            <span class="titleinput">Name</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="">
                            <label for="name" :value="__('Name')"></label>
                            <input id="name" name="name" type="text" class="inputprofile w-100"
                                value="{{ Auth::user()->name }}" required autofocus autocomplete="name">
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                  
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-auto">
                        <div class="mt-4 py-3">
                            <span class="titleinput">Email</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="">
                            <label for="email" :value="__('Email')"></label>
                            <input id="email" name="email" type="email" class="inputprofile w-100"
                             value="{{ Auth::user()->email }}" required autocomplete="email">
                             <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex flex-row-reverse mt-4">
            <button  class="btnprofile w-25">Save</button>
        </div> --}}
        <hr style="margin-top: 45px;">

        {{-- <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
          
        </div> --}}

        {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />


            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div> --}}

        {{-- <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div> --}}
    </form>
</section>
