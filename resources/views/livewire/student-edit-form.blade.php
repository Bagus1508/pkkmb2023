<div>
    <form wire:submit.prevent="saveStudents" method="post" novalidate>
        @include('partials.alerts')
        @foreach ($students as $student)

        <div class="mb-3">
            <div class="w-100">
                <div class="mb-3">
                    <x-form-label id="name{{ $student['id'] }}"
                        label="Nama Peserta {{ $loop->iteration }} (ID: {{ $student['id'] }})" class="block mb-2 text-sm font-medium text-gray-900"/>
                    <x-form-input id="name{{ $student['id'] }}" name="name{{ $student['id'] }}"
                        wire:model.defer="students.{{ $loop->index }}.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                    <x-form-error key="students.{{ $loop->index }}.name" />
                </div>
                <div class="mb-3">
                    <x-form-label id="nim{{ $student['id'] }}" label='NIM Peserta {{ $loop->iteration }}' class="block mb-2 text-sm font-medium text-gray-900"/>
                    <x-form-input id="nim{{ $student['id'] }}" name="nim{{ $student['id'] }}" type="nim"
                        wire:model.defer="students.{{ $loop->index }}.nim" placeholder="NIM Peserta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                    <x-form-error key="students.{{ $loop->index }}.nim" />
                </div>
                <div class="mb-3">
                    <x-form-label id="password{{ $student['id'] }}" label='Password' class="block mb-2 text-sm font-medium text-gray-900"/>
                    <x-form-input id="password{{ $student['id'] }}" name="password{{ $student['id'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                </div>
                <div class="mb-3">
                    <x-form-label id="position_id{{ $student['id'] }}"
                        label='Posisi {{ $loop->iteration }}' class="block mb-2 text-sm font-medium text-gray-900"/>
                    <select aria-label="Default select example" name="position_id"
                        wire:model.defer="students.{{ $loop->index }}.position_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
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
                    <x-form-error key="students.{{ $loop->index }}.role_id" />
                </div>
                <div class="mb-3">
                    <x-form-label id="role_id{{ $student['id'] }}" label='Role {{ $loop->iteration }}' class="block mb-2 text-sm font-medium text-gray-900"/>
                    <select aria-label="Default select example" name="role_id"
                        wire:model.defer="students.{{ $loop->index }}.role_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
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
                    <x-form-error key="students.{{ $loop->index }}.role_id" />
                </div>
            </div>
        </div>
        <hr>
        @endforeach

        <div class="flex items-center mb-5">
            <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                Simpan
            </button>
        </div>
    </form>
</div>