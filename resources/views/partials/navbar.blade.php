<header class="w-full bg-blue-500 py-3 flex">
    <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-white rounded-lg hover:bg-gray-100 focus:outline-none ring-2 ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
           <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
    <div class="w-full justify-center text-end items-end">
        <h1 class="justify-center text-end mx-auto w-full px-4 text-white">Halo, {{ auth()->user()->name }}</h1>
        <h1 class="justify-center text-end mx-auto w-full px-4 text-white">{{ auth()->user()->nim }}</h1>
    </div>
</header>