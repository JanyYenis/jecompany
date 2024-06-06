{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
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
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<!DOCTYPE html>
<html lang="es" data-bs-theme="light">

<head>
    <title>Mix Proyect</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"> <!--end::Fonts-->

    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>

    <link href="{{ asset('assets/plugins/custom/jkanban/jkanban.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/plugins/custom/jkanban/jkanban.bundle.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/datatable-whatsking.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/cel.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('css/multi-select/multi-select.css') }}">
    <style id="apexcharts-css">
        @keyframes opaque {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes resizeanim {

            0%,
            to {
                opacity: 0
            }
        }

        .apexcharts-canvas {
            position: relative;
            user-select: none
        }

        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5)
        }

        .apexcharts-inner {
            position: relative
        }

        .apexcharts-text tspan {
            font-family: inherit
        }

        .legend-mouseover-inactive {
            transition: .15s ease all;
            opacity: .2
        }

        .apexcharts-legend-text {
            padding-left: 15px;
            margin-left: -15px;
        }

        .apexcharts-series-collapsed {
            opacity: 0
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, .96)
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, .8)
        }

        .apexcharts-tooltip * {
            font-family: inherit
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #eceff1;
            border-bottom: 1px solid #ddd
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, .7);
            border-bottom: 1px solid #333
        }

        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            margin-left: 5px;
            font-weight: 600
        }

        .apexcharts-tooltip-text-goals-label:empty,
        .apexcharts-tooltip-text-goals-value:empty,
        .apexcharts-tooltip-text-y-label:empty,
        .apexcharts-tooltip-text-y-value:empty,
        .apexcharts-tooltip-text-z-value:empty,
        .apexcharts-tooltip-title:empty {
            display: none
        }

        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px
        }

        .apexcharts-tooltip-goals-group,
        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            display: flex
        }

        .apexcharts-tooltip-text-goals-label:not(:empty),
        .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0;
            margin-right: 10px;
            border-radius: 50%
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px
        }

        .apexcharts-custom-tooltip,
        .apexcharts-tooltip-box {
            padding: 4px 8px
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse
        }

        .apexcharts-tooltip-box>div {
            margin: 4px 0
        }

        .apexcharts-tooltip-box span.value {
            font-weight: 700
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: 700;
            display: block;
            margin-bottom: 5px
        }

        .apexcharts-xaxistooltip,
        .apexcharts-yaxistooltip {
            opacity: 0;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae
        }

        .apexcharts-xaxistooltip {
            padding: 9px 10px;
            transition: .15s ease all
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-xaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-left: -6px
        }

        .apexcharts-xaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-left: -7px
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #eceff1
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90a4ae
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #eceff1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90a4ae
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-yaxistooltip {
            padding: 4px 10px
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-yaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-top: -6px
        }

        .apexcharts-yaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-top: -7px
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #eceff1
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90a4ae
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #eceff1
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90a4ae
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1
        }

        .apexcharts-yaxistooltip-hidden {
            display: none
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: .15s ease all
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0
        }

        .apexcharts-selection-rect {
            cursor: move
        }

        .svg_select_boundingRect,
        .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_boundingRect,
        .apexcharts-selection-rect+g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_points_l,
        .apexcharts-selection-rect+g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-menu-icon,
        .apexcharts-pan-icon,
        .apexcharts-reset-icon,
        .apexcharts-selection-icon,
        .apexcharts-toolbar-custom-icon,
        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6e8192;
            text-align: center
        }

        .apexcharts-menu-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg {
            fill: #6e8192
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(.76)
        }

        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
            fill: #f3f4f5
        }

        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
            fill: #008ffb
        }

        .apexcharts-theme-light .apexcharts-menu-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
            fill: #333
        }

        .apexcharts-menu-icon,
        .apexcharts-selection-icon {
            position: relative
        }

        .apexcharts-reset-icon {
            margin-left: 5px
        }

        .apexcharts-menu-icon,
        .apexcharts-reset-icon,
        .apexcharts-zoom-icon {
            transform: scale(.85)
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px
        }

        .apexcharts-pan-icon {
            transform: scale(.62);
            position: relative;
            left: 1px;
            top: 0
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6e8192;
            stroke-width: 2
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008ffb
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0 6px 2px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: .15s ease all;
            pointer-events: none
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: .15s ease all
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, .7);
            color: #fff
        }

        @media screen and (min-width:768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1
            }
        }

        .apexcharts-canvas .apexcharts-element-hidden,
        .apexcharts-datalabel.apexcharts-element-hidden,
        .apexcharts-hide .apexcharts-series-points {
            opacity: 0
        }

        .apexcharts-hidden-element-shown {
            opacity: 1;
            transition: 0.25s ease all;
        }

        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value,
        .apexcharts-datalabels,
        .apexcharts-pie-label {
            cursor: default;
            pointer-events: none
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: .3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease
        }

        .apexcharts-annotation-rect,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-gridline,
        .apexcharts-line,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-point-annotation-label,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon,
        .apexcharts-toolbar svg,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-xaxis-annotation-label,
        .apexcharts-yaxis-annotation-label,
        .apexcharts-zoom-rect {
            pointer-events: none
        }

        .apexcharts-marker {
            transition: .15s ease all
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
            height: 100%;
            width: 100%;
            overflow: hidden
        }

        .contract-trigger:before,
        .resize-triggers,
        .resize-triggers>div {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0
        }

        .resize-triggers>div {
            height: 100%;
            width: 100%;
            background: #eee;
            overflow: auto
        }

        .contract-trigger:before {
            overflow: hidden;
            width: 200%;
            height: 200%
        }

        .apexcharts-bar-goals-markers {
            pointer-events: none
        }

        .apexcharts-bar-shadows {
            pointer-events: none
        }

        .apexcharts-rangebar-goals-markers {
            pointer-events: none
        }
    </style>
