<section class="ms-md-5 ms-4 py-4">
    <header>
        <div>
            <span class="titleprofile">Passwort Aktualisieren </span>
           </div>
           <div class="mt-2">
            <span class="subtitleprofile">Stellen Sie sicher, dass Ihr Konto ein langes, zufälliges Passwort verwendet, um sicher zu bleiben.
            </span>
           </div>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-auto">
                <div class="mt-4 py-3">
                    <span class="titleinput">Aktuelles Passwort</span>
                </div>
            </div>
            <div class="col">
                <div class="mt-4 " style="margin-left: 53px !important">
                    <label for="current_password" :value="__('Current Password')"></label>
                    <input id="current_password" name="current_password" type="password" class="inputprofile inputpassword " autocomplete="current-password" >
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-auto">
                <div class="mt-4 py-3">
                    <span class="titleinput">Neues Passwort
                    </span>
                </div>
            </div>
            <div class="col">
                <div class="mt-4 " style="margin-left: 71px !important">
                    <label for="password" :value="__('New Password')"></label>
                    <input id="password" name="password" type="password" class="inputprofile inputpassword " autocomplete="new-password" >
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2"  />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-auto">
                <div class="mt-4 py-3">
                    <span class="titleinput">Bestätigen Sie Ihr Passwort</span>
                </div>
            </div>
            <div class="col">
                <div class="mt-4 ">
                    <label for="password_confirmation" :value="__('Confirm Password')"></label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="inputprofile inputpassword" autocomplete="new-password" >
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2"  />
                </div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse mt-4 me-5 mb-4">
            <button class="btnprofile w-25">Speichern</button>
        </div>
        <hr style="margin-bottom: 25px;margin-right: 48px;">
        
        {{-- <div>
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div> --}}

        {{-- <div>
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div> --}}

        {{-- <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div> --}}

        {{-- <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
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
