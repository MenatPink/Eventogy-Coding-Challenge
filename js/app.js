$('document').ready(function () {
    $('#dateSubmit').click(function () {
        var timeStampInput = $('timeStampInput').val();
        var offsetStampInput = $('#offsetStampInput').val();

        if (timeStampInput == undefined) {
            var timeStampInput = null
        }
        if (offsetStampInput == undefined) {
            var offsetStampInput = null
        }
        $.ajax({
            type: "GET",
            url: "EventogyMethods.php",
            data: {
                timeStamp: timeStampInput,
                offset: offsetStampInput,
            },
            success: function (data) {
                return data;
            }
        })
    });
});