@extends('layout')

@section('content')

    <h4 class="text-center my-3 pb-3">Shopping list Demo</h4>
            
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ url('/purchases') }}" method="POST" class="row justify-content-center align-items-center mb-4 pb-2">
        @csrf  
        <div class="form-group col-md-8">
            <input type="text" class="form-control" name="item" placeholder="Add an item to the list"/>
        </div>
                    
        <div class="form-group col-md-2">
            <input type="text" class="form-control" name="quantity" placeholder="Quantity"/>
        </div>
                   
        <div class="form-group col-md-2">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
            
        </form>

            <table>

                @foreach($shoppingList as $thing)
                <tr>
                    <form action="{{ url('purchases/'.$thing->id) }}" method="POST" >
                    @csrf
                    @method('PUT')
                    
                        <td><input type="text" name="item" value="{{ $thing->item  }}"></td>
                        <td><input type="text" name="quantity" value="{{ $thing->quantity }}"></td>
                        <td><button class="btn btn-primary" type="submit">Update</button></td>
                    </form>
                    <form action="{{ url('purchases/'.$thing->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                        <td><button class="btn btn-danger" type="submit">Delete</button></td>
                        </form>
                </tr>
                @endforeach
            </table>
         
@endsection