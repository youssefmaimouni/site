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
                            laravel: "#ef3b2d",
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
            <ul class="flex space-x-6 mr-6 text-lg text-white">
                <li>
                    <a href="/logout"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        LogOut</a
                    >
                </li>
            </ul>
        </nav>
        {{-- @dd($site) --}}
        <!-- Hero -->
        <main>
            <!-- Search -->

            <div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
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
                            <a href="{{$item->lien}}">{{$item->titre}} </a>
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
    