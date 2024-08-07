<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Homepage</title>
</head>
<body>
    {{-- Header --}}
    <header class="w-screen h-24 bg-artidari-space-cadet">
        <div class="flex">
            {{-- Logo --}}
            <div class="w-1/3 flex justify-center pt-2">
                <a href="/">
                    <img class="h-10" src="{{asset('images/logo-white.png')}}" alt="">
                </a>
            </div>
            {{-- Search --}}
            <div class="w-1/3 pt-4">
                <form action="/search">
                    <div class="flex">
                            <input
                            type="text"
                            name="search"
                            placeholder="Cari arti kata..."
                            class="text-base rounded-l-lg w-full pl-2 py-1"
                            />
                            <div class="bg-white pr-2 rounded-r-lg">
                                <button type="submit">
                                    <img class="h-4 mt-2" src="{{asset('images/search.png')}}" alt="">
                                </button>
                            </div>
                    </div>
                </form>
            </div>
            {{-- add and logout --}}
            <div class="w-1/3 pt-4 flex justify-between items-center">
                <div class="flex items-center">
                    <a href="/kata/create" class="ml-2">
                        <img class="h-8" src="{{asset('images/add.png')}}" alt="">
                    </a>
                </div>
                <div class="flex items-center">
                    <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="bg-artidari-celestial-blue py-1 px-2 mr-20 rounded-md text-sm text-white">
                        Logout
                    </button>
                    </form>
                </div>
            </div>
        </div>
        {{-- Navigation --}}
        <div class="flex justify-center gap-x-5 mt-5 text-white text-sm">
            <div>
                <a href="/istilah">Istilah Regional</a>
            </div>
            <div>
                <a href="/budaya">Budaya Internet</a>
            </div>
            <div>
                <a href="/teknologi">Teknologi dan Gadget</a>
            </div>
            <div>
                <a href="/akronim">Akronim</a>
            </div>
        </div>
    </header>
    
    {{-- Main Content --}}
    <div class="w-screen bg-artidari-alabaster">
        {{-- Arti Kata Hari Ini --}}
        <div class="flex justify-center py-20">
            <div class="bg-white w-[46rem] border-4 rounded-xl border-black py-8 px-10">
                <p class="font-light text-sm">ARTI KATA HARI INI</p>
                <p class="font-medium text-3xl text-artidari-celestial-blue my-1">{{$kataHariIni->kata}}</p>
                <p class="font-normal text-sm leading-tight mb-2">{!! nl2br(e($kataHariIni->definisi)) !!}</p>
                @if (!is_null($kataHariIni->definisi_contoh))
                <p class="font-normal text-sm italic leading-tight mb-2">{!! nl2br(e($kataHariIni->definisi_contoh)) !!}</p>
                @endif
                <p class="font-light text-sm leading-none">by <span class="text-artidari-celestial-blue">{{$kataHariIni->user->name}}</span></p>
                <p class="font-light text-sm leading-tight text-slate-500">{{ \Carbon\Carbon::parse($kataHariIni->created_at)->translatedFormat('d F Y') }}</p>
                <div class="flex items-center gap-x-4 mt-1">
                    <div class="flex items-center gap-x-1">
                        <img class="h-4 cursor-pointer" src="{{asset('images/like.png')}}" alt="" onclick="like({{$kataHariIni->id}}, {{Auth::user()->id}})">
                        <p id="like-count-{{$kataHariIni->id}}">{{$kataHariIni->like}}</p>
                    </div>
                    <div class="flex items-center gap-x-1">
                        <img class="h-4 cursor-pointer" src="{{asset('images/dislike.png')}}" alt="" onclick="dislike({{$kataHariIni->id}}, {{Auth::user()->id}})">
                        <p id="dislike-count-{{$kataHariIni->id}}">{{$kataHariIni->dislike}}</p>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- @foreach($kataHariIni as $kata)
            <x-card :kata="$kata" />
        @endforeach --}}

        {{-- Pencarian Populer --}}
        <div class="flex justify-center pb-10">
            <div class="w-[46rem]">
                <p class="font-light text-base">PENCARIAN POPULER</p>
                <div class="flex flex-wrap gap-x-2">
                    @foreach($searchKata as $kata)
                    <a class="bg-artidari-space-cadet font-light text-sm text-white px-2 py-0.5" href="/search?search={{urlencode($kata)}}">{{$kata}}</a>
                @endforeach
                </div>
            </div>
        </div>

        {{-- Arti Kata Lainnya --}}
        <div class="flex justify-center pb-10">
            <div class="w-[46rem]">
                <p class="font-light text-base">ARTI KATA LAINNYA</p>
                <hr class="border-t-1 border-black my-4" />
                @foreach($randomKata as $kata)
                <div class="py-4 px-10">
                    <p class="font-medium text-3xl text-artidari-celestial-blue my-1">{{$kata->kata}}</p>
                    <p class="font-normal text-sm leading-tight mb-2">{!! nl2br(e($kata->definisi)) !!}</p>
                    @if (!is_null($kata->definisi_contoh))
                    <p class="font-normal text-sm italic leading-tight mb-2">{!! nl2br(e($kata->definisi_contoh)) !!}</p>
                    @endif
                    <p class="font-light text-sm leading-none">by <span class="text-artidari-celestial-blue">{{$kata->user->name}}</span></p>
                    <p class="font-light text-sm leading-tight text-slate-500">{{ \Carbon\Carbon::parse($kata->created_at)->translatedFormat('d F Y') }}</p>
                    <div class="flex items-center gap-x-4 mt-1">
                        <div class="flex items-center gap-x-1">
                            <img class="h-4 cursor-pointer" src="{{asset('images/like.png')}}" alt="" onclick="like({{$kata->id}}, {{Auth::user()->id}})">
                            <p id="like-count-{{$kata->id}}">{{$kata->like}}</p>
                        </div>
                        <div class="flex items-center gap-x-1">
                            <img class="h-4 cursor-pointer" src="{{asset('images/dislike.png')}}" alt="" onclick="dislike({{$kata->id}}, {{Auth::user()->id}})">
                            <p id="dislike-count-{{$kata->id}}">{{$kata->dislike}}</p>
                        </div>
                    </div>
                </div>
                <hr class="border-t-1 border-black my-4" />
                @endforeach
            </div>
        </div>

    </div>

    {{-- Footer --}}
    <footer class="w-screen h-48 bg-artidari-space-cadet">
        <div class="flex justify-center pt-8">
            <img class="h-[4.5rem]" src="{{asset('images/logo-white.png')}}" alt="">
        </div>
        <div class="flex justify-center pt-8">
            <p class="text-white text-sm">&copy artidari 2024</p>
        </div>
    </footer>
    <script>
        function like(kataId, userId) {
            fetch(`/kata/like/${kataId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    userId: userId
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                document.getElementById(`like-count-${kataId}`).innerText = data.likes;
                document.getElementById(`dislike-count-${kataId}`).innerText = data.dislikes;
            });
        }

        function dislike(kataId, userId) {
            fetch(`/kata/dislike/${kataId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    userId: userId
                })
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById(`dislike-count-${kataId}`).innerText = data.dislikes;
                document.getElementById(`like-count-${kataId}`).innerText = data.likes;
            });
        }
    </script>
</body>
</html>