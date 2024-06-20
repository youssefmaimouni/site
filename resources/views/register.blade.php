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

<body class="mb-48">
    <nav class=" sticky top-0 flex justify-between items-center mb-4 h-16 bg-laravel">
        <a href="/">
            <p class="text-2xl font-medium text-white ml-4">Polynet</p>
        </a>
        <ul class="flex space-x-6 mr-6 text-lg text-white">
            <li>
                <a href="/login"
                    ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a
                >
            </li>
        </ul>
    </nav>

    <main>
        <div class="mx-4">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Register
                    </h2>
                    <p class="mb-4">Create an account</p>
                </header>

                <form action="/store" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="inline-block text-lg mb-2">
                            Name
                        </label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}"/>
                    </div>

                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg mb-2">Email</label>
                        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
                        <!-- Error Example -->
                        @error('email')
                        <p class="text-red-500 text-xs w-80 mt-1">{{$message}} </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="inline-block text-lg mb-2">
                            Password
                        </label>
                        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
                        @error('password')
                        <p class="text-red-500 text-xs w-80 mt-1">{{$message}} </p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password2" class="inline-block text-lg mb-2">
                            Confirm Password
                        </label>
                        <input type="password" class="border border-gray-200 rounded p-2 w-full"
                            name="password_confirmation" />
                        @error('password_confirmation')
                            <p class="text-red-500 text-xs w-80 mt-1">{{$message}} </p>
                        @enderror 

                    </div>
                    <div class="mb-6">
                        <div class="flex w-full m-auto items-center">
                            <p class="w-full inline-block text-lg">Role:</p>
                            <div class="w-full">
                                <label for="A">Admin</label>
                                <input type="radio" id='A' class="border border-gray-200 rounded p-2" name="role" value="A" />
                            </div>
                            <div class="w-full">
                                <label for="S">Super Admin</label>
                                <input type="radio" id='S' class="border border-gray-200 rounded p-2" name="role" value="S" />
                            </div>
                        </div>
                        @error('role')
                            <p class="text-red-500 text-xs w-80 mt-1">{{$message}} </p>
                        @enderror 
                    </div>

                    <div class="mb-6">
                        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                            Sign Up
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
