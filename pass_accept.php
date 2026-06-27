<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $password = $_POST["pws"] ?? '';
    $secret = $_POST["srt"] ?? '';
    $name = $_POST["fName"] ?? '';

    $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');
    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

    if (empty($password) || empty($secret) || empty($name)) {
        echo "All fields are required!";
        exit;
    }

    $correctPassword = base64_decode("VGgxNV8xNV81VFIwbjY");

    if ($password === $correctPassword && $secret === "1352") {

        echo "<h2>Access granted, $name</h2>";

        echo "<script>
            var div_1 = document.querySelector('#d1');
            var div_2 = document.querySelector('#d2');
            var header = document.querySelector('#h');

            var div_style = window.getComputedStyle(div_1);
            var header_style = window.getComputedStyle(header);

            function A1() {
                if (div_1.children[0].nodeName === 'DIV') {
                    console.log('You nailed it!');
                    if (div_2.children[0].nodeName === 'H1') {
                        div_2.children[0].innerHTML = 'This is correct too!';
                        A3();
                    }
                }
            }

            function A3() {
                if (div_style.textAlign === 'center' && div_style.fontFamily === 'fantasy') {
                    console.log('Just one more step');
                    if (header_style.color === 'rgb(255, 99, 71)' &&
                        header_style.transform === 'matrix(-1, 0, 0, -1, 0, 0)') {
                        alert('AMAZING YOU DID IT !!!');
                    }
                }
            }

            A1();
        </script>";

    } else {
        echo "Access denied!";
    }
}
?>