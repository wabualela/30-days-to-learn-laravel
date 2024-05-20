<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        This job pays ${{ $job->salary }} per year.
    </p>

    @can('update-job', $job)
        <p class="mt-6">
            <x-btn href="/jobs/{{ $job->id }}/edit">Edit Job</x-btn>
        </p>
    @endcan
</x-layout>
