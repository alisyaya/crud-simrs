<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-[#3D5EB2] flex h-full w-full">

            <div class="block h-full w-full lg:h-screen lg:p-2">
                {{-- pop up --}}
                <div class="absolute hidden bg-slate-500 h-screen w-full z-10 opacity-70"></div>

               {{-- search bar --}}
               <div class=" bg-white flex fixed items-center justify-between rounded-b-xl h-14 w-full p-3 z-30 shadow-lg lg:hidden">
                   {{-- logo --}}
                   <h1 class="text-slate-500 font-[700] flex items-center text-2xl mb-1 pointer-events-none">
                       Suka<span class="text-red-500">S</span>akit<span class="text-3xl">.</span>
                   </h1>

                   {{-- menu --}}
                   <div class="text-slate-500 flex items-center justify-between  w-14 ">
                       {{-- search --}}

                       <a href="#" class=" flex items-center justify-center text-2xl p-1 rounded-sm hover:text-black hover:bg-white"><ion-icon name="search-sharp" class=""></ion-icon></a>

                       {{-- menu heisenberg --}}
                       <a href="#" class=" flex items-center justify-content text-2xl p-1 rounded-sm hover:text-black hover:bg-white"><ion-icon name="menu"></ion-icon></a>
                   </div>
               </div>

               <div class="bg-[#eeeeee] h-[420px] rounded-b-[40px] sm:h-[600px] lg:ml-52 lg:rounded-xl lg:h-full lg:bg-white lg:overflow-auto lg:p-2">
                   <div class="bg-black h-14 rounded-xl">
                       {{-- search bar --}}
                       <div class=" bg-white fixed hidden items-center justify-between rounded-b-xl h-14 w-[84.3%] p-3 shadow-lg lg:flex lg:rounded-xl">
                           {{-- logo --}}
                           <h1 class="text-slate-500 font-[700] flex items-center text-2xl mb-1 pointer-events-none">
                               Suka<span class="text-red-500">S</span>akit<span class="text-3xl">.</span>
                           </h1>

                           {{-- menu --}}
                           <div class="text-slate-500 flex items-center justify-between  w-14 ">
                               {{-- search --}}

                               <a href="#" class=" flex items-center justify-center text-2xl p-1 rounded-sm hover:text-black hover:bg-white"><ion-icon name="search-sharp" class=""></ion-icon></a>

                               {{-- menu heisenberg --}}
                               <a href="#" class=" flex items-center justify-content text-2xl p-1 rounded-sm hover:text-black hover:bg-white"><ion-icon name="menu"></ion-icon></a>
                           </div>
                       </div>
                </div>

                   {{-- profile mobile --}}
                   <div class="h-full p-5 sm:hidden">

                       <div class=" bg-[#365090] mx-auto mt-2 h-56 w-full max-w-[300px] rounded-xl">
                       {{-- profile --}}
                           <div class="bg-[#3D5EB2] flex h-1/2 w-full p-2 rounded-xl shadow-3 ">
                           {{-- image --}}
                           <div class="bg-white h-full w-32 rounded-xl">

                           </div>

                           {{-- nama dokter --}}
                           <div class=" h-full w-32 px-3 text-white">

                           </div>


                           </div>
                       </div>


                       {{-- pasien dokter --}}
                           <div class="grid grid-cols-2 h-20 w-full max-w-[300px] mx-auto mt-4 gap-4 group">
                           {{-- pasien --}}
                               <div class="bg-slate-500 h-full w-full rounded-xl p-1">
                                   <div class=" bg-white h-full w-1/2 rounded-xl">

                                   </div>
                               </div>
                           {{-- dokter --}}
                               <div class="bg-slate-500 h-full w-full rounded-xl p-1">
                                   <div class=" bg-white h-full w-1/2 rounded-xl">

                                   </div>
                               </div>
                           </div>

                   </div>

                   {{-- profile tablet --}}
                   <div class=" hidden h-full p-5 sm:block lg:hidden ">
                       <div class="grid grid-cols-4 gap-x-8 mx-auto mt-14 h-36 w-full max-w-[780px] rounded-xl">
                           <div class="bg-white h-full w-full rounded-xl shadow-lg">

                           </div>
                           <div class="bg-white h-full w-full rounded-xl shadow-lg">

                           </div>
                           <div class="bg-white h-full w-full rounded-xl shadow-lg">

                           </div>
                           <div class="bg-white h-full w-full rounded-xl shadow-lg">
                           </div>
                       </div>

                       <div class="flex gap-x-8 mt-8 mx-auto max-w-[780px]">
                           <div class="bg-white w-2/3 h-64 rounded-xl shadow-lg ">

                           </div>
                           <div class="bg-white w-1/3 h-64 rounded-xl shadow-lg ">

                           </div>
                       </div>
                   </div>
               </div>

               {{-- smile :) --}}
                   <div class="bg-[#eeeeee] grid grid-cols-1 h-fit min-h-20 w-full max-w-[300px] mx-auto my-7 px-3 pt-5 pb-2 rounded-t-xl rounded-b-[50px] sm:max-w-[780px] sm:rounded-xl sm:grid-cols-2 sm:gap-x-7 sm:p-5 lg:hidden">
                       {{-- table --}}
                           <div class="bg-white h-28 w-full p-2 rounded-xl shadow-3-strong mb-5 sm:m-0">
                           {{-- no reg --}}
                               <div class="flex h-6 items-center justify-between mb-1">
                                   <div class="text-sm">
                                       No registrasi
                                       No antrian
                                   </div>
                                   <div class="text-red-500 text-sm font-sans font-bold rounded-full ">
                                       <a href="#"><ion-icon name="close"></ion-icon></a>
                                   </div>
                               </div>

                           {{-- Nama --}}
                               <div class="text-xl mb-3">
                                   <h3>Muhammad Zakaria</h3>
                               </div>

                           {{-- edit panggil --}}
                               <div class="flex h-6 items-center justify-end gap-2">
                                   {{-- edit --}}
                                       <div class="bg-white flex text-sm p-1 h-full w-16 rounded-full items-center justify-center shadow-3-strong">
                                           <a href="#">Edit</a>
                                       </div>
                                   {{-- panggil --}}
                                       <div class="bg-green-600  text-sm p-1 flex h-full w-16 text-white rounded-full items-center justify-center">
                                           <a href="#">Panggil</a>
                                       </div>

                               </div>

                           </div>
                           <div class="bg-white h-28 w-full p-2 rounded-xl shadow-3-strong mb-5 sm:m-0">
                           {{-- no reg --}}
                               <div class="flex h-6 items-center justify-between mb-1">
                                   <div class="text-sm">
                                       No registrasi
                                       No antrian
                                   </div>
                                   <div class="text-red-500 text-sm font-sans font-bold rounded-full ">
                                       <a href="#"><ion-icon name="close"></ion-icon></a>
                                   </div>
                               </div>

                           {{-- Nama --}}
                               <div class="text-xl mb-3">
                                   <h3>Muhammad Zakaria</h3>
                               </div>

                           {{-- edit panggil --}}
                               <div class="flex h-6 items-center justify-end gap-2">
                                   {{-- edit --}}
                                       <div class="bg-white flex text-sm p-1 h-full w-16 rounded-full items-center justify-center shadow-3-strong">
                                           <a href="#">Edit</a>
                                       </div>
                                   {{-- panggil --}}
                                       <div class="bg-green-600  text-sm p-1 flex h-full w-16 text-white rounded-full items-center justify-center">
                                           <a href="#">Panggil</a>
                                       </div>
                               </div>
                           </div>
                   </div>






            </div>






<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
