<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css"/>
    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    {{ style(mix('css/backend.css')) }}

    @stack('after-styles')
</head>

<body class="{{ config('backend.body_classes') }}">
    @include('backend.includes.header')

    <div class="app-body">
        @include('backend.includes.sidebar')

        <main class="main">
            @include('includes.partials.logged-in-as')
            {!! Breadcrumbs::render() !!}

            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="content-header">
                        @yield('page-header')
                    </div><!--content-header-->

                    @include('includes.partials.messages')
                    @yield('content')
                </div><!--animated-->
            </div><!--container-fluid-->
        </main><!--main-->

        @include('backend.includes.aside')
    </div><!--app-body-->

    @include('backend.includes.footer')


    <!-- Scripts -->
    @stack('before-scripts')
    {!! script(mix('js/backend.js')) !!}
    @stack('after-scripts')
    <script type="text/javascript" src="/DataTables/datatables.min.js"></script>

    <script>
        $(document).ready( function () {
            var table = $('#products').DataTable( {
                ajax: {
                    url: 'all/products'
                    //dataSrc: 'data'
                },
                "columns": [
                    { "data": function (data) {
                            return '<a href="products/'+data.id+'/edit">'+data.name+'</a>'
                        }, className: "centre"
                    },
                    { "data": function (data) {
                            var url = data.image_url
                            return "<img src='" +url+ "' height='30' alt='" +data.name+ "'>"
                        }, className: "centre"
                    },
                    { "data": "price" , className: "centre" },
                    { "data": function (data) {
                            var visible = data.visible
                            if (visible == "1"){
                                return "Yes"
                            } else {
                                return "No"
                            }
                        }, className: "centre"
                    },
                ],
                //select: true
            } );
        } )
    </script>
</body>
</html>
