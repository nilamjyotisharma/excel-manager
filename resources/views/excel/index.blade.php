<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Excel | Excel-Manager</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
    <div class="h-14 flex justify-between p-4 lg:px-12 lg:py-6 items-center shadow-lg sticky top-1 bg-white z-10">
            <div class="flex space-x-2 items-center">
                <img class="lg:h-12 h-4 lg:w-12 w-4 drop-shadow-xl" src="images/icon.png" alt="">            
                <p class="text-green-700 font-bold text-sm lg:text-lg drop-shadow-2xl">Excel-Manager</p>
            </div>

            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="h-10 text-xs lg:text-lg bg-gradient-to-br from-red-400 to-red-700 text-white px-6 py-1 rounded-xl hover:scale-105 duration-300 flex justify-between items-center" type="submit">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2"><path fill-rule="evenodd" d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z" clip-rule="evenodd" /></svg>
                    Log Out</button>
            </form>
        </div>
        <div class="lg:h-screen">
        <div class="my-24 mx-2 lg:mx-24 lg:my-24 bg-gradient-to-br from-pink-50 to-green-200 p-12 lg:p-24 rounded-xl">
        <div class="text-center">
            <h1 class="text-neutral-700 font-extrabold text-xl lg:text-[3rem] drop-shadow-2xl">Upload your excel file here</h1>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="size-36 border-2 border-green-300 border-separate p-8 m-12 w-[16rem] lg:w-[60rem] mx-auto"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" /></svg>



        </div>
            <form class="flex justify-between" action="{{ url('excel/import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex w-2/3 lg:w-full bg-white items-center">
                        <input class="text-xl px-2" type="file" name="file" class="form-control" required>
                    </div>
                    <button type="submit" class="h-12 -ml-12 w-24 px-8 lg:w-32 font-bold items-center text-center flex justify-center bg-gradient-to-br from-green-400 to-green-700 text-white rounded-lg hover:scale-105 duration-300">Upload</button>
        </form>
        <h1 class="text-neutral-600 text-xl pt-2">Supported formats : "xls","xlsx"</h1>

        
        @if(Session::has('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ Session::get('success') }}
                </div>
                <div class="">
                    <a href="/excel/show" class="h-16 w-full font-bold items-center text-center flex justify-center bg-gradient-to-br from-green-400 to-green-700 text-white rounded-lg hover:scale-105 duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" /></svg>

                        View File
                    </a>

                </div>
                
            @endif

</div>

        </div>
        
        <div class="h-24 mt-12 text-center bg-neutral-800 text-white">
            <p class="pt-12">&copy; All rights reserved by Nilam Jyoti Sharma</p>
        </div>
    </div>
                
</body>
</html>