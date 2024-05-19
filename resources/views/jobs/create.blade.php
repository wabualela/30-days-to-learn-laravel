<x-layout>
    <x-slot:heading>
        Create job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of information from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="title">Title</x-form-label>
                        <x-form-field class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Full Stack Developer"
                                :value="old('title')"  autofocus/>
                            <x-form-error name="title" />
                        </x-form-field>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-label for="salary">Salary</x-form-label>
                        <x-form-field class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="Full Stack Developer" autocomplete="transaction-amount"
                                :value="old('salary')" />
                                <x-form-error name="salary" />
                        </x-form-field>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-btn>Save</x-form-btn>
        </div>
    </form>

</x-layout>
