@section('title', 'Edit Data Bahan')

<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card.card-default class="static">
                <a href="{{ route('material.index') }}">
                    <x-button.info-button>
                        <i class="fa-solid fa-arrow-left"></i>
                        Kembali
                    </x-button.info-button>
                </a>

                <x-form action="{{ route('material.update', $material->slug) }}" class="md:grid md:grid-cols-2 gap-4">
                    @csrf
                    @method('PUT')

                    <div class="mt-4">
                        <x-input.input-label for="name" :value="__('Nama Bahan')" />
                        <x-input.text-input id="name" class="mt-1 w-full" type="text" name="name"
                            :value="old('name', $material->name)" required autofocus autocomplete="name" />
                        <x-input.input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    {{-- Hidden Input --}}
                    <x-input.text-input id="slug" class="mt-1 w-full" type="hidden" name="slug"
                        :value="old('slug', $material->slug)" required autofocus autocomplete="slug" />

                    <div class="mt-4 col-span-2">
                        <x-input.input-label for="status" class="label cursor-pointer mr-6">
                            <x-input.checkbox name="status" id="status" :value="old('status', $material->status) == true ? ' ' : ' checked'" :title="__('Sembunyikan?')" />
                        </x-input.input-label>
                    </div>

                    <div class="col-span-2">
                        <x-button.primary-button type="submit">
                            {{ __('Simpan') }}
                        </x-button.primary-button>
                    </div>

                </x-form>
            </x-card.card-default>
        </div>
    </div>
    <x-slot name="script">
        <script>
            const name = document.querySelector("#name");
            const slug = document.querySelector("#slug");

            name.addEventListener("keyup", function() {
                let preslug = name.value;
                preslug = preslug.replace(/[^a-zA-Z0-9\s]/g, "");
                preslug = preslug.replace(/ /g, "-");
                slug.value = preslug.toLowerCase();
            });
        </script>
    </x-slot>
</x-app-layout>
