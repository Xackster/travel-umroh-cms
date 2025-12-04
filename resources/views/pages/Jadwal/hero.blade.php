<section>
    <!-- Hero Jadwal Keberangkatan -->
    <div class="duration-700 flex justify-center items-center ease-in-out bg-cover bg-[url('/public/assets/images/Hero/Hero-Keberangkatan.jpg')] h-[70vh] flex-col z-0">
        <h2 class="text-white text-4xl font-bold">Jadwal Keberangkatan</h2>
        <p class="text-white font-semibold">Keberangkatan dari | Aceh | Jakarta | Bali</p>
    </div>
    <!-- End Hero Jadwal Keberangkatan -->

    <!-- Menu Keberangkatan -->
    <section class="flex justify-center items-center">
        <div class="flex justify-between gap-12 items-center -mt-40 z-50  container bg-white p-12 rounded-2xl drop-shadow-2xl">

            <!-- Package Apps ------------------ -->
            <div class="flex justify-start w-full items-start flex-col">


                <!-- Departure Location --------- -->
                <div class="flex flex-col">
                    @include('components.jadwal.departure_location')
                </div>
                <!-- End Departure Location ----- -->

                <!--  Location --------- -->
                <div class="w-full grid grid-cols-4 gap-6 items-center">

                    <div class="flex flex-col">
                        @include('components.jadwal.package_category')
                    </div>

                    <div class="flex flex-col">
                        @include('components.jadwal.package_duration')
                    </div>

                    <div class="flex flex-col">
                        @include('components.jadwal.package_price')
                    </div>

                    <div class="flex">
                        <button class="rounded-md bg-[var(--color-secondary)] py-3 px-6 text-center text-sm text-white active:scale-95 hover:cursor-pointer transition-all shadow-md hover:shadow-lg font-bold focus:shadow-none active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none w-full" type="button">
                            Telusuri Paket
                        </button>
                    </div>
                </div>
                <!--  End Location ---- -->

            </div>
            <!-- End Package Apps -------------- -->

        </div>
    </section>
    <!-- End Menu Keberangkatan -->
</section>