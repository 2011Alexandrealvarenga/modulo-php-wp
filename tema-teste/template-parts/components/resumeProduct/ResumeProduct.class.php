<?php
class ResumeProduct
{

  function getHtml($obj)
  {


    $html .= '<h2 class="title">' . $obj['title'] . '</h2>';

    return $html;
  }

  function printHtml($obj)
  {
    echo $this->getHtml($obj);
  }
}
