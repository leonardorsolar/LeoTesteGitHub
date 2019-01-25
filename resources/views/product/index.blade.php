<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<ul>
    
    @forelse ($products as $product)
    <li>
    <a href="{{$product->path()}}"> {{$product->title}}</a>
    </li>
    @empty
        <li>Não há projetos</li>
    @endforelse
</ul> 
</body>
</html>
