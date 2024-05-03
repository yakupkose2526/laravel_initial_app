<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Upload Example</title>
</head>
<body>

    <form 
        action="{{ route('upload_file') }}" 
        method="post"
         enctype="multipart/form-data" {{--! Dosya Upload yapacağımızda mutlaka bu kısım olacak --}}
        >
        @csrf
        <div class="w-100 m-auto p-5">
            <div class="bg-info m-auto w-50 p-3 m-3 d-flex flex-column rounded">
                <h1 class="w-100 bg-ligth rounded text-center mb-3">UPLOAD FORM</h1>
                <div class="d-flex w-100 m-2 rounded">
                    <label class="w-25 m-2"> Resim Seçiniz : </label>
                    <input class="w-75 m-2" type="file" name="image"></br>
                </div>
                <div class="w-100 d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark ms-5 w-25" value="upload_image">Yükle</button>
                </div>
            
            </div>
        </div>
 


    </form>

    
</body>
</html>