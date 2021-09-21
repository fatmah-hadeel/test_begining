@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- test details section -->
        <div class="row row-cols-1" id="test-details" style=" padding: 3% 3% 3% 0">
            <div class="col-12" style="padding: 2%">
                <div class="row" style="">
                    <div class="col-12">
                        <div style="width: 30px; height: 4px; background-color: #E99424"></div>
                        <div class="" style="padding-top: 1%">
                            <h3 class="fw-bold">تفاصيل الاختبـار</h3>

                            <div class="row row-cols-1">
                                <div class="col-12">
                                    <div class="card" style="border: none; padding-right: 0">
                                        <div class="card-body" style="padding-right: 0">
                                            <a href="#" class="btn text-end" style="background-color: #E99424; color: white; border-radius: 10px;
                                             width: 250px; padding-right: 3%"><h5>وصـف الاختبـار</h5></a>
                                            <p class="card-text fs-5">
                                                احصر خياراتك وتعرّف على أكثر ما يلائم شغفك وميولك من خلال مجموعة من الأسئلة غير المباشرة التي من شأنها أن تكشف لك
                                                مدى رغبتك في مجال معين عن الآخر والتي تقيس مستواك في أهم مهارات القرن الواحد والعشرين. تم إعداد هذا الاختبار خصيصًا
                                                للأشخاص الذين يظنون أنهم على دراية كاملة برغباتهم، إذ سيكشف لهم ما يخفيه مكنونهم الداخلي من ميول ورغبات!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card" style="border: none; padding-right: 0">
                                        <div class="card-body" style="padding-right: 0">
                                            <a href="#" class="btn text-end" style="background-color: #E99424; color: white; border-radius: 10px;
                                             width: 250px; padding-right: 3%"><h5>لمـن صًمِمَ؟</h5></a>
                                            <p class="card-text fs-5">
                                                هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة
                                                أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع
                                                من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات من قاموس يحوي على أكثر من 200
                                                كلمة لا تينية، مضاف إليها مجموعة من الجمل النموذجية، لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card" style="border: none; padding-right: 0">
                                        <div class="card-body" style="padding-right: 0">
                                            <a href="#" class="btn text-end" style="background-color: #E99424; color: white; border-radius: 10px;
                                             width: 250px; padding-right: 3%"><h5>الفئـة المستهدفـة</h5></a>
                                            <p class="card-text fs-5">
                                                <span class="fw-bold">تمكين: </span>
                                                طلاب المدارس من سن 15 عام – خريجي المرحلة الثانوية – طلاب الجامعة والكليات والمعاهد.
                                            </p>
                                            <p class="card-text fs-5">
                                                <span class="fw-bold">توافق: </span>
                                                الموظفين والباحثين عن العمل.
                                            </p>
                                            <p class="card-text fs-5">
                                                <span class="fw-bold">دال: </span>
                                                الجهات الحكومية والخاصة والشركات واقسام الموارد البشرية والتدريب والتخطيط داخل تلك الجهات.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center" style="padding: 2%">
                <a class="btn" href="{{url('payments')}}" style="background-color: #0B3E61; color: white; width: 50%; border-radius: 10px;">ادفع وابدأ الاختبـار الآن</a>
            </div>
        </div>

    </div>
@endsection
