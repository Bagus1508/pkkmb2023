<div>
    <form wire:submit.prevent="savestudents" method="post" novalidate>
        @include('partials.alerts')
        @foreach ($students as $i => $student)
        <div class="mb-3">
            <div class="w-100">
                <div class="mb-3">
                    <x-form-label id="name{{ $i }}" label='Nama {{ $i + 1 }}' class="block mb-2 text-sm font-medium text-gray-900"/>
                    <x-form-input id="name{{ $i }}" name="name{{ $i }}" wire:model.defer="students.{{ $i }}.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                    <x-form-error key="students.{{ $i }}.name" />
                </div> 
                <div class="mb-3">
                    <x-form-label id="nim{{ $i }}" label='NIM {{ $i + 1 }}' class="block mb-2 text-sm font-medium text-gray-900"/>
                    <x-form-input id="nim{{ $i }}" name="nim{{ $i }}" type="text"
                        wire:model.defer="students.{{ $i }}.nim" placeholder="NIM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                    <x-form-error key="students.{{ $i }}.nim" />
                </div>
                <div class="mb-3">
                    <x-form-label id="password{{ $i }}"
                        label='Password {{ $i + 1 }} (default: "123" jika tidak diisi)' required="false" class="block mb-2 text-sm font-medium text-gray-900"/>
                    <x-form-input id="password{{ $i }}" name="password{{ $i }}"
                        wire:model.defer="students.{{ $i }}.password" required="false" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                    <x-form-error key=" students.{{ $i }}.password" />
                </div>
                <div class="mb-3">
                    <x-form-label id="position_id{{ $i }}" label='Posisi {{ $i + 1 }}' class="block mb-2 text-sm font-medium text-gray-900"/>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" aria-label="Default select example" name="position_id"
                        wire:model.defer="students.{{ $i }}.position_id" 
                        @if (auth()->user()->role->name === 'admin')
                            disabled
                        @endif>
                        <option selected disabled>-- Pilih Posisi --</option>
                        @foreach ($positions as $position)
                        <option value="{{ $position->id }}">{{ ucfirst($position->name) }}</option>
                        @endforeach
                    </select>
                    @if (auth()->user()->role->name === 'admin')
                    <small class="text-red-500">Anda tidak memiliki akses untuk mengubah Posisi!</small>
                    @endif
                    <x-form-error key="students.{{ $i }}.position_id" />
                </div>
                <div class="mb-3">
                    <x-form-label id="role_id{{ $i }}" label='Role {{ $i + 1 }}' class="block mb-2 text-sm font-medium text-gray-900"/>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" aria-label="Default select example" name="role_id"
                        wire:model.defer="students.{{ $i }}.role_id" 
                        @if (auth()->user()->role->name === 'admin')
                            disabled
                        @endif>
                        <option selected disabled>-- Pilih Role --</option>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                        @endforeach
                    </select>
                    @if (auth()->user()->role->name === 'admin')
                    <small class="text-red-500">Anda tidak memiliki akses untuk mengubah Role!</small>
                    @endif
                    <x-form-error key="students.{{ $i }}.role_id" />
                </div>
            </div>
            @if ($i > 0)
            <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" wire:click="removeStudentInput({{ $i }})"
                wire:target="removeStudentInput({{ $i }})" type="button" wire:loading.attr="disabled">Hapus</button>
            @endif
        </div>
        <hr>
        @endforeach

        <div class="flex items-center mb-5">
            <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                Simpan
            </button>
            <button class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" type="button" wire:click="addStudentInput" wire:loading.attr="disabled">
                Tambah Input
            </button>
        </div>
    </form>
</div>