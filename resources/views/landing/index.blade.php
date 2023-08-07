@extends('layouts.landing.base')

@section('content')
    <!--Welcome Start-->
    <section id="welcome" class="min-h-screen bg-white">
        <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">
          <div class="flex items-center pt-24">
            <div class="mx-10 lg:mx-20">
              <div class="font-bold text-2xl">
                <h1 class="mb-4 font-poppins tracking-[0.5em] text-[#32438B]">
                  WELCOME TO
                </h1>
              </div>
              <div class="">
                <img src="src/img/PKKMB 1.png" width="399" height="213" title="PKKMB 1.png"/>
              </div>
              <div>
                Kegiatan pengenalan kehidupan kampus bagi mahasiswa baru di
                Universitas Narotama Surabaya
              </div>
              <div class="my-10">
                <a href="" class="bg-orange3 text-white px-5 py-1 rounded-md">
                  Let's Go
                </a>
              </div>
            </div>
          </div>
          <div class="flex items-center">
            <img src="src/img/fotowelcome.png" class="mx-auto h-auto w-full lg:min-h-screen" title="fotowelcome.png" />
          </div>
        </div>
      </section>
      <!--Welcome end-->

<div class="w-full" style="background-color: #F3F5FA !important;" id="about">
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:min-h-screen">
        <div class="flex items-center">
          <img
            src="src/img/deskpkkmb.png"
            class="lg:min-h-screen"
            title="deskpkkmb.png"
          />
        </div>
        <div class="flex items-center">
          <div class="py-10">
            <div
              class="text-center text-[#73D6DC] tracking-[0.06em] text-[36px] font-bold"
            >
              Apa itu PKKMB?
            </div>
            <div class="text-justify mt-10 text-[#525252] px-10">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor
              quisquam, harum a quae minus incidunt voluptatibus modi asperiores
              aperiam eaque quo, amet libero nihil, nulla laborum. Saepe natus
              magni impedit. Cum alias minima molestias, libero repellat
              excepturi quae. Ipsa ullam neque harum unde dignissimos?
              Consequatur sapiente alias repellat ex, soluta incidunt fugit
              eveniet delectus quis dolorum necessitatibus voluptate recusandae
              suscipit reprehenderit labore sunt qui eius, dolor architecto
              neque expedita itaque? Pariatur doloremque commodi aut facilis
              nihil eos fuga quia voluptates. Illo nisi numquam quibusdam vel
              dicta, ab ipsam eveniet rem consequuntur vero nemo odit error
              ducimus veniam quos impedit odio.
            </div>
          </div>
        </div>
      </div>
</div>
<div class="w-full bg-[#F89D08] px-10">
    <div class="container md:px-14 md:py-10 py-5 m-auto">
        <div>
            <div class="inline-flex items-center">
                <p class="text-lg text-white">PREVIEW</p>
                <span style="margin-left: 1em; width: 100px;height: 0px;border: 2px solid #777777;"></span>
            </div>
            <h1 class="md:text-6xl text-4xl font-bold text-[#33458F]">PKKMB</h1>
        </div>
        <article class="my-16 grid md:grid-cols-2 grid-cols-1 gap-x-24">
            <iframe src="https://www.youtube.com/embed/ZCj1iMsjOcU" class="container h-[338px] rounded-xl" allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/jEOINXcJkyw" class="container h-[338px] rounded-xl" allowfullscreen></iframe>
        </article>
    </div>
</div>
<div class="w-full px-10" style="background-color: #AABBFF !important;">
    <div class="container md:px-14 md:py-10 py-5 m-auto">
        <div>
            <div class="inline-flex items-center">
                <p class="text-lg text-white">TEAM</p>
                <span style="margin-left: 1em; width: 100px;height: 0px;border: 2px solid #F89D08;"></span>
            </div>
            <h1 class="md:text-6xl text-4xl font-bold text-[#33458F]">PKKMB</h1>
        </div>
        <article class="my-16 grid md:grid-cols-4 grid-cols-1 lg:gap-x-24 gap-y-5 justify-items-center">
            {{-- @foreach($committee as $key => $value) --}}
                <div class="--card bg-white rounded-md">
                    <div class="bg-[#CCCCCC] rounded-t-md">
                        <img src="src\img\Panitia\foto.png" alt="panitia" >
                    </div>
                    <div class="px-2 py-2">
                        <h2 class="text-[20px] font-bold w-full">Nama Panitia</h2>
                        <p class="text-sm text-[12px]">Divisi</p>
                    </div>
                </div>
                <div class="--card bg-white rounded-md">
                    <div class="bg-[#CCCCCC] rounded-t-md">
                        <img src="src\img\Panitia\foto.png" alt="panitia" >
                    </div>
                    <div class="px-2 py-2">
                        <h2 class="text-[20px] font-bold w-full">Nama Panitia</h2>
                        <p class="text-sm text-[12px]">Divisi</p>
                    </div>
                </div>
                <div class="--card bg-white rounded-md">
                    <div class="bg-[#CCCCCC] rounded-t-md">
                        <img src="src\img\Panitia\foto.png" alt="panitia" >
                    </div>
                    <div class="px-2 py-2">
                        <h2 class="text-[20px] font-bold w-full">Nama Panitia</h2>
                        <p class="text-sm text-[12px]">Divisi</p>
                    </div>
                </div>
                <div class="--card bg-white rounded-md">
                    <div class="bg-[#CCCCCC] rounded-t-md">
                        <img src="src\img\Panitia\foto.png" alt="panitia" >
                    </div>
                    <div class="px-2 py-2">
                        <h2 class="text-[20px] font-bold w-full">Nama Panitia</h2>
                        <p class="text-sm text-[12px]">Divisi</p>
                    </div>
                </div>
        </article>
        <div class="flex justify-center">
            <a href="/panitia" class="--btn text-white bg-[#F89D08] px-[53px] rounded-[5px] font-semibold py-3">Lihat Lebih Banyak</a>
        </div>
    </div>
