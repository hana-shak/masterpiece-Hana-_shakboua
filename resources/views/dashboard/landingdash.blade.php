@extends('layouts.admin')
@section('title')
صفحة متحكم لموقع
@endsection
@section('brief')
لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...

وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص النهائية المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع الكثير من الملاحظات او الانتقادات للتصميم الاساسي.

وخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد. من كتاب "حول أقاصي الخير والشر"


@endsection

@section('main')
<table class="table table-bordered table-striped table-responsive-stack">
    <thead class="thead-light">
      <tr>
        <th>عنوان الرد المشتكى عليه</th>
        <th>مناقشة الرئيسية </th>
        <th>صاحب الرد</th>
        {{-- <th>صاحب الشكوى</th> --}}
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td>
            </td>
         <td></td>
        {{-- <td></td> --}}
      </tr>


    </tbody>
  </table>
@endsection


