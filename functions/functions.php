<?php
function escape($string)
{
    return htmlentities($string);
}
function ugandan_shillings($value)
{
    $value = number_format($value, 2, ".", ",");
    return $value . " UGX";
}

function seperators($value)
{
    $value = number_format($value, 0, ".", ",");
    return $value." ";
}
function format_date($date) {
    $create_date = date_create($date);
    $new_date = date_format($create_date, 'jS M Y');
    return $new_date;
}
function limit_words($string, $word_limit) {
    $words = explode(" ", $string);
    if (count($words) > $word_limit) {
        return implode(" ", array_splice($words, 0, $word_limit));
    } else {
        return $string;
    }
}
function redirect($message, $url) {
    ?>
    <script type="text/javascript">
        //        function Redirect()
        //        {
        //            window.location = "<?php echo $url; ?>";
        //        }
        //        alert('<?php echo $message; ?>');
               // setTimeout(redirect(), 10);
        alert('<?php echo $message; ?>');
        window.location = "<?php echo $url; ?>"
    </script>
    <?php
}
?>