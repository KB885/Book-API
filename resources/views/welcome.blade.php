<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - Book database API</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-full max-w-4xl mx-auto py-10 bg-gray-200">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Book Database API</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Information about a lot of differnet books</p>
        </div>
        <div class="border-t border-gray-200">
            <div class="px-4 py-5 sm:px-6 ">
                <p class="text-slate-700 text-sm">Book Database API is a free and open-source API that was created by <a
                        href="https://github.com/kb885" class="text-red-600">KB885</a> In order to use it for readx.club
                    website, to collect and organise a lot of differnet books across many different authors and genres.
                </p>
            </div>
        </div>
    </div>
    <div class=py-10>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($requests as $item)
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $item->name }}</h3>
                </div>
                <div class="border-t border-gray-200">
                    <div class="px-4 py-5 sm:px-6 ">
                        <p class="text-slate-700 text-sm">{{ $item->description }}</p>
                        <div class="py-4 flex space-x-4 ">
                            <button
                                class="bg-green-600 text-sm px-4 py-1 rounded text-gray-200">{{ $item->request_type }}</button>
                            <p class="text-slate-200 text-sm py-1 bg-gray-800 rounded px-4">{{ $item->request }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
<footer>
    <div class="flex">
        <p class="mx-auto text-xs">Made with ❤️ by KB885 - 2022</p>
    </div>
</footer>

</html>
