{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav me-auto">

                    </ul>

                   
                    <ul class="navbar-nav ms-auto">
                       
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div> 
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
 --}}

 {{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
        <style>
            *,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
 --}}


 
<!doctype html>
<html class="no-js" lang="fr">
  <head
  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4WSFYVDV4E"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4WSFYVDV4E');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11059678864"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11059678864');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11046990384"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11046990384');
</script>
<meta name="facebook-domain-verification" content="n18gnvgscur8nr4n0hccnpayep73sz" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-196620906-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-196620906-1');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="canonical" href="https://horlogio.com/"><link rel="icon" type="image/png" href="//horlogio.com/cdn/shop/files/horlogio_favicon.png?crop=center&height=32&v=1667978800&width=32"><link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin><title>
      horlogio MA
</title>

    
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 --}}
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script src="{{asset('JS/bootstrap.min.js')}}"></script>
 <script src="{{asset('JS/jquery.min.js')}}"></script>
 <script src="{{asset('JS/main.js')}}"></script>
 <script src="{{asset('JS/popper.js')}}"></script>

 <link rel="stylesheet" href="{{asset('CSS/style.css')}}">

<meta property="og:site_name" content="horlogio MA">
<meta property="og:url" content="https://horlogio.com/">
<meta property="og:title" content="horlogio MA">
<meta property="og:type" content="website">
<meta property="og:description" content="horlogio MA"><meta property="og:image" content="http://horlogio.com/cdn/shop/files/horlogiologo.png?height=628&pad_color=ffffff&v=1667978813&width=1200">
  <meta property="og:image:secure_url" content="https://horlogio.com/cdn/shop/files/horlogiologo.png?height=628&pad_color=ffffff&v=1667978813&width=1200">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="628"><meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="horlogio MA">
<meta name="twitter:description" content="horlogio MA">


    <script src="//horlogio.com/cdn/shop/t/3/assets/constants.js?v=58251544750838685771687820339" defer="defer"></script>
    <script src="//horlogio.com/cdn/shop/t/3/assets/pubsub.js?v=158357773527763999511687820339" defer="defer"></script>
    <script src="//horlogio.com/cdn/shop/t/3/assets/global.js?v=139248116715221171191687820339" defer="defer"></script><script src="//horlogio.com/cdn/shop/t/3/assets/animations.js?v=114255849464433187621687820338" defer="defer"></script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/67689939240/digital_wallets/dialog">
