<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link = parse_url($actual_link, PHP_URL_PATH);
$path = $actual_link;
$breadcrumbs = array_filter (explode("/", $path));
?>
<nav aria-label="breadcrumb">  
  <ol class="breadcrumb">
    @foreach($breadcrumbs as $key => $breadcrumb)
    
    <li class="breadcrumb-item @if ($key === count($breadcrumbs) ) active @endif" @if ($key === count($breadcrumbs) ) aria-current=page @endif >@if ($key === count($breadcrumbs) ){{ ucfirst($breadcrumb) }} @else<a href="#">{{ ucfirst($breadcrumb) }}</a>@endif</li>
    
    @endforeach
  </ol>  
</nav>