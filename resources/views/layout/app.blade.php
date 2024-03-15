@props(["title", "backUrl" => null])

<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ "" }}</title>
    @vite(['resources/scss/app.scss'])
    <script src="https://kit.fontawesome.com/9e115321b2.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
  </head>

  <body id="app" class="bg-light">
    <x-ui::navigation.navbar />

    <main class="py-4">
        <div class="container-xl vstack gap-4">          
            <x-ui::flash-messages />
            <x-ui::page-header :$backUrl text="{{ $title }}" :buttons="$buttons ?? null" />
            {{ $slot }}
        </div>
    </main>

    @stack('bottom')
    @vite(['resources/js/app.js'])
    @stack('jsFooter')
  </body>
</html>
