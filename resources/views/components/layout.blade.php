<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>PixPo</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-neutral-200 font-mono font-light pb-10">
    
    <div class="px-10">

        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="">
                    <img class="max-w-[100px]" src="{{ Vite::asset('resources/images/logo.png') }}" alt="">
                </a>
            </div>
            
            <div class="space-x-6 font-bold">
               <a href="">Jobs</a>
               <a href="">Careers</a>
               <a href="">Salaries</a>
               <a href="">Companies</a>
            </div>
            
            @auth
            <div class="space-x-6 font-bold flex">
                <a href="/jobs/create">Post a Job</a>

                <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')   
                    <button type="submit">Logout</button>
                </form>
             </div>
            @endauth

            @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Login</a>
        
             </div>
            @endguest
            
            

        </nav>

        <main class="mt-10 max-w-[986px] m-auto">
            {{ $slot }}
        </main>



    </div>

</body>
</html>