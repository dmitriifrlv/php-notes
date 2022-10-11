<?php include 'inc/header.php'; ?>
      <a class="navbar-brand" href="#">Traversy Media</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/php-crash/feedback/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/php-crash/feedback/feedback.php">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/php-crash/feedback/about.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="container d-flex flex-column align-items-center">
      <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="">
      <h2>Feedback</h2>
      <p class="lead text-center">Leave feedback for Traversy Media</p>
      <form action="" class="mt-4 w-75">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Feedback</label>
          <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback"></textarea>
        </div>
        <div class="mb-3">
          <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
        </div>
      </form>
      <?php include 'inc/footer.php'; ?>