<script async="async" src="/checkouts/internal/preloads.js?locale=fr-MA"></script>
<script async="async" src="https://shop.app/checkouts/internal/preloads.js?locale=fr-MA&shop_id=67689939240" crossorigin="anonymous"></script>
<script id="shopify-features" type="application/json">{"accessToken":"174491fa0c64a08ea25dd7d9373bcab7","betas":["rich-media-storefront-analytics"],"domain":"horlogio.com","predictiveSearch":true,"shopId":67689939240,"smart_payment_buttons_url":"https:\/\/horlogio.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.fr.js","dynamic_checkout_cart_url":"https:\/\/horlogio.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.fr.js","locale":"fr","flg4ff40b22":false}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "horlogio-ma.myshopify.com";
Shopify.locale = "fr";
Shopify.currency = {"active":"MAD","rate":"1.0"};
Shopify.country = "MA";
Shopify.theme = {"name":"Updated copy of Dawn","id":152779718952,"theme_store_id":887,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "horlogio.com/cdn";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script id="__st">var __st={"a":67689939240,"offset":3600,"reqid":"7dbca408-0230-4324-b185-5c86ee9cadfc-1713554455","pageurl":"horlogio.com\/?fbclid=IwAR0ysf2T7ukMvOvi9cRHdLQDP-bYUV184qywU2gwjkLAcQ0MtQYn5ZWYKC4_aem_Aei6Kt5grwfkTAokq3pYBT-dy8tCP754Drn69KK68Vofp7W3w58TRtmn9X_aHTeDRMjxrAxzqLXk3gEJt3rsXOA1\u0026utm_source=facebook\u0026utm_medium=paid\u0026campaign_id=120208544619090747\u0026ad_id=120208544619080747","u":"335fca0488cd","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LeHG2ApAAAAAO4rPaDW-qVpPKPOBfjbCpzJB9ey"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>
<script integrity="sha256-n5Uet9jVOXPHGd4hH4B9Y6+BxkTluaaucmYaxAjUcvY=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//horlogio.com/cdn/shopifycloud/shopify/assets/storefront/load_feature-9f951eb7d8d53973c719de211f807d63af81c644e5b9a6ae72661ac408d472f6.js" crossorigin="anonymous"></script>
<script integrity="sha256-HAs5a9TQVLlKuuHrahvWuke+s1UlxXohfHeoYv8G2D8=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//horlogio.com/cdn/shopifycloud/shopify/assets/storefront/features-1c0b396bd4d054b94abae1eb6a1bd6ba47beb35525c57a217c77a862ff06d83f.js" crossorigin="anonymous"></script>
<script id="sections-script" data-sections="header" defer="defer" src="//horlogio.com/cdn/shop/t/3/compiled_assets/scripts.js?106"></script>

<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>


    <style data-shopify>
      @font-face {
  font-family: "Avenir Next";
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//horlogio.com/cdn/fonts/avenir_next/avenirnext_n4.7fd0287595be20cd5a683102bf49d073b6abf144.woff2?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=7c310bf9f8c841550dff7a63e0997774b019dea5d57ee5620e7e6f036514d16e") format("woff2"),
       url("//horlogio.com/cdn/fonts/avenir_next/avenirnext_n4.a26a334a0852627a5f36b195112385b0cd700077.woff?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=fceeefa66bf3de5aef4416eaf7f3738b616ec2d10aa0b6a62f455f07a3378c9b") format("woff");
}

      @font-face {
  font-family: "Avenir Next";
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("//horlogio.com/cdn/fonts/avenir_next/avenirnext_n7.8cfc646eab1e39e2d81a26284624600ccae49d55.woff2?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=5d336e59e88a66714c00c5f8032938e236c07cf77f41e2bfd7573f0878f84271") format("woff2"),
       url("//horlogio.com/cdn/fonts/avenir_next/avenirnext_n7.25b10f8089bc87dfd8e50a7c68b433da7a04bc87.woff?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=a250998e8f7c590d9e26d0f4f7fe7ec5c23549c27a7d645ee9a8f2fe3d86bd6f") format("woff");
}

      @font-face {
  font-family: "Avenir Next";
  font-weight: 400;
  font-style: italic;
  font-display: swap;
  src: url("//horlogio.com/cdn/fonts/avenir_next/avenirnext_i4.f1583d9f457b68e44fbda187a48b4096d547d7f4.woff2?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=95cad239f22a8e79c11af07e439d062034a50cc203e6992da4d7b2ebf9f4c8d0") format("woff2"),
       url("//horlogio.com/cdn/fonts/avenir_next/avenirnext_i4.67fb53a3e0351125941146246183577ae8d8bf23.woff?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=53833c143d6304c98239a43b335f39d97ba4030a738037b693bc4e13721b910d") format("woff");
}

      @font-face {
  font-family: "Avenir Next";
  font-weight: 700;
  font-style: italic;
  font-display: swap;
  src: url("//horlogio.com/cdn/fonts/avenir_next/avenirnext_i7.3a67996166b5b7f1b7cc3b35490ebd6824908dc5.woff2?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=f5c3a9663217f1f0dd7225fd77d799424f1324cc96824a5219b795893d8b4e2a") format("woff2"),
       url("//horlogio.com/cdn/fonts/avenir_next/avenirnext_i7.b872875ff437f0efb4c2321d0016eaa726b649ae.woff?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=f6d1a69a35965e56e5f6e82401195fe9cf404323f0a11f9eb545aad922f593d1") format("woff");
}

      @font-face {
  font-family: Lora;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//horlogio.com/cdn/fonts/lora/lora_n4.0a0652f356f2b7896162c4887e16208805a241f6.woff2?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=36e4d6826eae38b9c94218da33f7f103d88c937534e6aaac007b599720be9621") format("woff2"),
       url("//horlogio.com/cdn/fonts/lora/lora_n4.e4a3d82d5d6a27aaec9d12942e1c4b9400193fc5.woff?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=20d51416067a7d7d16a57edec9c81f08137c0077acdf83b12652e65c26f8c9e3") format("woff");
}


      
        :root,
        .color-background-1 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        
        --color-foreground: 18,18,18;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 255,255,255;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 255,255,255;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(255 255 255);
      }
      
        
        .color-background-2 {
          --color-background: 237,244,23;
        
          --gradient-background: #edf417;
        
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 237,244,23;
        --color-button-text: 18,18,18;
        --color-secondary-button: 237,244,23;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 237,244,23;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(237 244 23);
      }
      
        
        .color-inverse {
          --color-background: 255,243,45;
        
          --gradient-background: #fff32d;
        
        --color-foreground: 18,18,18;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 18,18,18;
        --color-secondary-button: 255,243,45;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 255,243,45;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(255 243 45);
      }
      
        
        .color-accent-1 {
          --color-background: 18,18,18;
        
          --gradient-background: #121212;
        
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 18,18,18;
        --color-secondary-button: 18,18,18;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 18,18,18;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(18 18 18);
      }
      
        
        .color-accent-2 {
          --color-background: 237,244,23;
        
          --gradient-background: #edf417;
        
        --color-foreground: 18,18,18;
        --color-shadow: 18,18,18;
        --color-button: 237,244,23;
        --color-button-text: 18,18,18;
        --color-secondary-button: 237,244,23;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 237,244,23;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(237 244 23);
      }
      

      body, .color-background-1, .color-background-2, .color-inverse, .color-accent-1, .color-accent-2 {
        color: rgba(var(--color-foreground), 0.75);
        background-color: rgb(var(--color-background));
      }

      :root {
        --font-body-family: "Avenir Next", sans-serif;
        --font-body-style: normal;
        --font-body-weight: 400;
        --font-body-weight-bold: 700;

        --font-heading-family: Lora, serif;
        --font-heading-style: normal;
        --font-heading-weight: 400;

        --font-body-scale: 1.0;
        --font-heading-scale: 1.05;

        --media-padding: px;
        --media-border-opacity: 0.05;
        --media-border-width: 1px;
        --media-radius: 0px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 4px;
        --media-shadow-blur-radius: 5px;
        --media-shadow-visible: 0;

        --page-width: 120rem;
        --page-width-margin: 0rem;

        --product-card-image-padding: 0.0rem;
        --product-card-corner-radius: 0.0rem;
        --product-card-text-alignment: left;
        --product-card-border-width: 0.0rem;
        --product-card-border-opacity: 0.1;
        --product-card-shadow-opacity: 0.0;
        --product-card-shadow-visible: 0;
        --product-card-shadow-horizontal-offset: 0.0rem;
        --product-card-shadow-vertical-offset: 0.4rem;
        --product-card-shadow-blur-radius: 0.5rem;

        --collection-card-image-padding: 0.0rem;
        --collection-card-corner-radius: 0.0rem;
        --collection-card-text-alignment: left;
        --collection-card-border-width: 0.0rem;
        --collection-card-border-opacity: 0.1;
        --collection-card-shadow-opacity: 0.0;
        --collection-card-shadow-visible: 0;
        --collection-card-shadow-horizontal-offset: 0.0rem;
        --collection-card-shadow-vertical-offset: 0.4rem;
        --collection-card-shadow-blur-radius: 0.5rem;

        --blog-card-image-padding: 0.0rem;
        --blog-card-corner-radius: 0.0rem;
        --blog-card-text-alignment: left;
        --blog-card-border-width: 0.0rem;
        --blog-card-border-opacity: 0.1;
        --blog-card-shadow-opacity: 0.0;
        --blog-card-shadow-visible: 0;
        --blog-card-shadow-horizontal-offset: 0.0rem;
        --blog-card-shadow-vertical-offset: 0.4rem;
        --blog-card-shadow-blur-radius: 0.5rem;

        --badge-corner-radius: 4.0rem;

        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 0px;
        --popup-shadow-opacity: 0.0;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 4px;
        --popup-shadow-blur-radius: 5px;

        --drawer-border-width: 1px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: 4px;
        --drawer-shadow-blur-radius: 5px;

        --spacing-sections-desktop: 0px;
        --spacing-sections-mobile: 0px;

        --grid-desktop-vertical-spacing: 8px;
        --grid-desktop-horizontal-spacing: 8px;
        --grid-mobile-vertical-spacing: 4px;
        --grid-mobile-horizontal-spacing: 4px;

        --text-boxes-border-opacity: 0.1;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 0px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 4px;
        --text-boxes-shadow-blur-radius: 5px;

        --buttons-radius: 6px;
        --buttons-radius-outset: 7px;
        --buttons-border-width: 1px;
        --buttons-border-opacity: 1.0;
        --buttons-shadow-opacity: 0.0;
        --buttons-shadow-visible: 0;
        --buttons-shadow-horizontal-offset: 0px;
        --buttons-shadow-vertical-offset: 4px;
        --buttons-shadow-blur-radius: 5px;
        --buttons-border-offset: 0.3px;

        --inputs-radius: 0px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 4px;
        --inputs-shadow-blur-radius: 5px;
        --inputs-radius-outset: 0px;

        --variant-pills-radius: 40px;
        --variant-pills-border-width: 1px;
        --variant-pills-border-opacity: 0.55;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: 0px;
        --variant-pills-shadow-vertical-offset: 4px;
        --variant-pills-shadow-blur-radius: 5px;
      }

      *,
      *::before,
      *::after {
        box-sizing: inherit;
      }

      html {
        box-sizing: border-box;
        font-size: calc(var(--font-body-scale) * 62.5%);
        height: 100%;
      }

      body {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        grid-template-columns: 100%;
        min-height: 100%;
        margin: 0;
        font-size: 1.5rem;
        letter-spacing: 0.06rem;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
        font-family: var(--font-body-family);
        font-style: var(--font-body-style);
        font-weight: var(--font-body-weight);
      }

      @media screen and (min-width: 750px) {
        body {
          font-size: 1.6rem;
        }
      }
    </style>

    <link href="//horlogio.com/cdn/shop/t/3/assets/base.css?v=117828829876360325261687820338" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="font" href="//horlogio.com/cdn/fonts/avenir_next/avenirnext_n4.7fd0287595be20cd5a683102bf49d073b6abf144.woff2?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=7c310bf9f8c841550dff7a63e0997774b019dea5d57ee5620e7e6f036514d16e" type="font/woff2" crossorigin><link rel="preload" as="font" href="//horlogio.com/cdn/fonts/lora/lora_n4.0a0652f356f2b7896162c4887e16208805a241f6.woff2?h1=aG9ybG9naW8uY29t&h2=aG9ybG9naW8tbWEuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=36e4d6826eae38b9c94218da33f7f103d88c937534e6aaac007b599720be9621" type="font/woff2" crossorigin><script>
      document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }
    </script>
  <script src="https://cdn.shopify.com/extensions/a46296e1-a570-4192-b2e0-f469c1f727f4/onepixel-facebook-pixel-tiktok-3/assets/one-pixel.js" type="text/javascript" defer="defer"></script>
