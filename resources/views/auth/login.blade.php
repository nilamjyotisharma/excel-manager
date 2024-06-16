<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Excel-Manager</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full text-center my-auto py-24 bg-gradient-to-br from-pink-50 to-green-200 h-screen">

    <div class="">

    <h1 class="text-neutral-700 font-extrabold text-[5rem] drop-shadow-2xl mb-16">Sign In</h1>
                   
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        
                        <div class="">
                            <!-- <label for="email" class="form-label">Email address</label> -->
                            <input class="border-2 rounded-xl px-4 py-3 my-2 w-[19rem] lg:w-[26rem]" type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="">
                            <!-- <label for="password" class="form-label">Password</label> -->
                            <input class="border-2 rounded-xl px-4 py-3 my-2 w-[19rem] lg:w-[26rem]" type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                        </div>
                        <div class="text-neutral-700 pt-4">
                            <p>Don't have an account? <span class="text-blue-900"><a href="/register">Sign Up</a></span></p>
                        </div>
                        <div class="mt-24 mb-8">
                            <div class="font-bold">
                                <button class="bg-gradient-to-br from-green-400 to-green-700 text-white px-32 py-4 rounded-xl hover:scale-105 duration-300 text-xl">Log In</button>
                            </div>
                        </div>
                    </form>

                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif

    </div>
    </div>
    
</body>
</html>