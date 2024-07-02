<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Akronim</title>
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
                <a href="/akronim" class="border-b-2 border-white">Akronim</a>
            </div>
        </div>
    </header>

    {{-- Hero --}}
    <div class="w-screen bg-white pt-14 pb-5">
        <div class="flex justify-center">
            <p class="text-3xl font-semibold">AKRONIM</p>
        </div>
        <div class="flex justify-center mx-52">
            <p class="text-sm text-center">Pernahkah kamu bertanya-tanya, “Apa itu akronim?” atau “Apa arti dari akronim-akronim yang sering kita lihat?” Seperti halnya singkatan yang mempersingkat kata-kata panjang, akronim adalah cara cepat untuk menyampaikan ide atau konsep tanpa harus mengucapkan atau menulis keseluruhan frasa. Misalnya, ‘LOL’ yang berarti ‘laughing out loud’ atau ‘tertawa terbahak-bahak’, memberi kita cara untuk mengekspresikan reaksi kita dalam bentuk digital yang ringkas. Akronim bisa berupa kata yang terbentuk dari huruf pertama dalam sebuah frasa, atau bisa juga merupakan setiap huruf yang mewakili sebuah nama atau organisasi, diucapkan satu per satu. Jadi, ketika kamu melihat ‘PSSI’ atau ‘YNTKTS’, kamu sedang melihat akronim yang telah menjadi bagian dari bahasa kita di era digital ini.</p>
        </div>
    </div>
    
    {{-- Main Content --}}
    <div class="w-screen bg-artidari-alabaster py-10">

        <div class="flex justify-center">
            <div class="w-[46rem]">
                <p class="text-xl font-normal">ISTILAH AKRONIM POPULER</p>
            </div>
        </div>
            
        {{-- Istilah Regional --}}
        @if($kataAkronim && $kataAkronim->isNotEmpty())
            @foreach($kataAkronim as $kata)
                <x-card :kata="$kata" />
            @endforeach
        @else
            <div class="flex justify-center py-20 ">
                <div class="bg-white w-[46rem] border-4 rounded-xl border-black py-8 px-10">
                    <p class="font-medium text-3xl text-artidari-celestial-blue my-1">Tidak ada Istilah Akronim</p>
                </div>
            </div>
        @endif

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