<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') &bull; {{ config('app.name', 'Nova NextGen Design') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="flex flex-col items-stretch justify-between fixed w-72 bg-white border-r h-screen py-3 px-6 text-grey-dark leading-normal">
			<div>
				<a href="#" class="flex justify-center my-6 leading-0"></a>

				<div class="flex flex-col -mx-6">
					<a href="{{ route('themes.index') }}" class="flex justify-between no-underline text-grey-dark font-medium py-2 px-6 flex items-center hover:text-grey-darkest">
						<div class="flex items-center">
							Themes
						</div>
					</a>
				</div>

				<div class="my-3 border-t"></div>

				<div class="text-xs uppercase tracking-wide py-3 text-grey font-medium">Documentation</div>

				<div class="flex flex-col -mx-6">
					<a href="#" class="flex justify-between no-underline text-grey-dark font-medium py-2 px-6 flex items-center hover:text-grey-darkest">
						<div class="flex items-center">
							<i data-feather="clipboard" class="h-5 w-5 mr-3"></i>
							Getting started
						</div>
					</a>
					<a href="#" class="flex justify-between no-underline text-grey-dark font-medium py-2 px-6 flex items-center hover:text-grey-darkest">
						<div class="flex items-center">
							<i data-feather="book-open" class="h-5 w-5 mr-3"></i>
							Components
						</div>
						<i data-feather="chevron-down" class="h-4 w-4"></i>
					</a>
					<a href="#" class="flex justify-between no-underline text-grey-dark font-medium py-2 px-6 flex items-center hover:text-grey-darkest">
						<div class="flex items-center">
							<i data-feather="git-branch" class="h-5 w-5 mr-3"></i>
							Changelog
						</div>
						<div class="rounded-sm bg-blue text-white text-2xs py-1 px-2">v3.0</div>
					</a>
				</div>
			</div>

			<div class="flex flex-row items-center justify-around -mx-6 border-t pt-3 px-6">
				<a href="#" class="no-underline text-grey hover:text-grey-darker leading-0">
					<i data-feather="bell" class="h-5 w-5"></i>
				</a>

				<div class="flex items-center">
					<a href="#" class="flex items-center no-underline text-grey hover:text-grey-darker leading-0">
						<i data-feather="user" class="h-8 w-8"></i>
						<i data-feather="chevron-down" class="ml-1 h-4 w-4"></i>
					</a>
				</div>

				<a href="#" class="no-underline text-grey hover:text-grey-darker leading-0">
					<i data-feather="search" class="h-5 w-5"></i>
				</a>
			</div>
		</nav>

        <main class="flex-1 ml-72 py-6 px-12">
            @yield('content')
        </main>
    </div>
</body>
</html>
