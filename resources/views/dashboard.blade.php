<x-app-layout>
    <div class="relative items-center justify-center w-full max-w-6xl py-6 mx-auto">
        <div class="flex gap-3">
            <x-sidebar />
            <div>
                <h2>My Plans</h2>
                <p>{{ $plans }}</p>
                <br>
                <h2>Invited Plans</h2>
                <p>{{ $plans_invited }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
