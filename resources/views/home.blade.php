@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-2" id="contact-us" style="background-color: #EBF0F2; padding: 3% 3% 0 0">
        <div class="col-lg-3 col-xlg-3 col-md-12 col-12" style="padding: 2%">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="background-color: #0B3E61; border-radius: 15px; padding-top: 10%; padding-bottom: 10%;">
                        <div class="text-center">
                            @foreach($filename as $filename)
                            <img src="{{ Storage::disk('do_spaces')->url($filename) }}" class="card-img-top" alt="..." style=" width: 40%; border-radius: 50%; height:90px; border: 5px white solid;">
                        </div>
                        @endforeach
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-12 text-center">
                                    <h5 class="card-title" style="color: white ">
                                        {{ Auth::user()->name }} {{Auth::user()->last_name}}
                                    </h5>
                                    <p class="card-text" style="color: white">الرياض - المملكة العربية السعودية</p>
                                </div>
                                <div class="line" style="padding-top: 50px"></div>
                                <div class="col-12">
                                    <div class="list-group" style="padding-bottom: 20px;">
                                        <a href="#" class="list-group-item list-group-item-action profile-list active"
                                           id="home-tab" data-bs-toggle="tab" data-bs-target="#edit-info" type="button" role="tab" aria-controls="edit-info" aria-selected="true">
                                            <div class="row">
                                                <div class="col-3" style="padding-left: 0"><i class='far fa-edit'></i></div>
                                                <div class="col-9" style="padding-right: 0">تعديل بياناتي الشخصية</div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action profile-list"
                                           id="profile-tab" data-bs-toggle="tab" data-bs-target="#prev-tests" type="button" role="tab" aria-controls="prev-tests" aria-selected="false">
                                            <div class="row">
                                                <div class="col-3" style="padding-left: 0"><i class='far fa-file-alt'></i></div>
                                                <div class="col-9" style="padding-right: 0">اختباراتي السابقة</div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action profile-list"
                                           id="contact-tab" data-bs-toggle="tab" data-bs-target="#favorite" type="button" role="tab" aria-controls="favorite" aria-selected="false">
                                            <div class="row">
                                                <div class="col-3" style="padding-left: 0"><i class='far fa-heart'></i></div>
                                                <div class="col-9" style="padding-right: 0">المفضلة</div>
                                            </div>
                                        </a>
                                        <hr style="color: white">
                                        <a href="#" class="list-group-item list-group-item-action profile-list"
                                           id="contact-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                                            <div class="row">
                                                <div class="col-3" style="padding-left: 0"><i class='fas fa-cog'></i></div>
                                                <div class="col-9" style="padding-right: 0">الاعدادات</div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action profile-list">
                                            <div class="row">
                                                <div class="col-3" style="padding-left: 0"><i class='fas fa-sign-out-alt'></i></div>
                                                <div class="col-9" style="padding-right: 0">تسجيل الخروج</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-xlg-9 col-md-12 col-12 text-start" style="padding: 2%">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="edit-info" role="tabpanel" aria-labelledby="edit-info-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="background-color: white; border-radius: 15px; padding: 5%;">
                                @include('layouts/flash')
                                <div class="card-body">
                                    <div class="row">
                                            <div class="text-center ">
                                                <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" class="card-img-top" alt="..." style=" width: 100px; height: 100px; border-radius: 50%;">
                                            </div>

                                        <div class="col-12 text-end ">
                                            <br>
                                            <form class="line-space" action="{{url('upload',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="col-12 text-center">
                                                        <label for="inputUpload" class="custom-file-upload">
                                                            تغيير الصورة
                                                        </label>
                                                        <input id="inputUpload" name="image" type="file" style="display: none; ">
                                                </div>
                                                <br>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="name" class="form-label">الإسم الأول</label>
                                                            <input type="text" id="name" name="name" class="form-control" value="{{ Auth::user()->name }}" placeholder="الاسم الأول">
                                                        </div>
                                                        <div class="col">
                                                            <label for="last_name" class="form-label">الإسم الإخير</label>
                                                            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ Auth::user()->last_name }}" placeholder="الاسم الأخير">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="email" class="form-label">البريد الإلكتروني</label>
                                                            <input type="email" id="email" name="email" class="form-control" value="{{ Auth::user()->email }}" placeholder="البريد الالكتروني">
                                                        </div>
                                                        <div class="col">
                                                            <label for="phone_no" class="form-label">رقم الهاتف</label>
                                                            <input type="text" id="phone_no" name="phone_no" class="form-control" value="{{ Auth::user()->phone_no }}" placeholder="رقم الهاتف">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="city" class="form-label">المدينة</label>
                                                            <input type="text" id="city" name="city" class="form-control" value="{{ Auth::user()->city }}"  placeholder="المدينة">
                                                        </div>
                                                        <div class="col">
                                                            <label for="nationality" class="form-label">الجنسية</label>
                                                            <input type="text" id="nationality" name="nationality" class="form-control" value="{{ Auth::user()->nationality }}" placeholder="الجنسية">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="educational_level" class="form-label">المؤهل التعليمي</label>
                                                            <input type="text" id="educational_level" name="educational_level" class="form-control"  value="{{ Auth::user()->educational_level }}" placeholder="المؤهل التعليمي">
                                                        </div>
                                                        <div class="col">
                                                            <label for="educational_body" class="form-label">الجهة التعليمية</label>
                                                            <input type="text" id="educational_body" name="educational_body" class="form-control" value="{{ Auth::user()->educational_body }}" placeholder="الجهة التعليمية">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="DB" class="form-label">تاريخ الميلاد</label>
                                                            <input type="date" id="DB" name="DB" class="form-control" value="{{ Auth::user()->DB }}" placeholder="تاريخ الميلاد">
                                                        </div>
                                                        <div class="col">
                                                            <label for="place_of_birth" class="form-label">مكان الميلاد</label>
                                                            <input type="text" id="place_of_birth" name="place_of_birth" class="form-control" value="{{ Auth::user()->place_of_birth }}" placeholder="مكان الميلاد">
                                                        </div>
                                                        <div class="col">
                                                            <label for="gender" class="form-label">الجنس</label>
                                                            <select class="form-select" id="gender" name="gender" aria-label="Default select example">
                                                                @if(Auth::user()->gender == null)
                                                                <option value="ذكر">ذكر</option>
                                                                <option value="أنثى">أنثى</option>
                                                                @elseif(Auth::user()->gender == 'ذكر')
                                                                    <option value="ذكر">ذكر</option>
                                                                @else
                                                                    <option value="أنثى">أنثى</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 text-center">
                                                    <button  type="submit" value="upload" class="btn" style="background-color: #0B3E61; color: white; width: 100%;">حفظ التغييرات</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="prev-tests" role="tabpanel" aria-labelledby="prev-tests-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="background-color: white; border-radius: 15px; padding: 5%;">
                                <div class="card text-end" style="border-radius: 15px;">
                                    <div class="card-header" style="background-color: #0B3E61; color: white; border-top-right-radius: 15px; border-top-left-radius: 15px;">
                                        <div class="row text-center">
                                            <div class="col-8 text-end">الاختبار</div>
                                            <div class="col-2">التاريخ</div>
                                            <div class="col-2">الاجراء</div>
                                        </div>
                                    </div>
                                    <div class="card-body" style="max-height:470px; overflow-y: auto;">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card mb-3" style="padding: 0; border: none;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('storage/images/p1.png') }}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">اختبار تحليل الشخصية</h5>
                                                                <p class="card-text">يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">22/08/2021</div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center"><button type="button" class="btn" style="background-color: #0B3E61; color: white;">نتيجة الاختبار</button></div>
                                        </div>
                                        <hr style="height: 0.2px">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card mb-3" style="padding: 0; border: none;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('storage/images/p1.png') }}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">اختبار تحليل الشخصية</h5>
                                                                <p class="card-text">يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">22/08/2021</div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center"><button type="button" class="btn" style="background-color: #0B3E61; color: white;">نتيجة الاختبار</button></div>
                                        </div>
                                        <hr style="height: 0.2px">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card mb-3" style="padding: 0; border: none;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('storage/images/p1.png') }}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">اختبار تحليل الشخصية</h5>
                                                                <p class="card-text">يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">22/08/2021</div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center"><button type="button" class="btn" style="background-color: #0B3E61; color: white;">نتيجة الاختبار</button></div>
                                        </div>
                                        <hr style="height: 0.2px">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card mb-3" style="padding: 0; border: none;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('storage/images/p1.png') }}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">اختبار تحليل الشخصية</h5>
                                                                <p class="card-text">يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">22/08/2021</div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center"><button type="button" class="btn" style="background-color: #0B3E61; color: white;">نتيجة الاختبار</button></div>
                                        </div>
                                        <hr style="height: 0.2px">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card mb-3" style="padding: 0; border: none;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('storage/images/p1.png') }}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">اختبار تحليل الشخصية</h5>
                                                                <p class="card-text">يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">22/08/2021</div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center"><button type="button" class="btn" style="background-color: #0B3E61; color: white;">نتيجة الاختبار</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="favorite" role="tabpanel" aria-labelledby="favorite-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="background-color: white; border-radius: 15px; padding: 5%;">
                                <div class="card text-end" style="border-radius: 15px;">
                                    <div class="card-header" style="background-color: #0B3E61; color: white; border-top-right-radius: 15px; border-top-left-radius: 15px;">
                                        <div class="row text-end">
                                            <div class="col-8">الاختبار</div>
                                            <div class="col-4">الاجراء</div>
                                        </div>
                                    </div>
                                    <div class="card-body" style="max-height:470px; overflow-y: auto;">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card mb-3" style="padding: 0; border: none;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('storage/images/p1.png') }}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">اختبار تحليل الشخصية</h5>
                                                                <p class="card-text">يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">
                                                <button type="button" class="btn" style="background-color: #0B3E61; color: white;">نتيجة الاختبار</button>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">
                                                <button type="button" class="btn btn-danger">حـذف</button>
                                            </div>
                                        </div>
                                        <hr style="height: 0.2px">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card mb-3" style="padding: 0; border: none;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('storage/images/p1.png') }}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">اختبار تحليل الشخصية</h5>
                                                                <p class="card-text">يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">
                                                <button type="button" class="btn" style="background-color: #0B3E61; color: white;">نتيجة الاختبار</button>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">
                                                <button type="button" class="btn btn-danger">حـذف</button>
                                            </div>
                                        </div>
                                        <hr style="height: 0.2px">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card mb-3" style="padding: 0; border: none;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('storage/images/p1.png') }}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">اختبار تحليل الشخصية</h5>
                                                                <p class="card-text">يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">
                                                <button type="button" class="btn" style="background-color: #0B3E61; color: white;">نتيجة الاختبار</button>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">
                                                <button type="button" class="btn btn-danger">حـذف</button>
                                            </div>
                                        </div>
                                        <hr style="height: 0.2px">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card mb-3" style="padding: 0; border: none;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('storage/images/p1.png') }}" class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">اختبار تحليل الشخصية</h5>
                                                                <p class="card-text">يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف يسـاعدك هذا الاختبار من خلال مجموعة من الأسئلة الدقيقة في التعرف </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">
                                                <button type="button" class="btn" style="background-color: #0B3E61; color: white;">نتيجة الاختبار</button>
                                            </div>
                                            <div class="col-2 text-center d-flex align-items-center justify-content-center">
                                                <button type="button" class="btn btn-danger">حـذف</button>
                                            </div>
                                        </div>
                                        <hr style="height: 0.2px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">settings</div>
            </div>
        </div>
    </div>

{{--        <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}


{{--                        @include('layouts.flash')--}}
{{--                        <!-- the upload in 'action' attr reference for the route upload in web.php !-->--}}
{{--                    <form class="line-space" action="{{ url('upload') }}" method="post" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        <div class="line-space">--}}
{{--                            <input class="form-control" type="file" name="image">--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <input class="form-control" type="submit" value="upload">--}}
{{--                    </form>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
@endsection
