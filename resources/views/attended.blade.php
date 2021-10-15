<x-app-layout>
    <div class="relative items-center justify-center w-full max-w-6xl py-6 mx-auto">
        <div class="flex gap-3">
            <x-sidebar />
            <div class="w-full">
                <div class="text-gray-900">
                    <div class="p-4 flex">
                        <h2 class="text-2xl">Attended Plans</h2>
                    </div>
                    @if(count($attended) == 0)
                        <p class="text-center my-10">There are no plans that you have attended.</p>
                    @else
                        <div class="px-3 py-4 flex justify-center">
                            <table class="w-full text-md bg-black shadow-md rounded mb-4">
                                <tbody>
                                    <tr class="border-b text-white">
                                        <th class="text-left p-3 px-5">Title</th>
                                        <th class="text-left p-3 px-5">Location</th>
                                        <th class="text-left p-3 px-5">When</th>
                                    </tr>
                                    @foreach ($attended as $plan)
                                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                            <td class="p-3 px-5">
                                                <a href="/plan/{{ $plan->id }}">{{ $plan->title }}</a>
                                            </td>
                                            <td class="p-3 px-5">
                                                {{ $plan->location }}
                                            </td>
                                            <td class="p-3 px-5">
                                                {{ $plan->when }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4">
                            {{ $attended->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>