$(document).ready(function () {
    console.log("ready!");
    $(this).on('click', '.showDiv', showProcess);
    $(this).on('click', '.restore', hiddeOptions);
});

function showProcess() {
    let value = $(this).val();
    switch (parseInt(value)) {
        case 1:
            $('#blockButtons').removeClass('block');
            $('#blockButtons').addClass('none');
            $('#process').css('display','block')
            $('#process').addClass('block');
            break;
        case 2:
            $('#blockButtons').removeClass('block');
            $('#blockButtons').addClass('none');
            $('#reports').css('display','block')
            break;
        case 3:
            $('#blockButtons').removeClass('block');
            $('#blockButtons').addClass('none');
            $('#quality').css('display','block')
            break;
        case 4:
            $('#blockButtons').removeClass('block');
            $('#blockButtons').addClass('none');
            $('#change').css('display','block')
            break;
        case 5:
            $('#blockButtons').removeClass('block');
            $('#blockButtons').addClass('none');
            $('#consumption').css('display','block')
            break;
        case 6:
            $('#blockButtons').removeClass('block');
            $('#blockButtons').addClass('none');
            $('#inventories').css('display','block')
            break;
        case 7:
            $('#blockButtons').removeClass('block');
            $('#blockButtons').addClass('none');
            $('#infotec').css('display','block')
            break;
        default:
            break;
    }
}

function hiddeOptions() {
    $('.hidden').each(function (i) {
        $(this).css('display','none');
    });
    $('#blockButtons').addClass('block');
}
