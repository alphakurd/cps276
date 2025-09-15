<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Form Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="container py-4">
  <h1 class="h3 mb-4">Form Project</h1>

  <form method="post" action="#" class="row g-3">
    <div class="col-md-6">
      <label for="firstName" class="form-label">First Name</label>
      <input type="text" class="form-control" id="firstName" name="firstName" required />
    </div>
    <div class="col-md-6">
      <label for="lastName" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="lastName" name="lastName" required />
    </div>

    <div class="col-12">
      <label for="address" class="form-label">Address</label>
      <input type="text" class="form-control" id="address" name="address" required />
    </div>

    <div class="col-md-6">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" id="city" name="city" required />
    </div>
    <div class="col-md-3">
      <label for="state" class="form-label">State</label>
      <select id="state" name="state" class="form-select" required>
        <option value="CA">California</option>
        <option value="FL">Florida</option>
        <option value="MI" selected>Michigan</option>
        <option value="NY">New York</option>
        <option value="TX">Texas</option>
      </select>
    </div>
    <div class="col-md-3">
      <label for="zip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="zip" name="zip"
             maxlength="5" pattern="\d{5}" inputmode="numeric" required />
    </div>

    <div class="col-md-6">
      <label for="phone" class="form-label">Phone</label>
      <input type="tel" class="form-control" id="phone" name="phone" required />
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required />
    </div>

    <div class="col-12">
      <fieldset>
        <legend class="col-form-label pt-0">Preferred method of contact</legend>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="preferred_contact" id="contactEmail" value="email" required>
          <label class="form-check-label" for="contactEmail">Email</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="preferred_contact" id="contactText" value="text" required>
          <label class="form-check-label" for="contactText">Text</label>
        </div>
      </fieldset>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>
</body>
</html>
