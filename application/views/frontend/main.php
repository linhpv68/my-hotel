<?php
$ss_name = $this->session->userdata('userInfo');
$title =$title;
$subview =$subview;

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title><?=$title?></title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Favicon -->
	<link rel="shortcut icon" href="template/backend/assets/images/logo_factory.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
	<link rel="stylesheet" href="template/fontend/css/font-awesome.css"/>
	<link rel="stylesheet" href="template/fontend/css/lineicons.css"/>
	<link rel="stylesheet" href="template/fontend/css/weather-icons.css"/>
	<link rel="stylesheet" href="template/fontend/css/bootstrap.css"/>
	<link rel="stylesheet" href="template/fontend/css/styles.css"/>
</head>
<body>
<!--header-->
<?php $this->load->view('frontend/header')?>
<!--End header-->
<div class="content">
<?php $this->load->view($subview,array(
	'result' => $result,
	'input' => $input,
));?>
</div>

<!--foter-->
<?php $this->load->view('frontend/footer')?>
<!--end foter-->

<script src="template/fontend/js/jquery.js"></script>
<script src="template/fontend/js/moment.js"></script>
<script src="template/fontend/js/bootstrap.js"></script>
<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYeBBmgAkyAN_QKjAVOiP_kWZ_eQdadeI&amp;callback=initMap&amp;libraries=places"></script>
<script src="template/fontend/js/owl-carousel.js"></script>
<script src="template/fontend/js/blur-area.js"></script>
<script src="template/fontend/js/icheck.js"></script>
<script src="template/fontend/js/gmap.js"></script>
<script src="template/fontend/js/magnific-popup.js"></script>
<script src="template/fontend/js/ion-range-slider.js"></script>
<script src="template/fontend/js/sticky-kit.js"></script>
<script src="template/fontend/js/smooth-scroll.js"></script>
<script src="template/fontend/js/fotorama.js"></script>
<script src="template/fontend/js/bs-datepicker.js"></script>
<script src="template/fontend/js/typeahead.js"></script>
<script src="template/fontend/js/quantity-selector.js"></script>
<script src="template/fontend/js/countdown.js"></script>
<script src="template/fontend/js/window-scroll-action.js"></script>
<script src="template/fontend/js/fitvid.js"></script>
<script src="template/fontend/js/youtube-bg.js"></script>
<script src="template/fontend/js/custom.js"></script>
<!--date picker -->
<script>
	$(function () {

		var bindDatePicker = function () {
			$(".date").datetimepicker({
				format: 'YYYY-MM-DD',
				icons: {
					time: "fa fa-clock-o",
					date: "fa fa-calendar",
					up: "fa fa-arrow-up",
					down: "fa fa-arrow-down"
				}
			}).find('input:first').on("blur", function () {
				// check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
				// update the format if it's yyyy-mm-dd
				var date = parseDate($(this).val());

				if (!isValidDate(date)) {
					//create date based on momentjs (we have that)
					date = moment().format('YYYY-MM-DD');
				}

				$(this).val(date);
			});

		};

		var isValidDate = function (value, format) {
			format = format || false;
			// lets parse the date to the best of our knowledge
			if (format) {
				value = parseDate(value);
			}

			var timestamp = Date.parse(value);

			return isNaN(timestamp) == false;
		};

		var parseDate = function (value) {
			var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
			if (m)
				value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

			return value;
		};

		bindDatePicker();
	});


	function changeDateFormat(inputDate) {  // expects Y-m-d
		var splitDate = inputDate.split('-');
		if (splitDate.count == 0) {
			return null;
		}

		var year = splitDate[0];
		var month = splitDate[1];
		var day = splitDate[2];

		return day + '-' + month + '-' + year;
	}

</script>
<!--end date picker-->
</body>

<!-- Mirrored from remtsoy.com/tf_templates/tf-bookify-demo/hotel-index-4.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 08:09:13 GMT -->
</html>

