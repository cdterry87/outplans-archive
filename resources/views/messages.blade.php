<x-app-layout>
    <div class="relative items-center justify-center w-full max-w-6xl py-6 mx-auto">
        <div class="flex gap-3">
            <x-sidebar />
            <div class="w-full">
                <div class="text-gray-900">
                    <div class="p-4 flex">
                        <h2 class="text-2xl">Messages</h2>
                    </div>
                    @if(count($messages) == 0)
                        <p class="text-center my-10">You do not have any messages.</p>
                     @else
                        <div class="px-3 py-4 flex justify-center">
                            <table class="w-full text-md bg-black shadow-md rounded mb-4">
                                <tbody>
                                    <tr class="border-b text-white">
                                        <th class="text-left p-3 px-5">Message</th>
                                        <th class="text-left p-3 px-5">Received</th>
                                    </tr>
                                    @foreach ($messages as $message)
                                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                            <td class="p-3 px-5">
                                                {{ $message->text }}
                                            </td>
                                            <td class="p-3 px-5">
                                                {{ $message->created_at }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4">
                            {{ $messages->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>