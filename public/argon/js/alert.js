$('.warning-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This action is irreversible. Do you want to continue?',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
        dangerMode: true
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});