<?php
function Score($score1,$score2,$score3)
{
    $total = $score1 + $score2 + $score3;
    if($total > 210 ){
        echo "合計点は" . $total . "なので合格です";
    }else{
        echo "合計点は" . $total . "なので不合格です";
    }
}

Score(80,69,60);

function triangle($bottom,$top)
{
    $i = $bottom * $top / 2 ;
    return $i;
}

echo triangle(5,5);
function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . " ";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);