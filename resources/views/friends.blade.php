<x-app-layout>
    <div class="relative items-center justify-center w-full max-w-6xl py-6 mx-auto">
        <div class="flex gap-3">
            <x-sidebar />
            <div class="w-full">
                <div class="text-gray-900">
                    <div class="p-4 flex">
                        <h2 class="text-2xl">Friends</h2>
                    </div>
                    @if(count($friends) == 0)
                        <p class="text-center my-10">You do not currently have any friends.</p>
                    @else
                        <div class="px-3 py-4 flex justify-center">
                            <table class="w-full text-md bg-black shadow-md rounded mb-4">
                                <tbody>
                                    <tr class="border-b text-white">
                                        <th class="text-left p-3 px-5">Name</th>
                                        <th class="text-left p-3 px-5">Email</th>
                                        <th class="text-left p-3 px-5">Friends Since</th>
                                    </tr>
                                    @foreach ($friends as $friend)
                                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                            <td class="p-3 px-5">
                                                <a href="/friend/{{ $friend->id }}">{{ $friend->name }}</a>
                                            </td>
                                            <td class="p-3 px-5">
                                                {{ $friend->email }}
                                            </td>
                                            <td class="p-3 px-5">
                                                {{ $friend->created_at }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4">
                            {{ $friends->links() }}
                        </div>
                    @endif
                </div>
                <div>
                    <div class="text-gray-900">
                        <div class="p-4 flex">
                            <h2 class="text-2xl">Friend Requests Received</h2>
                        </div>
                        @if(count($invites_received) == 0)
                            <p class="text-center my-10">You have no pending friend requests.</p>
                        @else
                            <div class="px-3 py-4 flex justify-center">
                                <table class="w-full text-md bg-black shadow-md rounded mb-4">
                                    <tbody>
                                        <tr class="border-b text-white">
                                            <th class="text-left p-3 px-5">Name</th>
                                            <th class="text-left p-3 px-5">Email</th>
                                            <th class="text-left p-3 px-5">Friends Since</th>
                                        </tr>
                                        @foreach ($invites_received as $friend)
                                            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                                <td class="p-3 px-5">
                                                    <a href="/friend/{{ $friend->id }}">{{ $friend->name }}</a>
                                                </td>
                                                <td class="p-3 px-5">
                                                    {{ $friend->email }}
                                                </td>
                                                <td class="p-3 px-5">
                                                    {{ $friend->created_at }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="px-4">
                                {{ $invites_received->links() }}
                            </div>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="text-gray-900">
                        <div class="p-4 flex">
                            <h2 class="text-2xl">Friend Requests Sent</h2>
                        </div>
                        @if(count($invites_sent) == 0)
                            <p class="text-center my-10">You have not sent any friend requests.</p>
                        @else
                            <div class="px-3 py-4 flex justify-center">
                                <table class="w-full text-md bg-black shadow-md rounded mb-4">
                                    <tbody>
                                        <tr class="border-b text-white">
                                            <th class="text-left p-3 px-5">Name</th>
                                            <th class="text-left p-3 px-5">Email</th>
                                            <th class="text-left p-3 px-5">Friends Since</th>
                                        </tr>
                                        @foreach ($invites_sent as $friend)
                                            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                                <td class="p-3 px-5">
                                                    <a href="/friend/{{ $friend->id }}">{{ $friend->name }}</a>
                                                </td>
                                                <td class="p-3 px-5">
                                                    {{ $friend->email }}
                                                </td>
                                                <td class="p-3 px-5">
                                                    {{ $friend->created_at }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="px-4">
                                {{ $invites_sent->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>