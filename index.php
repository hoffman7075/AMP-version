<?php function ampify_html ($html) {
  // img to amp-img
  preg_match_all("#<img(.*?)\\/?>#", $html, $matches);
  foreach ($matches[1] as $key => $m) {
    preg_match_all('/(alt|src|width|height)=("[^"]*")/i', $m, $matches2);
    $amp_tag = '<amp-img ';
    foreach ($matches2[1] as $key2 => $val) {
      $amp_tag .= $val .'='. $matches2[2][$key2] .' ';
    }
    $amp_tag .= 'width="1" height="1.47" layout="responsive"';
    $amp_tag .= '>';
    $amp_tag .= '</amp-img>';
    $html = str_replace($matches[0][$key], $amp_tag, $html);
  }

  // remove onlick
  $html = preg_replace('`onclick=".*?"([ >])`', '$1', $html);

  // remove inline styles
  $html = preg_replace('`style=".*?"([ >])`', '$1', $html);

  return $html;
} ?>

<!doctype html>
<html amp lang="ru">
<head>
  <meta charset="utf-8">
  <title>title</title>
  <link rel="canonical" href="">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Catalog",
      "mainEntityOfPage": "Ссылка на основную версию",
      "headline": "title",
      "description": "description",
      "image": {
        "@type": "SITENAME Logo",
        "url": "PATH_TO_LOGO",
        "height": 101,
        "width": 100
      }
    }
  </script>
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
  <style amp-custom>
  </style>
  <!-- Load AMP -->
  <script async src="https://cdn.ampproject.org/v0.js"></script>

  <!-- Load amp-analytics -->
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
</head>

<body>
  <amp-analytics type="gtag" data-credentials="include">
    <script type="application/json">
    {
      "vars" : {
        "gtag_id": "UA-141782041-1",
        "config" : {
          "UA-141782041-1": {}
        }
      }
    }
    </script>
  </amp-analytics>

  <?=ampify_html($detail_text)?>
</body>

</html>
