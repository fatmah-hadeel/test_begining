@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- forget password section -->
        <div class="row row-cols-2" id="contact-us" style="background-color: #EBF0F2; padding: 3% 3% 0 0">
            <div class="col-lg-6 col-xlg-6 col-md-6 col-12 d-flex align-items-center justify-content-center" style="padding: 2%">
                <div class="row" style="">
                    <div class="col-12">
                        <div class="" style="padding-top: 1%">
                            <h3 class="fw-bold">نسيت كلمة المرور الخاصة بك</h3>
                            <p class="fs-5">أدخل بريدك الالكتروني أو رقم هاتفك للعثور على حسابك</p>

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row" style="padding-top: 1%">
                                <div class="col">
                                    <form class="line-space" method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="form-label">البريد الالكتروني/ الهاتف</label>
                                            <input type="email" placeholder="fatimah1089@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" >

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 text-center">
                                            <button type="submit" class="btn" style="width: 100%; border-radius: 10px; background-color: #0B3E61; color: white">إرسـال</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xlg-6 col-md-6 col-12 text-start" style="padding: 5%">
                <img src="{{ asset('storage/images/Picture8.png') }}" style="width: 100%;">
            </div>
        </div>
    </div>
@endsection
