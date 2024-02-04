<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('index') }}">MYPRO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('create') }}">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>