</div>
<div class="w-full px-10" style="background-color: #F3F5FA !important;">
    <div class="container md:px-14 md:py-10 py-5 m-auto">
        <div>
            <div class="inline-flex items-center">
                <p class="text-lg text-grey">INFORMASI</p>
                <span style="margin-left: 1em; width: 100px;height: 0px;border: 2px solid #F89D08;"></span>
            </div>
            <h1 class="md:text-6xl text-4xl font-bold text-[#33458F]">KONTAK PKKMB</h1>
        </div>
        <article class="my-16 grid md:grid-cols-2 grid-cols-1 gap-x-24">
            <div>
                <div class="container  w-100 p-0">
                    <div class="grid" style="grid-template-columns: .10fr .90fr;color: #000000;">
                        <svg
                        width="60"
                        height="60"
                        viewBox="0 0 60 60"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle
                          cx="30"
                          cy="30"
                          r="30"
                          fill="#F89D08"
                          fill-opacity="0.4"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M30.1412 11.6411C22.9817 11.6411 17.1912 17.4316 17.1912 24.5911C17.1912 34.3036 30.1412 48.6411 30.1412 48.6411C30.1412 48.6411 43.0912 34.3036 43.0912 24.5911C43.0912 17.4316 37.3007 11.6411 30.1412 11.6411ZM20.8912 24.5911C20.8912 19.4851 25.0352 15.3411 30.1412 15.3411C35.2472 15.3411 39.3912 19.4851 39.3912 24.5911C39.3912 29.9191 34.0632 37.8926 30.1412 42.8691C26.2932 37.9296 20.8912 29.8636 20.8912 24.5911ZM25.5162 24.5911C25.5162 22.0368 27.5868 19.9661 30.1412 19.9661C31.7935 19.9661 33.3204 20.8476 34.1465 22.2786C34.9727 23.7096 34.9727 25.4726 34.1465 26.9036C33.3204 28.3346 31.7935 29.2161 30.1412 29.2161C27.5868 29.2161 25.5162 27.1454 25.5162 24.5911Z"
                          fill="#F2994A"
                        />
                      </svg>
                        <div class="ml-5">
                            <h3 class="text-2xl font-bold uppercase tracking-[0.1em] ">Tempat:</h3>
                            <p class="text-grey text-lg tracking-[0.1em] text-[#777777]">Jl. Arief Rachman Hakim 51, Sukolilo Surabaya (60117)</p>
                        </div>
                    </div>
                </div>
                <div class="container w-100 p-0 mt-14">
                    <div class="grid" style="grid-template-columns: .10fr .90fr;color: #000000;">
                        <svg
                        width="60"
                        height="60"
                        viewBox="0 0 60 60"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle
                          cx="30"
                          cy="30"
                          r="30"
                          fill="#F89D08"
                          fill-opacity="0.4"
                        />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M21.6583 11.6667L38.325 11.6834C40.1583 11.6834 41.6583 13.1667 41.6583 15.0001V45.0001C41.6583 46.8334 40.1583 48.3334 38.325 48.3334H21.6583C19.825 48.3334 18.3417 46.8334 18.3417 45.0001V15.0001C18.3417 13.1667 19.825 11.6667 21.6583 11.6667ZM21.6583 41.6668H38.325V18.3334H21.6583V41.6668Z"
                          fill="#F2994A"
                        />
                      </svg>
                        <div class="ml-5">
                            <h3 class="text-2xl font-bold uppercase tracking-[0.1em] ">WHATSAPP:</h3>
                            <ul class="text-grey text-lg list-disc pl-5 tracking-[0.1em] text-[#777777]">
                                <li>0812-5238-6787 (Nisrina)</li>
                                <li>0813-3258-6605 (Nanda)</li>
                                <li>0896-9987-6100 (Putri)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-14 lg:mt-o">
                <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=Jl.%20Arief%20Rahman%20Hakim%20No.51,%20Klampis%20Ngasem,%20Kec.%20Sukolilo,%20Kota%20SBY,%20Jawa%20Timur%2060117+(Universitas%20Narotama)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            </div>
        </article>
    </div>
</div>
@endsection

@push('js')
    
@endpush