<x-app-layout>
    <div class="relative items-center justify-center w-full max-w-6xl py-6 mx-auto">
        <div class="flex gap-3">
            <x-sidebar />
            <div class="w-full">
                <div class="text-gray-900">
                    <div class="p-4 flex">
                        <h2 class="text-3xl">My Upcoming Plans</h2>
                    </div>
                    @if(count($plans_upcoming) == 0)
                        <p class="text-center my-10">You do not have any upcoming plans.</p>
                    @else
                        <div class="px-3 py-4 flex justify-center">
                            <table class="w-full text-md bg-black shadow-md rounded mb-4">
                                <tbody>
                                    <tr class="border-b text-white">
                                        <th class="text-left p-3 px-5">Title</th>
                                        <th class="text-left p-3 px-5">Location</th>
                                        <th class="text-left p-3 px-5">When</th>
                                        <th class="text-left p-3 px-5">Privacy</th>
                                    </tr>
                                    @foreach ($plans_upcoming as $plan)
                                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                            <td class="p-3 px-5">
                                                <a href="/plans/{{ $plan->id }}" class="link">
                                                    {{ $plan->title }}
                                                </a>
                                            </td>
                                            <td class="p-3 px-5">
                                                {{ $plan->location }}
                                            </td>
                                            <td class="p-3 px-5">
                                                {{ $plan->when }}
                                            </td>
                                            <td class="p-3 px-5">
                                                {{ $plan->privacy }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4">
                            {{ $plans_upcoming->links() }}
                        </div>
                    @endif
                </div>
                <div>
                    <div class="text-gray-900">
                        <div class="p-4 flex">
                            <h2 class="text-3xl">Upcoming Invites</h2>
                        </div>
                        @if(count($plans_invited) == 0)
                            <p class="text-center my-10">There are currently no plans you are invited to.</p>
                        @else
                            <div class="px-3 py-4 flex justify-center">
                                <table class="w-full text-md bg-black shadow-md rounded mb-4">
                                    <tbody>
                                        <tr class="border-b text-white">
                                            <th class="text-left p-3 px-5">Title</th>
                                            <th class="text-left p-3 px-5">Location</th>
                                            <th class="text-left p-3 px-5">When</th>
                                            <th class="text-left p-3 px-5">Status</th>
                                        </tr>
                                        @foreach ($plans_invited as $plan)
                                            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                                <td class="p-3 px-5">
                                                    <a href="/plans/{{ $plan->id }}" class="link">
                                                        {{ $plan->title }}
                                                    </a>
                                                </td>
                                                <td class="p-3 px-5">
                                                    {{ $plan->location }}
                                                </td>
                                                <td class="p-3 px-5">
                                                    {{ Carbon\Carbon::parse($plan->when)->diffForHumans() }}
                                                </td>
                                                <td class="p-3 px-5">
                                                    {{ $plan->status }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="px-4">
                                {{ $plans_invited->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
