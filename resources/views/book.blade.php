<!-- The top of file index.html -->
<html itemscope itemtype="http://schema.org/Article">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- file css -->
        <link rel="stylesheet" href="{{ asset('/css/AllMain.css')}}">
        <title>Document</title>
    </head>

<body>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($datafilm as $db)
        <div class="col-4">
            <div class="card">
                <img src="{{$db['multimedia']['resource']['src']}}" class="card-img-top" alt="{{$db['multimedia']['resource']['src']}}">
                <div class="card-body">
                    <h5 class="card-title">{{$db['sort_name']}}</h5>
                <p class="card-text">{{$db['multimedia']['resource']['type']}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>
