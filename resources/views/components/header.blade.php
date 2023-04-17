<div>
 
<h1>
        <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
         Header com 
        
    <!-- This header is used in welcome.blade.php -->
</h1> 
    

<h2>Hi {{$name}}</h2>
<div>Products:
<p>
@foreach ($fruits as $product)
                <li>{{ $product }}</li>
            @endforeach
</p>
</div>