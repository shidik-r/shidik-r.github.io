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
          Profile
        </h2>
        <p class="text-sm text-gray-600 dark:text-neutral-400">
          Manage your name, password and account settings.
        </p>
      </div>

      <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">

        @csrf
        <!-- Grid -->
        <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">
          <div class="sm:col-span-3">
            <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Profile photo
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="flex items-center gap-5">
              <!-- <img class="inline-block rounded-full size-16 ring-2 ring-white dark:ring-neutral-900"  alt="Image"> -->
              <div class="flex gap-x-2">
                <div>
                  <input name="photo" type="file" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" value="{{old('photo')}}">
                </div>
              </div>
            </div>
          </div>
          <!-- End Col -->

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
                Displayed on public forums, such as John Doe

            </span>
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
              <input name="name" id="af-account-full-name" type="text" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Nama" value="{{old('name')}}">
              @error('name')
              <span class="text-red-400">{{ $message }}</span>
            @enderror
            </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="af-account-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Email
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <input name="email" id="af-account-email" type="email" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="user@site.com" value="{{old('email')}}">
            @error('email')
            <span class="text-red-400">{{ $message }}</span>
            @enderror
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="af-account-password" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Password
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="space-y-2">
              <input name="password" id="af-account-password" type="password" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter current password">
              @error('password')
              <span class="text-red-400">{{ $message }}</span>
            @enderror
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="af-account-roles" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Role
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <select name="roles" id="roles" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              @foreach ($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
              @endforeach
            </select>
            @error('roles')
            <span class="text-red-400">{{ $message }}</span>
            @enderror
          </div>
          <!-- End Col -->

          {{-- <div class="sm:col-span-3">
            <div class="inline-block">
              <label for="af-account-phone" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                Phone
              </label>
              <span class="text-sm text-gray-400 dark:text-neutral-600">
                (Optional)
              </span>
            </div>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="sm:flex">
              <input id="af-account-phone" type="text" class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="+x(xxx)xxx-xx-xx">
              <select class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-9 sm:w-auto -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <option selected>Mobile</option>
                <option>Home</option>
                <option>Work</option>
                <option>Fax</option>
              </select>
            </div>

            <p class="mt-3">
              <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline dark:text-blue-500" href="../docs/index.html">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                Add phone
              </a>
            </p>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-3">
            <label for="af-account-gender-checkbox" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Gender
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <div class="sm:flex">
              <label for="af-account-gender-checkbox" class="relative flex w-full px-3 py-2 -mt-px text-sm border border-gray-200 shadow-sm -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <input type="radio" name="af-account-gender-checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox" checked>
                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Male</span>
              </label>

              <label for="af-account-gender-checkbox-female" class="relative flex w-full px-3 py-2 -mt-px text-sm border border-gray-200 shadow-sm -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <input type="radio" name="af-account-gender-checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-female">
                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Female</span>
              </label>

              <label for="af-account-gender-checkbox-other" class="relative flex w-full px-3 py-2 -mt-px text-sm border border-gray-200 shadow-sm -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <input type="radio" name="af-account-gender-checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-other">
                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Other</span>
              </label>
            </div>
          </div>
          <!-- End Col --> --}}

          <div class="sm:col-span-3">
            <label for="af-account-bio" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
              Alamat
            </label>
          </div>
          <!-- End Col -->

          <div class="sm:col-span-9">
            <textarea name="address" id="af-account-bio" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Alamat...">{{old('address')}}</textarea>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Grid -->

        <div class="flex justify-end mt-5 gap-x-2">
          <a href="{{ route('users.index') }}" onclick="return confirm('anda yakin akan membatalkan?')" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
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

