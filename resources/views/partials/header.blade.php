<div class="flex justify-end p-4 h-[72px] bg-white gap-16 items-center">
    <h3 class='text-base text-dark-green'>Welcome, {{auth()->user()->username}}</h3>
    <form action="/logout" method="post">
        @csrf
        <button class='flex gap-x-2 items-center text-red-600'>
            <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
        </button>
    </form>
</div>