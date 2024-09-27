<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ $title }}
        </h2>
    </x-slot>
    <!-- Content -->
    <div class="w-full px-6 pt-4 sm:px-6 md:px-8 lg:ps-72">
        <!-- Card Section -->
<div class="max-w-4xl px-4 py-5 mx-auto sm:px-6 lg:px-8"><!-- Card -->
    <div class="p-4 bg-white shadow rounded-xl sm:p-7 dark:bg-neutral-800">
      <div class="mb-8">
        <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
          Setting
        </h2>
      </div>

      <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">

        @csrf
        <!-- Grid -->
        <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">
          <div class="sm:col-span-3">
            <label for="af-account-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Nama
            </label>
            <div class="inline-block hs-tooltip">
              <button type="button" class="hs-tooltip-toggle ms-1">
                <svg class="inline-block text-gray-400 size-3 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
              </button>
              <span class="absolute z-10 invisible inline-block w-40 px-2 py-1 text-xs font-medium text-center text-white transition-opacity bg-gray-900 rounded shadow-sm opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible dark:bg-neutral-700" role="tooltip">
                Unique setting name

            </span>
            </div>
          </div>
          <!-- End Col -->
          <div class="sm:col-span-9">
              <input name="setting_name" id="af-account-full-name" type="text" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Nama Pengaturan" value="{{old('setting_name')}}">
              @error('setting_name')
              <span class="text-red-400">{{ $message }}</span>
            @enderror
            </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="af-account-setting-value" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Setting Value
            </label>
          </div>
          <!-- End Col -->
          <div class="sm:col-span-9">
            <input name="setting_value" id="af-account-setting-value" type="text" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Nilai Pengaturan" value="{{old('setting_value')}}">
            @error('setting_value')
            <span class="text-red-400">{{ $message }}</span>
            @enderror
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="af-account-description" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Description
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <textarea name="description" id="af-account-description" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Keterangan">{{old('description')}}</textarea>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Grid -->

        <div class="flex justify-end mt-5 gap-x-2">
          <a href="{{ route('setting.index') }}" onclick="return confirm('anda yakin akan membatalkan?')" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
            Batal
          </a>

          <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none ">
            Simpan
          </button>
        </div>
      </form>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Card Section -->
    </div>

</x-app-layout>

