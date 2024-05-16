
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
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/create/content">Create new content</a>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/">show all content</a>
        </header>


        <h1 class="bg-pink-500 rounded-xl w-8/12 p-2  font-bold">manage Pannel</h1>

        <div class="container">
            @foreach ($allContent as $content)
            <div class="border m-2 w-6/12 rounded-xl pt-2 pb-8">
                <h1 class="m-2 font-bold text-lg">{{$content->title}}</h1>
                <p class="m-4">{{$content->message}}</p>
                    <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="/edit/content/{{$content->id}}"><button>edit</button></a>
                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="/delete/content/{{$content->id}}">delete</a>
                </div>
            @endforeach
        </div>

    </center>


</body>
</html>
