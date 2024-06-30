<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>
<body class="h-screen bg-artidari-alabaster flex">
    <div class="mx-auto mt-24">
        <img class="w-80 mx-auto" src="{{asset('images/logo-black.png')}}" alt="">
        
        <p class="mt-6 mb-6 font-normal text-2xl">Mendaftarkan akun</p>
        <form method="POST" action="/users">
            @csrf
            <div class="mb-4">
                <div class="flex h-10 border border-black bg-artidari-alabaster rounded w-[28rem]">
                    <img class="h-4 mx-3 mt-3" src="{{asset('images/user.png')}}" alt="">
                    <input
                    type="text"
                    name="username"
                    class="h-full w-full bg-artidari-alabaster placeholder-slate-600 focus:outline-none"
                    placeholder="Username"
                    value="{{old('username')}}"
                    />
                </div>
                

                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex h-10 border border-black bg-artidari-alabaster rounded w-[28rem]">
                    <img class="h-4 mx-3 mt-3" src="{{asset('images/mail.png')}}" alt="">
                    <input
                    type="email"
                    name="email"
                    class="h-full w-full bg-artidari-alabaster placeholder-slate-600 focus:outline-none"
                    placeholder="Email"
                    value="{{old('email')}}"
                    />
                </div>
                

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-8">
                <div class="flex h-10 border border-black bg-artidari-alabaster rounded w-[28rem]">
                    <img class="h-4 mx-3 mt-3" src="{{asset('images/lock.png')}}" alt="">
                    <input
                    type="password"
                    name="password"
                    class="h-full w-full bg-artidari-alabaster placeholder-slate-600 focus:outline-none"
                    placeholder="Password"
                    value="{{old('password')}}"
                    />
                </div>

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-4">
                <button
                    type="submit"
                    class="bg-artidari-space-cadet text-white rounded py-2 px-4 w-[28rem]"
                >
                    Register
                </button>
            </div>

            <div class="w-full max-w-lg mb-4">
                <div class="flex items-center">
                    <div class="flex-grow border-t border-slate-600"></div>
                    <span class="flex-shrink mx-2 text-slate-600 text-sm">Atau</span>
                    <div class="flex-grow border-t border-slate-600"></div>
                </div>
            </div>

            <div>
                <a href="/login">
                    <div class="bg-artidari-space-cadet bg-opacity-65 text-white rounded py-2 px-4 mx-auto w-[28rem] flex items-center justify-center">
                        Sudah Memiliki Akun? Login
                    </div>
                </a>
            </div>
        </form>
    </div>
</body>
</html>