<link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 67689939240,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "index"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="web-pixels-manager-setup">(function e(e,n,a,t,r){var o="function"==typeof BigInt&&-1!==BigInt.toString().indexOf("[native code]")?"modern":"legacy";window.Shopify=window.Shopify||{};var i=window.Shopify;i.analytics=i.analytics||{};var s=i.analytics;s.replayQueue=[],s.publish=function(e,n,a){return s.replayQueue.push([e,n,a]),!0};try{self.performance.mark("wpm:start")}catch(e){}var l=[a,"/wpm","/b",r,o.substring(0,1),".js"].join("");!function(e){var n=e.src,a=e.async,t=void 0===a||a,r=e.onload,o=e.onerror,i=document.createElement("script"),s=document.head,l=document.body;i.async=t,i.src=n,r&&i.addEventListener("load",r),o&&i.addEventListener("error",o),s?s.appendChild(i):l?l.appendChild(i):console.error("Did not find a head or body element to append the script")}({src:l,async:!0,onload:function(){var a=window.webPixelsManager.init(e);n(a);var t=window.Shopify.analytics;t.replayQueue.forEach((function(e){var n=e[0],t=e[1],r=e[2];a.publishCustomEvent(n,t,r)})),t.replayQueue=[],t.publish=a.publishCustomEvent,t.visitor=a.visitor},onerror:function(){var n=e.storefrontBaseUrl.replace(/\/$/,""),a="".concat(n,"/.well-known/shopify/monorail/unstable/produce_batch"),r=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/2.0",payload:{version:t||"latest",page_url:self.location.href,status:"failed",error_msg:"".concat(l," has failed to load")},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(a,r))return!0}catch(e){}var o=new XMLHttpRequest;try{return o.open("POST",a,!0),o.setRequestHeader("Content-Type","text/plain"),o.send(r),!0}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1}})})({shopId: 67689939240,storefrontBaseUrl: "https://horlogio.com",cdnBaseUrl: "https://horlogio.com/cdn",surface: "storefront-renderer",enabledBetaFlags: [],webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"063","apiClientId":"shopify-pixel","type":"APP","purposes":["ANALYTICS"]},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"063","apiClientId":"shopify-pixel","type":"CUSTOM","purposes":["ANALYTICS"]}],initData: {"cart":null,"checkout":null,"customer":null,"productVariants":[]},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed");},"https://horlogio.com/cdn","0.0.475","baa6afa9wb6651392pa5ffba32m0365c380",);</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'MAD';
var meta = {"page":{"pageType":"home"}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(window.gaDevIds=window.gaDevIds||[]).push('BwiEti');


(function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.onerror = function(e) {
        var scriptFallback = document.createElement('script');
        scriptFallback.type = 'text/javascript';
        scriptFallback.onerror = function(error) {
                var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 67689939240,
      theme_id: 152779718952,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "//horlogio.com/cdn/s/trekkie.storefront.88baf04046928b6edf6574afd22dbd026cc7d568.min.js"});

        };
        scriptFallback.async = true;
        scriptFallback.src = '//horlogio.com/cdn/s/trekkie.storefront.88baf04046928b6edf6574afd22dbd026cc7d568.min.js';
        first.parentNode.insertBefore(scriptFallback, first);
      };
      script.async = true;
      script.src = '//horlogio.com/cdn/s/trekkie.storefront.88baf04046928b6edf6574afd22dbd026cc7d568.min.js';
      first.parentNode.insertBefore(script, first);
    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":67689939240,"isMerchantRequest":null,"themeId":152779718952,"themeCityHash":"2140446194028979641","contentLanguage":"fr","currency":"MAD"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain","enabledBetaFlags":["bbcf04e6"]},"Google Analytics":{"trackingId":"UA-196620906-1","domain":"auto","siteSpeedSampleRate":"10","enhancedEcommerce":true,"doubleClick":true,"includeSearch":true},"Facebook Pixel":{"pixelIds":["6117623411581535"],"agent":"plshopify1.2"},"Google Gtag Pixel":{"conversionId":"G-4WSFYVDV4E","eventLabels":[{"type":"purchase","action_label":"G-4WSFYVDV4E"},{"type":"page_view","action_label":"G-4WSFYVDV4E"},{"type":"view_item","action_label":"G-4WSFYVDV4E"},{"type":"search","action_label":"G-4WSFYVDV4E"},{"type":"add_to_cart","action_label":"G-4WSFYVDV4E"},{"type":"begin_checkout","action_label":"G-4WSFYVDV4E"},{"type":"add_payment_info","action_label":"G-4WSFYVDV4E"}],"targetCountry":"US"},"Session Attribution":{},"S2S":{"facebookCapiEnabled":true,"facebookAppPixelId":"6117623411581535","source":"trekkie-storefront-renderer"}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

        ga('require', 'linker');
      function addListener(element, type, callback) {
        if (element.addEventListener) {
          element.addEventListener(type, callback);
        }
        else if (element.attachEvent) {
          element.attachEvent('on' + type, callback);
        }
      }
      function decorate(event) {
        event = event || window.event;
        var target = event.target || event.srcElement;
        if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
          ga(function (tracker) {
            var linkerParam = tracker.get('linkerParam');
            document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
          });
        }
      }
      addListener(window, 'load', function(){
        for (var i=0; i < document.forms.length; i++) {
          var action = document.forms[i].getAttribute('action');
          if(action && action.indexOf('/cart') >= 0) {
            addListener(document.forms[i], 'submit', decorate);
          }
        }
        for (var i=0; i < document.links.length; i++) {
          var href = document.links[i].getAttribute('href');
          if(href && href.indexOf('/checkout') >= 0) {
            addListener(document.links[i], 'click', decorate);
          }
        }
      });
    

      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"home"});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        
      }
    });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "//horlogio.com/cdn/shopifycloud/shopify/assets/shop_events_listener-61fa9e0a912c675e178777d2b27f6cbd482f8912a6b0aa31fa3515985a8cd626.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script class="boomerang">
