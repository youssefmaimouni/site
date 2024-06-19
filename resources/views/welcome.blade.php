<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#1967D2",
                        },
                    },
                },
            };
        </script>
        <style>
            .title-text{
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 6; /* number of lines to show */
            line-clamp: 6; 
            -webkit-box-orient: vertical;
        }
        </style>
        <title>LaraGigs | Find Laravel Jobs & Projects</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4 h-16 bg-laravel">
            <a href="index.html"
                ><img class="w-24" src="images/logo.png" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg items-center text-white">
                <li>
                    <a href="/logout"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        LogOut</a
                    >
                </li>
                <li>
                    <a href="/creat"
                        >
                        <svg fill="#FFF" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                             viewBox="0 0 27.963 27.963" xml:space="preserve">
                        <g>
                            <g id="c140__x2B_">
                                <path d="M13.98,0C6.259,0,0,6.26,0,13.982s6.259,13.981,13.98,13.981c7.725,0,13.983-6.26,13.983-13.981
                                    C27.963,6.26,21.705,0,13.98,0z M21.102,16.059h-4.939v5.042h-4.299v-5.042H6.862V11.76h5.001v-4.9h4.299v4.9h4.939v4.299H21.102z
                                    "/>
                            </g>
                            <g id="Capa_1_9_">
                            </g>
                        </g>
                        </svg></a
                    >
                </li>
            </ul>
        </nav>
        {{-- @dd($site) --}}
        <!-- Hero -->
        <main>
            <!-- Search -->

            <div
                class="lg:grid lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4  gap-4 space-y-4 md:space-y-0 mx-4"
            >
            <style>
                .image{
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                }
            </style>
            @foreach ($site as $item)
                
            <!-- Item 1 -->
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <div class="grid h-48 aspect-square mr-6 md:block">
                        <img
                            class="image"
                            {{-- src="{{$listing->logo ? asset('storage/'.$listing->logo):asset('/images/no-image.png')}}" --}}
                            src="{{asset("/storage/".$item->logo)}}"
                            alt=""
                        />
                    </div>
                    <div>
                        <h3 class="text-2xl">
                            <a target="_blank" href="{{$item->lien}}">{{$item->titre}} </a>
                        </h3>
                        
                        <div class=" mt-4 text-sm title-text">
                            {{$item->description}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="mt-6 p-4 col-span-full">
                {{$site->links()}}
            </div>
            </div>
        </main>
    </body>
    </html>
    