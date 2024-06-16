<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Excel | Excel-Manager</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="p-2">



        @if($uploads->isEmpty())
        <div class="flex justify-between p-4 items-center">

            <div class="flex space-x-2 items-center">
                <img class="lg:h-12 h-4 lg:w-12 w-4 drop-shadow-xl" src="/images/icon.png" alt="">
                <p class="text-green-700 font-bold text-sm lg:text-lg drop-shadow-2xl">Excel-Manager</p>
            </div>

            <a href="/dashboard" class="h-12 w-32 lg:w-44 font-bold items-center text-center flex justify-center bg-gradient-to-br from-green-400 to-green-700 text-white rounded-lg hover:scale-105 duration-300 lg:px-2">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2 lg:mr-4">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z" clip-rule="evenodd" />
                </svg>


                Dashboard
            </a>
        </div>
        <div class="flex-col text-center my-16 lg:my-32 mx-12">
            <h1 class="text-neutral-700 font-extrabold text-[2.2rem] lg:text-[3rem] drop-shadow-2xl">Opps, You excel bucket is empty</h1>


            <div class="w-full flex justify-center text-center mt-32">

                <a href="/excel/import" class="h-16 w-48 font-bold items-center text-center flex justify-center bg-gradient-to-br from-green-400 to-green-700 text-white rounded-lg hover:scale-105 duration-300">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2">
                        <path fill-rule="evenodd" d="M11.47 2.47a.75.75 0 0 1 1.06 0l4.5 4.5a.75.75 0 0 1-1.06 1.06l-3.22-3.22V16.5a.75.75 0 0 1-1.5 0V4.81L8.03 8.03a.75.75 0 0 1-1.06-1.06l4.5-4.5ZM3 15.75a.75.75 0 0 1 .75.75v2.25a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5V16.5a.75.75 0 0 1 1.5 0v2.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V16.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                    </svg>

                    Upload File
                </a>

            </div>



        </div>
    </div>

    @else

    <div class="flex justify-between mb-4">
        <h2 class="text-neutral-700 font-extrabold text-sm lg:text-2xl drop-shadow-2xl my-4">Your Uploaded Excel File :</h2>
        <div class="flex space-x-2">

            <form action="{{url('/excel/delete')}}" method="POST" onsubmit="return confirm('Are you sure you want to delete all imported data?');">
                @csrf
                @method('DELETE')
                <button class="h-12 w-32 lg:w-44 font-bold items-center text-center lg:flex justify-center bg-gradient-to-br from-red-400 to-red-700 text-white rounded-lg hover:scale-105 duration-300 lg:px-2 hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2 lg:mr-4">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                    </svg>Delete</button>

                <button class="h-12 w-12 lg:w-44 font-bold items-center text-center flex justify-center bg-gradient-to-br from-red-400 to-red-700 text-white rounded-lg hover:scale-105 duration-300 lg:px-2 lg:hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                    </svg></button>


            </form>

            <a href="/dashboard" class="h-12 w-32 lg:w-44 font-bold items-center text-center lg:flex justify-center bg-gradient-to-br from-green-400 to-green-700 text-white rounded-lg hover:scale-105 duration-300 lg:px-2 hidden">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2 lg:mr-4">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z" clip-rule="evenodd" />
                </svg>
                Dashboard
            </a>
            <a href="/dashboard" class="h-12 w-12 lg:w-44 font-bold items-center text-center flex justify-center bg-gradient-to-br from-green-400 to-green-700 text-white rounded-lg hover:scale-105 duration-300 lg:px-2 lg:hidden">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z" clip-rule="evenodd" />
                </svg>
                
            </a>
        </div>

    </div>

    <div class="overflow-x-scroll px-2 lg:px-12 text-xs lg:text-sm">

        <table>
            <thead class="">
                <tr class="">
                    <th class="border-2 px-4 py-2 border-neutral-400 bg-green-600 text-white font-bold">Id</th>
                    <th class="border-2 px-4 py-2 border-neutral-400 bg-green-600 text-white font-bold">Scheme Code</th>
                    <th class="border-2 px-4 py-2 border-neutral-400 bg-green-600 text-white font-bold">Scheme Name</th>
                    <th class="border-2 px-4 py-2 border-neutral-400 bg-green-600 text-white font-bold">Central/State Scheme</th>
                    <th class="border-2 px-4 py-2 border-neutral-400 bg-green-600 text-white font-bold">Financial Year</th>
                    <th class="border-2 px-4 py-2 border-neutral-400 bg-green-600 text-white font-bold">State Disbursement</th>
                    <th class="border-2 px-4 py-2 border-neutral-400 bg-green-600 text-white font-bold">Central Disbursement</th>
                    <th class="border-2 px-4 py-2 border-neutral-400 bg-green-600 text-white font-bold">Total Disbursement</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($uploads as $upload)
                <tr class="bg-white odd:bg-green-100">
                    <td class="border-2 p-4 border-neutral-400">{{ $upload->id }}</td>
                    <td class="border-2 p-4 border-neutral-400">{{ $upload->scheme_code }}</td>
                    <td class="border-2 p-4 border-neutral-400">{{ $upload->scheme_name }}</td>
                    <td class="border-2 p-4 border-neutral-400">{{ $upload->central_state_scheme }}</td>
                    <td class="border-2 p-4 border-neutral-400">{{ $upload->fin_year }}</td>
                    <td class="border-2 p-4 border-neutral-400">{{ $upload->state_disbursement }}</td>
                    <td class="border-2 p-4 border-neutral-400">{{ $upload->central_disbursement }}</td>
                    <td class="border-2 p-4 border-neutral-400">{{ $upload->total_disbursement }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>



    @endif


    </div>
</body>

</html>