<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="{{route('login.store')}}">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

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

                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('home') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-btn>Login</x-form-btn>
        </div>
    </form>

</x-layout>
