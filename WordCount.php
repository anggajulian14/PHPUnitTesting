<?php
class WordCount
{
    public function countWords($sentence)
    {
        //memisahkan kata dengan spasi
        return count(explode(" ", $sentence));
    }
}
?>