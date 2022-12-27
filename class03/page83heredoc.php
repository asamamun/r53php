<?php
$title = "Card title11";
$card = <<<ABC
<div class="card mb-3">
<img src="..." class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">{$title}</h5>
  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</div>
</div>
<div class="card">
<div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
</div>
<img src="..." class="card-img-bottom" alt="...">
</div>
ABC;

echo $card;