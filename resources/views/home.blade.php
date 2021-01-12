@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <br>
            <div class="card">
                <div class="card-header" style="background-color:#1a237e;">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                @if(Auth::user()->hasRole('admin'))
                    
                
                    <div class="card-body">
                   

                   
                   </div>
                @endif
                
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
