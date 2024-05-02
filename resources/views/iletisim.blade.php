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

    <form action="{{ route('gonder') }}" method="post">
        @csrf
        <div class="w-100 m-auto p-5">
            <div class="bg-info m-auto w-50 p-3 m-3 d-flex flex-column rounded">
                <h1 class="w-100 bg-ligth rounded text-center mb-3">İLETİŞİM FORMU</h1>
                <div class="d-flex w-100 m-2 rounded">
                    <label class="w-25 m-2"> Name : </label>
                    <input class="w-75 m-2" type="text" name="name"></br>
                </div>
                <div class="d-flex w-100 m-2 rounded">
                    <label class="w-25 m-2"> Surname : </label>
                    <input class="w-75 m-2" type="text" name="surname"></br>
                </div>
                <div class="d-flex w-100 m-2 rounded">
                    <label class="w-25 m-2"> Mail : </label>
                    <input class="w-75 m-2" type="text" name="mail"></br>
                </div>
                <div class="d-flex w-100 m-2 rounded">
                    <label class="w-25 m-2"> Phone : </label>
                    <input class="w-75 m-2" type="text w-100" name="phone"></br>
                </div>
                <div class="d-flex w-100 m-2 rounded">
                    <label class="w-25 m-2"> Message : </label>
                    <textarea class="w-75 m-2"  name="message"></textarea></br>
                </div>
                <div class="w-100 d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark ms-5 w-25">Gönder</button>
                </div>
            
            </div>
        </div>
    </form>   
</body>
</html>