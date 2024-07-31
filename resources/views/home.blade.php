@extends('layouts.app')

@section('content')
<div class="container">
    <div id='calendar'></div>
</div>
<script>
    var holidays = [];
    @foreach($holidays as $key=>$holiday)
        holidays.push({
            url   : '{{url('holidays/'.$holiday->id)}}',
            title : '{{$holiday->name}}',
            start : '{{$holiday->start_date}}',
            end   : '{{$holiday->end_date}}',
        });
    @endforeach
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prevYear,prev,next,nextYear today',
        center: 'title',
        right: 'dayGridMonth,dayGridWeek,dayGridDay'
      },
      initialDate: '{{now()}}',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: holidays
    });
    calendar.render();
  });
</script>
@endsection