(function () {
  if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
    return;
  }
  window.BOOMR = window.BOOMR || {};
  window.BOOMR.snippetStart = new Date().getTime();
  window.BOOMR.snippetExecuted = true;
  window.BOOMR.snippetVersion = 12;
  window.BOOMR.application = "storefront-renderer";
  window.BOOMR.themeName = "Dawn";
  window.BOOMR.themeVersion = "10.0.0";
  window.BOOMR.shopId = 67689939240;
  window.BOOMR.themeId = 152779718952;
  window.BOOMR.renderRegion = "gcp-europe-west1";
  window.BOOMR.url =
    "https://horlogio.com/cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
  var where = document.currentScript || document.getElementsByTagName("script")[0];
  var parentNode = where.parentNode;
  var promoted = false;
  var LOADER_TIMEOUT = 3000;
  function promote() {
    if (promoted) {
      return;
    }
    var script = document.createElement("script");
    script.id = "boomr-scr-as";
    script.src = window.BOOMR.url;
    script.async = true;
    parentNode.appendChild(script);
    promoted = true;
  }
  function iframeLoader(wasFallback) {
    promoted = true;
    var dom, bootstrap, iframe, iframeStyle;
    var doc = document;
    var win = window;
    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
    bootstrap = function(parent, scriptId) {
      var script = doc.createElement("script");
      script.id = scriptId || "boomr-if-as";
      script.src = window.BOOMR.url;
      BOOMR_lstart = new Date().getTime();
      parent = parent || doc.body;
      parent.appendChild(script);
    };
    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
      window.BOOMR.snippetMethod = "s";
      bootstrap(parentNode, "boomr-async");
      return;
    }
    iframe = document.createElement("IFRAME");
    iframe.src = "about:blank";
    iframe.title = "";
    iframe.role = "presentation";
    iframe.loading = "eager";
    iframeStyle = (iframe.frameElement || iframe).style;
    iframeStyle.width = 0;
    iframeStyle.height = 0;
    iframeStyle.border = 0;
    iframeStyle.display = "none";
    parentNode.appendChild(iframe);
    try {
      win = iframe.contentWindow;
      doc = win.document.open();
    } catch (e) {
      dom = document.domain;
      iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
      win = iframe.contentWindow;
      doc = win.document.open();
    }
    if (dom) {
      doc._boomrl = function() {
        this.domain = dom;
        bootstrap();
      };
      doc.write("<body onload='document._boomrl();'>");
    } else {
      win._boomrl = function() {
        bootstrap();
      };
      if (win.addEventListener) {
        win.addEventListener("load", win._boomrl, false);
      } else if (win.attachEvent) {
        win.attachEvent("onload", win._boomrl);
      }
    }
    doc.close();
  }
  var link = document.createElement("link");
  if (link.relList &&
    typeof link.relList.supports === "function" &&
    link.relList.supports("preload") &&
    ("as" in link)) {
    window.BOOMR.snippetMethod = "p";
    link.href = window.BOOMR.url;
    link.rel = "preload";
    link.as = "script";
    link.addEventListener("load", promote);
    link.addEventListener("error", function() {
      iframeLoader(true);
    });
    setTimeout(function() {
      if (!promoted) {
        iframeLoader(true);
      }
    }, LOADER_TIMEOUT);
    BOOMR_lstart = new Date().getTime();
    parentNode.appendChild(link);
  } else {
    iframeLoader(false);
  }
  function boomerangSaveLoadTime(e) {
    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
  }
  if (window.addEventListener) {
    window.addEventListener("load", boomerangSaveLoadTime, false);
  } else if (window.attachEvent) {
    window.attachEvent("onload", boomerangSaveLoadTime);
  }
  if (document.addEventListener) {
    document.addEventListener("onBoomerangLoaded", function(e) {
      e.detail.BOOMR.init({
        ResourceTiming: {
          enabled: true,
          trackedResourceTypes: ["script", "img", "css"]
        },
      });
      e.detail.BOOMR.t_end = new Date().getTime();
    });
  } else if (document.attachEvent) {
    document.attachEvent("onpropertychange", function(e) {
      if (!e) e=event;
      if (e.propertyName === "onBoomerangLoaded") {
        e.detail.BOOMR.init({
          ResourceTiming: {
            enabled: true,
            trackedResourceTypes: ["script", "img", "css"]
          },
        });
        e.detail.BOOMR.t_end = new Date().getTime();
      }
    });
  }
})();</script>
</head>

  <body class="gradient animate--hover-default">
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Ignorer et passer au contenu
    </a>

<script src="//horlogio.com/cdn/shop/t/3/assets/cart.js?v=80361240427046189311687820338" defer="defer"></script>

<style>
  .drawer {
    visibility: hidden;
  }
</style>

