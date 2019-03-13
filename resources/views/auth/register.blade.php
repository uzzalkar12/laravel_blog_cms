@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-one-third is-offset-one-third m-t-100">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">Join the Community</h1>

                        <form action="{{ route('register') }}" method="POST" role="form">
                            @csrf
                            <div class="field">
                                <label for="name">Full Name</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text"
                                           name="name" id="name" value="{{ old('name') }}" required>
                                </p>
                                @if ($errors->has('name'))
                                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>

                            <div class="field">
                                <label for="email">Email Address</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text"
                                           name="email" id="email" value="{{ old('email') }}" required>
                                </p>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                           <div class="columns">
                               <div class="column">
                                   <div class="field">
                                       <label for="password">Password</label>
                                       <p class="control">
                                           <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}"
                                                  type="password" name="password" id="password" required>
                                       </p>
                                       @if ($errors->has('password'))
                                           <p class="help is-danger">{{ $errors->first('password') }}</p>
                                       @endif
                                   </div>
                               </div>

                               <div class="column">
                                   <div class="field">
                                       <label for="password_confirmation">Confirm Password</label>
                                       <p class="control">
                                           <input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}"
                                                  type="password" name="password_confirmation" id="password_confirmation" required>
                                       </p>
                                       {{--@if ($errors->has('password_confirmation'))--}}
                                           {{--<p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>--}}
                                       {{--@endif--}}
                                   </div>
                               </div>
                           </div>

                            <button type="submit" class="button is-primary is-outlined is-fullwidth m-t-30">Register
                            </button>
                        </form>
                    </div>
                </div>
                <h5 class="has-text-centered m-t-15"><a href="{{ route('login') }}" class="is-muted">Already have an account?</a></h5>
            </div>
        </div>
    </div>
@endsection