</head>

<body>
    <div class="mt-5">
        <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content  flex-column-fluid ">


                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container  container-xxl ">


                        <!--begin::Hero card-->
                        <div class="card mb-12">
                            <!--begin::Hero body-->
                            <div class="card-body flex-column p-5">
                                <!--begin::Hero content-->
                                <div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
                                    <!--begin::Wrapper-->
                                    <div
                                        class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10">¿Cómo podemos ayudarte?</h1>
                                        <!--end::Title-->

                                        <!--begin::Input group-->
                                        <div class="position-relative w-100">
                                            <i class="fa fa-search fs-2 text-primary position-absolute top-50 translate-middle ms-8">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-500 mw-500px"
                                                name="search" value="" placeholder="Buscar...">
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Wrapper-->
                                    <div class="flex-equal d-flex justify-content-center align-items-end ms-5">
                                        <!--begin::Illustration-->
                                        <img src="{{asset('assets/media/illustrations/support-2.png')}}"
                                            alt="" class="mw-100 mh-125px mh-lg-275px mb-lg-n12">
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Hero content-->

                                <!--begin::Hero nav-->
                                <div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
                                    <!--begin::Nav-->
                                    <ul class="nav flex-wrap border-transparent fw-bold">
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active"
                                                href="/blaze-html-pro/apps/support-center/overview.html">
                                                Overview </a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                                href="/blaze-html-pro/apps/support-center/tickets/list.html">
                                                Tickets </a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                                href="/blaze-html-pro/apps/support-center/tutorials/list.html">
                                                Tutorials </a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                                href="/blaze-html-pro/apps/support-center/faq.html">
                                                Preguntas Frecuentes
                                            </a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                                href="/blaze-html-pro/apps/support-center/contact.html">
                                                Contactanos</a>
                                        </li>
                                        <!--end::Nav item-->
                                        @auth
                                            <!--begin::Nav item-->
                                            <li class="nav-item my-1">
                                                <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                                    href="{{ url('/home') }}">
                                                    Home</a>
                                            </li>
                                            <!--end::Nav item-->
                                        @else
                                            <!--begin::Nav item-->
                                            <li class="nav-item my-1">
                                                <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                                    href="{{ route('login') }}">
                                                    Login</a>
                                            </li>
                                            <!--end::Nav item-->
                                            <!--begin::Nav item-->
                                            <li class="nav-item my-1">
                                                <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                                                    href="{{ route('register') }}">
                                                    Registrarme</a>
                                            </li>
                                        @endauth
                                    </ul>
                                    <!--end::Nav-->

                                    <!--begin::Action-->
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket"
                                        class="btn btn-primary fw-bold fs-8 fs-lg-base">Crear Ticket</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Hero nav-->
                            </div>
                            <!--end::Hero body-->
                        </div>
                        <!--end::Hero card-->

                        <!--begin::Row-->
                        <div class="row gy-0 mb-6 mb-xl-12">
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Card-->
                                <div class="card card-md-stretch me-xl-3 mb-md-0 mb-6">
                                    <!--begin::Body-->
                                    <div class="card-body p-10 p-lg-15">
                                        <!--begin::Header-->
                                        <div class="d-flex flex-stack mb-7">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-900">Tickets populares</h1>
                                            <!--end::Title-->

                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Link-->
                                                <a href="https://keenthemes.com/support"
                                                    class="text-primary fw-bold me-1">Support</a>
                                                <!--begin::Link-->

                                                <!--begin::Arrow-->
                                                <i class="ki-duotone ki-arrow-right fs-2 text-primary"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <!--end::Arrow-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Accordion-->

                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle  mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_1_1">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        What admin theme does?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-block">React</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_1_1" class="collapse show fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="fs-5 link-primary fw-semibold">
                                                        Check Out </a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_1_2">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How Extended Licese works?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-block">Laravel</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_1_2" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="fs-5 link-primary fw-semibold">
                                                        Check Out </a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_1_3">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How to install on a local machine?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-block">VueJS</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_1_3" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="fs-5 link-primary fw-semibold">
                                                        Check Out </a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_1_4">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How can I import Google fonts?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-block">Angular 9</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_1_4" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="fs-5 link-primary fw-semibold">
                                                        Check Out </a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_1_5">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How long the license is valid?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-block">Bootstrap 5</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_1_5" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="fs-5 link-primary fw-semibold">
                                                        Check Out </a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_1_6">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How many end projects I can build?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-block">PHP</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_1_6" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="fs-5 link-primary fw-semibold">
                                                        Check Out </a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->

                                        <!--end::Accordion-->




                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Card-->
                                <div class="card card-md-stretch ms-xl-3">
                                    <!--begin::Body-->
                                    <div class="card-body p-10 p-lg-15">
                                        <!--begin::Header-->
                                        <div class="d-flex flex-stack mb-7">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-900">FAQ</h1>
                                            <!--end::Title-->

                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Link-->
                                                <a href="https://keenthemes.com/faqs"
                                                    class="text-primary fw-bold me-1">Full FAQ</a>
                                                <!--begin::Link-->

                                                <!--begin::Arrow-->
                                                <i class="ki-duotone ki-arrow-right fs-2 text-primary"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <!--end::Arrow-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Accordion-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle  mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_2_1">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        What admin theme does?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-none">Bootstrap</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_2_1" class="collapse show fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="d-none"></a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_2_2">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How Extended Licese works?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-none">General</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_2_2" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="d-none"></a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_2_3">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How to install on a local machine?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-none">React</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_2_3" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="d-none"></a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_2_4">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How can I import Google fonts?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-none">Angular</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_2_4" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="d-none"></a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_2_5">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How long the license is valid?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-none">Webpack</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_2_5" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="d-none"></a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_2_6">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How many end projects I can build?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-none">Laravel</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_2_6" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="d-none"></a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->

                                        <!--end::Accordion-->




                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Row-->
                        <div class="row gy-0 mb-6 mb-xl-12">
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Card-->
                                <div class="card card-md-stretch me-xl-3 mb-md-0 mb-6">
                                    <!--begin::Body-->
                                    <div class="card-body p-10 p-lg-15">
                                        <!--begin::Header-->
                                        <div class="d-flex flex-stack mb-7">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-900">Tutorials</h1>
                                            <!--end::Title-->

                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Link-->
                                                <a href="/blaze-html-pro/apps/support-center/tutorials/list.html"
                                                    class="text-primary fw-bold me-1">All Tutorials</a>
                                                <!--begin::Link-->

                                                <!--begin::Arrow-->
                                                <i class="ki-duotone ki-arrow-right fs-2 text-primary"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <!--end::Arrow-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Accordion-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle  mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_3_1">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        What admin theme does?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-none">Bootstrap</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_3_1" class="collapse show fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="fs-5 link-primary fw-semibold">
                                                        Check Out </a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_3_2">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How Extended Licese works?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-none">General</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_3_2" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="fs-5 link-primary fw-semibold">
                                                        Check Out </a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_3_3">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How to install on a local machine?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-none">React</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_3_3" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="fs-5 link-primary fw-semibold">
                                                        Check Out </a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_3_4">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How can I import Google fonts?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-none">VueJS</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_3_4" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="fs-5 link-primary fw-semibold">
                                                        Check Out </a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->


                                        <!--begin::Section-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0"
                                                data-bs-toggle="collapse" data-bs-target="#kt_support_3_5">
                                                <!--begin::Icon-->
                                                <div class="ms-n1 me-5">
                                                    <i class="ki-duotone ki-down toggle-on text-primary fs-2"></i>

                                                    <i class="ki-duotone ki-right toggle-off fs-2"></i>
                                                </div>
                                                <!--end::Icon-->

                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-800 fw-semibold cursor-pointer me-3 mb-0">
                                                        How long the license is valid?
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1 d-none">Angular</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Body-->
                                            <div id="kt_support_3_5" class="collapse  fs-6 ms-10">
                                                <!--begin::Block-->
                                                <div class="mb-4">
                                                    <!--begin::Text-->
                                                    <span class="text-muted fw-semibold fs-5">By Keenthemes to save
                                                        tons
                                                        and more to time money projects are listed and
                                                        outstanding</span>
                                                    <!--end::Text-->

                                                    <!--begin::Link-->
                                                    <a href="#" class="fs-5 link-primary fw-semibold">
                                                        Check Out </a>

                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Block-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->

                                        <!--end::Accordion-->




                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Card-->
                                <div class="card card-md-stretch ms-xl-3">
                                    <!--begin::Body-->
                                    <div class="card-body pp-10 p-lg-15">
                                        <!--begin::Header-->
                                        <div class="d-flex flex-stack mb-7">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-900">Videos</h1>
                                            <!--end::Title-->

                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Link-->
                                                <a href="https://www.youtube.com/c/KeenThemesTuts/videos"
                                                    target="_blank" class="text-primary fw-bold me-1">All Videos</a>
                                                <!--begin::Link-->

                                                <!--begin::Arrow-->
                                                <i class="ki-duotone ki-arrow-right fs-2 text-primary"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <!--end::Arrow-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Video-->
                                        <div class="mb-3">
                                            <iframe class="embed-responsive-item card-rounded h-275px w-100"
                                                src="https://www.youtube.com/embed/TWdDZYNqlg4"
                                                allowfullscreen=""></iframe>
                                        </div>
                                        <!--end::Video-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->


                        <!--begin::Products Documentations-->
                        <div class="card mb-2">
                            <!--begin::Card body-->
                            <div class="card-body p-10 p-lg-15">
                                <!--begin::Title-->
                                <h1 class="fw-bold text-gray-900 mb-12 ps-0">
                                    Products Documentations
                                </h1>
                                <!--end::Title-->

                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-sm-4">

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-right fs-2 ms-n1 me-4"></i>
                                            <!--end::Icon-->

                                            <!--begin::Subtitle-->
                                            <a href="#"
                                                class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">
                                                Free Admin Dashboard </a>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--begin::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-right fs-2 ms-n1 me-4"></i>
                                            <!--end::Icon-->

                                            <!--begin::Subtitle-->
                                            <a href="#"
                                                class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">
                                                Bootstrap 5 Admin Template </a>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--begin::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-right fs-2 ms-n1 me-4"></i>
                                            <!--end::Icon-->

                                            <!--begin::Subtitle-->
                                            <a href="#"
                                                class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">
                                                Google Admin Dashboard </a>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--begin::Item-->

                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-4">

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-right fs-2 ms-n1 me-4"></i>
                                            <!--end::Icon-->

                                            <!--begin::Subtitle-->
                                            <a href="#"
                                                class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">
                                                Free Vector Laravel Starter Kit </a>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--begin::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-right fs-2 ms-n1 me-4"></i>
                                            <!--end::Icon-->

                                            <!--begin::Subtitle-->
                                            <a href="#"
                                                class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">
                                                React Admin Dashboard </a>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--begin::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-right fs-2 ms-n1 me-4"></i>
                                            <!--end::Icon-->

                                            <!--begin::Subtitle-->
                                            <a href="#"
                                                class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">
                                                HTML Admin Dashboard </a>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--begin::Item-->

                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-sm-4">

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-right fs-2 ms-n1 me-4"></i>
                                            <!--end::Icon-->

                                            <!--begin::Subtitle-->
                                            <a href="#"
                                                class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">
                                                Best VueJS Admin Template </a>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--begin::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-right fs-2 ms-n1 me-4"></i>
                                            <!--end::Icon-->

                                            <!--begin::Subtitle-->
                                            <a href="#"
                                                class="fw-semibold text-gray-800 text-hover-primary fs-3 m-0">
                                                Forest Front-end Template </a>
                                            <!--end::Subtitle-->
                                        </div>
                                        <!--begin::Item-->

                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Products Documentations-->


                        <!--begin::Modal - Support Center - Create Ticket-->
                        <div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-750px">
                                <!--begin::Modal content-->
                                <div class="modal-content rounded">
                                    <!--begin::Modal header-->
                                    <div class="modal-header pb-0 border-0 justify-content-end">
                                        <!--begin::Close-->
                                        <div class="btn btn-sm btn-icon btn-active-color-primary"
                                            data-bs-dismiss="modal">
                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--begin::Modal header-->

                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                        <!--begin:Form-->
                                        <form id="kt_modal_new_ticket_form"
                                            class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                            <!--begin::Heading-->
                                            <div class="mb-13 text-center">
                                                <!--begin::Title-->
                                                <h1 class="mb-3">Create Ticket</h1>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-gray-500 fw-semibold fs-5">
                                                    If you need more info, please check <a href=""
                                                        class="fw-bold link-primary">Support Guidelines</a>.
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                    <span class="required">Subject</span>

                                                    <span class="ms-2" data-bs-toggle="tooltip"
                                                        aria-label="Specify a subject for your issue"
                                                        data-bs-original-title="Specify a subject for your issue"
                                                        data-kt-initialized="1">
                                                        <i class="ki-duotone ki-information fs-7"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span></i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->

                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Enter your ticket subject" name="subject">
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="row g-9 mb-8">
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <label class="required fs-6 fw-semibold mb-2">Product</label>

                                                    <select
                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Select a product" name="product"
                                                        data-select2-id="select2-data-9-g85b" tabindex="-1"
                                                        aria-hidden="true" data-kt-initialized="1">
                                                        <option value="" data-select2-id="select2-data-11-w1ul">
                                                            Select a product...</option>
                                                        <option value="1">HTML Theme</option>
                                                        <option value="1">Angular App</option>
                                                        <option value="1">Vue App</option>
                                                        <option value="1">React Theme</option>
                                                        <option value="1">Figma UI Kit</option>
                                                        <option value="3">Laravel App</option>
                                                        <option value="4">Blazor App</option>
                                                        <option value="5">Django App</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-10-ohue"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-product-9x-container"
                                                                aria-controls="select2-product-9x-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-product-9x-container" role="textbox"
                                                                    aria-readonly="true"
                                                                    title="Select a product"><span
                                                                        class="select2-selection__placeholder">Select a
                                                                        product</span></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row fv-plugins-icon-container">
                                                    <label class="required fs-6 fw-semibold mb-2">Assign</label>

                                                    <select
                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Select a Team Member" name="user"
                                                        data-select2-id="select2-data-12-j2p6" tabindex="-1"
                                                        aria-hidden="true" data-kt-initialized="1">
                                                        <option value="" data-select2-id="select2-data-14-4nfx">
                                                            Select a user...</option>
                                                        <option value="1">Karina Clark</option>
                                                        <option value="2">Robert Doe</option>
                                                        <option value="3">Niel Owen</option>
                                                        <option value="4">Olivia Wild</option>
                                                        <option value="5">Sean Bean</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-13-gzjq"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-user-ib-container"
                                                                aria-controls="select2-user-ib-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-user-ib-container" role="textbox"
                                                                    aria-readonly="true"
                                                                    title="Select a Team Member"><span
                                                                        class="select2-selection__placeholder">Select a
                                                                        Team Member</span></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="row g-9 mb-8">
                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row">
                                                    <label class="required fs-6 fw-semibold mb-2">Status</label>

                                                    <select
                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                        data-control="select2" data-placeholder="Open"
                                                        data-hide-search="true" data-select2-id="select2-data-15-rdae"
                                                        tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                        <option value=""></option>
                                                        <option value="1" selected=""
                                                            data-select2-id="select2-data-17-08jn">Open</option>
                                                        <option value="2">Pending</option>
                                                        <option value="3">Resolved</option>
                                                        <option value="3">Closed</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-16-4rju"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-rv99-container"
                                                                aria-controls="select2-rv99-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-rv99-container" role="textbox"
                                                                    aria-readonly="true"
                                                                    title="Open">Open</span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                                <!--end::Col-->

                                                <!--begin::Col-->
                                                <div class="col-md-6 fv-row fv-plugins-icon-container">
                                                    <label class="required fs-6 fw-semibold mb-2">Due Date</label>

                                                    <!--begin::Input-->
                                                    <div class="position-relative d-flex align-items-center">
                                                        <!--begin::Icon-->
                                                        <div class="symbol symbol-20px me-4 position-absolute ms-4">
                                                            <span class="symbol-label bg-secondary">
                                                                <i class="ki-duotone ki-element-11"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span></i> </span>
                                                        </div>
                                                        <!--end::Icon-->

                                                        <!--begin::Datepicker-->
                                                        <input
                                                            class="form-control form-control-solid ps-12 flatpickr-input"
                                                            placeholder="Select a date" name="due_date"
                                                            type="text" readonly="readonly">
                                                        <!--end::Datepicker-->
                                                    </div>
                                                    <!--end::Input-->
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                <label class="fs-6 fw-semibold mb-2">Description</label>

                                                <textarea class="form-control form-control-solid" rows="4" name="description"
                                                    placeholder="Type your ticket description">                        </textarea>
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="fv-row mb-8">
                                                <label class="fs-6 fw-semibold mb-2">Attachments</label>

                                                <!--begin::Dropzone-->
                                                <div class="dropzone dz-clickable"
                                                    id="kt_modal_create_ticket_attachments">
                                                    <!--begin::Message-->
                                                    <div class="dz-message needsclick align-items-center">
                                                        <!--begin::Icon-->
                                                        <i class="ki-duotone ki-file-up fs-3hx text-primary"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        <!--end::Icon-->

                                                        <!--begin::Info-->
                                                        <div class="ms-4">
                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here
                                                                or
                                                                click to upload.</h3>
                                                            <span class="fw-semibold fs-7 text-gray-500">Upload up to
                                                                10
                                                                files</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                </div>
                                                <!--end::Dropzone-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="mb-15 fv-row fv-plugins-icon-container">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold me-5">
                                                        <label class="fs-6">Notifications</label>

                                                        <div class="fs-7 text-gray-500">Allow Notifications by Phone or
                                                            Email</div>
                                                    </div>
                                                    <!--end::Label-->

                                                    <!--begin::Checkboxes-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-20px w-20px"
                                                                type="checkbox" name="notifications[]" value="email"
                                                                checked="checked">

                                                            <span class="form-check-label fw-semibold">
                                                                Email
                                                            </span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input h-20px w-20px"
                                                                type="checkbox" name="notifications[]"
                                                                value="phone">

                                                            <span class="form-check-label fw-semibold">
                                                                Phone
                                                            </span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Checkboxes-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Actions-->
                                            <div class="text-center">
                                                <button type="reset" id="kt_modal_new_ticket_cancel"
                                                    class="btn btn-light me-3">
                                                    Cancel
                                                </button>

                                                <button type="submit" id="kt_modal_new_ticket_submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">
                                                        Submit
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end:Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - Support Center - Create Ticket-->
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->

            </div>
            <!--end::Content wrapper-->


            <!--begin::Footer-->
            @component('layouts.componentes.footer')
            @endcomponent
            <!--end::Footer-->
        </div>
    </div>

    @routes
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

    <script src="{{ asset('js/multi-select/jquery.quicksearch.js') }}"></script>
    <script src="{{ asset('js/multi-select/jquery.multi-select.js') }}"></script>

    <script src="{{ mix('/js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>

    @auth
        <script src="{{ mix('/js/sistema/notificaciones.js') }}"></script>
    @endauth
    <script src="{{ mix('/js/search.js') }}"></script>

    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>

</body>

</html>
