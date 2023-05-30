@extends("layout.master")
@section("title", "Home Page")

@section("style")
    {{-- <style>
        * {
            border: solid red;
        }
    </style> --}}
@endsection

@section("content")
<div class="px-7 w-full h-full justify-items-between">
    {{-- HIGHLIGHT BOOK SECTION --}}
    <div class="w-full h-fit flex bg-slate-200 p-3 gap-2 items-center">
        <div class="w-[30%] h-fit">
            <img class="object-cover h-auto max-w-full" src="/assets/highlight.jpg" alt="">
        </div>
        <div class="w-[70%] p-7 flex-col items-center">
            <div class="w-fit font-semibold text-sm border-b border-black">
                IT REALLY COUNTS
            </div>
            <div class="w-full font-bold font-serif text-4xl items-center text-left my-3">
                {{-- TITLE --}}
                A fireside chat on education, technology, and almost everything in between
            </div>
            <div class="items-center font-medium text-sm">
                {{-- SUBTITLE --}}
                In San Diego, I got to talk about the issues with today's math curricula-and the promise future holds.
            </div>
        </div>
    </div>

    {{-- LATEST BOOK REVIEWS --}}
    <div class="w-full h-[30%] mt-5 bg-slate-300 p-3">
        <div class="w-fit h-fit font-semibold text-sm border-b border-black">
            LATEST BOOK REVIEWS
        </div>
        <div id="default-carousel" class="w-full h-fit items-center grid grid-cols-5 container mt-5" data-carousel="slide">
             {{-- FOREACH ($books as $book) --}}
            <div class="w-48 h-60 items-center">
                <a href="#">
                    <div class="h-[70%]">
                        <img class="h-full" src="/assets/highlight.jpg" alt="" />
                    </div>
                    <div class="bottom-0 h-[30%] items-center">
                        <p class="mt-2 text-sm font-bold tracking-tight text-gray-900 dark:text-white">BOOK TITLE</p>
                        <p class="text-xs font-normal dark:text-gray-400">This section is for subtitle. Lorem ipsum .....</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- BOOK SERIES REVIEW --}}
    <div class="w-full h-[320px] my-5 bg-slate-950 p-3">
        <div class="w-fit h-fit font-semibold text-sm text-white border-b border-white">
            BOOK SERIES REVIEW
        </div>
        <div id="default-carousel" class="w-full h-fit items-center grid grid-cols-3 container mt-5" data-carousel="slide">
            {{-- FOREACH ($books as $book) --}}
            <div class="w-96 h-60 items-center">
                <div class="h-[80%]">
                    <img class="h-full w-full" src="/assets/highlight.jpg" alt="" />
                </div>
                <div class="bottom-0 items-center h-fit">
                    <p class="my-2 text-sm text-white font-bold tracking-tight">BOOK TITLE</p>
                    <a href="#" class="items-center py-2 px-5 text-xs font-medium text-center text-white border border-white hover:bg-slate-200 hover:text-black hover:border-slate-400 focus:ring-4 focus:outline-none focus:ring-slate-300 dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">
                        Read post
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full  bg-slate-950 bottom-0 py-3 text-white text-center text-sm font-serif h-fit">
    <h2>Blank Space</h2>
    <h2>Black Space</h2>
</div>
@endsection
