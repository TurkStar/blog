@extends('layouts.app')
@section('content')
    <h1>Services</h1>

    <h1>International Telephone Input</h1>
    <form>
        <input id="phone" name="phone" type="tel">
        <button type="submit">Submit</button>
    </form>
    <script src="{{asset('js/intlTelInput.js')}}"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            preferredCountries: ['tr'],
            separateDialCode: true,
            utilsScript: "../js/utils.js",
        });
    </script>


@endsection

