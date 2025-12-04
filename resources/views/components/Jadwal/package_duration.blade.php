<!-- Dropdown Lokasi Keberangkatan -->

<!--
=========== RULES ==========
- Use unique ids for dropdown and radio inputs
- Keep the structure consistent 
- Examples (dropdownHelperRadio, helper-radio-4)
-->
@php    
    $durations = [3, 5, 7, 10, 14];
@endphp

<div class="relative">
    <button id="dropdownHelperDuration" data-dropdown-toggle="dropdownHelperDurationRadio" class="mt-2 flex items-center justify-between text-gray-800 bg-white border-2 border-[var(--color-secondary)] w-full cursor-pointer active:scale-95 rounded-2xl hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium focus:ring-[var(--color-secondary)] shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none" type="button">

        <!-- Input Title ---------------- -->
        <i class="fi fi-br-category-alt"></i> Hari
        <i class="fi fi-br-angle-small-down w-8"></i>
        <!-- End Input Title ------------ -->

    </button>

    <!-- Dropdown menu -->
    <div id="dropdownHelperDurationRadio" class="z-10 hidden bg-white rounded-2xl border border-default-medium rounded-base shadow-lg w-full" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
        <ul class="p-2 text-sm text-body font-medium" aria-labelledby="dropdownHelperDuration">
        @foreach($durations as $durationIndex => $duration)
            <!-- Radio Input 1 ------------------- -->
            <li>
                <div class="flex p-2 w-full hover:bg-neutral-tertiary-medium hover:text-heading rounded">
                    <div class="flex items-center h-5">
                        <!-- Radio 1 --------------- -->
                        <input id="helper-duration-{{ $durationIndex }}" name="helper-duration" type="radio" value="" class="w-4 h-4 text-neutral-primary border-default-strong bg-neutral-secondary-strong rounded-full checked:border-brand focus:ring-2 focus:outline-none focus:ring-brand-subtle border border-default appearance-none">
                        <!-- End Radio 1 ----------- -->
                    </div>
                    <div class="ms-2 text-sm">
                        <label for="helper-duration-{{ $durationIndex }}" class="select-none font-medium text-heading">
                            <div class="mb-1">{{ $duration }} Hari</div>
                            <!-- <p id="helper-duration-text-1" class="text-xs font-normal text-body">Some helpful instruction goes over here.</p> -->
                        </label>
                    </div>
                </div>
            </li>
            <!-- End Radio Input 1 --------------- -->
             
        @endforeach
        </ul>
    </div>
</div>
<!-- End Dropdown Lokasi Keberangkatan -->