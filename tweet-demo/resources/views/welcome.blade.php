<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="bg-blue-900 pt-20">
        <div class="max-w-5xl mx-auto">

            <!--form to create tweet-->
            <div>
                <form action="/tweets" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="tweet" value="{{$tweet-.body}}" class="mb-4 w-full p-2 border-2
                    border-blue-500 text-black" placeholder="what's happening?">

                    <button type="submit">
    
                </form>
            </div>

            <!-- list of all our tweet-->
            <div>
                @foreach ($tweet as $tweet)
                    <div class="border-b-2 border-blue-500 p-2">
                        <div>
                            <form>
                                <input type="text" value="{{ $tweet->body}}">
                                <button type="sub,it">Edit</button>
                            </form>    
                        </div>
                    </div>
                @endforeach
            </div>


        </div>

    </body>
</html>
