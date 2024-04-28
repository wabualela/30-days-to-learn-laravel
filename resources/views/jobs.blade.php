<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['name'] }}</strong>: ${{ number_format($job['salary'], 2) }} per year.
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
