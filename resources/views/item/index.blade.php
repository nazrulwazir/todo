@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Item') }}</div>
                    <a class="btn btn-link" href="{{ route('items.create') }}">
                        {{ __('Add Item') }}
                    </a>
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($list as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->quantity }}</td>
                                    <td>{{ $value->description }}</td>
                                    <td><a class="btn btn-link" href="{{ route('items.edit',$value->id) }}">
                                            {{ __('Edit Item') }}
                                        </a>
                                        <form action="{{ route('items.destroy', $value->id) }}" method="POST">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button onclick="return confirm('Are You Sure Delete This')" type="submit" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill"><i class="la la-trash"></i>DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection