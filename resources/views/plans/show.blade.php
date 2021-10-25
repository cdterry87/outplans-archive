<x-app-layout>
  <div class="relative items-center justify-center w-full max-w-6xl py-6 mx-auto">
    <div class="flex gap-3">
        <x-sidebar />
        <div class="w-full">
            <div class="text-gray-900">
              <h2 class="text-2xl">{{ $plan->title }}</h2>
              <div class="text-sm">
                Published {{ Carbon\Carbon::parse($plan->published)->diffForHumans() }}
              </div>
              <div class="flex space-x-12 my-5">
                <div>
                  <h3 class="text-lg font-bold">Where:</h3>
                  {{ $plan->location }}
                </div>
                <div>
                  <h3 class="text-lg font-bold">When:</h3>
                  {{ $plan->when }}
                </div>
              </div>
              <h3 class="text-lg font-bold">Details:</h3>
              <p>
                {{ $plan->description }}
              </p>
              <div class="mt-5">
                <strong>
                  Privacy: {{ $plan->privacy }}
                </strong>
              </div>
            </div>
        </div>
    </div>
  </div>
</x-app-layout>