<cart-drawer class="drawer is-empty">
  <div id="CartDrawer" class="cart-drawer">
    <div id="CartDrawer-Overlay" class="cart-drawer__overlay"></div>
    <div
      class="drawer__inner"
      role="dialog"
      aria-modal="true"
      aria-label="Votre panier"
      tabindex="-1"
    ><div class="drawer__inner-empty">
          <div class="cart-drawer__warnings center">
            <div class="cart-drawer__empty-content">
              <h2 class="cart__empty-text">Votre panier est vide</h2>
              <button
                class="drawer__close"
                type="button"
                onclick="this.closest('cart-drawer').close()"
                aria-label="Fermer"
              >
                <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

              </button>
              <a href="/collections/all" class="button">
                Continuer les achats
              </a></div>
          </div></div><div class="drawer__header">
        <h2 class="drawer__heading">Votre panier</h2>
        <button
          class="drawer__close"
          type="button"
          onclick="this.closest('cart-drawer').close()"
          aria-label="Fermer"
        >
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

        </button>
      </div>
      <cart-drawer-items
        
          class=" is-empty"
        
      >
        <form
          action="/cart"
          id="CartDrawer-Form"
          class="cart__contents cart-drawer__form"
          method="post"
        >
          <div id="CartDrawer-CartItems" class="drawer__contents js-contents"><p id="CartDrawer-LiveRegionText" class="visually-hidden" role="status"></p>
            <p id="CartDrawer-LineItemStatus" class="visually-hidden" aria-hidden="true" role="status">
              Chargement en cours...
            </p>
          </div>
          <div id="CartDrawer-CartErrors" role="alert"></div>
        </form>
      </cart-drawer-items>
      <div class="drawer__footer"><!-- Start blocks -->
        <!-- Subtotals -->

        <div class="cart-drawer__footer" >
          <div class="totals" role="status">
            <h2 class="totals__subtotal">Sous-total</h2>
            <p class="totals__subtotal-value">0.00 Dh</p>
          </div>

          <div></div>

          <small class="tax-note caption-large rte">Taxes et frais d&#39;expédition calculés lors du paiement
</small>
        </div>

        <!-- CTAs -->

        <div class="cart__ctas" >
          <noscript>
            <button type="submit" class="cart__update-button button button--secondary" form="CartDrawer-Form">
              Mettre à jour
            </button>
          </noscript>

          <button
            type="submit"
            id="CartDrawer-Checkout"
            class="cart__checkout-button button"
            name="checkout"
            form="CartDrawer-Form"
            
              disabled
            
          >
            Procéder au paiement
          </button>
        </div>
      </div>
    </div>
  </div>
</cart-drawer>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    function isIE() {
      const ua = window.navigator.userAgent;
      const msie = ua.indexOf('MSIE ');
      const trident = ua.indexOf('Trident/');

      return msie > 0 || trident > 0;
    }

    if (!isIE()) return;
    const cartSubmitInput = document.createElement('input');
    cartSubmitInput.setAttribute('name', 'checkout');
    cartSubmitInput.setAttribute('type', 'hidden');
    document.querySelector('#cart').appendChild(cartSubmitInput);
    document.querySelector('#checkout').addEventListener('click', function (event) {
      document.querySelector('#cart').submit();
    });
  });
</script>
<!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--19612164620584__announcement-bar" class="shopify-section shopify-section-group-header-group announcement-bar-section"><link href="//horlogio.com/cdn/shop/t/3/assets/component-slideshow.css?v=83743227411799112781687820339" rel="stylesheet" type="text/css" media="all" />
<link href="//horlogio.com/cdn/shop/t/3/assets/component-slider.css?v=142503135496229589681687820339" rel="stylesheet" type="text/css" media="all" />

<div class="utility-bar color-inverse gradient">

     


<slideshow-component
      class="announcement-bar page-width"
      role="region"
      aria-roledescription="Carrousel"
      aria-label="Barre d’annonces"
    >
      <div class="announcement-bar-slider slider-buttons">
        <button
          type="button"
          class="slider-button slider-button--prev"
          name="previous"
          aria-label="Annonce précédente"
          aria-controls="Slider-sections--19612164620584__announcement-bar"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
           
</svg>

        </button>
        <div
          class="grid grid--1-col slider slider--everywhere"
          id="Slider-sections--19612164620584__announcement-bar"
          aria-live="polite"
          aria-atomic="true"
          data-autoplay="true"
          data-speed="5"
        ><div
              class="slideshow__slide slider__slide grid__item grid--1-col"
              id="Slide-sections--19612164620584__announcement-bar-1"
              
              role="group"
              aria-roledescription="Annonce"
              aria-label="1 de 3"
              tabindex="-1"
            >
              <div class="announcement-bar__announcement" role="region" aria-label="Annonce" ><p class="announcement-bar__message h5">
                        <span>Chers Clients Bienvenue Chez HORLOGIO</span></p></div>
            </div><div
              class="slideshow__slide slider__slide grid__item grid--1-col"
              id="Slide-sections--19612164620584__announcement-bar-2"
              
              role="group"
              aria-roledescription="Annonce"
              aria-label="2 de 3"
              tabindex="-1"
            >
              <div class="announcement-bar__announcement" role="region" aria-label="Annonce" ><p class="announcement-bar__message h5">
                        <span>Bénéficiez d&#39;une réduction de 15% sur votre 2 ème commande</span></p></div>
            </div><div
              class="slideshow__slide slider__slide grid__item grid--1-col"
              id="Slide-sections--19612164620584__announcement-bar-3"
              
              role="group"
              aria-roledescription="Annonce"
              aria-label="3 de 3"
              tabindex="-1"
            >
              <div class="announcement-bar__announcement" role="region" aria-label="Annonce" ><p class="announcement-bar__message h5">
                        <span>Livraison gratuite partout au Maroc</span></p></div>
            </div></div>
        <button
          type="button"
          class="slider-button slider-button--next"
          name="next"
          aria-label="Annonce suivante"
          aria-controls="Slider-sections--19612164620584__announcement-bar"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
    </svg>

        </button>
        
        
      </div>

           
      
    </slideshow-component>

   
    
</div>


</div><div id="shopify-section-sections--19612164620584__header" class="shopify-section shopify-section-group-header-group section-header"><link rel="stylesheet" href="//horlogio.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991687820338" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//horlogio.com/cdn/shop/t/3/assets/component-search.css?v=130382253973794904871687820339" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//horlogio.com/cdn/shop/t/3/assets/component-menu-drawer.css?v=160161990486659892291687820339" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//horlogio.com/cdn/shop/t/3/assets/component-cart-notification.css?v=54116361853792938221687820338" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//horlogio.com/cdn/shop/t/3/assets/component-cart-items.css?v=4628327769354762111687820338" media="print" onload="this.media='all'"><link href="//horlogio.com/cdn/shop/t/3/assets/component-cart-drawer.css?v=2414868725160861721687820338" rel="stylesheet" type="text/css" media="all" />
  <link href="//horlogio.com/cdn/shop/t/3/assets/component-cart.css?v=153960305647764813511687820338" rel="stylesheet" type="text/css" media="all" />
  <link href="//horlogio.com/cdn/shop/t/3/assets/component-totals.css?v=86168756436424464851687820339" rel="stylesheet" type="text/css" media="all" />
  <link href="//horlogio.com/cdn/shop/t/3/assets/component-price.css?v=65402837579211014041687820339" rel="stylesheet" type="text/css" media="all" />
  <link href="//horlogio.com/cdn/shop/t/3/assets/component-discounts.css?v=152760482443307489271687820338" rel="stylesheet" type="text/css" media="all" />
  <link href="//horlogio.com/cdn/shop/t/3/assets/component-loading-overlay.css?v=43236910203777044501687820338" rel="stylesheet" type="text/css" media="all" />
