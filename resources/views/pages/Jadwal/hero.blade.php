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



                <!--  Location --------- -->
                <div class="w-full grid grid-cols-4 gap-6 items-center">

                    <!-- Departure Location --------- -->
                    <div class="flex flex-col">
                        @include('components.jadwal.departure_location')
                    </div>
                    <!-- End Departure Location ----- -->

                    <!-- Kategori -->
                    <div class="flex flex-col">
                        @include('components.jadwal.package_category')
                    </div>
                    <!-- End Kategori -->

                    <!-- Durasi -->
                    <div class="flex flex-col">
                        @include('components.jadwal.package_duration')
                    </div>
                    <!-- End Durasi -->

                    <!-- Harga -->
                    <div class="flex flex-col">
                        @include('components.jadwal.package_price')
                    </div>
                    <!-- End Harga -->
                     
                </div>
                <!--  End Location ---- -->

            </div>
            <!-- End Package Apps -------------- -->

        </div>
    </section>
    <!-- End Menu Keberangkatan -->
</section>