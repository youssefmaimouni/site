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
                @auth
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
                @endauth
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
        @auth
            
        <div id="sidebar" class=' flex-col items-start pl-4 justify-start w-64 fixed left-0 h-full hidden bg-gray-100'>
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
                
            </div>
            
        @endauth
            
        
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
            </style>
            @foreach ($site as $item)
                
            <!-- Item 1 -->
            <div  class="bg-gray-50 border border-gray-200 rounded p-6 shadow-md ">
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
                        <h3 class="text-2xl">
                            <abbr title="{{$item->lien}}" class="no-underline">
                                <a target="_blank" href="{{$item->lien}}">{{$item->titre}} </a>

                            </abbr>
                        </h3>
                        
                        <div class="max-h-36 overflow-hidden mt-4 text-sm title-text hidden md:inline-block ">
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
    