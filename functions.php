<?php
defined('LEFGRAET_URL') or define('LEFGRAET_URL', 'http://tariq-yousef.com/GT/res.php?word=');

function get_content($lemma) {
    $curl = curl_init();  

    curl_setopt($curl, CURLOPT_URL, LEFGRAET_URL . $lemma);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $content = curl_exec($curl);

    curl_close($curl);

    return $content;
}

function extract_content($html) {
    $start = '<!-- Start Word Statistics -->';
    $end = '<!-- End Word Statistics -->';

    $html_part = stristr($html, $start);
    $html_part = str_replace($start, "", $html_part);
    $content = stristr($html_part, $end, true);

    return $content;
}

function load_data($lemmata) {

    if (!empty($lemmata['lemmata'])) {
        $lemmata = $lemmata['lemmata'];
        $lemmata = str_replace(["\r\n", "\r", "\n"], "\n", $lemmata);
        $lemmata = explode("\n", $lemmata);
        $lemmata = array_map('trim', $lemmata);
        $lemmata = array_map('urlencode', $lemmata);

        foreach ($lemmata as $lemma) {
            $html = get_content($lemma);

            if (false !== $html) {
                echo extract_content($html);
                flush();
            }
        }
    }

}

?>