@php
$currentUrl = url()->current();
$berandaRoutes = route('beranda');
$jadwalRoutes = route('keberangkatan');
@endphp

<nav class="block z-99 right-0 left-0 fixed w-full px-4 py-12 bg-transparent transition-all ease-in-out duration-500 lg:px-8 lg:py-8" id="navbar-main">
    <div class="flex items-center w-full justify-between text-slate-800">
        <div class="flex flex-row">
            <a href="#" class="mr-12 flex justify-center items-center cursor-pointer py-1.5 text-base text-slate-800 font-semibold rounded-xl">
                <img src="/assets/images/Logo/Brand-Logo.png" alt="Logo Almisbah" class="h-15 w-auto">
                <div class="flex flex-col" id="navbar-slogan">
                    <span class="text-white italic">#UmrohBerkah</span>
                    <span class="text-white italic">#BerkahDalamKesederhanaan</span>
                </div>
            </a>

            <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6 text-white" id="navbar-main-li">
                <li class="flex items-center p-1 text-sm gap-x-2 px-3 py-1.5" id="navbar-li">
                    <i class="fi fi-br-home"></i>

                    <a href="{{ route('beranda') }}" class="flex items-center">
                        Beranda
                    </a>
                </li>
                <li class="flex items-center p-1 text-sm gap-x-2" id="navbar-li">
                    <i class="fi fi-br-time-fast"></i>

                    <a href="{{ route('keberangkatan') }}" class="flex items-center">
                        Jadwal Keberangkatan
                    </a>
                </li>
                <li class="flex items-center p-1 text-sm gap-x-2" id="navbar-li">
                    <i class="fi fi-br-plane-alt"></i>

                    <a href="#" class="flex items-center">
                        Paket Umroh
                    </a>
                </li>
                <li
                    class="flex items-center p-1 text-sm gap-x-2" id="navbar-li">
                    <i class="fi fi-br-building"></i>

                    <a href="#" class="flex items-center">
                        Hotel
                    </a>
                </li>
            </ul>
        </div>

        <div class="items-center hidden gap-x-2 lg:flex bg-white px-4 py-3 rounded-2xl">
            <div class="w-full max-w-sm min-w-[200px]">
                <div class="relative">
                    <i class="fi fi-br-search absolute top-2.5 w-5 h-5 left-2.5 text-gray-600"></i>
                    <input type="text" class="w-full pl-10 pr-3 py-2 bg-transparent placeholder:text-slate-400 text-white text-sm border border-[var(--color-secondary)] rounded-md transition duration-300 ease focus:outline-none focus:border-[var(--color-secondary)] hover:border-[var(--color-secondary)] shadow-sm outline-none focus:ring-2 focus:ring-[var(--color-secondary)]" placeholder="Telusuri Paket..." />
                </div>
            </div>
            <button class="rounded-md bg-[var(--color-secondary)] py-2 px-4 text-center text-sm text-white active:scale-95 hover:cursor-pointer transition-all shadow-md hover:shadow-lg font-bold focus:shadow-none active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                Cari
            </button>
        </div>
        <button class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" type="button">
            <i class="fi fi-br-search"></i>
        </button>
    </div>
</nav>

<script>
    const currentUrl = window.location.href;
    const berandaRoutes = "{{ route('beranda') }}";

    $(function() {
        if (currentUrl === berandaRoutes) {
            $("#navbar-li").addClass('border-b-2 border-[var(--color-secondary)]');
            $("#navbar-li").removeClass('border-transparent');
        } else {
            $("#navbar-li").addClass('border-transparent');
            $("#navbar-li").removeClass('border-[var(--color-secondary)]');
        }
        if (currentUrl === berandaRoutes) {
            $(window).on('scroll', function() {
                if ($(this).scrollTop() > 900) {
                    $('#navbar-main').addClass('bg-white text-gray-700 shadow-md');
                    $('#navbar-main').removeClass('bg-transparent');
                } else {
                    $('#navbar-main').removeClass('bg-white shadow-md');
                    $('#navbar-main').addClass('bg-transparent');
                }

                if ($(this).scrollTop() > 900) {
                    $('#navbar-main-li').removeClass('text-white');
                    $('#navbar-main-li').addClass('text-gray-700');
                    $('#navbar-slogan span').removeClass('text-white');
                    $('#navbar-slogan span').addClass('text-gray-700');
                } else {
                    $('#navbar-main-li').removeClass('text-gray-700');
                    $('#navbar-main-li').addClass('text-white');
                    $('#navbar-slogan span').removeClass('text-gray-700');
                    $('#navbar-slogan span').addClass('text-white');
                }
            });
        }
    });

    $(function() {
        if (currentUrl === jadwalRoutes) {
            $('#navbar-main').addClass('bg-white text-gray-700 shadow-md');
            $('#navbar-main').removeClass('bg-transparent');
            $('#navbar-main-li').removeClass('text-white');
            $('#navbar-main-li').addClass('text-gray-700');
            $('#navbar-slogan span').removeClass('text-white');
            $('#navbar-slogan span').addClass('text-gray-700');
        }
    });
</script>