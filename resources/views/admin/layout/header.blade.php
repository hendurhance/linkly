<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title') | Linkly</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">

    <!-- CSS Front Template -->

    <link rel="preload" href="/assets/css/theme.min.css" data-hs-appearance="default" as="style">
    <link rel="preload" href="/assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

    <style data-hs-appearance-onload-styles>
        * {
            transition: unset !important;
        }

        body {
            opacity: 0;
        }
    </style>

    @include('admin.layout.scripts')
    
    <!-- Toast CSS -->
    <link rel="stylesheet" href="/assets/vendor/notify/css/notify.css">
    <link rel="stylesheet" href="/assets/vendor/notify/css/app.css">
</head>