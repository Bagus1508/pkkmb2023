<div class="w-full bg-purple-300">
    <div id="pengertian" class="flex pt-8">
        <div class="w-6/12 mr-4 rounded-lg bg-[#FFECEC] mb-8 px-5 py-4 text-center">
            <h1 class="font-extrabold text-3xl text-[#FE7BE5] mb-4 underline">APA ITU PKKMB?</h1>
            <p class="text-justify text-sm mb-2">
                Pengenalan Kehidupan Kampus bagi Mahasiswa Baru (PKKMB) merupakan suatu wadah bagi perguruan tinggi untuk memperkenalkan dan menyiapkan mahasiswa baru ke dalam proses perpindahan dari siswa menjadi mahasiswa yang lebih dewasa dan mandiri, serta mengenalkan kehidupan baru dan memberikan bekal kepada mahasiswa untuk menempuh pendidikan di perguruan tinggi.
            </p>
            <p class="text-justify text-sm mb-2">
                Di Universitas Narotama kegiatan serupa dengan Pengenalan Kehidupan Kampus bagi Mahasiswa Baru (PKKMB) telah sering dilakukan. Namun sebelum tahun 2021 kegiatan Pengenalan Kehidupan Kampus bagi Mahasiswa Baru ini bernama Masa Orientasi Mahasiswa (MOM).
            </p>
            <p class="text-justify text-sm mb-2">
                Pada pelaksanaan Pengenalan Kehidupan Kampus bagi Mahasiswa Baru (PKKMB) Universitas Narotama tahun 2021 diharapkan menjadi wadah penanaman 5 program gerakan nasional revolusi mental yaitu :
            </p>
            <ul class="list-disc text-left text-sm mb-2 pl-4">
                <li>Indonesia melayani</li>
                <li>Indonesia bersih</li>
                <li>Indonesia tertib</li>
                <li>Indonesia mandiri</li>
                <li>Indonesia bersatu</li>
            </ul>
            <p class="text-justify text-sm mb-2">
                Melalui kegiatan ini mahasiswa diharapkan kelak akan menjadi alumni perguruan tinggi yang memiliki kedalaman ilmu, keluhuran akhlak, cinta tanah air, dan berdaya saing global.
            </p>
        </div>

        <div class="w-6/12 ml-4 rounded-lg mb-8">
            <img src="{{ asset('/src/img/information/2/pkkmb.png') }}" alt="pkkmb" class="object-cover rounded-md h-full">
        </div>
    </div>

    <div id="team" class="flex">
        <div class="bg-[#FFECEC] rounded-lg w-full flex flex-col items-center text-center mb-8 p-6">
            <div class="mb-5">
                <h2 class="text-base font-bold gradient-text-pengenalan">TAK KENAL MAKA TAK SAYANG</h2>
                <h1 class="text-2xl font-bold text-space-buttonungu">Kepanitiaan Pengenalan Kehidupan Kampus bagi Mahasiswa Baru</h1>
                <h1 class="text-2xl font-bold text-space-buttonungu">Universitas Narotama Tahun 2023</h1>
            </div>

            <div class="flex mb-8">
                @include('components.informasi.team.card')
                @include('components.informasi.team.card')
                @include('components.informasi.team.card')
                @include('components.informasi.team.card')
            </div>

            <a href="#">
                <button class="bg-space-buttonbiru px-8 py-3 text-white text-base rounded-lg">
                    Selengkapnya
                </button>
            </a>
        </div>
    </div>

    <div id="preview1" class="flex">
        <div class="w-9/12 bg-[#FFECEC] rounded-lg flex p-4 mr-4 mb-8">
            <div class="w-1/2 border-r-2 border-purple-300 text-center">
                <iframe class="w-full pr-4" src="{{ url('https://www.youtube.com/watch?v=ZCj1iMsjOcU') }}" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="w-1/2 text-center">
                <iframe class="w-full pl-4" src="{{ url('https://www.youtube.com/watch?v=6t0n2v-FRBQ&t=43s') }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="w-3/12 gradient-bg-video1 rounded-lg ml-4 mb-8 flex flex-col items-center justify-center">
            <h1 class="text-white font-bold text-2xl text-center">
                Preview PKKMB <br>
                Sebelumnya
            </h1>
        </div>
    </div>

    <div id="preview2" class="flex">
        <div class="w-3/12 gradient-bg-video1 rounded-lg mr-4 mb-8 flex flex-col items-center justify-center">
            <h1 class="text-white font-bold text-2xl text-center">
                Preview PKKMB <br>
                Sebelumnya
            </h1>
        </div>

        <div class="w-9/12 bg-[#FFECEC] rounded-lg flex p-4 ml-4 mb-8">
            <div class="w-1/2 border-r-2 border-purple-300 text-center">
                <iframe class="w-full pr-4" src="{{ url('https://www.youtube.com/watch?v=ZCj1iMsjOcU') }}" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="w-1/2 text-center">
                <iframe class="w-full pl-4" src="{{ url('https://www.youtube.com/watch?v=6t0n2v-FRBQ&t=43s') }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div id="seminarnasional" class="flex">
        <div class="bg-[#FFECEC] rounded-lg w-full flex flex-col items-center text-center mb-8 p-6">
            <div class="mb-5">
                <h2 class="text-base font-bold gradient-text-pengenalan">SEMINAR NASIONAL</h2>
                <h1 class="text-2xl font-bold text-space-buttonungu">Pengenalan Kehidupan Kampus bagi Mahasiswa Baru</h1>
                <h1 class="text-2xl font-bold text-space-buttonungu">Universitas Narotama Tahun 2023</h1>
            </div>

            <div class="flex mb-8">
                @include('components.informasi.team.card')
                @include('components.informasi.team.card')
                @include('components.informasi.team.card')
                @include('components.informasi.team.card')
            </div>

            <a href="#">
                <button class="bg-space-buttonbiru px-8 py-3 text-white text-base rounded-lg">
                    Selengkapnya
                </button>
            </a>
        </div>
    </div>
</div>