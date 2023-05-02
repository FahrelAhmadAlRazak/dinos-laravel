<main class="flex">
        <div id="sidebar" class="bg-admin-secondary hidden sm:flex flex-col gap-5 lg:w-1/6 pt-28 h-screen">
            <div class="flex items-center gap-3 mx-4">
                <img src="{{ asset('images/user.svg') }}" class="h-12" alt="">
                @if(Str::length(Auth::guard('dataAkunAdmin')->user()) > 0)
                <p class="text-white hidden lg:block">{{ Auth::guard('dataAkunAdmin')->user()->nama }}</p>
                @elseif(Str::length(Auth::guard('dataAkunMitra')->user()) > 0)
                <p class="text-white hidden lg:block">{{ Auth::guard('dataAkunMitra')->user()->nama }}</p>
                @elseif(Str::length(Auth::guard('dataAkunKurir')->user()) > 0)
                <p class="text-white hidden lg:block">{{ Auth::guard('dataAkunKurir')->user()->nama }}</p>
                @endif

            </div>
            <hr>
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/home_active.svg') }}" class="w-5" alt="">
                <p class="text-yellow hidden lg:block">Dashboard</p>
            </a>

            <a href="{{ route('account') }}" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/person.svg') }}" class="w-5" alt="">
                <p class="text-white hidden lg:block">Akun</p>
            </a>
            @if(Str::length(Auth::guard('dataAkunAdmin')->user()) > 0)
            
            <a href="{{ route('pengaj') }}" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/document.svg') }}" class="w-5" alt="">
                <p class="text-white hidden lg:block">Pengajuan</p>
            </a>
            @endif

            @if(Str::length(Auth::guard('dataAkunMitra')->user()) > 0)
            <a href="{{ route('pengaj') }}" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/document.svg') }}" class="w-5" alt="">
                <p class="text-white hidden lg:block">Pengajuan</p>
            </a>
            @endif
           
           
            <!-- <a href="{{ route('pengaj') }}" class="flex items-center gap-3 px-8">
                <img src="images/document.svg" class="w-5" alt="">
                <p class="text-white hidden lg:block">Pengajuan</p>
            </a> -->
            
            

            
            <a href="{{ route('pengiriman') }}" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/truck.svg') }}" class="w-5" alt="">
                <p class="text-white hidden lg:block">Pengiriman</p>
            </a>


            
            <!-- <a href="/test/pages/admin/" class="flex items-center gap-3 px-8">
                <img src="images/monitor.svg" class="w-5" alt="">
                <p class="text-white hidden lg:block">Monitor</p>
            </a> -->
            @if(Str::length(Auth::guard('dataAkunAdmin')->user()) > 0)
            
            <a href="/test/pages/admin/" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/monitor.svg') }}" class="w-5" alt="">
                <p class="text-white hidden lg:block">Monitor</p>
            </a>
            @endif
            @if(Str::length(Auth::guard('dataAkunMitra')->user()) > 0)
            <a href="/test/pages/admin/" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/monitor.svg') }}" class="w-5" alt="">
                <p class="text-white hidden lg:block">Monitor</p>
            </a>
            @endif
            
            <!-- <a href="/test/pages/mitra/" class="flex items-center gap-3 px-8">
                <img src="images/penjadwalan.svg" class="w-5" alt="">
                <p class="text-white hidden lg:block">Penjadwalan</p>
            </a> -->
            @if(Str::length(Auth::guard('dataAkunAdmin')->user()) > 0)
            
            <a href="/test/pages/mitra/" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/pencatatan.svg') }}" class="w-5" alt="">
                <p class="text-white hidden lg:block">Pencatatan</p>
            </a>
            @endif
            @if(Str::length(Auth::guard('dataAkunMitra')->user()) > 0)
            <a href="/test/pages/mitra/" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/pencatatan.svg') }}" class="w-5" alt="">
                <p class="text-white hidden lg:block">Pencatatan</p>
            </a>
            @endif

            
            <!-- <a href="/test/pages/mitra/" class="flex items-center gap-3 px-8">
                <img src="images/monitor.svg" class="w-5" alt="">
                <p class="text-white hidden lg:block">Monitor</p>
            </a> -->
            @if(Str::length(Auth::guard('dataAkunAdmin')->user()) > 0)
            
            <a href="/test/pages/admin/" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/blog.svg') }}" class="w-5" alt="">
                <p class="text-white hidden lg:block">Artikel</p>
            </a>
            @endif
            @if(Str::length(Auth::guard('dataAkunMitra')->user()) > 0)
            <a href="/test/pages/admin/" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/blog.svg') }}" class="w-5" alt="">
                <p class="text-white hidden lg:block">Artikel</p>
            </a>
            @endif


            @if(Str::length(Auth::guard('dataAkunAdmin')->user()) > 0)
            <a href="{{ route('dataPartner') }}" class="flex items-center gap-3 px-8">
                <img src="{{ asset('images/hand.svg') }}" class="w-5" alt="">
                <p class="text-white hidden lg:block">Partner</p>
            </a>
           @endif
        </div>