@props(['kata'])


<div class="flex justify-center py-5">
    <div class="bg-white w-[46rem] border-4 rounded-xl border-black py-8 px-10">
        <p class="font-medium text-3xl text-artidari-celestial-blue my-1">{{$kata->kata}}</p>
        <p class="font-normal text-sm leading-tight mb-2">{!! nl2br(e($kata->definisi)) !!}</p>
        @if (!is_null($kata->definisi_contoh))
        <p class="font-normal text-sm italic leading-tight mb-2">{!! nl2br(e($kata->definisi_contoh)) !!}</p>
        @endif
        <div class="flex justify-between">
            <div>
                <p class="font-light text-sm leading-none">by <span class="text-artidari-celestial-blue">{{$kata->user->name}}</span></p>
                <p class="font-light text-sm leading-tight text-slate-500">{{ \Carbon\Carbon::parse($kata->created_at)->translatedFormat('d F Y') }}</p>        
            </div>
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
    </div>
</div>
