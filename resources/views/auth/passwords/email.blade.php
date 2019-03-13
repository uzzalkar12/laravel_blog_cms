@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-one-third is-offset-one-third m-t-100">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">Forgot password?</h1>

                        @if (session('status'))
                            <div class="notification is-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('password.email') }}" method="POST" role="form">
                            @csrf
                            <div class="field">
                                <label for="email">Email Address</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text"
                                           name="email" id="email" value="{{ old('email') }}"
                                           placeholder="name@example.com">
                                </p>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <button type="submit" class="button is-primary is-outlined is-fullwidth m-t-30">Send Password Reset Link
                            </button>
                        </form>
                    </div>
                </div>
                <h5 class="has-text-centered m-t-15"><a href="{{ route('login') }}" class="is-muted"><i class="fa fa-fw fa-caret-left"></i> Back to Login</a></h5>
            </div>
        </div>
    </div>
@endsection
