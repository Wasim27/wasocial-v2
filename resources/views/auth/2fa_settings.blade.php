<title>Wasocial ● 2fa</title>

<x-app-layout>
    <div class="relative w-full antialiased overflow-y-none h-screen md:flex md:flex-wrap">

        @include('layouts.sidebar')

        <main class="flex items-center bg-woodsmoke-100 flex-1 p-4 shadow-inner mx-auto overflow-y-auto md:h-full">

            <div class="flex flex-wrap bg-woodsmoke-200 container p-5 w-full max-w-2xl mx-auto rounded-3xl items-center">
                <div class="row justify-content-md-center">
                    <div class="col-md-8 ">
                        <div class="card">
                            <div class="card-header flex justify-center"><strong>Two Factor Authentication</strong></div>
                            <div class="card-body">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if ($data['user']->loginSecurity == null)
                                    <form class="form-horizontal" method="POST"
                                        action="{{ route('generate2faSecret') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">
                                                Generate Secret Key to Enable 2FA
                                            </button>
                                        </div>
                                    </form>
                                @elseif(!$data['user']->loginSecurity->google2fa_enable)
                                    1. Scan this QR code with your Google Authenticator App. Alternatively, you can use
                                    the code: <code>{{ $data['secret'] }}</code><br />
                                    {!! $data['google2fa_url'] !!}
                                    <br /><br />
                                    2. Enter the pin from Google Authenticator:<br /><br />
                                    <form class="form-horizontal" method="POST" action="{{ route('enable2fa') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('verify-code') ? ' has-error' : '' }}">
                                            <label for="secret" class="control-label">Authenticator Code</label>
                                            <input id="secret" type="password" class="form-control col-md-4"
                                                name="secret" required>
                                            @if ($errors->has('verify-code'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('verify-code') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <button type="submit" class="block tracking-widest uppercase text-center shadow bg-green-600 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded mx-auto mt-3">
                                            Enable 2FA
                                        </button>
                                    </form>
                                @elseif($data['user']->loginSecurity->google2fa_enable)
                                    <div class="alert alert-success">
                                        2FA is currently <strong>enabled</strong> on your account.
                                    </div>
                                    <p>If you are looking to disable Two Factor Authentication. Please confirm your
                                        password and Click Disable 2FA Button.</p>
                                    <form class="form-horizontal" method="POST" action="{{ route('disable2fa') }}">
                                        {{ csrf_field() }}
                                        <div
                                            class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                            <label for="change-password" class="control-label">Current Password</label>
                                            <input id="current-password" type="password" class="form-control col-md-4"
                                                name="current-password" required>
                                            @if ($errors->has('current-password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('current-password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <button type="submit" class="block tracking-widest uppercase text-center shadow bg-red-600 hover:bg-red-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded mx-auto">Disable 2FA</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>
</x-app-layout>