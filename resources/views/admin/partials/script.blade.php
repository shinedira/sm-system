<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/64698a4251.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="{{ asset('stisla/js/stisla.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{ asset('stisla/js/scripts.js') }}"></script>
<script>
    $(function() {
        $('.loading').hide();

        $('form').submit(function(e) {
            $('.loading').show();
        })
    })

    var token = $('meta[name="csrf-token"]').attr('content')
</script>