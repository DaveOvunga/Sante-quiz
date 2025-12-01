<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Titre par défaut')</title>

    <!-- REVOLUTION SETTINGS STYLES -->
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!--  -->
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"/>


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/SANT21.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/santeQuiz.png') }}" type="image/x-icon">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>

    {{-- Header --}}
    

    {{-- Contenu principal --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @if (!isset($hideFooter) || !$hideFooter)
        @include('users.footer')
    @endif

    

    <!-- JS -->
 <!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/knob.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Lightbox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>


<!-- Form submit -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery.form.min.js') }}"></script>

<script>
	(function($) {
		$("#contact_form").validate({
			submitHandler: function(form) {
				var form_btn = $(form).find('button[type="submit"]');
				var form_result_div = '#form-result';
				$(form_result_div).remove();
				form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
				var form_btn_old_msg = form_btn.html();
				form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
				$(form).ajaxSubmit({
					dataType:  'json',
					success: function(data) {
						if( data.status == 'true' ) {
							$(form).find('.form-control').val('');
						}
						form_btn.prop('disabled', false).html(form_btn_old_msg);
						$(form_result_div).html(data.message).fadeIn('slow');
						setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
					}
				});
			}
		});
	})(jQuery);
</script>
</body>
</html>
