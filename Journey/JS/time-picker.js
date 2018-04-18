$('#timestart').calendar({
    type: 'time',
    endCalendar: $('#timened')
});
$('#timened').calendar({
    type: 'time',
    startCalendar: $('#timestart')
});
