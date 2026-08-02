<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">

    <label
        for="email"
        class="form-label"
        style="
            color:#2e6b1f;
            font-weight:700;
            font-size:16px;
        "
    >
        Email
    </label>

    <input
        id="email"
        type="email"
        name="email"
        value="{{ old('email') }}"
        required
        autofocus
        class="form-control"
    >

</div>

        <!-- Password -->
        <div class="mb-4">

    <label
        for="password"
        class="form-label"
        style="
            color:#2e6b1f;
            font-weight:700;
            font-size:16px;
        "
    >
        Password
    </label>

    <input
        id="password"
        type="password"
        name="password"
        required
        class="form-control"
    >

</div>

        <!-- Remember Me -->
        <div class="d-flex justify-content-between align-items-center mt-4">

    <div>

        <input
            type="checkbox"
            id="remember_me"
            name="remember"
        >

        <label
            for="remember_me"
            style="
                color:#2e6b1f;
                margin-left:5px;
                font-weight:500;
            "
        >
            Remember Me
        </label>

    </div>

    @if (Route::has('password.request'))

        <a
            href="{{ route('password.request') }}"
            style="
                color:#2e6b1f;
                font-weight:600;
                text-decoration:none;
            "
        >
             Forgot Password?
        </a>

    @endif

</div>

<div class="mt-4">

    <button
        type="submit"
        class="btn w-100"
        style="
            background:#2e6b1f;
            color:white;
            font-weight:700;
            padding:12px;
            border:none;
        "
    >
        Login
    </button>

</div>
    </form>
</x-guest-layout>