<noscript><link href="//horlogio.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991687820338" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//horlogio.com/cdn/shop/t/3/assets/component-search.css?v=130382253973794904871687820339" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//horlogio.com/cdn/shop/t/3/assets/component-menu-drawer.css?v=160161990486659892291687820339" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//horlogio.com/cdn/shop/t/3/assets/component-cart-notification.css?v=54116361853792938221687820338" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//horlogio.com/cdn/shop/t/3/assets/component-cart-items.css?v=4628327769354762111687820338" rel="stylesheet" type="text/css" media="all" /></noscript>

<style>
  header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
  }.menu-drawer-container {
    display: flex;
  }

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }

  summary.list-menu__item {
    padding-right: 2.7rem;
  }

  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
</style><style data-shopify>.header {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 0px;
    }
  }

  @media screen and (min-width: 990px) {
    .header {
      padding-top: 20px;
      padding-bottom: 20px;
    }
  }</style><script src="//horlogio.com/cdn/shop/t/3/assets/details-disclosure.js?v=13653116266235556501687820339" defer="defer"></script>
<script src="//horlogio.com/cdn/shop/t/3/assets/details-modal.js?v=25581673532751508451687820339" defer="defer"></script>
<script src="//horlogio.com/cdn/shop/t/3/assets/cart-notification.js?v=133508293167896966491687820338" defer="defer"></script>
<script src="//horlogio.com/cdn/shop/t/3/assets/search-form.js?v=133129549252120666541687820339" defer="defer"></script><script src="//horlogio.com/cdn/shop/t/3/assets/cart-drawer.js?v=105077087914686398511687820338" defer="defer"></script><svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"/>
  </symbol>

  <symbol id="icon-reset" class="icon icon-close"  fill="none" viewBox="0 0 18 18" stroke="currentColor">
    <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2"/>
    <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
    <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
  </symbol>

  <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
  </symbol>
</svg><sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-accent-1 gradient header-wrapper--border-bottom"><header class="header header--top-center header--mobile-center page-width drawer-menu header--has-menu">

<header-drawer data-breakpoint="desktop">
  <details id="Details-menu-drawer-container" class="menu-drawer-container">
    <summary
      class="header__icon header__icon--menu header__icon--summary link focus-inset"
      aria-label="Menu"
    >
      <span>
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-hamburger"
  fill="none"
  viewBox="0 0 18 16"
>
  <path d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z" fill="currentColor">
</svg>

        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

      </span>
    </summary>
    <div id="menu-drawer" class="gradient menu-drawer motion-reduce">
      <div class="menu-drawer__inner-container">
        <div class="menu-drawer__navigation-container">
          <nav class="menu-drawer__navigation">
            <ul class="menu-drawer__menu has-submenu list-menu" role="list"><li><a
                      id="HeaderDrawer-home"
                      href="/"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset menu-drawer__menu-item--active"
                      
                        aria-current="page"
                      
                    >
                      Home
                    </a></li><li><details id="Details-menu-drawer-menu-item-2">
                      <summary
                        id="HeaderDrawer-catalogue"
                        class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      >
                        Catalogue
                        <svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>

                        <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

                      </summary>
                      <div
                        id="link-catalogue"
                        class="menu-drawer__submenu has-submenu gradient motion-reduce"
                        tabindex="-1"
                      >
                        <div class="menu-drawer__inner-submenu">
                          <button class="menu-drawer__close-button link link--text focus-inset" aria-expanded="true">
                            <svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>

                            Catalogue
                          </button>
                          <ul class="menu-drawer__menu list-menu" role="list" tabindex="-1"><li><a
                                    id="HeaderDrawer-catalogue-nouvel-arrivage"
                                    href="/collections/nouvel-arrivage"
                                    class="menu-drawer__menu-item link link--text list-menu__item focus-inset"
                                    
                                  >
                                    Nouvel Arrivage
                                  </a></li><li><a
                                    id="HeaderDrawer-catalogue-montre-pour-homme"
                                    href="/collections/homme"
                                    class="menu-drawer__menu-item link link--text list-menu__item focus-inset"
                                    
                                  >
                                    Montre Pour Homme
                                  </a></li><li><a
                                    id="HeaderDrawer-catalogue-montre-pour-femme"
                                    href="/collections/femme"
                                    class="menu-drawer__menu-item link link--text list-menu__item focus-inset"
                                    
                                  >
                                    Montre Pour Femme
                                  </a></li><li><a
                                    id="HeaderDrawer-catalogue-rolex"
                                    href="/collections/rolex"
                                    class="menu-drawer__menu-item link link--text list-menu__item focus-inset"
                                    
                                  >
                                    Rolex
                                  </a></li><li><a
                                    id="HeaderDrawer-catalogue-cartier"
                                    href="/collections/cartier"
                                    class="menu-drawer__menu-item link link--text list-menu__item focus-inset"
                                    
                                  >
                                    Cartier
                                  </a></li><li><a
                                    id="HeaderDrawer-catalogue-patek-philippe"
                                    href="/collections/patek-philippe"
                                    class="menu-drawer__menu-item link link--text list-menu__item focus-inset"
                                    
                                  >
                                    Patek Philippe
                                  </a></li><li><a
                                    id="HeaderDrawer-catalogue-tissot"
                                    href="/collections/tissot"
                                    class="menu-drawer__menu-item link link--text list-menu__item focus-inset"
                                    
                                  >
                                    Tissot
                                  </a></li><li><a
                                    id="HeaderDrawer-catalogue-hugo-boss"
                                    href="/collections/hugo-boss"
                                    class="menu-drawer__menu-item link link--text list-menu__item focus-inset"
                                    
                                  >
                                    Hugo Boss
                                  </a></li><li><a
                                    id="HeaderDrawer-catalogue-guess"
                                    href="/collections/guess"
                                    class="menu-drawer__menu-item link link--text list-menu__item focus-inset"
                                    
                                  >
                                    Guess
                                  </a></li><li><a
                                    id="HeaderDrawer-catalogue-emporio-armani"
                                    href="/collections/emporio-armani"
                                    class="menu-drawer__menu-item link link--text list-menu__item focus-inset"
                                    
                                  >
                                    Emporio Armani
                                  </a></li></ul>
                        </div>
                      </div>
                    </details></li><li><a
                      id="HeaderDrawer-contacter-nous"
                      href="/pages/contact"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Contacter Nous
                    </a></li></ul>
          </nav>
          <div class="menu-drawer__utility-links"><ul class="list list-social list-unstyled" role="list"></ul>
          </div>
        </div>
      </div>
    </div>
  </details>
