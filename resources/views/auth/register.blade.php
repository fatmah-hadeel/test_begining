@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- create-account section -->
        <div class="row row-cols-2" id="contact-us" style="background-color: #EBF0F2; padding: 3% 3% 0 0">
            <div class="col-lg-6 col-xlg-6 col-md-6 col-12" style="padding: 2%">
                <div class="row" style="">
                    <div class="col-12">
                        <div class="" style="padding-top: 1%">
                            <h3 class="fw-bold">أنشىء حسـابك المجـاني</h3>

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

                            <div class="row " style="padding-top: 1%">
                                <div class="col">
                                    <form method="POST" action="{{ route('register') }}">

                                        @csrf
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="name" class="form-label">الاسم الأول</label>
                                                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="مثال: محمد" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col">
                                                    <label for="last_name" class="form-label">الاسم الأخير</label>
                                                    <input type="text" class="form-control  @error('last_name') is-invalid @enderror" name="last_name" id="last_name" placeholder="مثال: عبدالله">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">البريد اللكترونيً</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" placeholder="مثال: example123@gmail.com">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone_no" class="form-label">رقم الجوال</label>
                                            <input type="tel" class="form-control  @error('phone_no') is-invalid @enderror" name="phone_no" id="phone_no" placeholder="مثال: 0560469662">
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="password" class="form-label">كلمة المرور</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col">
                                                    <label for="password-confirm" class="form-label">تأكيد كلمة المرور</label>
                                                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="form-check text-end">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="form-check text-end">
                                                        <label class="form-check-label" for="flexCheckDefault">أوافق على</label>
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#staticCondition" style=" padding: 0;">
                                                            الشـروط والأحكـام
                                                        </button>
                                                        و
                                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#staticPrivicy" style=" padding: 0;">
                                                            سيـاسة الخصـوصية
                                                        </button>
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
                                            <p>هل لديـك حساب بالفعل؟ <a href="{{ route('login') }}">تسجل الدخول</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xlg-6 col-md-6 col-12 text-start" style="padding: 5%">
                <img src="{{ asset('/storage/images/Picture6.png') }}" style="width: 100%;">
            </div>
        </div>

        <!-- Modal الشروط والأحكام -->
        <div class="modal fade" id="staticCondition" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 15px">
                    <div class="modal-header" style="border: none">
                        <span class="text-center"><h5 class="modal-title" id="staticBackdropLabel">الشـروط والأحكـام</h5></span>
                        <span class="text-start"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></span>
                    </div>
                    <div class="modal-body">
                        <div class="scroll" >
                            <div class="card" style="border-radius: 15px">
                                <div class="card-body">
                                    <div class="row" style="max-height:350px; overflow-y: auto;">
                                        <div class="col">
                                            <h5 class="card-title">مرحباَ بك في بيجنينج</h5>
                                            <ul>
                                                <li>يهدف هذا الموقع إلى تقديم خدمـات واختبارات علمية وأدوات الذكاء الاصطناعي لمساعدة الطلاب
                                                    والباحثين عن عمل والشركات والجهات الحكومية والخاصة في الشرق الأوسط على اختيار مسسارهم في
                                                    المرحلة الثانوية والمعاهد والجامعات وقياس القدرات.
                                                </li>
                                                <li>
                                                    جميع المواد المنشورة في هذا الموقع تخضع لقوانين الحقوق الفكرية المطبقة في دولة المملكة
                                                    العربية السسعودية ويشمل ذلك المواد المجانية والمدفوعة، لذلك إن أي محاولة لنسخ أو إعادة نشر هذه المواد
                                                    دون إذن خطي إدارة الموقع سيعرضك للمسائلة القانونية.
                                                </li>
                                                <li>
                                                    نتيح عبر هذا الموقع الالكتروني مساحة مخصصة لمحتويات المستخدم كالنصوص والصور ومقاطع الفيديو والأرآء وما إلى ذلك.
                                                    إن نشر هذا المحتوى عبر الموقع الالكتروني (Begining)، يمنحنا ترخيصاَ من دون حقوق الملكية، وغير قابل للرجوع،
                                                    وغير حصري، ونافذ طوال فترة الحماية القانونية لحقوق الملكية الفكرية. لإعادة إنتاج محتوى المستخدم، أو عرضه، أو استخدامه،
                                                    أو نسسخه، أو تعديله، أو تكييفه، أو تنقيحه، أو توزيعه، أو ترجمته، أو إنشاء أعمال مشتقة منه، أو دمجه في أعمال أخرى
                                                    أو توزيعه (بشكل كلي أو جزئي).
                                                </li>
                                                <li>
                                                    قد يتطلب الوصول إلى الموقع الالكتروني و/ أو إلى أقسام معينة منهاستخدام كلمات سر شخصية. في هذه الحالة، يجب
                                                    عليك اتخاذ الخطوات اللازمة لإبقاء هذه الكلمات سرية. كما يمكنك تغييرها في أي وقت. ويرجى إبلاغنا عن أي استخدام احتيالي
                                                    علمت به. وفي حال الاخلال بالقواعد المنصوص عليها في شروط الاستخدام هذه، نحتفظ بحق تعليق إمكانية الوصول إلى الموقع الالكتروني.
                                                </li>
                                                <li>
                                                    إن نشر هذا المحتوى عبر الموقع الالكتروني (Begining)، يمنحنا ترخيصاَ من دون حقوق الملكية، وغير قابل للرجوع،
                                                    وغير حصري، ونافذ طوال فترة الحماية القانونية لحقوق الملكية الفكرية. لإعادة إنتاج محتوى المستخدم، أو عرضه، أو استخدامه،
                                                    أو نسسخه، أو تعديله، أو تكييفه، أو تنقيحه، أو توزيعه، أو ترجمته، أو إنشاء أعمال مشتقة منه، أو دمجه في أعمال أخرى.
                                                </li>
                                                <li>
                                                    لقد قمنا ببذل كافة الجهود لعرض بأدق صورة ممكنة للخدمات التي نقدمها، ولكن لا نستطيع ضمان استفادتك
                                                    الكاملة منها لنه ذلك يخضع لأمور عديدة. وسنسعد بتلقي ملاحظاتكم ونحاول تنفيذها قدر الإمكان.
                                                </li>
                                                <li>
                                                    لا نضمن دقة نتائج المقاييس التي تقوم بأخذها على الموقع.
                                                    بنسبة 100%  لقد قمنا بتجربة وتقنين هذه المقاييس بشكل جيد
                                                    لكن دقتها تصل الى نسبة 83.36% يخضع ‏20HK لعوامل متعددة وتجربة الصدق ومعيار.
                                                </li>
                                                <li>
                                                    نحتفظ بالحق بعدم بيع منتجاتنا أو خدماتنا لأي شخص، أو منطقة جغرافية أو قضائية.
                                                    وقد نطبق هذا الحق في بعض الحالات. نحتفظ بحق لتحديد الكميات لأي منتجات أو خدمات نقدمها.
                                                </li>
                                                <li>
                                                    جميع المواصفات للمنتجات أو أسعار المنتجات خاضعة للتغيير في أي وقت بدون تنبيه. نحتفظ بحق عدم توفير
                                                    أي منتج في أي وقت. يعتبر أي عرض لأي منتج أو خدمة يتم تقديمه على هذا المتجر لا غيا إذا كان محظوراً.
                                                </li>
                                                <li>
                                                    نود أن نعلمك اننا نقوم بطلب التسجيل في الموقع من اجل هدف واحد
                                                    وهو حفظ تقارير ونتائج  المقاييس التي تقوم بها. ومن حقك إدخال إيميل وهمي إذ لا نطلب
                                                    تفعيل الحساب عبر الإيميل، كما أن من حقك حذف الحساب في أي لحظة عبر أيقونة إغلاق الحساب في قسم الملف الشخصي.
                                                </li>
                                                <li>
                                                    لا يحق للموقع إرسال معلوماتك الشخصية إلى أي كائن ما كان ولأي سبب إلا ضمن الشروط التي تنص عليها هذه السياسة.
                                                </li>
                                                <li>
                                                    لنا الحق في إجراء أي تعديل طفيف أو جذري لشروط سياسة الخصوصية
                                                    من وقت لآخر من دون الحاجة إلى تقديم إخطار بذلك. وإذا كنت ترغب (Begining) يحتفظ موقع
                                                    بالاستمرار في استخدام موقعنا بعد إدخال التعديلات على سياسة الخصوصية هذه، فإن هذا يعني قبولك لهذه التغييرات.
                                                </li>
                                                <li>
                                                    يتبع هذا الموقع والعاملين فيه سياسة أمن معلومات شاملة وصارمة.
                                                    ولا يتاح إلا للموظفين المخولين فقط بالوصول إلى المعلومات الشخصية التعريفية وقد تعهد هؤلاء
                                                    الموظفون بتأمين سرية هذه المعلومات وفقا للأنظمة المعمول بها في المملكة العربية السعودية.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn " style="border-radius: 10px; background-color: #0B3E61; color: white; width: 25%">متـابعة</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal سياسة الخصوصية -->
        <div class="modal fade" id="staticPrivicy" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 15px">
                    <div class="modal-header" style="border: none">
                        <span class="text-center"><h5 class="modal-title" id="staticBackdropLabel">سيـاسة الخصوصيـة</h5></span>
                        <span class="text-start"><button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button></span>
                    </div>
                    <div class="modal-body">
                        <div class="scroll" >
                            <div class="card" style="border-radius: 15px">
                                <div class="card-body">
                                    <div class="row" style="max-height:350px; overflow-y: auto;">
                                        <div class="col">
                                            <h5 class="card-title">مرحباَ بك في بيجنينج</h5>
                                            <p>
                                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص
                                                الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. اذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو
                                                مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية
                                                .لتصميم الموقع  هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. اذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                                            </p>
                                            <p>
                                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص
                                                الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. اذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو
                                                مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية
                                                .لتصميم الموقع  هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. اذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn " style="border-radius: 10px; background-color: #0B3E61; color: white; width: 25%">متـابعة</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="container-fluid">--}}
{{--        <div class="row line-space">--}}
{{--            <div class="col-6">--}}
{{--                <img class="img_login" src="{{ asset('storage/images/bg3.png') }}" alt="photo">--}}
{{--            </div>--}}
{{--            <div class="col-6">--}}
{{--                <h4 class="text-left line-space">Create your free account</h4>--}}
{{--                <div class="row text-center line-space">--}}
{{--                    <div class="col-12 col-md-6 text-left">--}}
{{--                        <button type="button" class="google-btn btn"><img alt="photo" class="google-btn-icon" src="{{asset('storage/images/icons8-google-48.png')}}"> Sign up by google</button>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 col-md-6 text-center">--}}
{{--                        <button type="button" class="btn facebook-btn"><img alt="photo" class="facebook-btn-icon" src="{{asset('storage/images/icons8-facebook-circled-48.png')}}"> Sign up by facebook</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <h5 class="text-center line-space">OR</h5>--}}
{{--                <form method="POST" action="{{ route('register') }}">--}}
{{--                    @csrf--}}

{{--                    <div class="form-group row">--}}
{{--                        <div class="col-12">--}}
{{--                            <label for="name" class="col-form-label text-md-right" >{{ __('Name') }}</label>--}}
{{--                            <input id="name" type="text" placeholder="For ex: Fatimah nasir alyami" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                            @error('name')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <div class="col-12">--}}
{{--                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}
{{--                            <input id="email" type="email" placeholder="For ex: fatimah1089@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                            @error('email')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <div class="col-12">--}}
{{--                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>--}}
{{--                            <input id="password" type="password" placeholder="Afatimah@10987" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                            @error('password')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row">--}}
{{--                        <div class="col-12">--}}
{{--                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}
{{--                            <input id="password-confirm" placeholder="fatimah@10987" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group form-check">--}}
{{--                        <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                        <label class="form-check-label" for="exampleCheck1">Click on register I agree to <a href="#ModalOfTermsAndConditions" data-bs-toggle="modal" data-bs-target="#ModalOfTermsAndConditions">the terms and conditions</a> and <a href="#PolicyOfUseModel" data-bs-toggle="modal" data-bs-target="#PolicyOfUseModel">policy of use</a></label>--}}
{{--                    </div>--}}

{{--                    <div class="form-group row mb-0">--}}
{{--                        <div class="col-12">--}}
{{--                            <button type="submit" class="btn fill-btn-login">--}}
{{--                                {{ __('Register') }}--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <h6 class="line-space">Do you have account?  <a href="{{ route('login') }}">Login now</a></h6>--}}
{{--                </form>--}}
{{--                <!-- The model of the terms and conditions -->--}}
{{--                <div class="modal" tabindex="-1" id="ModalOfTermsAndConditions" role="dialog" aria-labelledby="ModalOfTermsAndConditionsLabel" aria-hidden="true">--}}
{{--                    <div class="modal-dialog">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h5 class="modal-title">the terms and conditions</h5>--}}
{{--                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <p>Modal body text goes here.Modal body text goes here.Modal body text goes here.Modal body text goes here.Modal body text goes here.Modal body text goes here.</p>--}}
{{--                            </div>--}}
{{--                            <div class="modal-footer">--}}
{{--                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- The model of the policy of use -->--}}
{{--                <div class="modal" tabindex="-1" id="PolicyOfUseModel" role="dialog" aria-labelledby="PolicyOfUseModelLabel" aria-hidden="true">--}}
{{--                    <div class="modal-dialog">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h5 class="modal-title">The policy of use</h5>--}}
{{--                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <p>Modal body text goes here.Modal body text goes here.Modal body text goes here.Modal body text goes here.Modal body text goes here.Modal body text goes here.</p>--}}
{{--                            </div>--}}
{{--                            <div class="modal-footer">--}}
{{--                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

