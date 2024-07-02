<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kata Baru</title>
</head>
<body>
    <div class="w-screen bg-artidari-celestial-blue pb-20">
        <div class="flex pt-5 pb-20">
            {{-- Back button --}}
            <div class="w-1/6 flex justify-center">
                <a href="/">
                    <img class="h-8" src="{{asset('images/back.png')}}" alt="">
                </a>
            </div>
            {{-- Page title --}}
            <div class="w-4/6 flex justify-center">
                <p class="text-3xl text-white font-bold border-b-2 border-black">ARTI KATA BARU</p>
            </div>
            <div class="w-1/6"></div>
        </div>

        <form action="/kata" method="POST">
        @csrf
        <div class="flex justify-center">
            <div class="bg-white w-[48rem] py-10 px-10">
                <p class="text-xs font-medium">Bagikan definisi yang menurut orang lain bermakna dan jangan pernah mengunggah ujaran kebencian atau informasi pribadi orang lain.</p>
                <input name="kata" type="text" class="bg-artidari-light-silver w-full text-3xl py-2 px-4 my-3" placeholder="KATA" required>
                <p class="text-xs font-normal">Ini akan dibaca oleh banyak orang, maka penting untuk menyertakan beberapa informasi latar belakang untuk memperjelas konteks.</p>
                <textarea name="definisi" id="definisi" class="resize-none bg-artidari-light-silver w-full h-32 text-sm py-2 px-4 my-3" placeholder="Tulis definisinya di sini..." required></textarea>
                <textarea name="definisi_contoh" id="definisi_contoh" class="resize-none bg-artidari-light-silver w-full h-20 text-sm py-2 px-4 mb-3" placeholder="Ketik contoh penggunaan kata ini dalam kalimat..."></textarea>
                <p class="text-xs font-normal">Pilih Kategori</p>
                <select name="kategori" id="kategori" class="bg-artidari-light-silver w-full text-sm py-2 px-4 mt-3" required>
                    <option value="istilah_regional">Istilah Regional</option>
                    <option value="budaya_internet">Budaya Internet</option>
                    <option value="teknologi_gadget">Teknologi dan Gadget</option>
                    <option value="akronim">Akronim</option>
                  </select>
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <button type="submit">
                <div class="bg-artidari-alabaster w-[54rem] h-20 flex items-center justify-center border-dotted border-2 border-black">
                    <p class="text-2xl font-semibold">SUBMIT!</p>
                </div>
            </button>
        </div>
        </form>
    </div>
</body>
</html>