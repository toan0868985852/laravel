<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="/huytoan/public/update/{{$gallerylaravel->id}}">
    @method('PATCH')
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="id" value="{{ $gallerylaravel->id }}">
    <p>
        <label for="title">Tên ảnh</label><br>
        <input type="text" name="name" value="{{ $gallerylaravel->name }}">
    </p>

    <p>
        <label for="email">Giá ảnh</label><br>
        <input type="text" name="price" value="{{ $gallerylaravel->price }}">
    </p>

    <p>
        <label for="description">Đường dẫn ảnh</label><br>
        <input type="text" name="imgfullname" value="{{ $gallerylaravel->imgfullname }}">
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>

</form>
</body>
</html>
