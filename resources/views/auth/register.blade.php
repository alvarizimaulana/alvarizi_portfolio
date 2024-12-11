<x-guest-layout>
    <style>
        /* Gradien latar belakang */
        body {
            background: linear-gradient(135deg, #0f0f0f, #1a1a1a, #2a2d3e);
            color: #e0e0e0;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        form {
            background: rgba(15, 15, 15, 0.95); /* Transparansi hitam pekat */
            padding: 2rem 3rem;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.7);
            width: 100%;
            max-width: 450px;
            animation: fadeIn 1s ease-in-out;
        }

        input {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid #333;
            color: #e0e0e0;
            padding: 0.75rem;
            margin-top: 0.5rem;
            border-radius: 8px;
            width: 100%;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #3f87ff;
            box-shadow: 0 0 8px rgba(63, 135, 255, 0.5);
        }

        label {
            font-size: 1rem;
            margin-top: 1rem;
            display: block;
            color: #ccc;
        }

        a {
            color: #3f87ff;
            text-decoration: none;
            font-size: 0.9rem;
        }

        a:hover {
            color: #61a8ff;
        }

        .custom-btn {
            background: linear-gradient(135deg, #3f87ff, #61a8ff);
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            width: 100%;
            margin-top: 1.5rem;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .custom-btn:hover {
            box-shadow: 0 8px 20px rgba(63, 135, 255, 0.5);
            transform: translateY(-3px);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <!-- Form Register -->
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nama -->
        <div>
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
        </div>

        <!-- Email -->
        <div class="mt-4">
            <label for="email">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username">
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
        </div>

        <!-- Konfirmasi Password -->
        <div class="mt-4">
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <!-- Link Login -->
        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>
        </div>

        <!-- Tombol Daftar -->
        <button type="submit" class="custom-btn">{{ __('Register') }}</button>
    </form>
</x-guest-layout>
