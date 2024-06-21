<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('img/logo.png')}}" rel="icon">

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
    <title>Site</title>
</head>
<style>
    
    .tabAnim {
    z-index: 1;
    }

    #private:checked~div {
        --tw-translate-x: 0%;
    }

    #public:checked~div {
        --tw-translate-x: 100%;
    }
    .profile-pic {
        border-radius: 50%;
        height: 150px;
        width: 150px;
        background-size: cover;
        background-position: center;
        background-blend-mode: multiply;
        vertical-align: middle;
        text-align: center;
        color: transparent;
        transition: all .3s ease;
        text-decoration: none;
        cursor: pointer;
        border: solid 1px black;
    }

    .profile-pic:hover {
        background-color: rgba(0, 0, 0, .5);
        z-index: 10000;
        color: #fff;
        transition: all .3s ease;
        text-decoration: none;
    }

    .profile-pic span {
        display: inline-block;
        /* color: black; */
        padding-top: 4.5em;
        padding-bottom: 4.5em;
    }

    form input[type="file"] {
        display: none;
        cursor: pointer;
    }
</style>

<body class="mb-48 bg-gray-100">
    <nav class="sticky top-0 flex justify-between items-center mb-4 h-16 bg-laravel">
        <a href="/">
            <p class="text-2xl font-medium text-white ml-4">Polynet</p>
        </a>
        <ul class="flex space-x-6 mr-6 text-lg text-white">
            <li>
                <a href="/logout"
                    ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    LogOut</a
                >
            </li>
        </ul>
    </nav>

    @php
        // dd($group->title);
    @endphp

    <main>
        <div class="mx-4">
            <div class="bg-gray-50 border border-gray-200 shadow-md p-10 rounded max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-3xl font-bold uppercase mb-1">
                        Ajouter Site
                    </h2>
                </header>

                <form action="/site/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <center>
                            <label for="fileToUpload">
                                    <div class="profile-pic" id="photo" style="background-image: url('logo.jpg')">
                                        <!-- <span class="glyphicon glyphicon-camera"></span> -->
                                        <span>Add Image</span>
                                    </div>
                            </label>
                        </center>
                    </div>
                    <input type="File" name="logo" accept="image/png, image/gif, image/jpeg" id="fileToUpload">
                    <div class="mb-6">
                        <label for="title" class="inline-block text-lg mb-2">Website Title </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="titre"
                            placeholder="title"  />
                        @error('titre')
                            <p class="text-red-500 test-xs mt-1">{{$message}}</p>
                        @enderror                    
                    </div>
                    
                    <div class="mb-6">
                        <label for="company" class="inline-block text-lg mb-2">Link </label>
                        <input type="url" class="border border-gray-200 rounded p-2 w-full" name="lien"
                            placeholder="Lien"  />
                        @error('lien')
                            <p class="text-red-500 test-xs mt-1">{{$message}}</p>
                        @enderror                    
                    </div>
                    <div class="mb-6">
                        <label for="categorier" class="inline-block text-lg mb-2">Categorier </label>
                        <select name="categorier" class="border border-gray-200 rounded p-2 w-full" id="categorier">
                            @foreach ($categorier as $item)
                                <option value="{{$item->id}}">{{$item->categorier}} </option>
                                @endforeach
                                <option value="-1">Autre </option>
                            </select>
                            <input type="hidden" id="writeIn" class="border border-gray-200 rounded mt-2 p-2 w-full" name="new_cat" placeholder="new categorier"  />
                        @error('categorier')
                            <p class="text-red-500 test-xs mt-1">{{$message}}</p>
                        @enderror                    
                    </div>
                    <div class="mb-6">
                        <label for="tite" class="inline-block text-lg mb-2">Website description </label>
                        <textarea name="description" id="" class="border border-gray-200 rounded p-2 w-full h-52" placeholder="description"></textarea>
                        @error('description')
                            <p class="text-red-500 test-xs mt-1">{{$message}}</p>
                        @enderror                    
                    </div>

                    <div class="mb-6">
                        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-laravel2 text-lg">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
<script>
    const select = document.getElementById('categorier');
    const writeIn = document.getElementById('writeIn');

    select.addEventListener('change', function() {
    if (select.value === '-1') {
        writeIn.type="text"
    } else {
        writeIn.type="hidden"
    }
    });
</script>
<script>
    const img = document.querySelector('#photo');
    const file = document.querySelector('#fileToUpload');
    file.addEventListener('change', function () {
        const choosedFile = this.files[0];

        if (choosedFile) {

            const reader = new FileReader();

            reader.addEventListener('load', function () {
                img.setAttribute('src', reader.result);
                img.setAttribute('style', "background-image: url('" + reader.result + "')");
            });

            reader.readAsDataURL(choosedFile);

        }
    });
</script>
</html>