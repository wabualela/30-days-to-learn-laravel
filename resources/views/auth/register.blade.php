<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="first_name">First name</x-form-label>
                        <x-form-field class="mt-2">
                            <x-form-input name="first_name" id="first_name" value="{{ old('first_name') }}" />
                            <x-form-error name="first_name" />
                        </x-form-field>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="last_name">Last name</x-form-label>
                        <x-form-field class="mt-2">
                            <x-form-input name="last_name" id="last_name" value="{{ old('last_name') }}" />
                            <x-form-error name="last_name" />
                        </x-form-field>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="email">Email</x-form-label>
                        <x-form-field class="mt-2">
                            <x-form-input name="email" id="email" type="email" value="{{ old('email') }}" />
                            <x-form-error name="email" />
                        </x-form-field>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="password">Password</x-form-label>
                        <x-form-field class="mt-2">
                            <x-form-input name="password" id="password" type="password"
                                value="{{ old('password') }}" />
                            <x-form-error name="password" />
                        </x-form-field>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label for="password_confirmation">Password Confirmation</x-form-label>
                        <x-form-field class="mt-2">
                            <x-form-input name="password_confirmation" id="password_confirmation" type="password"
                                value="{{ old('password_confirmation') }}" />
                            <x-form-error name="password_confirmation" />
                        </x-form-field>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('home') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-btn>Register</x-form-btn>
        </div>
    </form>

</x-layout>
