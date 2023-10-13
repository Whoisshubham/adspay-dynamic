// create modal on button tag
$(document).on('click', 'button.add_model', function () {
    $("div.add_model").load($(this).data('href'), function () {
        $('div.add_model').modal('show');
    });
});

// create modal on anchor tag
$(document).on('click', 'a.add_model', function () {
    $("div.add_model").load($(this).data('href'), function () {
        $('div.add_model').modal('show');
    });
});


// edit modal on button tag
$(document).on('click', 'button.edit_model', function () {
    console.log("fff");
    $("div.edit_model").load($(this).data('href'), function () {
        $('div.edit_model').modal('show');
    });
});

// edit modal on button tag
$(document).on('click', 'button.view_subscription_model', function () {
    $("div.view_subscription_model").load($(this).data('href'), function () {
        $('div.view_subscription_model').modal('show');
    });
});

// edit modal on anchor tag
$(document).on('click', 'a.edit_model', function () {
    $("div.edit_model").load($(this).data('href'), function () {
        $('div.edit_model').modal('show');
    });
});


// view modal on button tag
$(document).on('click', 'button.view_model', function () {
    $("div.view_model").load($(this).data('href'), function () {
        $('div.view_model').modal('show');
    });
});

// view modal on anchor tag
$(document).on('click', 'a.view_model', function () {
    $("div.view_model").load($(this).data('href'), function () {
        $('div.view_model').modal('show');
    });
});

$(document).on('click', '.cancel-model', function () {

        $('div.add_model').modal('hide');

});
// add_form
$(document).on('submit', 'form#add_form', function (e) {
    e.preventDefault();
    var data = new FormData(this);

    $.ajax({
        cache: false,
        contentType: false,
        processData: false,
        url: $(this).attr("action"),
        method: $(this).attr("method"),
        dataType: "json",
        data: data,
        success: function (response) {



            if (response.responseCode == 200 && response.sweetAlert == 'on') {
                swal("Complaint Registered!", "" + response.complaint_no + "", "success").then(function () {
                    location.reload();
                }
                );

            }

            else if (response.responseCode == '0' && response.sweetAlert == 'on') {
                swal("Complaint Registration issue!", "" + response.complaint_no + "", "error").then(function () {
                    location.reload();
                }
                );

            }
            else if (response.responseCode == 200) {
                toastr.success(response.responseMessage);
                //$('div.add_form').modal('hide');
                location.reload();
            } else {
                toastr.error(response.responseMessage);
            }
        }
    });
});


// edit_form
$(document).on('submit', 'form#edit_form', function (e) {
    e.preventDefault();
    var data = new FormData(this);

    $.ajax({
        cache: false,
        contentType: false,
        processData: false,
        url: $(this).attr("action"),
        method: $(this).attr("method"),
        dataType: "json",
        data: data,
        success: function (response) {
            if (response.responseCode == 200) {
                toastr.success(response.responseMessage);
                //$('div.edit_form').modal('hide');
                location.reload();
            } else {
                toastr.error(response.responseMessage);
            }
        }
    });
});


$(document).on('click', '.status', function (e) {
    e.preventDefault();
    $.ajax({
        cache: false,
        contentType: false,
        processData: false,
        url: $(this).attr("href"),
        method: "post",
        dataType: "json",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function (response) {
            if (response.responseCode == 200) {
                toastr.success(response.responseMessage);
                location.reload();
            } else {
                toastr.error(response.responseMessage);
            }
        }
    });
});

$(document).on('click', '.destroy', function (e) {
    e.preventDefault();
    $.ajax({
        cache: false,
        contentType: false,
        processData: false,
        url: $(this).attr("href"),
        method: "post",
        dataType: "json",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function (response) {
            if (response.responseCode == 200) {
                toastr.success(response.responseMessage);
                location.reload();
            } else {
                toastr.error(response.responseMessage);
            }
        }
    });
});



$(document).on('click', '.close', function (e) {
    $('iframe').contents().find('video').each(function () {
        this.currentTime = 0;
        this.pause();
    });
    $('.modal-backdrop').remove();
});

$(document).on('click', '.close-button', function (e) {
    $('iframe').contents().find('video').each(function () {
        this.currentTime = 0;
        this.pause();
    });
    $('.modal-backdrop').remove();

});



// validation in form all page

function alphaonly(evt) {
    var keyCode = (evt.which) ? evt.which : evt.keyCode
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
        return false;
}

// valide mobile number
function numbersonly(e) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32) return false;
    var unicode = e.charCode ? e.charCode : e.keyCode;

    if (unicode != 8) { //if the key isn't the backspace key (which we should allow)
        if (unicode < 48 || unicode > 57) //if not a number
            return false //disable key press
    }
}



$('.submitForm').on('submit', function (e) {

    e.preventDefault();
    $.ajax({
        url: $(this).attr("action"),
        type: $(this).attr("method"),
        dataType: "JSON",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (data) {

            if (data.responseCode == "200") {
                toastr.success(data.responseMessage);
                setTimeout(function () {
                    window.location.href = data.responseUrl;
                }, 1000);
            } else if (data.responseCode == "403") {
                toastr.error(data.responseMessage);


            } else {
                toastr.error("Somthing Went Wrong!")
            }


        }
    });
});
