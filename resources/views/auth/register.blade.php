@extends('layots.main')

@section('title', 'Регистрация')

@section('body')
    <body class="bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md p-8 bg-white shadow-lg rounded-lg dark:bg-gray-800">
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-teal-600 dark:text-teal-500">Create Account</h2>
                <p class="mt-2 text-gray-500 dark:text-gray-400">Join our community and explore new opportunities.</p>
            </div>

{{--            <div class="mb-6">--}}
{{--                <button type="button" class="w-full flex items-center justify-center gap-3 py-3 px-4 rounded-lg border border-gray-300 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-1">--}}
{{--                    <img src="https://i.pravatar.cc/50" alt="Google Icon" class="w-5 h-5 rounded-full">--}}
{{--                    <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Continue with Google</span>--}}
{{--                </button>--}}
{{--            </div>--}}

{{--            <div class="relative py-4">--}}
{{--                <div class="absolute inset-0 flex items-center" aria-hidden="true">--}}
{{--                    <div class="w-full border-t border-gray-300 dark:border-gray-700"></div>--}}
{{--                </div>--}}
{{--                <div class="relative flex justify-center text-xs uppercase">--}}
{{--                    <span class="bg-white px-2 text-gray-500 dark:bg-gray-800 dark:text-gray-400">Or register with email</span>--}}
{{--                </div>--}}
{{--            </div>--}}

            <form class="space-y-4" action="{{ route("register") }}" method="POST">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Full Name</label>
                    <div class="mt-1">
                        <input id="name" name="name" type="text" placeholder="Your Name" required class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email address</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" placeholder="you@example.com" required class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" placeholder="Create a password" required class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500">
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                    <div class="mt-1">
                        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm your password" required class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500">
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" type="checkbox" class="focus:ring-teal-500 h-4 w-4 text-teal-600 border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-teal-500">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-medium text-gray-700 dark:text-gray-300">I agree to the <a href="#" class="text-teal-600 hover:underline dark:text-teal-500">Terms and Conditions</a></label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full py-2 px-4 bg-teal-600 hover:bg-teal-700 focus:ring-teal-500 focus:ring-offset-2 focus:ring-2 text-white font-semibold rounded-md shadow-md transition duration-300">
                        Sign Up
                    </button>
                </div>
            </form>

            <div class="mt-6 text-sm text-center text-gray-500 dark:text-gray-400">
                Already have an account? <a href="{{ route('login') }}" class="font-medium text-teal-600 hover:underline dark:text-teal-500">Sign in</a>
            </div>
        </div>
    </div>
    </body>
@endsection
