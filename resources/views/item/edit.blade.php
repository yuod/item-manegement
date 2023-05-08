
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>編集</title>
</head>
<body>
    <h1>編集</h1>
    <a href="/item">戻る</a>
<form action="/item/update/{{ $item->id}}" method="get">

<div class="form-group">
    <label for="name">商品名</label>
        <input type="text" class="form-control" name="name" cols="40" value="{{$item->name}}">
</div>
<div class="form-group">
    <label for="type">種別</label>
    <input type="text" class="form-control" name="type" cols="40" value="{{$item->type}}"> 
</div>
<br>
<input type="checkbox" name="status" value="{{$item->status}}" checked>有効にする
<div class="form-group">
    <label for="detail">詳細</label>
        <textarea class="form-control" name="detail" rows="4" cols="40"></textarea>
</div>
</form>
<a href="/items/itemdelete/{{ $item->id}}" class="btn btn-danger">削除</a>
</body>
</html>