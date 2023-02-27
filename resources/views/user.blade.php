<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eloquent</title>

    </head>
    <body>
        
     @foreach($users as $user)

         <h3>{{ $user->name }}</h3>
                        
             <ul>
                @foreach($user->cars as $car)
                <li> {{ $car->Type }}</li>

                <li> {{ $car->NumCar }}</li>
              @endforeach
             </ul> 
     @endforeach

    </body>
</html> 