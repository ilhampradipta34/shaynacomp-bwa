<div class="bg-[#F6F7FA] relative z-10">
        <div class="container max-w-[1130px] mx-auto pt-10">
            <nav class="flex flex-wrap items-center justify-between bg-white p-[20px_30px] rounded-[20px] gap-y-3">
                <a href="{{ route('front.index') }}" class="flex items-center gap-3">
                    <div class="flex shrink-0 h-[43px] overflow-hidden">
                        <img src="{{ asset('assets/logo/logo.svg') }}" class="object-contain w-full h-full" alt="ShaynaComp logo">
                    </div>
                    <div class="flex flex-col">
                        <p class="font-extrabold text-xl leading-[30px]">ShaynaComp</p>
                        <p class="text-sm text-cp-light-grey">Build Futuristic Dreams</p>
                    </div>
                </a>
                <ul class="flex flex-wrap items-center gap-[30px]">
                    <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300 {{ request()->routeIs('front.index') ? 'text-cp-dark-blue' : '' }}">
                        <a href="{{ route('front.index') }}">Home</a>
                    </li>
                    <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300"><a href="">Products</a></li>
                    <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300 {{ request()->routeIs('front.team') ? 'text-cp-dark-blue' : '' }}"><a href="{{ route('front.team') }}">Teams</a></li>
                    <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300 "><a href="">Blog</a></li>
                    <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300 {{ request()->routeIs('front.about') ? 'text-cp-dark-blue' : '' }}"><a href="{{ route('front.about') }}">About</a></li>
                </ul>
                <a href="{{ route('front.appointment') }}" class="bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Get a Quote</a>
            </nav>
        </div>
    </div>
