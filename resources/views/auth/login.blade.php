@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-one-third is-offset-one-third m-t-100">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">Log In</h1>

                        <form action="{{ route('login') }}" method="POST" role="form">
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

                            <div class="field">
                                <label for="password">Password</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}"
                                           type="password" name="password" id="password">
                                </p>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>

                            <b-checkbox nam="remember" class="m-t-20">Remember Me</b-checkbox>

                            <button type="submit" class="button is-primary is-outlined is-fullwidth m-t-30">Login
                            </button>
                        </form>
                    </div>
                </div>
                <h5 class="has-text-centered m-t-15"><a href="{{ route('password.request') }}" class="is-muted">Forgot
                        Your Password?</a></h5>
            </div>
        </div>
    </div>
@endsection
<script>
    import BCheckbox from "buefy/src/components/checkbox/Checkbox";

    export default {
        components: {BCheckbox}
    }
</script>