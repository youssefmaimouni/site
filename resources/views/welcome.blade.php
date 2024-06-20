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
                            laravel2: "#254e86",
                        },
                    },
                },
            };
            let i=1;
        </script>
        <style>
            .title-text{
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
            line-clamp: 2; 
            -webkit-box-orient: vertical;
        }
        </style>
        <title>Site</title>
    </head>
    <body class="mb-36 h-full">
        <nav class=" sticky top-0 flex justify-between items-center h-16 bg-laravel">
            <div class="flex">
                <button id="toggleButton" class="ml-2" style="display:none">       
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg fill="#FFF" height="15px" width="15px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                        viewBox="0 0 460.775 460.775" xml:space="preserve">
                    <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55
                        c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55
                        c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505
                        c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55
                        l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719
                        c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"/>
                    </svg>
                </button>
                <button id="showButton" style="display:block" class="ml-2">
                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg width="15px" height="15px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                    <path fill="#FFF" fill-rule="evenodd" d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z"/>
                    </svg>
                </button>
                <a href="/">
                    <p class="text-2xl font-medium text-white ml-4">Polynet</p>
                </a>
            </div>
            <ul class="flex space-x-6 mr-6 text-lg items-center text-white">
                @auth
                    <li>
                        <a href="/logout"
                            ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                            LogOut</a
                        >
                    </li>    
                @endauth
                @if (!auth()->check())
                <li>
                    <a href="/admin"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                @endif
            </ul>
        </nav>
        
        <div id="sidebar" class=' flex-col items-start pl-4 justify-start w-64 fixed left-0 h-full hidden bg-gray-100'>
            @auth
            @if (auth()->user()->role=='S')
            
                <a href="/register" class="flex text-laravel font-medium text-lg mt-6">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg fill="#1967D2" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                        viewBox="0 0 328 328" xml:space="preserve">
                    <g id="XMLID_455_">
                        <path id="XMLID_458_" d="M15,286.75h125.596c19.246,24.348,49.031,40,82.404,40c57.897,0,105-47.103,105-105s-47.103-105-105-105
                            c-34.488,0-65.145,16.716-84.298,42.47c-7.763-1.628-15.694-2.47-23.702-2.47c-63.411,0-115,51.589-115,115
                            C0,280.034,6.716,286.75,15,286.75z M223,146.75c41.355,0,75,33.645,75,75s-33.645,75-75,75s-75-33.645-75-75
                            S181.645,146.75,223,146.75z"/>
                        <path id="XMLID_461_" d="M115,1.25c-34.602,0-62.751,28.15-62.751,62.751S80.398,126.75,115,126.75
                            c34.601,0,62.75-28.148,62.75-62.749S149.601,1.25,115,1.25z"/>
                        <path id="XMLID_462_" d="M193,236.75h15v15c0,8.284,6.716,15,15,15s15-6.716,15-15v-15h15c8.284,0,15-6.716,15-15s-6.716-15-15-15
                            h-15v-15c0-8.284-6.716-15-15-15s-15,6.716-15,15v15h-15c-8.284,0-15,6.716-15,15S184.716,236.75,193,236.75z"/>
                    </g>
                    </svg>
                    <p class="ml-4">
                        Register
                    </p>
                </a>
            @endif
                <a href="/create" class="flex text-laravel font-medium text-lg mt-6">
                    <abbr title="ajouter site">
                        <svg fill="#1967D2" height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
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
                        </svg>
                    </abbr>
                    <p class="ml-4">
                        Add Site
                    </p>
                </a>
                
                @endauth
                <a href="/create" class="flex text-laravel font-medium text-lg mt-6">
                    <abbr title="ajouter site">
                        <?xml version="1.0" ?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg fill="#1967D2" width="30px" height="30px" viewBox="0 0 512 512" id="_x30_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M418.275,146h-46.667  c-5.365-22.513-12.324-43.213-20.587-61.514c15.786,8.776,30.449,19.797,43.572,32.921C403.463,126.277,411.367,135.854,418.275,146  z M452,256c0,17.108-2.191,33.877-6.414,50h-64.034c1.601-16.172,2.448-32.887,2.448-50s-0.847-33.828-2.448-50h64.034  C449.809,222.123,452,238.892,452,256z M256,452c-5.2,0-21.048-10.221-36.844-41.813c-6.543-13.087-12.158-27.994-16.752-44.187  h107.191c-4.594,16.192-10.208,31.1-16.752,44.187C277.048,441.779,261.2,452,256,452z M190.813,306  c-1.847-16.247-2.813-33.029-2.813-50s0.966-33.753,2.813-50h130.374c1.847,16.247,2.813,33.029,2.813,50s-0.966,33.753-2.813,50  H190.813z M60,256c0-17.108,2.191-33.877,6.414-50h64.034c-1.601,16.172-2.448,32.887-2.448,50s0.847,33.828,2.448,50H66.414  C62.191,289.877,60,273.108,60,256z M256,60c5.2,0,21.048,10.221,36.844,41.813c6.543,13.087,12.158,27.994,16.752,44.187H202.404  c4.594-16.192,10.208-31.1,16.752-44.187C234.952,70.221,250.8,60,256,60z M160.979,84.486c-8.264,18.301-15.222,39-20.587,61.514  H93.725c6.909-10.146,14.812-19.723,23.682-28.593C130.531,104.283,145.193,93.262,160.979,84.486z M93.725,366h46.667  c5.365,22.513,12.324,43.213,20.587,61.514c-15.786-8.776-30.449-19.797-43.572-32.921C108.537,385.723,100.633,376.146,93.725,366z   M351.021,427.514c8.264-18.301,15.222-39,20.587-61.514h46.667c-6.909,10.146-14.812,19.723-23.682,28.593  C381.469,407.717,366.807,418.738,351.021,427.514z"/></svg>
                    </abbr>
                    <p class="ml-4">
                        Site
                    </p>
                </a>
                <a href="/create" class="flex text-laravel font-medium text-lg mt-6">
                    <abbr title="ajouter site">
                        <svg width="30px" height="30px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="m 7.015625 0 c -1.109375 0 -2 0.890625 -2 2 v 1 h -3.015625 c -1.109375 0 -2 0.890625 -2 2 v 2 h 1.015625 c 1.105469 0 2 0.890625 2 2 s -0.894531 2 -2 2 h -1.015625 v 2.988281 c 0 1.105469 0.890625 2 2 2 h 3.015625 v -0.988281 c 0 -1.109375 0.890625 -2 2 -2 c 1.105469 0 2 0.890625 2 2 v 0.988281 h 2 c 1.105469 0 2 -0.894531 2 -2 v -2.988281 h 1 c 1.105469 0 2 -0.890625 2 -2 s -0.894531 -2 -2 -2 h -1 v -2 c 0 -1.109375 -0.894531 -2 -2 -2 h -2 v -1 c 0 -1.109375 -0.894531 -2 -2 -2 z m 0 0" fill="#1967D2"/>
                        </svg>
                    </abbr>
                    <p class="ml-4">
                        Application
                    </p>
                </a>
                <a href="/create" class="flex text-laravel font-medium text-lg mt-6">
                    <abbr title="ajouter site">
                        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 10.5C5.17157 10.5 4.5 11.1716 4.5 12C4.5 12.8284 5.17157 13.5 6 13.5C6.82843 13.5 7.5 12.8284 7.5 12C7.5 11.1716 6.82843 10.5 6 10.5Z" fill="#1967D2"/>
                            <path d="M10.5 12C10.5 11.1716 11.1716 10.5 12 10.5C12.8284 10.5 13.5 11.1716 13.5 12C13.5 12.8284 12.8284 13.5 12 13.5C11.1716 13.5 10.5 12.8284 10.5 12Z" fill="#1967D2"/>
                            <path d="M16.5 12C16.5 11.1716 17.1716 10.5 18 10.5C18.8284 10.5 19.5 11.1716 19.5 12C19.5 12.8284 18.8284 13.5 18 13.5C17.1716 13.5 16.5 12.8284 16.5 12Z" fill="#1967D2"/>
                            </svg>
                    </abbr>
                    <p class="ml-4">
                        Autre
                    </p>
                </a>
            </div>
            
            
        
        {{-- @dd($site) --}}
        <!-- Hero -->
        <main id="item" class="">
            <!-- Search -->

            <div
                class="lg:grid xl:grid-cols-2 2xl:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4 mt-4"
            >
            <style>
                .image{
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                }
                .whatever{
                    word-wrap: break-word;
                    /* width: 250px; */
                }
            </style>
            @foreach ($site as $item)
                
            <!-- Item 1 -->
            <div  class="bg-gray-50 border border-gray-200 rounded p-6 shadow-md max-w-full">
                <div class="grid md:flex">
                    <div class="grid h-full md:h-48 aspect-square mr-6 md:block">
                        <img
                            class="image"
                            {{-- src="{{$listing->logo ? asset('storage/'.$listing->logo):asset('/images/no-image.png')}}" --}}
                            src="{{asset("/storage/".$item->logo)}}"
                            alt=""
                        />
                    </div>
                    <div class="">
                        <h3 class="text-2xl flex">
                            <div class="w-full">                            
                                {{$item->titre}}
                            </div>
                            <div class="w-12">
                                <abbr title="{{$item->lien}}" class="no-underline">
                                    <a href="{{$item->lien}}" target="_blank">
                                        <?xml version="1.0" encoding="iso-8859-1"?>
                                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                        <svg fill="#000000" height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                            viewBox="0 0 491.1 491.1" xml:space="preserve">
                                        <g>
                                            <path d="M379.25,282.85l-192.8,192.8c-20.6,20.6-54,20.6-74.6,0s-20.6-54,0-74.6l155.5-155.5l-155.5-155.5
                                                c-20.6-20.6-20.6-54,0-74.6s54-20.6,74.6,0l192.8,192.8C399.85,228.85,399.85,262.25,379.25,282.85z"/>
                                        </g>
                                        </svg>
                                    </a>
                                </abbr>
                            </div>
                        </h3>
                        
                        <div class="max-h-11 overflow-hidden max-w-full whatever mt-4 text-sm title-text hidden md:inline-block ">
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
    <script>
        document.getElementById('toggleButton').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('hidden'); 
            sidebar.classList.remove('flex'); 
            var main = document.getElementById('item');
            main.classList.remove('ml-64'); 
            i++;
            name();
        });
        document.getElementById('showButton').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.remove('hidden'); 
            sidebar.classList.toggle('flex'); 
            var main = document.getElementById('item');
            if(screen.width>480){
                main.classList.toggle('ml-64'); 
            }
            i++;
            name();
        });
    </script>
    <script>
        function name() {
            
            if (i % 2 === 0) {
                document.getElementById('toggleButton').style.display = 'block'; // Show toggleButton
                document.getElementById('showButton').style.display = 'none';     // Hide showButton
                
            } else {
                document.getElementById('toggleButton').style.display = 'none';   // Hide toggleButton
                document.getElementById('showButton').style.display = 'block';    // Show showButton
                
            }
        }
    </script>
    </html>
    