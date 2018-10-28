@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Item') }}</div>

                @if ($errors->any())
				        {!! implode('', $errors->all('<div>:message</div>')) !!}
				@endif
                <div class="card-body">
                    	{!! Form::open(['method' => 'POST','route' => 'items.store' , 'class'=>'form-group'] ) !!}
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>
                     
                            <div class="col-md-6">
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-6">
                                {{ Form::number('quantity', null, ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection