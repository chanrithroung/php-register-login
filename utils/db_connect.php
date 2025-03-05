<?php 
    function db_connnet():mysqli {
        return new mysqli('localhost', 'root', '', 'session', 3305);
    }

?>