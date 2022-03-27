<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    h1{
      text-align: center;
        justify-content: flex-start;
        font-family: Arial, Helvetica, sans-serif;
    }
    form{
        text-align: center;
        justify-content: flex-start;
        font: 1em sans-serif;
    }
    input{
 text-align: center;
        justify-content: flex-start;
        font: 1em sans-serif;
        border-top-left-radius: 2px;
    }
    p{
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color:gray;
    }
</style>
<body>
   <h1>Wellcome</h1>
    <form action="/about" method="post" >
        @csrf
        <input type="text" name="name" id="">
        <br>
        <br>
        <input type="submit" value="send">
        <br>
        <br>


    @if (isset($name))
        <p>Name</p>
        <input type="text" name="" value="{{$name}}" id="">


    @endif

    </form>




</body>

</html>
