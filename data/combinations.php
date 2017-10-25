 <?php 

// your string
$letters = 'ABCDE';

// convert to array
$letters_array = str_2_array($letters);

echo 'The number of two charcter combinations from that string is '.count($result = get_combos($letters_array, 5))."\n\n";

echo 'The following is the combinations array'."\n\n";

print_r(array_2d_to_1d($result));

function get_combos($input, $combo_length)
{
    $input = array_values($input);
    $code = '';
    $cnt = count($input);
    $ret = array();
    $i0 = -1;
    for($i=0;$i<$combo_length;++$i)
    {
        $k = 'i'.($i+1);
        $code .= 'for($'.$k.'=$i'.$i.'+1; $'.$k.'< $cnt-'.($combo_length-$i-1).'; ++$'.$k.') ';
    }
    $code .= '$ret[] = array($input[$i'.implode('], $input[$i',range(1,$combo_length)).']);';
    eval($code);
    return $ret;
}

function str_2_array($input)
{
    for($i = 0, $len = strlen($input); $i < $len; $i++)
    {
        $rtn[] = $input[$i];
    }
    return $rtn;
}

function array_2d_to_1d($input)
{
    foreach($input as $key => $value)
    {
        $rtn[$key] = implode($value);
    }
    return $rtn;
}

?> 