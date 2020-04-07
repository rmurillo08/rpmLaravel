$(document).ready(function() {
    var mytable = $("#checkBox").DataTable ({
    ajax:'data.json',
    columnDefs: [
        {
            targets:0,
            checkboxes: {
                selectRow: true
            }
        }
    ],
    select: {
        style: 'multi'
    },
    order: [[1, 'asc']]
});console.log('data in variable:: ', mytable);
$('#myform').on('submit', function (e) {
    var form = this;
    var rowsel = mytable.column(0).checkboxes.selected();
    $.each(rowsel, function (index, rowId) {
        $(form).append(
            $('<input>').attr('type', 'hidden').attr('name', 'id[]').val(rowId)
        )
    });
    $("#view-rows").text(rowsel.join(","));
    $("#view-form").text($(form).serialize());
    $('input[name="id\[\]"]', form).remove();
    e.preventDefault()
})
} );
