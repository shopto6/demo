<!doctype html>
<html lang="en">
  <head>
    <title>Customer Info</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
       <nav class=" navbar-light bg-light">
        <h1 class="bg-secondary text-white">Registered Information</h1>
        </nav>  
       <table class="table">
            <nav class="text-light bg-dark">
            <thead>
                <tr>
                    <th >Customer Name</th>
                    <th>E-mail</th>
                    <th>Password</th>
                </tr>
            </thead>
            </nav>
            <tbody>
                @foreach( $customer as $customer ) 

                <tr>
                    <td >{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->password}}</td>
                    
                    
                    <td>
                      <a href="{{url('/customer/delete/')}}/{{($customer->customer_id)}}"><button class="btn btn-danger">Delete</button></a>
                      <a href="{{route('customer.edit',['id'=>$customer->customer_id])}}"><button class="btn btn-info">Edit</button>
                      </a>
                    </td>
                  </tr>

                @endforeach
            </tbody>
        </table>
     </div> 
    
  </body>
</html>