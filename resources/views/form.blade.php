<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Example</title>
</head>
<body>

    <form action="{{ route('form_result') }}" method="post">
        @csrf
        <textarea name='metin' style="width:300px; height:200px;" class="bg-secondary text-light m-5"></textarea>
        </br>
        <button type="submit" class="btn btn-dark ms-5">Gönder</button>
 


    </form>

    
</body>
</html>