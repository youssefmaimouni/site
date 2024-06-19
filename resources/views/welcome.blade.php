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

        <!-- Hero -->
        <main>
            <!-- Search -->
            <form action="">
                <div class="relative border-2 border-gray-100 m-4 rounded-lg">
                    <div class="absolute top-4 left-3">
                        <i
                            class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
                        ></i>
                    </div>
                    <input
                        type="text"
                        name="search"
                        class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                        placeholder="Search Laravel Gigs..."
                    />
                    <div class="absolute top-2 right-2">
                        <button
                            type="submit"
                            class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                        >
                            Search
                        </button>
                    </div>
                </div>
            </form>

            <div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >
                <!-- Item 1 -->
                <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            {{-- src="{{$listing->logo ? asset('storage/'.$listing->logo):asset('/images/no-image.png')}}" --}}
                            src="{{asset('/image.jfif')}}"
                            alt=""
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="show.html">Senior Laravel Developer</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">Acme Corp</div>
                            
                            <div class=" mt-4 text-sm title-text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
