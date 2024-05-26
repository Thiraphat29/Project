<html>
<head>
</head>

<body>
	<script>
	$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

	});
		
	$(function () {
  		$('[data-toggle="tooltip"]').tooltip()
	});
	</script>

	<a id="back-to-top" href="#" class="btn btn-danger btn-lg back-to-top" role="button">
		<strong>^</strong>
		<span class="glyphicon glyphicon-chevron-up"></span>
	</a>
</body>
</html>