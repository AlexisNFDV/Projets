$(document).ready(function () {

    const rangeEvents = (index) =>
    {
        $('#budg').keyup(_ => {
            const budget = Number($('#budg').val());

            $('#range-' + index).attr('max', budget * parseFloat($('#range-' + index).data('ratio')));
            $('#range-' + index).val(budget * parseFloat($('#range-' + index).data('ratio')));
            $('#display-' + index).html($('#range-' + index).val());

        });

        $('#range-' + index).on('input', _ => {
            const budget = Number($('#budg').val());
            const total = Number($('#range-1').val()) + Number($('#range-2').val()) + Number($('#range-3').val()) + Number($('#range-4').val());
            const remaining = budget - total;

            $('#display-' +index).html($('#range-' + index).val());

            for (let i = 0; i <= 4; i++) {
                if (i === index) continue;
                $('#range-' + i).attr('max', Number($('#range-' + i).val()) + remaining);
                $('#display-' + i).html($('#range-' + i).val());
            }
        });
    }

    for (let i = 0; i <= 4; i++) {
        rangeEvents(i);
    }
});