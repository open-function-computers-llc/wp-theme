<?php

wp_footer();

echo site()->render("footer", [
    "powered-by" => "ofco-better-wordpress",
    "powered-by-url" => "https://github.com/open-function-computers-llc/better-wordpress",
    "year" => date("Y"),
]);
