<!DOCTYPE html>
<html lang="en-US">

<body>

    <h1>My Web Page</h1>

    <p>Hello everybody!</p>

    <p>Translate this page:</p>

    <div id="google_translate_element"></div>
    <select name="" id="">
        <option value="ind"></option>
    </select>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="assets/js/google_translate.js"></script>

    <p>You can translate the content of this page by selecting a language in the select box.</p>

</body>

</html>