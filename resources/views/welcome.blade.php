<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form action="{{route('user.students')}}" method="POST">@csrf
  <div class="container mt-5">
    <div class="row">
 
  <!-- Name -->
  <div class="col-md-6 mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
  </div>

  <!-- Email -->
  <div class="col-md-6 mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
  </div>

  <!-- Phone -->
  <div class="col-md-6 mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
  </div>

  <!-- Address -->
  <div class="col-md-6 mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
  </div>

  <!-- Message -->
  <div class="col-12 mb-3">
    <label for="message" class="form-label">Message</label>
    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message"></textarea>
  </div>

  <!-- Submit Button -->
  <div class="col-12 text-center">
    <button type="submit" class="btn btn-primary px-4">Submit</button>
  </div>
  
</div>


</div>
</form>
<a href="{{route('user.data')}}" class="btn text-white bg-success m-auto">View Data</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>