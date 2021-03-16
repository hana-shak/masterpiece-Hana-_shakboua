@extends('layouts.admin')
@section('title')

الردود المشتكى عليها
@endsection

@section('main')



<table class="table table-bordered table-striped table-responsive-stack">

  <thead class="thead-dark">
    <tr>
      <th>العدد</th>
      <th>رقمها</th>
      <th>عرض</th>

    </tr>
  </thead>
  <tbody>
      @php($count=0)
      @foreach($reported as $report)
      <tr>
        <td>{{$count}}</td>
        <td>{{$report->id}}</td>
        <td><a href="/reportedreply/{{$report->id}}">
            <button type="button" class="btn btn-info">عرض</button>

        </a></td>
      </tr>
      @endforeach




  </tbody>
</table>
@endsection