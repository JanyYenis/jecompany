<!DOCTYPE html>
<html>
<head>
    <style>
        html, body {
            padding: 0;
            margin: 0;
        }
    </style>
</head>

@section('css')
@show

<body>
    <div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
            <tbody>
                <tr>
                    <td align="center" valign="center" style="text-align:center; padding: 40px">
                        <a href="{{ url('/') }}" rel="noopener" target="_blank">
                            <img alt="Logo" src="{{ asset('assets/media/logos/logo-default.svg') }}" style="min-height: 50px;">
                        </a>
                    </td>
                </tr>
                <tr>
                    @yield('content')
                </tr>

                <tr>
                    <td align="center" valign="center"
                        style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                        <p>Floor 5, 450 Avenue of the Red Field, SF, 10050, USA.</p>
                        <p> Copyright © <a href="{{ url('/') }}" rel="noopener" target="_blank">JE Company</a>.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    @section('scripts')
    @show
</body>
</html>