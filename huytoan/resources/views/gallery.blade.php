
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>larvel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::asset('styles/style.css')}}">
</head>
<body>
<main>
    <section class="cases-links">
        <div class="wrapper">
            <h2>Cases</h2>
            <div class="wrapper__box" style="display: flex; flex-wrap: wrap">
                @foreach($products as $p)
                    <div class="box">
                        <a href="case1.html" style="width: 360px">
                            <div class="cases-link">
                                <img src="{{ $p->imgfullname }}" width="236px" height="236px">
                                <h3 class="cases-title">{{ $p->name }}</h3>
                                <p class="descgellary">{{ $p->price }}</p>

                            </div>
                            <form action="delete_img/{{$p->id}}" method="post">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <button style=" width: 70px; margin-left: 10px"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                            <a style="position: relative; top:-19px; left: 90px; text-decoration: none; font-size: 20px;" href="/huytoan/public/edit/{{$p->id}}">Edit</a>
                        </a>
                    </div>
            @endforeach
        </div>
        </div>
    </section>

</main>
<div class="wrapper">
    <footer style="background: #F2F2F2">
        <div class="error">
            @if(count($errors)>0)
                @foreach($errors->all() as $err)
                    {{$err}}
                @endforeach
            @endif
        </div>
        <div class="thanhcong">
            @if(Session::has('thanhcong'))
                <div class="success" style="color: #b1b1b1">
                    {{Session::get('thanhcong')}}
                </div>
            @endif
        </div>
        <h1 style="text-align: center; font-size: 40px">Thêm ảnh</h1>
        <form action="{{route('them_du_lieu')}}" method="post" style="text-align: center">
        <pre>
            <input type="hidden" name="_token" value="{{csrf_token()}}">

        <h3>Tên ảnh</h3><input type="text" name="name" placeholder="name" style="width: 300px; height: 30px; border-radius: 10px; border: none; padding-left: 10px"><br>

        <h3>Giá ảnh</h3><input type="text" name="price" placeholder="price" style="width: 300px; height: 30px; border-radius: 10px; border: none; padding-left: 10px"><br>

        <h3>Đường dẫn ảnh</h3><input type="text" name="imgfullname" placeholder="url" style="width: 300px; height: 30px; border-radius: 10px; border: none; padding-left: 10px"><br>

          <h3>Số ảnh</h3><input type="text" name="ordergallery" placeholder="ordergallery" style="width: 300px; height: 30px; border-radius: 10px; border: none; padding-left: 10px"><br>
         <div class="button">
             <button type="submit" style="width: 200px; height: 25px; border-radius: 6px; background: #ff1b1b">Add ảnh</button>
         </div>
        </pre>
        </form>
    </footer>
</div>
</body>
</html>
