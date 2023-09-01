<a href="#" class="inline-block px-3" target="_blank">
    <div class="w-72 h-full overflow-hidden md:p-5 p-4 bg-white rounded-lg inline-block transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">

        <!--Banner image-->
        {{-- @if ($item->thumbnail_news[0]->thumbnail != NULL)
            <img class="rounded-2xl object-cover h-48 w-full border-2 border-slate-500" src="{{ url(Storage::url($item->thumbnail_news[0]->thumbnail)) }}" alt="thumbnails" loading="lazy" />    
        @else
            <img class="rounded-2xl h-48 w-full border-2 border-slate-500" src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" />
        @endif --}}
        <img class="rounded-lg h-48 w-full border-2 border-slate-500" src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" />


        <!--Title and Date-->
        <h1 style="text-transform: capitalize;" class="font-semibold text-dark hover:text-primary text-xl mt-1 leading-normal pt-4">
            {{-- {{ $item->title ?? '' }} --}}
            Judul
        </h1>
        <h2 class="font-normal text-sm md:text-base text-secondary mb-5">
            {{-- {{ $item->created_at ? $item->created_at->format('d-m-Y') : '' }} --}}
            Tanggal
        </h2>

        <!--Description-->
        <div class="max-w-full">
            {{-- @include('components.sikawan.landing.description') --}}
            <p class="font-normal text-sm text-slate-400 mb-6 text-justify">
                {{-- @php
                    $text = $item->description ?? '';
                    $words = str_word_count($text, 1);
                    $limitedWords = array_slice($words, 0, 50);
                    $limitedText = implode(' ', $limitedWords);
                    $limitedText .= '...';
                    echo $limitedText;
                @endphp --}}
                Deskripsi
            </p>
        </div>
        
    </div>
</a>