</header-drawer>


<details-modal class="header__search">
  <details>
    <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle" aria-haspopup="dialog" aria-label="Recherche">
      <span>
        <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
          <use href="#icon-search">
        </svg>
        <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
          <use href="#icon-close">
        </svg>
      </span>
    </summary>
    <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Recherche">
      <div class="modal-overlay"></div>
      <div class="search-modal__content search-modal__content-bottom" tabindex="-1"><search-form class="search-modal__form"><form action="/search" method="get" role="search" class="search search-modal__form">
              <div class="field">
                <input class="search__input field__input"
                  id="Search-In-Modal-1"
                  type="search"
                  name="q"
                  value=""
                  placeholder="Recherche">
                <label class="field__label" for="Search-In-Modal-1">Recherche</label>
                <input type="hidden" name="options[prefix]" value="last">
                <button type="reset" class="reset__button field__button hidden" aria-label="Effacer le terme de recherche">
                  <svg class="icon icon-close" aria-hidden="true" focusable="false">
                    <use xlink:href="#icon-reset">
                  </svg>
                </button>
                <button class="search__button field__button" aria-label="Recherche">
                  <svg class="icon icon-search" aria-hidden="true" focusable="false">
                    <use href="#icon-search">
                  </svg>
                </button>
              </div></form></search-form><button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Fermer">
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
    </div>
  </details>
</details-modal>
<h1 class="header__heading"><a href="/" class="header__heading-link link link--text focus-inset"><div class="header__heading-logo-wrapper">
                
                <img src="//horlogio.com/cdn/shop/files/horlogiologo.png?v=1667978813&amp;width=600" alt="horlogio MA" srcset="//horlogio.com/cdn/shop/files/horlogiologo.png?v=1667978813&amp;width=250 250w, //horlogio.com/cdn/shop/files/horlogiologo.png?v=1667978813&amp;width=375 375w, //horlogio.com/cdn/shop/files/horlogiologo.png?v=1667978813&amp;width=500 500w" width="250" height="56.710775047258984" loading="eager" class="header__heading-logo motion-reduce" sizes="(max-width: 500px) 50vw, 250px">
              </div></a></h1>
<div class="header__icons">
      <div class="desktop-localization-wrapper">
</div>
      

<details-modal class="header__search">
  <details>
    <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle" aria-haspopup="dialog" aria-label="Recherche">
      <span>
        <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
          <use href="#icon-search">
        </svg>
        <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
          <use href="#icon-close">
        </svg>
      </span>
    </summary>
    <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Recherche">
      <div class="modal-overlay"></div>
      <div class="search-modal__content search-modal__content-bottom" tabindex="-1"><search-form class="search-modal__form"><form action="/search" method="get" role="search" class="search search-modal__form">
              <div class="field">
                <input class="search__input field__input"
                  id="Search-In-Modal"
                  type="search"
                  name="q"
                  value=""
                  placeholder="Recherche">
                <label class="field__label" for="Search-In-Modal">Recherche</label>
                <input type="hidden" name="options[prefix]" value="last">
                <button type="reset" class="reset__button field__button hidden" aria-label="Effacer le terme de recherche">
                  <svg class="icon icon-close" aria-hidden="true" focusable="false">
                    <use xlink:href="#icon-reset">
                  </svg>
                </button>
                <button class="search__button field__button" aria-label="Recherche">
                  <svg class="icon icon-search" aria-hidden="true" focusable="false">
                    <use href="#icon-search">
                  </svg>
                </button>
              </div></form></search-form><button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Fermer">
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
    </div>
  </details>
</details-modal>
@if (Route::has('login'))
<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
    @auth
        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
    @else
        <a href="{{ route('login') }}" style="color: white !important;margin-right:10px" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" style="color: white !important;margin-right: 5px;" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
    @endauth
</div>
@endif
<a href="/cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble"><svg
  class="icon icon-cart-empty"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 40 40"
  fill="none"
>
  <path d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" fill="currentColor" fill-rule="evenodd"/>
</svg>
<span class="visually-hidden">Panier</span></a>
    </div>
  </header>
</sticky-header>

<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "horlogio MA",
    
      "logo": "https:\/\/horlogio.com\/cdn\/shop\/files\/horlogiologo.png?v=1667978813\u0026width=500",
    
    "sameAs": [
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/horlogio.com"
  }
</script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "horlogio MA",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https:\/\/horlogio.com\/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "url": "https:\/\/horlogio.com"
    }
  </script>
</div>
<!-- END sections: header-group -->

    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
      <section id="shopify-section-template--19612164129064__image_banner" class="shopify-section section"><link href="//horlogio.com/cdn/shop/t/3/assets/section-image-banner.css?v=81971971763012089891687820339" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>#Banner-template--19612164129064__image_banner::after {
    opacity: 0.4;
  }</style>


</section><section id="shopify-section-template--19612164129064__rich_text" class="shopify-section section"><link href="//horlogio.com/cdn/shop/t/3/assets/section-rich-text.css?v=155250126305810049721687820340" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--19612164129064__rich_text-padding {
    padding-top: 30px;
    padding-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-template--19612164129064__rich_text-padding {
      padding-top: 40px;
      padding-bottom: 0px;
    }
  }</style>


</section><section id="shopify-section-template--19612164129064__b24bba64-039f-49da-8f1d-cd70faafe028" class="shopify-section section section-collection-list"><link href="//horlogio.com/cdn/shop/t/3/assets/section-collection-list.css?v=70863279319435850561687820339" rel="stylesheet" type="text/css" media="all" />
<link href="//horlogio.com/cdn/shop/t/3/assets/component-card.css?v=153897544549437130131687820338" rel="stylesheet" type="text/css" media="all" />
<link href="//horlogio.com/cdn/shop/t/3/assets/component-slider.css?v=142503135496229589681687820339" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--19612164129064__b24bba64-039f-49da-8f1d-cd70faafe028-padding {
    padding-top: 27px;
    padding-bottom: 27px;
  }

  @media screen and (min-width: 750px) {
    .section-template--19612164129064__b24bba64-039f-49da-8f1d-cd70faafe028-padding {
      padding-top: 36px;
      padding-bottom: 36px;
    }
  }</style>


