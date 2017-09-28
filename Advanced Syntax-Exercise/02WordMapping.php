<form action="">
    <div>
        <textarea name="text" id="input" cols="30" rows="3" title="text"></textarea>
    </div>
    <div>
        <input type="submit" value="Count words">
    </div>
</form>
<?php
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    preg_match_all("/[a-zA-Z]+/", $text, $words);
    $words = array_map("strtolower", $words[0]);

    $wordsCount = [];

    for ($i = 0; $i < count($words); $i++) {
        $word = $words[$i];
        if (!isset($wordsCount[$word])) {
            $wordsCount[$word] = 0;
        }
        $wordsCount[$word]++;
    }
    echo buildTable($wordsCount);
}


    function buildTable($items)
    {
        $output = "<table border='2'>";
        foreach ($items as $key => $val) {
            $output .= "<tr><td>{$key}</td><td>{$val}</td></tr>";
        }
        $output .= "</table>";
        return $output;
    }




