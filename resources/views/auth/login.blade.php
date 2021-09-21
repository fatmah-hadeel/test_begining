@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- login section -->
        <div class="row row-cols-2" id="contact-us" style="background-color: #EBF0F2; padding: 3% 3% 0 0">
            <div class="col-lg-6 col-xlg-6 col-md-6 col-12" style="padding: 2%">
                <div class="row" style="">
                    <div class="col-12">
                        <div class="" style="padding-top: 1%">
                            <h3 class="fw-bold">تسجيـل الدخـول إلى حسـابك</h3>

                            <div class="row" style="padding-top: 3%">
                                <div class="col">
                                    <button type="button" class="btn google">
                                        <img src="{{ asset('storage/images/icons8-google-30.png') }}">
                                        عن طريق جوجل
                                    </button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn google">
                                        <img src="{{ asset('storage/images/icons8-facebook-f-30.png') }}">
                                        عن طريق فيسبوك
                                    </button>
                                </div>
                            </div>

                            <div class="row" style="padding-top: 1%">
                                <div class="col text-center"><p>أو</p></div>
                            </div>

                            <div class="row" style="padding-top: 1%">
                                <div class="col">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="form-label">البريد الالكتروني/ الهاتف</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" >
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">كلمة المرور</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="row row-cols-2">
                                                <div class="col">
                                                    <div class="row row-cols-2">
                                                        <div class="col-auto">
                                                            <div class="form-check ">
                                                                <input class="form-check-input" type="checkbox" value="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check text-end">
                                                                <label class="form-check-label" for="remember">تذكرني</label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="col text-start">
                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link"  style="padding-left: 60%" href="{{ route('password.request') }}">
                                                                نسيت كلمة المرور؟
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <button type="submit" class="btn" style="width: 100%; border-radius: 10px; background-color: #0B3E61; color: white">سجـل الآن</button>
                                        </div>
                                    </form>
                                    <form>
                                        <div class="row text-center">
                                            <p>ليس لديـك حساب؟ <a href="{{ url('register') }}">أنشىء حساب الآن</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xlg-6 col-md-6 col-12 text-start" style="padding: 5%">
                <img src="{{ asset('storage/images/Picture6.png') }}" style="width: 100%;">
            </div>
        </div>
    </div>

    {{--    <div class="container-fluid">--}}
{{--        <!-- login section -->--}}
{{--        <div class="row row-cols-2" id="contact-us" style="background-color: #EBF0F2; padding: 3% 3% 0 0">--}}
{{--            <div class="col-lg-6 col-xlg-6 col-md-6 col-12" style="padding: 2%">--}}
{{--                <div class="row" style="">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="" style="padding-top: 1%">--}}
{{--                            <h3 class="fw-bold">تسجيـل الدخـول إلى حسـابك</h3>--}}

{{--                            <div class="row" style="padding-top: 3%">--}}
{{--                                <div class="col">--}}
{{--                                    <button type="button" class="btn google">--}}
{{--                                        <img src="{{ asset('storage/images/icons8-google-30.png') }}">--}}
{{--                                        عن طريق جوجل--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <button type="button" class="btn google">--}}
{{--                                        <img src="{{ asset('storage/images/icons8-facebook-f-30.png') }}">--}}
{{--                                        عن طريق فيسبوك--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row" style="padding-top: 1%">--}}
{{--                                <div class="col text-center"><p>أو</p></div>--}}
{{--                            </div>--}}

{{--                            <div class="row" style="padding-top: 1%">--}}
{{--                                <div class="col">--}}
{{--                                    <form method="POST" action="{{ route('login') }}">--}}
{{--                                        @csrf--}}

{{--                                        <div class="mb-3">--}}
{{--                                            <label for="email" class="form-label">البريد الالكتروني/ الهاتف</label>--}}
{{--                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" >--}}
{{--                                            @error('email')--}}
{{--                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                    <strong>{{ $message }}</strong>--}}
{{--                                                </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label for="password" class="form-label">كلمة المرور</label>--}}
{{--                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password">--}}
{{--                                            @error('password')--}}
{{--                                                <span class="invalid-feedback" role="alert">--}}
{{--                                                    <strong>{{ $message }}</strong>--}}
{{--                                                </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <div class="row row-cols-2">--}}
{{--                                                <div class="col">--}}
{{--                                                    <div class="row row-cols-2">--}}
{{--                                                        <div class="col-auto">--}}
{{--                                                            <div class="form-check ">--}}
{{--                                                                <input class="form-check-input" type="checkbox" value="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-auto">--}}
{{--                                                            <div class="form-check text-end">--}}
{{--                                                                <label class="form-check-label" for="remember">تذكرني</label>--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col">--}}
{{--                                                    <div class="col text-start">--}}
{{--                                                        @if (Route::has('password.request'))--}}
{{--                                                            <a class="btn btn-link"  style="padding-left: 60%" href="{{ route('password.request') }}">--}}
{{--                                                                نسيت كلمة المرور؟--}}
{{--                                                            </a>--}}
{{--                                                        @endif--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3 text-center">--}}
{{--                                            <button type="submit" class="btn" style="width: 100%; border-radius: 10px; background-color: #0B3E61; color: white">سجـل الآن</button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                    <form>--}}
{{--                                        <div class="row text-center">--}}
{{--                                            <p>ليس لديـك حساب؟ <a href="{{ url('register') }}">أنشىء حساب الآن</a></p>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-xlg-6 col-md-6 col-12 text-start" style="padding: 5%">--}}
{{--                <img src="{{ asset('storage/images/Picture6.png') }}" style="width: 100%;">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

