<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application | Main Panel</title>
    <link rel="icon" href="../images/favicon.png">
    @include('public.libraries.styles')
</head>

<body class="h-dvh max-md:h-fit">
    @include('public.components.navbar')
    @yield('content')
</body>
@include('public.libraries.scripts')
<script>
    // set page title to appName
    document.title = `${appName} | Main Panel`;
</script>
<script>
    function locatePanelItem(panelItem) {
        window.location.href = "../main-panel/" + panelItem;
    }
</script>

</html>
