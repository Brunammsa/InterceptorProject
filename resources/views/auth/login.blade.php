<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-blue-jeans font-semibold">
        Login with
    </div>
    <div>
        <a href="{{route('login.social.redirect', ['driver' => 'google'])}}" type="button" class="mt-3 bg-gray-modificate text-blue-jeans hover:bg-zinc-300 hover:text-gray-950 font-semibold w-full border border-1 border-blue-jeans rounded-md">
            Google 
        </a>
    </div>
    <div>
        <a href="{{route('login.social.redirect', ['driver' => 'facebook'])}}" type="button" class="bg-gray-modificate text-blue-jeans hover:bg-zinc-300 hover:text-gray-950 font-semibold mt-2 w-full border border-1 border-blue-jeans rounded-md">
            Facebook
        </a>
    </div>
</x-guest-layout>
