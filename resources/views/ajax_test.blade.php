<div id="news"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $.getJSON('feed.json', function (json) {
        let html = '<ul>';
        let i;
        for (i = 0; i < json.items.length; i++) {
            html += '<li>' + json.items[i].title + '</li>';
        }
        html += '</ul>';

        $('#news').html(html);
    })
</script>
