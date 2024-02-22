<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ "" }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9e115321b2.js" crossorigin="anonymous"></script>
  </head>

  <body id="app" class="bg-light">
    <div class="d-flex flex-column vw-100 vh-100">
        <main class="flex-grow-1">
            {{ $slot }}
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/js/app.js'])
    {{ $jsFooter ?? null }}
  </body>
</html>
