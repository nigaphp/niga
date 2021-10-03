<?php if ($this->getDebug() === false): ?>
<div class="container">
  <h1 class="text-danger">Oops 🙄 404 Page Not Found!</h1>
  <p>Sorry this page is not found</code></p>
  <small>Maybe try to go <a href="/">Home?</a></small>
</div>
<?php else: ?>
<div class="container">
    <div class="text-center">
      <h2 class="text-primary">Nigatedev PHP framework for saving time</h2>
      <img width="100" height="auto" src="images/nigatedev.png"></img>
    </div>
    <p class="text-danger">ERROR: <code>404 Page Not Found!</code></p>
      You are seeing this because the debug mode is enabled.
    <p>You can use the following command <span><code>bin/niga m:c HomeController</code></span> to create a route that point to /home for example.</p>
</div>
<?php endif ?>
