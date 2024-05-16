
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create</title>
</head>
<body>
    <center>
        <header class="m-4">
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="create/content">Create new content</a>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-2" href="manage/content">manage content</a>
        </header>

            <h2 class="font-bold text-lg bg-pink-500 rounded-xl w-8/12 p-2">all content</h2>
            <div class="container">
                @foreach ($allContent as $content)
                    <div class="border m-2 w-6/12 rounded-xl  p-2">
                        <h2 class="font-bold text-blue-500 text-lg">{{$content->title}}</h2>
                        <p>{{$content->message}}</p>
                    </div>
                @endforeach
            </div>

            {{ $allContent->links() }}


        </center>
</body>
</html>
