<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Monitoring</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    {{-- FA --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</head>
<body>
    <div class="flex justify-center py-16">
        <div class="rounded shadow w-[40vw] bg-white p-6">
            <h3 class="text-4xl text-slate-600 font-semibold">Register Akun</h3>

            <form action="/register" method="post">
                @csrf
                <div class="flex flex-col gap-4 mt-6">
                    <div class="flex flex-col gap-2 col-span-2">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="flex flex-col gap-2 col-span-2">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div class="flex flex-col gap-2 col-span-2">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="focus:outline-none border border-slate-500 px-2 py-1 focus:border-sky-500 focus:ring focus:ring-sky-200 rounded">
                    </div>
                    <div>
                        <button class="rounded px-3 py-2 bg-green-500 hover:bg-green-600 focus:ring focus:ring-green-200 active:ring active:ring-green-200 text-white">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>