</section><section id="shopify-section-template--19612164129064__9a364c24-631f-4201-b8f6-292d11fb8d50" class="shopify-section section"><link href="//horlogio.com/cdn/shop/t/3/assets/section-rich-text.css?v=155250126305810049721687820340" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--19612164129064__9a364c24-631f-4201-b8f6-292d11fb8d50-padding {
    padding-top: 30px;
    padding-bottom: 39px;
  }

  @media screen and (min-width: 750px) {
    .section-template--19612164129064__9a364c24-631f-4201-b8f6-292d11fb8d50-padding {
      padding-top: 40px;
      padding-bottom: 52px;
    }
  }</style>
{{-- <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">

            <div class="wrap mt-5">
                
                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Log in</h3>
                        </div>
                        
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="signin-form">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" autofocus required="">
                            <label class="form-control-placeholder " for="username">Email</label>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" required="">
                            <label class="form-control-placeholder" for="password">Password</label>
                            <span toggle="#password-field" class="fa-solid fa-eye field-icon toggle-password"></span>
                            
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                        </div>
                        <div class="form-group d-md-flex">
                           
                        </div>
                    </form>
                    <p class="text-center"> <a data-toggle="tab" href="{{url('register')}}">Sign Up</a></p>
                </div>
            </div>
           
            
            
        </div>
    </div>
</div> --}}

@yield('content')


</section><section id="shopify-section-template--19612164129064__multicolumn" class="shopify-section section"><link href="//horlogio.com/cdn/shop/t/3/assets/section-multicolumn.css?v=120651070842298201681687820340" rel="stylesheet" type="text/css" media="all" />
<link href="//horlogio.com/cdn/shop/t/3/assets/component-slider.css?v=142503135496229589681687820339" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--19612164129064__multicolumn-padding {
    padding-top: 27px;
    padding-bottom: 27px;
  }

  @media screen and (min-width: 750px) {
    .section-template--19612164129064__multicolumn-padding {
      padding-top: 36px;
      padding-bottom: 36px;
    }
  }</style><div class="multicolumn color-background-1 gradient background-none no-heading">
  
</div>


</section><div id="shopify-section-template--19612164129064__1e2bf73d-1eb3-4f7d-a8e8-585cc47e1c7e" class="shopify-section section"><link href="//horlogio.com/cdn/shop/t/3/assets/component-image-with-text.css?v=113100769818070755561687820338" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--19612164129064__1e2bf73d-1eb3-4f7d-a8e8-585cc47e1c7e-padding {
    padding-top: 27px;
    padding-bottom: 27px;
  }

  @media screen and (min-width: 750px) {
    .section-template--19612164129064__1e2bf73d-1eb3-4f7d-a8e8-585cc47e1c7e-padding {
      padding-top: 36px;
      padding-bottom: 36px;
    }
  }</style>




</div>
    </main>

    <!-- BEGIN sections: footer-group -->
<div id="shopify-section-sections--19612164587816__footer" class="shopify-section shopify-section-group-footer-group">
<link href="//horlogio.com/cdn/shop/t/3/assets/section-footer.css?v=125160298726032154631687820339" rel="stylesheet" type="text/css" media="all" />
<link href="//horlogio.com/cdn/shop/t/3/assets/component-newsletter.css?v=4727253280200485261687820339" rel="stylesheet" type="text/css" media="all" />
<link href="//horlogio.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991687820338" rel="stylesheet" type="text/css" media="all" />
<link href="//horlogio.com/cdn/shop/t/3/assets/component-list-payment.css?v=69253961410771838501687820338" rel="stylesheet" type="text/css" media="all" />
<link href="//horlogio.com/cdn/shop/t/3/assets/component-list-social.css?v=52211663153726659061687820338" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.footer {
    margin-top: 36px;
  }

  .section-sections--19612164587816__footer-padding {
    padding-top: 27px;
    padding-bottom: 27px;
  }

  @media screen and (min-width: 750px) {
    .footer {
      margin-top: 48px;
    }

    .section-sections--19612164587816__footer-padding {
      padding-top: 36px;
      padding-bottom: 36px;
    }
  }</style>
  
</div>
<!-- END sections: footer-group -->

    <ul hidden>
      <li id="a11y-refresh-page-message">Le choix d&#39;une sélection entraîne l&#39;actualisation de la page entière.</li>
      <li id="a11y-new-window-message">S&#39;ouvre dans une nouvelle fenêtre.</li>
    </ul>

    <script>
      window.shopUrl = 'https://horlogio.com';
      window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_update_url: '/cart/update',
        cart_url: '/cart',
        predictive_search_url: '/search/suggest',
      };

      window.cartStrings = {
        error: `Une erreur est survenue lors de l’actualisation de votre panier. Veuillez réessayer.`,
        quantityError: `Vous ne pouvez pas ajouter plus de [quantity] de ce produit à votre panier.`,
      };

      window.variantStrings = {
        addToCart: `Ajouter au panier`,
        soldOut: `Épuisé`,
        unavailable: `Non disponible`,
        unavailable_with_option: `[value] – indisponible`,
      };

      window.accessibilityStrings = {
        imageAvailable: `L&#39;image [index] est maintenant disponible dans la galerie`,
        shareSuccess: `Lien copié dans le presse-papiers`,
        pauseSlideshow: `Interrompre le diaporama`,
        playSlideshow: `Lire le diaporama`,
      };
    </script><div id="shopify-block-1143683040400472741" class="shopify-block shopify-app-block">

  <script id='tt_product_rating' type='application/json'>
    
  </script><script src="https://cdn.shopify.com/extensions/0c8ba417-a85a-40ef-8020-9cf1fd2a9cf0/trustoo-io-product-reviews-59/assets/seal-review.min.js" defer></script><script id="vstar_product_review">
var shopifyObj = {
	shop_id : 67689939240,
	productName : null,
	productId : null,
	productImage : null,
	themeName : null,
};
var trustoo_shopify_block_status = 2
var trustoo_ins_inserted_status = 2
var tt_page_type = 'index'
</script>

<script>
     
</script>





<link href="//cdn.shopify.com/extensions/0c8ba417-a85a-40ef-8020-9cf1fd2a9cf0/trustoo-io-product-reviews-59/assets/star-rating.css" rel="stylesheet" type="text/css" media="all" />
<script id="seal_shop_id" type="application/json">
    67689939240
</script>



<div id="seal-review-collection"></div>
</div><div id="shopify-block-1762459649" class="shopify-block shopify-app-block"><div></div>
<script type="text/javascript">	
    window.SOHEAD_PRODUCT_VARIANTS = null
    window.SOHEAD_PRODUCT_COLLECTIONS = null
</script>
<input type="hidden" id="social-ads-product-price" value="">
<input type="hidden" id="social-ads-product-id" value="">
<input type="hidden" id="social-ads-product-content-name" value="">

<input type="hidden" id="social-ads-product-content-collection-ids" value="">
<input type="hidden" id="social-ads-product-content-tags" value="">


</div></body>
</html>
