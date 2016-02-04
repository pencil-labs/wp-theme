<?php /* Template Name: Landing Page Template */ ?>

<head>
  <script src="<?php bloginfo('template_url'); ?>/bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
  <link rel="import" href="http://msfernandes.local/pencillabs/wp-content/themes/pencillabs-theme/public/components/pencil-banner.html">
  <link rel="import" href="http://msfernandes.local/pencillabs/wp-content/themes/pencillabs-theme/public/components/pencil-card-container.html">
</head>
<body>
  <pencil-banner></pencil-banner>
  <pencil-card-container></pencil-card-container>
</body>