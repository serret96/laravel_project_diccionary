<!DOCTYPE html>
<html>
<head>
    <title>Laravel Autocomplete</title>
    <meta charset="utf-8">
    <link rel="stylesheet"href="//codeorigin.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
</head>
<body>
<h2>Laravel Autocomplete</h2>

{{ Form::open(['action' => ['DictionaryController@au'], 'method' => 'GET']) }}
{{ Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Enter name'])}}
{{ Form::submit('Search', array('class' => 'button expand')) }}
{{ Form::close() }}

<script type="text/javascript">
    $(function()
    {
        $( "#q" ).autocomplete({
            source: "search/autocomplete",
            minLength: 3,
            select: function(event, ui) {
                $('#q').val(ui.item.value);
            }
        });
    });
</script>
</body>
</html>