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
    <div class="w-full">
        <div class="w-fit font-semibold text-sm border-b border-black">
            IT REALLY COUNTS
        </div>
        <div class="w-full">
            <div class="w-full font-bold font-serif text-4xl items-center text-left my-3">
                {{-- TITLE --}}
                A fireside chat on education, technology, and almost everything in between
            </div>
            <div class="items-center font-medium text-sm my-3">
                {{-- SUBTITLE --}}
                In San Diego, I got to talk about the issues with today's math curricula-and the promise future holds.
            </div>
            <div class="flex gap-5 items-center">
                <div class="flex font-normal space-x-2 text-sm items-center">
                    <div class="flex gap-1">
                        <p class="dark:text-white">By</p>
                        <p class="font-bold dark:text-white">Author</p>
                    </div>
                    <p class="text-cDarkGrey">|</p>
                    <p class="dark:text-white" aria-current="page">Community</p>
                </div>
                <div class="w-fit flex justify-between items-center text-xs text-white gap-2">
                    <div class="rounded-lg bg-slate-900 px-3 py-1">Long Reads</div>
                    <div class="rounded-lg bg-slate-700 px-3 py-1">Medium Reads</div>
                    <div class="rounded-lg bg-slate-500 px-3 py-1">Quick Reads</div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-full mt-5 items-center justify-between">
        {{-- POST IMAGE --}}
        <div class="w-full h-[360px]">
            <img class="h-full w-full" src="/assets/highlight.jpg" alt="" />
        </div>
        {{-- POST SHARE BUTTON --}}
        <div class="flex gap-2 my-3 items-center object-center">
        <!-- Linkedin -->
        <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5"
        fill="currentColor"
        viewBox="0 0 24 24">
        <path
        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
        </svg>

        <!-- Twitter -->
        <svg
        xmlns="http://www.w3.org/2000/svg"
        class="ml-1 h-5 w-5"
        fill="currentColor"
        viewBox="0 0 24 24">
        <path
        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>

        <!-- Facebook -->
        <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5"
        fill="currentColor"
        viewBox="0 0 24 24">
        <path
        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
        </svg>

        <!-- Instagram -->
        <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-5 w-5"
        fill="currentColor"
        viewBox="0 0 24 24">
        <path
        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
        </svg>
        </div>
        {{-- POST BODY --}}
        <div class="w-full max-h-fit text-sm">
            <p class="mb-3">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
            <p class="mb-3">Deliver great service experiences fast - without the complexity of traditional ITSM solutions.Accelerate critical development work, eliminate toil, and deploy changes with ease, with a complete audit trail for every change.</p>
        </div>
        {{-- VIDEO SECTION --}}
        <div class="aspect-w-16 aspect-h-9">
            <iframe src="https://www.youtube.com/embed/r9jwGansp1E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="w-full  bg-slate-950 bottom-0 py-3 text-white text-center text-sm font-serif h-fit">
    <h2>Blank Space</h2>
    <h2>Black Space</h2>
</div>
@endsection
