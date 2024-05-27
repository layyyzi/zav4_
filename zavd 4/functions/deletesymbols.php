<?php

    function deletesymbols(string $filename) : string
    {
        $pattern = '/[\W]/';

        $info = pathinfo($filename);
        $name = $info['filename']; // Ім'я файлу без розширення
        $extension = $info['extension']; // Розширення файлу

        $name = preg_replace($pattern, '',$name);

        return $name.".".$extension;
    }
