<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div>
                <x-jet-label for="f_name" value="{{ __('First Name') }}" />
                <x-jet-input id="f_name" class="block mt-1 w-full" type="text" name="f_name" :value="old('f_name')" required autofocus autocomplete="f_name" />
            </div>

           

            <div>
            <x-jet-label for="gender" value="{{ __('Gender') }}" />
            <select name="gender" x-jet-input id="gender" class="block mt-1 w-full" type="gender" name="gender" :value="old('gender')" required autofocus autocomplete="gender">

                <option value="other"> Other</option>
                <option value="male"> Male</option>
                <option value="female"> Female</option>
            </select>
            </div>


            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div></br>

            <div>
                <x-jet-label for="phone_number" value="{{ __('Phone Number') }}" />
                <x-jet-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required autofocus autocomplete="phone_number" />
            </div></br>

            <div>
            <x-jet-label for="qualification" value="{{ __('Qualification') }}" />
            <select name="qualification" x-jet-input id="qualification" class="block mt-1 w-full" type="qualification" name="name" :value="old('qualification')" required autofocus autocomplete="qualification">

                <option value="default"> Default</option>
                <option value="10th"> 10th</option>
                <option value="12th"> 12th</option>
                <option value="diploma"> Diploma</option>
                <option value="graduate"> Graduate</option>
                <option value="post_graduate"> Post Graduate</option>
            </select>
            </div></br>
            

            <div>
            <x-jet-label for="address" value="{{ __('Address') }}" />
            <textarea name ="address" rows ="10" cols="40">
            </textarea>
            </div>
        

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
