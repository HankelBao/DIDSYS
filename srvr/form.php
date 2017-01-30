<?php
class form {
    public static function invisible($name, $value) {
        return "<input name='".$name."' value='".$value."' style='display:none'\>";
    }
}
?>