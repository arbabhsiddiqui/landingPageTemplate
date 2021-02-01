<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <link rel="icon" type="image/jpg" href="<?= URLROOT ?>/images/logo.jpg" />
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5N5VNZ2');
  </script>
  <!-- End Google Tag Manager -->


  <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="<?= URLROOT ?>/css/style.css" />
</head>
<!-- Facebook Pixel Code -->
<script>
  ! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '{your-pixel-id-goes-here}');
  fbq('track', 'PageView');
</script>
<noscript>
  <?php if (!empty($data['home_page_details']->facebook_pixel)) { ?>

    <img height="1" width="1" style="display:none" src="<?= $data['home_page_details']->facebook_pixel ?>" />
  <?php } else { ?>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={your-pixel-id-goes-here}&ev=PageView&noscript=1" />
  <?php } ?>


</noscript>
<!-- End Facebook Pixel Code -->

<body <?php if (!empty($data['home_page_details']->bg_image)) {
      ?>style="background:url(<?= URLROOT ?>/images/homepage/<?= $data['home_page_details']->bg_image ?>) !important;background-size: cover !important;" <?php } else { ?> style=`background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='200' viewBox='0 0 160 80' %3E%3Cg fill='%23B0A090' %3E%3Cpolygon points='0 10 0 0 10 0' /%3E%3Cpolygon points='0 40 0 30 10 30' /%3E%3Cpolygon points='0 30 0 20 10 20' /%3E%3Cpolygon points='0 70 0 60 10 60' /%3E%3Cpolygon points='0 80 0 70 10 70' /%3E%3Cpolygon points='50 80 50 70 60 70' /%3E%3Cpolygon points='10 20 10 10 20 10' /%3E%3Cpolygon points='10 40 10 30 20 30' /%3E%3Cpolygon points='20 10 20 0 30 0' /%3E%3Cpolygon points='10 10 10 0 20 0' /%3E%3Cpolygon points='30 20 30 10 40 10' /%3E%3Cpolygon points='20 20 20 40 40 20' /%3E%3Cpolygon points='40 10 40 0 50 0' /%3E%3Cpolygon points='40 20 40 10 50 10' /%3E%3Cpolygon points='40 40 40 30 50 30' /%3E%3Cpolygon points='30 40 30 30 40 30' /%3E%3Cpolygon points='40 60 40 50 50 50' /%3E%3Cpolygon points='50 30 50 20 60 20' /%3E%3Cpolygon points='40 60 40 80 60 60' /%3E%3Cpolygon points='50 40 50 60 70 40' /%3E%3Cpolygon points='60 0 60 20 80 0' /%3E%3Cpolygon points='70 30 70 20 80 20' /%3E%3Cpolygon points='70 40 70 30 80 30' /%3E%3Cpolygon points='60 60 60 80 80 60' /%3E%3Cpolygon points='80 10 80 0 90 0' /%3E%3Cpolygon points='70 40 70 60 90 40' /%3E%3Cpolygon points='80 60 80 50 90 50' /%3E%3Cpolygon points='60 30 60 20 70 20' /%3E%3Cpolygon points='80 70 80 80 90 80 100 70' /%3E%3Cpolygon points='80 10 80 40 110 10' /%3E%3Cpolygon points='110 40 110 30 120 30' /%3E%3Cpolygon points='90 40 90 70 120 40' /%3E%3Cpolygon points='10 50 10 80 40 50' /%3E%3Cpolygon points='110 60 110 50 120 50' /%3E%3Cpolygon points='100 60 100 80 120 60' /%3E%3Cpolygon points='110 0 110 20 130 0' /%3E%3Cpolygon points='120 30 120 20 130 20' /%3E%3Cpolygon points='130 10 130 0 140 0' /%3E%3Cpolygon points='130 30 130 20 140 20' /%3E%3Cpolygon points='120 40 120 30 130 30' /%3E%3Cpolygon points='130 50 130 40 140 40' /%3E%3Cpolygon points='120 50 120 70 140 50' /%3E%3Cpolygon points='110 70 110 80 130 80 140 70' /%3E%3Cpolygon points='140 10 140 0 150 0' /%3E%3Cpolygon points='140 20 140 10 150 10' /%3E%3Cpolygon points='140 40 140 30 150 30' /%3E%3Cpolygon points='140 50 140 40 150 40' /%3E%3Cpolygon points='140 70 140 60 150 60' /%3E%3Cpolygon points='150 20 150 40 160 30 160 20' /%3E%3Cpolygon points='150 60 150 50 160 50' /%3E%3Cpolygon points='140 70 140 80 150 80 160 70' /%3E%3C/g%3E%3C/svg%3E")`; <?php } ?>>

  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <?php
    if (!empty($data['home_page_details']->google_tag_manager)) { ?>
      <iframe src="<?= $data['home_page_details']->google_tag_manager ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    <?php } else { ?>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N5VNZ2" height="0" width="0" style="display:none;visibility:hidden"></iframe>

    <?php } ?>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->