@extends("layouts.master")

@section('title')
    New Password
@endsection

@section('content')

    <h4>New Password</h4>

    <hr>

    <form action="{{ route("auth.resetPassword") }}" method="post">

        @csrf

        <input type="hidden" name="user_token" value="{{ $user_token }}">

        <div class="mb-3">
            <label class=" form-label" for="">New Password</label>
            <input type="password" class=" form-control @error('password') is-invalid @enderror" name="password">
            @error('password')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class=" form-label" for="">Confirm Password</label>
            <input type="password" class=" form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
            @error('password_confirmation')
                <div class=" invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <button class=" btn btn-primary"> Reset Now </button>
        </div>


    </form>


@endsection
