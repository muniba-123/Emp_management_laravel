<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body class="antialiased">
      Posts
       <br/>
       @foreach($posts as $post)
<div>
    <h3>{{$post->title}}</h3>
    <span>{{$post->body}}</span>

</div>
    @endforeach
    </body>
</html>
