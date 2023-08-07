<div>
    {{-- Tombol QR Code --}}
    @if ($attendance->data->is_using_qrcode)

    {{-- jika belum absen dan absen masuk sudah dimulai --}}
    @if ($attendance->data->is_start && !$data['is_has_enter_today'] || !$attendance->data->is_end)
    <button data-bs-toggle="modal" data-bs-target="#qrcode-scanner-modal" data-is-enter="1" data-modal-target="scannerModal" data-modal-toggle="scannerModal" data-is-enter="1"  class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 w-full">Scan QR-Code Masuk</button>
    @endif

    @if ($data['is_has_enter_today'])
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">Anda sudah berhasil mengirim presensi masuk untuk sesi ini.</span>
        </div>
    </div>
    @endif

    {{-- jika sudah absen masuk--}}
    @if ($data['is_has_enter_today'])
    <div id="absen-masuk-sudah" class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">Anda sudah melakukan presensi pada sesi ini.</span>
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#absen-masuk-sudah" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
      </button>
    </div>
    @endif

    {{-- jika absen pulang sudah dimulai, dan presertan sudah absen masuk dan belum absen keluar atau sesi belum berakhir--}}
    {{-- @if ($attendance->data->is_end && $data['is_has_enter_today'] && $data['is_not_out_yet'] || !$attendance->data->is_end)
    <button data-bs-toggle="modal" data-bs-target="#qrcode-scanner-modal" data-is-enter="1" data-modal-target="scannerModal" data-modal-toggle="scannerModal" data-is-enter="0" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 w-full" data-bs-toggle="modal"
        data-bs-target="#qrcode-scanner-modal">Scan QRCode Keluar</button>
    @endif --}}

    {{-- sudah absen masuk dan absen keluar --}}
    {{-- @if ($data['is_has_enter_today'] && !$data['is_not_out_yet'])
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">Anda sudah melakukan absen masuk dan absen keluar.</span>
        </div>
    </div>
    @endif --}}

    {{-- jika sudah absen masuk dan belum saatnya absen pulang --}}
    {{-- @if ($data['is_has_enter_today'] && !$attendance->data->is_start)
    <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div>
          <span class="font-medium">Belum saatnya melakukan presensi keluar.</span>
        </div>
    </div>
    @endif --}}

    @endif
</div>

@push('script')
<script src="{{ asset('html5-qrcode/html5-qrcode.min.js') }}"></script>
<script>
    const enterPresenceUrl = "{{ route('home-presences.sendEnterPresenceUsingQRCode') }}";
</script>
<script type="module" src="{{ asset('js/home/qrcode.js') }}"></script>
@endpush