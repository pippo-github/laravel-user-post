        {{-- 
        
            parte della navBarAuth
            
        --}}

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    {{-- 
                        url modificata da me da "home" , default di auth, a: "dashboard"    
                    --}}
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">{{ auth::user()->name}}</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>


        
        {{-- 
        
            parte della navBarAuth
            
        --}}