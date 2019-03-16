<?php
function makeTable($title, $heads, $data)
{
    $wrap = true;
    $max_width = "100";
    $width = sizeof($heads);
    $height = sizeof($data);
    /* Create table title */
    echo "
<h1 style='text-align:center;'>$title</h1>
<table style='margin-left:auto; margin-right:auto;' data-sortable>
    <thead>
    <!--<tr>
        <th colspan='$width'>$title</th>
    </tr>-->
    <tr>";
    /* Create column titles */
    for($i = 0; $i < $width; $i++)
    {
        echo "<th>$heads[$i]</th>";
    }
    echo"</tr></thead><tbody>";
    /* Create data elements */
    for($j = 0; $j < $height; $j++)
    {
        echo "<tr>";
        /* Set style */
        for($k = 0; $k < $width; $k++)
        {
            if(!isset($data[$j][$k]))
            {
                $data[$j][$k] = null;
            }
            $temp = $data[$j][$k];
            if(is_int($temp))
            {
                $style1 = "text-align:right;";
            }
            else
            {
                $style1 = "";
            }
            if($wrap)
            {
                $style2 = "word-wrap:break-word;";
            }
            else
            {
                $style2 = "";
            }
            if($max_width)
            {
                $style3 = "max-width:".$max_width."px;";
            }
            else
            {
                $style3 = "";
            }
            echo "<td style='".$style1.$style2.$style3."'>";
            /* Display server data */
            echo $data[$j][$k];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
}
?>