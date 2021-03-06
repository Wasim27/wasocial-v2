<title>Wasocial ● Auth</title>

<x-app-layout>
    <div class="w-full flex flex-col justify-center items-center mt-24">
        <div class='max-w-lg bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
            <div class="py-4 px-8 mt-3">
                <div class="flex flex-col mb-3">
                    <h2 class="text-gray-700 font-semibold text-2xl tracking-wide mb-2 text-center">Google Auth OTP</h2>
                    <p class="text-gray-500 text-base">Enter the pin from Google Authenticator</p>
                </div>
                <div class="bg-gray-100 rounded-lg">
                    <div class="py-4 px-4">
                        <div class="flex flex-col">
                            <div class="flex flex-col text-sm text-gray-500">
                                <form class="form-horizontal" action="{{ route('2faVerify') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div
                                        class="form-group{{ $errors->has('one_time_password-code') ? ' has-error' : '' }}">
                                        <label for="one_time_password" class="control-label">One Time Password</label>
                                        <input id="one_time_password" name="one_time_password"
                                            class="form-control col-md-4" type="text"  pattern="[0-9]{6}" maxlength="6" required />
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <button
                        class="block tracking-widest uppercase text-center shadow bg-green-600 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded mx-auto"
                        type="submit">Authenticate
                    </button>
                    </form>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger text-center text-red-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
        </div>
    </div>

</x-app-layout>
